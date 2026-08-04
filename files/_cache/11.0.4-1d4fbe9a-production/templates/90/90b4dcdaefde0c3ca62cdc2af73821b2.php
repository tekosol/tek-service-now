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

/* pages/admin/form/form_horizontal_block.html.twig */
class __TwigTemplate_0b9b623d532a3ac100ba53004fdccb94 extends Template
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
        // line 36
        yield "
";
        // line 41
        yield "<div
    data-glpi-form-editor-horizontal-blocks-fix-sortable-issue
    style=\"height: 1px;\">
</div>

<section
    class=\"d-flex align-items-end\"
    data-glpi-form-editor-horizontal-blocks-container
    aria-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal blocks layout"), "html", null, true);
        yield "\"
>
    <section
        class=\"flex-grow-1 w-100\"
        data-glpi-form-editor-horizontal-blocks
        aria-label=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal blocks"), "html", null, true);
        yield "\"
    >
        ";
        // line 56
        $context["previous_index"] =  -1;
        // line 57
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["blocks"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["form_block"]) {
            // line 58
            yield "            ";
            // line 59
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59) <= 4)) {
                // line 60
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 60), "horizontal_rank", [], "any", false, false, false, 60) > (($context["previous_index"] ?? null) + 1))) {
                    // line 61
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 61), "horizontal_rank", [], "any", false, false, false, 61) - (($context["previous_index"] ?? null) + 1))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 62
                        yield "                        ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" =>                         // line 63
($context["can_update"] ?? null), "form" =>                         // line 64
($context["form"] ?? null)], false);
                        // line 65
                        yield "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    yield "                ";
                }
                // line 68
                yield "                ";
                $context["previous_index"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 68), "horizontal_rank", [], "any", false, false, false, 68);
                // line 69
                yield "
                ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "displayBlockForEditor", [($context["can_update"] ?? null), ($context["allow_unauthenticated_access"] ?? null)], "method", false, false, false, 70), "html", null, true);
                yield "
            ";
            }
            // line 72
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['form_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "
        ";
        // line 74
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["blocks"] ?? null)) == 0)) {
            // line 75
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" =>             // line 76
($context["can_update"] ?? null), "form" =>             // line 77
($context["form"] ?? null)], false);
            // line 78
            yield "
        ";
        }
        // line 80
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_toolbar.html.twig", ["can_update" =>         // line 81
($context["can_update"] ?? null), "form" =>         // line 82
($context["form"] ?? null)], false);
        // line 83
        yield "
        ";
        // line 84
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["blocks"] ?? null)) == 0)) {
            // line 85
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" =>             // line 86
($context["can_update"] ?? null), "form" =>             // line 87
($context["form"] ?? null)], false);
            // line 88
            yield "
        ";
        }
        // line 90
        yield "    </section>
    <div class=\"position-relative mb-2\">
        ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 93
($context["can_update"] ?? null), "form" =>         // line 94
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 96
        yield "
    </div>
</section>

";
        // line 104
        yield "<div
    data-glpi-form-editor-horizontal-blocks-fix-sortable-issue
    style=\"height: 1px;\">
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_horizontal_block.html.twig";
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
        return array (  191 => 104,  185 => 96,  183 => 94,  182 => 93,  181 => 92,  177 => 90,  173 => 88,  171 => 87,  170 => 86,  168 => 85,  166 => 84,  163 => 83,  161 => 82,  160 => 81,  158 => 80,  154 => 78,  152 => 77,  151 => 76,  149 => 75,  147 => 74,  144 => 73,  130 => 72,  125 => 70,  122 => 69,  119 => 68,  116 => 67,  109 => 65,  107 => 64,  106 => 63,  104 => 62,  99 => 61,  96 => 60,  93 => 59,  91 => 58,  73 => 57,  71 => 56,  66 => 54,  58 => 49,  48 => 41,  45 => 36,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_horizontal_block.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_horizontal_block.html.twig");
    }
}
