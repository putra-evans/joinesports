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

/* /home/joinesports/public_html/themes/joinesports-theme/pages/user-profile.htm */
class __TwigTemplate_4a259f7128b3b29987544904d9685899bb64229a9c630cd8cc1aa4cc28fb5416 extends \Twig\Template
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
        echo "<div class=\"container top-section\">
    <h1>Manage your account</h1>
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/pages/user-profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container top-section\">
    <h1>Manage your account</h1>
    {% component 'account' %}
</div>", "/home/joinesports/public_html/themes/joinesports-theme/pages/user-profile.htm", "");
    }
}
