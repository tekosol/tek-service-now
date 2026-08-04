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

/* pages/admin/form/itil_config_fields/request_source.html.twig */
class __TwigTemplate_530014ae74885d30a0cd0b5d6bb09f57 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
<div data-glpi-itildestination-field-config-display-condition=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUE"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 36, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["specific_value_extra_field"] ?? null), "itemtype", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 38), (((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["specific_value_extra_field"] ?? null), "value", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 39)) : (0)), "", Twig\Extension\CoreExtension::merge(        // line 41
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 46), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 47), "condition" => ["is_active" => 1, "is_ticketheader" => 1]])]);
        // line 53
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/request_source.html.twig";
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
        return array (  62 => 53,  60 => 47,  59 => 46,  58 => 41,  57 => 39,  56 => 38,  55 => 37,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/request_source.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\request_source.html.twig");
    }
}
