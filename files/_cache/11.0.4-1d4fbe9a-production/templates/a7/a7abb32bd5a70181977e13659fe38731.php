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

/* pages/admin/form/form_destination_form.html.twig */
class __TwigTemplate_b227c5b3dbdb77785b6a565b51ef3bbf extends Template
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
        // line 40
        yield "
";
        // line 41
        $context["_source"] = Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypePluginKey((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null)), "glpi");
        // line 42
        yield "
<form id=\"form-destination-";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 43), "html", null, true);
        yield "\">
    <div class=\"overflow-x-hidden px-4\">
        ";
        // line 45
        if ((($tmp = ($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["concrete_destination"] ?? null), "renderConfigForm", [            // line 47
($context["form"] ?? null),             // line 48
($context["destination"] ?? null), CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["destination"] ?? null), "getConfig", [], "method", false, false, false, 49)], "method", false, false, false, 46);
            // line 50
            yield "
        ";
        } else {
            // line 52
            yield "            <div class=\"mt-2 alert alert-danger\" role=\"alert\">
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("This destination is not available, the plugin \"%1\$s\" is deactivated or removed."), ($context["_source"] ?? null)), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 56
        yield "        ";
        if (((((($tmp = ($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["concrete_destination"] ?? null), "useDefaultConfigLayout", [], "method", false, false, false, 56)) : (true)) && ($context["can_update"] ?? null))) {
            // line 57
            yield "            <div class=\"mt-3 mb-3\">
                ";
            // line 58
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_destination_actions.html.twig", ["form" =>             // line 59
($context["form"] ?? null), "destination" =>             // line 60
($context["destination"] ?? null)], false);
            // line 61
            yield "
            </div>
        ";
        }
        // line 64
        yield "    </div>

    ";
        // line 67
        yield "    <input type=\"hidden\" name=\"id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 67), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_destination_form.html.twig";
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
        return array (  103 => 68,  98 => 67,  94 => 64,  89 => 61,  87 => 60,  86 => 59,  85 => 58,  82 => 57,  79 => 56,  73 => 53,  70 => 52,  66 => 50,  64 => 49,  63 => 48,  62 => 47,  60 => 46,  58 => 45,  53 => 43,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination_form.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_destination_form.html.twig");
    }
}
