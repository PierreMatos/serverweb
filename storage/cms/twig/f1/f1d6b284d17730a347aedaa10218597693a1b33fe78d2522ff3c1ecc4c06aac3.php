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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast.htm */
class __TwigTemplate_325704c49364f2908410d070ff50d244b89a9b2bd6693fd12ad974b33152b137 extends \Twig\Template
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
        $tags = array("component" => 29);
        $filters = array("theme" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"podcast-header container-fluid p-5\">
    <div class=\"row h-100\">
        <div class=\"col-lg-8 col-12 mx-auto my-auto\">
            <div class=\"podcast-header-hero row mb-4\">
                <div class=\"podcast-cover col-md-6 mx-auto\">
                    <img class=\"img-fluid\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/podcast/podcast-cover-art.jpg");
        echo "\" width=\"500\" height=\"500\">
                </div>
                <div class=\"podcast-ctas col-md-6 mx-auto my-auto text-center\">
                    <div>
                        <a href=\"https://link.chtbl.com/nlNCUSBD\" class=\"btn\">
                            listen to our podcast
                        </a>
                        <p>or</p>
                        <a href=\"https://www.youtube.com/channel/UCxzr0lY3n-skr_m0NRgVoMw\" class=\"btn\">
                            watch it here
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"podcast-header-copy row\">
                <div class=\"col-12\">
                    <p>Welcome to Growth Hack by Papi Digital. Where we break down marketing channels like Facebook, Google, Instagram, YouTube and show you why they aren’t working. These won't be boring explanations. They are real stories of where campaigns have either failed or succeeded and we explain to you why. We breakdown each channel and show you where the holes and flaws are. Don’t worry if you are running active campaigns or are working with an agency this is for you too.</p>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("podcastEpisodes"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast.htm", "");
    }
}
