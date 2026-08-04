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

/* pages/admin/form/form_editor.html.twig */
class __TwigTemplate_c8640ac078ddd2bb5b22938f2fcfbd42 extends Template
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
        // line 37
        yield "
";
        // line 38
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 38)->unwrap();
        // line 39
        yield "
";
        // line 40
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 45
        yield "
<form
    id=\"main-form\"
    data-glpi-form-editor-container
    class=\"
        form-editor-container
        d-flex
        flex-column
        ";
        // line 55
        yield "        mt-n2
        mb-n2
        ";
        // line 57
        if ((($tmp =  !($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "            form-editor-readonly
        ";
        }
        // line 60
        yield "    \"
    method=\"POST\"
    action=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 62), "html", null, true);
        yield "\"
    data-ajax-submit ";
        // line 64
        yield "    data-ajax-submit-itemtype=\"Glpi\\Form\\Form\" ";
        // line 65
        yield "    data-track-changes=\"true\"
>

    ";
        // line 69
        yield "    ";
        // line 70
        yield "    ";
        // line 71
        yield "    <div data-glpi-form-editor class=\"form-editor row flex-reverse\">

        <div class=\"designer col-12\">
            <div class=\"row h-full\">
                <div class=\"d-flex\">
                    <div
                        class=\"flex-grow-1 d-flex px-4 py-3 me-6\"
                        data-glpi-form-editor-form
                        data-glpi-form-editor-active-form
                    >
                        <div class=\"flex-grow-1\">
                            <section
                                data-glpi-form-editor-form-details
                                data-glpi-form-editor-on-click=\"set-active\"
                                aria-label=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form details"), "html", null, true);
        yield "\"
                            >
                                ";
        // line 87
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["invalid_questions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        <div class=\"alert-icon\">
                                            <i class=\"ti ti-exclamation-circle\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"alert-heading\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These questions have an unknown type and will be deleted the next time this form is saved:"), "html", null, true);
            yield "</h4>
                                            <div class=\"alert-description\">
                                                <ul class=\"alert-list\">
                                                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["invalid_questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["invalid_question"]) {
                // line 97
                yield "                                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["invalid_question"], "fields", [], "any", false, false, false, 97)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invalid_question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 104
        yield "
                                ";
        // line 106
        yield "                                <div class=\"card form-details\">
                                    <div
                                        class=\"card-status-start bg-primary\"
                                        data-glpi-form-editor-active-form-status-indicator
                                    ></div>
                                    <div class=\"card-body\">

                                        ";
        // line 114
        yield "                                        <div class=\"d-flex\">
                                            ";
        // line 116
        yield "                                            <input
                                                title=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form name"), "html", null, true);
        yield "\"
                                                type=\"text\"
                                                class=\"form-control content-editable-h1\"
                                                name=\"name\"
                                                value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
        yield "\"
                                                data-glpi-form-editor-form-details-name
                                                maxlength=\"255\"
                                            >

                                            ";
        // line 127
        yield "                                            <label class=\"form-check form-switch ms-3\" style=\"margin-top: 2px\">
                                                <input type=\"hidden\" value=\"0\" name=\"is_active\">
                                                <input
                                                    class=\"form-check-input\"
                                                    name=\"is_active\"
                                                    type=\"checkbox\"
                                                    value=\"1\"
                                                    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 134), "is_active", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked ";
        }
        // line 135
        yield "                                                >
                                                <span class=\"form-check-label\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active"), "html", null, true);
        yield "</span>
                                            </label>
                                        </div>

                                        ";
        // line 141
        yield "                                        <div class=\"content-editable-tinymce\" data-glpi-form-editor-header-description>
                                            ";
        // line 142
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 142, $this->getSourceContext())->macro_textareaField(...["header", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 144
($context["item"] ?? null), "fields", [], "any", false, false, false, 144), "header", [], "any", false, false, false, 144), __("Header"), Twig\Extension\CoreExtension::merge(        // line 146
($context["base_field_options"] ?? null), ["enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "mb" => "mb-0", "aria_label" => __("Form description"), "placeholder" => __("Add a description to your form..."), "init" => false, "init_on_demand" => true])]);
        // line 158
        yield "
                                        </div>
                                    </div>
                                </div>
                            </section>

                            ";
        // line 165
        yield "                            <div data-glpi-form-editor-blocks>
                                ";
        // line 166
        $context["number_of_sections"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 166));
        // line 167
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 167));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 168
            yield "                                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 169
($context["item"] ?? null), "section" =>             // line 170
$context["section"], "question_types_manager" =>             // line 171
($context["question_types_manager"] ?? null), "section_index" => CoreExtension::getAttribute($this->env, $this->source,             // line 172
$context["loop"], "index", [], "any", false, false, false, 172), "can_update" =>             // line 173
($context["can_update"] ?? null), "show_section_form" => (            // line 174
($context["number_of_sections"] ?? null) > 1), "number_of_sections" =>             // line 175
($context["number_of_sections"] ?? null), "allow_unauthenticated_access" =>             // line 176
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 178
            yield "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                            </div>
                        </div>

                        <div class=\"mb-3\" data-glpi-form-editor-form-extra-details>
                            ";
        // line 184
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 185
($context["can_update"] ?? null), "form" =>         // line 186
($context["item"] ?? null), "vertical_layout" => true, "extra_class" => "mt-2"], false);
        // line 189
        yield "
                        </div>
                    </div>

                    <section class=\"col-12 col-lg-4 mt-0 p-0 rounded-0 card-footer border-start border-top-0 ms-auto\">
                        <section
                            id=\"glpi-form-properties-accordion\"
                            class=\"accordion open accordion-flush h-full\"
                            aria-label=\"Form properties accordion\"
                        >
                            <section class=\"accordion-item\">
                                <div class=\"accordion-header\" id=\"heading-item-properties\">
                                    <button
                                        class=\"accordion-button\"
                                        type=\"button\"
                                        ";
        // line 205
        yield "                                        ";
        // line 209
        yield "                                        aria-label=\"Properties\"
                                    >
                                        <i class=\"ti ti-alert-circle item-icon\"></i>
                                        <span class=\"item-title\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form properties"), "html", null, true);
        yield "</span>
                                    </button>
                                </div>
                                <section id=\"item-properties\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-item-properties\" data-bs-parent=\"#glpi-form-properties-accordion\">
                                    <div class=\"accordion-body d-flex flex-column\">
                                        <script>
                                            function renderLayoutTemplateResult(data) {
                                                const icons = ";
        // line 219
        yield json_encode(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 219), function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 219) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getIcon", [], "method", false, false, false, 219)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []));
        yield ";

                                                return \$(`<span class=\"w-full d-flex align-items-center gap-2\" title=\"\${_.escape(data.text)}\"\"><i class=\"\${_.escape(icons[data.id])}\"></i>\${_.escape(data.text)}</span>`);
                                            }

                                            function renderLayoutTemplateSelection(data) {
                                                return renderLayoutTemplateResult(data).addClass('flex-row-reverse');
                                            }
                                        </script>

                                        ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

                                        ";
        // line 231
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 231, $this->getSourceContext())->macro_dropdownArrayField(...["render_layout", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 233
($context["item"] ?? null), "fields", [], "any", false, false, false, 233), "render_layout", [], "any", false, false, false, 233), Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 234),         // line 234
function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 234) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getLabel", [], "method", false, false, false, 234)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []), __("Render layout"), ["is_horizontal" => false, "full_width" => true, "templateSelection" => "renderLayoutTemplateSelection", "templateResult" => "renderLayoutTemplateResult", "add_field_attribs" => ["data-fix-dropdown-flex" => ""]]]);
        // line 245
        yield "

                                        ";
        // line 247
        $context["visibility_dropdown_field"] = Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig", ["item" =>         // line 248
($context["item"] ?? null)], false);
        // line 250
        yield "
                                        ";
        // line 251
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 251, $this->getSourceContext())->macro_field(...["",         // line 253
($context["visibility_dropdown_field"] ?? null), __("Conditional visibility for submit button"), ["is_horizontal" => false, "full_width" => true, "add_field_attribs" => ["data-glpi-form-editor-submit-button-conditional-visibility-field" => ""]]]);
        // line 262
        yield "

                                        ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

                                    </div>
                                </section>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class=\"
        editor-footer
        justify-content-end
        d-flex
        flex-row-reverse
        py-2
        px-3
        ";
        // line 285
        yield "        ms-n2
        me-n2
    \">
        ";
        // line 288
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 288), "is_draft", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 289
            yield "            ";
            // line 290
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-plus me-1\"></i>
                <span class=\"d-block add-label\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
            </button>
        ";
        } elseif ((($tmp =         // line 300
($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 301
            yield "            ";
            // line 302
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-device-floppy me-1\"></i>
                <span class=\"d-block save-label\">";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "</span>
            </button>
        ";
        }
        // line 313
        yield "
        ";
        // line 315
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 316
            yield "            <button
                class=\"
                    btn
                    btn-ghost-secondary
                    me-2
                    ";
            // line 321
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 321), "is_deleted", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"restore\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash-off me-1\"></i>";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Restore"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 330
        yield "
        ";
        // line 332
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canPurge", [], "method", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 333
            yield "            <button
                class=\"btn btn-ghost-danger me-2 ";
            // line 334
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 334), "is_deleted", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                type=\"submit\"
                name=\"purge\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 342
        yield "
        ";
        // line 344
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 345
            yield "            ";
            // line 346
            yield "            <button
                class=\"
                    btn
                    btn-ghost-warning
                    me-2
                    ";
            // line 351
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 351), "is_deleted", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                    ";
            // line 352
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 352), "is_draft", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"delete\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Put in trashbin"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 361
        yield "
        ";
        // line 363
        yield "        <div class=\"me-auto\" data-glpi-form-editor-preview-actions>
            <a
                href=\"";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 365), "id", [], "any", false, false, false, 365))), "html", null, true);
        yield "\"
                target=\"_blank\"
                class=\"btn btn-secondary\"
                type=\"button\"
                name=\"preview\"
                form=\"main-form\"
                title=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-preview-action
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "</span>
            </a>
            <button
                class=\"btn btn-secondary d-none\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-on-click=\"queue-preview\"
                data-glpi-form-editor-save-and-preview-action
                data-glpi-form-editor-preview-url=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 385), "id", [], "any", false, false, false, 385))), "html", null, true);
        yield "\"
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "</span>
            </button>
        </div>
    </div>

    ";
        // line 394
        yield "    <input type=\"hidden\" name=\"id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        yield "\">

    ";
        // line 397
        yield "    <input type=\"hidden\" name=\"uuid\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 397), "uuid", [], "any", false, false, false, 397), "html", null, true);
        yield "\">

    ";
        // line 400
        yield "    <input type=\"hidden\" name=\"_delete_missing_questions\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_sections\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_comments\" value=\"1\">

    ";
        // line 405
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 405), "is_draft", [], "any", false, false, false, 405)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 406
            yield "        <input type=\"hidden\" name=\"is_draft\" value=\"0\">
    ";
        }
        // line 408
        yield "
    ";
        // line 410
        yield "
    ";
        // line 412
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/move_section_modal.html.twig");
        yield "

    ";
        // line 415
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/item_has_conditions_for_deletion_modal.html.twig");
        yield "
    ";
        // line 416
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig");
        yield "
    ";
        // line 417
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/section_element_has_conditions_for_deletion_modal.html.twig");
        yield "

    ";
        // line 420
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/delete_non_empty_section_modal.html.twig");
        yield "
</form>

";
        // line 423
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 424
            yield "    ";
            // line 425
            yield "    <div data-glpi-form-editor-templates class=\"d-none\">

        ";
            // line 428
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 428));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 429
                yield "            <div data-glpi-form-editor-question-template=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\">
                ";
                // line 431
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_question.html.twig", ["form" =>                 // line 432
($context["item"] ?? null), "question_types_manager" =>                 // line 433
($context["question_types_manager"] ?? null), "question_type" =>                 // line 434
$context["question_type"], "question" => null, "section" => null, "can_update" => true, "allow_unauthenticated_access" =>                 // line 438
($context["allow_unauthenticated_access"] ?? null)], false);
                // line 439
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            yield "
        ";
            // line 444
            yield "        <div data-glpi-form-editor-comment-template>
            ";
            // line 445
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_comment.html.twig", ["form" =>             // line 446
($context["item"] ?? null), "section" => null, "can_update" => true], false);
            // line 449
            yield "
        </div>

        ";
            // line 453
            yield "        <div data-glpi-form-editor-section-template>
            ";
            // line 454
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 455
($context["item"] ?? null), "section" => null, "can_update" => true, "show_section_form" => true, "number_of_sections" => 0, "allow_unauthenticated_access" =>             // line 460
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 461
            yield "
        </div>

        ";
            // line 465
            yield "        <div data-glpi-form-editor-horizontal-block-template>
            ";
            // line 466
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block.html.twig", ["blocks" => null, "can_update" => true, "form" =>             // line 469
($context["item"] ?? null), "allow_unauthenticated_access" =>             // line 470
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 471
            yield "
        </div>

        ";
            // line 475
            yield "        <div data-glpi-form-editor-horizontal-block-placeholder-template>
            ";
            // line 476
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" => true, "form" =>             // line 478
($context["item"] ?? null)], false);
            // line 479
            yield "
        </div>

        ";
            // line 483
            yield "        <select data-glpi-form-editor-question-types-values>
            ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 484));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 485
                yield "                ";
                $context["parent_category"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source,                 // line 486
$context["question_type"], "getCategory", [], "method", false, false, false, 486)], "method", false, false, false, 485);
                // line 488
                yield "                <option
                    data-glpi-form-editor-question-type=\"";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parent_category"] ?? null), "html", null, true);
                yield "\"
                    value=\"";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\"
                >
                    ";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getName", [], "method", false, false, false, 492), "html", null, true);
                yield "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            yield "        </select>

    </div>
";
        }
        // line 499
        yield "
<script defer type=\"module\">
(async () => {
    const modules = await Promise.all([
        import(\"/js/modules/Forms/EditorController.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedDefaultValue.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedSelectableDefaultValue.js\")
    ]);
    const GlpiFormEditorController = modules[0].GlpiFormEditorController;
    const EditorConvertedExtractedDefaultValue = modules[1].GlpiFormEditorConvertedExtractedDefaultValue;
    const EditorConvertedExtractedSelectableDefaultValue = modules[2].GlpiFormEditorConvertedExtractedSelectableDefaultValue;

    const container_selector = \"[data-glpi-form-editor-container]\";
    const controller = new GlpiFormEditorController(
        container_selector,
        ";
        // line 514
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 514), "is_draft", [], "any", false, false, false, 514)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
        \"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getDefaultTypeClass", [], "method", false, false, false, 515), "js"), "html", null, true);
        yield "\",
        \"[data-glpi-form-editor-templates]\",
        ";
        // line 517
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getDestinations", [], "method", false, false, false, 517), function ($__destination__) use ($context, $macros) { $context["destination"] = $__destination__; return ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 518
($context["destination"] ?? null), "fields", [], "any", false, false, false, 518), "id", [], "any", false, false, false, 518), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 519
($context["destination"] ?? null), "fields", [], "any", false, false, false, 519), "name", [], "any", false, false, false, 519), "conditions" => CoreExtension::getAttribute($this->env, $this->source,         // line 520
($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 520)]; }));
        // line 521
        yield ",
        ";
        // line 522
        yield (((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
        yield ", // is_readonly
    );

    // Temporary solution, would be better to import it directly where it is needed but the current
    // design doesn't allow it.
    \$(container_selector).data('EditorConvertedExtractedDefaultValue', EditorConvertedExtractedDefaultValue);
    \$(container_selector).data('EditorConvertedExtractedSelectableDefaultValue', EditorConvertedExtractedSelectableDefaultValue);

    ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 530));
        foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
            // line 531
            yield "        controller.registerQuestionTypeOptions(
            '";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
            yield "',
            ";
            // line 533
            yield CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getFormEditorJsOptions", [], "method", false, false, false, 533);
            yield "
        );

        ";
            // line 536
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 536))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 537
                yield "            controller.registerQuestionSubTypesOptions(
                '";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
                yield "',
                {
                    'subtypes'        : ";
                // line 540
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 540));
                yield ",
                    'default_value'   : '";
                // line 541
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeDefaultValue", [null], "method", false, false, false, 541), "js"), "html", null, true);
                yield "',
                    'field_name'      : '";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldName", [], "method", false, false, false, 542), "js"), "html", null, true);
                yield "',
                    'field_aria_label': '";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldAriaLabel", [], "method", false, false, false, 543), "js"), "html", null, true);
                yield "',
                }
            )
        ";
            }
            // line 547
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 548
        yield "
    \$(container_selector).data('controller', controller);
    \$(container_selector).addClass(\"initialized\");
    \$(container_selector).trigger(\"initialized\");
})();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_editor.html.twig";
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
        return array (  838 => 548,  832 => 547,  825 => 543,  821 => 542,  817 => 541,  813 => 540,  808 => 538,  805 => 537,  803 => 536,  797 => 533,  793 => 532,  790 => 531,  786 => 530,  775 => 522,  772 => 521,  770 => 520,  769 => 519,  768 => 518,  767 => 517,  762 => 515,  758 => 514,  741 => 499,  735 => 495,  726 => 492,  721 => 490,  717 => 489,  714 => 488,  712 => 486,  710 => 485,  706 => 484,  703 => 483,  698 => 479,  696 => 478,  695 => 476,  692 => 475,  687 => 471,  685 => 470,  684 => 469,  683 => 466,  680 => 465,  675 => 461,  673 => 460,  672 => 455,  671 => 454,  668 => 453,  663 => 449,  661 => 446,  660 => 445,  657 => 444,  654 => 442,  646 => 439,  644 => 438,  643 => 434,  642 => 433,  641 => 432,  639 => 431,  634 => 429,  629 => 428,  625 => 425,  623 => 424,  621 => 423,  614 => 420,  609 => 417,  605 => 416,  600 => 415,  594 => 412,  591 => 410,  588 => 408,  584 => 406,  581 => 405,  575 => 400,  569 => 397,  563 => 394,  555 => 388,  549 => 385,  543 => 382,  533 => 375,  526 => 371,  517 => 365,  513 => 363,  510 => 361,  504 => 358,  495 => 352,  491 => 351,  484 => 346,  482 => 345,  479 => 344,  476 => 342,  470 => 339,  462 => 334,  459 => 333,  456 => 332,  453 => 330,  447 => 327,  438 => 321,  431 => 316,  428 => 315,  425 => 313,  419 => 310,  413 => 307,  406 => 302,  404 => 301,  402 => 300,  397 => 298,  391 => 295,  384 => 290,  382 => 289,  380 => 288,  375 => 285,  353 => 264,  349 => 262,  347 => 253,  346 => 251,  343 => 250,  341 => 248,  340 => 247,  336 => 245,  334 => 234,  333 => 233,  332 => 231,  327 => 229,  314 => 219,  304 => 212,  299 => 209,  297 => 205,  280 => 189,  278 => 186,  277 => 185,  276 => 184,  270 => 180,  255 => 178,  253 => 176,  252 => 175,  251 => 174,  250 => 173,  249 => 172,  248 => 171,  247 => 170,  246 => 169,  244 => 168,  226 => 167,  224 => 166,  221 => 165,  213 => 158,  211 => 146,  210 => 144,  209 => 142,  206 => 141,  199 => 136,  196 => 135,  192 => 134,  183 => 127,  175 => 121,  168 => 117,  165 => 116,  162 => 114,  153 => 106,  150 => 104,  143 => 99,  134 => 97,  130 => 96,  124 => 93,  117 => 88,  115 => 87,  110 => 85,  94 => 71,  92 => 70,  90 => 69,  85 => 65,  83 => 64,  79 => 62,  75 => 60,  71 => 58,  69 => 57,  65 => 55,  55 => 45,  53 => 40,  50 => 39,  48 => 38,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_editor.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_editor.html.twig");
    }
}
