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

/* __string_template__cbf96900bd175b3ae09ccdc839187a05 */
class __TwigTemplate_1174cb75eb7e26b397bdf8a46c365fef extends Template
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
            <div class=\"d-flex gap-2\">
                <label class=\"form-check form-switch mb-0\">
                    <input type=\"hidden\" name=\"is_date_enabled\" value=\"0\"
                    data-glpi-form-editor-specific-question-extra-data>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"is_date_enabled\"
                        id=\"is_date_enabled_";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                        value=\"1\" ";
        // line 9
        yield (((($tmp = ($context["is_date_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                        data-glpi-form-editor-specific-question-extra-data>
                    <span class=\"form-check-label\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["labels"] ?? null), "date", [], "any", false, false, false, 11), "html", null, true);
        yield "</span>
                </label>
                <label class=\"form-check form-switch mb-0\">
                    <input type=\"hidden\" name=\"is_time_enabled\" value=\"0\"
                    data-glpi-form-editor-specific-question-extra-data>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"is_time_enabled\"
                        id=\"is_time_enabled_";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                        value=\"1\" ";
        // line 18
        yield (((($tmp = ($context["is_time_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                        data-glpi-form-editor-specific-question-extra-data>
                    <span class=\"form-check-label\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["labels"] ?? null), "time", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
                </label>
            </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__cbf96900bd175b3ae09ccdc839187a05";
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
        return array (  80 => 20,  75 => 18,  71 => 17,  62 => 11,  57 => 9,  53 => 8,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__cbf96900bd175b3ae09ccdc839187a05", "");
    }
}
