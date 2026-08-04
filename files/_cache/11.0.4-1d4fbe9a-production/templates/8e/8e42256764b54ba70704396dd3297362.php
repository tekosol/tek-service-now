<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/setup/mailcollector/setup_form.html.twig */
class __TwigTemplate_bb43f057d56ee93a7a2c148ea496e938 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 37
        $context["params"] = Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["addbuttons" => ["get_mails" => ["text" => _x("button", "Get email tickets now"), "add_attribs" => ["data-block-on-unsaved" => "true"]]], "formoptions" => "data-track-changes=\"true\""]);
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "   ";
        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["errors"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      <div class=\"alert alert-danger\">
         ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Error", "Errors", Session::getPluralNumber()), (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["errors"] ?? null) : null)), "html", null, true);
            // line 55
            yield "
      </div>
   ";
        }
        // line 58
        yield "
   ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 59, $this->getSourceContext())->macro_textField(...["name", (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), __("Name"), ["helper" => __("If the name is a valid email address, it will be automatically added to blacklisted senders.")]]);
        // line 65
        yield "

   ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 67, $this->getSourceContext())->macro_textareaField(...["comment", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["comment"] ?? null) : null), __("Comments")]);
        // line 71
        yield "

   ";
        // line 73
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 73, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_active"] ?? null) : null), __("Active")]);
        // line 77
        yield "

   ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 79, $this->getSourceContext())->macro_nullField(...[]);
        yield "

   ";
        // line 81
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 81, $this->getSourceContext())->macro_smallTitle(...[__("Server configuration")]);
        yield "

   ";
        // line 83
        $context["host"] = (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["host"] ?? null) : null);
        // line 84
        yield "   ";
        $context["connect_opts"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::parseMailServerConnectString", [        // line 86
($context["host"] ?? null)]);
        // line 88
        yield "
   ";
        // line 89
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/setup/mailcollector/server_config_fields.html.twig", ["connect_opts" =>         // line 90
($context["connect_opts"] ?? null), "connect_string" =>         // line 91
($context["host"] ?? null), "protocol_choices" =>         // line 92
($context["protocol_choices"] ?? null)]);
        // line 93
        yield "

   ";
        // line 95
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 95, $this->getSourceContext())->macro_smallTitle(...[__("Authentication")]);
        yield "

   ";
        // line 97
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 97, $this->getSourceContext())->macro_textField(...["login", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["login"] ?? null) : null), __("Login")]);
        // line 101
        yield "

   ";
        // line 103
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 103, $this->getSourceContext())->macro_nullField(...[]);
        yield "

   ";
        // line 105
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 105, $this->getSourceContext())->macro_passwordField(...["passwd", "", __("Password"), ["clearable" =>  !CoreExtension::getAttribute($this->env, $this->source,         // line 109
($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 109), "additional_attributes" => ["autocomplete" => "new-password"]]]);
        // line 114
        yield "

   ";
        // line 116
        if (((($_v7 = ($context["connect_opts"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null) != "pop")) {
            // line 117
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 117, $this->getSourceContext())->macro_smallTitle(...[__("Folders setup")]);
            yield "
      ";
            // line 118
            $context["get_imap_folder_btn"] = new Markup("         <div class=\"btn btn-outline-secondary get-imap-folder cursor-pointer\">
            <i class=\"ti ti-list\"></i>
         </div>
      ", $this->env->getCharset());
            // line 123
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 123, $this->getSourceContext())->macro_textField(...["server_mailbox", (($_v8 =             // line 125
($context["connect_opts"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["mailbox"] ?? null) : null), __("Incoming mail folder (optional, often INBOX)"), ["add_field_html" =>             // line 127
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 130
            yield "
      ";
            // line 131
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 131, $this->getSourceContext())->macro_nullField(...[]);
            yield "
      ";
            // line 132
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 132, $this->getSourceContext())->macro_textField(...["accepted", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["accepted"] ?? null) : null), __("Accepted mail archive folder (optional)"), ["add_field_html" =>             // line 136
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 139
            yield "
      ";
            // line 140
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 140, $this->getSourceContext())->macro_textField(...["refused", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 142
($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["refused"] ?? null) : null), __("Refused mail archive folder (optional)"), ["add_field_html" =>             // line 144
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 147
            yield "
   ";
        }
        // line 149
        yield "
   ";
        // line 150
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 150, $this->getSourceContext())->macro_smallTitle(...[__("Collection options")]);
        yield "
   ";
        // line 151
        $context["max_filesize_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 152
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("MailCollector::showMaxFilesize", ["filesize_max", (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["filesize_max"] ?? null) : null)]);
            // line 153
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 154, $this->getSourceContext())->macro_htmlField(...["",         // line 156
($context["max_filesize_dropdown"] ?? null), __("Maximum size of each file imported by the mails receiver"),         // line 158
($context["field_options"] ?? null)]);
        // line 159
        yield "
   ";
        // line 160
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 160, $this->getSourceContext())->macro_dropdownYesNo(...["use_mail_date", (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 162
($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["use_mail_date"] ?? null) : null), __("Use mail date, instead of collect one")]);
        // line 164
        yield "
   ";
        // line 165
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 165, $this->getSourceContext())->macro_dropdownArrayField(...["requester_field", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,         // line 167
($context["item"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["requester_field"] ?? null) : null), [Twig\Extension\CoreExtension::constant("MailCollector::REQUESTER_FIELD_FROM") => __("No"), Twig\Extension\CoreExtension::constant("MailCollector::REQUESTER_FIELD_REPLY_TO") => __("Yes")], __("Use Reply-To as requester (when available)")]);
        // line 172
        yield "
   ";
        // line 173
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 173, $this->getSourceContext())->macro_dropdownYesNo(...["add_to_to_observer", (($_v14 = CoreExtension::getAttribute($this->env, $this->source,         // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["add_to_to_observer"] ?? null) : null), __("Add TO users as observer")]);
        // line 177
        yield "
   ";
        // line 178
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 178, $this->getSourceContext())->macro_dropdownYesNo(...["add_cc_to_observer", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,         // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["add_cc_to_observer"] ?? null) : null), __("Add CC users as observer")]);
        // line 182
        yield "
   ";
        // line 183
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 183, $this->getSourceContext())->macro_dropdownYesNo(...["collect_only_unread", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,         // line 185
($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["collect_only_unread"] ?? null) : null), __("Collect only unread mail")]);
        // line 187
        yield "

   ";
        // line 189
        $context["create_user_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 190
            yield "      ";
            if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("is_users_auto_add")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "         ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If you use this option, and this collector is likely to receive requests from users authenticating via LDAP, we advise you to activate the option \"Automatically add users from an external authentication source\", in the Authentication settings in order to avoid the generation of duplicate users."), "html", null, true);
                yield "
      ";
            }
            // line 193
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 194
        yield "
   ";
        // line 195
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 195, $this->getSourceContext())->macro_dropdownYesNo(...["create_user_from_email", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,         // line 197
($context["item"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["create_user_from_email"] ?? null) : null), __("Automatically create user from email"), ["helper" => Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::trim(        // line 199
($context["create_user_helper"] ?? null)), null)]]);
        // line 201
        yield "

   ";
        // line 203
        if (((($_v18 = ($context["connect_opts"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["type"] ?? null) : null) != "pop")) {
            // line 204
            yield "      <script>
          \$(function() {
              \$(document).on('click', '.get-imap-folder', function() {
                  const input = \$(this).prev('input');

                  let data = 'action=getFoldersList';
                  data += '&input_id=' + input.attr('id');
                  // Get form values without server_mailbox value to prevent filtering
                  data += '&' + \$(this).closest('form').find(':not([name=\\\"server_mailbox\\\"])').serialize();
                  // Force empty value for server_mailbox
                  data += '&server_mailbox=';

                  // In some case (like oauth imap) provide password is not possible
                  // So, ask for password only if there is one stored in database
                  var passwdField = \$(this).closest('form').find('input[name=\"passwd\"]');
                  var hasStoredPassword = ";
            // line 219
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 219), "passwd", [], "array", true, true, false, 219) && (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["passwd"] ?? null) : null))) ? ("true") : ("false"));
            yield ";
                  if (hasStoredPassword && passwdField.val() == '') {
                     var passwd = prompt(__('Please enter password to list folders'));
                     data += '&passwd=' + encodeURIComponent(passwd);
                  }

                  glpi_ajax_dialog({
                      title: __('Select a folder'),
                      url: '";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/mailcollector.php"), "html", null, true);
            yield "',
                      params: data,
                      id: input.attr('id') + '_modal'
                  });
              });

              \$(document).on('click', '.select_folder li', function(event) {
                  event.stopPropagation();

                  const li       = \$(this);
                  const input_id = li.data('input-id');
                  const folder   = li.children('.folder-name').data('globalname');

                  let _label = '';
                  const _parents = li.parents('li').children('.folder-name');
                  for (i = _parents.length -1 ; i >= 0; i--) {
                      _label += \$(_parents[i]).data('globalname') + '/';
                  }
                  _label += folder;

                  \$('#'+input_id).val(_label);

                  const modalEl = \$('#'+input_id+'_modal')[0];
                  const modal = bootstrap.Modal.getInstance(modalEl);
                  modal.hide();
              })
          });
      </script>
   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/mailcollector/setup_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  305 => 227,  294 => 219,  277 => 204,  275 => 203,  271 => 201,  269 => 199,  268 => 197,  267 => 195,  264 => 194,  260 => 193,  254 => 191,  251 => 190,  249 => 189,  245 => 187,  243 => 185,  242 => 183,  239 => 182,  237 => 180,  236 => 178,  233 => 177,  231 => 175,  230 => 173,  227 => 172,  225 => 167,  224 => 165,  221 => 164,  219 => 162,  218 => 160,  215 => 159,  213 => 158,  212 => 156,  210 => 154,  206 => 153,  203 => 152,  201 => 151,  197 => 150,  194 => 149,  190 => 147,  188 => 144,  187 => 142,  186 => 140,  183 => 139,  181 => 136,  180 => 134,  179 => 132,  175 => 131,  172 => 130,  170 => 127,  169 => 125,  167 => 123,  162 => 118,  157 => 117,  155 => 116,  151 => 114,  149 => 109,  148 => 105,  143 => 103,  139 => 101,  137 => 99,  136 => 97,  131 => 95,  127 => 93,  125 => 92,  124 => 91,  123 => 90,  122 => 89,  119 => 88,  117 => 86,  115 => 84,  113 => 83,  108 => 81,  103 => 79,  99 => 77,  97 => 75,  96 => 73,  92 => 71,  90 => 69,  89 => 67,  85 => 65,  83 => 61,  82 => 59,  79 => 58,  74 => 55,  72 => 54,  71 => 52,  68 => 51,  65 => 50,  58 => 49,  53 => 33,  51 => 37,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/mailcollector/setup_form.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\setup\\mailcollector\\setup_form.html.twig");
    }
}
