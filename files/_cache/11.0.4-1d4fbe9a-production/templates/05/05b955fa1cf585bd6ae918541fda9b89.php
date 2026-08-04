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

/* pages/admin/form/form_destination_actions.html.twig */
class __TwigTemplate_06c892d7b80234657afe73e586fe9613 extends Template
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
<div class=\"d-flex flex-row-reverse align-items-center justify-content-between\">
    <div class=\"d-flex flex-row-reverse\">
        <button
            class=\"btn btn-primary ms-2\"
            name=\"update\"
            type=\"submit\"
            formaction=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/%d/Update", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 39))), "html", null, true);
        yield "\"
            formmethod=\"post\"
        >
            <i class=\"ti ti-device-floppy me-2\"></i>
            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update item"), "html", null, true);
        yield "
        </button>
        ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "canPurgeItem", [], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <button
                class=\"btn btn-ghost-danger\"
                name=\"purge\"
                type=\"submit\"
                formaction=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/%d/Purge", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 50), CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 50))), "html", null, true);
            yield "\"
                formmethod=\"post\"
            >
                <i class=\"ti ti-trash me-2\"></i>
                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 57
        yield "        <button
            class=\"btn btn-ghost-secondary me-1\"
            name=\"duplicate\"
            type=\"submit\"
            formaction=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/Add", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 61))), "html", null, true);
        yield "\"
            formmethod=\"post\"
        >
            <i class=\"ti ti-copy me-2\"></i>
            ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "html", null, true);
        yield "
        </button>
    </div>
    <div>
        <button
            title=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure creation conditions"), "html", null, true);
        yield "\"
            data-bs-toggle=\"dropdown\"
            data-bs-auto-close=\"outside\"
            class=\"relative btn btn-outline-secondary btn-sm px-2\"
            data-bs-placement=\"top\"
            type=\"button\"
        >
            ";
        // line 77
        $context["selected_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredCreationStrategy", [], "method", false, false, false, 77);
        // line 78
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\CreationStrategy::cases());
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 79
            yield "                ";
            $context["is_visible"] = (($context["selected_strategy"] ?? null) == $context["strategy"]);
            // line 80
            yield "                ";
            $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
            // line 81
            yield "                <div
                    class=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
            yield " align-items-center\"
                    data-glpi-editor-condition-badge=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 83), "html", null, true);
            yield "\"
                >
                    <i class=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 85), "html", null, true);
            yield " me-1\"></i>
                    <span>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 86), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "
            ";
        // line 90
        $context["conditions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 90);
        // line 91
        yield "            <span
                class=\"badge text-bg-secondary ms-1\"
                data-glpi-editor-conditions-count-badge
                role=\"status\"
                aria-label=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions count"), "html", null, true);
        yield "\"
            >
                ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["conditions"] ?? null)), "html", null, true);
        yield "
            </span>
        </button>
        <div
            class=\"dropdown-menu dropdown-menu-end dropdown-menu-card animate__animated animate__zoomIn\"
        >
            <div class=\"card visibility-dropdown-card\" data-glpi-form-editor-on-click=\"stop-propagation\">
                <div class=\"card-body\">
                    <h3 class=\"card-title d-flex align-items-center\">
                        <i class=\"ti ti-circuit-changeover me-2\"></i>
                        ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions"), "html", null, true);
        yield "
                    </h3>

                    ";
        // line 110
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/destination_visibility_conditions_configuration.html.twig", ["destination" =>         // line 113
($context["destination"] ?? null), "form" =>         // line 114
($context["form"] ?? null)], false);
        // line 117
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_destination_actions.html.twig";
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
        return array (  192 => 117,  190 => 114,  189 => 113,  188 => 110,  182 => 107,  169 => 97,  164 => 95,  158 => 91,  156 => 90,  153 => 89,  144 => 86,  140 => 85,  135 => 83,  131 => 82,  128 => 81,  125 => 80,  122 => 79,  117 => 78,  115 => 77,  105 => 70,  97 => 65,  90 => 61,  84 => 57,  78 => 54,  71 => 50,  65 => 46,  63 => 45,  58 => 43,  51 => 39,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination_actions.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_destination_actions.html.twig");
    }
}
