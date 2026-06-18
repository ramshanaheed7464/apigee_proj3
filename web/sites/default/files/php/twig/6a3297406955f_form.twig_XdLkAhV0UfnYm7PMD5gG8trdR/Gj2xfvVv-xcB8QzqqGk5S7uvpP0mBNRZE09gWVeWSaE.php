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

/* @apigee-kickstart/form/form.twig */
class __TwigTemplate_1227cc0daf0b1ddfe752042ee1aa4eb4 extends Template
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
            'form_children' => [$this, 'block_form_children'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        $context["form_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 16
        yield "
";
        // line 18
        $context["form_classes"] = Twig\Extension\CoreExtension::merge(["form", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["form_attributes"] ?? null), "id", [], "any", false, false, true, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("form--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["form_attributes"] ?? null), "id", [], "any", false, false, true, 20)))) : ("")), (((($tmp =         // line 21
($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex form-inline") : (""))], ((        // line 23
($context["form_utility_classes"] ?? null)) ? ($context["form_utility_classes"]) : ([])));
        // line 25
        yield "
<form ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form_attributes"] ?? null), "addClass", [($context["form_classes"] ?? null)], "method", false, false, true, 26), "html", null, true);
        yield ">
  ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 28
        yield from $this->unwrap()->yieldBlock('form_children', $context, $blocks);
        // line 31
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
</form>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "is_inline", "form_utility_classes", "title_prefix", "title_suffix", "children"]);        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_children(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/form/form.twig";
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
        return array (  84 => 29,  77 => 28,  67 => 31,  65 => 28,  61 => 27,  57 => 26,  54 => 25,  52 => 23,  51 => 21,  50 => 20,  49 => 18,  46 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/form/form.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/form/form.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "block" => 28];
        static $filters = ["merge" => 23, "clean_class" => 20, "escape" => 26];
        static $functions = ["create_attribute" => 15];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "block"],
                [0 => "merge", 1 => "clean_class", 2 => "escape"],
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
