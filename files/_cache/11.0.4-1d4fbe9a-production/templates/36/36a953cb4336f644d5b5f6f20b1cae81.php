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

/* components/add_visibility_target.html.twig */
class __TwigTemplate_9b57b6944ac747a6e972865425f20e59 extends Template
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
        yield "<div class=\"mb-3\">
    <form method=\"post\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["type"] ?? null)), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["type"] ?? null)), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
        <div class=\"d-flex flex-wrap\">
            ";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 39, $this->getSourceContext())->macro_dropdownItemTypes(...["_type", "", ($context["add_target_msg"] ?? null), ["types" => ["Entity", "Group", "Profile", "User"], "rand" =>         // line 41
($context["rand"] ?? null), "inline_add_field_html" => true, "add_field_html" => (("<span id='visibility" .         // line 43
($context["rand"] ?? null)) . "'></span>")]]);
        // line 44
        yield "
        </div>
        <script defer>
            \$('#dropdown__type";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('change', (e) => {
                \$('#visibility";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').load(
                    `\${CFG_GLPI.root_doc}/ajax/visibility.php`,
                    {
                        ...";
        // line 51
        yield json_encode(($context["visiblity_dropdown_params"] ?? null));
        yield ",
                        type: e.target.value,
                    }
                );
            });
        </script>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/add_visibility_target.html.twig";
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
        return array (  84 => 51,  78 => 48,  74 => 47,  69 => 44,  67 => 43,  66 => 41,  65 => 39,  60 => 37,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/add_visibility_target.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\components\\add_visibility_target.html.twig");
    }
}
