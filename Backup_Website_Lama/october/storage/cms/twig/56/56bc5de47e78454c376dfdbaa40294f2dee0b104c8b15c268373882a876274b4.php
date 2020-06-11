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

/* C:\xampp\htdocs\october/themes/joinesports-theme/pages/pubg.htm */
class __TwigTemplate_c0ad0484881e59ef19089060647f4618fdb166d8b206ca82112f650e15ead91f extends \Twig\Template
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
    <div class=\"d-flex flex-row mb-2 portal-nav\">
        <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubg");
        echo "\" class=\"mr-2\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/pubg.png");
        echo "\" alt=\"\" height=\"30px\" class=\"mb-3\">
        </a>
        <h4 class=\"font-weight-bold portal-title\">GAMES PORTAL</h4>
        <div class=\"portal-nav ml-auto\">
            <a href=\"\" class=\"mr-2\">PLAYERS</a>
            <a href=\"\" class=\"mr-2\">TEAMS</a>
            <a href=\"\">TOURNAMENTS</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card bg-dark text-white mb-3\">
                <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                <div class=\"card-img-overlay d-flex flex-column\">
                    <h5 class=\"font-weight-bold\">LATEST NEWS</h5>
                    <small class=\"card-text\">Last updated 3 mins ago</small>
                    <h4 class=\"card-title mt-auto\">This is a pretty long ass title news that nobody asked about</h4>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card bg-black mb-3\">
                <div class=\"container\">
                    <h6 class=\"text-lg-right text-primary font-weight-bold mt-4\">ONGOING TOURNAMENTS</h6>
                    ";
        // line 28
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 28);
        // line 29
        echo "                    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 29);
        // line 30
        echo "                    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 30);
        // line 31
        echo "                    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 31);
        // line 32
        echo "                    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 32);
        // line 33
        echo "                    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 33);
        // line 34
        echo "
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            ob_start();
            // line 38
            echo "                                ";
            if (($context["detailsPage"] ?? null)) {
                // line 39
                echo "                                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 39)]);
                echo "\">
                                ";
            }
            // line 40
            echo "     
                                    <div class=\"card bg-dark text-white mb-3 game-card\">
                                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "bg", [], "any", false, false, false, 42), "path", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"card-img\">
                                        <div class=\"card-img-overlay d-flex flex-column\">
                                            <small class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tournament_date", [], "any", false, false, false, 44), "M d, Y. g:i"), "html", null, true);
            echo "</small>
                                            <h5 class=\"card-title mt-auto\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "tournament_name", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
                                        </div>
                                    </div>
                                

                                ";
            // line 50
            if (($context["detailsPage"] ?? null)) {
                // line 51
                echo "                                    </a>
                                ";
            }
            // line 53
            echo "                            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 54
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                        <h5>";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</h5>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                    ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 58) > 1)) {
            // line 59
            echo "                        <ul class=\"pagination\">
                            ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 60) > 1)) {
                // line 61
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 61), "baseFileName", [], "any", false, false, false, 61), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 61) - 1)]);
                echo "\">&larr; Prev</a></li>
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 64)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 65
                echo "                                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 65) == $context["page"])) ? ("active") : (null));
                echo "\">
                                    <a href=\"";
                // line 66
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "baseFileName", [], "any", false, false, false, 66), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
                            ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 70) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 70))) {
                // line 71
                echo "                                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 71), "baseFileName", [], "any", false, false, false, 71), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 71) + 1)]);
                echo "\">Next &rarr;</a></li>
                            ";
            }
            // line 73
            echo "                        </ul>
                    ";
        }
        // line 75
        echo "                </div>
            </div>
        </div>
        <div class=\"card bg-black w-100\" style=\"overflow-x:auto\">
            <div class=\"container\">
                <table class=\"table table-borderless table-esport\">
            <thead class=\"bg-black\">
                <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">IGN</th>
                <th scope=\"col\">NAME</th>
                <th scope=\"col\">TEAM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, accusamus.</td>
                </tr>
                <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, laborum?</td>
                </tr>
                <tr>
                <th>3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, fuga!</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class=\"card bg-black col-lg-12 mb-3\">
            <div class=\"container\">
                <div class=\"row mt-4\">
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">UPCOMING MATCH</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">MATCH RESULT</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"\" class=\"text-center mb-3 mt-2\">SEE ALL MATCHES</a>
        </div>
        <div class=\"card bg-black col-lg-12 mb-5\">
            <div class=\"container\">
                <div class=\"row mt-4\">
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">UPCOMING TOURNAMENTS</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">PAST TOURNAMENTS</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder.jpg");
        echo "\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"\" class=\"text-center mb-3 mt-2\">SEE ALL TOURNAMENTS</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/pubg.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 183,  333 => 176,  320 => 166,  310 => 159,  290 => 142,  280 => 135,  267 => 125,  257 => 118,  212 => 75,  208 => 73,  202 => 71,  200 => 70,  197 => 69,  186 => 66,  181 => 65,  177 => 64,  174 => 63,  168 => 61,  166 => 60,  163 => 59,  161 => 58,  158 => 57,  149 => 55,  144 => 54,  141 => 53,  137 => 51,  135 => 50,  127 => 45,  123 => 44,  118 => 42,  114 => 40,  108 => 39,  105 => 38,  102 => 37,  100 => 36,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  83 => 31,  80 => 30,  77 => 29,  75 => 28,  60 => 16,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container top-section\">
    <div class=\"d-flex flex-row mb-2 portal-nav\">
        <a href=\"{{ 'pubg'|page }}\" class=\"mr-2\">
            <img src=\"{{'assets/img/games/pubg.png'|theme}}\" alt=\"\" height=\"30px\" class=\"mb-3\">
        </a>
        <h4 class=\"font-weight-bold portal-title\">GAMES PORTAL</h4>
        <div class=\"portal-nav ml-auto\">
            <a href=\"\" class=\"mr-2\">PLAYERS</a>
            <a href=\"\" class=\"mr-2\">TEAMS</a>
            <a href=\"\">TOURNAMENTS</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"card bg-dark text-white mb-3\">
                <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                <div class=\"card-img-overlay d-flex flex-column\">
                    <h5 class=\"font-weight-bold\">LATEST NEWS</h5>
                    <small class=\"card-text\">Last updated 3 mins ago</small>
                    <h4 class=\"card-title mt-auto\">This is a pretty long ass title news that nobody asked about</h4>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"card bg-black mb-3\">
                <div class=\"container\">
                    <h6 class=\"text-lg-right text-primary font-weight-bold mt-4\">ONGOING TOURNAMENTS</h6>
                    {% set records = builderList.records %}
                    {% set displayColumn = builderList.displayColumn %}
                    {% set noRecordsMessage = builderList.noRecordsMessage %}
                    {% set detailsPage = builderList.detailsPage %}
                    {% set detailsKeyColumn = builderList.detailsKeyColumn %}
                    {% set detailsUrlParameter = builderList.detailsUrlParameter %}

                    {% for record in records %}
                            {# Use spaceless tag to remove spaces inside the A tag. #}
                            {% spaceless %}
                                {% if detailsPage %}
                                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                                {% endif %}     
                                    <div class=\"card bg-dark text-white mb-3 game-card\">
                                        <img src=\"{{ record.bg.path }}\" class=\"card-img\">
                                        <div class=\"card-img-overlay d-flex flex-column\">
                                            <small class=\"card-text\">{{ record.tournament_date|date('M d, Y. g:i') }}</small>
                                            <h5 class=\"card-title mt-auto\">{{ record.tournament_name }}</h5>
                                        </div>
                                    </div>
                                

                                {% if detailsPage %}
                                    </a>
                                {% endif %}
                            {% endspaceless %}
                    {% else %}
                        <h5>{{ noRecordsMessage }}</h5>
                    {% endfor %}

                    {% if records.lastPage > 1 %}
                        <ul class=\"pagination\">
                            {% if records.currentPage > 1 %}
                                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
                            {% endif %}

                            {% for page in 1..records.lastPage %}
                                <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                                </li>
                            {% endfor %}

                            {% if records.lastPage > records.currentPage %}
                                <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
                            {% endif %}
                        </ul>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"card bg-black w-100\" style=\"overflow-x:auto\">
            <div class=\"container\">
                <table class=\"table table-borderless table-esport\">
            <thead class=\"bg-black\">
                <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">IGN</th>
                <th scope=\"col\">NAME</th>
                <th scope=\"col\">TEAM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, accusamus.</td>
                </tr>
                <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, laborum?</td>
                </tr>
                <tr>
                <th>3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, fuga!</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>
        <div class=\"card bg-black col-lg-12 mb-3\">
            <div class=\"container\">
                <div class=\"row mt-4\">
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">UPCOMING MATCH</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">MATCH RESULT</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"\" class=\"text-center mb-3 mt-2\">SEE ALL MATCHES</a>
        </div>
        <div class=\"card bg-black col-lg-12 mb-5\">
            <div class=\"container\">
                <div class=\"row mt-4\">
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">UPCOMING TOURNAMENTS</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h6 class=\"text-primary font-weight-bold\">PAST TOURNAMENTS</h6>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                        <div class=\"card bg-dark text-white mb-3 game-card\">
                            <img src=\"{{'assets/img/placeholder.jpg'|theme}}\" class=\"card-img\">
                            <div class=\"card-img-overlay d-flex flex-column\">
                                <small class=\"card-text\">Last updated 3 mins ago</small>
                                <h5 class=\"card-title mt-auto\">TEAM 1 VS TEAM 2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"\" class=\"text-center mb-3 mt-2\">SEE ALL TOURNAMENTS</a>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/pubg.htm", "");
    }
}
