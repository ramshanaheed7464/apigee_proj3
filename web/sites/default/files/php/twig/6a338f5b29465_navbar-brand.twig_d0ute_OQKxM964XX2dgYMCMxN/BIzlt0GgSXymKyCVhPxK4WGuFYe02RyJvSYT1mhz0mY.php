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

/* @apigee-kickstart/navbar/navbar-brand.twig */
class __TwigTemplate_022f7f2af6d854c4e09cb92139c886e6 extends Template
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
        // line 17
        $macros["navbar_brand"] = $this->macros["navbar_brand"] = $this;
        // line 18
        $context["utility_classes"] = Twig\Extension\CoreExtension::join(($context["utility_classes"] ?? null), " ");
        // line 19
        yield "
";
        // line 20
        if ((($tmp = ($context["path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true);
            yield "\" class=\"navbar-brand d-flex align-items-center ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["utility_classes"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 22
            if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["navbar_brand"]->getTemplateForMacro("macro_image", $context, 23, $this->getSourceContext())->macro_image(...[($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)]));
                yield "
    ";
            }
            // line 25
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "
  </a>
";
        } else {
            // line 28
            yield "  <span class=\"navbar-brand h1 mb-0 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["utility_classes"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 29
            if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["navbar_brand"]->getTemplateForMacro("macro_image", $context, 30, $this->getSourceContext())->macro_image(...[($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)]));
                yield "
    ";
            }
            // line 32
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "
  </span>
";
        }
        // line 35
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "path", "text", "image", "width", "height", "alt", "src"]);        yield from [];
    }

    // line 36
    public function macro_image($src = null, $width = null, $height = null, $alt = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "src" => $src,
            "width" => $width,
            "height" => $height,
            "alt" => $alt,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "  ";
            $context["height_attr"] = (((($context["height"] ?? null) != "auto")) ? ((("height=\"" . ($context["height"] ?? null)) . "\"")) : (""));
            // line 38
            yield "
  <img src=\"";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["src"] ?? null), "html", null, true);
            yield "\" width=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default(($context["width"] ?? null), 30)) : (30)), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["height_attr"] ?? null), "html", null, true);
            yield " alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("alt", $context)) ? (Twig\Extension\CoreExtension::default(($context["alt"] ?? null), "")) : ("")), "html", null, true);
            yield "\" class=\"me-2\" />
";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/navbar/navbar-brand.twig";
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
        return array (  126 => 39,  123 => 38,  120 => 37,  105 => 36,  98 => 35,  91 => 32,  85 => 30,  83 => 29,  76 => 28,  69 => 25,  63 => 23,  61 => 22,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  43 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/navbar/navbar-brand.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/navbar/navbar-brand.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 17, "set" => 18, "if" => 20, "macro" => 36];
        static $filters = ["join" => 18, "escape" => 21, "default" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "set", 2 => "if", 3 => "macro"],
                [0 => "join", 1 => "escape", 2 => "default"],
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
