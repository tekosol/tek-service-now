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

/* pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig */
class __TwigTemplate_138249cc17a27582736257924f9f43c2 extends Template
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
            'dropdown_content' => [$this, 'block_dropdown_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return "pages/admin/form/question_type/base_advanced_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        $this->parent = $this->load("pages/admin/form/question_type/base_advanced_configuration.html.twig", 35);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dropdown_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    <div data-glpi-form-editor-item-dropdown-advanced-configuration data-glpi-form-editor-advanced-question-configuration-visible>
        ";
        // line 41
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 41, $this->getSourceContext())->macro_dropdownArrayField(...["extra_data[categories_filter]", "", ["request" => __("Request categories"), "incident" => __("Incident categories"), "change" => __("Change categories"), "problem" => __("Problem categories")], __("Filter ticket categories"), ["full_width" => true, "is_horizontal" => false, "multiple" => true, "values" => ((        // line 55
array_key_exists("categories_filter", $context)) ? (Twig\Extension\CoreExtension::default(($context["categories_filter"] ?? null), ["request" => true, "incident" => true, "change" => true, "problem" => true])) : (["request" => true, "incident" => true, "change" => true, "problem" => true])), "init" => (((($tmp =  !(null ===         // line 61
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "add_data_attributes" => ["glpi-form-editor-item-dropdown-advanced-configuration-visible-for-itemtype" => "ITILCategory"]]]);
        // line 66
        yield "
        ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 67, $this->getSourceContext())->macro_dropdownField(...[        // line 68
($context["itemtype"] ?? null), "extra_data[root_items_id]", ((        // line 70
array_key_exists("root_items_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["root_items_id"] ?? null), 0)) : (0)), __("Subtree root"), ["full_width" => true, "is_horizontal" => false, "init" => (((($tmp =  !(null ===         // line 75
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "display_emptychoice" => false, "toadd" => ["-1" => Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE")]]]);
        // line 81
        yield "
        ";
        // line 82
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 82, $this->getSourceContext())->macro_numberField(...["extra_data[subtree_depth]", ((        // line 84
array_key_exists("subtree_depth", $context)) ? (Twig\Extension\CoreExtension::default(($context["subtree_depth"] ?? null), 0)) : (0)), __("Limit subtree depth"), ["full_width" => true, "is_horizontal" => false, "min" => 0, "max" => 16, "step" => 1]]);
        // line 93
        yield "
        ";
        // line 94
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 94, $this->getSourceContext())->macro_sliderField(...["extra_data[selectable_tree_root]", (((($tmp = ((        // line 96
array_key_exists("selectable_tree_root", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectable_tree_root"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)), __("Make tree root selectable"), ["full_width" => false, "is_horizontal" => true, "align_label_right" => false, "inline_add_field_html" => true, "field_class" => "col-12 ms-0 me-0", "label_class" => "col-10 p-0", "input_class" => "col-2 p-0 justify-content-end", "mb" => "mb-0"]]);
        // line 108
        yield "

        ";
        // line 110
        if ((null === ($context["question"] ?? null))) {
            // line 111
            yield "            <script>
                import(\"/js/modules/Forms/ItemDropdownAdvancedConfig.js\").then((m) => {
                    new m.GlpiFormItemDropdownAdvancedConfig();
                });
            </script>
        ";
        }
        // line 117
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig";
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
        return array (  104 => 117,  96 => 111,  94 => 110,  90 => 108,  88 => 96,  87 => 94,  84 => 93,  82 => 84,  81 => 82,  78 => 81,  76 => 75,  75 => 70,  74 => 68,  73 => 67,  70 => 66,  68 => 61,  67 => 55,  66 => 41,  63 => 40,  56 => 39,  51 => 35,  49 => 37,  47 => 33,  40 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item_dropdown/advanced_configuration.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\question_type\\item_dropdown\\advanced_configuration.html.twig");
    }
}
