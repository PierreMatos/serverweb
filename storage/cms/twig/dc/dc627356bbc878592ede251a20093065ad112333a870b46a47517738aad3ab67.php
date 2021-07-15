<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPost/default.htm */
class __TwigTemplate_d5686607a9ea6ee1f056f119a7d8da7d1f9525d54f39e1e2c84a568a613e5f2e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "

<article class=\"post-article\">
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5), "count", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <div class=\"article-featured-image papidigital-hero-banner\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 7), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "        <img class=\"img-fluid\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 8) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 8)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 8))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 8) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 8)) : (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 8))), "html", null, true);
                echo "\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
    ";
        }
        // line 12
        echo "
    <div class=\"article-body align-content-center\">
        <div class=\"container-xl\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"article-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</h1>

                    <p class=\"article-info\">
                        ";
        // line 20
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 20), 20, $this->source), "F jS, Y")]);
        echo "

                        <span class=\\\"date-separator\\\">|</span>
                        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 23), "count", [], "any", false, false, true, 23)) {
            // line 24
            echo "                        ";
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 24), 24, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 24), 24, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source)) . "</a>"); }), "<span class=\"separator\">, </span>");
            // line 25
            echo "
                        ";
            // line 26
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["categoryLinks"] ?? null), 26, $this->source)]);
            echo "

                        ";
        } else {
            // line 29
            echo "                        Uncategorized
                        ";
        }
        // line 31
        echo "                    </p>
                    <div class=\"article-content\">";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 32), 32, $this->source);
        echo "</div>
                </div>
            </div>
        </div>
    </div>

</article>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  111 => 31,  107 => 29,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  87 => 20,  81 => 17,  74 => 12,  70 => 10,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPost/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5, "for" => 7);
        static $filters = array("slice" => 7, "escape" => 8, "trans" => 20, "date" => 20, "join" => 24, "map" => 24, "raw" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['slice', 'escape', 'trans', 'date', 'join', 'map', 'raw'],
                []
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
