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

/* themes/custom/conferencelisting/templates/node--conference.html.twig */
class __TwigTemplate_38306bbb0ae02dddd2710c69566c9b44 extends Template
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
        yield "<div class=\"conference-card\">
    <div class=\"conference-image\">
        ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_conf_image", [], "any", false, false, true, 3)) {
            // line 4
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_conf_image", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            yield "
        ";
        } else {
            // line 6
            yield "            <div class=\"image-placeholder\">
                <p>";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 10
        yield "    </div>
    <div class=\"conference-details\">
        <h3>";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        yield "</h3>
        <p>";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        yield "</p>
        <p>";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        yield "</p>
        ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 15) == "0")) {
            // line 16
            yield "            <span class=\"conference-price\">FREE</span>
        ";
        } else {
            // line 18
            yield "            <span class=\"conference-price\">₹ ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "</span>
        ";
        }
        // line 20
        yield "    </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/conferencelisting/templates/node--conference.html.twig";
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
        return array (  93 => 20,  87 => 18,  83 => 16,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 10,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/conferencelisting/templates/node--conference.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/conferencelisting/themes/custom/conferencelisting/templates/node--conference.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
