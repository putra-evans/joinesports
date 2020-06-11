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

/* C:\xampp\htdocs\october/themes/joinesports-theme/pages/home.htm */
class __TwigTemplate_03127e05aabd1838c46da4ba7847136b481b25b5d0a4923c6723cadd087bc5c2 extends \Twig\Template
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
        echo "<header class=\"landing d-flex flex-column\">
    <div class=\"container flex-grow-1\">
      <div class=\"col-lg-6 ml-n3\">
        <h1>JOIN THE BIGGEST ESPORTS COMMUNITY IN INDONESIA</h1>
        <a href=\"#about\" class=\"btn btn-primary js-scroll-trigger mt-4\">LEARN MORE</a>
      </div>
      <div class=\"col-lg-6\">
      </div>
    </div>
    <div class=\"container d-flex flex-column mt-auto\">
      <div class=\"d-flex flex-row justify-content-between portal-list mb-4\">
        <div class=\"p-2\">
          <a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubg");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/pubg.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dota");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/dota.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ml");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/ml.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ff");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/ff.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubgm");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/pubgm.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chess");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/games/chess.png");
        echo "\" alt=\"\" class=\"img-fluid\"></a>
        </div>
      </div>
    </div>
  </header>
  <section class=\"news\">
    <div class=\"container\">
      <h5 class=\"mb-3\">LATEST NEWS</h5>
      <div class=\"row\">
      ";
        // line 37
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 37);
        // line 38
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 39
            echo "                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"card bg-dark text-white mb-3\">
                    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41)) {
                // line 42
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 42), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 43
                    echo "                          <img class=\"card-img\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 43) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 43))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 43) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 43))), "html", null, true);
                    echo "\">
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    ";
            }
            // line 46
            echo "                    <div class=\"card-img-overlay d-flex flex-column\">
                      <small class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 47), "M d, Y. g:i"), "html", null, true);
            echo "</small>
                      <h4 class=\"card-title mt-auto\"><a class=\"text-white\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></h4>
                    </div>
                  </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                <p class=\"ml-3\">No Post</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        
        ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 56) > 1)) {
            // line 57
            echo "            <ul class=\"pagination\">
                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 58) > 1)) {
                // line 59
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "baseFileName", [], "any", false, false, false, 59), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 59) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 59) - 1)]);
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 61
            echo "        
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 62)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "                    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 63) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a href=\"";
                // line 64
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 64) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        
                ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 68) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 68))) {
                // line 69
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 69), "baseFileName", [], "any", false, false, false, 69), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 69) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 69) + 1)]);
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 71
            echo "            </ul>
        ";
        }
        // line 73
        echo "      </div>
    </div>
  </section>
  <section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-10 col-lg-7 mx-auto text-center\">
          <h2 class=\"text-white mb-5\">Contact and give us feedback!</h2>
          ";
        // line 81
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 82,  232 => 81,  222 => 73,  218 => 71,  212 => 69,  210 => 68,  207 => 67,  196 => 64,  191 => 63,  187 => 62,  184 => 61,  178 => 59,  176 => 58,  173 => 57,  171 => 56,  168 => 55,  161 => 53,  149 => 48,  145 => 47,  142 => 46,  139 => 45,  124 => 43,  119 => 42,  117 => 41,  113 => 39,  107 => 38,  105 => 37,  91 => 28,  83 => 25,  75 => 22,  67 => 19,  59 => 16,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"landing d-flex flex-column\">
    <div class=\"container flex-grow-1\">
      <div class=\"col-lg-6 ml-n3\">
        <h1>JOIN THE BIGGEST ESPORTS COMMUNITY IN INDONESIA</h1>
        <a href=\"#about\" class=\"btn btn-primary js-scroll-trigger mt-4\">LEARN MORE</a>
      </div>
      <div class=\"col-lg-6\">
      </div>
    </div>
    <div class=\"container d-flex flex-column mt-auto\">
      <div class=\"d-flex flex-row justify-content-between portal-list mb-4\">
        <div class=\"p-2\">
          <a href=\"{{ 'pubg'|page }}\"><img src=\"{{'assets/img/games/pubg.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"{{ 'dota'|page }}\"><img src=\"{{'assets/img/games/dota.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"{{ 'ml'|page }}\"><img src=\"{{'assets/img/games/ml.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"{{ 'ff'|page }}\"><img src=\"{{'assets/img/games/ff.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"{{ 'pubgm'|page }}\"><img src=\"{{'assets/img/games/pubgm.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
        <div class=\"p-2\">
          <a href=\"{{ 'chess'|page }}\"><img src=\"{{'assets/img/games/chess.png'|theme}}\" alt=\"\" class=\"img-fluid\"></a>
        </div>
      </div>
    </div>
  </header>
  <section class=\"news\">
    <div class=\"container\">
      <h5 class=\"mb-3\">LATEST NEWS</h5>
      <div class=\"row\">
      {% set posts = blogPosts.posts %}
            {% for post in posts %}
                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"card bg-dark text-white mb-3\">
                    {% if post.featured_images.count %}
                    {% for image in post.featured_images|slice(0, 1) %}
                          <img class=\"card-img\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\" title=\"{{ image.title != null ? image.title : post.title }}\">
                    {% endfor %}
                    {% endif %}
                    <div class=\"card-img-overlay d-flex flex-column\">
                      <small class=\"card-text\">{{ post.published_at|date('M d, Y. g:i') }}</small>
                      <h4 class=\"card-title mt-auto\"><a class=\"text-white\" href=\"{{ post.url }}\">{{ post.title }}</a></h4>
                    </div>
                  </div>
                </div>
            {% else %}
                <p class=\"ml-3\">No Post</p>
            {% endfor %}
        
        {% if posts.lastPage > 1 %}
            <ul class=\"pagination\">
                {% if posts.currentPage > 1 %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
                {% endif %}
        
                {% for page in 1..posts.lastPage %}
                    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                        <a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
                    </li>
                {% endfor %}
        
                {% if posts.lastPage > posts.currentPage %}
                    <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
                {% endif %}
            </ul>
        {% endif %}
      </div>
    </div>
  </section>
  <section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-10 col-lg-7 mx-auto text-center\">
          <h2 class=\"text-white mb-5\">Contact and give us feedback!</h2>
          {% component 'contactform' %}
        </div>
      </div>
    </div>
  </section>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/home.htm", "");
    }
}
