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

/* __string_template__93f9118b6095de74a30456e03e333943 */
class __TwigTemplate_4d9b4d4a97e579747ac40ea5551d7d82 extends Template
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
        yield "            ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 2
        yield "
            <div class=\"row g-2\">
                <div class=\"col-6\">
                    <input
                        class=\"form-control\"
                        type=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "html", null, true);
        yield "\"
                        id=\"date_input_";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                        name=\"default_value\"
                        placeholder=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["placeholders"] ?? null), "input", [], "any", false, false, false, 10)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["input_type_ignore_text"] ?? null)] ?? null) : null), "html", null, true);
        yield "\"
                        value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_value"] ?? null), "html", null, true);
        yield "\"
                        aria-label=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["aria_label"] ?? null), "html", null, true);
        yield "\"
                        ";
        // line 13
        yield (((($tmp = ($context["is_default_value_current_time"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
        yield "
                    />
                </div>
                <div data-glpi-form-editor-question-extra-details class=\"col-auto d-flex align-items-center ms-1 mt-0\">
                    <label class=\"form-check form-switch m-0 d-flex align-items-center gap-2\">
                        <input type=\"hidden\" name=\"is_default_value_current_time\" value=\"0\"
                            data-glpi-form-editor-specific-question-extra-data>
                        <input id=\"is_default_value_current_time_";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" name=\"is_default_value_current_time\" class=\"form-check-input\"
                            type=\"checkbox\" value=\"1\" ";
        // line 21
        yield (((($tmp = ($context["is_default_value_current_time"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                            data-glpi-form-editor-specific-question-extra-data>
                        <span>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["placeholders"] ?? null), "default_value", [], "any", false, false, false, 23)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["input_type_ignore_text"] ?? null)] ?? null) : null), "html", null, true);
        yield "</span>
                    </label>
                </div>
            </div>

            ";
        // line 28
        if ((($context["question"] ?? null) == null)) {
            // line 29
            yield "                <script>
                    import(\"/js/modules/Forms/QuestionDateTime.js\").then((m) => {
                        new m.GlpiFormQuestionTypeDateTime(";
            // line 31
            yield json_encode(($context["placeholders"] ?? null));
            yield ");
                    });
                </script>
            ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__93f9118b6095de74a30456e03e333943";
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
        return array (  106 => 31,  102 => 29,  100 => 28,  92 => 23,  87 => 21,  83 => 20,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  56 => 8,  52 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__93f9118b6095de74a30456e03e333943", "");
    }
}
