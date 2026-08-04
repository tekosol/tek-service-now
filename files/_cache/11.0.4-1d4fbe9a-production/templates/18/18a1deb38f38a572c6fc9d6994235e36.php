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

/* pages/admin/form/itil_config_fields/linked_itilobjects.html.twig */
class __TwigTemplate_5ef6b70bd735f0beaf5a0b28dd10f644 extends Template
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
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["configs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 36
            yield "    <section class=\"mb-2\" data-glpi-itildestination-field-config>
        <div data-glpi-itildestination-field-config-content>
            ";
            // line 38
            $context["index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 38);
            // line 39
            yield "            ";
            if ((($tmp = ($context["is_for_template"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "                ";
                $context["index"] = "__INDEX__";
                // line 41
                yield "            ";
            }
            // line 42
            yield "
            <div class=\"d-flex w-full\" data-glpi-itildestination-field-linked-itilobjects-config>
                ";
            // line 44
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 44, $this->getSourceContext())->macro_dropdownArrayField(...[(((((            // line 45
($context["input_name"] ?? null) . "[") . ($context["index"] ?? null)) . "][") . CoreExtension::getAttribute($this->env, $this->source, ($context["dropdown_linktypes"] ?? null), "input_name_suffix", [], "any", false, false, false, 45)) . "]"), CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["config"], "getLinktype", [], "method", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["dropdown_linktypes"] ?? null), "values", [], "any", false, false, false, 47), "", Twig\Extension\CoreExtension::merge(            // line 49
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["dropdown_linktypes"] ?? null), "aria_label", [], "any", false, false, false, 52), "mb" => ""])]);
            // line 55
            yield "

                ";
            // line 57
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 57, $this->getSourceContext())->macro_dropdownArrayField(...[(((((            // line 58
($context["input_name"] ?? null) . "[") . ($context["index"] ?? null)) . "][") . CoreExtension::getAttribute($this->env, $this->source, ($context["dropdown_strategies"] ?? null), "input_name_suffix", [], "any", false, false, false, 58)) . "]"), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["config"], "getStrategy", [], "method", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["config"], "getStrategy", [], "method", false, false, false, 59), "value", [], "any", false, false, false, 59)) : (0)), CoreExtension::getAttribute($this->env, $this->source,             // line 60
($context["dropdown_strategies"] ?? null), "values", [], "any", false, false, false, 60), "", Twig\Extension\CoreExtension::merge(            // line 62
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "display_emptychoice" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 66
($context["dropdown_strategies"] ?? null), "aria_label", [], "any", false, false, false, 66), "mb" => "", "add_data_attributes" => ["glpi-itildestination-strategy-select" => ""]])]);
            // line 72
            yield "
            </div>

            <div
                class=\"d-none\"
                data-glpi-itildestination-field-config-display-condition=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUES"] ?? null), "html", null, true);
            yield "\"
            >
                ";
            // line 79
            $context["dropdown_items_input_name"] = (((((($context["input_name"] ?? null) . "[") . ($context["index"] ?? null)) . "][") . CoreExtension::getAttribute($this->env, $this->source, ($context["specific_values_extra_field"] ?? null), "input_name_suffix", [], "any", false, false, false, 79)) . "]");
            // line 80
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 80, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...[            // line 81
($context["dropdown_items_input_name"] ?? null), "", Twig\Extension\CoreExtension::merge(            // line 83
($context["options"] ?? null), ["itemtype_name" => (            // line 84
($context["dropdown_items_input_name"] ?? null) . "[itemtype]"), "items_id_name" => (            // line 85
($context["dropdown_items_input_name"] ?? null) . "[items_id]"), "default_itemtype" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["config"], "getSpecificItilObjectItemtype", [], "method", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "getSpecificItilObjectItemtype", [], "method", false, false, false, 86), 0)) : (0)), "default_items_id" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["config"], "getSpecificItilObjectItemsId", [], "method", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "getSpecificItilObjectItemsId", [], "method", false, false, false, 87), 0)) : (0)), "field_class" => "", "no_label" => true, "display_emptychoice" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["specific_values_extra_field"] ?? null), "itemtype_aria_label", [], "any", false, false, false, 91), "mb" => "", "itemtypes" => CoreExtension::getAttribute($this->env, $this->source,             // line 93
($context["specific_values_extra_field"] ?? null), "itemtypes", [], "any", false, false, false, 93), "width" => "100%", "add_field_attribs" => ["data-glpi-items-from-itemtypes-dropdown" => ""], "specific_tags_items_id_dropdown" => ["aria-label" => CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["specific_values_extra_field"] ?? null), "items_id_aria_label", [], "any", false, false, false, 99)]])]);
            // line 102
            yield "
            </div>

            <div
                class=\"d-none\"
                data-glpi-itildestination-field-config-display-condition=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_DESTINATIONS"] ?? null), "html", null, true);
            yield "\"
            >
                ";
            // line 109
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 109, $this->getSourceContext())->macro_dropdownArrayField(...[(((((            // line 110
($context["input_name"] ?? null) . "[") . ($context["index"] ?? null)) . "][") . CoreExtension::getAttribute($this->env, $this->source, ($context["specific_destinations_extra_field"] ?? null), "input_name_suffix", [], "any", false, false, false, 110)) . "]"), "", CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["specific_destinations_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 112), "", Twig\Extension\CoreExtension::merge(            // line 114
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "display_emptychoice" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,             // line 118
$context["config"], "getSpecificDestinationIds", [], "method", false, false, false, 118), "multiple" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["specific_destinations_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 120), "mb" => ""])]);
            // line 123
            yield "
            </div>

            <div
                class=\"d-none\"
                data-glpi-itildestination-field-config-display-condition=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWERS"] ?? null), "html", null, true);
            yield "\"
            >
                ";
            // line 130
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 130, $this->getSourceContext())->macro_dropdownArrayField(...[(((((            // line 131
($context["input_name"] ?? null) . "[") . ($context["index"] ?? null)) . "][") . CoreExtension::getAttribute($this->env, $this->source, ($context["specific_answer_extra_field"] ?? null), "input_name_suffix", [], "any", false, false, false, 131)) . "]"), "", CoreExtension::getAttribute($this->env, $this->source,             // line 133
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 133), "", Twig\Extension\CoreExtension::merge(            // line 135
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "display_emptychoice" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,             // line 139
$context["config"], "getSpecificQuestionIds", [], "method", false, false, false, 139), "multiple" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 141
($context["specific_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 141), "mb" => ""])]);
            // line 144
            yield "
            </div>
        </div>
        <button
            type=\"button\"
            class=\"btn btn-icon btn-outline\"
            title=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
            yield "\"
            aria-label=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
            yield "\"
            data-glpi-itildestination-remove-field-config
        >
            <i class=\"ti ti-x\"></i>
        </button>
    </section>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/linked_itilobjects.html.twig";
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
        return array (  180 => 151,  176 => 150,  168 => 144,  166 => 141,  165 => 139,  164 => 135,  163 => 133,  162 => 131,  161 => 130,  156 => 128,  149 => 123,  147 => 120,  146 => 118,  145 => 114,  144 => 112,  143 => 110,  142 => 109,  137 => 107,  130 => 102,  128 => 99,  127 => 93,  126 => 91,  125 => 87,  124 => 86,  123 => 85,  122 => 84,  121 => 83,  120 => 81,  118 => 80,  116 => 79,  111 => 77,  104 => 72,  102 => 66,  101 => 62,  100 => 60,  99 => 59,  98 => 58,  97 => 57,  93 => 55,  91 => 52,  90 => 49,  89 => 47,  88 => 46,  87 => 45,  86 => 44,  82 => 42,  79 => 41,  76 => 40,  73 => 39,  71 => 38,  67 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/linked_itilobjects.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\linked_itilobjects.html.twig");
    }
}
