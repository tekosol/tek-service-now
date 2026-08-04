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

/* pages/admin/form/form_horizontal_block_placeholder.html.twig */
class __TwigTemplate_69e9b4bf0495cf7221e7def7e3ce55de extends Template
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
        // line 35
        yield "
<section
    role=\"option\"
    aria-label=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form horizontal block placeholder"), "html", null, true);
        yield "\"
    data-glpi-form-editor-horizontal-block-placeholder
    data-glpi-form-editor-on-click=\"set-active\"
>
    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 43
($context["can_update"] ?? null), "form" =>         // line 44
($context["form"] ?? null), "ghost_button" => true, "hide_section_button" => true, "hide_new_horizontal_layout_button" => true, "show_remove_horizontal_placeholder_button" => true], false);
        // line 49
        yield "
</section>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_horizontal_block_placeholder.html.twig";
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
        return array (  61 => 49,  59 => 44,  58 => 43,  57 => 42,  50 => 38,  45 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_horizontal_block_placeholder.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_horizontal_block_placeholder.html.twig");
    }
}
