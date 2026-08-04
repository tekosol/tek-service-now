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

/* pages/admin/form/form_destination_commonitil_config.html.twig */
class __TwigTemplate_19bd01ac2a7cf35a78c031e74c5b37a6 extends Template
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
        // line 37
        yield "
";
        // line 285
        yield "
<div class=\"overflow-x-hidden row d-flex mx-n4 border-top\">
    <div class=\"col-12 col-lg-8 order-last order-lg-first pt-2 pe-2 pe-lg-4 d-flex flex-column\">
        <div class=\"timeline-item mb-3 ITILContent ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            <div class=\"read-only-content\">
                                <div class=\"card-title card-header mx-n3 mt-n3\">
                                    ";
        // line 295
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-titlefield"], "method", false, false, false, 295);
        // line 296
        yield "                                    ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 296, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                                </div>
                                <div class=\"rich_text_container\">
                                    ";
        // line 299
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-contentfield"], "method", false, false, false, 299);
        // line 300
        yield "                                    ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 300, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILFollowup ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 314
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-itilfollowupfield"], "method", false, false, false, 314);
        // line 315
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 315, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILTask todo ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 327
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-itiltaskfield"], "method", false, false, false, 327);
        // line 328
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 328, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILValidation todo ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 340
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-validationfield"], "method", false, false, false, 340);
        // line 341
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 341, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-0 p-0 rounded-0 card-footer border-start border-top-0\">
        ";
        // line 349
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 350
        yield "
        <section
            id=\"glpi-itil-destinations-accordion-";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
            class=\"accordion open accordion-flush\"
            aria-label=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Destination fields accordion"), "html", null, true);
        yield "\"
        >
            ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldsGroupedByCategory", [], "method", false, false, false, 356));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 357
            yield "                ";
            $context["already_rendered_config"] = ["glpi-form-destination-commonitilfield-titlefield", "glpi-form-destination-commonitilfield-contentfield", "glpi-form-destination-commonitilfield-itilfollowupfield", "glpi-form-destination-commonitilfield-itiltaskfield", "glpi-form-destination-commonitilfield-validationfield"];
            // line 364
            yield "                ";
            $context["fields"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "fields", [], "any", false, false, false, 364), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 364), ($context["already_rendered_config"] ?? null)); });
            // line 365
            yield "
                ";
            // line 366
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fields"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 367
                yield "                    <section class=\"accordion-item border-bottom\">
                        <div class=\"accordion-header\" id=\"heading-item-";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 368), "html", null, true);
                yield "\">
                            <button
                                class=\"accordion-button collapsed\"
                                type=\"button\"
                                data-bs-toggle=\"collapse\"
                                data-bs-target=\"#item-";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 373), "html", null, true);
                yield "\"
                                aria-expanded=\"true\"
                                aria-controls=\"item-";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 375), "html", null, true);
                yield "\"
                                aria-label=\"";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 376), "html", null, true);
                yield "\"
                            >
                                <i class=\"";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 378), "html", null, true);
                yield " item-icon\"></i>
                                <span class=\"item-title\">";
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 379), "html", null, true);
                yield "</span>
                            </button>
                        </div>
                        <section
                            id=\"item-";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 383), "html", null, true);
                yield "\"
                            class=\"accordion-collapse collapse\"
                            aria-labelledby=\"heading-item-";
                // line 385
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 385), "html", null, true);
                yield "\"
                            data-bs-parent=\"#glpi-itil-destinations-accordion-";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                        >
                            <div class=\"accordion-body d-flex flex-column space-y-3\">
                                ";
                // line 389
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 390
                    yield "                                    ";
                    yield $this->getTemplateForMacro("macro_field_config_section", $context, 390, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), $context["field"], ($context["form"] ?? null), ($context["config"] ?? null)]);
                    yield "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                yield "                            </div>
                        </section>
                    </section>
                ";
            }
            // line 396
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "        </section>
    </div>
    <div class=\"itil-footer card-footer p-0 border-top p-2 ps-4 pe-4\">
        ";
        // line 400
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 401
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_destination_actions.html.twig", ["form" =>             // line 402
($context["form"] ?? null), "destination" =>             // line 403
($context["destination"] ?? null)], false);
            // line 404
            yield "
        ";
        }
        // line 406
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 38
    public function macro_field_config_section($item = null, $destination = null, $field = null, $form = null, $config = null, $show_label = true, $extra_options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "destination" => $destination,
            "field" => $field,
            "form" => $form,
            "config" => $config,
            "show_label" => $show_label,
            "extra_options" => $extra_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            $macros["fields"] = $this->load("components/form/fields_macros.html.twig", 39)->unwrap();
            // line 40
            yield "
    ";
            // line 41
            $context["config_field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getConfig", [($context["form"] ?? null), ($context["config"] ?? null)], "method", false, false, false, 41);
            // line 42
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "supportAutoConfiguration", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "        ";
                $context["use_auto_configuration"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isAutoConfigurated", [($context["config"] ?? null)], "method", false, false, false, 43);
                // line 44
                yield "        ";
                $context["auto_configuration_checkbox"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 45
                    yield "            <div class=\"ms-auto row g-2 me-2 mb-2\">
                <label class=\"col form-check form-switch mb-0\">
                    <input
                        name=\"";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getAutoConfigKey", [], "method", false, false, false, 48)], "method", false, false, false, 48), "html", null, true);
                    yield "\"
                        type=\"hidden\"
                        value=\"0\"
                        data-glpi-itildestination-toggle-do-not-disable
                    >
                    <input
                        name=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getAutoConfigKey", [], "method", false, false, false, 54)], "method", false, false, false, 54), "html", null, true);
                    yield "\"
                        class=\"form-check-input\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
                    // line 58
                    yield (((($tmp = ($context["use_auto_configuration"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
                    yield "
                        data-glpi-itildestination-toggle-auto-config
                        data-glpi-itildestination-toggle-do-not-disable
                    >
                    <span class=\"form-check-label\">";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Auto config"), "html", null, true);
                    yield "</span>
                </label>
                <span class=\"col-auto form-help align-self-center\"
                    data-bs-toggle=\"popover\"
                    data-bs-trigger=\"hover\"
                    data-bs-placement=\"top\"
                    data-bs-html=\"true\"
                    data-bs-content=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The auto configuration option allows dynamically configuring the content of the created object based on the different fields of the form."), "html", null, true);
                    yield "\">
                    ?
                </span>
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                yield "
        ";
                // line 75
                $context["extra_options"] = Twig\Extension\CoreExtension::merge(($context["extra_options"] ?? null), ["disabled" =>                 // line 76
($context["use_auto_configuration"] ?? null)]);
                // line 78
                yield "    ";
            }
            // line 79
            yield "
    ";
            // line 80
            $context["field_container_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 81
            yield "    ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 82
            yield "    <section data-glpi-itildestination-field=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_container_rand"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getLabel", [], "method", false, false, false, 82) . " configuration"), "html", null, true);
            yield "\">
        ";
            // line 83
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                // line 84
                yield "            ";
                $context["label_for"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [(("dropdown_" . Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                 // line 86
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 86)], "method", false, false, false, 86), CoreExtension::getAttribute($this->env, $this->source,                 // line 87
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 87))) .                 // line 88
($context["rand"] ?? null))]);
                // line 90
                yield "        ";
            } elseif ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\CommonITILField\\SimpleValueConfig")) {
                // line 91
                yield "            ";
                $context["label_for"] = Twig\Extension\CoreExtension::sprintf("%s[%s]_%s", CoreExtension::getAttribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 92)], "method", false, false, false, 92), Twig\Extension\CoreExtension::constant("Glpi\\Form\\Destination\\CommonITILField\\SimpleValueConfig::VALUE"),                 // line 94
($context["rand"] ?? null));
                // line 96
                yield "        ";
            }
            // line 97
            yield "
        <div class=\"d-flex align-items-center\">
            ";
            // line 99
            if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "                <label
                    class=\"form-label\"
                    for=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("label_for", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_for"] ?? null), "")) : ("")), "html", null, true);
                yield "\"
                >
                    ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getLabel", [], "method", false, false, false, 104), "html", null, true);
                yield "
                </label>
            ";
            }
            // line 107
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "supportAutoConfiguration", [], "method", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_configuration_checkbox"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 110
            yield "        </div>
        <section data-glpi-itildestination-field-configs>
            ";
            // line 112
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                // line 113
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["config_field"] ?? null), "getStrategies", [], "method", false, false, false, 113));
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
                foreach ($context['_seq'] as $context["index"] => $context["strategy"]) {
                    // line 114
                    yield "                    ";
                    // line 115
                    yield "                    ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 116
                        yield "                        ";
                        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                        // line 117
                        yield "                    ";
                    }
                    // line 118
                    yield "
                    <section
                        ";
                    // line 120
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 121
                        yield "                            class=\"mb-2\"
                        ";
                    }
                    // line 123
                    yield "                        data-glpi-itildestination-field-config
                    >
                        <div data-glpi-itildestination-field-config-content>
                            ";
                    // line 126
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 126, $this->getSourceContext())->macro_dropdownArrayField(...[Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                     // line 128
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 128)], "method", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source,                     // line 129
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 129)), CoreExtension::getAttribute($this->env, $this->source,                     // line 131
$context["strategy"], "value", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source,                     // line 132
($context["field"] ?? null), "getStrategiesForDropdown", [], "method", false, false, false, 132), "", Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "field_class" => "", "no_label" => true, "mb" => "", "rand" =>                     // line 139
($context["rand"] ?? null), "aria_label" => __("Select strategy..."), "add_data_attributes" => ["glpi-itildestination-strategy-select" => ""]],                     // line 144
($context["extra_options"] ?? null))]);
                    // line 145
                    yield "
                            ";
                    // line 146
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 147
($context["form"] ?? null),                     // line 148
($context["destination"] ?? null),                     // line 149
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 150
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 150)], "method", false, false, false, 150), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "rand" =>                     // line 153
($context["rand"] ?? null)],                     // line 154
($context["extra_options"] ?? null)),                     // line 155
$context["index"]], "method", false, false, false, 146);
                    // line 156
                    yield "
                        </div>
                        ";
                    // line 158
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 159
                        yield "                            <button
                                type=\"button\"
                                class=\"btn btn-icon btn-outline\"
                                title=\"";
                        // line 162
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                        yield "\"
                                aria-label=\"";
                        // line 163
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                        yield "\"
                                data-glpi-itildestination-remove-field-config
                            >
                                <i class=\"ti ti-x\"></i>
                            </button>
                        ";
                    }
                    // line 169
                    yield "                    </section>
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
                unset($context['_seq'], $context['index'], $context['strategy'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 172
                    yield "                    <button
                        type=\"button\"
                        class=\"btn btn-outline\"
                        aria-label=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "\"
                        data-glpi-itildestination-add-field-config
                    >
                        <i class=\"ti ti-plus me-2\"></i>
                        ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "
                    </button>
                ";
                }
                // line 182
                yield "            ";
            } else {
                // line 183
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                // line 184
($context["form"] ?? null),                 // line 185
($context["destination"] ?? null),                 // line 186
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 187
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 187)], "method", false, false, false, 187), Twig\Extension\CoreExtension::merge(["is_horizontal" => true, "rand" =>                 // line 190
($context["rand"] ?? null)],                 // line 191
($context["extra_options"] ?? null))], "method", false, false, false, 183);
                // line 192
                yield "

                ";
                // line 194
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 194)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 195
                    yield "                    <button
                        type=\"button\"
                        class=\"btn btn-outline\"
                        aria-label=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "\"
                        data-glpi-itildestination-add-field-config
                    >
                        <i class=\"ti ti-plus me-2\"></i>
                        ";
                    // line 202
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "
                    </button>
                ";
                }
                // line 205
                yield "            ";
            }
            // line 206
            yield "        </section>

        ";
            // line 208
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 209
                yield "            <template data-glpi-itildestination-field-config-template>
                ";
                // line 210
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                    // line 211
                    yield "                    <section
                        class=\"mb-2\"
                        data-glpi-itildestination-field-config
                    >
                        <div data-glpi-itildestination-field-config-content>
                            ";
                    // line 216
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 216, $this->getSourceContext())->macro_dropdownArrayField(...[Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                     // line 218
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 218)], "method", false, false, false, 218), CoreExtension::getAttribute($this->env, $this->source,                     // line 219
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 219)), "", CoreExtension::getAttribute($this->env, $this->source,                     // line 222
($context["field"] ?? null), "getStrategiesForDropdown", [], "method", false, false, false, 222), "", Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "field_class" => "", "no_label" => true, "mb" => "", "display_emptychoice" => true, "init" => false, "aria_label" => __("Select strategy..."), "add_data_attributes" => ["glpi-itildestination-strategy-select" => ""]],                     // line 235
($context["extra_options"] ?? null))]);
                    // line 236
                    yield "
                            ";
                    // line 237
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 238
($context["form"] ?? null),                     // line 239
($context["destination"] ?? null),                     // line 240
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 241
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 241)], "method", false, false, false, 241), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "init" => false],                     // line 245
($context["extra_options"] ?? null)), "__INDEX__"], "method", false, false, false, 237);
                    // line 247
                    yield "
                        </div>
                        <button
                            type=\"button\"
                            class=\"btn btn-icon btn-outline\"
                            title=\"";
                    // line 252
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                    yield "\"
                            aria-label=\"";
                    // line 253
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                    yield "\"
                            data-glpi-itildestination-remove-field-config
                        >
                            <i class=\"ti ti-x\"></i>
                        </button>
                    </section>
                ";
                } else {
                    // line 260
                    yield "                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 261
($context["form"] ?? null),                     // line 262
($context["destination"] ?? null),                     // line 263
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 264
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 264)], "method", false, false, false, 264), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "init" => false],                     // line 268
($context["extra_options"] ?? null)), "__INDEX__"], "method", false, false, false, 260);
                    // line 270
                    yield "
                ";
                }
                // line 272
                yield "            </template>
        ";
            }
            // line 274
            yield "    </section>

    <script>
        import(\"/js/modules/Forms/FieldDestinationMultipleConfig.js\").then((m) => {
            new m.GlpiFormFieldDestinationMultipleConfig(
                \$('[data-glpi-itildestination-field=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_container_rand"] ?? null), "html", null, true);
            yield "\"]'),
                ";
            // line 280
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getReusableStrategies", [], "method", false, false, false, 280));
            yield "
            );
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_destination_commonitil_config.html.twig";
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
        return array (  706 => 280,  702 => 279,  695 => 274,  691 => 272,  687 => 270,  685 => 268,  684 => 264,  683 => 263,  682 => 262,  681 => 261,  679 => 260,  669 => 253,  665 => 252,  658 => 247,  656 => 245,  655 => 241,  654 => 240,  653 => 239,  652 => 238,  651 => 237,  648 => 236,  646 => 235,  645 => 222,  644 => 219,  643 => 218,  642 => 216,  635 => 211,  633 => 210,  630 => 209,  628 => 208,  624 => 206,  621 => 205,  615 => 202,  608 => 198,  603 => 195,  601 => 194,  597 => 192,  595 => 191,  594 => 190,  593 => 187,  592 => 186,  591 => 185,  590 => 184,  588 => 183,  585 => 182,  579 => 179,  572 => 175,  567 => 172,  564 => 171,  549 => 169,  540 => 163,  536 => 162,  531 => 159,  529 => 158,  525 => 156,  523 => 155,  522 => 154,  521 => 153,  520 => 150,  519 => 149,  518 => 148,  517 => 147,  516 => 146,  513 => 145,  511 => 144,  510 => 139,  509 => 132,  508 => 131,  507 => 129,  506 => 128,  505 => 126,  500 => 123,  496 => 121,  494 => 120,  490 => 118,  487 => 117,  484 => 116,  481 => 115,  479 => 114,  461 => 113,  459 => 112,  455 => 110,  449 => 108,  446 => 107,  440 => 104,  435 => 102,  431 => 100,  429 => 99,  425 => 97,  422 => 96,  420 => 94,  419 => 92,  417 => 91,  414 => 90,  412 => 88,  411 => 87,  410 => 86,  408 => 84,  406 => 83,  399 => 82,  396 => 81,  394 => 80,  391 => 79,  388 => 78,  386 => 76,  385 => 75,  382 => 74,  373 => 69,  363 => 62,  356 => 58,  349 => 54,  340 => 48,  335 => 45,  332 => 44,  329 => 43,  326 => 42,  324 => 41,  321 => 40,  318 => 39,  300 => 38,  293 => 406,  289 => 404,  287 => 403,  286 => 402,  284 => 401,  282 => 400,  277 => 397,  263 => 396,  257 => 392,  248 => 390,  244 => 389,  238 => 386,  232 => 385,  225 => 383,  218 => 379,  214 => 378,  209 => 376,  203 => 375,  196 => 373,  186 => 368,  183 => 367,  181 => 366,  178 => 365,  175 => 364,  172 => 357,  155 => 356,  150 => 354,  145 => 352,  141 => 350,  139 => 349,  127 => 341,  125 => 340,  109 => 328,  107 => 327,  91 => 315,  89 => 314,  71 => 300,  69 => 299,  62 => 296,  60 => 295,  48 => 285,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination_commonitil_config.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\form_destination_commonitil_config.html.twig");
    }
}
