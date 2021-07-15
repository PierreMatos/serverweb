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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPosts/default.htm */
class __TwigTemplate_aef12835898bde55e2501e768868486544f734fc9740217e215603ad4b3cad66 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"row container-xl post-list-container\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <article class=\"col-md-6 post-list-article\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 6), "count", [], "any", false, false, true, 6)) {
                // line 7
                echo "        <div class=\"post-list-article-featured-image\" id=\"post-list-featured-images-top\">
            ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 8), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 9
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\">
                <img class=\"img-fluid\" data-src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 10) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 10)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 10))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 10) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 10)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 10))), "html", null, true);
                    echo "\">
            </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        </div>
        ";
            }
            // line 15
            echo "        <h2 class=\"post-list-article-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</a></h2>
        <p class=\"post-list-article-date\">
            ";
            // line 17
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 17), 17, $this->source), "F jS, Y")]);
            echo "

            <span class=\\\"date-separator\\\">|</span>
            ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 20), "count", [], "any", false, false, true, 20)) {
                // line 21
                echo "            ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 21), 21, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 21), 21, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 21), 21, $this->source)) . "</a>"); }), "<span class=\"separator\">, </span>");
                // line 22
                echo "
            ";
                // line 23
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["categoryLinks"] ?? null), 23, $this->source)]);
                echo "

            ";
            } else {
                // line 26
                echo "            Uncategorized
            ";
            }
            // line 28
            echo "        </p>
        <p class=\"post-list-article-excerpt\">";
            // line 29
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 29), 29, $this->source);
            echo "</p>
        <a class=\"post-list-article-btn btn-outline\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">Read this post</a>
    </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "    <div class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>

";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 37) > 1)) {
            // line 38
            echo "<ul class=\"pagination\">
    ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 39) > 1)) {
                // line 40
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 40), "baseFileName", [], "any", false, false, true, 40), 40, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 40) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 40) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 43)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 44) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 45
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 45), "baseFileName", [], "any", false, false, true, 45), 45, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 45) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 45, $this->source), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 49) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 49))) {
                // line 50
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "baseFileName", [], "any", false, false, true, 50), 50, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 50) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 50) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 52
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPosts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 52,  187 => 50,  185 => 49,  182 => 48,  171 => 45,  166 => 44,  162 => 43,  159 => 42,  153 => 40,  151 => 39,  148 => 38,  146 => 37,  142 => 35,  133 => 33,  125 => 30,  121 => 29,  118 => 28,  114 => 26,  108 => 23,  105 => 22,  102 => 21,  100 => 20,  94 => 17,  86 => 15,  82 => 13,  67 => 10,  62 => 9,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/blogPosts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 6);
        static $filters = array("slice" => 8, "escape" => 9, "trans" => 17, "date" => 17, "join" => 21, "map" => 21, "raw" => 29, "page" => 40);
        static $functions = array("range" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['slice', 'escape', 'trans', 'date', 'join', 'map', 'raw', 'page'],
                ['range']
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
