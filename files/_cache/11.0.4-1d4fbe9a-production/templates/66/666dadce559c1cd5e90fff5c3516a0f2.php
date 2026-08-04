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

/* pages/admin/form/destination_visibility_conditions_configuration.html.twig */
class __TwigTemplate_c2ed4f48b383374d0d49fac6f4de5432 extends Template
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
            'conditions_editor' => [$this, 'block_conditions_editor'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 36
        return "pages/admin/form/condition_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("pages/admin/form/condition_configuration.html.twig", 36);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_conditions_editor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        // line 40
        yield "    ";
        $context["strategies"] = "Glpi\\Form\\Condition\\CreationStrategy";
        // line 41
        yield "    ";
        $context["selected_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredCreationStrategy", [], "method", false, false, false, 41);
        // line 42
        yield "    ";
        $context["strategy_input_name"] = "creation_strategy";
        // line 43
        yield "    ";
        $context["conditions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 43);
        // line 44
        yield "
    ";
        // line 45
        $context["container_id"] = ("destination-condition-editor-" . CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 45));
        // line 46
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
        yield "\" class=\"col-xl-6 col-12\">
        ";
        // line 47
        yield from $this->yieldParentBlock("conditions_editor", $context, $blocks);
        yield "
    </div>

    <script defer type=\"module\">
        import { GlpiFormConditionVisibilityEditorController } from '/js/modules/Forms/ConditionVisibilityEditorController.js';

        // Load form sections state from backend
        const sections = [];
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSectionsStateForConditionEditor", [], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["section_data"]) {
            // line 56
            yield "            sections.push({
                uuid: '";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section_data"], "getUuid", [], "method", false, false, false, 57), "js"), "html", null, true);
            yield "',
                name: '";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section_data"], "getName", [], "method", false, false, false, 58), "js"), "html", null, true);
            yield "',
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
        // Load form questions state from backend
        const questions = [];
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getQuestionsStateForConditionEditor", [], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["question_data"]) {
            // line 65
            yield "            questions.push({
                uuid: '";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_data"], "getUuid", [], "method", false, false, false, 66), "js"), "html", null, true);
            yield "',
                name: '";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_data"], "getName", [], "method", false, false, false, 67), "js"), "html", null, true);
            yield "',
                type: '";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(CoreExtension::getAttribute($this->env, $this->source, $context["question_data"], "getType", [], "method", false, false, false, 68)), "js"), "html", null, true);
            yield "',
                extra_data: ";
            // line 69
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["question_data"], "getExtraData", [], "method", false, false, false, 69));
            yield ",
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "
        // Load form comments state from backend
        const comments = [];
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getCommentsStateForConditionEditor", [], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["comment_data"]) {
            // line 76
            yield "            comments.push({
                uuid: '";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment_data"], "getUuid", [], "method", false, false, false, 77), "js"), "html", null, true);
            yield "',
                name: '";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment_data"], "getName", [], "method", false, false, false, 78), "js"), "html", null, true);
            yield "',
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment_data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "
        // Initialize controller
        const parent_container = document.getElementById('";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
        yield "');
        const controller = new GlpiFormConditionVisibilityEditorController(
            parent_container.querySelector('[data-glpi-conditions-editor-container]'),
            null,
            null,
            sections,
            questions,
            comments,
        );
        controller.renderEditor();
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/destination_visibility_conditions_configuration.html.twig";
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
        return array (  175 => 83,  171 => 81,  162 => 78,  158 => 77,  155 => 76,  151 => 75,  146 => 72,  137 => 69,  133 => 68,  129 => 67,  125 => 66,  122 => 65,  118 => 64,  113 => 61,  104 => 58,  100 => 57,  97 => 56,  93 => 55,  82 => 47,  77 => 46,  75 => 45,  72 => 44,  69 => 43,  66 => 42,  63 => 41,  60 => 40,  58 => 39,  51 => 38,  40 => 36,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/destination_visibility_conditions_configuration.html.twig", "D:\\php\\htdocs\\tek-service-now\\templates\\pages\\admin\\form\\destination_visibility_conditions_configuration.html.twig");
    }
}
