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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig */
class __TwigTemplate_6f42fea6868a7070e25f5684b291b88a extends Template
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
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "
";
        // line 63
        $context["classes"] = Twig\Extension\CoreExtension::merge(["page"], ((        // line 65
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])));
        // line 66
        yield "
";
        // line 67
        $context["main_container"] = (((array_key_exists("main_container", $context) &&  !(null === $context["main_container"]))) ? ($context["main_container"]) : (true));
        // line 68
        $context["main_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 69
        $context["main_classes"] = Twig\Extension\CoreExtension::merge(["main"], ((        // line 71
array_key_exists("main_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["main_classes"] ?? null), [])) : ([])));
        // line 72
        yield "
";
        // line 73
        $context["sidebar_placement"] = ((array_key_exists("sidebar_placement", $context)) ? (Twig\Extension\CoreExtension::default(($context["sidebar_placement"] ?? null), "default")) : ("default"));
        // line 74
        yield "
<div";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        yield ">
  ";
        // line 76
        yield from $this->load("profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig", 76, 1)->unwrap()->yield(CoreExtension::merge($context, ["placement" => "sticky-top", "container" => "fixed", "color" => false]));
        // line 102
        yield "
  ";
        // line 103
        if ((($tmp = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 103))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "    <nav aria-label=\"breadcrumb\" class=\"page__breadcrumbs\" style=\"--bs-breadcrumb-divider: \x27>\x27;\">
      <div class=\"container\">
        <ol class=\"breadcrumb\">
          ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 107), "html", null, true);
            yield "
        </ol>
      </div>
    </nav>
  ";
        }
        // line 112
        yield "
  ";
        // line 113
        if ((($tmp = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 113))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "    <header class=\"page__header\">
      ";
            // line 116
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_header", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 117), "apigee_kickstart_title"), "html", null, true);
                yield "
      ";
            } else {
                // line 119
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 119), "html", null, true);
                yield "
      ";
            }
            // line 121
            yield "    </header>
  ";
        }
        // line 123
        yield "
  ";
        // line 125
        yield "  ";
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tasks", [], "any", false, false, true, 125)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_header", [], "any", false, false, true, 125), "value", [], "any", false, false, true, 125))) {
            // line 126
            yield "    <div class=\"page__tasks\">
      <div class=\"container\">
        ";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tasks", [], "any", false, false, true, 128), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 132
        yield "
  ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "    <div class=\"page__content-above\">
      <div class=\"container-fluid px-0\">
        ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 136), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 140
        yield "
  <main";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["main_attributes"] ?? null), "addClass", [($context["main_classes"] ?? null)], "method", false, false, true, 141), "html", null, true);
        yield " role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 143
        yield "    ";
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 167
        yield "  </main>

  ";
        // line 169
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "    <div class=\"page__content-below\">
      <div class=\"container-fluid px-0\">
        ";
            // line 172
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 172), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 176
        yield "
  ";
        // line 177
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 177) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 177))) {
            // line 178
            yield "    <footer class=\"page__footer\">
      ";
            // line 179
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "        <div class=\"footer pt-5 pb-4 pb-md-8\">
          <div class=\"container\">
            <div class=\"d-md-flex justify-content-md-between\">
              ";
                // line 183
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 183), "html", null, true);
                yield "
            </div>
          </div>
        </div>
      ";
            }
            // line 188
            yield "
      ";
            // line 189
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 190
                yield "        <div class=\"copyright py-1\">
          <div class=\"container\">
            <div class=\"d-md-flex justify-content-md-end\">
              ";
                // line 193
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 193), "html", null, true);
                yield "
            </div>
          </div>
        </div>
      ";
            }
            // line 198
            yield "    </footer>
  ";
        }
        // line 200
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "page", "node"]);        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "      ";
        if ((($context["sidebar_placement"] ?? null) == "bottom")) {
            // line 145
            yield "        ";
            yield from $this->load("@apigee-kickstart/page/sidebar-bottom.twig", 145)->unwrap()->yield(CoreExtension::merge($context, ["container" =>             // line 146
($context["main_container"] ?? null), "content" => CoreExtension::getAttribute($this->env, $this->source,             // line 147
($context["page"] ?? null), "content", [], "any", false, false, true, 147), "sidebar_first" => CoreExtension::getAttribute($this->env, $this->source,             // line 148
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 148), "sidebar_second" => CoreExtension::getAttribute($this->env, $this->source,             // line 149
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 149)]));
            // line 151
            yield "
      ";
        } elseif ((        // line 152
($context["sidebar_placement"] ?? null) == "none")) {
            // line 153
            yield "        ";
            yield from $this->load("@apigee-kickstart/page/sidebar-none.twig", 153)->unwrap()->yield(CoreExtension::merge($context, ["container" =>             // line 154
($context["main_container"] ?? null), "content" => CoreExtension::getAttribute($this->env, $this->source,             // line 155
($context["page"] ?? null), "content", [], "any", false, false, true, 155)]));
            // line 157
            yield "
      ";
        } else {
            // line 159
            yield "        ";
            yield from $this->load("@apigee-kickstart/page/sidebar-default.twig", 159)->unwrap()->yield(CoreExtension::merge($context, ["container" =>             // line 160
($context["main_container"] ?? null), "content" => CoreExtension::getAttribute($this->env, $this->source,             // line 161
($context["page"] ?? null), "content", [], "any", false, false, true, 161), "sidebar_first" => CoreExtension::getAttribute($this->env, $this->source,             // line 162
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 162), "sidebar_second" => CoreExtension::getAttribute($this->env, $this->source,             // line 163
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 163)]));
            // line 165
            yield "      ";
        }
        // line 166
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig";
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
        return array (  272 => 166,  269 => 165,  267 => 163,  266 => 162,  265 => 161,  264 => 160,  262 => 159,  258 => 157,  256 => 155,  255 => 154,  253 => 153,  251 => 152,  248 => 151,  246 => 149,  245 => 148,  244 => 147,  243 => 146,  241 => 145,  238 => 144,  231 => 143,  224 => 200,  220 => 198,  212 => 193,  207 => 190,  205 => 189,  202 => 188,  194 => 183,  189 => 180,  187 => 179,  184 => 178,  182 => 177,  179 => 176,  172 => 172,  168 => 170,  166 => 169,  162 => 167,  159 => 143,  155 => 141,  152 => 140,  145 => 136,  141 => 134,  139 => 133,  136 => 132,  129 => 128,  125 => 126,  122 => 125,  119 => 123,  115 => 121,  109 => 119,  103 => 117,  100 => 116,  97 => 114,  95 => 113,  92 => 112,  84 => 107,  79 => 104,  77 => 103,  74 => 102,  72 => 76,  68 => 75,  65 => 74,  63 => 73,  60 => 72,  58 => 71,  57 => 69,  55 => 68,  53 => 67,  50 => 66,  48 => 65,  47 => 63,  44 => 61,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig", "C:\\wamp64\\www\\apigee_proj3\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\page\\page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 63, "embed" => 76, "if" => 103, "block" => 143, "include" => 145];
        static $filters = ["merge" => 65, "default" => 65, "escape" => 75, "render" => 103, "without" => 117];
        static $functions = ["create_attribute" => 68];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "embed", 2 => "if", 3 => "block", 4 => "include"],
                [0 => "merge", 1 => "default", 2 => "escape", 3 => "render", 4 => "without"],
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


/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig */
class __TwigTemplate_6f42fea6868a7070e25f5684b291b88a___1 extends Template
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
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 76
        return "@apigee-kickstart/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@apigee-kickstart/navbar/navbar.twig", 76);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_branding(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 84), "html", null, true);
            yield "
      ";
        }
        // line 86
        yield "    ";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_left(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "        <div class=\"me-auto\">
          ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 91), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 94
        yield "    ";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 98), "html", null, true);
            yield "
      ";
        }
        // line 100
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig";
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
        return array (  442 => 100,  436 => 98,  433 => 97,  426 => 96,  421 => 94,  415 => 91,  412 => 90,  409 => 89,  402 => 88,  397 => 86,  391 => 84,  388 => 83,  381 => 82,  369 => 76,  272 => 166,  269 => 165,  267 => 163,  266 => 162,  265 => 161,  264 => 160,  262 => 159,  258 => 157,  256 => 155,  255 => 154,  253 => 153,  251 => 152,  248 => 151,  246 => 149,  245 => 148,  244 => 147,  243 => 146,  241 => 145,  238 => 144,  231 => 143,  224 => 200,  220 => 198,  212 => 193,  207 => 190,  205 => 189,  202 => 188,  194 => 183,  189 => 180,  187 => 179,  184 => 178,  182 => 177,  179 => 176,  172 => 172,  168 => 170,  166 => 169,  162 => 167,  159 => 143,  155 => 141,  152 => 140,  145 => 136,  141 => 134,  139 => 133,  136 => 132,  129 => 128,  125 => 126,  122 => 125,  119 => 123,  115 => 121,  109 => 119,  103 => 117,  100 => 116,  97 => 114,  95 => 113,  92 => 112,  84 => 107,  79 => 104,  77 => 103,  74 => 102,  72 => 76,  68 => 75,  65 => 74,  63 => 73,  60 => 72,  58 => 71,  57 => 69,  55 => 68,  53 => 67,  50 => 66,  48 => 65,  47 => 63,  44 => 61,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/page/page.html.twig", "C:\\wamp64\\www\\apigee_proj3\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\page\\page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 76, "if" => 83];
        static $filters = ["escape" => 84];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "extends", 1 => "if"],
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
