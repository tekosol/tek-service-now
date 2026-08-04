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

/* pages/admin/form/form_horizontal_block_toolbar.html.twig */
class __TwigTemplate_13e2a9ea3336e1147a8d12d1257da24b extends Template
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
        // line 35
        yield "
";
        // line 36
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <div
        class=\"btn-group-vertical h-full\"
        style=\"box-shadow:none;\"
        role=\"group\"
        data-glpi-form-editor-horizontal-block-toolbar
    >
        ";
            // line 44
            yield "        <button
            type=\"button\"
            class=\"btn btn-icon btn-ghost-secondary flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a slot"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"add-horizontal-layout-slot\"
            type=\"button\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-square-plus\"></i>
            </span>
        </button>

        ";
            // line 59
            yield "        <button
            type=\"button\"
            class=\"btn btn-icon btn-ghost-danger flex-grow-0\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"bottom\"
            title=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove horizontal layout"), "html", null, true);
            yield "\"
            data-glpi-form-editor-on-click=\"delete-horizontal-layout\"
            type=\"button\"
        >
            <span class=\"px-2 d-flex align-items-center\">
                <i class=\"ti ti-trash\"></i>
            </span>
        </button>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_horizontal_block_toolbar.html.twig";
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
        return array (  84 => 64,  77 => 59,  65 => 49,  58 => 44,  50 => 37,  48 => 36,  45 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_horizontal_block_toolbar.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_horizontal_block_toolbar.html.twig");
    }
}
