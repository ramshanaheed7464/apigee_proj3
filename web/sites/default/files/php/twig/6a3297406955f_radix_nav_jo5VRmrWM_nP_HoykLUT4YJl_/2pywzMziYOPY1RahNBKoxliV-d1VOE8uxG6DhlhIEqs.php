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

/* radix:nav */
class __TwigTemplate_ac721d038f91960dcf0af1637743ca59 extends Template
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
            'nav_heading' => [$this, 'block_nav_heading'],
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--nav"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:nav"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:nav"));
        // line 15
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 17
        $context["alignment_classes"] = ["right" => "justify-content-end", "center" => "justify-content-center", "vertical" => "flex-column", "left" => ""];
        // line 24
        yield "
";
        // line 25
        $context["alignment"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", true, true, true, 25) &&  !(null === (($_v0 = ($context["alignment_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = ($context["alignment"] ?? null)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", false, false, true, 25))))) ? ((($_v2 = ($context["alignment_classes"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[(($_v3 = ($context["alignment"] ?? null)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", false, false, true, 25))) : (""));
        // line 26
        $context["dropdown_direction"] = (((array_key_exists("dropdown_direction", $context) &&  !(null === $context["dropdown_direction"]))) ? ($context["dropdown_direction"]) : ("dropend"));
        // line 27
        $context["style"] = (((($tmp = ($context["style"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("nav-" . ($context["style"] ?? null))) : (""));
        // line 28
        $context["fill"] = (((($tmp = ($context["fill"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("nav-" . ($context["fill"] ?? null))) : (""));
        // line 29
        yield "
";
        // line 31
        $context["nav_classes"] = Twig\Extension\CoreExtension::merge(["nav",         // line 33
($context["style"] ?? null),         // line 34
($context["alignment"] ?? null),         // line 35
($context["fill"] ?? null)], ((        // line 36
($context["nav_utility_classes"] ?? null)) ? ($context["nav_utility_classes"]) : ([])));
        // line 38
        $context["heading_classes"] = ((($context["heading_utility_classes"] ?? null)) ? ($context["heading_utility_classes"]) : ([]));
        // line 39
        $context["heading_level"] = (((($tmp = ($context["heading_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["heading_level"] ?? null)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", true, true, true, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39)) : ("h2"))));
        // line 40
        yield "
";
        // line 41
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            if ((($tmp = ($context["heading"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_level"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [($context["heading_classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
                yield ">
      ";
                // line 44
                yield from $this->unwrap()->yieldBlock('nav_heading', $context, $blocks);
                // line 47
                yield "      </";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_level"] ?? null), "html", null, true);
                yield ">";
            }
            // line 49
            yield "<ul ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 49), "html", null, true);
            yield ">
    ";
            // line 50
            yield from $this->unwrap()->yieldBlock('nav_items', $context, $blocks);
            // line 86
            yield "  </ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "nav_utility_classes", "heading_utility_classes", "heading", "items", "heading_attributes", "attributes", "nav_item_utility_classes", "nav_link_utility_classes"]);        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_heading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 45), "html", null, true);
        yield "
      ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            yield "        ";
            // line 53
            $context["nav_item_classes"] = Twig\Extension\CoreExtension::merge(["nav-item", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["item"], "in_active_trail", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["item"], "is_expanded", [], "any", false, false, true, 56) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56))) ? ("dropdown") : (""))], ((            // line 57
($context["nav_item_utility_classes"] ?? null)) ? ($context["nav_item_utility_classes"]) : ([])));
            // line 59
            yield "        ";
            // line 60
            $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(["nav-link", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["item"], "in_active_trail", [], "any", false, false, true, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""))], ((            // line 63
($context["nav_link_utility_classes"] ?? null)) ? ($context["nav_link_utility_classes"]) : ([])));
            // line 65
            yield "        ";
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65), "options", [], "any", false, false, true, 65), "attributes", [], "any", false, false, true, 65), "class", [], "any", false, false, true, 65))) {
                // line 66
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66), "options", [], "any", false, false, true, 66), "attributes", [], "any", false, false, true, 66), "class", [], "any", false, false, true, 66));
                // line 67
                yield "        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), "options", [], "any", false, false, true, 67), "attributes", [], "any", false, false, true, 67), "class", [], "any", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), "options", [], "any", false, false, true, 68), "attributes", [], "any", false, false, true, 68), "class", [], "any", false, false, true, 68)]);
                // line 69
                yield "        ";
            }
            // line 70
            yield "        <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", [($context["nav_item_classes"] ?? null)], "method", false, false, true, 70), "html", null, true);
            yield ">
          ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 71) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71))) {
                // line 72
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 72), ["class" => Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), ["dropdown-toggle"]), "data-bs-toggle" => "dropdown", "data-bs-auto-close" => "outside", "aria-expanded" => "false"]), "html", null, true);
                yield "
            ";
                // line 74
                yield from $this->load("radix:dropdown-menu", 74)->unwrap()->yield(CoreExtension::merge($context, ["items" => CoreExtension::getAttribute($this->env, $this->source,                 // line 75
$context["item"], "below", [], "any", false, false, true, 75)]));
                // line 78
                yield "          ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 79), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 79), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                yield "
          ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["item"], "link", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 81), "html", null, true);
                yield "
          ";
            }
            // line 83
            yield "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:nav";
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
        return array (  226 => 85,  211 => 83,  205 => 81,  203 => 80,  198 => 79,  195 => 78,  193 => 75,  192 => 74,  187 => 72,  185 => 71,  180 => 70,  177 => 69,  174 => 68,  171 => 67,  168 => 66,  165 => 65,  163 => 63,  162 => 62,  161 => 60,  159 => 59,  157 => 57,  156 => 56,  155 => 55,  154 => 53,  152 => 52,  134 => 51,  127 => 50,  119 => 45,  112 => 44,  104 => 86,  102 => 50,  97 => 49,  92 => 47,  90 => 44,  84 => 43,  82 => 42,  80 => 41,  77 => 40,  75 => 39,  73 => 38,  71 => 36,  70 => 35,  69 => 34,  68 => 33,  67 => 31,  64 => 29,  62 => 28,  60 => 27,  58 => 26,  56 => 25,  53 => 24,  51 => 17,  49 => 15,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:nav", "C:\\wamp64\\www\\apigee_proj3\\web/themes/contrib/radix\\components\\nav\\nav.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 15, "set" => 17, "if" => 41, "block" => 44, "for" => 51, "include" => 74];
        static $filters = ["merge" => 36, "escape" => 43];
        static $functions = ["link" => 72];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "set", 2 => "if", 3 => "block", 4 => "for", 5 => "include"],
                [0 => "merge", 1 => "escape"],
                [0 => "link"],
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
