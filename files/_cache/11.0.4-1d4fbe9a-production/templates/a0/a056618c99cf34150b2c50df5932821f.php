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

/* pages/admin/form/conditional_visibility_editor.html.twig */
class __TwigTemplate_6b76402122eceb97294b62036dcbd2c4 extends Template
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
        $context["last_condition_is_filled"] = false;
        // line 34
        yield "
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["defined_conditions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 36
            yield "    ";
            $context["condition_is_filled"] = (CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 36) != "");
            // line 37
            yield "    ";
            $context["last_condition_is_filled"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) && ($context["condition_is_filled"] ?? null));
            // line 38
            yield "
    <div
        class=\"row mt-3\"
        data-glpi-conditions-editor-condition
        data-glpi-conditions-editor-condition-index=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
    >
        <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
                ";
            // line 46
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "                    <span class=\"me-2 logic-operator-selector\">
                        ";
                // line 48
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["loop"], "index0", [], "any", false, false, false, 49)) . "][logic_operator]"), CoreExtension::getAttribute($this->env, $this->source,                 // line 50
($context["manager"] ?? null), "getLogicOperatorDropdownValues", [], "method", false, false, false, 50), ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["condition"], "getLogicOperator", [], "method", false, false, false, 52), "value", [], "any", false, false, false, 52), "aria_label" => __("Logic operator"), "add_data_attributes" => ["glpi-conditions-editor-logic-operator" => ""]]]);
                // line 58
                yield "                    </span>
                ";
            }
            // line 60
            yield "
                <span class=\"me-2 question-selector\">
                    ";
            // line 62
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["loop"], "index0", [], "any", false, false, false, 63)) . "][item]"),             // line 64
($context["items_values"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source,             // line 66
$context["condition"], "getItemDropdownKey", [], "method", false, false, false, 66), "aria_label" => _n("Item", "Items", 1), "add_data_attributes" => ["glpi-conditions-editor-item" => ""], "display_emptychoice" => true, "emptylabel" => __("Select an item...")]]);
            // line 75
            yield "                </span>

                ";
            // line 77
            if ((($tmp = ($context["condition_is_filled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                    <input
                        type=\"hidden\"
                        value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 80), "html", null, true);
                yield "\"
                        name=\"_conditions[";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 81), "html", null, true);
                yield "][item_uuid]\"
                        data-glpi-conditions-editor-item-uuid
                    />
                    <input
                        type=\"hidden\"
                        value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemType", [], "method", false, false, false, 86), "value", [], "any", false, false, false, 86), "html", null, true);
                yield "\"
                        name=\"_conditions[";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87), "html", null, true);
                yield "][item_type]\"
                        data-glpi-conditions-editor-item-type
                    />

                    <span class=\"me-2 value-operator-selector\">
                        ";
                // line 92
                $context["value_op"] = "";
                // line 93
                yield "                        ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    yield "                            ";
                    $context["value_op"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 94), "value", [], "any", false, false, false, 94);
                    // line 95
                    yield "                        ";
                }
                // line 96
                yield "                        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                 // line 97
$context["loop"], "index0", [], "any", false, false, false, 97)) . "][value_operator]"), CoreExtension::getAttribute($this->env, $this->source,                 // line 98
($context["manager"] ?? null), "getValueOperatorDropdownValues", [CoreExtension::getAttribute($this->env, $this->source,                 // line 99
$context["condition"], "getItemUuid", [], "method", false, false, false, 99)], "method", false, false, false, 98), ["value" =>                 // line 102
($context["value_op"] ?? null), "aria_label" => __("Value operator"), "add_data_attributes" => ["glpi-conditions-editor-value-operator" => ""]]]);
                // line 109
                yield "                    </span>

                    ";
                // line 112
                yield "                    ";
                $context["handler"] = CoreExtension::getAttribute($this->env, $this->source, ($context["manager"] ?? null), "getHandlerForCondition", [$context["condition"]], "method", false, false, false, 112);
                // line 113
                yield "
                    ";
                // line 114
                if ((($tmp =  !(null === ($context["handler"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                        ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["handler"] ?? null), "getTemplate", [], "method", false, false, false, 115))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 116
                        yield "                            ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source,                         // line 117
($context["handler"] ?? null), "getTemplate", [], "method", false, false, false, 117), Twig\Extension\CoreExtension::merge(["input_value" => CoreExtension::getAttribute($this->env, $this->source,                         // line 119
$context["condition"], "getValue", [], "method", false, false, false, 119), "input_name" => (("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                         // line 120
$context["loop"], "index0", [], "any", false, false, false, 120)) . "][value]"), "input_label" => __("Value")], CoreExtension::getAttribute($this->env, $this->source,                         // line 122
($context["handler"] ?? null), "getTemplateParameters", [$context["condition"]], "method", false, false, false, 122)), false);
                        // line 124
                        yield "
                        ";
                    }
                    // line 126
                    yield "                    ";
                }
                // line 127
                yield "                ";
            }
            // line 128
            yield "
                ";
            // line 129
            if ((($context["condition_is_filled"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 129) > 0))) {
                // line 130
                yield "                    <i
                        role=\"button\"
                        aria-label=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete criteria"), "html", null, true);
                yield "\"
                        class=\"ti ti-trash text-danger cursor-pointer ms-auto\"
                        data-glpi-condition-editor-delete-condition
                    ></i>
                ";
            }
            // line 137
            yield "            </div>
        </div>
    </div>
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
        unset($context['_seq'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
";
        // line 142
        if ((($tmp = ($context["last_condition_is_filled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "    <button
        data-glpi-condition-editor-add-condition
        type=\"button\"
        class=\"d-flex align-items-center btn btn-sm btn-ghost-secondary mt-3\"
    >
        <i class=\"ti ti-plus me-1\"></i>
        <span>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add another criteria"), "html", null, true);
            yield "</span>
    </button>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/conditional_visibility_editor.html.twig";
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
        return array (  240 => 149,  232 => 143,  230 => 142,  227 => 141,  210 => 137,  202 => 132,  198 => 130,  196 => 129,  193 => 128,  190 => 127,  187 => 126,  183 => 124,  181 => 122,  180 => 120,  179 => 119,  178 => 117,  176 => 116,  173 => 115,  171 => 114,  168 => 113,  165 => 112,  161 => 109,  159 => 102,  158 => 99,  157 => 98,  156 => 97,  154 => 96,  151 => 95,  148 => 94,  145 => 93,  143 => 92,  135 => 87,  131 => 86,  123 => 81,  119 => 80,  115 => 78,  113 => 77,  109 => 75,  107 => 66,  106 => 64,  105 => 63,  104 => 62,  100 => 60,  96 => 58,  94 => 52,  93 => 50,  92 => 49,  91 => 48,  88 => 47,  86 => 46,  79 => 42,  73 => 38,  70 => 37,  67 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/conditional_visibility_editor.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\conditional_visibility_editor.html.twig");
    }
}
