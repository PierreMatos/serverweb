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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/donnie-brasco-case-study.htm */
class __TwigTemplate_4833613cf79326f0033792ffe31f1003e10db86a6fa4c40c1460f5ccac92c4b7 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<!-- As of now let's keep it simple because we don't have a lot of case studies. Make the Donnie clickable
and case study to the menu and link it to Donnie -->
<article class=\"case-study\">
    <div class=\"case-study-banner-container papidigital-hero-banner\">
        <img class=\"img-fluid\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/donnie-brasco-banner.webp");
        echo "\" alt=\"\" title=\"\">
    </div>
    <div class=\"container-xl p-md-5 text-left\">
        <div class=\"case-study-meta\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <p class=\"case-study-label\">Case Study</p>
                    <h1 class=\"case-study-title\">True-Crime Series “Deep Cover” Experiences Record-Breaking Podcast Marketing Results</h1>
                    <p class=\"case-study-author-date\">Julian Espinosa / December 2020</p>
                </div>
            </div>
        </div>

        <div class=\"case-study-body\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"case-study-main-content\">
                        <section class=\"case-study-overview\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <h2>Overview</h2>
                                    <p>“Deep Cover: The Real Donnie Brasco” is a true-crime podcast produced by Jam Street Media. Joe Pistone – retired undercover FBI agent who infiltrated the NY Mafia in the late 1970s – shares front-line stories of his time with the mob. Actor and host, Leo Rossi joins him, asking hard-hitting questions aboutPistone’s deep cover work as Donnie Brasco.</p>
                                    <p>Our job was to test the market viability for the podcast, and the results were phenomenal. We discovered a niche audience, and the campaign we ran broke paid ad records for podcasting. Throughtrial and error, we created a successful model for podcast marketing.</p>
                                    <p>Here are the steps we took and what we discovered.</p>
                                </div>
                            </div>
                        </section>

                        <section class=\"case-study-research\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"case-study-research-explain\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <h2>STEP 1: MARKET RESEARCH</h2>
                                                <p>We used Facebook’s Audience Insights to search for people interested in content related to law enforcement or the mafia. We created filters for mob-related movies, basing our selection specifically on 90s mafia movies.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"case-study-research-audience case-study-emphasis-box\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <h3 class=\"case-study-emphasis-box-title case-study-emphasize-text\">Audience</h3>
                                            </div>
                                        </div>
                                        <div class=\"case-study-research-audience-info\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-4\">
                                                    <p><span class=\"case-study-bold-text\">Likes:</span> Donnie Brasco (film), Goodfellas, Blow (film) or Casino (film)</p>
                                                </div>
                                                <div class=\"col-lg-4\">
                                                    <p>
                                                        <span class=\"case-study-bold-text\">And Must Also Match:</span>
                                                        <span class=\"case-study-bold-text\">Interests:</span> Podcast
                                                    </p>
                                                </div>
                                                <div class=\"col-lg-4\">
                                                    <p>
                                                        <span class=\"case-study-bold-text\">Detailed Targeting Expansion:</span> Off
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class=\"case-study-assets\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"case-study-assets-explain\">
                                                <h2>STEP 2: CHOOSING THE ASSETS</h2>
                                                <p>Choosing the right assets in this campaign was tricky. Recently, Facebook has denied a lot of “sensational” content. Our IP had drugs, gambling, and murders, so we had to be careful. We identified the most provocative clips we could find that Facebook would approve.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"case-study-assets-examples case-study-emphasis-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <h3 class=\"case-study-emphasis-box-title case-study-emphasize-text\">Clips We Used</h3>
                                                    </div>
                                                </div>
                                                <div class=\"case-study-assets-clips\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"case-study-assets-clip\">
                                                                <a href=\"https://www.facebook.com/102950148158353/posts/130342495419118\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/donnie-case-study-clip-1@2x.jpg");
        echo "\" alt=\"\" title=\"\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"case-study-assets-clip\">
                                                                <a href=\"https://www.facebook.com/102950148158353/posts/140288531091181\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/donnie-case-study-clip-2@2x.jpg");
        echo "\" alt=\"\" title=\"\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class=\"case-study-testing-ad-sets\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"case-study-testing-ad-sets-header\">
                                                <h2>STEP 3: TESTING AND REFINING AD SETS</h2>
                                                <p>We used a 3 stage testing system.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"case-study-testing-ad-sets-stages case-study-emphasis-box\">
                                                <div class=\"case-study-testing-ad-sets-stage-item\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-2\">
                                                            <img class=\"img-fluid\" src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/first-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">First Stage:</span>
                                                                We tested our audience, “Mob Movies,” using one asset: “Donnie the Jewel Thief,” a 53-second clip
                                                                where Joe explains how he infiltrated the mafia. In this test, we netted a \$0.02 cost per click, which was
                                                                almost unbelievable. We’d identified the perfect audience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"case-study-testing-ad-sets-stage-item\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-2\">
                                                            <img class=\"img-fluid\" src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/second-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">Second Stage:</span>
                                                                We tested additional assets to see if we could replicate the performance of the first. Fortunately, all five
                                                                of our assets performed well. Our best hung around \$0.03 per click, while the worst rose to \$0.09 per
                                                                click (still good).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"case-study-testing-ad-sets-stage-item\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-2\">
                                                            <img class=\"img-fluid\" src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/third-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">Third Stage:</span>
                                                                It was time to allocate a larger budget to see how our top-performing assets would scale. “Donnie the
                                                                Jewel Thief” and “Mafia Guy’s Wife or Daughter” never exceeded \$0.08.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class=\"case-study-kpis\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <h2>STEP 4: MEASURING KPIs</h2>
                                    <p>Our primary metric was cost per listen.</p>
                                </div>
                            </div>
                        </section>

                        <section class=\"case-study-final-result\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <h2>FINAL RESULTS</h2>
                                    <p class=\"case-study-final-result-summary\">In our 12 years in digital marketing, we haven’t seen results like these – not to mention at this speed.</p>
                                    <ul>
                                        <li>We found a <b>target audience</b> for “Deep Cover” and can create lookalike audiences after maxing it out.</li>
                                        <li>We found <b>several powerful assets</b> that scaled sustainably.</li>
                                        <li>Our <b>cost per listen</b> was only \$0.08.</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        
                        <section class=\"case-study-cta\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <h2>READY TO SCALE YOUR PODCAST MARKETING?</h2>
                                    <p>If you want phenomenal results like these, we’d love to work with you! Papi Digital can help you scale from thousands to hundreds of thousands of podcast listeners.</p>
                                    <p><a href=\"https://papidigital.typeform.com/to/g4JnyD\">Reach out to us</a> today.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <aside class=\"case-study-highlights\">
                        <section class=\"case-study-client\">
                            <h2 class=\"case-study-highlight-title\">Client</h2>
                            <img height=\"192px\" width=\"192px\" src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study-preview/deep-cover-case-study.jpg");
        echo "\" />
                        </section>
                        <section class=\"case-study-topics\">
                            <h2 class=\"case-study-highlight-title\">Topics</h2>
                            <ul>
                                <li>Audience Insights</li>
                                <li>Social Interactions</li>
                            </ul>
                        </section>
                        <section class=\"case-study-results\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <h2 class=\"case-study-highlight-title\">Results</h2>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    <img class=\"img-fluid\" src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/donnie-brasco-results-icon@2x.png");
        echo "\" />
                                </div>
                                <div class=\"case-study-results-cost-per-listen col-lg-7\">
                                    <p><span class=\"case-study-results-cost\">\$0.08</span><br />
                                            Cost per listen
                                    </p>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/donnie-brasco-case-study.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 231,  295 => 214,  238 => 160,  222 => 147,  206 => 134,  173 => 104,  163 => 97,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/donnie-brasco-case-study.htm", "");
    }
}
