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

/* pages/tools/kb/article.html.twig */
class __TwigTemplate_a1166a4e7f4c60b53c963a1982efafb8 extends Template
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
<div>
    ";
        // line 36
        $context["kb_cats"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["cat_id"] => $context["cat_name"]) {
                // line 38
                yield "            <span class=\"badge badge-outline text-secondary\">
                <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("KnowbaseItem") . "?knowbaseitemcategories_id=") . $context["cat_id"]) . "&forcetab=Knowbase\$2"), "html", null, true);
                yield "\">
                    ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat_name"], "html", null, true);
                yield "
                </a>
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cat_id'], $context['cat_name'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 45, $this->getSourceContext())->macro_htmlField(...["", ($context["kb_cats"] ?? null), _n("Category", "Categories", Session::getPluralNumber()), ["full_width" => true, "is_horizontal" => false, "label_class" => "pb-0"]]);
        // line 49
        yield "

    ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subject"] ?? null)), __("Subject"), ["full_width" => true, "is_horizontal" => false, "label_class" => "fs-2"]]);
        // line 55
        yield "
    ";
        // line 56
        $context["answer_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "        <div class=\"rich_text_container\">
            ";
            // line 58
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["answer"] ?? null));
            yield "
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 61, $this->getSourceContext())->macro_htmlField(...["", ($context["answer_field"] ?? null), __("Content"), ["full_width" => true, "is_horizontal" => false, "label_class" => "fs-2"]]);
        // line 65
        yield "

    ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attachments"] ?? null)) > 0)) {
            // line 68
            yield "        ";
            yield from $this->load("components/datatable.html.twig", 68)->unwrap()->yield(CoreExtension::toArray(["is_tab" => true, "nofilter" => true, "columns" => ["filename" => __("File"), "headings" => __("Heading"), "assocdate" => _n("Date", "Dates", 1)], "formatters" => ["filename" => "raw_html", "assocdate" => "datetime"], "entries" =>             // line 80
($context["attachments"] ?? null), "total_number" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 81
($context["attachments"] ?? null)), "filtered_number" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 82
($context["attachments"] ?? null)), "showmassiveactions" => false]));
            // line 85
            yield "    ";
        }
        // line 86
        yield "
    <div class=\"card-footer mx-n2 mb-n2 mt-4 fw-bold\">
        <div class=\"d-flex row\">
            <div class=\"col-sm-6 col-12\">
                ";
        // line 90
        yield Twig\Extension\CoreExtension::sprintf($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("%1\$s: %2\$s")), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Writer")), ($context["writer_link"] ?? null));
        yield "
            </div>
            <div class=\"col-sm-6 col-12\">
                ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%d view", "%d views", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["view"] ?? null) : null)), (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["view"] ?? null) : null)), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"d-flex row\">
            <div class=\"col-sm-6 col-12\">
                ";
        // line 98
        yield (((($tmp = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_faq"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This item is part of the FAQ"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This item is not part of the FAQ"), "html", null, true)));
        yield "
            </div>
        </div>
        ";
        // line 101
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
        yield "
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/kb/article.html.twig";
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
        return array (  147 => 101,  141 => 98,  133 => 93,  127 => 90,  121 => 86,  118 => 85,  116 => 82,  115 => 81,  114 => 80,  112 => 68,  110 => 67,  106 => 65,  103 => 61,  96 => 58,  93 => 57,  91 => 56,  88 => 55,  86 => 51,  82 => 49,  79 => 45,  75 => 44,  65 => 40,  61 => 39,  58 => 38,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/kb/article.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\tools\\kb\\article.html.twig");
    }
}
