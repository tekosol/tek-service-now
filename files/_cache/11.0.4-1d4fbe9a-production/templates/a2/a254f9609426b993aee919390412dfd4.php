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

/* pages/admin/form/item_has_conditions_modal_base.html.twig */
class __TwigTemplate_c5e92090b037347de78c42ed9d640ad1 extends Template
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
            'modal_headers' => [$this, 'block_modal_headers'],
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
    data-glpi-form-editor-item-has-conditions-modal=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_name"] ?? null), "html", null, true);
        yield "\"
    class=\"modal modal-blur fade\"
    aria-modal=\"true\"
    role=\"dialog\"
    aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_aria_label"] ?? null), "html", null, true);
        yield "\"
>
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header p-3\">
                <div>
                    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('modal_headers', $context, $blocks);
        // line 48
        yield "                </div>
                <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                ></button>
            </div>
            <div class=\"modal-body p-0\">
                <div class=\"list-group list-group-flush list-group-hoverable\" data-glpi-form-editor-item-has-conditions-list>
                    ";
        // line 59
        yield "                </div>
            </div>
        </div>
    </div>

    ";
        // line 65
        yield "    <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-item-template>
        <div class=\"list-group-item d-flex align-items-center space-x-2 p-3\">
            <i class=\"ti ti-circle-x fa-lg text-danger\"></i>
            <a href=\"#\" class=\"m-0\" style=\"font-weight: var(--tblr-font-weight-medium)\"
               data-glpi-form-editor-item-has-conditions-item-name
               data-glpi-form-editor-item-has-conditions-item-selector
               data-glpi-form-editor-item-has-conditions-item-uuid></a>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_headers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "                        ";
        // line 47
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/item_has_conditions_modal_base.html.twig";
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
        return array (  113 => 47,  111 => 46,  104 => 45,  89 => 65,  82 => 59,  74 => 53,  67 => 48,  65 => 45,  56 => 39,  49 => 35,  46 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/item_has_conditions_modal_base.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\item_has_conditions_modal_base.html.twig");
    }
}
