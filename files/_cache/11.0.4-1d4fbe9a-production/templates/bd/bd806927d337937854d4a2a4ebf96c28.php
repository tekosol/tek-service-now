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

/* pages/admin/form/move_section_modal.html.twig */
class __TwigTemplate_d42eeb84a65315de97df64e4b7c496c5 extends Template
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
    data-glpi-form-editor-move-section-modal
    class=\"modal modal-blur fade\"
    aria-modal=\"true\"
    role=\"dialog\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reorganize sections"), "html", null, true);
        yield "</h3>
                <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                ></button>
            </div>

            ";
        // line 53
        yield "            <div
                class=\"list-group list-group-flush\"
                data-glpi-form-editor-move-section-modal-items
            ></div>

            <div class=\"modal-footer\">
                <button
                    type=\"button\"
                    data-glpi-form-editor-on-click=\"reorder-sections\"
                    class=\"btn btn-primary\"
                >
                    ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>

    ";
        // line 71
        yield "    <div
        data-glpi-form-editor-move-section-modal-item-template
        data-glpi-draggable-item
    >
        <section
            class=\"list-group-item cursor-grab\"
            data-glpi-form-editor-move-section-modal-item-section-key=\"null\"
        >
            <div class=\"row align-items-center\" data-glpi-form-editor-section-handle>
                <div class=\"col-auto\">
                    <i
                        class=\"ti ti-grip-vertical\"
                        style=\"opacity: 0.6;\"
                    ></i>
                </div>
                <div
                    class=\"col text-truncate\"
                    data-glpi-form-editor-move-section-modal-item-section-name
                >
                </div>
            </div>
        </section>
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
        return "pages/admin/form/move_section_modal.html.twig";
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
        return array (  93 => 71,  84 => 64,  71 => 53,  64 => 48,  56 => 43,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/move_section_modal.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\move_section_modal.html.twig");
    }
}
