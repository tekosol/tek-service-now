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

/* pages/assets/software.html.twig */
class __TwigTemplate_c6e5ed8e0a6b4dc1b7db14d4a30d9f81 extends Template
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

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        $context["dd_software"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Software", ["value" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["softwares_id"] ?? null) : null), "rand" =>             // line 41
($context["rand"] ?? null)]);
            // line 42
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        yield "
    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 45, $this->getSourceContext())->macro_checkboxField(...["is_update", (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_update"] ?? null) : null), __("Upgrade"), Twig\Extension\CoreExtension::merge(        // line 49
($context["field_options"] ?? null), ["add_field_html" => (__("from") .         // line 50
($context["dd_software"] ?? null))])]);
        // line 52
        yield "

    ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 54, $this->getSourceContext())->macro_dropdownField(...["SoftwareCategory", "softwarecategories_id", (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["softwarecategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SoftwareCategory"),         // line 59
($context["field_options"] ?? null)]);
        // line 60
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assets/software.html.twig";
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
        return array (  92 => 60,  90 => 59,  89 => 57,  88 => 54,  84 => 52,  82 => 50,  81 => 49,  80 => 47,  79 => 45,  76 => 44,  71 => 42,  69 => 41,  68 => 40,  66 => 39,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assets/software.html.twig", "C:\\xampp\\htdocs\\tek-service-now\\templates\\pages\\assets\\software.html.twig");
    }
}
