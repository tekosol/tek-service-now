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

/* components/form/basic_inputs_macros.html.twig */
class __TwigTemplate_0a8a179776f7c28202e474556f1b6500 extends Template
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
        // line 118
        yield "

";
        // line 133
        yield "

";
        // line 162
        yield "

";
        // line 192
        yield "

";
        // line 197
        yield "

";
        // line 202
        yield "

";
        // line 219
        yield "

";
        // line 224
        yield "

";
        // line 318
        yield "

";
        // line 325
        yield "

";
        // line 428
        yield "

";
        // line 452
        yield "

";
        // line 475
        yield "

";
        // line 480
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_input($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "type" => "text", "input_addclass" => "", "additional_attributes" => [], "readonly" => false, "disabled" => false, "multiple" => false, "required" => false, "maxlength" => null, "is_disclosable" => false, "is_copyable" => false, "clearable" => false],             // line 47
($context["options"] ?? null));
            // line 48
            yield "
    ";
            // line 49
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 49), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 49), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 49), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["required" => true]);
                // line 51
                yield "    ";
            }
            // line 52
            yield "
    ";
            // line 53
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 53), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 53), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 53), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 55
                yield "    ";
            }
            // line 56
            yield "
   ";
            // line 57
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 57)) && (null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 57)))) {
                // line 58
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((Html::sanitizeDomId(                // line 59
($context["name"] ?? null)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()))]);
                // line 61
                yield "   ";
            }
            // line 62
            yield "
    ";
            // line 63
            $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "        <input type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 64), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 64) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 64)), "html", null, true)) : (""));
                yield "
               class=\"form-control ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 65), "html", null, true);
                yield "\"
               name=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 68
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 70)), "html", null, true)) : (""));
                yield "
               ";
                // line 71
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
               ";
                // line 72
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
               ";
                // line 73
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multiple") : (""));
                yield " ";
                // line 74
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
               ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", true, true, false, 75)) {
                    yield "pattern=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", false, false, false, 75), "html", null, true);
                    yield "\"";
                }
                // line 76
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 76)) {
                    yield "min=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 76), "html", null, true);
                    yield "\"";
                }
                // line 77
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 77)) {
                    yield "max=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 77), "html", null, true);
                    yield "\"";
                }
                // line 78
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 78)) {
                    yield "step=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 78), "html", null, true);
                    yield "\"";
                }
                yield " />
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            yield "
    ";
            // line 81
            $context["more_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 82
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 83
                    yield "            <div class=\"btn btn-outline-secondary\"
                 onmousedown=\"showDisclosablePasswordField('";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84), "js"), "html", null, true);
                    yield "')\"
                 onmouseup=\"hideDisclosablePasswordField('";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 85), "js"), "html", null, true);
                    yield "')\"
                 onmouseout=\"hideDisclosablePasswordField('";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 86), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-eye disclose\"></i>
            </div>
        ";
                }
                // line 90
                yield "
        ";
                // line 91
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "            <div class=\"btn btn-outline-secondary\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 92), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-clipboard-copy disclose\"></i>
            </div>
        ";
                }
                // line 96
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            yield "
    ";
            // line 98
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["more_html"] ?? null))) > 0)) {
                // line 99
                yield "        ";
                $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 100
                    yield "            <div class=\"btn-group btn-group-sm d-flex\">
                ";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
                    yield "
                ";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["more_html"] ?? null), "html", null, true);
                    yield "
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                yield "    ";
            }
            // line 106
            yield "
    ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
            yield "

    ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "        <span class=\"d-inline-flex\">
            <input type=\"checkbox\" name=\"_blank_";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"_blank_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
            <label for=\"_blank_";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
                ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                yield "
            </label>
        </span>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function macro_text($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 121
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["copyable" => false],             // line 123
($context["options"] ?? null));
            // line 124
            yield "
    ";
            // line 125
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "        <div class=\"copy_to_clipboard_wrapper\">
    ";
            }
            // line 128
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 128, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text"])]);
            yield "
    ";
            // line 129
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function macro_number($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 136
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["step" => 1],             // line 138
($context["options"] ?? null));
            // line 139
            yield "
    ";
            // line 140
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 140) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 140), false)) : (false))) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 140), false)) : (false)))) {
                // line 141
                yield "        ";
                // line 142
                yield "        ";
                $context["decimals_part"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 142), ".");
                // line 143
                yield "        ";
                $context["decimals"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["decimals_part"] ?? null), 1, [], "array", true, true, false, 143)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["decimals_part"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null))) : (0));
                // line 144
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["decimals" => ($context["decimals"] ?? null)]);
                // line 145
                yield "    ";
            }
            // line 146
            yield "
    ";
            // line 147
            if ((($context["value"] ?? null) == "")) {
                // line 148
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 148)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 148)) : (0));
                // line 149
                yield "    ";
            }
            // line 150
            yield "
    ";
            // line 151
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 151) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 151), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 151)))) {
                // line 152
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 152)) {
                    // line 153
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", false, false, false, 153)]);
                    // line 154
                    yield "        ";
                } else {
                    // line 155
                    yield "            ";
                    // line 156
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                    // line 157
                    yield "        ";
                }
                // line 158
                yield "    ";
            }
            // line 159
            yield "
    ";
            // line 160
            yield $this->getTemplateForMacro("macro_input", $context, 160, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "number"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 164
    public function macro_color($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 165
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((            // line 166
($context["name"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 166)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 166)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))],             // line 167
($context["options"] ?? null));
            // line 168
            yield "
    ";
            // line 169
            yield $this->getTemplateForMacro("macro_input", $context, 169, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "input_addclass" => "rounded-0"])]);
            // line 172
            yield "
    <script>
        \$(function () {
            \$(\"#";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 175), "css"), "js"), "html", null, true);
            yield "\").spectrum({
                showInput: true,
                preferredFormat: \"hex\",
                type: \"text\",
                cancelText: \"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js"), "html", null, true);
            yield "\",
                chooseText: \"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validate"), "js"), "html", null, true);
            yield "\",
                change: function (color) {
                    if (color !== null && color.getAlpha() !== 1) {
                        let hex = color.toHexString();
                        hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                        this.value = hex;
                    }
                }
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 194
    public function macro_password($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 195
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 195, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "password"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 199
    public function macro_email($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 200
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 200, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "email"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 204
    public function macro_file($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 205
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["simple" => false],             // line 207
($context["options"] ?? null));
            // line 208
            yield "
    ";
            // line 209
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 210
                yield "        ";
                yield $this->getTemplateForMacro("macro_input", $context, 210, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "file"])]);
                yield "
    ";
            } else {
                // line 212
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [Twig\Extension\CoreExtension::merge(                // line 213
($context["options"] ?? null), ["name" =>                 // line 214
($context["name"] ?? null)])]);
                // line 217
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 221
    public function macro_hidden($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 222
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 222, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "hidden"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 226
    public function macro_date($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 227
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enableTime" => false, "checkIsExpired" => false, "clearable" => false, "input_addclass" => "", "readonly" => false, "disabled" => false, "maybeempty" => false],             // line 236
($context["options"] ?? null));
            // line 237
            yield "
    ";
            // line 238
            $context["editable"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 238) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 238));
            // line 239
            yield "
    ";
            // line 240
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(            // line 241
($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 241))],             // line 242
($context["options"] ?? null));
            // line 243
            yield "
    ";
            // line 244
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 244), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 244), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 244), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 245
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 246
                yield "    ";
            }
            // line 247
            yield "
    ";
            // line 248
            if ((($context["value"] ?? null) == "NULL")) {
                // line 249
                yield "      ";
                $context["value"] = null;
                // line 250
                yield "   ";
            }
            // line 251
            yield "
    ";
            // line 252
            $context["final_expiration_class"] = "";
            // line 253
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "        ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                    // line 255
                    yield "            ";
                    $context["final_expiration_class"] = " warn";
                    // line 256
                    yield "        ";
                }
                // line 257
                yield "    ";
            } else {
                // line 258
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 258)) {
                    // line 259
                    yield "            ";
                    $context["final_expiration_class"] = (" " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 259));
                    // line 260
                    yield "        ";
                } else {
                    // line 261
                    yield "            ";
                    $context["final_expiration_class"] = "";
                    // line 262
                    yield "        ";
                }
                // line 263
                yield "    ";
            }
            // line 264
            yield "
    <div class=\"btn-group flex-grow-1 flatpickr d-flex\" id=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 265), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true)));
            yield "\">
        ";
            // line 266
            yield $this->getTemplateForMacro("macro_input", $context, 266, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 268
($context["options"] ?? null), "id", [], "any", false, false, false, 268) . "_input"), "additional_attributes" => ["data-input" => ""], "input_addclass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 270
($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 270) . ($context["final_expiration_class"] ?? null)), "clearable" => false])]);
            // line 272
            yield "

        ";
            // line 274
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 275
                yield "            ";
                $context["calendar_icon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-calendar-time") : ("ti ti-calendar"));
                // line 276
                yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-toggle>
                <i class=\"";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["calendar_icon"] ?? null), "html", null, true);
                yield "\"></i>
                <span class=\"sr-only\">";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true);
                yield "</span>
            </button>
            ";
                // line 281
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 281) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maybeempty", [], "any", false, false, false, 281))) {
                    // line 282
                    yield "                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-clear title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                    yield "\">
                    <i class=\"ti ti-circle-x\"></i>
                </button>
            ";
                }
                // line 286
                yield "        ";
            }
            // line 287
            yield "    </div>

    ";
            // line 289
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 290
                yield "        ";
                $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
                // line 291
                yield "        ";
                $context["date_format"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 291)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Y-m-d H:i:S") : ("Y-m-d"));
                // line 292
                yield "        ";
                $context["alt_format"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : ("")));
                // line 293
                yield "        <script>
            \$(function() {
                \$(\"#";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 295), "css"), "js"), "html", null, true);
                yield "\").flatpickr({
                    wrap: true,
                    altInput: true,
                    dateFormat: '";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "js"), "html", null, true);
                yield "',
                    altFormat: '";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt_format"] ?? null), "js"), "html", null, true);
                yield "',
                    enableTime: ";
                // line 300
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    enableSeconds: ";
                // line 301
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    weekNumbers: true,
                    time_24hr: true,
                    allowInput: ";
                // line 304
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    clickOpens: ";
                // line 305
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    locale: getFlatPickerLocale(\"";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["locale"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null), "js"), "html", null, true);
                yield "\", \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["locale"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["region"] ?? null) : null), "js"), "html", null, true);
                yield "\"),
                    onClose(dates, currentdatestring, picker) {
                        picker.setDate(picker.altInput.value, true, picker.config.altFormat)
                    },
                    plugins: [
                        CustomFlatpickrButtons()
                    ]
                });
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 320
    public function macro_datetime($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 321
            yield "    ";
            yield $this->getTemplateForMacro("macro_date", $context, 321, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["enableTime" => true])]);
            // line 323
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 327
    public function macro_textarea($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 328
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "rows" => 3, "enable_richtext" => false, "enable_images" => true, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 335
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 335) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 335)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "readonly" => false, "disabled" => false, "required" => false, "add_body_classes" => [], "toolbar" => true, "toolbar_location" => "top", "init" => true, "init_on_demand" => false, "placeholder" => "", "enable_form_tags" => false, "form_tags_form_id" => null, "aria_label" => "", "statusbar" => true, "content_style" => "", "input_addclass" => "", "additional_attributes" => [], "plugins_to_remove" => []],             // line 357
($context["options"] ?? null));
            // line 358
            yield "
    ";
            // line 359
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 359), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 359), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 359), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 360
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 361
                yield "    ";
            }
            // line 362
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 363
($context["options"] ?? null), "id", [], "any", false, false, false, 363)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 363)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 363))))]);
            // line 365
            yield "
    ";
            // line 367
            yield "    <textarea class=\"form-control ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 367), "html", null, true);
            yield "\"
            id=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 368), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" rows=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rows", [], "any", false, false, false, 368), "html", null, true);
            yield "\"
            style=\"width: 100%;\"
            ";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 370));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 371
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 373))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 374
                yield "                aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 374), "html", null, true);
                yield "\"
            ";
            }
            // line 376
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 376))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 377
                yield "                placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 377), "html", null, true);
                yield "\"
            ";
            }
            // line 379
            yield "            ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 379)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 380
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
            ";
            // line 381
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 381)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield ">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 381)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true)));
            yield "</textarea>

    ";
            // line 383
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 383)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 384
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [CoreExtension::getAttribute($this->env, $this->source,                 // line 385
($context["options"] ?? null), "id", [], "any", false, false, false, 385), CoreExtension::getAttribute($this->env, $this->source,                 // line 386
($context["options"] ?? null), "rand", [], "any", false, false, false, 386), true, ((CoreExtension::getAttribute($this->env, $this->source,                 // line 388
($context["options"] ?? null), "disabled", [], "any", true, true, false, 388)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 388), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                 // line 389
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 389), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 390
($context["options"] ?? null), "editor_height", [], "any", true, true, false, 390)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "editor_height", [], "any", false, false, false, 390), 150)) : (150)), CoreExtension::getAttribute($this->env, $this->source,                 // line 391
($context["options"] ?? null), "add_body_classes", [], "any", false, false, false, 391), CoreExtension::getAttribute($this->env, $this->source,                 // line 392
($context["options"] ?? null), "toolbar_location", [], "any", false, false, false, 392), CoreExtension::getAttribute($this->env, $this->source,                 // line 393
($context["options"] ?? null), "init", [], "any", false, false, false, 393), CoreExtension::getAttribute($this->env, $this->source,                 // line 394
($context["options"] ?? null), "placeholder", [], "any", false, false, false, 394), CoreExtension::getAttribute($this->env, $this->source,                 // line 395
($context["options"] ?? null), "toolbar", [], "any", false, false, false, 395), CoreExtension::getAttribute($this->env, $this->source,                 // line 396
($context["options"] ?? null), "statusbar", [], "any", false, false, false, 396), CoreExtension::getAttribute($this->env, $this->source,                 // line 397
($context["options"] ?? null), "content_style", [], "any", false, false, false, 397), CoreExtension::getAttribute($this->env, $this->source,                 // line 398
($context["options"] ?? null), "init_on_demand", [], "any", false, false, false, 398), CoreExtension::getAttribute($this->env, $this->source,                 // line 399
($context["options"] ?? null), "plugins_to_remove", [], "any", false, false, false, 399)]);
                // line 401
                yield "   ";
            }
            // line 402
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_form_tags", [], "any", false, false, false, 402)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 403
                yield "        <script>
            \$(function() {
                const form_tags = new GLPI.RichText.FormTags(
                    tinymce.get('";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 406), "js"), "html", null, true);
                yield "'),
                    ";
                // line 407
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "form_tags_form_id", [], "any", false, false, false, 407));
                yield ",
                );
                form_tags.register();
            });
        </script>
    ";
            }
            // line 413
            yield "
    ";
            // line 414
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, true, false, 414), "enabled", [], "any", true, true, false, 414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 414), "enabled", [], "any", false, false, false, 414), false)) : (false)) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 415
                yield "        <script>
            \$(function() {
                const user_mention = new GLPI.RichText.UserMention(
                    tinymce.get('";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 418), "js"), "html", null, true);
                yield "'),
                    ";
                // line 419
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 419));
                yield ",
                    '";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 420))]), "html", null, true);
                yield "',
                    ";
                // line 421
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 421));
                yield "
                );
                user_mention.register();
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 430
    public function macro_checkbox($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 431
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "input_addclass" => "", "readonly" => false, "disabled" => false, "required" => false, "additional_attributes" => []],             // line 438
($context["options"] ?? null));
            // line 439
            yield "
    <input type=\"hidden\"   name=\"";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"0\" />
    <input type=\"checkbox\" name=\"";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"1\"
           class=\"form-check-input ";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 442), "html", null, true);
            yield "\"
           ";
            // line 443
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 443) != null)) ? ((("id=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 443))) . "\"")) : (""));
            yield "
           ";
            // line 444
            yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            yield "
           ";
            // line 445
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 445)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
           ";
            // line 446
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 446)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield "
           ";
            // line 447
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 447)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 448));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 449
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            yield "/>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 454
    public function macro_button($name = null, $label = "", $type = "button", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "type" => $type,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 455
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "class" => "btn btn-primary", "icon" => "", "icon_title" => "", "additional_attributes" => []],             // line 461
($context["options"] ?? null));
            // line 462
            yield "
    <button class=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 463), "html", null, true);
            yield "\" type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 464
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 464));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 465
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            yield ">
        ";
            // line 467
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 467))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 468
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 468), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 468), "html", null, true);
                yield "\"></i>
        ";
            }
            // line 470
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 471
                yield "            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</span>
        ";
            }
            // line 473
            yield "    </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 477
    public function macro_submit($name = null, $label = "", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 478
            yield "    ";
            yield $this->getTemplateForMacro("macro_button", $context, 478, $this->getSourceContext())->macro_button(...[($context["name"] ?? null), ($context["label"] ?? null), "submit", ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 481
    public function macro_label($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "id" => $id,
            "options" => $options,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 482
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null, "tpl_mark" => null, "helper" => false],             // line 487
($context["options"] ?? null));
            // line 488
            yield "
    ";
            // line 489
            $context["required_mark"] = "";
            // line 490
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 490) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 490), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 490)], "method", true, true, false, 490)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 490), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 490)], "method", false, false, false, 490), false)) : (false))) || (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", true, true, false, 490) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 490)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 490)) : (false)))) {
                // line 491
                yield "        ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 492
                yield "    ";
            }
            // line 493
            yield "
    ";
            // line 494
            $context["helper"] = "";
            // line 495
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 496
                yield "        ";
                // line 497
                yield "        ";
                // line 498
                yield "        ";
                $context["helper_safe_text"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 498)));
                // line 499
                yield "        ";
                $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 500
                    yield "        <span class=\"form-help\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              data-bs-html=\"true\"
              data-bs-title=\"";
                    // line 504
                    yield ($context["helper_safe_text"] ?? null);
                    yield "\">
            ?
        </span>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 508
                yield "    ";
            }
            // line 509
            yield "
    ";
            // line 510
            $context["locked_mark"] = "";
            // line 511
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 511)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 512
                yield "        ";
                $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 513
                    yield "        ";
                    $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field will not be updated from inventory"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 514
                    yield "        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 514))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 515
                        yield "            ";
                        $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "
            -
            ";
                            // line 517
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 517)), "html", null, true);
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 518
                        yield "        ";
                    }
                    // line 519
                    yield "        <i class=\"ti ti-lock\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 521
                yield "    ";
            }
            // line 522
            yield "
    <label class=\"";
            // line 523
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 524
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
        ";
            // line 525
            yield ($context["locked_mark"] ?? null);
            yield "
        ";
            // line 526
            yield ($context["required_mark"] ?? null);
            yield "
        ";
            // line 527
            yield ($context["helper"] ?? null);
            yield "
        ";
            // line 528
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 528))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 529
                yield "            ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 529);
                yield "
        ";
            }
            // line 531
            yield "    </label>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/basic_inputs_macros.html.twig";
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
        return array (  1372 => 531,  1366 => 529,  1364 => 528,  1360 => 527,  1356 => 526,  1352 => 525,  1348 => 524,  1342 => 523,  1339 => 522,  1336 => 521,  1329 => 519,  1326 => 518,  1322 => 517,  1315 => 515,  1312 => 514,  1306 => 513,  1303 => 512,  1300 => 511,  1298 => 510,  1295 => 509,  1292 => 508,  1284 => 504,  1278 => 500,  1275 => 499,  1272 => 498,  1270 => 497,  1268 => 496,  1265 => 495,  1263 => 494,  1260 => 493,  1257 => 492,  1254 => 491,  1251 => 490,  1249 => 489,  1246 => 488,  1244 => 487,  1242 => 482,  1227 => 481,  1218 => 478,  1203 => 477,  1196 => 473,  1190 => 471,  1187 => 470,  1179 => 468,  1177 => 467,  1174 => 466,  1163 => 465,  1159 => 464,  1149 => 463,  1146 => 462,  1144 => 461,  1142 => 455,  1126 => 454,  1119 => 450,  1108 => 449,  1104 => 448,  1100 => 447,  1096 => 446,  1092 => 445,  1088 => 444,  1084 => 443,  1080 => 442,  1076 => 441,  1072 => 440,  1069 => 439,  1067 => 438,  1065 => 431,  1051 => 430,  1038 => 421,  1034 => 420,  1030 => 419,  1026 => 418,  1021 => 415,  1019 => 414,  1016 => 413,  1007 => 407,  1003 => 406,  998 => 403,  995 => 402,  992 => 401,  990 => 399,  989 => 398,  988 => 397,  987 => 396,  986 => 395,  985 => 394,  984 => 393,  983 => 392,  982 => 391,  981 => 390,  980 => 389,  979 => 388,  978 => 386,  977 => 385,  975 => 384,  973 => 383,  966 => 381,  962 => 380,  957 => 379,  951 => 377,  948 => 376,  942 => 374,  939 => 373,  928 => 371,  924 => 370,  915 => 368,  910 => 367,  907 => 365,  905 => 363,  903 => 362,  900 => 361,  897 => 360,  895 => 359,  892 => 358,  890 => 357,  889 => 335,  887 => 328,  873 => 327,  866 => 323,  863 => 321,  849 => 320,  829 => 306,  825 => 305,  821 => 304,  815 => 301,  811 => 300,  807 => 299,  803 => 298,  797 => 295,  793 => 293,  790 => 292,  787 => 291,  784 => 290,  782 => 289,  778 => 287,  775 => 286,  767 => 282,  764 => 281,  759 => 278,  755 => 277,  752 => 276,  749 => 275,  747 => 274,  743 => 272,  741 => 270,  740 => 268,  739 => 266,  733 => 265,  730 => 264,  727 => 263,  724 => 262,  721 => 261,  718 => 260,  715 => 259,  712 => 258,  709 => 257,  706 => 256,  703 => 255,  700 => 254,  697 => 253,  695 => 252,  692 => 251,  689 => 250,  686 => 249,  684 => 248,  681 => 247,  678 => 246,  675 => 245,  673 => 244,  670 => 243,  668 => 242,  667 => 241,  666 => 240,  663 => 239,  661 => 238,  658 => 237,  656 => 236,  654 => 227,  640 => 226,  631 => 222,  617 => 221,  610 => 217,  608 => 214,  607 => 213,  605 => 212,  599 => 210,  597 => 209,  594 => 208,  592 => 207,  590 => 205,  576 => 204,  567 => 200,  553 => 199,  544 => 195,  530 => 194,  512 => 180,  508 => 179,  501 => 175,  496 => 172,  494 => 169,  491 => 168,  489 => 167,  488 => 166,  486 => 165,  472 => 164,  464 => 160,  461 => 159,  458 => 158,  455 => 157,  452 => 156,  450 => 155,  447 => 154,  444 => 153,  441 => 152,  439 => 151,  436 => 150,  433 => 149,  430 => 148,  428 => 147,  425 => 146,  422 => 145,  419 => 144,  416 => 143,  413 => 142,  411 => 141,  409 => 140,  406 => 139,  404 => 138,  402 => 136,  388 => 135,  380 => 130,  378 => 129,  373 => 128,  369 => 126,  367 => 125,  364 => 124,  362 => 123,  360 => 121,  346 => 120,  335 => 113,  331 => 112,  325 => 111,  322 => 110,  320 => 109,  315 => 107,  312 => 106,  309 => 105,  302 => 102,  298 => 101,  295 => 100,  292 => 99,  290 => 98,  287 => 97,  283 => 96,  275 => 92,  273 => 91,  270 => 90,  263 => 86,  259 => 85,  255 => 84,  252 => 83,  249 => 82,  247 => 81,  244 => 80,  233 => 78,  226 => 77,  219 => 76,  213 => 75,  208 => 74,  205 => 73,  201 => 72,  197 => 71,  192 => 70,  181 => 68,  177 => 67,  171 => 66,  167 => 65,  160 => 64,  158 => 63,  155 => 62,  152 => 61,  150 => 59,  148 => 58,  146 => 57,  143 => 56,  140 => 55,  137 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  124 => 49,  121 => 48,  119 => 47,  117 => 34,  103 => 33,  97 => 480,  93 => 475,  89 => 452,  85 => 428,  81 => 325,  77 => 318,  73 => 224,  69 => 219,  65 => 202,  61 => 197,  57 => 192,  53 => 162,  49 => 133,  45 => 118,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/basic_inputs_macros.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\components\\form\\basic_inputs_macros.html.twig");
    }
}
