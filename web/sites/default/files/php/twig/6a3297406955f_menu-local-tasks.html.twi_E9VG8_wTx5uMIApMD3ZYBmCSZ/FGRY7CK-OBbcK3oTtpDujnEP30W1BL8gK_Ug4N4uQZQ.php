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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_99afc618925a0b8fb6a7a1850056eb56 extends Template
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
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("claro/drupal.nav-tabs"), "html", null, true);
        yield "

";
        // line 58
        if ((($tmp = ($context["primary"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "  <h2 class=\"visually-hidden\" id=\"primary-tabs-title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            yield "</h2>
  <nav aria-labelledby=\"primary-tabs-title\" class=\"is-horizontal is-collapsible mb-3\" data-drupal-nav-tabs role=\"navigation\">
    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs display toggle"));
            yield "\" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>
    <ul class=\"tabs nav-tabs nav-tabs--primary clearfix\" data-drupal-nav-tabs-target>";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true);
            yield "</ul>
  </nav>
";
        }
        // line 65
        if ((($tmp = ($context["secondary"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "  <h2 class=\"visually-hidden\" id=\"secondary-tabs-title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            yield "</h2>
  <nav aria-labelledby=\"secondary-tabs-title\" class=\"is-horizontal mb-3\" data-drupal-nav-tabs role=\"navigation\">
    <ul class=\"tabs nav nav-tabs--secondary clearfix\">";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true);
            yield "</ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["primary", "secondary"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig";
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
        return array (  74 => 68,  68 => 66,  66 => 65,  60 => 62,  56 => 61,  50 => 59,  48 => 58,  43 => 56,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-tasks.html.twig", "C:\\wamp64\\www\\apigee_proj3\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\menu\\menu-local-tasks.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 58];
        static $filters = ["escape" => 56, "t" => 59];
        static $functions = ["attach_library" => 56];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape", 1 => "t"],
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
