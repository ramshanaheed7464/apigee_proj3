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

/* radix:block */
class __TwigTemplate_7e79a86eb288225bc94cd55f7e249ab5 extends Template
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
            'block_label' => [$this, 'block_block_label'],
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--block"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:block"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:block"));
        // line 33
        $context["block_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 34
        $context["block_html_tag"] = (((array_key_exists("block_html_tag", $context) &&  !(null === $context["block_html_tag"]))) ? ($context["block_html_tag"]) : ("div"));
        // line 35
        yield "
";
        // line 37
        $context["block_classes"] = Twig\Extension\CoreExtension::merge(["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 39))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 40
($context["plugin_id"] ?? null))), (((($tmp =         // line 41
($context["layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass(($context["layout"] ?? null)))) : ("")), (((($tmp =         // line 42
($context["bundle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(($context["bundle"] ?? null)))) : ("")), (((($tmp =         // line 43
($context["id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(Twig\Extension\CoreExtension::replace(($context["id"] ?? null), ["_" => "-"])))) : (""))], ((        // line 44
($context["block_utility_classes"] ?? null)) ? ($context["block_utility_classes"]) : ([])));
        // line 46
        yield "
";
        // line 48
        $context["block_content_classes"] = Twig\Extension\CoreExtension::merge(["block__content"], ((        // line 50
($context["block_content_utility_classes"] ?? null)) ? ($context["block_content_utility_classes"]) : ([])));
        // line 52
        yield "
";
        // line 53
        if ((($tmp = ($context["block_html_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["block_html_tag"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["block_attributes"] ?? null), "id"), "addClass", [($context["block_classes"] ?? null)], "method", false, false, true, 54), "html", null, true);
            yield ">
";
        }
        // line 56
        yield "
  ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 58
        yield from $this->unwrap()->yieldBlock('block_label', $context, $blocks);
        // line 70
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 72
        yield from $this->unwrap()->yieldBlock('block_content', $context, $blocks);
        // line 79
        yield "
";
        // line 80
        if ((($tmp = ($context["block_html_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["block_html_tag"] ?? null), "html", null, true);
            yield ">
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "configuration", "plugin_id", "layout", "bundle", "id", "block_utility_classes", "block_content_utility_classes", "title_prefix", "title_suffix", "label", "title_attributes", "heading_html_tag", "heading_utility_classes", "content", "content_attributes"]);        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "    ";
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "      ";
            // line 61
            yield from $this->load("radix:heading", 61)->unwrap()->yield(CoreExtension::merge($context, ["heading_attributes" =>             // line 62
($context["title_attributes"] ?? null), "content" =>             // line 63
($context["label"] ?? null), "heading_html_tag" => ((            // line 64
array_key_exists("heading_html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_html_tag"] ?? null), "h2")) : ("h2")), "heading_utility_classes" => ((            // line 65
array_key_exists("heading_utility_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_utility_classes"] ?? null), ["block__title"])) : (["block__title"]))]));
            // line 68
            yield "    ";
        }
        // line 69
        yield "  ";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "    ";
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["block_content_classes"] ?? null)], "method", false, false, true, 74), "html", null, true);
            yield ">
        ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 78
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:block";
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
        return array (  162 => 78,  156 => 75,  151 => 74,  148 => 73,  141 => 72,  136 => 69,  133 => 68,  131 => 65,  130 => 64,  129 => 63,  128 => 62,  127 => 61,  125 => 60,  122 => 59,  115 => 58,  105 => 81,  103 => 80,  100 => 79,  98 => 72,  92 => 70,  90 => 58,  86 => 57,  83 => 56,  75 => 54,  73 => 53,  70 => 52,  68 => 50,  67 => 48,  64 => 46,  62 => 44,  61 => 43,  60 => 42,  59 => 41,  58 => 40,  57 => 39,  56 => 37,  53 => 35,  51 => 34,  49 => 33,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:block", "C:\\wamp64\\www\\apigee_proj3\\web/themes/contrib/radix\\components\\block\\block.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 33, "if" => 53, "block" => 58, "include" => 61];
        static $filters = ["merge" => 44, "clean_class" => 39, "replace" => 43, "escape" => 54, "without" => 54, "default" => 64];
        static $functions = ["create_attribute" => 33];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block", 3 => "include"],
                [0 => "merge", 1 => "clean_class", 2 => "replace", 3 => "escape", 4 => "without", 5 => "default"],
                [0 => "create_attribute"],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
