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

/* pages/admin/form/form_toolbar.html.twig */
class __TwigTemplate_827ebf2bf77293aa8f20f4e934770f59 extends Template
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
        // line 41
        yield "
";
        // line 42
        $context["ghost_button"] = ((array_key_exists("ghost_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["ghost_button"] ?? null), false)) : (false));
        // line 43
        $context["hide_section_button"] = ((array_key_exists("hide_section_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_section_button"] ?? null), false)) : (false));
        // line 44
        $context["hide_new_horizontal_layout_button"] = ((array_key_exists("hide_new_horizontal_layout_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_new_horizontal_layout_button"] ?? null), false)) : (false));
        // line 45
        $context["show_remove_horizontal_placeholder_button"] = ((array_key_exists("show_remove_horizontal_placeholder_button", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_remove_horizontal_placeholder_button"] ?? null), false)) : (false));
        // line 46
        yield "
";
        // line 47
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    <div
        class=\"d-flex h-full ";
            // line 49
            yield (((($tmp = (((array_key_exists("vertical_layout", $context) &&  !(null === $context["vertical_layout"]))) ? ($context["vertical_layout"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("position-absolute btn-group-vertical justify-content-end ms-2 pb-2 " . ((array_key_exists("extra_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["extra_class"] ?? null), "")) : (""))), "html", null, true)) : ("btn-group justify-content-center mt-2"));
            yield "\"
        style=\"box-shadow:none;\"
        role=\"group\"
        data-glpi-form-editor-toolbar
    >
        ";
            // line 55
            yield "        <button
            type=\"button\"
            class=\"btn btn-icon ";
            // line 57
            yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
            yield " flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a question"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"add-question\"
            type=\"button\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-circle-plus\"></i>
            </span>
        </button>

        ";
            // line 70
            yield "        <button
            type=\"button\"
            for=\"btn-radio-toolbar-1\"
            class=\"btn btn-icon ";
            // line 73
            yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
            yield " flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a comment"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"add-comment\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-letter-case\"></i>
            </span>
        </button>

        ";
            // line 85
            yield "        ";
            if ((($tmp =  !($context["hide_section_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "            ";
                $context["add_section_action_visible"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 86)) > 1) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 86)), "getBlocks", [], "method", false, false, false, 86)) > 0));
                // line 87
                yield "            <button
                type=\"button\"
                for=\"btn-radio-toolbar-1\"
                class=\"btn btn-icon ";
                // line 90
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
                yield " flex-grow-0 ";
                yield (((($tmp = ($context["add_section_action_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
                yield "\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a section"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"add-section\"
                type=\"button\"
            >
                <i class=\"ti ti-box-align-top\"></i>
            </button>
        ";
            }
            // line 100
            yield "
        ";
            // line 102
            yield "        ";
            if ((($tmp =  !($context["hide_new_horizontal_layout_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "            <button
                type=\"button\"
                for=\"btn-radio-toolbar-1\"
                class=\"btn btn-icon ";
                // line 106
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : (""));
                yield " flex-grow-0\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a horizontal layout"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"add-horizontal-layout\"
            >
                <span class=\"px-2 d-flex align-items-center\">
                    <i class=\"ti ti-layout-columns\"></i>
                </span>
            </button>
        ";
            }
            // line 117
            yield "
        ";
            // line 119
            yield "        ";
            if ((($tmp = ($context["show_remove_horizontal_placeholder_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "            <button
                type=\"button\"
                class=\"btn btn-icon ";
                // line 122
                yield (((($tmp = ($context["ghost_button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-danger") : (""));
                yield " flex-grow-0\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove slot"), "html", null, true);
                yield "\"
                data-glpi-form-editor-on-click=\"remove-horizontal-layout-slot\"
                type=\"button\"
            >
                <span class=\"px-2 d-flex align-items-center\">
                    <i class=\"ti ti-trash\"></i>
                </span>
            </button>
        ";
            }
            // line 134
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_toolbar.html.twig";
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
        return array (  201 => 134,  189 => 125,  183 => 122,  179 => 120,  176 => 119,  173 => 117,  162 => 109,  156 => 106,  151 => 103,  148 => 102,  145 => 100,  135 => 93,  127 => 90,  122 => 87,  119 => 86,  116 => 85,  105 => 76,  99 => 73,  94 => 70,  82 => 60,  76 => 57,  72 => 55,  64 => 49,  61 => 48,  59 => 47,  56 => 46,  54 => 45,  52 => 44,  50 => 43,  48 => 42,  45 => 41,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_toolbar.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_toolbar.html.twig");
    }
}
