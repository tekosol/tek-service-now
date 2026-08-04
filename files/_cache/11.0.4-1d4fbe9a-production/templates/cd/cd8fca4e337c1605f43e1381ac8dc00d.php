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

/* __string_template__e08d6536b078d59438b4a34e3313072e */
class __TwigTemplate_6144838bd535f288c9f323f3eb74c702 extends Template
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
                    <input type=\"hidden\" name=\"is_multiple_dropdown\" value=\"0\"
                    data-glpi-form-editor-specific-question-extra-data>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"is_multiple_dropdown\"
                        value=\"1\" ";
        // line 8
        yield (((($tmp = ($context["is_multiple_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                        data-glpi-form-editor-specific-question-extra-data>
                    <span class=\"form-check-label\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_multiple_dropdown_label"] ?? null), "html", null, true);
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
        return "__string_template__e08d6536b078d59438b4a34e3313072e";
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
        return array (  58 => 10,  53 => 8,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__e08d6536b078d59438b4a34e3313072e", "");
    }
}
