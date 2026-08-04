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

/* layout/parts/profile_selector_form.html.twig */
class __TwigTemplate_3c07d9b1a0e75a51aeb23d3ec51a736c extends Template
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
<div class=\"d-flex align-items-center\">
    <form method=\"POST\" action=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeEntity"), "html", null, true);
        yield "\">
        <button class=\"btn btn-link p-0 bg-transparent ";
        // line 35
        yield (((($tmp = ($context["is_recursive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold") : (""));
        yield "\">
            ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "
        </button>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
    </form>

    ";
        // line 42
        if ((($tmp = ($context["is_recursive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <form method=\"POST\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeEntity"), "html", null, true);
            yield "\">
            <button class=\"btn btn-outline-secondary p-0 ms-1\">
                <i
                    class=\"ti ti-chevrons-down\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"right\"
                    title=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Select %1s entity with all its sub entities"), ($context["name"] ?? null)), "html", null, true);
            yield "\"
                ></i>
            </button>
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"is_recursive\" value=\"1\">
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
            yield "\">
        </form>
    ";
        }
        // line 57
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/profile_selector_form.html.twig";
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
        return array (  98 => 57,  92 => 54,  87 => 52,  81 => 49,  71 => 43,  69 => 42,  63 => 39,  59 => 38,  54 => 36,  50 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/profile_selector_form.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\layout\\parts\\profile_selector_form.html.twig");
    }
}
