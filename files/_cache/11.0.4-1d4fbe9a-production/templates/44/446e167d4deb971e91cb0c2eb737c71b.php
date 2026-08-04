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

/* __string_template__1545dfb67426d10df2e76ce47960b06d */
class __TwigTemplate_fec62be173cd51965aca9d840ddf8382 extends Template
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
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 3, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", "", [], "", ["init" =>         // line 9
($context["init"] ?? null), "no_label" => true, "field_class" => Twig\Extension\CoreExtension::join(["col-12", "col-sm-6", "devices-dropdown", (((($tmp =         // line 15
($context["is_multiple_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"))], " "), "multiple" => true, "disabled" => true, "aria_label" =>         // line 19
($context["aria_label_multiple_devices"] ?? null), "mb" => ""]]);
        // line 22
        yield "

            ";
        // line 24
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 24, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", "", [], "", ["init" =>         // line 30
($context["init"] ?? null), "no_label" => true, "field_class" => Twig\Extension\CoreExtension::join(["col-12", "col-sm-6", "devices-dropdown", (((($tmp =         // line 36
($context["is_multiple_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""))], " "), "display_emptychoice" => true, "disabled" => true, "aria_label" =>         // line 40
($context["aria_label_single_device"] ?? null), "mb" => ""]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__1545dfb67426d10df2e76ce47960b06d";
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
        return array (  60 => 40,  59 => 36,  58 => 30,  57 => 24,  53 => 22,  51 => 19,  50 => 15,  49 => 9,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__1545dfb67426d10df2e76ce47960b06d", "");
    }
}
