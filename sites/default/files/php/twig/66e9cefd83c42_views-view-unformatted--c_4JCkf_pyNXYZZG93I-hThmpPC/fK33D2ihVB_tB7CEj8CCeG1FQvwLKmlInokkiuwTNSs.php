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

/* themes/custom/conferencelisting/templates/views-view-unformatted--conference-carousel.html.twig */
class __TwigTemplate_e5e985bd23a4163aaee6c9c5bdbb47ee extends Template
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
        yield "<div class=\"my-custom-view slick-slider\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            yield "      <div class=\"conference-card\">
                <div class=\"conference-image\">
                    ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 5), "field_conf_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5)) {
                // line 6
                yield "                      <img src=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 6), "field_conf_image", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "uri", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source)), "html", null, true);
                yield ">
                    ";
            } else {
                // line 8
                yield "                        <div class=\"image-placeholder\">
                            <p>";
                // line 9
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 9)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 9), "field_title", [], "any", false, false, true, 9)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                yield "</p>
                        </div>
                    ";
            }
            // line 12
            yield "
                    ";
            // line 13
            $context["price_value"] = CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 13), "field_price", [], "any", false, false, true, 13)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "value", [], "any", false, false, true, 13);
            // line 14
            yield "                    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["price_value"] ?? null))) {
                // line 15
                yield "                        <div class=\"conference-price-overlay\">
                            ";
                // line 16
                if ((($context["price_value"] ?? null) == "0")) {
                    // line 17
                    yield "                                <span class=\"conference-price\">FREE</span>
                            ";
                } else {
                    // line 19
                    yield "                                <span class=\"conference-price\">₹ ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["price_value"] ?? null), 19, $this->source), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 21
                yield "                        </div>
                    ";
            }
            // line 23
            yield "                </div>
                <div class=\"conference-details\">
                    <h4>";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 25), "field_title", [], "any", false, false, true, 25)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "</h4>
                    <p>
                    <img src=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 27, $this->source)), "html", null, true);
            yield "/svg/tag.svg\" alt=\"Icon\" class=\"icon-inline\"/>
                    ";
            // line 28
            if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 28), "field_conference_type", [], "any", false, false, true, 28)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null))) {
                // line 29
                yield "                    ";
                $context["conference_types"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 29), "field_conference_type", [], "any", false, false, true, 29);
                // line 30
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["conference_types"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 31
                    yield "                        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "value", [], "any", false, false, true, 31), 31, $this->source)), "html", null, true);
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 31)) {
                        yield ", ";
                    }
                    // line 32
                    yield "                    ";
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
                unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                    ";
            }
            // line 34
            yield "                    </p>
                    <p>
                    <img src=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source)), "html", null, true);
            yield "/svg/calendar.svg\" alt=\"Icon\" class=\"icon-inline\"/>
                    ";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 37), "field_conference_date", [], "any", false, false, true, 37)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "value", [], "any", false, false, true, 37), 37, $this->source), "d-M-Y"), "html", null, true);
            yield "
                    </p>
                    <p>
                    <img src=\"";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 40, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 40, $this->source)), "html", null, true);
            yield "/svg/location.svg\" alt=\"Icon\" class=\"icon-inline\"/>
                    ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 41), "field_location", [], "any", false, false, true, 41)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            yield "
                    </p>
                </div>
                <div class=\"conference-overlay\">
                    <div class=\"overlay-content\">
                        <div class=\"overlay-icon\">
                            <a href=\"#\" aria-label=\"Like\">
                            <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 32 32\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><g id=\"icomoon-ignore\"></g>
                                <path d=\"M21.886 5.115c3.521 0 6.376 2.855 6.376 6.376 0 1.809-0.754 3.439-1.964 4.6l-10.297 10.349-10.484-10.536c-1.1-1.146-1.778-2.699-1.778-4.413 0-3.522 2.855-6.376 6.376-6.376 2.652 0 4.925 1.62 5.886 3.924 0.961-2.304 3.234-3.924 5.886-3.924zM21.886 4.049c-2.345 0-4.499 1.089-5.886 2.884-1.386-1.795-3.54-2.884-5.886-2.884-4.104 0-7.442 3.339-7.442 7.442 0 1.928 0.737 3.758 2.075 5.152l11.253 11.309 11.053-11.108c1.46-1.402 2.275-3.308 2.275-5.352 0-4.104-3.339-7.442-7.442-7.442v0z\" fill=\"#000000\">
                                 </path>
                             </svg>
                            </a>
                        </div>
                        <div class=\"overlay-icon\">
                            <a href=\"#\" aria-label=\"Download\">
                          <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M12 9.5V15.5M12 15.5L10 13.5M12 15.5L14 13.5M8.4 19C5.41766 19 3 16.6044 3 13.6493C3 11.2001 4.8 8.9375 7.5 8.5C8.34694 6.48637 10.3514 5 12.6893 5C15.684 5 18.1317 7.32251 18.3 10.25C19.8893 10.9449 21 12.6503 21 14.4969C21 16.9839 18.9853 19 16.5 19L8.4 19Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                            </svg>
                            </a>
                        </div>
                         <div class=\"overlay-icon\">
                           <a href=\"#\" aria-label=\"Share\">
                            <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0_15_72)\"><circle cx=\"7\" cy=\"12\" r=\"2\" stroke=\"#000000\" stroke-linejoin=\"round\"/><circle cx=\"17\" cy=\"6\" r=\"2\" stroke=\"#000000\" stroke-linejoin=\"round\"/><path d=\"M15 7L8.5 11\" stroke=\"#000000\"/><circle cx=\"17\" cy=\"18\" r=\"2\" stroke=\"#000000\" stroke-linejoin=\"round\"/>
                                <path d=\"M8.5 13.5L15 17\" stroke=\"#000000\"/></g><defs><clipPath id=\"clip0_15_72\"><rect width=\"24\" height=\"24\" fill=\"white\"/></clipPath></defs>
                            </svg>
                            </a>
                        </div>
                        <div class=\"overlay-icon\">
                            <a href=\"#\">View Details</a>
                        </div>
                    </div>
                    </div>
            </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "base_path", "directory", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/conferencelisting/templates/views-view-unformatted--conference-carousel.html.twig";
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
        return array (  216 => 75,  176 => 41,  172 => 40,  166 => 37,  162 => 36,  158 => 34,  155 => 33,  141 => 32,  135 => 31,  117 => 30,  114 => 29,  112 => 28,  108 => 27,  103 => 25,  99 => 23,  95 => 21,  89 => 19,  85 => 17,  83 => 16,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  66 => 9,  63 => 8,  57 => 6,  55 => 5,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/conferencelisting/templates/views-view-unformatted--conference-carousel.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/conferencelisting/themes/custom/conferencelisting/templates/views-view-unformatted--conference-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "if" => 5, "set" => 13);
        static $filters = array("escape" => 6, "capitalize" => 31, "date" => 37);
        static $functions = array("file_url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'capitalize', 'date'],
                ['file_url'],
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
