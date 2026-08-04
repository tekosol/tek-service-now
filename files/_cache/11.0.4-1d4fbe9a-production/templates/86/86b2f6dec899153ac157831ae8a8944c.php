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

/* pages/admin/form/question_type/item/administration_template.html.twig */
class __TwigTemplate_a551e2ba49dce6d82df89b4e053aa3a5 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        yield "
<div class=\"input-group\">
    ";
        // line 39
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 39, $this->getSourceContext())->macro_dropdownField(...[((        // line 40
array_key_exists("default_itemtype", $context)) ? (Twig\Extension\CoreExtension::default(($context["default_itemtype"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))), "default_value",         // line 42
($context["default_items_id"] ?? null), "", ["init" =>         // line 45
($context["init"] ?? null), "no_label" => true, "right" => "all", "width" => "100%", "mb" => "", "comments" => false, "addicon" => false, "aria_label" =>         // line 52
($context["aria_label"] ?? null), "nochecklimit" => true, "display_emptychoice" => false, "toadd" => ["-1" => Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE")]]]);
        // line 59
        yield "
    ";
        // line 60
        yield ($context["advanced_config"] ?? null);
        yield "
</div>

";
        // line 63
        if ((($context["question"] ?? null) == null)) {
            // line 64
            yield "    <script>
        import(\"/js/modules/Forms/QuestionItem.js\").then((m) => {
            new m.GlpiFormQuestionTypeItem(";
            // line 66
            yield json_encode(($context["question_type"] ?? null));
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"), "js"), "html", null, true);
            yield "');
        });
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item/administration_template.html.twig";
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
        return array (  78 => 66,  74 => 64,  72 => 63,  66 => 60,  63 => 59,  61 => 52,  60 => 45,  59 => 42,  58 => 40,  56 => 39,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item/administration_template.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\question_type\\item\\administration_template.html.twig");
    }
}
