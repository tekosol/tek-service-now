<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2025 Teclib' and contributors.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

namespace Glpi\Controller\Form;

use Glpi\Controller\AbstractController;
use Glpi\Exception\Http\AccessDeniedHttpException;
use Glpi\Exception\Http\BadRequestHttpException;
use Glpi\Exception\Http\NotFoundHttpException;
use Glpi\Form\AccessControl\FormAccessControlManager;
use Glpi\Form\AccessControl\FormAccessParameters;
use Glpi\Form\Dropdown\FormActorsDropdown;
use Glpi\Form\Form;
use Glpi\Http\Firewall;
use Glpi\Security\Attribute\SecurityStrategy;
use Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QuestionActorsDropdownController extends AbstractController
{
    #[Route(
        "/Form/Question/ActorsDropdown",
        name: "glpi_form_question_actors_dropdown_value",
        methods: "POST"
    )]
    #[SecurityStrategy(Firewall::STRATEGY_AUTHENTICATED)]
    public function __invoke(Request $request): Response
    {
        $this->checkFormAccessPolicies($request);

        $right_for_users = $request->request->getString('right_for_users', 'all');

        // Security: If the client claims the right is 'observer_selfservice' OR if we are
        // on the helpdesk interface AND the allowed_types contain User, enforce the restriction
        // server-side. This prevents a malicious user from changing the POST param to 'all'.
        $allowed_types = $request->request->all('allowed_types');
        if (Session::getCurrentInterface() === 'helpdesk' && in_array(\User::class, $allowed_types)) {
            // Check if the requested right indicates an observer context
            if (in_array($right_for_users, ['observer_selfservice', 'all'])) {
                $right_for_users = 'observer_selfservice';
            }
        }

        $options = [
            'allowed_types'    => $allowed_types,
            'right_for_users'  => $right_for_users,
            'group_conditions' => $request->request->all('group_conditions'),
            'page'             => $request->request->getInt('page', 1),
            'page_size'        => $request->request->getInt('page_limit', -1),
        ];

        return new JsonResponse(
            FormActorsDropdown::fetchValues(
                $request->request->getString('searchText'),
                $options
            )
        );
    }

    private function loadTargetForm(Request $request): Form
    {
        $forms_id = (int) $request->request->getInt('form_id');
        if (!$forms_id) {
            throw new BadRequestHttpException();
        }

        $form = Form::getById($forms_id);
        if (!$form instanceof Form) {
            throw new NotFoundHttpException();
        }

        return $form;
    }

    private function checkFormAccessPolicies(Request $request): void
    {
        $form_access_manager = FormAccessControlManager::getInstance();

        if (!Session::haveRight(Form::$rightname, READ)) {
            $form = $this->loadTargetForm($request);

            // Load current user session info and URL parameters.
            $parameters = new FormAccessParameters(
                session_info: Session::getCurrentSessionInfo(),
                url_parameters: $request->query->all(),
            );

            if (!$form_access_manager->canAnswerForm($form, $parameters)) {
                throw new AccessDeniedHttpException();
            }
        }
    }
}
