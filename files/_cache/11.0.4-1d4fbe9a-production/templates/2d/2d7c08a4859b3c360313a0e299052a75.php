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

/* pages/admin/form/form_comment.html.twig */
class __TwigTemplate_d66c50fc253f1aaec47072ca3a63f012 extends Template
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
        $context["comment"] = ((array_key_exists("comment", $context)) ? (Twig\Extension\CoreExtension::default(($context["comment"] ?? null), null)) : (null));
        // line 46
        yield "
<section
    role=\"option\"
    class=\"d-flex\"
    data-glpi-form-editor-block
    data-glpi-form-editor-comment
    data-glpi-form-editor-condition-type=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "COMMENT", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        yield "\"
    data-glpi-draggable-item
>
    <section
        data-glpi-form-editor-on-click=\"set-active\"
        data-glpi-form-editor-comment-details
        class=\"card flex-grow-1\"
        aria-label=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comment details"), "html", null, true);
        yield "\"
    >
        <div
            class=\"card-status-start bg-primary\"
            data-glpi-form-editor-active-comment-status-indicator
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
        // line 75
        yield "            <div class=\"d-flex mt-n1 mb-3 align-items-center\">
                <input
                    class=\"form-control content-editable-h2 mb-0\"
                    type=\"text\"
                    name=\"name\"
                    value=\"";
        // line 80
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New comment"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comment title"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-dynamic-input
                    data-glpi-form-editor-comment-details-name
                    maxlength=\"255\"
                />

                <div class=\"ms-auto\"></div>

                ";
        // line 91
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 92
($context["comment"] ?? null), "type" => "Glpi\\Form\\Comment"], false);
        // line 94
        yield "

                ";
        // line 97
        yield "                <i
                    class=\"ti ti-copy ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate comment"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"duplicate-comment\"
                    data-glpi-form-editor-comment-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 108
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-trash ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"delete-comment\"
                    data-glpi-form-editor-comment-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 121
        yield "                <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
                    <i
                        class=\"ti ti-dots-vertical show\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        role=\"button\"
                        title=\"";
        // line 127
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
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        // line 146
        yield "            <div
                class=\"content-editable-tinymce\"
                data-glpi-form-editor-comment-description
                ";
        // line 150
        yield "                ";
        yield ((((null === ($context["comment"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 150), "description", [], "any", false, false, false, 150)) == 0))) ? ("data-glpi-form-editor-active-comment-extra-details") : (""));
        yield "
            >
                ";
        // line 152
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 152, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 154
($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 154), "description", [], "any", false, false, false, 154)) : ("")), __("Description"), Twig\Extension\CoreExtension::merge(        // line 156
($context["base_field_options"] ?? null), ["placeholder" => __("Add a description"), "aria_label" => __("Comment description"), "enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 165
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 168
        yield "
            </div>
        </div>

        ";
        // line 173
        yield "        <input
            type=\"hidden\"
            name=\"uuid\"
            value=\"";
        // line 176
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 176), "uuid", [], "any", false, false, false, 176), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"forms_sections_uuid\"
            value=\"";
        // line 181
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 181), "uuid", [], "any", false, false, false, 181), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"vertical_rank\"
            value=\"";
        // line 186
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 186), "vertical_rank", [], "any", false, false, false, 186), "html", null, true)) : (0));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"horizontal_rank\"
            value=\"";
        // line 191
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 191), "horizontal_rank", [], "any", false, false, false, 191), "html", null, true)) : (0));
        yield "\"
        />
    </section>

    <div data-glpi-form-editor-comment-extra-details>
        ";
        // line 196
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 197
($context["can_update"] ?? null), "form" =>         // line 198
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 200
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
        return "pages/admin/form/form_comment.html.twig";
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
        return array (  257 => 200,  255 => 198,  254 => 197,  253 => 196,  245 => 191,  237 => 186,  229 => 181,  221 => 176,  216 => 173,  210 => 168,  208 => 165,  207 => 156,  206 => 154,  205 => 152,  199 => 150,  194 => 146,  184 => 138,  170 => 127,  162 => 121,  153 => 114,  149 => 113,  142 => 108,  133 => 101,  127 => 97,  123 => 94,  121 => 92,  119 => 91,  108 => 82,  104 => 81,  100 => 80,  93 => 75,  75 => 59,  65 => 52,  57 => 46,  55 => 45,  53 => 40,  50 => 39,  48 => 38,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_comment.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_comment.html.twig");
    }
}
