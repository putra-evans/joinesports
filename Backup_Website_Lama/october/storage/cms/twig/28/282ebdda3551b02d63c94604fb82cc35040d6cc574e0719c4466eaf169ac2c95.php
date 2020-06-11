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

/* C:\xampp\htdocs\october/plugins/joinesports/tournaments/components/teamform/default.htm */
class __TwigTemplate_fe397a3a7e48d79766cc72c2a34160c50018788ef19072dc61f616bc49aceff1 extends \Twig\Template
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
        echo "<form data-request=\"onSave\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <input type=\"text\" name=\"name\" class=\"form-control mb-3\" placeholder=\"team name\">
    <input type=\"file\" name=\"logo\" class=\"form-control mb-3\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player1\" class=\"form-control mb-3\" placeholder=\"player 1\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player2\" class=\"form-control mb-3\" placeholder=\"player 2\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player3\" class=\"form-control mb-3\" placeholder=\"player 3\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player4\" class=\"form-control mb-3\" placeholder=\"player 4\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player5\" class=\"form-control mb-3\" placeholder=\"player 5\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player6\" class=\"form-control mb-3\" placeholder=\"player 6\">
        </div>
    </div>
    <input type=\"text\" name=\"region\" class=\"form-control mb-3\" placeholder=\"insert your region\">
    <br>
    <button class=\"btn btn-primary btn-block\">Submit Teams</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/plugins/joinesports/tournaments/components/teamform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSave\">
    <input type=\"hidden\" name=\"id\" value=\"{{ record.id }}\">
    <input type=\"text\" name=\"name\" class=\"form-control mb-3\" placeholder=\"team name\">
    <input type=\"file\" name=\"logo\" class=\"form-control mb-3\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player1\" class=\"form-control mb-3\" placeholder=\"player 1\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player2\" class=\"form-control mb-3\" placeholder=\"player 2\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player3\" class=\"form-control mb-3\" placeholder=\"player 3\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player4\" class=\"form-control mb-3\" placeholder=\"player 4\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player5\" class=\"form-control mb-3\" placeholder=\"player 5\">
        </div>
        <div class=\"col-lg-6\">
            <input type=\"text\" name=\"player6\" class=\"form-control mb-3\" placeholder=\"player 6\">
        </div>
    </div>
    <input type=\"text\" name=\"region\" class=\"form-control mb-3\" placeholder=\"insert your region\">
    <br>
    <button class=\"btn btn-primary btn-block\">Submit Teams</button>
</form>", "C:\\xampp\\htdocs\\october/plugins/joinesports/tournaments/components/teamform/default.htm", "");
    }
}
