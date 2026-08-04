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

/* pages/admin/form/form_question.html.twig */
class __TwigTemplate_a55a9117d054516f68fb54ac4bf7f9b0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 40
        yield "
";
        // line 41
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 41)->unwrap();
        // line 42
        yield "
";
        // line 43
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 48
        yield "
<section
    role=\"option\"
    class=\"d-flex\"
    data-glpi-form-editor-block
    data-glpi-form-editor-question
    data-glpi-form-editor-condition-type=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "QUESTION", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
    data-glpi-draggable-item
    aria-label=\"";
        // line 56
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true)));
        yield "\"
>
    <section
        data-glpi-form-editor-on-click=\"set-active\"
        data-glpi-form-editor-question-details
        data-glpi-form-editor-allow-anonymous=\"";
        // line 61
        yield ((( !($context["allow_unauthenticated_access"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 61))) ? (1) : (0));
        yield "\"
        class=\"card flex-grow-1\"
        aria-label=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question details"), "html", null, true);
        yield "\"
    >
        <div
            class=\"card-status-start bg-primary\"
            data-glpi-form-editor-active-question-status-indicator
        ></div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <i
                    class=\"glpi-form-editor-question-handle ti ti-grip-horizontal cursor-grab ms-auto me-auto mt-n3 mb-n2\"
                    data-glpi-form-editor-question-handle
                    draggable=\"true\"
                    data-glpi-form-editor-state-action
                ></i>
            </div>
            ";
        // line 79
        yield "            <div class=\"d-flex mt-n1 align-items-center\">
                <i
                    class=\"ti ti-alert-triangle text-warning me-2 ";
        // line 81
        yield (((($context["allow_unauthenticated_access"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 81))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-form-editor-blacklisted-question-type-warning
                    data-bs-toggle=\"popover\"
                    data-bs-trigger=\"hover\"
                    data-bs-placement=\"top\"
                    data-bs-html=\"true\"
                    data-bs-content=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The current access policy allows unauthenticated access to this form, but this question type will be hidden to unauthenticated users."), "html", null, true);
        yield "\"
                ></i>
                <input
                    title=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question name"), "html", null, true);
        yield "\"
                    class=\"form-control content-editable-h2 mb-0\"
                    type=\"text\"
                    name=\"name\"
                    value=\"";
        // line 94
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-dynamic-input
                    data-glpi-form-editor-question-details-name
                    maxlength=\"255\"
                />

                ";
        // line 101
        if ((null === ($context["question"] ?? null))) {
            // line 102
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 102);
            // line 103
            yield "                ";
        } else {
            // line 104
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getConfiguredVisibilityStrategy", [], "method", false, false, false, 104);
            // line 105
            yield "                ";
        }
        // line 106
        yield "
                <div class=\"ms-auto\"></div>

                ";
        // line 110
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_validation_dropdown.html.twig", ["item" =>         // line 111
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 113
        yield "

                ";
        // line 116
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 117
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 119
        yield "

                ";
        // line 122
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-copy ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"duplicate-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 134
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-trash ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"delete-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 147
        yield "                <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
                    <i
                        class=\"ti ti-dots-vertical show\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        role=\"button\"
                        title=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                        data-glpi-form-editor-state-action
                    ></i>
                    <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                            >
                                <i class=\"ti ti-eye-cog me-2\"></i>
                                <span>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-validation-dropdown\"
                            >
                                <i class=\"ti ti-checks me-2\"></i>
                                <span>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure validation"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"copy-uuid\"
                            >
                                <i class=\"ti ti-id-badge me-2\"></i>
                                <span>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy uuid"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        // line 192
        yield "            <div
                class=\"content-editable-tinymce mt-2\"
                data-glpi-form-editor-question-description
                ";
        // line 196
        yield "                ";
        yield ((((null === ($context["question"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 196), "description", [], "any", false, false, false, 196)) == 0))) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 198
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 198, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 200
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 200), "description", [], "any", false, false, false, 200)) : ("")), __("Description"), Twig\Extension\CoreExtension::merge(        // line 202
($context["base_field_options"] ?? null), ["placeholder" => __("Add a description"), "aria_label" => __("Question description"), "enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 211
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 214
        yield "
            </div>

            ";
        // line 218
        yield "            <div
                class=\"mt-2 ms-1\"
                data-glpi-form-editor-question-type-specific
            >
                ";
        // line 222
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationTemplate", [($context["question"] ?? null)], "method", false, false, false, 222);
        yield "
            </div>

            <div
                class=\"d-flex flex-wrap align-items-center gap-2 mt-2 ms-1\"
                data-glpi-form-editor-question-extra-details
                data-fix-dropdown-flex
            >
                ";
        // line 231
        yield "                ";
        $context["base_attributes"] = (((null === ($context["question"] ?? null))) ? ([]) : (["glpi-loaded" => "false"]));
        // line 232
        yield "
                <div class=\"question-type-dropdown-group\">
                    ";
        // line 234
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 234, $this->getSourceContext())->macro_dropdownArrayField(...["_type_category", CoreExtension::getAttribute($this->env, $this->source,         // line 236
($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 236)], "method", false, false, false, 236), CoreExtension::getAttribute($this->env, $this->source,         // line 237
($context["question_types_manager"] ?? null), "getCategoriesDropdownValues", [], "method", false, false, false, 237), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => "", "class" => "form-select form-select-sm", "width" => "auto", "dropdownCssClass" => "question-type-dropdown-group-dropdown-select", "aria_label" => __("Question type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type-category"],         // line 250
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 251
($context["question_types_manager"] ?? null), "getTemplateSelectionForCategories", [], "method", false, false, false, 251), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 252
($context["question_types_manager"] ?? null), "getTemplateResultForCategories", [], "method", false, false, false, 252)]]);
        // line 254
        yield "

                    ";
        // line 256
        $context["types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypesDropdownValuesForCategory", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 256)], "method", false, false, false, 256);
        // line 257
        yield "
                    ";
        // line 258
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 258, $this->getSourceContext())->macro_dropdownArrayField(...["type", get_class(        // line 260
($context["question_type"] ?? null)),         // line 261
($context["types"] ?? null), CoreExtension::getAttribute($this->env, $this->source,         // line 262
($context["question_type"] ?? null), "getName", [], "method", false, false, false, 262), ["init" => false, "no_label" => true, "mb" => "", "field_class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 267
($context["types"] ?? null)) == 1)) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "aria_label" => __("Question sub type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type", "glpi-form-editor-question-type-selector" => ""],         // line 275
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 276
($context["question_types_manager"] ?? null), "getTemplateSelectionForQuestionTypes", [], "method", false, false, false, 276), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 277
($context["question_types_manager"] ?? null), "getTemplateResultForQuestionTypes", [], "method", false, false, false, 277)]]);
        // line 279
        yield "

                    ";
        // line 281
        $context["sub_types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 281);
        // line 282
        yield "                    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 282, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 283
($context["question_type"] ?? null), "getSubTypeFieldName", [], "method", false, false, false, 283), CoreExtension::getAttribute($this->env, $this->source,         // line 284
($context["question_type"] ?? null), "getSubTypeDefaultValue", [($context["question"] ?? null)], "method", false, false, false, 284), CoreExtension::getAttribute($this->env, $this->source,         // line 285
($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 285), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => ((Twig\Extension\CoreExtension::testEmpty(        // line 291
($context["sub_types"] ?? null))) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "disabled" => Twig\Extension\CoreExtension::testEmpty(        // line 294
($context["sub_types"] ?? null)), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 295
($context["question_type"] ?? null), "getSubTypeFieldAriaLabel", [], "method", false, false, false, 295), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-sub-type", "glpi-form-editor-question-sub-type-selector" => "", "glpi-form-editor-specific-question-extra-data" => ""],         // line 300
($context["base_attributes"] ?? null))]]);
        // line 302
        yield "
                </div>

                ";
        // line 306
        yield "                <div class=\"ms-auto\" data-glpi-form-editor-specific-question-options data-glpi-form-editor-question-extra-details>
                    ";
        // line 307
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationOptionsTemplate", [($context["question"] ?? null)], "method", false, false, false, 307);
        yield "
                </div>

                <label class=\"form-check form-switch ms-2 mb-0 cursor-pointer\">
                    <input type=\"hidden\" value=\"0\" name=\"is_mandatory\">
                    <input
                        class=\"form-check-input\"
                        name=\"is_mandatory\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
        // line 317
        yield ((( !(null === ($context["question"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 317), "is_mandatory", [], "any", false, false, false, 317))) ? ("checked") : (""));
        yield "
                    >
                    <span class=\"form-check-label\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield "</span>
                </label>
            </div>
        </div>

        ";
        // line 325
        yield "        <input
            type=\"hidden\"
            name=\"uuid\"
            value=\"";
        // line 328
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 328), "uuid", [], "any", false, false, false, 328), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"forms_sections_uuid\"
            value=\"";
        // line 333
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 333), "uuid", [], "any", false, false, false, 333), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"vertical_rank\"
            value=\"";
        // line 338
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 338), "vertical_rank", [], "any", false, false, false, 338), "html", null, true)) : (0));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"horizontal_rank\"
            value=\"";
        // line 343
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 343), "horizontal_rank", [], "any", false, false, false, 343), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape( -1, "html", null, true)));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"category\"
            value=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 348)], "method", false, false, false, 348), "html", null, true);
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"type\"
            value=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("class", ($context["question_type"] ?? null)), "html", null, true);
        yield "\"
        />
    </section>

    <div data-glpi-form-editor-question-extra-details>
        ";
        // line 358
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 359
($context["can_update"] ?? null), "form" =>         // line 360
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 362
        yield "
    </div>
    <div data-glpi-form-editor-question-drag-merge></div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_question.html.twig";
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
        return array (  444 => 362,  442 => 360,  441 => 359,  440 => 358,  432 => 353,  424 => 348,  416 => 343,  408 => 338,  400 => 333,  392 => 328,  387 => 325,  379 => 319,  374 => 317,  361 => 307,  358 => 306,  353 => 302,  351 => 300,  350 => 295,  349 => 294,  348 => 291,  347 => 285,  346 => 284,  345 => 283,  343 => 282,  341 => 281,  337 => 279,  335 => 277,  334 => 276,  333 => 275,  332 => 267,  331 => 262,  330 => 261,  329 => 260,  328 => 258,  325 => 257,  323 => 256,  319 => 254,  317 => 252,  316 => 251,  315 => 250,  314 => 237,  313 => 236,  312 => 234,  308 => 232,  305 => 231,  294 => 222,  288 => 218,  283 => 214,  281 => 211,  280 => 202,  279 => 200,  278 => 198,  272 => 196,  267 => 192,  257 => 184,  244 => 174,  231 => 164,  217 => 153,  209 => 147,  200 => 140,  196 => 139,  189 => 134,  180 => 127,  173 => 122,  169 => 119,  167 => 117,  165 => 116,  161 => 113,  159 => 111,  157 => 110,  152 => 106,  149 => 105,  146 => 104,  143 => 103,  140 => 102,  138 => 101,  129 => 95,  125 => 94,  118 => 90,  112 => 87,  103 => 81,  99 => 79,  81 => 63,  76 => 61,  68 => 56,  63 => 54,  55 => 48,  53 => 43,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_question.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_question.html.twig");
    }
}
