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

/* pages/setup/mailcollector/server_config_fields.html.twig */
class __TwigTemplate_1af09bba774c3c82cdebf9fd13d2143a extends Template
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
        // line 32
        yield "
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 35, $this->getSourceContext())->macro_textField(...["mail_server", (($_v0 =         // line 37
($context["connect_opts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["address"] ?? null) : null), __("Server"), ["required" => true]]);
        // line 41
        yield "

";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 43, $this->getSourceContext())->macro_textField(...["server_port", (($_v1 =         // line 45
($context["connect_opts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["port"] ?? null) : null), __("Port (optional)"), ["helper" => __("Typical ports: IMAP (143), IMAPS (993), POP (110), POPS (995)")]]);
        // line 51
        yield "

";
        // line 53
        $context["connection_options_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 54
            yield "   <div class=\"d-flex flex-wrap mb-n2\">
      ";
            // line 55
            $context["type_value"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v2 = ($context["connect_opts"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["type"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("/" . (($_v3 = ($context["connect_opts"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["type"] ?? null) : null))) : (""));
            // line 56
            yield "      ";
            $context["options"] = ["no_label" => true, "display_emptychoice" => true, "field_class" => "me-2", "mb" => "mb-0"];
            // line 62
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 62, $this->getSourceContext())->macro_dropdownArrayField(...["server_type", ($context["type_value"] ?? null), ($context["protocol_choices"] ?? null), "", ($context["options"] ?? null)]);
            yield "
      ";
            // line 63
            $context["ssl_value"] = (((($tmp = (($_v4 = ($context["connect_opts"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["ssl"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("/ssl") : (""));
            // line 64
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 64, $this->getSourceContext())->macro_dropdownArrayField(...["server_ssl", ($context["ssl_value"] ?? null), ["/ssl" => __("SSL")], "",             // line 66
($context["options"] ?? null)]);
            yield "
      ";
            // line 67
            $context["tls_value"] = ((((($_v5 = ($context["connect_opts"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["tls"] ?? null) : null) === true)) ? ("/tls") : (((((($_v6 = ($context["connect_opts"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["tls"] ?? null) : null) === false)) ? ("/notls") : (""))));
            // line 68
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 68, $this->getSourceContext())->macro_dropdownArrayField(...["server_tls", ($context["tls_value"] ?? null), ["/tls" => __("TLS"), "/notls" => __("NO-TLS")], "",             // line 71
($context["options"] ?? null)]);
            yield "
      ";
            // line 72
            $context["cert_value"] = ((((($_v7 = ($context["connect_opts"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["validate-cert"] ?? null) : null) === true)) ? ("/validate-cert") : (((((($_v8 = ($context["connect_opts"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["validate-cert"] ?? null) : null) === false)) ? ("/novalidate-cert") : (""))));
            // line 73
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 73, $this->getSourceContext())->macro_dropdownArrayField(...["server_cert", ($context["cert_value"] ?? null), ["/novalidate-cert" => __("NO-VALIDATE-CERT"), "/validate-cert" => __("VALIDATE-CERT")], "",             // line 76
($context["options"] ?? null)]);
            yield "
      ";
            // line 77
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 77, $this->getSourceContext())->macro_dropdownArrayField(...["server_rsh", ((((($_v9 = ($context["connect_opts"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["norsh"] ?? null) : null) == true)) ? ("/norsh") : ("")), ["/norsh" => __("NORSH")], "",             // line 79
($context["options"] ?? null)]);
            yield "
      ";
            // line 80
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 80, $this->getSourceContext())->macro_dropdownArrayField(...["server_secure", ((((($_v10 = ($context["connect_opts"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["secure"] ?? null) : null) == true)) ? ("/secure") : ("")), ["/secure" => __("SECURE")], "",             // line 82
($context["options"] ?? null)]);
            yield "
      ";
            // line 83
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 83, $this->getSourceContext())->macro_dropdownArrayField(...["server_debug", ((((($_v11 = ($context["connect_opts"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["debug"] ?? null) : null) == true)) ? ("/debug") : ("")), ["/debug" => __("DEBUG")], "",             // line 85
($context["options"] ?? null)]);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 88, $this->getSourceContext())->macro_htmlField(...["",         // line 90
($context["connection_options_fields"] ?? null), __("Connection options"), ["full_width" => true]]);
        // line 95
        yield "
";
        // line 96
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["connect_string"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "   ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 97, $this->getSourceContext())->macro_htmlField(...["", ($context["connect_string"] ?? null), __("Connection string"), ["add_field_class" => "fw-bold", "full_width" => true]]);
            // line 100
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/mailcollector/server_config_fields.html.twig";
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
        return array (  132 => 100,  129 => 97,  127 => 96,  124 => 95,  122 => 90,  121 => 88,  114 => 85,  113 => 83,  109 => 82,  108 => 80,  104 => 79,  103 => 77,  99 => 76,  97 => 73,  95 => 72,  91 => 71,  89 => 68,  87 => 67,  83 => 66,  81 => 64,  79 => 63,  74 => 62,  71 => 56,  69 => 55,  66 => 54,  64 => 53,  60 => 51,  58 => 45,  57 => 43,  53 => 41,  51 => 37,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/mailcollector/server_config_fields.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\setup\\mailcollector\\server_config_fields.html.twig");
    }
}
