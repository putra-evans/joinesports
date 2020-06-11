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

/* /home/joinesports/public_html/themes/joinesports-theme/layouts/default.htm */
class __TwigTemplate_0b2779f9eeea8926eccb2bdac60e6e007669304f02c3e98fdac3bde3e27fb443 extends \Twig\Template
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
        echo "<!DOCTYPE html>

<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"JOINESPORTS : Join the biggest esports community in Indonesia.\">
    <meta name=\"author\" content=\"Faisal Indrianto\">

    <title>JOINESPORTS</title>
    <link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo JE.png");
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/fontawesome-free/css/all.min.css", 2 => "assets/css/joinesports.css", 3 => "assets/bracket/jquery.bracket.min.css"]);
        // line 18
        echo "\" rel=\"stylesheet\">
    
    ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "
    </head>
  <body>
\t";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "\t  ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "\t ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "

";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.bundle.min.js", 2 => "assets/vendor/jquery-easing/jquery.easing.min.js", 3 => "assets/js/joinesports.js", 4 => "assets/bracket/jquery.bracket.min.js"]);
        // line 36
        echo "\"></script>
    ";
        // line 37
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 38
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 39
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "filename", [], "any", false, false, false, 39) == "home.htm")) {
            // line 40
            echo "    <script>
      var navbarCollapse = function() {
        if (\$(\"#mainNav\").offset().top > 100) {
          \$(\"#mainNav\").addClass(\"navbar-shrink\");
        } else {
          \$(\"#mainNav\").removeClass(\"navbar-shrink\");
        }
      };
      navbarCollapse();
      \$(window).scroll(navbarCollapse);
    </script>
    ";
        } else {
            // line 52
            echo "    <script>
      var navbarClose = function() {
        \$(\"#mainNav\").addClass(\"navbar-shrink\");
      };
      navbarClose();
    </script>
    ";
        }
        // line 59
        echo "    <script>
        \$(document).ready(function(){
          \$(\".connector\").hide();
        });
        var team = [\"team 1\", \"team 2\"];
        var result = [1, 2, 2, 1, 3, 1, 3, 1, 2, 1, 3, 1, 1, 3];
        result.push(5, 6)
        var teams = \"\";
        for(i = 0; i < team.length; i++){
            teams += [`\${team[i++]}`,` \${team[i]}`] + \"\\n\"
        }
        const participants = \$(\"#participants, h6\").html();
        console.log(participants);
        console.log(teams);
        var singleElimination = {
            \"teams\": [      
                [`\${team[0]}`,` \${team[1]}`],
                [`\${team[2]}`,` \${team[3]}`],
                [`\${team[4]}`,` \${team[5]}`],
                [`\${team[6]}`,` \${team[7]}`],
                [`\${team[8]}`,` \${team[9]}`], 
                [`\${team[10]}`,` \${team[11]}`],
                [`\${team[12]}`,` \${team[13]}`],
                [`\${team[14]}`,` \${team[15]}`]    
            ],
            \"results\": [
                [
                    [
                       [result[0], result[1]],
                       [result[2], result[3]],
                       [result[4], result[5]],
                       [result[6], result[7]],
                       [result[8], result[9]],
                       [result[10], result[11]],
                       [result[12], result[13]],
                       [result[14], result[15]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                        [result[4], result[5]],
                        [result[6], result[7]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                    ]
                ]
            ]
        }
        \$('.demo').bracket({
            init: singleElimination
        });

        
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/joinesports/public_html/themes/joinesports-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  126 => 52,  112 => 40,  109 => 39,  105 => 38,  94 => 37,  91 => 36,  88 => 30,  84 => 29,  80 => 27,  77 => 26,  72 => 25,  68 => 24,  63 => 21,  60 => 20,  56 => 18,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
    <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"JOINESPORTS : Join the biggest esports community in Indonesia.\">
    <meta name=\"author\" content=\"Faisal Indrianto\">

    <title>JOINESPORTS</title>
    <link rel=\"icon\" href=\"{{'assets/img/logo/logo JE.png'|theme}}\">
    <link href=\"https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
    <link href=\"{{ [
      'assets/vendor/bootstrap/css/bootstrap.min.css',
      'assets/vendor/fontawesome-free/css/all.min.css',
      'assets/css/joinesports.css',
      'assets/bracket/jquery.bracket.min.css'
    ]|theme }}\" rel=\"stylesheet\">
    
    {% styles %}

    </head>
  <body>
\t{% partial 'navbar' %}
\t  {% component 'session' %}
\t {% page %}


{%partial 'footer'%}
    <script src=\"{{ [
      'assets/vendor/jquery/jquery.min.js',
      'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
      'assets/vendor/jquery-easing/jquery.easing.min.js',
      'assets/js/joinesports.js',
      'assets/bracket/jquery.bracket.min.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
    {%if this.page.filename == 'home.htm'%}
    <script>
      var navbarCollapse = function() {
        if (\$(\"#mainNav\").offset().top > 100) {
          \$(\"#mainNav\").addClass(\"navbar-shrink\");
        } else {
          \$(\"#mainNav\").removeClass(\"navbar-shrink\");
        }
      };
      navbarCollapse();
      \$(window).scroll(navbarCollapse);
    </script>
    {% else %}
    <script>
      var navbarClose = function() {
        \$(\"#mainNav\").addClass(\"navbar-shrink\");
      };
      navbarClose();
    </script>
    {% endif %}
    <script>
        \$(document).ready(function(){
          \$(\".connector\").hide();
        });
        var team = [\"team 1\", \"team 2\"];
        var result = [1, 2, 2, 1, 3, 1, 3, 1, 2, 1, 3, 1, 1, 3];
        result.push(5, 6)
        var teams = \"\";
        for(i = 0; i < team.length; i++){
            teams += [`\${team[i++]}`,` \${team[i]}`] + \"\\n\"
        }
        const participants = \$(\"#participants, h6\").html();
        console.log(participants);
        console.log(teams);
        var singleElimination = {
            \"teams\": [      
                [`\${team[0]}`,` \${team[1]}`],
                [`\${team[2]}`,` \${team[3]}`],
                [`\${team[4]}`,` \${team[5]}`],
                [`\${team[6]}`,` \${team[7]}`],
                [`\${team[8]}`,` \${team[9]}`], 
                [`\${team[10]}`,` \${team[11]}`],
                [`\${team[12]}`,` \${team[13]}`],
                [`\${team[14]}`,` \${team[15]}`]    
            ],
            \"results\": [
                [
                    [
                       [result[0], result[1]],
                       [result[2], result[3]],
                       [result[4], result[5]],
                       [result[6], result[7]],
                       [result[8], result[9]],
                       [result[10], result[11]],
                       [result[12], result[13]],
                       [result[14], result[15]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                        [result[4], result[5]],
                        [result[6], result[7]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                    ],
                    [
                        [result[0], result[1]],
                        [result[2], result[3]],
                    ]
                ]
            ]
        }
        \$('.demo').bracket({
            init: singleElimination
        });

        
    </script>
  </body>
</html>", "/home/joinesports/public_html/themes/joinesports-theme/layouts/default.htm", "");
    }
}
