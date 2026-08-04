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

/* __string_template__e3bf999e3539bf5ff819487d677a8ac2 */
class __TwigTemplate_3617d91a773475bb343a42e6d702b409 extends Template
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
        // line 1
        yield "        ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 2
        yield "
        ";
        // line 59
        yield "
        <template>
            ";
        // line 61
        yield $this->getTemplateForMacro("macro_addOption", $context, 61, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, null, true, true, ($context["hide_default_value_input"] ?? null)]);
        yield "
        </template>

        <div class=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectable_question_options_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectable_question_options_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
            <div
                data-glpi-form-editor-selectable-question-options=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                ";
        // line 67
        yield (((($tmp = ($context["hide_container_when_unfocused"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 70
            yield "                    ";
            yield $this->getTemplateForMacro("macro_addOption", $context, 70, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "checked", [], "any", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 70), ($context["translations"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "uuid", [], "any", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70), false, false, ($context["hide_default_value_input"] ?? null)]);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "            </div>

            ";
        // line 74
        yield $this->getTemplateForMacro("macro_addOption", $context, 74, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)), true, true, ($context["hide_default_value_input"] ?? null)]);
        yield "
        </div>

        <script>
            // TODO: avoid this, the script should probably run in a dedicated method that the framework can call at
            // the right time.
            \$(\"[data-glpi-form-editor-container]\").on('initialized', () => {
                            import(\"/js/modules/Forms/QuestionDropdown.js\").then((m) => {
                ";
        // line 82
        if ((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                    const container = \$('div[data-glpi-form-editor-selectable-question-options=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"]');
                    container.data(
                        'manager',
                        new m.GlpiFormQuestionTypeDropdown('";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container)
                    );
                ";
        } else {
            // line 89
            yield "                    \$(document).on('glpi-form-editor-question-type-changed', function(e, question, type) {
                        if (type === '";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeDropdown('";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container, true)
                            );
                        }
                    });

                    \$(document).on('glpi-form-editor-question-duplicated', function(e, question, new_question) {
                        const question_type = question.find('input[data-glpi-form-editor-original-name=\"type\"]').val();
                        if (question_type === '";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = new_question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeDropdown('";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container, true)
                            );
                        }
                    });
                ";
        }
        // line 110
        yield "            });
            });
        </script>";
        yield from [];
    }

    // line 3
    public function macro_addOption($input_type = null, $checked = null, $value = null, $translations = null, $uuid = null, $order = null, $extra_details = false, $disabled = false, $hide_default_value_input = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "input_type" => $input_type,
            "checked" => $checked,
            "value" => $value,
            "translations" => $translations,
            "uuid" => $uuid,
            "order" => $order,
            "extra_details" => $extra_details,
            "disabled" => $disabled,
            "hide_default_value_input" => $hide_default_value_input,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "            ";
            if ((null === ($context["uuid"] ?? null))) {
                // line 5
                yield "                ";
                $context["uuid"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 6
                yield "            ";
            }
            // line 7
            yield "
            <div
                class=\"d-flex gap-1 align-items-center mb-2\"
                data-glpi-form-selectable-question-option
                ";
            // line 11
            yield (((($tmp = ($context["extra_details"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
            yield "
            >
                <i
                    role=\"button\"
                    aria-label=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "move_option", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-handle
                    class=\"ti ti-grip-horizontal cursor-grab ms-auto me-1\"
                    style=\"";
            // line 19
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("visibility: hidden;") : (""));
            yield "\"
                    draggable=\"true\"
                ></i>
                <input
                    type=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "html", null, true);
            yield "\"
                    name=\"default_value[]\"
                    value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "\"
                    class=\"form-check-input ";
            // line 26
            yield (((($tmp = ($context["hide_default_value_input"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                    aria-label=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "default_option", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                    ";
            // line 28
            yield (((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "
                    ";
            // line 29
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
                >
                <input
                    data-glpi-form-editor-specific-question-extra-data
                    type=\"text\"
                    class=\"flex-grow-1 w-full\"
                    style=\"border: none transparent; outline: none; box-shadow: none;\"
                    name=\"options[";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "]\"
                    value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
                    placeholder=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "enter_option", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
                    aria-label=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "selectable_option", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                >
                <input
                    type=\"hidden\"
                    name=\"options_order[";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "]\"
                    value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["order"] ?? null), "html", null, true);
            yield "\"
                    data-glpi-form-editor-specific-question-extra-data
                    data-glpi-form-editor-question-option-order
                >
                <button
                    type=\"button\"
                    class=\"btn btn-sm btn-icon btn-ghost-secondary ";
            // line 50
            yield (((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
            yield "\"
                    aria-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "remove_option", [], "any", false, false, false, 51), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-remove
                >
                    <i class=\"ti ti-x\"></i>
                </button>
            </div>
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__e3bf999e3539bf5ff819487d677a8ac2";
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
        return array (  301 => 51,  297 => 50,  288 => 44,  284 => 43,  277 => 39,  273 => 38,  269 => 37,  265 => 36,  255 => 29,  251 => 28,  247 => 27,  243 => 26,  239 => 25,  234 => 23,  227 => 19,  220 => 15,  213 => 11,  207 => 7,  204 => 6,  201 => 5,  198 => 4,  178 => 3,  171 => 110,  163 => 105,  156 => 101,  146 => 94,  139 => 90,  136 => 89,  130 => 86,  123 => 83,  121 => 82,  110 => 74,  106 => 72,  89 => 70,  72 => 69,  67 => 67,  63 => 66,  58 => 64,  52 => 61,  48 => 59,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__e3bf999e3539bf5ff819487d677a8ac2", "");
    }
}
