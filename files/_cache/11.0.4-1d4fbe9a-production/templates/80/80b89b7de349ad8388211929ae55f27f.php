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

/* pages/admin/form/itil_config_fields/entity.html.twig */
class __TwigTemplate_b15c52b2cde59f493c572b92f2ecd306 extends Template
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
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 36, $this->getSourceContext())->macro_dropdownField(...["Entity", CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 39), "", Twig\Extension\CoreExtension::merge(        // line 41
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["specific_value_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 45)])]);
        // line 47
        yield "
</div>

<div data-glpi-itildestination-field-config-display-condition=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWER"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 51, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["specific_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["specific_answer_extra_field"] ?? null), "value", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 54), "", Twig\Extension\CoreExtension::merge(        // line 56
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["specific_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 61), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["specific_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 62)])]);
        // line 64
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
        return "pages/admin/form/itil_config_fields/entity.html.twig";
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
        return array (  77 => 64,  75 => 62,  74 => 61,  73 => 56,  72 => 54,  71 => 53,  70 => 52,  69 => 51,  65 => 50,  60 => 47,  58 => 45,  57 => 41,  56 => 39,  55 => 38,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/entity.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\entity.html.twig");
    }
}
