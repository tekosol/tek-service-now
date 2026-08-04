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

/* pages/setup/authentication/mail.html.twig */
class __TwigTemplate_caa3de9121597b6cb23eb0d3bc61750b extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 37, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name"), ($context["field_options"] ?? null)]);
        yield "

    ";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 39, $this->getSourceContext())->macro_textareaField(...["comment", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["comment"] ?? null) : null), __("Comments"), ($context["field_options"] ?? null)]);
        yield "

    ";
        // line 41
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 41, $this->getSourceContext())->macro_dropdownYesNo(...["is_default", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_default"] ?? null) : null), __("Default server"), ($context["field_options"] ?? null)]);
        yield "
    ";
        // line 42
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 42, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["is_active"] ?? null) : null), __("Active"), ($context["field_options"] ?? null)]);
        yield "
    ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 43, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 45, $this->getSourceContext())->macro_smallTitle(...[__("Server configuration")]);
        yield "
    ";
        // line 46
        $context["connect_opts"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::parseMailServerConnectString", [(($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["connect_string"] ?? null) : null)]);
        // line 47
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/setup/mailcollector/server_config_fields.html.twig", ["connect_opts" =>         // line 48
($context["connect_opts"] ?? null), "connect_string" => (($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["connect_string"] ?? null) : null), "protocol_choices" =>         // line 50
($context["protocol_choices"] ?? null)]);
        // line 51
        yield "

    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 53, $this->getSourceContext())->macro_smallTitle(...[__("Email options")]);
        yield "
    ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 54, $this->getSourceContext())->macro_textField(...["host", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["host"] ?? null) : null), __("Email domain name"), ["helper" => __("Users email will be login@domainname")]]);
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
        return "pages/setup/authentication/mail.html.twig";
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
        return array (  108 => 60,  106 => 56,  105 => 54,  101 => 53,  97 => 51,  95 => 50,  94 => 49,  93 => 48,  91 => 47,  89 => 46,  85 => 45,  80 => 43,  76 => 42,  72 => 41,  67 => 39,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication/mail.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\setup\\authentication\\mail.html.twig");
    }
}
