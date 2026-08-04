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

/* __string_template__41cf64dc87a4977211f05794228bfe2b */
class __TwigTemplate_ac8f3c3829bd1f764ff61414b15443b5 extends Template
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
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 3, $this->getSourceContext())->macro_textareaField(...[        // line 4
($context["input_name"] ?? null),         // line 5
($context["value"] ?? null), "", Twig\Extension\CoreExtension::merge(        // line 7
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "enable_richtext" => true, "enable_images" => false, "enable_form_tags" => true, "form_tags_form_id" =>         // line 13
($context["form_id"] ?? null), "content_style" => "body { line-height: 2.3; }", "mb" => ""])]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__41cf64dc87a4977211f05794228bfe2b";
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
        return array (  52 => 13,  51 => 7,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__41cf64dc87a4977211f05794228bfe2b", "");
    }
}
