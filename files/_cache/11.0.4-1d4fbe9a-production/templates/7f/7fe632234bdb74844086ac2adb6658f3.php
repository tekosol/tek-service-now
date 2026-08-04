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

/* __string_template__6684a7a763b12ff325f2087f1670433c */
class __TwigTemplate_fbd12a8636c14562617fb2cf76783fc0 extends Template
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
        yield "                <div class=\"col-12 col-lg-4 px-2\">
                    <table class=\"table table-sm\">
                        <tr><th>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</th></tr>
                        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["iterator"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 5
            yield "                            ";
            $context["name"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "transname", [], "array", true, true, false, 5) &&  !(null === (($_v0 = $context["data"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["transname"] ?? null) : null)))) ? ((($_v1 = $context["data"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["transname"] ?? null) : null)) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v2 = $context["data"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["transname"] ?? null) : null)) : ((($_v3 = $context["data"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null)));
            // line 6
            yield "                            <tr>
                                <td class=\"text-start\">
                                    <div class=\"kb\">
                                        ";
            // line 9
            if ((($tmp = (($_v4 = $context["data"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_faq"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "                                            <i class=\"ti ti-help faq\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["faq_tooltip"] ?? null), "html", null, true);
                yield "\"></i>
                                        ";
            }
            // line 12
            yield "                                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("KnowbaseItem", (($_v5 = $context["data"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null)), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp = (($_v6 = $context["data"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_faq"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("faq") : ("knowbase"));
            yield "\"
                                           title=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["name"] ?? null)), "truncate", [80, "(...)"], "method", false, false, false, 13), "html", null, true);
            yield "</a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                    </table>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__6684a7a763b12ff325f2087f1670433c";
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
        return array (  90 => 18,  77 => 13,  70 => 12,  64 => 10,  62 => 9,  57 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__6684a7a763b12ff325f2087f1670433c", "");
    }
}
