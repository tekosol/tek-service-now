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

/* __string_template__68ae3a45e9a1d1891ae7c385d3adf8c4 */
class __TwigTemplate_c521a434ed351958926e8d3a94c720b9 extends Template
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
        yield "    ";
        // line 15
        yield "    <div class=\"d-flex align-items-center gap-2 mx-auto\" style=\"max-width: 650px;\">
        <div class=\"flex-shrink-0\"><strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["step_name"] ?? null), "html", null, true);
        yield "</strong></div>
        <div class=\"flex-shrink-0\">
            ";
        // line 18
        if ((($context["step_status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) {
            // line 19
            yield "                <span class=\"text-green\" data-bs-toogle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accepted_label"] ?? null), "html", null, true);
            yield "\">
                    <i class=\"ti ti-check\"></i>
                </span>
            ";
        } elseif ((        // line 22
($context["step_status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::REFUSED"))) {
            // line 23
            yield "                <span class=\"text-red\" data-bs-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["refused_label"] ?? null), "html", null, true);
            yield "\">
                    <i class=\"ti ti-ban\"></i>
                </span>
            ";
        } elseif ((        // line 26
($context["step_status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING"))) {
            // line 27
            yield "                <span class=\"text-yellow\" data-bs-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pending_label"] ?? null), "html", null, true);
            yield "\">
                    <i class=\"ti ti-clock\"></i>
                </span>
            ";
        }
        // line 31
        yield "        </div>
        <div class=\"flex-grow-1\">
            <div class=\"progress-stacked position-relative\" data-bs-toggle=\"tooltip\"
                 title=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(($context["progress_label"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(($context["accepted_percent"] ?? null)), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(($context["step_threshold"] ?? null))), "html", null, true);
        yield "\">
                ";
        // line 35
        yield $this->getTemplateForMacro("macro_stacked_progressbar", $context, 35, $this->getSourceContext())->macro_stacked_progressbar(...[($context["accepted_percent"] ?? null), "bg-green"]);
        yield "
                ";
        // line 36
        yield $this->getTemplateForMacro("macro_stacked_progressbar", $context, 36, $this->getSourceContext())->macro_stacked_progressbar(...[($context["waiting_percent"] ?? null), "bg-yellow", true]);
        yield "
                ";
        // line 37
        yield $this->getTemplateForMacro("macro_stacked_progressbar", $context, 37, $this->getSourceContext())->macro_stacked_progressbar(...[($context["refused_percent"] ?? null), "bg-red"]);
        yield "
                ";
        // line 39
        yield "                ";
        // line 40
        yield "                ";
        if ((($context["step_threshold"] ?? null) == 0)) {
            // line 41
            yield "                    <div class=\"threshold-indicator\" style=\"position: absolute; width: 5px; height: 100%; background-color: black; left: 0; top: 0; z-index: 10;\"></div>
                ";
        } elseif ((        // line 42
($context["step_threshold"] ?? null) == 100)) {
            // line 43
            yield "                    <div class=\"threshold-indicator\" style=\"position: absolute; width: 5px; height: 100%; background-color: black; right: 0; top: 0; z-index: 10;\"></div>
                ";
        } else {
            // line 45
            yield "                    <div class=\"threshold-indicator\" style=\"position: absolute; width: 3px; height: 100%; background-color: black; left: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["step_threshold"] ?? null), "html", null, true);
            yield "%; top: 0; z-index: 10;\"></div>
                ";
        }
        // line 47
        yield "            </div>
        </div>
        <div class=\"flex-shrink-0\">
            <span class=\"ti ti-edit\"
               role=\"button\"
               title=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["edit_button_label"] ?? null), "html", null, true);
        yield "\"
               onclick=\"glpi_ajax_dialog(";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["edit_dialog_params"] ?? null)), "html", null, true);
        yield ");\"
            >
                <span class=\"sr-only\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["edit_button_label"] ?? null), "html", null, true);
        yield "</span>
            </span>
        </div>
    </div>";
        yield from [];
    }

    // line 1
    public function macro_stacked_progressbar($achieved = null, $bg_color_class = null, $stripped = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "achieved" => $achieved,
            "bg_color_class" => $bg_color_class,
            "stripped" => $stripped,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "        <div class=\"progress\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["achieved"] ?? null), "html", null, true);
            yield "%\">
            <div
                    class=\"progress-bar ";
            // line 4
            if ((($tmp = ($context["stripped"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "progress-bar-striped progress-bar-animated";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_color_class"] ?? null), "html", null, true);
            yield "\"
                    role=\"progressbar\"
                    aria-valuenow=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["achieved"] ?? null), "html", null, true);
            yield "\"
                    aria-valuemin=\"0\"
                    aria-valuemax=\"100\"
                    aria-label=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(($context["achieved"] ?? null)), "html", null, true);
            yield "%\"
            >
                <span class=\"visually-hidden\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(($context["achieved"] ?? null)), "html", null, true);
            yield "%</span>
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__68ae3a45e9a1d1891ae7c385d3adf8c4";
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
        return array (  186 => 11,  181 => 9,  175 => 6,  166 => 4,  160 => 2,  146 => 1,  137 => 55,  132 => 53,  128 => 52,  121 => 47,  115 => 45,  111 => 43,  109 => 42,  106 => 41,  103 => 40,  101 => 39,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  80 => 31,  72 => 27,  70 => 26,  63 => 23,  61 => 22,  54 => 19,  52 => 18,  47 => 16,  44 => 15,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__68ae3a45e9a1d1891ae7c385d3adf8c4", "");
    }
}
