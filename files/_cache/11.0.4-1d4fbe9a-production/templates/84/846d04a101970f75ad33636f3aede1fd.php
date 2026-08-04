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

/* pages/admin/form/itil_config_fields/itilcategory.html.twig */
class __TwigTemplate_d1f18488ac19f3d291a55141f3b7d030 extends Template
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
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 36, $this->getSourceContext())->macro_dropdownField(...["ITILCategory", CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 39), "", Twig\Extension\CoreExtension::merge(        // line 41
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 46), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 47)])]);
        // line 49
        yield "
</div>

<div data-glpi-itildestination-field-config-display-condition=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWER"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 53, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["specific_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["specific_answer_extra_field"] ?? null), "value", [], "any", false, false, false, 55), CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 56), "", Twig\Extension\CoreExtension::merge(        // line 58
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["specific_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 63), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["specific_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 64)])]);
        // line 66
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
        return "pages/admin/form/itil_config_fields/itilcategory.html.twig";
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
        return array (  78 => 66,  76 => 64,  75 => 63,  74 => 58,  73 => 56,  72 => 55,  71 => 54,  70 => 53,  66 => 52,  61 => 49,  59 => 47,  58 => 46,  57 => 41,  56 => 39,  55 => 38,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/itilcategory.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\itilcategory.html.twig");
    }
}
