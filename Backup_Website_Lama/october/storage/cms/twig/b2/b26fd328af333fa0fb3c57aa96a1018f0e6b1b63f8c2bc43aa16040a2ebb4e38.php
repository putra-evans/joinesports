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

/* C:\xampp\htdocs\october/themes/joinesports-theme/pages/contact.htm */
class __TwigTemplate_1f5d5662f9f127ce55f257034df60ec4647550b07b549b432bc25b5178a40323 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-md-10 col-lg-7 mx-auto text-center\">
            <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
            <h2 class=\"text-white mb-5\">Contact and give us feedback!</h2>
            ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "        </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-md-10 col-lg-7 mx-auto text-center\">
            <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
            <h2 class=\"text-white mb-5\">Contact and give us feedback!</h2>
            {% component 'contactform' %}
        </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/contact.htm", "");
    }
}
