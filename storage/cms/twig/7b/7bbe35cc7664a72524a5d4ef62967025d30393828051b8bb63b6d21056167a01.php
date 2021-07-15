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

/* /home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/footer.htm */
class __TwigTemplate_b8134f1f2b197f609398eb923f3128a8d0c82276713d4916fa1bcdea63a5d0de extends \Twig\Template
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
        $filters = array("theme" => 16, "escape" => 26, "date" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'escape', 'date'],
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
        echo "<section class=\"contact-us container-fluid pt-4 pb-4 pl-md-4 pr-md-4\">
    <div class=\"row h-100\">
        <div class=\"contact col-md-7 pb-3\">
            <h2 class=\"header2\">contact</h2>
            <p>
                For inquiries, collaborations, press features, lectures and speaking engagements or to simply say hi,
                please <a class=\"typeform-share button\"
                          href=\"https://papidigital.typeform.com/to/g4JnyD\"
                          data-mode=\"popup\"
                          data-submit-close-delay=\"2\" target=\"_blank\">click here to email us</a>.
                <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id=\"typef_orm_share\", b=\"https://embed.typeform.com/\"; if(!gi.call(d,id)){ js=ce.call(d,\"script\"); js.id=id; js.src=b+\"embed.js\"; q=gt.call(d,\"script\")[0]; q.parentNode.insertBefore(js,q) } })() </script>
            </p>
        </div>
        <div class=\"social col-md-5\">
            <h2 class=\"header2\">stay connected</h2>
            <a class=\"social-icon\" href=\"https://www.facebook.com/Papi-Digital-164924544218047/\" target=\"_blank\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-icon/facebook-icon@2x.png");
        echo "\" width=\"40\" height=\"40\" /></a>
            <a class=\"social-icon\" href=\"https://www.youtube.com/channel/UCxzr0lY3n-skr_m0NRgVoMw\" target=\"_blank\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/youtube-icon/youtube-icon@2x.png");
        echo "\" width=\"40\" height=\"40\" /></a>
            <a class=\"social-icon\" href=\"https://www.instagram.com/_papidigital/\" target=\"_blank\"><img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-icon/instagram-icon@2x.png");
        echo "\" width=\"40\" height=\"40\" /></a>
        </div>
    </div>
</section>

<section class=\"footer container-fluid pt-3 pb-3\">
    <div class=\"row h-100\">
        <div class=\"col my-auto\">
            <p>Copyright &copy; ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ", Papi Digital</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  87 => 18,  83 => 17,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/513518.cloudwaysapps.com/yassdkynbn/public_html/themes/papidigital/partials/footer.htm", "");
    }
}
