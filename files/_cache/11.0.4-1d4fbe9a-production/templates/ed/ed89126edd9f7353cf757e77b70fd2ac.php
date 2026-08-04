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

/* __string_template__35a6ccd72e9e1dc6e34b50b7fd383dcb */
class __TwigTemplate_321a373e3803b199e7e5f79e399ba3d1 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
        ";
        // line 3
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", ["default_value",         // line 5
($context["values"] ?? null), ["form_id" =>         // line 7
($context["form_id"] ?? null), "multiple" => false, "init" =>         // line 9
($context["init"] ?? null), "allowed_types" =>         // line 10
($context["allowed_types"] ?? null), "right_for_users" =>         // line 11
($context["right_for_users"] ?? null), "group_conditions" =>         // line 12
($context["group_conditions"] ?? null), "aria_label" =>         // line 13
($context["aria_label"] ?? null), "specific_tags" => (((($tmp =         // line 14
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([]))]]);
        // line 19
        yield "        ";
        $context["actors_dropdown_multiple"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", ["default_value",         // line 21
($context["values"] ?? null), ["form_id" =>         // line 23
($context["form_id"] ?? null), "multiple" => true, "init" =>         // line 25
($context["init"] ?? null), "allowed_types" =>         // line 26
($context["allowed_types"] ?? null), "right_for_users" =>         // line 27
($context["right_for_users"] ?? null), "group_conditions" =>         // line 28
($context["group_conditions"] ?? null), "aria_label" =>         // line 29
($context["aria_label"] ?? null), "specific_tags" => (((($tmp =  !        // line 30
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([]))]]);
        // line 35
        yield "
        ";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 36, $this->getSourceContext())->macro_htmlField(...["default_value",         // line 38
($context["actors_dropdown"] ?? null), "", ["disabled" =>         // line 41
($context["is_multiple_actors"] ?? null), "no_label" => true, "mb" => "", "wrapper_class" => "", "field_class" => Twig\Extension\CoreExtension::join(["actors-dropdown", "col-12", "col-sm-6", (((($tmp =  !        // line 49
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"))], " ")]]);
        // line 52
        yield "
        ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 53, $this->getSourceContext())->macro_htmlField(...["default_value",         // line 55
($context["actors_dropdown_multiple"] ?? null), "", ["no_label" => true, "wrapper_class" => "", "mb" => "", "field_class" => Twig\Extension\CoreExtension::join(["actors-dropdown", "col-12", "col-sm-6", (((($tmp =         // line 65
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"))], " ")]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__35a6ccd72e9e1dc6e34b50b7fd383dcb";
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
        return array (  82 => 65,  81 => 55,  80 => 53,  77 => 52,  75 => 49,  74 => 41,  73 => 38,  72 => 36,  69 => 35,  67 => 30,  66 => 29,  65 => 28,  64 => 27,  63 => 26,  62 => 25,  61 => 23,  60 => 21,  58 => 19,  56 => 14,  55 => 13,  54 => 12,  53 => 11,  52 => 10,  51 => 9,  50 => 7,  49 => 5,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__35a6ccd72e9e1dc6e34b50b7fd383dcb", "");
    }
}
