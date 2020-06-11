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

/* /home/joinesports/public_html/themes/joinesports-theme/partials/navbar.htm */
class __TwigTemplate_0b5ce8f8bc082b8c7bce31f11d3bcc27815cc68224ac2b2e4b4288aef9f74eb6 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-sm fixed-top navbar-second\">
    <div class=\"container\">
      <ul class=\"navbar-nav ml-auto\">
          ";
        // line 4
        if (($context["user"] ?? null)) {
            // line 5
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user-profile");
            echo "\">ACCOUNT</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">SIGN OUT</a>
          </li>
          ";
        } else {
            // line 12
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginForm\">LOGIN</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">REGISTER</a>
          </li>
          ";
        }
        // line 19
        echo "        </ul>
    </div>  
  </nav>
  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/header.png");
        echo "\" alt=\"\" width=\"150px\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item";
        // line 30
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 30), "baseFileName", [], "any", false, false, false, 30) == "home")) ? (" active") : (""));
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">HOME</a>
          </li>
          <li class=\"nav-item";
        // line 33
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "baseFileName", [], "any", false, false, false, 33) == "news")) ? (" active") : (""));
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">NEWS</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            GAMES
            </a>
            <div class=\"dropdown-menu dropdown-menu-right animate slideIn\" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubg");
        echo "\">PUBG</a>
              <a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dota");
        echo "\">DOTA 2</a>
              <a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ml");
        echo "\">MOBILE LEGENDS</a>
              <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ff");
        echo "\">FREE FIRE</a>
              <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pubgm");
        echo "\">PUBG MOBILE</a>
              <a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chess");
        echo "\">CHESS RUSH</a>
            </div>
          </li>
          <li class=\"nav-item";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "baseFileName", [], "any", false, false, false, 49) == "reward")) ? (" active") : (""));
        echo "\">
            <a class=\"nav-link\" href=\"\">REWARD</a>
          </li>
          <li class=\"nav-item d-none d-md-block\">
            <a class=\"nav-link js-scroll-trigger\" href=\"\" data-toggle=\"modal\" data-target=\"#search\"><i class=\"fa fa-search\"></i></a>
          </li>
          ";
        // line 55
        if (($context["user"] ?? null)) {
            // line 56
            echo "          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user-profile");
            echo "\">ACCOUNT</a>
          </li>
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">SIGN OUT</a>
          </li>
          ";
        } else {
            // line 63
            echo "          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginForm\">LOGIN</a>
          </li>
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"";
            // line 67
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
            echo "\">REGISTER</a>
          </li>
          ";
        }
        // line 70
        echo "          <li class=\"mb-3\">
            <div id=\"hideForm\">
              <form action=\"\" class=\"form-inline\">
                <input class=\"col-md-6 p-2\" type=\"text\" placeholder=\"search anything\">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"loginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content login-form\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Sign in to JOINESPORTS</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
            </button>
          </div>
          <div class=\"modal-body\">
              <h3>Sign in</h3>
              ";
        // line 92
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 93
        echo "          </div>
        </div>
      </div>
  </div>
    <div class=\"modal fade\" id=\"search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content login-form\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
            </button>
          </div>
          <div class=\"modal-body\">
            <form class=\"form-inline d-flex\">
              <input type=\"email\" class=\"form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0\" id=\"inputEmail\" placeholder=\"search anything\" style=\"height:auto\">
              <button type=\"submit\" class=\"btn btn-primary mx-auto\">search</button>
            </form>
          </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  194 => 92,  170 => 70,  164 => 67,  158 => 63,  149 => 57,  146 => 56,  144 => 55,  135 => 49,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  99 => 34,  95 => 33,  90 => 31,  86 => 30,  75 => 24,  68 => 19,  62 => 16,  56 => 12,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm fixed-top navbar-second\">
    <div class=\"container\">
      <ul class=\"navbar-nav ml-auto\">
          {% if user %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ 'user-profile'|page }}\">ACCOUNT</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">SIGN OUT</a>
          </li>
          {% else %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginForm\">LOGIN</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ 'register'|page }}\">REGISTER</a>
          </li>
          {% endif %}
        </ul>
    </div>  
  </nav>
  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"{{ 'home'|page }}\"><img src=\"{{'assets/img/logo/header.png'|theme}}\" alt=\"\" width=\"150px\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
            <a class=\"nav-link\" href=\"{{ 'home'|page }}\">HOME</a>
          </li>
          <li class=\"nav-item{{ this.page.baseFileName == 'news' ? ' active' }}\">
            <a class=\"nav-link\" href=\"{{ 'news'|page }}\">NEWS</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            GAMES
            </a>
            <div class=\"dropdown-menu dropdown-menu-right animate slideIn\" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"{{ 'pubg'|page }}\">PUBG</a>
              <a class=\"dropdown-item\" href=\"{{ 'dota'|page }}\">DOTA 2</a>
              <a class=\"dropdown-item\" href=\"{{ 'ml'|page }}\">MOBILE LEGENDS</a>
              <a class=\"dropdown-item\" href=\"{{ 'ff'|page }}\">FREE FIRE</a>
              <a class=\"dropdown-item\" href=\"{{ 'pubgm'|page }}\">PUBG MOBILE</a>
              <a class=\"dropdown-item\" href=\"{{ 'chess'|page }}\">CHESS RUSH</a>
            </div>
          </li>
          <li class=\"nav-item{{ this.page.baseFileName == 'reward' ? ' active' }}\">
            <a class=\"nav-link\" href=\"\">REWARD</a>
          </li>
          <li class=\"nav-item d-none d-md-block\">
            <a class=\"nav-link js-scroll-trigger\" href=\"\" data-toggle=\"modal\" data-target=\"#search\"><i class=\"fa fa-search\"></i></a>
          </li>
          {% if user %}
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"{{ 'user-profile'|page }}\">ACCOUNT</a>
          </li>
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">SIGN OUT</a>
          </li>
          {% else %}
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginForm\">LOGIN</a>
          </li>
          <li class=\"nav-item\" id=\"hideForm\">
            <a class=\"nav-link\" href=\"{{ 'register'|page }}\">REGISTER</a>
          </li>
          {% endif %}
          <li class=\"mb-3\">
            <div id=\"hideForm\">
              <form action=\"\" class=\"form-inline\">
                <input class=\"col-md-6 p-2\" type=\"text\" placeholder=\"search anything\">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"modal fade\" id=\"loginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content login-form\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Sign in to JOINESPORTS</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
            </button>
          </div>
          <div class=\"modal-body\">
              <h3>Sign in</h3>
              {% partial account ~ '::signin' %}
          </div>
        </div>
      </div>
  </div>
    <div class=\"modal fade\" id=\"search\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content login-form\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"fa fa-times\"  aria-hidden=\"true\"></i>
            </button>
          </div>
          <div class=\"modal-body\">
            <form class=\"form-inline d-flex\">
              <input type=\"email\" class=\"form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0\" id=\"inputEmail\" placeholder=\"search anything\" style=\"height:auto\">
              <button type=\"submit\" class=\"btn btn-primary mx-auto\">search</button>
            </form>
          </div>
        </div>
      </div>
    </div>", "/home/joinesports/public_html/themes/joinesports-theme/partials/navbar.htm", "");
    }
}
