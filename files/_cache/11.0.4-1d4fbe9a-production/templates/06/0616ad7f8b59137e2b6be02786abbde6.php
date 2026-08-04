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

/* pages/admin/form/conditional_visibility_dropdown.html.twig */
class __TwigTemplate_11665cab9cf40e2cf7f87052308a12ac extends Template
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
            'conditions_editor' => [$this, 'block_conditions_editor'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/admin/form/condition_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        if ((null === ($context["item"] ?? null))) {
            // line 37
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 37);
        } else {
            // line 39
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredVisibilityStrategy", [], "method", false, false, false, 39);
        }
        // line 33
        $this->parent = $this->load("pages/admin/form/condition_configuration.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_conditions_editor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "    <div
        data-glpi-form-editor-visibility-dropdown-container

        ";
        // line 46
        $context["hide"] = (($context["question_strategy"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 46));
        // line 47
        yield "        ";
        $context["force_show"] = ((array_key_exists("force_show", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_show"] ?? null), false)) : (false));
        // line 48
        yield "        class=\"dropdown-center btn-group ms-1 ";
        yield (((($context["hide"] ?? null) &&  !($context["force_show"] ?? null))) ? ("d-none") : (""));
        yield "\"

        ";
        // line 51
        yield "        ";
        // line 52
        yield "        ";
        if ((($context["type"] ?? null) == "Glpi\\Form\\Question")) {
            // line 53
            yield "            data-glpi-form-editor-question-extra-details
        ";
        } elseif ((        // line 54
($context["type"] ?? null) == "Glpi\\Form\\Section")) {
            // line 55
            yield "            data-glpi-form-editor-section-extra-details
        ";
        } elseif ((        // line 56
($context["type"] ?? null) == "Glpi\\Form\\Comment")) {
            // line 57
            yield "            data-glpi-form-editor-comment-extra-details
        ";
        }
        // line 59
        yield "    >
        ";
        // line 61
        yield "        ";
        $context["strategies"] = "Glpi\\Form\\Condition\\VisibilityStrategy";
        // line 62
        yield "        ";
        $context["selected_strategy"] = ($context["question_strategy"] ?? null);
        // line 63
        yield "        ";
        $context["strategy_input_name"] = "visibility_strategy";
        // line 64
        yield "        ";
        $context["conditions"] = (((($tmp =  !(null === ($context["item"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 64)) : ([]));
        // line 65
        yield "
        <button
            title=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "\"
            data-bs-toggle=\"dropdown\"
            data-bs-auto-close=\"outside\"
            class=\"btn btn-outline-secondary btn-sm px-2\"
            data-bs-placement=\"top\"
            type=\"button\"
            data-glpi-form-editor-visibility-dropdown
        >
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\VisibilityStrategy::cases());
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 76
            yield "                ";
            $context["is_visible"] = (($context["question_strategy"] ?? null) == $context["strategy"]);
            // line 77
            yield "                ";
            $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
            // line 78
            yield "                <div
                    class=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
            yield " align-items-center\"
                    data-glpi-editor-visibility-badge=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 80), "html", null, true);
            yield "\"
                >
                    <i class=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 82), "html", null, true);
            yield " me-1\"></i>
                    <span>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 83), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
            <span
                class=\"badge text-bg-secondary ms-1\"
                data-glpi-editor-visibility-conditions-count-badge
                role=\"status\"
                aria-label=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions count"), "html", null, true);
        yield "\"
            >
                ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["conditions"] ?? null)), "html", null, true);
        yield "
            </span>
        </button>
        <div
            class=\"dropdown-menu dropdown-menu-card animate__animated animate__zoomIn\"
        >
            <div class=\"card visibility-dropdown-card\" data-glpi-form-editor-on-click=\"stop-propagation\">
                <div class=\"card-body\">
                    <h3 class=\"card-title d-flex align-items-center\">
                        <i class=\"ti ti-circuit-changeover me-2\"></i>
                        ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditional visibility"), "html", null, true);
        yield "
                    </h3>

                    ";
        // line 106
        yield from $this->yieldParentBlock("conditions_editor", $context, $blocks);
        yield "
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
        return "pages/admin/form/conditional_visibility_dropdown.html.twig";
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
        return array (  198 => 106,  192 => 103,  179 => 93,  174 => 91,  167 => 86,  158 => 83,  154 => 82,  149 => 80,  145 => 79,  142 => 78,  139 => 77,  136 => 76,  132 => 75,  121 => 67,  117 => 65,  114 => 64,  111 => 63,  108 => 62,  105 => 61,  102 => 59,  98 => 57,  96 => 56,  93 => 55,  91 => 54,  88 => 53,  85 => 52,  83 => 51,  77 => 48,  74 => 47,  72 => 46,  67 => 43,  60 => 42,  55 => 33,  52 => 39,  49 => 37,  47 => 36,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/conditional_visibility_dropdown.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\conditional_visibility_dropdown.html.twig");
    }
}
