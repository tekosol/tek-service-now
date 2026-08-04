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

/* __string_template__8feab5ae051661c8c72b5aec167e80d0 */
class __TwigTemplate_67c377e1dc268288c7f8185f2a7f217a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
            ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 3, $this->getSourceContext())->macro_textareaField(...["default_value", (((($tmp =  !(null ===         // line 5
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 5), "default_value", [], "any", false, false, false, 5)) : ("")), "", ["placeholder" =>         // line 8
($context["placeholder"] ?? null), "enable_richtext" => true, "editor_height" => "100", "rows" => 1, "init" => false, "init_on_demand" => true, "is_horizontal" => false, "full_width" => true, "no_label" => true, "aria_label" =>         // line 17
($context["aria_label"] ?? null), "mb" => ""]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__8feab5ae051661c8c72b5aec167e80d0";
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
        return array (  51 => 17,  50 => 8,  49 => 5,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__8feab5ae051661c8c72b5aec167e80d0", "");
    }
}
