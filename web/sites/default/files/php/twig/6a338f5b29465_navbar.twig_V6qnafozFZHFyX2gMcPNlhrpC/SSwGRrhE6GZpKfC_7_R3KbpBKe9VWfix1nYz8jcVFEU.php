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

/* @apigee-kickstart/navbar/navbar.twig */
class __TwigTemplate_d520fb167fa652ccd20a083ace7a515c extends Template
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
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("radix/navbar"), "html", null, true);
        yield "

";
        // line 20
        $context["container"] = (((($context["container"] ?? null) == "fixed")) ? ("container") : (false));
        // line 21
        $context["placement"] = (((array_key_exists("placement", $context) &&  !(null === $context["placement"]))) ? ($context["placement"]) : (""));
        // line 22
        $context["color"] = (((array_key_exists("color", $context) &&  !(null === $context["color"]))) ? ($context["color"]) : ("light"));
        // line 23
        yield "
<nav class=\"navbar navbar-expand-lg justify-content-between navbar-";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placement"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["utility_classes"] ?? null), " "), "html", null, true);
        yield "\">
  ";
        // line 25
        if ((($tmp = ($context["container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield "\">
  ";
        }
        // line 28
        yield "
  ";
        // line 29
        yield from $this->unwrap()->yieldBlock('branding', $context, $blocks);
        // line 32
        yield "
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\">
      ";
        // line 35
        if ((($tmp =  !($context["color"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        ";
            yield from $this->load("@apigee-kickstart/icons/navbar-toggle.svg", 36)->unwrap()->yield($context);
            // line 37
            yield "      ";
        }
        // line 38
        yield "    </span>
  </button>

  <div class=\"collapse navbar-collapse\">
    ";
        // line 42
        yield from $this->unwrap()->yieldBlock('left', $context, $blocks);
        // line 45
        yield "
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('right', $context, $blocks);
        // line 49
        yield "  </div>

  ";
        // line 51
        if ((($tmp = ($context["container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "    </div>
  ";
        }
        // line 54
        yield "</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["utility_classes", "branding", "left", "right"]);        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_branding(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["branding"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_left(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["left"] ?? null), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["right"] ?? null), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/navbar/navbar.twig";
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
        return array (  161 => 47,  154 => 46,  146 => 43,  139 => 42,  131 => 30,  124 => 29,  117 => 54,  113 => 52,  111 => 51,  107 => 49,  105 => 46,  102 => 45,  100 => 42,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  81 => 32,  79 => 29,  76 => 28,  70 => 26,  68 => 25,  60 => 24,  57 => 23,  55 => 22,  53 => 21,  51 => 20,  46 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/navbar/navbar.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/navbar/navbar.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "if" => 25, "block" => 29, "include" => 36];
        static $filters = ["escape" => 18, "join" => 24];
        static $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block", 3 => "include"],
                [0 => "escape", 1 => "join"],
                [0 => "attach_library"],
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
