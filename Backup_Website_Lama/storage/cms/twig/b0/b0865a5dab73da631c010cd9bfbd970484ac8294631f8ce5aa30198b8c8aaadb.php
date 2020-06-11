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

/* /home/joinesports/public_html/themes/joinesports-theme/pages/register.htm */
class __TwigTemplate_97d23fea50821b10bca4d385da00f002b7be1507a1858cf1af71a22677a1adcf extends \Twig\Template
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
        echo "<div class=\"container top-section register mb-4\">
    <div class=\"row\">
    <div class=\"col-lg-12 mb-5\">
        <h3 class=\"text-center\">Sign up to JOINESPORTS.</h3>
    </div>
    <div class=\"col-lg-12\">
        ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account::register"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    </div>
    </div>
    
  </div>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/pages/register.htm";
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
        return new Source("<div class=\"container top-section register mb-4\">
    <div class=\"row\">
    <div class=\"col-lg-12 mb-5\">
        <h3 class=\"text-center\">Sign up to JOINESPORTS.</h3>
    </div>
    <div class=\"col-lg-12\">
        {% component 'account::register' %}
    </div>
    </div>
    
  </div>", "/home/joinesports/public_html/themes/joinesports-theme/pages/register.htm", "");
    }
}
