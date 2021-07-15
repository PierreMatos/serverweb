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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/strategy.htm */
class __TwigTemplate_ff10e63d910a6045e48fe09a5ff98299039808ac30f5c2a29524fd40ace3a3bc extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/strategy/strategy-discovery.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Discovery</h2>
            <p class=\"service-info-item-desc\">We learn about your business and understand the product's universe. This allows us to plan a holistic approach to marketing and advertising.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/strategy/strategy-brand.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Brand</h2>
            <p class=\"service-info-item-desc\">Understanding why your brand exists and it’s unique position in the market allows us to plan out the assets we will need to build.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/strategy/strategy-message-development.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Message Development</h2>
            <p class=\"service-info-item-desc\">We connect to your target audience by constructing messages of your brand voice that speak directly to them.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/strategy/strategy-distribution-plan.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Distribution Plan</h2>
            <p class=\"service-info-item-desc\">The channels for distribution are considered based on target audience, cost efficiency and best results.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/strategy/strategy-funnels-and-content.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Funnels & Content</h2>
            <p class=\"service-info-item-desc\">By researching and understanding the consumer’s journey through the online purchasing experience, we create the roadmap to build a funnel.</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/strategy.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  73 => 21,  65 => 16,  57 => 11,  49 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/strategy.htm", "");
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
