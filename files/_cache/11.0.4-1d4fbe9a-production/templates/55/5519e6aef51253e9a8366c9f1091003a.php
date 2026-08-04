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

/* pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig */
class __TwigTemplate_7a12ad5c9c4dfec8fa837f51d6b13212 extends Template
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
        // line 33
        $context["modal_aria_label"] = __("Question has conditions and its type cannot be changed");
        // line 34
        $context["modal_name"] = "new_question_type";
        // line 35
        yield "
";
        // line 36
        yield from $this->load("pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig", 36, 685467671)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig";
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
        return array (  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\item_has_conditions_for_new_question_type_modal.html.twig");
    }
}


/* pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig */
class __TwigTemplate_7a12ad5c9c4dfec8fa837f51d6b13212___685467671 extends Template
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
            'modal_headers' => [$this, 'block_modal_headers'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return "pages/admin/form/item_has_conditions_modal_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("pages/admin/form/item_has_conditions_modal_base.html.twig", 36);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal_headers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "        <div class=\"d-none\" data-glpi-form-editor-item-has-conditions-modal-header=\"question\">
            <h3 class=\"mb-2\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This question is used in the conditions of other form elements with a value operator that is not available for the new selected type."), "html", null, true);
        yield "</h3>
            <p class=\"m-0 text-muted\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You must delete/edit related conditions before changing the type of this question."), "html", null, true);
        yield "</p>
        </div>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig";
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
        return array (  134 => 40,  130 => 39,  127 => 38,  120 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\item_has_conditions_for_new_question_type_modal.html.twig");
    }
}
