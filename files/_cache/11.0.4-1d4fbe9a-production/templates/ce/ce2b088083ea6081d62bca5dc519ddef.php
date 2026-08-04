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

/* pages/admin/form/delete_non_empty_section_modal.html.twig */
class __TwigTemplate_74a0d72671c00e44eb033bc19fc1c341 extends Template
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
        // line 34
        yield "<div
    data-glpi-form-editor-delete-non-empty-section-modal
    class=\"modal modal-blur fade\"
    aria-modal=\"true\"
    role=\"dialog\"
    aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete non-empty section"), "html", null, true);
        yield "\"
>
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header p-3\">
                <div>
                    <h3 class=\"mb-2\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This section contains elements"), "html", null, true);
        yield "</h3>
                    <p class=\"m-0 text-muted\" data-glpi-form-editor-delete-section-message>
                        ";
        // line 48
        yield "                    </p>
                </div>
                <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                ></button>
            </div>
            <div class=\"modal-footer\">
                <button
                    type=\"button\"
                    class=\"btn btn-link\"
                    data-bs-dismiss=\"modal\"
                >
                    ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "html", null, true);
        yield "
                </button>
                <button
                    type=\"button\"
                    class=\"btn btn-danger\"
                    data-glpi-form-editor-confirm-delete-section
                >
                    ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete section and all its elements"), "html", null, true);
        yield "
                </button>
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
        return "pages/admin/form/delete_non_empty_section_modal.html.twig";
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
        return array (  96 => 70,  86 => 63,  74 => 54,  66 => 48,  61 => 45,  52 => 39,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/delete_non_empty_section_modal.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\delete_non_empty_section_modal.html.twig");
    }
}
