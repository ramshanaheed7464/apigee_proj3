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

/* @apigee-kickstart/page/sidebar-default.twig */
class __TwigTemplate_8082126254440e60d1ac6141947c35da extends Template
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
        // line 30
        yield "
";
        // line 31
        $context["content_classes"] = Twig\Extension\CoreExtension::merge([(((        // line 32
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-5 offset-md-1") : ("")), (((        // line 33
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-md-8 offset-md-1") : ("")), ((( !        // line 34
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-8") : ("")), ((( !        // line 35
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-lg-7 col-xl-6") : (""))], ((        // line 36
array_key_exists("content_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_classes"] ?? null), [])) : ([])));
        // line 37
        yield "
";
        // line 38
        $context["content_no_sidebar_row_classes"] = ((array_key_exists("content_no_sidebar_row_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_no_sidebar_row_classes"] ?? null), [])) : ([]));
        // line 39
        $context["content_no_sidebar_col_classes"] = Twig\Extension\CoreExtension::merge(["col-md"], ((array_key_exists("content_no_sidebar_col_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_no_sidebar_col_classes"] ?? null), [])) : ([])));
        // line 40
        yield "
";
        // line 41
        $context["sidebar_default_content"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "  ";
            if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "    ";
                if ((($context["sidebar_first"] ?? null) || ($context["sidebar_second"] ?? null))) {
                    // line 44
                    yield "      <div class=\"page__content ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_classes"] ?? null), " ")), "html", null, true);
                    yield "\">
        ";
                    // line 45
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                    yield "
      </div>
    ";
                } else {
                    // line 48
                    yield "      ";
                    $context["content_no_sidebar"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                        // line 49
                        yield "        <div class=\"page__content ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_no_sidebar_col_classes"] ?? null), " ")), "html", null, true);
                        yield "\">
          ";
                        // line 50
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                        yield "
        </div>
      ";
                        yield from [];
                    })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 53
                    yield "
      ";
                    // line 54
                    if ((($tmp = ($context["content_no_sidebar_row_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 55
                        yield "        <div class=\"row ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_no_sidebar_row_classes"] ?? null), " ")), "html", null, true);
                        yield "\">
          ";
                        // line 56
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_no_sidebar"] ?? null), "html", null, true);
                        yield "
        </div>
      ";
                    } else {
                        // line 59
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_no_sidebar"] ?? null), "html", null, true);
                        yield "
      ";
                    }
                    // line 61
                    yield "    ";
                }
                // line 62
                yield "  ";
            }
            // line 63
            yield "
  ";
            // line 64
            if ((($tmp = ($context["sidebar_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "    <aside class=\"sidebar sidebar-first col-md order-md-first\">
      ";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first"] ?? null), "html", null, true);
                yield "
    </aside>
  ";
            }
            // line 69
            yield "
  ";
            // line 70
            if ((($tmp = ($context["sidebar_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "    <aside class=\"sidebar sidebar-second col-md order-md-last offset-md-1\">
      ";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second"] ?? null), "html", null, true);
                yield "
    </aside>
  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "
<div class=\"page-layout-sidebar-default\">
  ";
        // line 78
        if ((($tmp = ($context["container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "    <div class=\"container py-5\">
      <div class=\"row\">
        ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_default_content"] ?? null), "html", null, true);
            yield "
      </div>
    </div>

  ";
        } else {
            // line 86
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_default_content"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 88
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sidebar_first", "sidebar_second", "content", "container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/page/sidebar-default.twig";
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
        return array (  179 => 88,  173 => 86,  165 => 81,  161 => 79,  159 => 78,  155 => 76,  147 => 72,  144 => 71,  142 => 70,  139 => 69,  133 => 66,  130 => 65,  128 => 64,  125 => 63,  122 => 62,  119 => 61,  113 => 59,  107 => 56,  102 => 55,  100 => 54,  97 => 53,  90 => 50,  85 => 49,  82 => 48,  76 => 45,  71 => 44,  68 => 43,  65 => 42,  63 => 41,  60 => 40,  58 => 39,  56 => 38,  53 => 37,  51 => 36,  50 => 35,  49 => 34,  48 => 33,  47 => 32,  46 => 31,  43 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/page/sidebar-default.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/page/sidebar-default.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 42];
        static $filters = ["merge" => 36, "default" => 36, "escape" => 44, "trim" => 44, "join" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "merge", 1 => "default", 2 => "escape", 3 => "trim", 4 => "join"],
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
