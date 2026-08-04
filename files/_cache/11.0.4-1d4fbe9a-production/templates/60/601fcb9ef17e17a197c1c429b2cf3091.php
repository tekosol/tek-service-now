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

/* pages/admin/form/form_section.html.twig */
class __TwigTemplate_cff9cd8ea7dda33eb598bb1f3d0dac84 extends Template
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
        // line 44
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 49
        $context["section_index"] = ((array_key_exists("section_index", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_index"] ?? null), 1)) : (1));
        // line 50
        yield "
<section
    data-glpi-form-editor-section
    data-glpi-form-editor-condition-type=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "SECTION", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "html", null, true);
        yield "\"
    class=\"mt-4\"
    aria-label=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form section"), "html", null, true);
        yield "\"
>
    <div
        class=\"bg-primary text-primary-fg p-1 rounded-top ";
        // line 58
        yield (((($tmp = ($context["show_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\"
        style=\"width: fit-content; max-width: 50%;\"
        data-glpi-form-editor-section-details
    >
        ";
        // line 63
        yield "        <input
            title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Section name"), "html", null, true);
        yield "\"
            type=\"text\"
            class=\"form-control content-editable-h2 mb-0\"
            style=\"max-width: 100%;\"
            name=\"name\"
            value=\"";
        // line 69
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true)) : (""));
        yield "\"
            placeholder=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New section"), "html", null, true);
        yield "\"
            data-glpi-form-editor-section-details-name
            data-glpi-form-editor-dynamic-input
            maxlength=\"255\"
        />
    </div>

    <div class=\"d-flex align-items-end\">
        <section
            aria-label=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Section details"), "html", null, true);
        yield "\"
            data-glpi-form-editor-section-details
            data-glpi-form-editor-on-click=\"set-active\"
            class=\"flex-grow-1 ";
        // line 82
        yield (((($tmp = ($context["show_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\"
        >
            <div
                class=\"card\"
                style=\"border-top-left-radius:0;\"
            >
                <div
                    class=\"card-status-start bg-primary\"
                    data-glpi-form-editor-active-section-status-indicator
                ></div>
                <div class=\"card-body\">
                    ";
        // line 94
        yield "                    <div class=\"d-flex\">
                        ";
        // line 96
        yield "                        <div
                            class=\"content-editable-tinymce me-auto flex-grow-1\"
                            data-glpi-form-editor-section-description
                        >
                            ";
        // line 100
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 100, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 102
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 102), "description", [], "any", false, false, false, 102)) : ("")), __("Header"), Twig\Extension\CoreExtension::merge(        // line 104
($context["base_field_options"] ?? null), ["enable_richtext" => true, "placeholder" => __("Add a description to this section"), "aria_label" => __("Section description"), "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 113
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 116
        yield "
                        </div>
                        <div class=\"d-flex align-items-start flex-grow-1\">
                            ";
        // line 120
        yield "                            <span
                                class=\"badge bg-secondary-lt\"
                                data-glpi-form-editor-section-block-badge
                            >
                                ";
        // line 124
        $context["count_blocks"] = (((($tmp = ($context["section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "getBlocks", [], "method", false, false, false, 124))) : (1));
        // line 125
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%d element", "%d elements", ($context["count_blocks"] ?? null)), ($context["count_blocks"] ?? null)), "html", null, true);
        yield "
                            </span>

                            <div class=\"ms-auto\"></div>

                            ";
        // line 131
        yield "                            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 132
($context["section"] ?? null), "type" => "Glpi\\Form\\Section"], false);
        // line 134
        yield "

                            ";
        // line 137
        yield "                            <i
                                role=\"button\"
                                class=\"ti ti-selector ms-3 cursor-pointer\"
                                data-bs-toggle=\"tooltip\"
                                data-bs-placement=\"top\"
                                title=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collapse section"), "html", null, true);
        yield "\"
                                data-glpi-form-editor-on-click=\"collapse-section\"
                            ></i>

                            ";
        // line 147
        yield "                            <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
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
                                            data-glpi-form-editor-on-click=\"duplicate-section\"
                                        >
                                            <i class=\"ti ti-copy me-2\"></i>
                                            <span>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"[data-glpi-form-editor-move-section-modal]\"
                                            data-glpi-form-editor-on-click=\"build-move-section-modal-content\"
                                        >
                                            <i class=\"ti ti-arrows-move-vertical me-2\"></i>
                                            <span>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item ";
        // line 182
        yield (((($context["section_index"] ?? null) == 1)) ? ("d-none") : (""));
        yield "\"
                                            aria-label=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Merge with previous section"), "html", null, true);
        yield "\"
                                            data-glpi-form-editor-on-click=\"merge-with-previous-section\"
                                        >
                                            <i class=\"ti ti-arrow-merge me-2\"></i>
                                            <span>";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Merge with previous section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>

                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-glpi-form-editor-on-click=\"delete-section\"
                                        >
                                            <i class=\"ti ti-trash me-2\"></i>
                                            <span>";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>

                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                                        >
                                            <i class=\"ti ti-eye-cog me-2\"></i>
                                            <span>";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <input
                        type=\"hidden\"
                        name=\"uuid\"
                        value=\"";
        // line 220
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 220), "uuid", [], "any", false, false, false, 220), "html", null, true)) : (""));
        yield "\"
                    />
                    <input
                        type=\"hidden\"
                        name=\"forms_forms_id\"
                        value=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225), "html", null, true);
        yield "\"
                    />
                    <input
                        type=\"hidden\"
                        name=\"rank\"
                        value=\"";
        // line 230
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 230), "rank", [], "any", false, false, false, 230), "html", null, true)) : (0));
        yield "\"
                    />
                </div>
            </div>
        </section>

        <div class=\"mb-2\" data-glpi-form-editor-section-extra-details>
            ";
        // line 237
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 238
($context["can_update"] ?? null), "form" =>         // line 239
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 241
        yield "
        </div>
    </div>

    <div data-glpi-form-editor-section-blocks class=\"mt-3\">
    ";
        // line 246
        if ((($tmp = ($context["section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "getBlocks", [], "method", false, false, false, 247));
            foreach ($context['_seq'] as $context["_key"] => $context["form_group_blocks"]) {
                // line 248
                yield "            ";
                if (is_iterable($context["form_group_blocks"])) {
                    // line 249
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block.html.twig", ["blocks" =>                     // line 250
$context["form_group_blocks"], "can_update" =>                     // line 251
($context["can_update"] ?? null), "form" =>                     // line 252
($context["form"] ?? null), "allow_unauthenticated_access" =>                     // line 253
($context["allow_unauthenticated_access"] ?? null)], false);
                    // line 254
                    yield "
            ";
                } else {
                    // line 256
                    yield "                ";
                    $context["form_block"] = $context["form_group_blocks"];
                    // line 257
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form_block"] ?? null), "displayBlockForEditor", [($context["can_update"] ?? null), ($context["allow_unauthenticated_access"] ?? null)], "method", false, false, false, 257), "html", null, true);
                    yield "
            ";
                }
                // line 259
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['form_group_blocks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            yield "    ";
        }
        // line 261
        yield "    </div>

</section>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_section.html.twig";
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
        return array (  360 => 261,  357 => 260,  351 => 259,  345 => 257,  342 => 256,  338 => 254,  336 => 253,  335 => 252,  334 => 251,  333 => 250,  331 => 249,  328 => 248,  323 => 247,  321 => 246,  314 => 241,  312 => 239,  311 => 238,  310 => 237,  300 => 230,  292 => 225,  284 => 220,  270 => 209,  256 => 198,  242 => 187,  235 => 183,  231 => 182,  222 => 176,  207 => 164,  193 => 153,  185 => 147,  178 => 142,  171 => 137,  167 => 134,  165 => 132,  163 => 131,  154 => 125,  152 => 124,  146 => 120,  141 => 116,  139 => 113,  138 => 104,  137 => 102,  136 => 100,  130 => 96,  127 => 94,  113 => 82,  107 => 79,  95 => 70,  91 => 69,  83 => 64,  80 => 63,  73 => 58,  67 => 55,  62 => 53,  57 => 50,  55 => 49,  53 => 44,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_section.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_section.html.twig");
    }
}
