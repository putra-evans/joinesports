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

/* /home/joinesports/public_html/themes/joinesports-theme/pages/news-view.htm */
class __TwigTemplate_da3733f45f15cfff8c843746ff166db27ed2ef8a0ff69e7aa6d973cde57c5bed extends \Twig\Template
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
";
        // line 2
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 2);
        // line 3
        echo "<h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
<small class=\"info\">
    Posted
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6)) {
            echo " in
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 7));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 8), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                    echo ", ";
                }
                // line 9
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        // line 11
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 11), "M d, Y"), "html", null, true);
        echo "
</small>
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 13), "count", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "        <div class=\"card mb-3 banner\" >
            <img data-src=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 17), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 17), "html", null, true);
                echo "\" class=\"card-img\">
            <div class=\"card-img-overlay\"></div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
";
        }
        // line 23
        echo "<div class=\"content\">";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 23);
        echo "</div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/pages/news-view.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  128 => 21,  114 => 17,  111 => 16,  107 => 15,  104 => 14,  102 => 13,  96 => 11,  93 => 10,  79 => 9,  70 => 8,  53 => 7,  49 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container top-section\">
{% set post = blogPost.post %}
<h2>{{ post.title }}</h2>
<small class=\"info\">
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</small>
{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
        <div class=\"card mb-3 banner\" >
            <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\" class=\"card-img\">
            <div class=\"card-img-overlay\"></div>
        </div>
        {% endfor %}
    </div>
{% endif %}
<div class=\"content\">{{ post.content_html|raw }}</div>

</div>", "/home/joinesports/public_html/themes/joinesports-theme/pages/news-view.htm", "");
    }
}
