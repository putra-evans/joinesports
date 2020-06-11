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

/* C:\xampp\htdocs\october/themes/joinesports-theme/pages/pubg-tournament-details.htm */
class __TwigTemplate_79492230adf1d0a7f2c2dc3d7a55a83d7161274d5d79ea62853d4685954fa661 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["tournamentDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["tournamentDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["tournamentDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "<div class=\"container top-section\">
    <div class=\"d-flex flex-row mb-2 portal-nav\">
        <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubg");
        echo "\" class=\"mr-2\">
            <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/pubg.png");
        echo "\" alt=\"\" height=\"30px\" class=\"mb-3\">
        </a>
        <h4 class=\"font-weight-bold portal-title\">GAMES PORTAL</h4>
        <div class=\"portal-nav ml-auto\">
            <a href=\"\" class=\"mr-2\">PLAYERS</a>
            <a href=\"\" class=\"mr-2\">TEAMS</a>
            <a href=\"\" class=\"active\">TOURNAMENTS</a>
        </div>
    </div>
";
        // line 16
        if (($context["record"] ?? null)) {
            // line 17
            echo "<div class=\"card bg-dark text-white mb-3 h-50 banner\" >
    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "bg", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"card-img\">
    <div class=\"card-img-overlay d-flex flex-column justify-content-between\">
        <div class=\"text-lg-right\">
            <h4 class=\"font-weight-bold text-uppercase\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_name", [], "any", false, false, false, 21), "html", null, true);
            echo "</h4>
            <h6>organized by ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_organizer", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>
        </div>
        <div class=\"row mt-5 details\">
            <div class=\"col-lg-8 d-flex flex-row justify-content-lg-start justify-content-between align-items-end\">
                <div>
                    <small>prize</small>
                    <h6>IDR. ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_prize", [], "any", false, false, false, 28), "html", null, true);
            echo "</h6>
                </div>
                <div class=\"ml-lg-3\">
                    <small>date</small>
                    <h6>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_date", [], "any", false, false, false, 32), "j M Y"), "html", null, true);
            echo "</h6>
                </div>
                <div class=\"ml-lg-3\">
                    <small>location</small>
                    <h6>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_location", [], "any", false, false, false, 36), "html", null, true);
            echo "</h6>
                </div>
            </div>
            <div class=\"col-lg-4\">
                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "status", [], "any", false, false, false, 40) == "Full Slot")) {
                // line 41
                echo "                    
                ";
            } else {
                // line 43
                echo "                <a class=\"btn btn-primary btn-block\" href=\"\" data-toggle=\"modal\" data-target=\"#registForm\">JOIN TOURNAMENTS</a>
                ";
            }
            // line 45
            echo "            </div>
        </div>
    </div>
</div>
";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            // line 49
            $context["type"] = "success"            ;            foreach (Flash::success            () as $message) {
                $context["message"] = $message;                // line 50
                echo "<div class=\"alert alert-dark alert-dismissible fade show\" role=\"alert\">
    ";
                // line 51
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
";
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 57
            echo "
    <div class=\"flex-column-reverse\">
        <div class=\"row flex-row-reverse\">   
            <div class=\"col-lg-3 mb-3\">
                <div class=\"card bg-black p-3\">
                    <small class=\"text-secondary\">status</small>
                    <h6 class=\"text-primary\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "status", [], "any", false, false, false, 63), "html", null, true);
            echo "</h6>
                    <small class=\"text-secondary\">entry fee</small>
                    ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_fee", [], "any", false, false, false, 65) <= 0)) {
                // line 66
                echo "                        <h6>Free to enter</h6>
                    ";
            } else {
                // line 68
                echo "                        <h6>IDR ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_fee", [], "any", false, false, false, 68), "html", null, true);
                echo "</h6>
                    ";
            }
            // line 70
            echo "                    <small class=\"text-secondary\">available slots</small>
                    <h6>/";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_slots", [], "any", false, false, false, 71), "html", null, true);
            echo "</h6>
                    <small class=\"text-secondary\">region</small>
                    <h6>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_region", [], "any", false, false, false, 73), "html", null, true);
            echo "</h6>
                    <small class=\"text-secondary\">format</small>
                    <h6>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_format", [], "any", false, false, false, 75), "html", null, true);
            echo "</h6>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <ul class=\"nav nav-tabs\">
                    <li><a data-toggle=\"tab\" href=\"#details\">Details</a></li>
                    <li><a data-toggle=\"tab\" href=\"#participants\">Participants</a></li>
                    <li><a data-toggle=\"tab\" href=\"#bracket\">Bracket</a></li>
                    <li><a data-toggle=\"tab\" href=\"#results\">Results</a></li>
                    <li><a data-toggle=\"tab\" href=\"#media\">Media</a></li>
                </ul>
                
                <div class=\"tab-content\">
                    <div id=\"details\" class=\"tab-pane fade in active show\">
                        ";
            // line 89
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tournament_detail", [], "any", false, false, false, 89);
            echo "
                    </div>
                    <div id=\"participants\" class=\"tab-pane fade\">
                        <div class=\"row\">
                            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "teams", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 94
                echo "                                <div class=\"col-lg-5 ml-2 mb-2 bg-black\">
                                    <div class=\"card-body\">
                                        <h6> ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 96), "html", null, true);
                echo " </h6>
                                        ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["team"], "players", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 98
                    echo "                                            <small class=\"mr-1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "players", [], "any", false, false, false, 98), "html", null, true);
                    echo "</small>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                        </div>
                    </div>
                    <div id=\"bracket\" class=\"tab-pane fade\">
                        <div class=\"card bg-black\" style=\"overflow-x:auto; padding-bottom:3rem;\">
                            <div class=\"container demo\">
                                
                            </div>
                        </div>
                    </div>
                    <div id=\"results\" class=\"tab-pane fade\">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id=\"media\" class=\"tab-pane fade\">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>              
        </div>
    </div>
";
        } else {
            // line 125
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 127
        echo "<div class=\"modal fade mt-5\" id=\"registForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content login-form\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">JOIN TOURNAMENTS</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
          </button>
        </div>
        <div class=\"modal-body\">
            ";
        // line 137
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("teamform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 138
        echo "        </div>
      </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/pubg-tournament-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 138,  275 => 137,  263 => 127,  257 => 125,  233 => 103,  225 => 100,  216 => 98,  212 => 97,  208 => 96,  204 => 94,  200 => 93,  193 => 89,  176 => 75,  171 => 73,  166 => 71,  163 => 70,  157 => 68,  153 => 66,  151 => 65,  146 => 63,  138 => 57,  129 => 51,  126 => 50,  124 => 49,  118 => 45,  114 => 43,  110 => 41,  108 => 40,  101 => 36,  94 => 32,  87 => 28,  78 => 22,  74 => 21,  68 => 18,  65 => 17,  63 => 16,  51 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = tournamentDetails.record %}
{% set displayColumn = tournamentDetails.displayColumn %}
{% set notFoundMessage = tournamentDetails.notFoundMessage %}
<div class=\"container top-section\">
    <div class=\"d-flex flex-row mb-2 portal-nav\">
        <a href=\"{{ 'pubg'|page }}\" class=\"mr-2\">
            <img src=\"{{'assets/img/games/pubg.png'|theme}}\" alt=\"\" height=\"30px\" class=\"mb-3\">
        </a>
        <h4 class=\"font-weight-bold portal-title\">GAMES PORTAL</h4>
        <div class=\"portal-nav ml-auto\">
            <a href=\"\" class=\"mr-2\">PLAYERS</a>
            <a href=\"\" class=\"mr-2\">TEAMS</a>
            <a href=\"\" class=\"active\">TOURNAMENTS</a>
        </div>
    </div>
{% if record %}
<div class=\"card bg-dark text-white mb-3 h-50 banner\" >
    <img src=\"{{ record.bg.path }}\" class=\"card-img\">
    <div class=\"card-img-overlay d-flex flex-column justify-content-between\">
        <div class=\"text-lg-right\">
            <h4 class=\"font-weight-bold text-uppercase\">{{ record.tournament_name }}</h4>
            <h6>organized by {{ record.tournament_organizer }}</h6>
        </div>
        <div class=\"row mt-5 details\">
            <div class=\"col-lg-8 d-flex flex-row justify-content-lg-start justify-content-between align-items-end\">
                <div>
                    <small>prize</small>
                    <h6>IDR. {{ record.tournament_prize }}</h6>
                </div>
                <div class=\"ml-lg-3\">
                    <small>date</small>
                    <h6>{{ record.tournament_date|date('j M Y') }}</h6>
                </div>
                <div class=\"ml-lg-3\">
                    <small>location</small>
                    <h6>{{ record.tournament_location }}</h6>
                </div>
            </div>
            <div class=\"col-lg-4\">
                {%if record.status == \"Full Slot\" %}
                    
                {% else %}
                <a class=\"btn btn-primary btn-block\" href=\"\" data-toggle=\"modal\" data-target=\"#registForm\">JOIN TOURNAMENTS</a>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% flash success %}
<div class=\"alert alert-dark alert-dismissible fade show\" role=\"alert\">
    {{message}}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>
{% endflash %}

    <div class=\"flex-column-reverse\">
        <div class=\"row flex-row-reverse\">   
            <div class=\"col-lg-3 mb-3\">
                <div class=\"card bg-black p-3\">
                    <small class=\"text-secondary\">status</small>
                    <h6 class=\"text-primary\">{{ record.status }}</h6>
                    <small class=\"text-secondary\">entry fee</small>
                    {%if record.tournament_fee <= 0%}
                        <h6>Free to enter</h6>
                    {% else %}
                        <h6>IDR {{ record.tournament_fee }}</h6>
                    {% endif %}
                    <small class=\"text-secondary\">available slots</small>
                    <h6>/{{ record.tournament_slots }}</h6>
                    <small class=\"text-secondary\">region</small>
                    <h6>{{ record.tournament_region }}</h6>
                    <small class=\"text-secondary\">format</small>
                    <h6>{{ record.tournament_format }}</h6>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <ul class=\"nav nav-tabs\">
                    <li><a data-toggle=\"tab\" href=\"#details\">Details</a></li>
                    <li><a data-toggle=\"tab\" href=\"#participants\">Participants</a></li>
                    <li><a data-toggle=\"tab\" href=\"#bracket\">Bracket</a></li>
                    <li><a data-toggle=\"tab\" href=\"#results\">Results</a></li>
                    <li><a data-toggle=\"tab\" href=\"#media\">Media</a></li>
                </ul>
                
                <div class=\"tab-content\">
                    <div id=\"details\" class=\"tab-pane fade in active show\">
                        {{ record.tournament_detail|raw }}
                    </div>
                    <div id=\"participants\" class=\"tab-pane fade\">
                        <div class=\"row\">
                            {% for team in record.teams %}
                                <div class=\"col-lg-5 ml-2 mb-2 bg-black\">
                                    <div class=\"card-body\">
                                        <h6> {{team.name}} </h6>
                                        {% for player in team.players %}
                                            <small class=\"mr-1\">{{player.players}}</small>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div id=\"bracket\" class=\"tab-pane fade\">
                        <div class=\"card bg-black\" style=\"overflow-x:auto; padding-bottom:3rem;\">
                            <div class=\"container demo\">
                                
                            </div>
                        </div>
                    </div>
                    <div id=\"results\" class=\"tab-pane fade\">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id=\"media\" class=\"tab-pane fade\">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>              
        </div>
    </div>
{% else %}
    {{ notFoundMessage }}
{% endif %}
<div class=\"modal fade mt-5\" id=\"registForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content login-form\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">JOIN TOURNAMENTS</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
          </button>
        </div>
        <div class=\"modal-body\">
            {% component 'teamform' %}
        </div>
      </div>
    </div>
</div>
</div>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/pubg-tournament-details.htm", "");
    }
}
