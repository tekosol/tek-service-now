<?php

namespace Glpi\Plugin\Suggest;

use CommonGLPI;
use Ticket;
use Html;

class Chat extends CommonGLPI {

   public static function getTypeName($nb = 0) {
      return 'AI Chat';
   }

   public function getTabNameForItem(CommonGLPI $item, $withtemplate = 0) {
      if ($item->getType() == 'Ticket') {
         return 'AI Chat';
      }
      return '';
   }

   public static function displayTabContentForItem(\CommonGLPI $item, $tabnum = 1, $withtemplate = 0) {
      $id = $item->getID();
      $summary = addslashes($item->fields['name'] ?? '');
      $description = addslashes($item->fields['content'] ?? '');
      $csrf = \Session::getNewCSRFToken();

      echo "
      <div id='ai-chat-container' style='height: 500px; display: flex; flex-direction: column; background: #f8f9fa; border-radius: 8px; overflow: hidden; font-family: sans-serif;'>
         <div style='background: #007bff; color: white; padding: 15px; font-weight: bold; display: flex; align-items: center;'>
            <span style='flex-grow: 1;'>AI Assistant - Troubleshooting (GLPI 11)</span>
            <span id='chat-status' style='font-size: 0.8em; opacity: 0.8;'>Ready</span>
         </div>
         
         <div id='chat-messages' style='flex-grow: 1; padding: 20px; overflow-y: auto; display: flex; flex-direction: column; gap: 15px;'>
            <div style='background: #e9ecef; padding: 12px; border-radius: 12px 12px 12px 0; max-width: 80%; align-self: flex-start;'>
               Hello! I am your GLPI 11 AI Assistant. I can help you troubleshoot this ticket.
            </div>
         </div>

         <div id='chat-input-container' style='display: none; padding: 15px; background: white; border-top: 1px solid #dee2e6; gap: 10px;'>
            <input type='text' id='chat-input' placeholder='Ask a question...' style='flex-grow: 1; border: 1px solid #ced4da; border-radius: 20px; padding: 10px 15px; outline: none;'>
            <button id='chat-send' style='background: #007bff; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; cursor: pointer; display: flex; align-items: center; justify-content: center;'>
               <svg viewBox='0 0 24 24' width='20' height='20' fill='white'><path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'/></svg>
            </button>
         </div>
      </div>

      <script>
      (function() {
         const chatMessages = document.getElementById('chat-messages');
         const chatInput = document.getElementById('chat-input');
         const chatSend = document.getElementById('chat-send');
         const chatStatus = document.getElementById('chat-status');

         function addMessage(text, isUser = false) {
            const msg = document.createElement('div');
            msg.style.padding = '12px';
            msg.style.borderRadius = '12px';
            msg.style.maxWidth = '80%';
            msg.style.lineHeight = '1.4';
            
            if (isUser) {
               msg.style.background = '#007bff';
               msg.style.color = 'white';
               msg.style.alignSelf = 'flex-end';
               msg.style.borderRadius = '12px 12px 0 12px';
            } else {
               msg.style.background = '#e9ecef';
               msg.style.color = 'black';
               msg.style.alignSelf = 'flex-start';
               msg.style.borderRadius = '12px 12px 12px 0';
            }
            
            msg.innerText = text;
            chatMessages.appendChild(msg);
            chatMessages.scrollTop = chatMessages.scrollHeight;
         }

         async function sendAutoSearch() {
            const textToSearch = \"$summary \" + \"$description\";
            if (!textToSearch.trim()) {
                addMessage(\"No ticket title or description provided. Cannot search KB.\", false);
                return;
            }

            chatStatus.innerText = 'Searching Knowledge Base...';

            try {
               const response = await fetch('../plugins/suggest/ajax/chat.php', {
                  method: 'POST',
                  credentials: 'same-origin',
                  headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                  body: 'query=' + encodeURIComponent(textToSearch) + '&tickets_id=$id&_glpi_csrf_token=$csrf'
               });
               
               const data = await response.json();
               if (data.answer) {
                   addMessage(data.answer);
               } else {
                   addMessage('Error: ' + JSON.stringify(data));
               }

            } catch (err) {
               console.error('KB Search Error:', err);
               addMessage('Error communicating with AI: ' + err.message);
            } finally {
               chatStatus.innerText = 'Ready';
            }
         }

         // Auto-trigger the search
         setTimeout(sendAutoSearch, 500);

      })();
      </script>
      ";
   }
}
