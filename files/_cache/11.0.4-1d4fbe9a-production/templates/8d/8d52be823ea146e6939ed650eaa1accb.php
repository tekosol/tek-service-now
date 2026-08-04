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

/* pages/admin/form/itil_config_fields/itilactor.html.twig */
class __TwigTemplate_0fbaa27e83d69b3f6c3fb5eb6753db0d extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUE"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 39
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", [CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["specific_value_extra_field"] ?? null), "values", [], "any", false, false, false, 41), ["multiple" => true, "allowed_types" => CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["specific_value_extra_field"] ?? null), "allowed_types", [], "any", false, false, false, 44), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["specific_value_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 45)]]);
        // line 48
        yield "
    ";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 49, $this->getSourceContext())->macro_htmlField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 50),         // line 51
($context["actors_dropdown"] ?? null), "", ["field_class" => "", "no_label" => true, "wrapper_class" => "", "mb" => ""]]);
        // line 59
        yield "
</div>

<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWER"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 66
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 66, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["specific_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 67), "", CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 69), "", Twig\Extension\CoreExtension::merge(        // line 71
($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "field_class" => "", "no_label" => true, "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["specific_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 76), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["specific_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 77), "mb" => ""])]);
        // line 80
        yield "
</div>

";
        // line 83
        $context["group_object_strategies"] = [        // line 84
($context["CONFIG_SPECIFIC_USER_OBJECT_ANSWER"] ?? null),         // line 85
($context["CONFIG_SPECIFIC_TECH_USER_OBJECT_ANSWER"] ?? null),         // line 86
($context["CONFIG_SPECIFIC_GROUP_OBJECT_ANSWER"] ?? null),         // line 87
($context["CONFIG_SPECIFIC_TECH_GROUP_OBJECT_ANSWER"] ?? null)];
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["group_object_strategies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 90
            yield "    <div
        class=\"d-none\"
        data-glpi-itildestination-field-config-display-condition=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["strategy"], "html", null, true);
            yield "\"
    >
        ";
            // line 94
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 94, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["object_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 95), "", CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["object_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 97), "", Twig\Extension\CoreExtension::merge(            // line 99
($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "field_class" => "", "no_label" => true, "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["object_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 104), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["object_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 105), "mb" => ""])]);
            // line 108
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/itilactor.html.twig";
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
        return array (  120 => 108,  118 => 105,  117 => 104,  116 => 99,  115 => 97,  114 => 95,  113 => 94,  108 => 92,  104 => 90,  100 => 89,  98 => 87,  97 => 86,  96 => 85,  95 => 84,  94 => 83,  89 => 80,  87 => 77,  86 => 76,  85 => 71,  84 => 69,  83 => 67,  82 => 66,  77 => 64,  70 => 59,  68 => 51,  67 => 50,  66 => 49,  63 => 48,  61 => 45,  60 => 44,  59 => 41,  58 => 40,  57 => 39,  52 => 37,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/itilactor.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\itilactor.html.twig");
    }
}
