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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast-marketing.htm */
class __TwigTemplate_f1fd3936c882f7698a73bb2160e0a50b63f1a993540c2458bdf787d2687416a3 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/services/podcast-marketing/podcast-marketing-microphone.jpg");
        echo "\" alt=\"\" title=\"\">
    </div>
    <div class=\"container-xl p-md-5 text-left\">
        <div class=\"case-study-meta\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <p class=\"case-study-label\">Case Study</p>
                    <h1 class=\"case-study-title\">Marketing Your Podcast via Paid Social Media Ads</h1>
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
                                    <p>It's not all bad, but the fact remains that podcast marketing is uncharted territory for most. Growth hacks for your podcast can make all the difference between building an audience of fanatical followers or your only listeners. Papi Digital deciphers the most successful designs for growing your podcast. </p>
                                    <p>This uncertainty is due to the lack of tools and methods that make other digital communication methods predictable. What Papi Digital has done is break down how podcasts achieve success and grade the key components of the process. Let's take a look at some of Papis \"clients to better understand how we approach podcast marketing. </p>
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
                                                <p>Once you have identified a few good soundbites, you produce different styles of creative ones. Create assets that can be marketed on Facebook, Instagram and other channels. </p>
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
                                                <p>In this case we made five different versions of an episode. We took the top of the episode and made an advantage of it. We provided headspace for our creatives, but they had brand concerns that led them to ask for several different versions. The problem with advertising a podcast on Facebook is that it is an audio medium. Most people scroll down, and it turns out that sound is not an option for most people. Only 23% of Facebook users scroll down because they like sound (source puts the figure at 15%), so this is the wrong approach and a waste of money. Talking heads and videos are not the way to go.  </p>
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
                                                                <a href=\"#\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/donnie-case-study-clip-1@2x.jpg");
        echo "\" alt=\"\" title=\"\">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"case-study-assets-clip\">
                                                                <a href=\"#\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 103
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
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/first-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">First Stage:</span>
                                                                There are two ways to get your podcast's attention on Facebook: typography and celebrity. Typography assets use your text to maximize the user experience associated with images and animations. Celebrities use the celebrity of a person or a niche in the captions to appeal to users. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"case-study-testing-ad-sets-stage-item\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-2\">
                                                            <img class=\"img-fluid\" src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/second-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">Second Stage:</span>
                                                                There is no tracking in podcast marketing, but that doesn't mean you can't leave a trace. At Papi Digital we use Chartable, a technology that helps tracking. Chartable has SmartLink capabilities that allow us to extract data on important activities. It helps us to optimize for mobile devices, which is an essential task considering that 65% of users listen to their mobile devices. .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"case-study-testing-ad-sets-stage-item\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-2\">
                                                            <img class=\"img-fluid\" src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/case-study/donnie-brasco/third-stage-icon@2x.png");
        echo "\" />
                                                        </div>
                                                        <div class=\"col-lg-10\">
                                                            <p><span class=\"case-study-emphasize-text\">Third Stage:</span>
                                                                After compiling the statistics listed below, it is time to do a few calculations to determine how effectively our time is being spent. For example, let's say we have 750 clicks on our marketing asset. Many of these clicks lead to listening.</p>
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
                                    <p class=\"case-study-final-result-summary\">This strategy has been tested and proven to work!</p>
                                    <ul>
                                        <li>The Simplecast Web player really works well on converting clicks into listeners.</li>
                                        <li>Creating unique assets is key</li>
                                        <li>Buying media on Facebook and Instagram pound for pound turns the lowest cost per listen</li>
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
        // line 208
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
        // line 225
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
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast-marketing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 225,  289 => 208,  233 => 155,  219 => 144,  205 => 133,  172 => 103,  162 => 96,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/pages/podcast-marketing.htm", "");
    }
}
