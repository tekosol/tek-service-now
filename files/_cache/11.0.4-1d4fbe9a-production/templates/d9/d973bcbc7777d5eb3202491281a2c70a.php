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

/* pages/admin/form/itil_config_fields/validation.html.twig */
class __TwigTemplate_22d17aa270a7b88b70cfced1f010fc79 extends Template
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
<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUES"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 39, $this->getSourceContext())->macro_dropdownField(...["ITILValidationTemplate", CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source,         // line 42
($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 42), "", Twig\Extension\CoreExtension::merge(        // line 44
($context["options"] ?? null), ["field_class" => "", "mb" => "", "multiple" => true, "no_label" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["specific_value_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 49)])]);
        // line 51
        yield "
</div>

<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ACTORS"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 58, $this->getSourceContext())->macro_dropdownField(...["ValidationStep", CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["specific_validation_step_extra_field"] ?? null), "input_name", [], "any", false, false, false, 60), ((CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["specific_validation_step_extra_field"] ?? null), "value", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["specific_validation_step_extra_field"] ?? null), "value", [], "any", false, false, false, 61), 0)) : (0)), "", Twig\Extension\CoreExtension::merge(        // line 63
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["specific_validation_step_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 67), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["specific_validation_step_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 68), "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())])]);
        // line 71
        yield "

    ";
        // line 73
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", [CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["specific_values_extra_field"] ?? null), "values", [], "any", false, false, false, 75), ["multiple" => true, "allowed_types" => CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["specific_values_extra_field"] ?? null), "allowed_types", [], "any", false, false, false, 78), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["specific_values_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 79)]]);
        // line 82
        yield "
    ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 83, $this->getSourceContext())->macro_htmlField(...["default_value",         // line 85
($context["actors_dropdown"] ?? null), "", ["field_class" => "", "mb" => "", "no_label" => true, "wrapper_class" => ""]]);
        // line 93
        yield "
</div>

<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWERS"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 100
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 100, $this->getSourceContext())->macro_dropdownField(...["ValidationStep", CoreExtension::getAttribute($this->env, $this->source,         // line 102
($context["specific_validation_step_extra_field"] ?? null), "input_name", [], "any", false, false, false, 102), ((CoreExtension::getAttribute($this->env, $this->source,         // line 103
($context["specific_validation_step_extra_field"] ?? null), "value", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["specific_validation_step_extra_field"] ?? null), "value", [], "any", false, false, false, 103), 0)) : (0)), "", Twig\Extension\CoreExtension::merge(        // line 105
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 109
($context["specific_validation_step_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 109), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["specific_validation_step_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 110), "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())])]);
        // line 113
        yield "

    ";
        // line 115
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 115, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 116
($context["specific_answers_extra_field"] ?? null), "input_name", [], "any", false, false, false, 116), "", CoreExtension::getAttribute($this->env, $this->source,         // line 118
($context["specific_answers_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 118), "", Twig\Extension\CoreExtension::merge(        // line 120
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["specific_answers_extra_field"] ?? null), "values", [], "any", false, false, false, 126), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["specific_answers_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 127)])]);
        // line 129
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
        return "pages/admin/form/itil_config_fields/validation.html.twig";
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
        return array (  128 => 129,  126 => 127,  125 => 126,  124 => 120,  123 => 118,  122 => 116,  121 => 115,  117 => 113,  115 => 110,  114 => 109,  113 => 105,  112 => 103,  111 => 102,  110 => 100,  105 => 98,  98 => 93,  96 => 85,  95 => 83,  92 => 82,  90 => 79,  89 => 78,  88 => 75,  87 => 74,  86 => 73,  82 => 71,  80 => 68,  79 => 67,  78 => 63,  77 => 61,  76 => 60,  75 => 58,  70 => 56,  63 => 51,  61 => 49,  60 => 44,  59 => 42,  58 => 41,  57 => 39,  52 => 37,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/validation.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\validation.html.twig");
    }
}
