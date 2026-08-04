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

/* pages/tools/kb/knowbaseitem.html.twig */
class __TwigTemplate_94d27d8d251f73fee671bc9bc44f227e extends Template
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

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 38, $this->getSourceContext())->macro_hidden(...["__categories_defined", 1]);
        yield "
    ";
        // line 39
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 39, $this->getSourceContext())->macro_hidden(...["users_id", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")]);
        yield "
    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 40, $this->getSourceContext())->macro_dropdownField(...["KnowbaseItemCategory", "_categories", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 40), "_categories", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["_categories"] ?? null) : null), [])) : ([])), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("KnowbaseItemCategory"), ["multiple" => true]]);
        // line 42
        yield "
    ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 44, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        } else {
            // line 46
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 46, $this->getSourceContext())->macro_htmlField(...["", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["view"] ?? null) : null), __("Views")]);
            yield "
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        if ((($tmp = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::PUBLISHFAQ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 50, $this->getSourceContext())->macro_dropdownYesNo(...["is_faq", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_faq"] ?? null) : null), __("Put this item in the FAQ")]);
            yield "
    ";
        } else {
            // line 52
            yield "        ";
            $context["faq_label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 53
                yield "            ";
                if ((($tmp = (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["is_faq"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This item is part of the FAQ"), "html", null, true);
                    yield "
            ";
                } else {
                    // line 56
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This item is not part of the FAQ"), "html", null, true);
                    yield "
            ";
                }
                // line 58
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 58, $this->getSourceContext())->macro_htmlField(...["", ($context["faq_label"] ?? null), null, ["no_label" => true]]);
                // line 60
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "    ";
        }
        // line 63
        yield "    ";
        if ((($tmp = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["users_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "        ";
            $context["user_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getUserLink", [(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["users_id"] ?? null) : null)]);
            // line 65
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 65, $this->getSourceContext())->macro_htmlField(...["", ($context["user_field"] ?? null), __("Writer")]);
            yield "
    ";
        } else {
            // line 67
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 67, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        }
        // line 69
        yield "
    ";
        // line 70
        if (((array_key_exists("linked_item", $context) &&  !(null === ($context["linked_item"] ?? null))) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["linked_item"] ?? null), "isNewItem", [], "method", false, false, false, 70))) {
            // line 71
            yield "        ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 71, $this->getSourceContext())->macro_hidden(...["_itemtype", get_class(($context["linked_item"] ?? null))]);
            yield "
        ";
            // line 72
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 72, $this->getSourceContext())->macro_hidden(...["_items_id", CoreExtension::getAttribute($this->env, $this->source, ($context["linked_item"] ?? null), "getID", [], "method", false, false, false, 72)]);
            yield "
        ";
            // line 73
            yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 73, $this->getSourceContext())->macro_checkboxField(...["_do_item_link", 1, Twig\Extension\CoreExtension::sprintf(__("Link with %1\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["linked_item"] ?? null)))]);
            yield "
    ";
        }
        // line 75
        yield "
    ";
        // line 76
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 76, $this->getSourceContext())->macro_datetimeField(...["begin_date", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["begin_date"] ?? null) : null), __("Visible since"), ["clearable" => true]]);
        // line 78
        yield "
    ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 79, $this->getSourceContext())->macro_datetimeField(...["end_date", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["end_date"] ?? null) : null), __("Visible until"), ["clearable" => true]]);
        // line 81
        yield "

    <hr class=\"my-2\">

    ";
        // line 85
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 85, $this->getSourceContext())->macro_textField(...["name", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["name"] ?? null) : null), __("Subject"), ["full_width" => true, "label_class" => "col-1", "input_class" => "col-11"]]);
        // line 89
        yield "
    ";
        // line 90
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 90, $this->getSourceContext())->macro_textareaField(...["answer", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["answer"] ?? null) : null), __("Content"), ["full_width" => true, "label_class" => "col-1", "input_class" => "col-11", "enable_fileupload" => true, "enable_richtext" => true]]);
        // line 96
        yield "

    ";
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "        <hr class=\"my-2\">

        ";
            // line 101
            $context["visibility_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 102
                yield "            <span id=\"visibility";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"></span>
            <script>
                \$(() => {
                    \$('#dropdown__visibility__type_";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "').on('change', (e) => {
                        const selected_type = e.target.value;
                        \$('#visibility";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "').load(
                            '";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/visibility.php"), "html", null, true);
                yield "',
                            {
                                'type': selected_type,
                                'right': 'knowbase',
                                'prefix': '_visibility',
                                'nobutton': 1
                            }
                        );
                    });
                });
            </script>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 120, $this->getSourceContext())->macro_dropdownItemTypes(...["_visibility[_type]", 0, _n("Target", "Targets", 1), ["types" => ["Entity", "Group", "Profile", "User"], "rand" =>             // line 122
($context["rand"] ?? null), "add_field_html" =>             // line 123
($context["visibility_fields"] ?? null)]]);
            // line 124
            yield "
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/kb/knowbaseitem.html.twig";
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
        return array (  240 => 124,  238 => 123,  237 => 122,  235 => 120,  219 => 108,  215 => 107,  210 => 105,  203 => 102,  201 => 101,  197 => 99,  195 => 98,  191 => 96,  189 => 90,  186 => 89,  184 => 85,  178 => 81,  176 => 79,  173 => 78,  171 => 76,  168 => 75,  163 => 73,  159 => 72,  154 => 71,  152 => 70,  149 => 69,  143 => 67,  137 => 65,  134 => 64,  131 => 63,  128 => 62,  123 => 60,  120 => 58,  114 => 56,  108 => 54,  105 => 53,  102 => 52,  96 => 50,  94 => 49,  91 => 48,  85 => 46,  79 => 44,  77 => 43,  74 => 42,  72 => 40,  68 => 39,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/kb/knowbaseitem.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\tools\\kb\\knowbaseitem.html.twig");
    }
}
