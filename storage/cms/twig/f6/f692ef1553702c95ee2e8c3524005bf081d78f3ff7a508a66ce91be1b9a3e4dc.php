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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/production.htm */
class __TwigTemplate_07f515e0ace4090bc4ec0f3d1392d11e26484f0ab974e8d391ffe637fcfb2a6d extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services-title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<section class=\"service-breakdown container-xl p-5 text-left\">
    <div class=\"row h-100\">
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/production/production-brand.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Brand</h2>
            <p class=\"service-info-item-desc\">Building the branding assets we will need to market online; things like logo, social media profiles, ads, graphics and video.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/production/production-website.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Website</h2>
            <p class=\"service-info-item-desc\">We apply our learning from brand and message development to build a website that converts visitors into buyers.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/production/production-ads.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Ads</h2>
            <p class=\"service-info-item-desc\">We apply our learning from brand and message development to build ads that converts users into buyers.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/production/production-content-social-media.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Content for Social Media</h2>
            <p class=\"service-info-item-desc\">Along with developing ads we develop an organic campaign of content to stay in touch with consumers along the consumer journey.</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/production.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  65 => 16,  57 => 11,  49 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/production.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
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
