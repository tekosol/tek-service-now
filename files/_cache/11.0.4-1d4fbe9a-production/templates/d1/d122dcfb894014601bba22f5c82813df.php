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

/* pages/setup/notification/queued_notification.html.twig */
class __TwigTemplate_1e48dd22ab44510f742522322b00904c extends Template
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 37, $this->getSourceContext())->macro_htmlField(...["", (((($context["parent"] ?? null) != null)) ? (get_class(($context["parent"] ?? null))) : (Twig\Extension\CoreExtension::constant("NOT_AVAILABLE"))), _n("Type", "Types", 1)]);
        yield "
    ";
        // line 38
        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["parent"] ?? null), "CommonDBTM")) {
            // line 39
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 39, $this->getSourceContext())->macro_htmlField(...["", (((($context["parent"] ?? null) != null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "getLink", [], "method", false, false, false, 39)) : (Twig\Extension\CoreExtension::constant("NOT_AVAILABLE"))), _n("Item", "Items", 1)]);
            yield "
    ";
        } else {
            // line 41
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 41, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        }
        // line 43
        yield "
    ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 44, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("NotificationTemplate", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["notificationtemplates_id"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationTemplate")]);
        yield "
    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 45, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 47
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 47, $this->getSourceContext())->macro_htmlField(...["", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["create_time"] ?? null) : null), __("Creation date")]);
        yield "
    ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 48, $this->getSourceContext())->macro_htmlField(...["", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["send_time"] ?? null) : null), __("Expected send date")]);
        yield "
    ";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 49, $this->getSourceContext())->macro_htmlField(...["", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["sent_time"] ?? null) : null), __("Send date")]);
        yield "
    ";
        // line 50
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 50, $this->getSourceContext())->macro_htmlField(...["", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["sent_try"] ?? null) : null), __("Number of tries of sent")]);
        yield "

    ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 52, $this->getSourceContext())->macro_smallTitle(...[_n("Email", "Emails", 1)]);
        yield "
    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 53, $this->getSourceContext())->macro_htmlField(...["", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["sender"] ?? null) : null), __("Sender email")]);
        yield "
    ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 54, $this->getSourceContext())->macro_htmlField(...["", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["sendername"] ?? null) : null), __("Sender name")]);
        yield "
    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 55, $this->getSourceContext())->macro_htmlField(...["", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["recipient"] ?? null) : null), __("Recipient email")]);
        yield "
    ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 56, $this->getSourceContext())->macro_htmlField(...["", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["recipientname"] ?? null) : null), __("Recipient name")]);
        yield "
    ";
        // line 57
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 57, $this->getSourceContext())->macro_htmlField(...["", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["replyto"] ?? null) : null), __("Reply-To email")]);
        yield "
    ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 58, $this->getSourceContext())->macro_htmlField(...["", (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["replytoname"] ?? null) : null), __("Reply-To name")]);
        yield "
    ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 59, $this->getSourceContext())->macro_htmlField(...["", (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["messageid"] ?? null) : null), __("Message ID")]);
        yield "
    ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 60, $this->getSourceContext())->macro_htmlField(...["", ($context["additional_headers"] ?? null), __("Additional headers")]);
        yield "
    ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 61, $this->getSourceContext())->macro_htmlField(...["", (($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["name"] ?? null) : null), __("Subject")]);
        yield "

    ";
        // line 63
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 63, $this->getSourceContext())->macro_smallTitle(...[__("Content")]);
        yield "
    ";
        // line 64
        $context["has_html_content"] =  !Twig\Extension\CoreExtension::testEmpty((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["body_html"] ?? null) : null));
        // line 65
        yield "    <div class=\"row\">
        <div class=\"col-xxl-12\">
            <ul class=\"nav nav-tabs\" id=\"emailBodyTabs\" role=\"tablist\">
                ";
        // line 68
        if ((($tmp = ($context["has_html_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"html-tab\" data-bs-toggle=\"tab\" href=\"#html\" role=\"tab\" aria-controls=\"html\" aria-selected=\"false\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HTML"), "html", null, true);
            yield "</a>
                    </li>
                ";
        }
        // line 73
        yield "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 74
        yield (((($tmp = ($context["has_html_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("active"));
        yield "\" id=\"text-tab\" data-bs-toggle=\"tab\" href=\"#text\" role=\"tab\" aria-controls=\"text\" aria-selected=\"true\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Text"), "html", null, true);
        yield "</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"emailBodyTabsContent\">
                ";
        // line 78
        if ((($tmp = ($context["has_html_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                <div class=\"tab-pane fade show active\" id=\"html\" role=\"tabpanel\" aria-labelledby=\"html-tab\">
                    ";
            // line 80
            $context["body_html"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "cleanHtml", [(($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["body_html"] ?? null) : null)], "method", false, false, false, 80));
            // line 81
            yield "                    ";
            if ((($tmp = ($context["undisclose_body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "                        ";
                $context["body_html"] = __("The content of the notification contains sensitive information and therefore cannot be displayed.");
                // line 83
                yield "                    ";
            }
            // line 84
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 84, $this->getSourceContext())->macro_htmlField(...["", ($context["body_html"] ?? null), null, ["no_label" => true, "full_width" => true]]);
            // line 87
            yield "
                </div>
                ";
        }
        // line 90
        yield "                <div class=\"tab-pane fade ";
        yield (((($tmp = ($context["has_html_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("show active"));
        yield "\" id=\"text\" role=\"tabpanel\" aria-labelledby=\"text-tab\">
                    ";
        // line 91
        $context["body_text"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["body_text"] ?? null) : null), "html", null, true));
        // line 92
        yield "                    ";
        if ((($tmp = ($context["undisclose_body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "                        ";
            $context["body_text"] = __("The content of the notification contains sensitive information and therefore cannot be displayed.");
            // line 94
            yield "                    ";
        }
        // line 95
        yield "                    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 95, $this->getSourceContext())->macro_htmlField(...["", ($context["body_text"] ?? null), null, ["no_label" => true, "full_width" => true]]);
        // line 98
        yield "
                </div>
            </div>
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
        return "pages/setup/notification/queued_notification.html.twig";
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
        return array (  227 => 98,  224 => 95,  221 => 94,  218 => 93,  215 => 92,  213 => 91,  208 => 90,  203 => 87,  200 => 84,  197 => 83,  194 => 82,  191 => 81,  189 => 80,  186 => 79,  184 => 78,  175 => 74,  172 => 73,  166 => 70,  163 => 69,  161 => 68,  156 => 65,  154 => 64,  150 => 63,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  121 => 55,  117 => 54,  113 => 53,  109 => 52,  104 => 50,  100 => 49,  96 => 48,  92 => 47,  87 => 45,  83 => 44,  80 => 43,  74 => 41,  68 => 39,  66 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/queued_notification.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\setup\\notification\\queued_notification.html.twig");
    }
}
