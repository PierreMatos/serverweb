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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/podcastEpisodes/default.htm */
class __TwigTemplate_e95f1070b479a36f4446c184feafc28e879155d056c7706de25c4f831de89536 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 6, "if" => 8);
        $filters = array("slice" => 10, "escape" => 11, "raw" => 18, "page" => 32);
        $functions = array("range" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['slice', 'escape', 'raw', 'page'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["podcastEpisodes"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<section class=\"podcast-episodes container-fluid p-5 text-center\">

    <div class=\"row h-100\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <div class=\"podcast-episode col-md-4\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 8), "count", [], "any", false, false, true, 8)) {
                // line 9
                echo "            <div class=\"post-list-article-featured-image\" id=\"post-list-featured-images-top\">
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 10), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 11
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "\">
                    <img class=\"podcast-episode-img img-fluid\" data-src=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 12))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 12) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 12)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 12))), "html", null, true);
                    echo "\">
                </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            </div>
            ";
            }
            // line 17
            echo "            <h2 class=\"podcast-episode-title header2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a></h2>
            <p class=\"podcast-episode-desc\">";
            // line 18
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 18), 18, $this->source);
            echo "</p>
            <a class=\"podcast-episode-listen-btn btn-outline\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">listen now</a>
        </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <div class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["podcastEpisodes"] ?? null), "noPostsMessage", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>

</section>

";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 29) > 1)) {
            // line 30
            echo "<ul class=\"pagination\">
    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 31) > 1)) {
                // line 32
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 32), "baseFileName", [], "any", false, false, true, 32), 32, $this->source), [twig_get_attribute($this->env, $this->source, ($context["podcastEpisodes"] ?? null), "pageParam", [], "any", false, false, true, 32) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 32) - 1)]);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 35)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 36) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 37
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "baseFileName", [], "any", false, false, true, 37), 37, $this->source), [twig_get_attribute($this->env, $this->source, ($context["podcastEpisodes"] ?? null), "pageParam", [], "any", false, false, true, 37) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 37, $this->source), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
    ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 41) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 41))) {
                // line 42
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 42), "baseFileName", [], "any", false, false, true, 42), 42, $this->source), [twig_get_attribute($this->env, $this->source, ($context["podcastEpisodes"] ?? null), "pageParam", [], "any", false, false, true, 42) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 42) + 1)]);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 44
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/podcastEpisodes/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 44,  187 => 42,  185 => 41,  182 => 40,  171 => 37,  166 => 36,  162 => 35,  159 => 34,  153 => 32,  151 => 31,  148 => 30,  146 => 29,  140 => 25,  131 => 23,  122 => 19,  118 => 18,  111 => 17,  107 => 15,  92 => 12,  87 => 11,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  70 => 6,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/podcastEpisodes/default.htm", "");
    }
}
