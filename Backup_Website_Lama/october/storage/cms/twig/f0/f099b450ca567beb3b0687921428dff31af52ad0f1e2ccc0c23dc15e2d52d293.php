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

/* C:\xampp\htdocs\october/themes/joinesports-theme/pages/news.htm */
class __TwigTemplate_6d1c258efaf83905954cedeaa2705e290d13de8af1800d3aebd377dd7ea9c0f1 extends \Twig\Template
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
  <section class=\"news\">
    <div class=\"container\">
      <h5 class=\"mb-3\">LATEST NEWS</h5>
      <div class=\"row\">
      ";
        // line 6
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 6);
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"card bg-dark text-white mb-3\">
                    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10)) {
                // line 11
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 11), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 12
                    echo "                          <img class=\"card-img\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 12), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 12), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 12) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 12))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 12) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 12))), "html", null, true);
                    echo "\">
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                    ";
            }
            // line 15
            echo "                    <div class=\"card-img-overlay d-flex flex-column\">
                      <small class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 16), "M d, Y. g:i"), "html", null, true);
            echo "</small>
                      <h4 class=\"card-title mt-auto\"><a class=\"text-white\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</a></h4>
                    </div>
                  </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        
        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 25) > 1)) {
            // line 26
            echo "            <ul class=\"pagination\">
                ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 27) > 1)) {
                // line 28
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "baseFileName", [], "any", false, false, false, 28), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 28) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 28) - 1)]);
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 30
            echo "        
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 31)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "                    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 32) == $context["page"])) ? ("active") : (null));
                echo "\">
                        <a href=\"";
                // line 33
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "baseFileName", [], "any", false, false, false, 33), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 33) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        
                ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 37) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 37))) {
                // line 38
                echo "                    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "baseFileName", [], "any", false, false, false, 38), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 38) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 38) + 1)]);
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 40
            echo "            </ul>
        ";
        }
        // line 42
        echo "      </div>
    </div>
  </section>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  159 => 40,  153 => 38,  151 => 37,  148 => 36,  137 => 33,  132 => 32,  128 => 31,  125 => 30,  119 => 28,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  100 => 22,  88 => 17,  84 => 16,  81 => 15,  78 => 14,  63 => 12,  58 => 11,  56 => 10,  52 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container top-section\">
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
                <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
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
</div>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/pages/news.htm", "");
    }
}
