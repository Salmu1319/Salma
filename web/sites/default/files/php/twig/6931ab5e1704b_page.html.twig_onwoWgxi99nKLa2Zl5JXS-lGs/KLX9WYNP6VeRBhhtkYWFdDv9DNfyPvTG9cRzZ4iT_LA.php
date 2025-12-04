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

/* themes/custom/events_theme/templates/page.html.twig */
class __TwigTemplate_a0576ba816be3c7adf563747ed7cbccb extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<body>
  <header>
    ";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3), "html", null, true);
        yield "
  </header>
  <nav>
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 6), "html", null, true);
        yield "
  </nav>
  
  ";
        // line 10
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <div class=\"hero-region\">
      ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 12), "html", null, true);
            yield "
    </div>
  ";
        } else {
            // line 15
            yield "    <div class=\"hero\">
      <h1>Local Events</h1>
      <p>Find and attend events near you — music, tech, sports & more.</p>
      <a href=\"/events\" class=\"cta\">See Events</a>
    </div>
  ";
        }
        // line 21
        yield "  
  <main>
    <div class=\"container\">
      ";
        // line 25
        yield "      <section class=\"featured-events-section\">
        
        <div class=\"featured-events-grid\">
        ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("views_block:featured_events-block_1"), "html", null, true);
        yield "
        </div>
      </section>
      
      ";
        // line 33
        yield "    </div>
    
    <aside class=\"sidebar-first\">
      ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 36), "html", null, true);
        yield "
    </aside>
  </main>
  
  <footer>
    ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 41), "html", null, true);
        yield "
  </footer>
</body>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/events_theme/templates/page.html.twig";
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
        return array (  110 => 41,  102 => 36,  97 => 33,  90 => 28,  85 => 25,  80 => 21,  72 => 15,  66 => 12,  63 => 11,  60 => 10,  54 => 6,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/events_theme/templates/page.html.twig", "/var/www/html/web/themes/custom/events_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10];
        static $filters = ["escape" => 3];
        static $functions = ["drupal_block" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['drupal_block'],
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
