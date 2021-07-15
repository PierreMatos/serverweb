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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/home.htm */
class __TwigTemplate_1edfe0dd413bdeeb86fbeab45abff60fe7ead526eb1b1e11780f5e3415f2277e extends \Twig\Template
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
        echo "<section class=\"hero d-none d-md-block\">
    <video playsinline autoplay muted loop poster=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/hero-mobile.jpg");
        echo "\" id=\"hero-video\">
        <source src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/videos/papi-digital-hero-video.mp4");
        echo "\" type=\"video/mp4\">
    </video>
</section>

<section class=\"hero-mobile d-md-none pt-5 pb-5 pl-3 pr-3\">
    <h1 class=\"hero-mobile-header\">Digital Marketing That Returns Revenue</h1>
    <a class=\"typeform-share button start-cta btn\"
       href=\"https://papidigital.typeform.com/to/g4JnyD\"
       data-mode=\"popup\"
       data-submit-close-delay=\"2\" target=\"_blank\">start growth hacking</a>
    <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id=\"typef_orm_share\", b=\"https://embed.typeform.com/\"; if(!gi.call(d,id)){ js=ce.call(d,\"script\"); js.id=id; js.src=b+\"embed.js\"; q=gt.call(d,\"script\")[0]; q.parentNode.insertBefore(js,q) } })() </script>
</section>

<section id=\"about-us\" class=\"about-us container-fluid\">
    <div class=\"row\">
        <div class=\"about-img col-md-6 d-none d-md-block my-auto pt-5 pb-5\">
            <img class=\"img-fluid\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/papi-at-desk/papi-at-desk@2x.png");
        echo "\" width=\"609\" height=\"580\" />
        </div>
        <div class=\"about-content col-md-6 my-auto pt-5 pb-5\">
            <h2 class=\"header2\">Digital Marketing</h2>
            <p class=\"hook\">
                What is Papi Digital?
            </p>
            <p class=\"hooked-p\">We find and implement fast/cost-effective ways to revenue. Our goal for each company we work with is to generate a positive return on investment as quickly as we can with as little investment as possible.</p>
            <p class=\"hooked-p\">As Growth Hackers our ways to revenue are not conventional, thus our company is not for the weak-hearted. If you are open to new methods and testing to determine the best return on investment strategies, then you are on the right website.</p>
            <a class=\"typeform-share button btn-outline\"
               href=\"https://papidigital.typeform.com/to/g4JnyD\"
               data-mode=\"popup\"
               data-submit-close-delay=\"2\" target=\"_blank\">start my strategy</a>
            <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id=\"typef_orm_share\", b=\"https://embed.typeform.com/\"; if(!gi.call(d,id)){ js=ce.call(d,\"script\"); js.id=id; js.src=b+\"embed.js\"; q=gt.call(d,\"script\")[0]; q.parentNode.insertBefore(js,q) } })() </script>
        </div>
    </div>
</section>

<section id=\"our-process\" class=\"our-process container-fluid\">
    <div class=\"row\">
        <div class=\"left col-md-6 my-auto pt-5 pb-5\">
            <h2 class=\"header2\">our process</h2>
            <p class=\"hook\">Increasing Growth for your brand.</p>
            <p class=\"hooked-p\">At Papi Digital, we are a collective of artists, designers, and media buyers. Our creative and professional team came together in 2017, with the belief that collaboration breeds excellence. We take our work seriously, but also know how to have fun with a project.</p>
        </div>
        <div class=\"right col-md-6\">
            <div class=\"process-item row\">
                <div class=\"process-icon col-md-4\">
                    <img class=\"img-fluid\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/strategy-icon/strategy-icon@2x.png");
        echo "\" width=\"100\" height=\"100\" />
                </div>
                <div class=\"process-desc col-md-8\">
                    <p class=\"process-item-title\">strategy</p>
                    <p class=\"process-item-desc\">Our first step with any customer is a strategy and discovery of the needs. As Growth Hackers, we need to help identify the needs of the business together.</p>
                    <a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("strategy");
        echo "\" class=\"process-item-btn button btn\">more</a>
                </div>
            </div>
            <div class=\"process-item row\">
                <div class=\"process-icon col-md-4\">
                    <img class=\"img-fluid\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/production-icon/production-icon@2x.png");
        echo "\" width=\"100\" height=\"100\" />
                </div>
                <div class=\"process-desc col-md-8\">
                    <p class=\"process-item-title\">production</p>
                    <p class=\"process-item-desc\">During this phase, we implement the necessary items that our strategy phase dictates. At times, this can be branding items like logos all the way to marketing videos.</p>
                    <a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("production");
        echo "\" class=\"process-item-btn button btn\">more</a>
                </div>
            </div>
            <div class=\"process-item last row\">
                <div class=\"process-icon col-md-4\">
                    <img class=\"img-fluid\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/distribution-icon/distribution-icon@2x.png");
        echo "\" width=\"100\" height=\"100\" />
                </div>
                <div class=\"process-desc col-md-8\">
                    <p class=\"process-item-title\">distribution</p>
                    <p class=\"process-item-desc\">We take the assets we created in our production phase and begin to distribute them. This is our customers’ favorite phase, because it's what generates the return on investment.</p>
                    <a href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("distribution");
        echo "\" class=\"process-item-btn button btn\">more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"growth container-fluid d-none d-md-block\">
    <div class=\"row\">
        <div class=\"growth-video-container col-12\">
            <video playsinline muted loop poster=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/videos/growth-hacking-video-placeholder.png");
        echo "\" id=\"growth-hacking-video\">
                <source src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/videos/growth-hacking-video.mp4");
        echo "\" type=\"video/mp4\">
            </video>
            <a class=\"play-btn\" id=\"play-btn\">
                <img class=\"img-fluid\" src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/play-button-icon/play-button-icon@2x.png");
        echo "\" width=\"80\" height=\"80\" />
            </a>
        </div>
    </div>
</section>

<section class=\"case-study-preview-container container-fluid p-4 pt-5 pb-5\">
    <div class=\"row h-100\">
        <div class=\"col-sm-12 col-md-10 mx-auto my-auto\">
            <div class=\"case-study-preview-intro row\">
                <div class=\"col-12\">
                    <h2 class=\"header2\">case studies</h2>
                    <p class=\"hook\">We Don't Like to Brag But We Net Results When You Listen to Us</p>
                </div>
            </div>
            <div class=\"case-study-preview-items-container row\">
                <div class=\"left col-md-6 pr-4\">
                    <div class=\"case-study-preview-item row\">
                        <div class=\"case-study-preview-img-cont col-12 col-sm-6 my-auto\">
                            <img class=\"case-study-preview-img rounded\" src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study-preview/tucker-gunleather-logo.jpg");
        echo "\" />
                        </div>
                        <div class=\"case-study-preview-desc col-12 col-sm-6 my-auto\">
                            <p class=\"case-study-preview-title\">Tucker Gunleather</p>
                            <p>A custom holster maker in Texas. All products are handcrafted and designed to your specific firearm.</p>
                        </div>
                    </div>
                    <div class=\"case-study-preview-item row\">
                        <div class=\"case-study-preview-img-cont col-12 col-sm-6 my-auto\">
                            <img class=\"case-study-preview-img rounded\" src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study-preview/Lesliegoldpodcast.jpg");
        echo "\" />
                        </div>
                        <div class=\"case-study-preview-desc col-12 col-sm-6 my-auto\">
                            <p class=\"case-study-preview-title\">A Life's Story Podcast</p>
                            <p>A Life’s Story is the acclaimed public podcast featuring the incredible stories of extraordinary seniors with host Leslie Gold \"The Radiochick\".</p>
                        </div>
                    </div>
                </div>
                <div class=\"right col-md-6\">
                    <div class=\"case-study-preview-item row\">
                        <div class=\"case-study-preview-img-cont col-12 col-sm-6 my-auto\">
                            <img class=\"case-study-preview-img rounded\" src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study-preview/Headspace-logo.jpg");
        echo "\" />
                        </div>
                        <div class=\"case-study-preview-desc col-12 col-sm-6 my-auto\">
                            <p class=\"case-study-preview-title\">Radio Headspace</p>
                            <p>Headspace co-founder Andy Puddicombe talks internal chatter and consider how we can live a life that best reflects our limitless potential.</p>
                        </div>
                    </div>
                    <div class=\"case-study-preview-item row\">
                        <div class=\"case-study-preview-img-cont col-12 col-sm-6 my-auto\">
                            <a href=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("donnie-brasco-case-study");
        echo "\">
                                <img class=\"case-study-preview-img rounded\" src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study-preview/deep-cover-case-study.jpg");
        echo "\" />
                            </a>
                        </div>
                        <div class=\"case-study-preview-desc col-12 col-sm-6 my-auto\">
                            <p class=\"case-study-preview-title\">Deep Cover Podcast</p>
                            <p>The true-crime podcast series hosted by Actor Leo Rossi and retired FBI Agent Joe Pistone best known for his deep cover work as AKA Donnie Brasco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 135,  219 => 134,  207 => 125,  193 => 114,  181 => 105,  159 => 86,  153 => 83,  149 => 82,  136 => 72,  128 => 67,  120 => 62,  112 => 57,  104 => 52,  96 => 47,  65 => 19,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 2, "page" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
