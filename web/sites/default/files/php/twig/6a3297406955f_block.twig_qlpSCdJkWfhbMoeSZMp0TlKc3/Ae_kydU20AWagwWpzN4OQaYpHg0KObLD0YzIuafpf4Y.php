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

/* @apigee-kickstart/block/block.twig */
class __TwigTemplate_05cc1cabd4d2641c59506eea0a833de4 extends Template
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
            'label' => [$this, 'block_label'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        $context["block_classes"] = Twig\Extension\CoreExtension::merge(["block", (((($tmp =         // line 13
($context["bundle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(($context["bundle"] ?? null)))) : ("")), (((($tmp =         // line 14
($context["id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(Twig\Extension\CoreExtension::replace(($context["id"] ?? null), ["_" => "-"])))) : (""))], (((($tmp =         // line 15
($context["block_utility_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["block_utility_classes"] ?? null)) : ([])));
        // line 16
        yield "  
  ";
        // line 17
        if ((($tmp = ($context["html_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_tag"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "id"), "addClass", [($context["block_classes"] ?? null)], "method", false, false, true, 18), "html", null, true);
            yield ">
  ";
        }
        // line 20
        yield "  
    ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 22
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "      ";
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 26
            yield "    ";
        }
        // line 27
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  
    ";
        // line 29
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 33
            yield "    ";
        }
        // line 34
        yield "  
  ";
        // line 35
        if ((($tmp = ($context["html_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    </";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_tag"] ?? null), "html", null, true);
            yield ">
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bundle", "id", "block_utility_classes", "html_tag", "attributes", "title_prefix", "label", "title_suffix", "content", "title_attributes"]);        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "        <h2";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h2>
      ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/block/block.twig";
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
        return array (  130 => 31,  123 => 30,  113 => 24,  106 => 23,  96 => 36,  94 => 35,  91 => 34,  88 => 33,  85 => 30,  83 => 29,  77 => 27,  74 => 26,  71 => 23,  69 => 22,  65 => 21,  62 => 20,  55 => 18,  53 => 17,  50 => 16,  48 => 15,  47 => 14,  46 => 13,  45 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/block/block.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/block/block.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 17, "block" => 23];
        static $filters = ["merge" => 15, "clean_class" => 13, "replace" => 14, "escape" => 18, "without" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block"],
                [0 => "merge", 1 => "clean_class", 2 => "replace", 3 => "escape", 4 => "without"],
                [],
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
