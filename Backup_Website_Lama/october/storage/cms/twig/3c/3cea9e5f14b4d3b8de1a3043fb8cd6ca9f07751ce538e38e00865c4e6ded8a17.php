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

/* C:\xampp\htdocs\october/plugins/faisalindrianto/contact/components/contactform/default.htm */
class __TwigTemplate_a7c3cad38e5eabfc8fbb92f7ad22af42664fe7d7a0087d746d34121771a8289d extends \Twig\Template
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
        echo "<form data-request=\"contactform::onSend\">
    <input type=\"text\" name=\"name\" class=\"form-control mb-2\" placeholder=\"Enter your name\">
    <input type=\"email\" name=\"email\" class=\"form-control mb-2\" placeholder=\"Enter email address...\">
    <textarea class=\"form-control mb-2\" name=\"content\" cols=\"20\" rows=\"5\" placeholder=\"Enter your message\"></textarea>
    <button type=\"submit\" class=\"btn btn-primary btn-block\">send</button>
</form>
<br>
<div id=\"result\">
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/plugins/faisalindrianto/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"contactform::onSend\">
    <input type=\"text\" name=\"name\" class=\"form-control mb-2\" placeholder=\"Enter your name\">
    <input type=\"email\" name=\"email\" class=\"form-control mb-2\" placeholder=\"Enter email address...\">
    <textarea class=\"form-control mb-2\" name=\"content\" cols=\"20\" rows=\"5\" placeholder=\"Enter your message\"></textarea>
    <button type=\"submit\" class=\"btn btn-primary btn-block\">send</button>
</form>
<br>
<div id=\"result\">
</div>", "C:\\xampp\\htdocs\\october/plugins/faisalindrianto/contact/components/contactform/default.htm", "");
    }
}
