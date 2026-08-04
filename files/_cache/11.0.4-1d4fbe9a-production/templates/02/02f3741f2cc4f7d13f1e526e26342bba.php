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

/* pages/admin/form/form_destination.html.twig */
class __TwigTemplate_f02f32eb72a53dd804904cf84ba9d365 extends Template
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
        // line 39
        yield "
<div class=\"py-2 px-3\">
    <h2 class=\"d-flex\">
        <i class=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
        yield " me-2\"></i>
        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Destination", "Destinations", Session::getPluralNumber()), "html", null, true);
        yield "
    </h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["warnings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
            // line 47
            yield "        <div class=\"alert alert-warning d-flex align-items-center mb-3\" role=\"alert\">
            <i class=\"ti ti-alert-triangle me-2\"></i>
            ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["warning"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
    <div class=\"d-flex\">
        ";
        // line 55
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["available_destinations_types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 56
            yield "            <form
                id=\"add_destination_";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\"
                method=\"POST\"
                action=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/Add", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 59))), "html", null, true);
            yield "\"
            >
                <input type=\"hidden\" name=\"name\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\"/>
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\"/>
                <input type=\"hidden\" name=\"add\" value=\"\"/>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "
        <div class=\"btn-group me-2\">
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["available_destinations_types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 69
            yield "                <button
                    form=\"add_destination_";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\"
                    class=\"btn\"
                    name=\"itemtype\"
                    type=\"submit\"
                    value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\"
                >
                    <i class=\"ti ti-plus me-1\"></i> ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Add %s"), $context["label"]), "html", null, true);
            yield "
                </button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>
    </div>

    ";
        // line 82
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["destinations"] ?? null)) == 0)) {
            // line 83
            yield "        <p class=\"empty-subtitle text-muted mt-3 ms-1\">
            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No items will be created for this form."), "html", null, true);
            yield "
        </p>
    ";
        } else {
            // line 87
            yield "        <section class=\"accordion mt-4\" id=\"glpi-destinations-accordion\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form destinations"), "html", null, true);
            yield "\">
            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["destinations"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
                // line 89
                yield "                ";
                $context["is_expanded"] = (($context["active_destination"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getID", [], "method", false, false, false, 89));
                // line 90
                yield "                ";
                $context["concrete_destination"] = CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getConcreteDestinationItem", [], "method", false, false, false, 90);
                // line 91
                yield "                ";
                $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 92
                yield "                <section
                    class=\"accordion-item destination-";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getID", [], "method", false, false, false, 93), "html", null, true);
                yield "\"
                    aria-label=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getName", [], "method", false, false, false, 94), "html", null, true);
                yield "\"
                >
                    <div class=\"accordion-header ";
                // line 96
                yield (((($tmp =  !($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-danger") : (""));
                yield "\">
                        <div
                            class=\"accordion-button ";
                // line 98
                yield (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\"
                            role=\"button\"
                            tabindex=\"0\"
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#glpi-destinations-accordion-collapse-";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
                yield "\"
                            aria-expanded=\"";
                // line 103
                yield (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\"
                            data-glpi-destination-click-on-space ";
                // line 105
                yield "                        >
                            <i class=\"";
                // line 106
                yield (((($tmp = ($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["concrete_destination"] ?? null), "getIcon", [], "method", false, false, false, 106), "html", null, true)) : ("ti ti-unlink text-white"));
                yield "\"></i>
                            <span
                                class=\"m-0 lh-base fw-normal glpi-form-destination-name ";
                // line 108
                yield (((($tmp =  !($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-white") : (""));
                yield "\"
                            >
                                ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getName", [], "method", false, false, false, 110), "html", null, true);
                yield "
                            </span>
                            <div data-glpi-editor-destination-badges-container>
                                ";
                // line 113
                $context["selected_strategy"] = CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getConfiguredCreationStrategy", [], "method", false, false, false, 113);
                // line 114
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\CreationStrategy::cases());
                foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
                    // line 115
                    yield "                                    ";
                    $context["is_visible"] = (($context["selected_strategy"] ?? null) == $context["strategy"]);
                    // line 116
                    yield "                                    ";
                    $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
                    // line 117
                    yield "                                    <span
                                        class=\"";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
                    yield " badge bg-secondary-lt d-flex align-items-center ms-2\"
                                        data-glpi-editor-condition-badge=\"";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 119), "html", null, true);
                    yield "\"
                                    >
                                        <i class=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 121), "html", null, true);
                    yield " me-1 ";
                    yield (((($tmp =  !($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-white") : (""));
                    yield "\"></i>
                                        <span class=\"";
                    // line 122
                    yield (((($tmp =  !($context["concrete_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-white") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 122), "html", null, true);
                    yield "</span>
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "                            </div>
                            <input
                                aria-label=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form destination name"), "html", null, true);
                yield "\"
                                type=\"text\"
                                name=\"name\"
                                form=\"form-destination-";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getID", [], "method", false, false, false, 130), "html", null, true);
                yield "\"
                                value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getName", [], "method", false, false, false, 131), "html", null, true);
                yield "\"
                                class=\"form-control me-4 fw-normal glpi-form-destination-name\"
                                style=\"font-weight: inherit;\"
                                ";
                // line 135
                yield "                                data-bs-toggle=\"collapse\"
                                data-bs-target=\"\"
                            />
                        </div>
                    </div>
                    <div
                        id=\"glpi-destinations-accordion-collapse-";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141), "html", null, true);
                yield "\"
                        class=\"accordion-collapse collapse ";
                // line 142
                yield (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\"
                        data-bs-parent=\"#glpi-destinations-accordion\"
                        data-form=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 144), "html", null, true);
                yield "\"
                        data-form-destination=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "getID", [], "method", false, false, false, 145), "html", null, true);
                yield "\"
                    >
                        <div class=\"accordion-body p-0\">
                            ";
                // line 148
                if ((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 149
                    yield "                                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_destination_form.html.twig", ["destination" =>                     // line 150
$context["destination"], "form" =>                     // line 151
($context["form"] ?? null), "can_update" =>                     // line 152
($context["can_update"] ?? null), "concrete_destination" =>                     // line 153
($context["concrete_destination"] ?? null)]);
                    // line 154
                    yield "
                            ";
                }
                // line 156
                yield "                        </div>
                    </div>
                </section>
            ";
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
            unset($context['_seq'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "        </section>
    ";
        }
        // line 162
        yield "</div>

<script>
    import(\"/js/modules/Forms/DestinationAccordionController.js\").then(function (module) {
        const accordionController = new module.GlpiFormDestinationAccordionController();

        ";
        // line 168
        if ((($tmp = ($context["active_destination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "            accordionController.triggerWatchers();
        ";
        }
        // line 171
        yield "    })
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_destination.html.twig";
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
        return array (  384 => 171,  380 => 169,  378 => 168,  370 => 162,  366 => 160,  349 => 156,  345 => 154,  343 => 153,  342 => 152,  341 => 151,  340 => 150,  338 => 149,  336 => 148,  330 => 145,  326 => 144,  321 => 142,  315 => 141,  307 => 135,  301 => 131,  297 => 130,  291 => 127,  287 => 125,  276 => 122,  270 => 121,  265 => 119,  261 => 118,  258 => 117,  255 => 116,  252 => 115,  247 => 114,  245 => 113,  239 => 110,  234 => 108,  229 => 106,  226 => 105,  222 => 103,  216 => 102,  209 => 98,  204 => 96,  199 => 94,  195 => 93,  192 => 92,  189 => 91,  186 => 90,  183 => 89,  166 => 88,  161 => 87,  155 => 84,  152 => 83,  150 => 82,  145 => 79,  136 => 76,  131 => 74,  124 => 70,  121 => 69,  117 => 68,  113 => 66,  103 => 62,  99 => 61,  94 => 59,  89 => 57,  86 => 56,  81 => 55,  77 => 52,  68 => 49,  64 => 47,  60 => 46,  54 => 43,  50 => 42,  45 => 39,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_destination.html.twig");
    }
}
