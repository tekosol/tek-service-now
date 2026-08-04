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

/* pages/admin/form/condition_configuration.html.twig */
class __TwigTemplate_b8e061e42b9578549f3ee306cca57f37 extends Template
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
            'conditions_editor' => [$this, 'block_conditions_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 34
        $context["strategies"] = null;
        // line 35
        yield "
";
        // line 37
        $context["selected_strategy"] = null;
        // line 38
        $context["strategy_input_name"] = null;
        // line 39
        yield "
";
        // line 41
        $context["conditions"] = null;
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('conditions_editor', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_conditions_editor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    <div data-glpi-conditions-editor-container>
        <div class=\"btn-group\" role=\"group\">

            ";
        // line 48
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::enumCases(($context["strategies"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 49
            yield "                ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 50
            yield "                <input
                    id=\"strategy_";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                    type=\"radio\"
                    class=\"btn-check\"
                    name=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["strategy_input_name"] ?? null), "html", null, true);
            yield "\"
                    value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 55), "html", null, true);
            yield "\"
                    autocomplete=\"off\"
                    data-glpi-conditions-editor-strategy
                    ";
            // line 58
            if ((($context["selected_strategy"] ?? null) == $context["strategy"])) {
                // line 59
                yield "                        checked
                        data-glpi-editor-refresh-checked
                    ";
            }
            // line 62
            yield "                    ";
            // line 63
            yield "                    data-glpi-conditions-editor-disabled
                    data-glpi-conditions-editor-enable-on-ready
                >
                <label
                    for=\"strategy_";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                    class=\"btn btn-outline-secondary\"
                >
                    <i class=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 70), "html", null, true);
            yield " me-2\"></i>
                    ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 71), "html", null, true);
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "        </div>

        ";
        // line 76
        $context["is_visible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["selected_strategy"] ?? null), "showEditor", [], "method", false, false, false, 76);
        // line 77
        yield "        ";
        $context["visibility_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        // line 78
        yield "        <div
            class=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["visibility_class"] ?? null), "html", null, true);
        yield " mt-4\"
            data-glpi-conditions-editor
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::enumCases(($context["strategies"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 82
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "showEditor", [], "method", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                    data-glpi-conditions-editor-display-for-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 83), "html", null, true);
                yield "
                ";
            }
            // line 85
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "        >
            ";
        // line 88
        yield "            <div class=\"card-body placeholder-glow\">
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
            </div>
            ";
        // line 96
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["conditions"] ?? null));
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
            // line 97
            yield "                ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 97))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "                    <div data-glpi-conditions-editor-condition>
                        ";
                // line 99
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 100
                    yield "                            <input
                                type=\"hidden\"
                                name=\"_conditions[";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 102), "html", null, true);
                    yield "][logic_operator]\"
                                value=\"";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getLogicOperator", [], "method", false, false, false, 103), "value", [], "any", false, false, false, 103), "html", null, true);
                    yield "\"
                                data-glpi-conditions-editor-logic-operator
                            />
                        ";
                }
                // line 107
                yield "                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 109), "html", null, true);
                yield "][item]\"
                            value=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemDropdownKey", [], "method", false, false, false, 110), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 115), "html", null, true);
                yield "][item_uuid]\"
                            value=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 116), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item-uuid
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 121), "html", null, true);
                yield "][item_type]\"
                            value=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemType", [], "method", false, false, false, 122), "value", [], "any", false, false, false, 122), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item-type
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 127), "html", null, true);
                yield "][value_operator]\"
                            value=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 128), "value", [], "any", false, false, false, 128), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-value-operator
                        />
                        ";
                // line 131
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 131))) {
                    // line 132
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 132));
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
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 133
                        yield "                                <input
                                    type=\"hidden\"
                                    name=\"_conditions[";
                        // line 135
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 135), "html", null, true);
                        yield "][value][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\"
                                    value=\"";
                        // line 136
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\"
                                    data-glpi-conditions-editor-value
                                />
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
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    yield "                        ";
                } else {
                    // line 141
                    yield "                            <input
                                type=\"hidden\"
                                name=\"_conditions[";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 143), "html", null, true);
                    yield "][value]\"
                                value=\"";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 144), "html", null, true);
                    yield "\"
                                data-glpi-conditions-editor-value
                            />
                        ";
                }
                // line 148
                yield "                    </div>
                ";
            }
            // line 150
            yield "            ";
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
        // line 151
        yield "        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/condition_configuration.html.twig";
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
        return array (  363 => 151,  349 => 150,  345 => 148,  338 => 144,  334 => 143,  330 => 141,  327 => 140,  309 => 136,  303 => 135,  299 => 133,  281 => 132,  279 => 131,  273 => 128,  269 => 127,  261 => 122,  257 => 121,  249 => 116,  245 => 115,  237 => 110,  233 => 109,  229 => 107,  222 => 103,  218 => 102,  214 => 100,  212 => 99,  209 => 98,  206 => 97,  188 => 96,  179 => 88,  176 => 86,  170 => 85,  164 => 83,  161 => 82,  157 => 81,  152 => 79,  149 => 78,  146 => 77,  144 => 76,  140 => 74,  131 => 71,  127 => 70,  121 => 67,  115 => 63,  113 => 62,  108 => 59,  106 => 58,  100 => 55,  96 => 54,  90 => 51,  87 => 50,  84 => 49,  79 => 48,  74 => 44,  63 => 43,  60 => 42,  58 => 41,  55 => 39,  53 => 38,  51 => 37,  48 => 35,  46 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/condition_configuration.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\condition_configuration.html.twig");
    }
}
