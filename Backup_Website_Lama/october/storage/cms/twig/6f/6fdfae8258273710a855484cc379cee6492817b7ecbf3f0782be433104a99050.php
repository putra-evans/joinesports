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

/* C:\xampp\htdocs\october/plugins/martin/forms/components/emptyform/default.htm */
class __TwigTemplate_3aadbe9f037c9058ef5b88f616b729977bdf7c3b654fed8f4c7217f45ccf14c4 extends \Twig\Template
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
        echo "<h3>Here goes your custom form</h3>
<p>Override HTML by creating a new partial called <strong>default.htm</strong> (more info <a href=\"https://octobercms.com/docs/cms/components#overriding-partials\" target=\"_blank\">here</a>)</p>
<p>You can copy/paste this basic template:</p>
<pre>
    &lt;form data-request=\"&lbrace;&lbrace; __SELF__ }}::onFormSubmit\"&gt;
        &lbrace;&lbrace; form_token() &rbrace;&rbrace;
        &lt;div id=\"&lbrace;&lbrace; __SELF__ &rbrace;&rbrace;_forms_flash\"&gt;&lt;/div&gt;
        &lt;!-- YOUR FORM FIELDS --&gt;
        &lbrace;% partial '@recaptcha' %}
        &lt;!-- SUBMIT BUTTON --&gt;
    &lt;/form&gt;
</pre>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/plugins/martin/forms/components/emptyform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Here goes your custom form</h3>
<p>Override HTML by creating a new partial called <strong>default.htm</strong> (more info <a href=\"https://octobercms.com/docs/cms/components#overriding-partials\" target=\"_blank\">here</a>)</p>
<p>You can copy/paste this basic template:</p>
<pre>
    &lt;form data-request=\"&lbrace;&lbrace; __SELF__ }}::onFormSubmit\"&gt;
        &lbrace;&lbrace; form_token() &rbrace;&rbrace;
        &lt;div id=\"&lbrace;&lbrace; __SELF__ &rbrace;&rbrace;_forms_flash\"&gt;&lt;/div&gt;
        &lt;!-- YOUR FORM FIELDS --&gt;
        &lbrace;% partial '@recaptcha' %}
        &lt;!-- SUBMIT BUTTON --&gt;
    &lt;/form&gt;
</pre>", "C:\\xampp\\htdocs\\october/plugins/martin/forms/components/emptyform/default.htm", "");
    }
}
