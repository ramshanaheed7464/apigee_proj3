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

/* @apigee-kickstart/breadcrumb/breadcrumb.twig */
class __TwigTemplate_3f8ef5fdafb27f7fc91389caaf12fdb6 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                yield "    <li class=\"breadcrumb-item ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")));
                yield "\">
      ";
                // line 10
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "        <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 11), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 11), "html", null, true);
                    yield "</a>
      ";
                } else {
                    // line 13
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 13), "html", null, true);
                    yield "
      ";
                }
                // line 15
                yield "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/breadcrumb/breadcrumb.twig";
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
        return array (  71 => 15,  65 => 13,  57 => 11,  55 => 10,  50 => 9,  45 => 8,  43 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/breadcrumb/breadcrumb.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/breadcrumb/breadcrumb.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7, "for" => 8];
        static $filters = ["escape" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape"],
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
