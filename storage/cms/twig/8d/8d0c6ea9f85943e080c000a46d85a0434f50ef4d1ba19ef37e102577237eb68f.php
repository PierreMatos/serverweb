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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/header.htm */
class __TwigTemplate_99d309d0ebd1cb7d684e7ad400fe67e2fa051353939145806609b182e7b0cc54 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/papi-logo/papi-logo@2x.png");
        echo "\" width=\"261\" height=\"60\" />
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\" >
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link ";
        // line 11
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == "podcast-marketing") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11) == "ecommerce"))) {
            echo "active";
        }
        echo " dropdown-toggle\"
                   href=\"#\" id=\"navbarDropdown\"
                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    services
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "podcast-marketing")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("podcast-marketing");
        echo "\">Podcast Marketing</a>
                    <a class=\"dropdown-item ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "ecommerce")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ecommerce");
        echo "\">ecommerce marketing</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "donnie-brasco-case-study")) {
            echo "active";
        }
        echo "\"
                   href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("donnie-brasco-case-study");
        echo "\">
                    case studies
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 28), "id", [], "any", false, false, true, 28) == "blog")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">weekly hacks</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31) == "podcast")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("podcast");
        echo "\">podcast</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "#about-us\">about</a>
            </li>
            <li class=\"nav-item\">
                <div class=\"nav-link phone\">
                    <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phone-icon/phone-icon@2x.png");
        echo "\" width=\"14\" height=\"24\" />
                    (818) 850-0397
                </div>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  121 => 34,  111 => 31,  101 => 28,  93 => 23,  87 => 22,  76 => 18,  68 => 17,  57 => 11,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("page" => 2, "theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
