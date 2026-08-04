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

/* pages/admin/form/question_type/base_advanced_configuration.html.twig */
class __TwigTemplate_dc92f100712f37a2acdbe0f525a0b18e extends Template
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
            'dropdown_content' => [$this, 'block_dropdown_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"dropdown\" data-glpi-form-editor-question-extra-details>
    <button
        id=\"dropdownMenuButton";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
        class=\"btn btn-icon h-full rounded-start-0\"
        type=\"button\"
        data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
        aria-expanded=\"false\"
        title=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Advanced configuration"), "html", null, true);
        yield "\"
        aria-label=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Advanced configuration"), "html", null, true);
        yield "\"
    >
        <i class=\"ti ti-settings\"></i>
    </button>
    <div
        style=\"width: 32rem\"
        class=\"dropdown-menu dropdown-menu-card animate__animated animate__zoomIn\"
        role=\"menu\"
        aria-labelledby=\"dropdownMenuButton";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
        data-glpi-form-editor-advanced-question-configuration
    >
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 56
        yield from $this->unwrap()->yieldBlock('dropdown_content', $context, $blocks);
        // line 59
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dropdown_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "                ";
        // line 58
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/base_advanced_configuration.html.twig";
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
        return array (  104 => 58,  102 => 57,  95 => 56,  86 => 59,  84 => 56,  76 => 51,  65 => 43,  61 => 42,  53 => 37,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/base_advanced_configuration.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\question_type\\base_advanced_configuration.html.twig");
    }
}
