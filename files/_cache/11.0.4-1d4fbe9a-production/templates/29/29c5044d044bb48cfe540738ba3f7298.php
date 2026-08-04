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

/* pages/admin/form/itil_config_fields/associated_items.html.twig */
class __TwigTemplate_a8d62b9df301a6f860db82b0d944a372 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        yield "
<div
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUES"] ?? null), "html", null, true);
        yield "\"
    data-glpi-associated-items-specific-values-extra-field=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
    class=\"form-field col-12 d-none\"
>
    ";
        // line 42
        $context["remove_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "        <button type=\"button\" class=\"btn btn-icon btn-outline rounded-0\" data-glpi-remove-associated-item-button aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove item"), "html", null, true);
            yield "\">
            <i class=\"ti ti-x\"></i>
        </button>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "
    <section data-glpi-associated-items-specific-values-extra-field-container>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["specific_values_extra_field"] ?? null), "associated_items", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["itemtype"] => $context["items_ids"]) {
            // line 50
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items_ids"]);
            foreach ($context['_seq'] as $context["_key"] => $context["items_id"]) {
                // line 51
                yield "                ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 51, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...[CoreExtension::getAttribute($this->env, $this->source,                 // line 52
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 52), "", ["init" => true, "itemtypes" => CoreExtension::getAttribute($this->env, $this->source,                 // line 56
($context["specific_values_extra_field"] ?? null), "itemtypes", [], "any", false, false, false, 56), "no_label" => true, "display_emptychoice" => false, "itemtype_name" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 59
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 59) . "[itemtype][]"), "items_id_name" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 60
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 60) . "[items_id][]"), "default_itemtype" =>                 // line 61
$context["itemtype"], "default_items_id" =>                 // line 62
$context["items_id"], "width" => "30%", "add_field_class" => "d-flex input-group flex-nowrap", "mb" => "", "add_field_html" =>                 // line 66
($context["remove_button"] ?? null), "add_field_attribs" => ["data-glpi-associated-items-specific-values-extra-field-item" => ""], "aria_label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["specific_values_extra_field"] ?? null), "itemtype_aria_label", [], "any", false, false, false, 70), "specific_tags_items_id_dropdown" => ["aria-label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 72
($context["specific_values_extra_field"] ?? null), "items_id_aria_label", [], "any", false, false, false, 72), "data-glpi-associated-items-items-id-dropdown" => ""]]]);
                // line 76
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['items_id'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['itemtype'], $context['items_ids'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "
        ";
        // line 80
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 80, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...[CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 81), "", ["init" => true, "itemtypes" => CoreExtension::getAttribute($this->env, $this->source,         // line 85
($context["specific_values_extra_field"] ?? null), "itemtypes", [], "any", false, false, false, 85), "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["specific_values_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 88), "itemtype_name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 89) . "[itemtype][]"), "items_id_name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 90) . "[items_id][]"), "width" => "30%", "add_field_class" => "d-flex input-group flex-nowrap", "mb" => "", "add_field_html" =>         // line 94
($context["remove_button"] ?? null), "add_field_attribs" => ["data-glpi-associated-items-specific-values-extra-field-item" => ""], "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["specific_values_extra_field"] ?? null), "itemtype_aria_label", [], "any", false, false, false, 98), "specific_tags_items_id_dropdown" => ["aria-label" => CoreExtension::getAttribute($this->env, $this->source,         // line 100
($context["specific_values_extra_field"] ?? null), "items_id_aria_label", [], "any", false, false, false, 100), "data-glpi-associated-items-items-id-dropdown" => ""]]]);
        // line 104
        yield "
    </section>

    <template class=\"d-none\" data-glpi-associated-items-specific-values-extra-field-template>
        ";
        // line 108
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 108, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...[CoreExtension::getAttribute($this->env, $this->source,         // line 109
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 109), "", ["init" => false, "itemtypes" => CoreExtension::getAttribute($this->env, $this->source,         // line 113
($context["specific_values_extra_field"] ?? null), "itemtypes", [], "any", false, false, false, 113), "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 116
($context["specific_values_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 116), "itemtype_name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 117
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 117) . "[itemtype][]"), "items_id_name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 118
($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 118) . "[items_id][]"), "width" => "30%", "add_field_class" => "d-flex input-group flex-nowrap", "mb" => "", "add_field_html" =>         // line 122
($context["remove_button"] ?? null), "add_field_attribs" => ["data-glpi-associated-items-specific-values-extra-field-item" => ""], "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["specific_values_extra_field"] ?? null), "itemtype_aria_label", [], "any", false, false, false, 126), "specific_tags_items_id_dropdown" => ["aria-label" => CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["specific_values_extra_field"] ?? null), "items_id_aria_label", [], "any", false, false, false, 128), "data-glpi-associated-items-items-id-dropdown" => ""], "disabled" => true]]);
        // line 133
        yield "
    </template>
</div>

<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWERS"] ?? null), "html", null, true);
        yield "\"
>
\t";
        // line 141
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 141, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 142
($context["specific_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 142), "", CoreExtension::getAttribute($this->env, $this->source,         // line 144
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 144), "", Twig\Extension\CoreExtension::merge(        // line 146
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "display_emptychoice" => true, "values" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 150
($context["specific_answer_extra_field"] ?? null), "values", [], "any", true, true, false, 150) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["specific_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 150)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["specific_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 150)) : ([])), "multiple" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 152
($context["specific_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 152), "mb" => ""])]);
        // line 155
        yield "
</div>

<script>
    import(\"/js/modules/Forms/FieldDestinationAssociatedItem.js\").then((m) => {
        new m.GlpiFormFieldDestinationAssociatedItem(
            \$('[data-glpi-associated-items-specific-values-extra-field=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"]'),
            '";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 162) . "[itemtype][]"), "html", null, true);
        yield "',
            '";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["specific_values_extra_field"] ?? null), "input_name", [], "any", false, false, false, 163) . "[items_id][]"), "html", null, true);
        yield "'
        );
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/associated_items.html.twig";
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
        return array (  180 => 163,  176 => 162,  172 => 161,  164 => 155,  162 => 152,  161 => 150,  160 => 146,  159 => 144,  158 => 142,  157 => 141,  152 => 139,  144 => 133,  142 => 128,  141 => 126,  140 => 122,  139 => 118,  138 => 117,  137 => 116,  136 => 113,  135 => 109,  134 => 108,  128 => 104,  126 => 100,  125 => 98,  124 => 94,  123 => 90,  122 => 89,  121 => 88,  120 => 85,  119 => 81,  118 => 80,  115 => 79,  109 => 78,  102 => 76,  100 => 72,  99 => 70,  98 => 66,  97 => 62,  96 => 61,  95 => 60,  94 => 59,  93 => 56,  92 => 52,  90 => 51,  85 => 50,  81 => 49,  77 => 47,  68 => 43,  66 => 42,  60 => 39,  56 => 38,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/associated_items.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\itil_config_fields\\associated_items.html.twig");
    }
}
