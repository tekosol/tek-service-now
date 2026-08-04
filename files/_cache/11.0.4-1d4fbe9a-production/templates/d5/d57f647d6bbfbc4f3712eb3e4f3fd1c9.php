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

/* components/itilobject/timeline/form_task_main_form.html.twig */
class __TwigTemplate_4eb77803206bb714fd2747f8d147a2df extends Template
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
        $context["params"] = ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([]));
        // line 36
        $context["candedit"] = ((array_key_exists("candedit", $context)) ? (Twig\Extension\CoreExtension::default(($context["candedit"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 36))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 36)));
        // line 37
        $context["can_read_kb"] = ((array_key_exists("can_read_kb", $context)) ? (Twig\Extension\CoreExtension::default(($context["can_read_kb"] ?? null), (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ"))))) : ((Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ")))));
        // line 40
        $context["can_update_kb"] = ((array_key_exists("can_update_kb", $context)) ? (Twig\Extension\CoreExtension::default(($context["can_update_kb"] ?? null), Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE")))) : (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"))));
        // line 41
        $context["nokb"] = ((array_key_exists("nokb", $context)) ? (Twig\Extension\CoreExtension::default(($context["nokb"] ?? null), (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["nokb"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["nokb"] ?? null) : null)) : (false)) == true)))) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["nokb"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["nokb"] ?? null) : null)) : (false)) == true))));
        // line 42
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 43
        $context["formoptions"] = ((array_key_exists("formoptions", $context)) ? (Twig\Extension\CoreExtension::default(($context["formoptions"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 43) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formoptions"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formoptions"] ?? null) : null)) : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 43) &&  !(null === (($_v6 = ($context["params"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["formoptions"] ?? null) : null)))) ? ((($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["formoptions"] ?? null) : null)) : (""))));
        // line 44
        yield "
";
        // line 46
        $context["add_html_form"] = ( !array_key_exists("no_form", $context) || (($context["no_form"] ?? null) == false));
        // line 47
        yield "
<div class=\"itiltask\">
    ";
        // line 49
        if ((($tmp = ($context["add_html_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        <form
            name=\"asset_form\"
            style=\"width: 100%;\"
            class=\"d-flex flex-column\"
            method=\"post\"
            action=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 55), "html", null, true);
            yield "\"
            enctype=\"multipart/form-data\"
            data-track-changes=\"true\"
            data-submit-once ";
            // line 58
            yield ($context["formoptions"] ?? null);
            yield "
        >
    ";
        }
        // line 61
        yield "
    <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 62), "html", null, true);
        yield "\" />
    <input type=\"hidden\" name=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 63), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), "html", null, true);
        yield "\" />

    ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    <div class=\"row mx-n3 mx-xxl-auto\">
        <div class=\"col-12 col-xl-7 col-xxl-8\">
            ";
        // line 69
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 69, $this->getSourceContext())->macro_textareaField(...["content", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "mention_options" =>         // line 78
($context["mention_options"] ?? null), "entities_id" => (($_v10 = CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["entities_id"] ?? null) : null), "rand" =>         // line 80
($context["rand"] ?? null), "editor_height" => 300]]);
        // line 83
        yield "
        </div>
        <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
            <div class=\"row\">
                ";
        // line 87
        $context["task_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 88
            yield "                    <i
                        class=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("TaskTemplate"), "html", null, true);
            yield " me-1\"
                        title=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            yield "\"
                    ></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 93, $this->getSourceContext())->macro_dropdownField(...["TaskTemplate", "tasktemplates_id", (($_v11 = CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["tasktemplates_id"] ?? null) : null),         // line 97
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .         // line 101
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null), "rand" =>         // line 103
($context["rand"] ?? null)]]);
        // line 105
        yield "

                ";
        // line 107
        $context["task_date_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 108
            yield "                    <i
                        class=\"ti ti-calendar me-1\"
                        title=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true);
            yield "\"
                    ></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 113, $this->getSourceContext())->macro_datetimeField(...["date", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["date"] ?? null) : null),         // line 116
($context["task_date_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>         // line 120
($context["rand"] ?? null)]]);
        // line 122
        yield "

                ";
        // line 125
        yield "                ";
        $context["task_category_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 126
            yield "                    <i class=\"ti ti-tag me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Category", "Categories", 1), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 128, $this->getSourceContext())->macro_dropdownField(...["TaskCategory", "taskcategories_id", (($_v14 = CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["taskcategories_id"] ?? null) : null),         // line 132
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($_v15 = CoreExtension::getAttribute($this->env, $this->source,         // line 136
($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>         // line 140
($context["rand"] ?? null)]]);
        // line 142
        yield "

                ";
        // line 145
        yield "                ";
        $context["task_state_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 146
            yield "                    <i class=\"ti ti-list-check me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "
                ";
        // line 149
        $context["task_state"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 150
            yield "                    ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["state", (($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["state"] ?? null) : null), true, ["rand" => ($context["rand"] ?? null)]]);
            // line 151
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        yield "
                ";
        // line 153
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 153, $this->getSourceContext())->macro_htmlField(...["state",         // line 155
($context["task_state"] ?? null),         // line 156
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>         // line 160
($context["rand"] ?? null)]]);
        // line 162
        yield "

                ";
        // line 164
        $context["task_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 165
            yield "                    <i class=\"ti ti-eye-off me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 167, $this->getSourceContext())->macro_sliderField(...["is_private", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,         // line 169
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["is_private"] ?? null) : null),         // line 170
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>         // line 174
($context["rand"] ?? null), "additional_attributes" => ["onchange" => "toggleTimelinePrivate(this.checked, this)"]]]);
        // line 179
        yield "

                ";
        // line 181
        if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
            // line 182
            yield "                ";
            $context["task_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 183
                yield "                    <i
                        class=\"ti ti-device-floppy me-1\"
                        title=\"";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                    ></i>
                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 190
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 190, $this->getSourceContext())->macro_sliderField(...["_task_to_kb", 0,             // line 193
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 197
($context["rand"] ?? null)]]);
            // line 199
            yield "
                ";
        }
        // line 201
        yield "
                ";
        // line 203
        yield "                ";
        $context["task_actiontime_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 204
            yield "                    <i class=\"ti ti-stopwatch me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        yield "
                ";
        // line 207
        if (((($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 207)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["actiontime"] ?? null) : null) <= 360000)) {
            // line 208
            yield "                    ";
            $context["duration_dropdown"] = [];
            // line 209
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 210
                yield "                        ";
                $context["duration_dropdown"] = Twig\Extension\CoreExtension::merge(($context["duration_dropdown"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP")) => Twig\Extension\CoreExtension::sprintf("%dh%02d", 0, $context["i"])]);
                // line 211
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "
                    ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(10, 595, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 214
                yield "                        ";
                $context["minutes"] = ($context["i"] % 60);
                // line 215
                yield "                        ";
                $context["hours"] = (int) floor(($context["i"] / 60));
                // line 216
                yield "                        ";
                $context["duration_dropdown"] = Twig\Extension\CoreExtension::merge(($context["duration_dropdown"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP")) => Twig\Extension\CoreExtension::sprintf("%dh%02d", ($context["hours"] ?? null), ($context["minutes"] ?? null))]);
                // line 217
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "
                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(10, 119));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 220
                yield "                        ";
                $context["duration_dropdown"] = Twig\Extension\CoreExtension::merge(($context["duration_dropdown"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP")) => Twig\Extension\CoreExtension::sprintf("%dh%02d", $context["i"], 0)]);
                // line 221
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "
                    ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(5, 366));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 224
                yield "                        ";
                $context["duration_dropdown"] = Twig\Extension\CoreExtension::merge(($context["duration_dropdown"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP")) => Twig\Extension\CoreExtension::sprintf(_n("%s day", "%s days", $context["i"]), $context["i"])]);
                // line 225
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 226, $this->getSourceContext())->macro_dropdownArrayField(...["actiontime", (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 226)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["actiontime"] ?? null) : null), ($context["duration_dropdown"] ?? null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 229
($context["rand"] ?? null), "display_emptychoice" => true]]);
            // line 231
            yield "
                ";
        } else {
            // line 233
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 233, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($_v20 = CoreExtension::getAttribute($this->env, $this->source,             // line 235
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 235)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["actiontime"] ?? null) : null)),             // line 236
($context["task_actiontime_lbl"] ?? null), ["label_class" => "col-2", "input_class" => "col-10", "field_class" => "col-12"]]);
            // line 242
            yield "
                ";
        }
        // line 244
        yield "
                ";
        // line 246
        yield "                ";
        $context["task_user_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 247
            yield "                    <i class=\"ti ti-user me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 249
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 249, $this->getSourceContext())->macro_dropdownField(...["User", "users_id_tech", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 252
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 252), "users_id_tech", [], "array", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default((($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 252)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),         // line 253
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($_v22 = CoreExtension::getAttribute($this->env, $this->source,         // line 257
($context["item"] ?? null), "fields", [], "any", false, false, false, 257)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>         // line 259
($context["rand"] ?? null)]]);
        // line 261
        yield "

                ";
        // line 264
        yield "                ";
        $context["task_group_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 265
            yield "                    <i class=\"ti ti-users me-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            yield "\"></i>
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 267
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 267, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id_tech", (($_v23 = CoreExtension::getAttribute($this->env, $this->source,         // line 270
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 270)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["groups_id_tech"] ?? null) : null),         // line 271
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($_v24 = CoreExtension::getAttribute($this->env, $this->source,         // line 275
($context["item"] ?? null), "fields", [], "any", false, false, false, 275)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>         // line 277
($context["rand"] ?? null)]]);
        // line 279
        yield "

                <script type=\"text/javascript\">
                    function showPlanUpdate";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(e) {
                        \$('#plan";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').hide();
                        \$('#dropdown_state";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').trigger('setValue', ";
        yield json_encode($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiplanned_task_state"));
        yield ");
                        \$('#viewplan";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').load(`\${CFG_GLPI.root_doc}/ajax/planning.php`, {
                            action: \"add_event_classic_form\",
                            form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                            entity: ";
        // line 288
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 288), "entities_id", [], "any", false, false, false, 288));
        yield ",
                            rand_user: ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield ",
                            rand_group: ";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield ",
                            itemtype: \"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 291), "js"), "html", null, true);
        yield "\",
                            items_id: ";
        // line 292
        yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 292), "id", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292),  -1)) : ( -1)));
        yield ",
                            parent_itemtype: \"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 293), "js"), "html", null, true);
        yield "\",
                            parent_items_id: ";
        // line 294
        yield json_encode(((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294), "id", [], "any", false, false, false, 294))) ? (0) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294), "id", [], "any", false, false, false, 294))));
        yield ",
                            parent_fk_field: \"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 295), "js"), "html", null, true);
        yield "\",
                            begin: \"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["begin"] ?? null) : null), "js"), "html", null, true);
        yield "\",
                            end: \"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 297)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["end"] ?? null) : null), "js"), "html", null, true);
        yield "\",
                        });
                    }
                </script>
                <div class=\"col-12\">
                ";
        // line 302
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 302)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 302) && (($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 302)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["begin"] ?? null) : null))) {
            // line 303
            yield "                    <script type=\"text/javascript\">
                        showPlanUpdate";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "();
                    </script>
                    <button id=\"unplan";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-outline-warning\" type=\"submit\" name=\"unplan\"
                            onclick=\"return confirm('";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the deletion of planning?"), "js"), "html", null, true);
            yield "');\">
                        <i class=\"fas ti ti-calendar-off\"></i>
                        <span>";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unplan"), "html", null, true);
            yield "</span>
                    </button>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 311
($context["item"] ?? null), "isAllowedStatus", [(($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 311)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::PLANNED")], "method", false, false, false, 311) || !CoreExtension::inFilter(Twig\Extension\CoreExtension::constant("CommonITILObject::PLANNED"), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getAllStatusArray", [], "method", false, false, false, 311)))) {
            // line 312
            yield "                    <button id=\"plan";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary text-truncate\" onclick=\"showPlanUpdate";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "()\" type=\"button\">
                        <i class=\"ti ti-calendar\"></i>
                        <span>";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plan this task"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 317
        yield "                <div id=\"viewplan";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 323
        if (( !array_key_exists("disable_pending_reasons", $context) || (($context["disable_pending_reasons"] ?? null) == false))) {
            // line 324
            yield "        ";
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 325
                yield "            ";
                $context["show_pending_reasons_actions"] = (((($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 325)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["has_pending_reason"] ?? null));
                // line 326
                yield "            ";
                if ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)]))) {
                    // line 327
                    yield "                <span
                    class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 328
                    yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-fill") : (""));
                    yield "\"
                    id=\"pending-reasons-control-";
                    // line 329
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                >
                    <span
                        class=\"d-inline-flex align-items-center\"
                        title=\"";
                    // line 333
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        role=\"button\"
                    >
                        <i class=\"ti ti-player-pause-filled me-2\"></i>
                        <label class=\"form-check form-switch mt-2\">
                        <input type=\"hidden\" name=\"pending\" value=\"0\"/>
                        <input
                            type=\"checkbox\"
                            name=\"pending\"
                            value=\"1\"
                            class=\"form-check-input\"
                            id=\"enable-pending-reasons-";
                    // line 346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                            role=\"button\"
                            ";
                    // line 348
                    yield ((((($_v31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 348)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING"))) ? ("checked") : (""));
                    yield "
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#pending-reasons-setup-";
                    // line 350
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                        />
                        </label>
                    </span>

                    ";
                    // line 355
                    if ((($tmp =  !($context["has_pending_reason"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 356
                        yield "                        <div
                            class=\"collapse ps-2 py-1 flex-fill ";
                        // line 357
                        yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                        yield "\"
                            aria-expanded=\"";
                        // line 358
                        yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                        yield "\"
                            id=\"pending-reasons-setup-";
                        // line 359
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                        yield "\"
                        >
                            ";
                        // line 361
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                        yield "
                        </div>
                    ";
                    }
                    // line 364
                    yield "                </span>
            ";
                }
                // line 366
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 367
            yield "    ";
        }
        // line 368
        yield "
    ";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
    ";
        // line 371
        yield "    <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
        ";
        // line 372
        if (((($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 372)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["id"] ?? null) : null) <= 0)) {
            // line 373
            yield "            ";
            // line 374
            yield "            <div class=\"input-group flex-nowrap\">
                <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                <i class=\"ti ti-plus\"></i>
                <span>";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
                </button>
                ";
            // line 379
            if (( !array_key_exists("disable_pending_reasons", $context) || (($context["disable_pending_reasons"] ?? null) == false))) {
                // line 380
                yield "                    ";
                yield ($context["pending_reasons"] ?? null);
                yield "
                ";
            }
            // line 382
            yield "            </div>
        ";
        } else {
            // line 384
            yield "            <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 384)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["id"] ?? null) : null), "html", null, true);
            yield "\" />
            <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                <i class=\"ti ti-device-floppy\"></i>
                <span>";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>

            ";
            // line 390
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 390)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 391
                yield "                <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                        onclick=\"return confirm('";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                yield "');\">
                <i class=\"ti ti-trash\"></i>
                <span>";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "</span>
                </button>
            ";
            }
            // line 397
            yield "            ";
            if (( !array_key_exists("disable_pending_reasons", $context) || (($context["disable_pending_reasons"] ?? null) == false))) {
                // line 398
                yield "                ";
                yield ($context["pending_reasons"] ?? null);
                yield "
            ";
            }
            // line 400
            yield "        ";
        }
        // line 401
        yield "    </div>

    ";
        // line 403
        if ((($tmp = ($context["add_html_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 404
            yield "        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
        </form>
    ";
        }
        // line 407
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/form_task_main_form.html.twig";
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
        return array (  729 => 407,  722 => 404,  720 => 403,  716 => 401,  713 => 400,  707 => 398,  704 => 397,  698 => 394,  693 => 392,  690 => 391,  688 => 390,  682 => 387,  675 => 384,  671 => 382,  665 => 380,  663 => 379,  658 => 377,  653 => 374,  651 => 373,  649 => 372,  646 => 371,  642 => 369,  639 => 368,  636 => 367,  632 => 366,  628 => 364,  622 => 361,  617 => 359,  613 => 358,  609 => 357,  606 => 356,  604 => 355,  596 => 350,  591 => 348,  586 => 346,  570 => 333,  563 => 329,  559 => 328,  556 => 327,  553 => 326,  550 => 325,  547 => 324,  545 => 323,  535 => 317,  529 => 314,  521 => 312,  519 => 311,  514 => 309,  509 => 307,  505 => 306,  500 => 304,  497 => 303,  495 => 302,  487 => 297,  483 => 296,  479 => 295,  475 => 294,  471 => 293,  467 => 292,  463 => 291,  459 => 290,  455 => 289,  451 => 288,  445 => 285,  439 => 284,  435 => 283,  431 => 282,  426 => 279,  424 => 277,  423 => 275,  422 => 271,  421 => 270,  419 => 267,  412 => 265,  409 => 264,  405 => 261,  403 => 259,  402 => 257,  401 => 253,  400 => 252,  398 => 249,  391 => 247,  388 => 246,  385 => 244,  381 => 242,  379 => 236,  378 => 235,  376 => 233,  372 => 231,  370 => 229,  368 => 226,  362 => 225,  359 => 224,  355 => 223,  352 => 222,  346 => 221,  343 => 220,  339 => 219,  336 => 218,  330 => 217,  327 => 216,  324 => 215,  321 => 214,  317 => 213,  314 => 212,  308 => 211,  305 => 210,  300 => 209,  297 => 208,  295 => 207,  292 => 206,  285 => 204,  282 => 203,  279 => 201,  275 => 199,  273 => 197,  272 => 193,  270 => 190,  261 => 185,  257 => 183,  254 => 182,  252 => 181,  248 => 179,  246 => 174,  245 => 170,  244 => 169,  242 => 167,  235 => 165,  233 => 164,  229 => 162,  227 => 160,  226 => 156,  225 => 155,  224 => 153,  221 => 152,  217 => 151,  214 => 150,  212 => 149,  209 => 148,  202 => 146,  199 => 145,  195 => 142,  193 => 140,  192 => 136,  191 => 132,  190 => 131,  188 => 128,  181 => 126,  178 => 125,  174 => 122,  172 => 120,  171 => 116,  170 => 115,  168 => 113,  161 => 110,  157 => 108,  155 => 107,  151 => 105,  149 => 103,  148 => 102,  147 => 101,  146 => 97,  145 => 96,  143 => 93,  136 => 90,  132 => 89,  129 => 88,  127 => 87,  121 => 83,  119 => 80,  118 => 79,  117 => 78,  116 => 71,  115 => 69,  108 => 65,  101 => 63,  97 => 62,  94 => 61,  88 => 58,  82 => 55,  75 => 50,  73 => 49,  69 => 47,  67 => 46,  64 => 44,  62 => 43,  60 => 42,  58 => 41,  56 => 40,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_task_main_form.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\components\\itilobject\\timeline\\form_task_main_form.html.twig");
    }
}
