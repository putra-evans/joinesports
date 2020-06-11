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

/* /home/joinesports/public_html/themes/joinesports-theme/pages/login.htm */
class __TwigTemplate_78ecfb62e6cb06821542ba7e589e801583506bc37c839bb2cb485fd13368da6f extends \Twig\Template
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
        echo "<div class=\"container d-flex flex-column align-items-center top-section mb-5\">
    <div class=\"col-lg-8 mt-3\">
        ";
        // line 3
        if ( !($context["user"] ?? null)) {
            // line 4
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 13
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "        </div>

    </div>

";
        } else {
            // line 19
            echo "    <p>you're already signed in</p>
";
        }
        // line 21
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  70 => 19,  63 => 14,  59 => 13,  54 => 10,  50 => 9,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container d-flex flex-column align-items-center top-section mb-5\">
    <div class=\"col-lg-8 mt-3\">
        {% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial account ~ '::register' %}
        </div>

    </div>

{% else %}
    <p>you're already signed in</p>
{% endif %}

    </div>
</div>", "/home/joinesports/public_html/themes/joinesports-theme/pages/login.htm", "");
    }
}
