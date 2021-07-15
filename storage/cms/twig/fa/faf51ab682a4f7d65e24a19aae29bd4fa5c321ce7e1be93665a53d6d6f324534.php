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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/distribution.htm */
class __TwigTemplate_59b439e0fe01c5b932c6b15becbbe256652cf7fdda5f168495a3487dc49b64c9 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-paid-social-media.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Paid Social Media</h2>
            <p class=\"service-info-item-desc\">Finding consumers on social media platforms is increasingly getting harder and harder. Learn more about how we built a system to weed out lookers and find buyers.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-organic-social-media.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Organic Social Media</h2>
            <p class=\"service-info-item-desc\">Consumers are becoming immune to content posted by businesses, this requires creative and engaging content to be consistently generated for users.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-search-engine-optimization.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Search Engine Optimization</h2>
            <p class=\"service-info-item-desc\">Ranking a website on the front page of Google has become complicated and a long process. Discover what we do to counterbalance this in your favor.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-blogging.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Blogging</h2>
            <p class=\"service-info-item-desc\">Creating content that provides information and insight for consumers to help them with the decision making process.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-google-words.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Google AdWords</h2>
            <p class=\"service-info-item-desc\">AdWords has become expensive, our approach goes after visitors who are your most interested consumers to reduce cost per acquisition.</p>
        </div>
        <div class=\"service-info-item col-md-4\">
            <img class=\"service-info-item-img img-fluid\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/distribution/distribution-email-marketing.svg");
        echo "\">
            <h2 class=\"service-info-item-title header2\">Email Marketing</h2>
            <p class=\"service-info-item-desc\">Sell products, send the right message, keep your customers coming back for more. We’ll design your entire email marketing strategy from first touch to product sold.</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/distribution.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  81 => 26,  73 => 21,  65 => 16,  57 => 11,  49 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/distribution.htm", "");
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
