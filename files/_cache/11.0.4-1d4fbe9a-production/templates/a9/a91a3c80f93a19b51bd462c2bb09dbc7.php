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

/* __string_template__1add4bfff820f146ae980bbc8eaabdab */
class __TwigTemplate_811407eff8ef48818202d0a2feebd58a extends Template
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
            <div id=\"is_multiple_actors_";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"d-flex gap-2\">
                <label class=\"form-check form-switch mb-0\">
                    <input type=\"hidden\" name=\"is_multiple_actors\" value=\"0\"
                    data-glpi-form-editor-specific-question-extra-data>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"is_multiple_actors\"
                        value=\"1\" ";
        // line 8
        yield (((($tmp = ($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                        onchange=\"handleMultipleActorsCheckbox_";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(this)\"
                        data-glpi-form-editor-specific-question-extra-data>
                    <span class=\"form-check-label\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_multiple_actors_label"] ?? null), "html", null, true);
        yield "</span>
                </label>
            </div>

            <script>
                function handleMultipleActorsCheckbox_";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(input) {
                    const is_checked = \$(input).is(':checked');
                    const selects = \$(input).closest('section[data-glpi-form-editor-question]')
                        .find('div .actors-dropdown');

                    ";
        // line 22
        yield "                    selects.toggleClass('d-none').find('select').prop('disabled', is_checked)
                        .filter('[multiple]').prop('disabled', !is_checked);

                    ";
        // line 26
        yield "                    selects.find('input[type=\"hidden\"]').prop('disabled', !is_checked);
                }
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__1add4bfff820f146ae980bbc8eaabdab";
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
        return array (  86 => 26,  81 => 22,  73 => 16,  65 => 11,  60 => 9,  56 => 8,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__1add4bfff820f146ae980bbc8eaabdab", "");
    }
}
