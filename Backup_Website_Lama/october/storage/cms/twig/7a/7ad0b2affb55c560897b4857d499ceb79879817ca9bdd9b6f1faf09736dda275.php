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

/* C:\xampp\htdocs\october/themes/joinesports-theme/partials/footer.htm */
class __TwigTemplate_d1cd535194aa94467247ac895c53f17afa2332246a796638a4e4a52cadbd4dc9 extends \Twig\Template
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
        echo "<footer class=\"text-white-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/header.png");
        echo "\" width=\"60%\" class=\"mb-3\">
          <p>JOINESPORTS merupakan portal media yang menyajikan event,update turnamen, profil tim, match analysis, prediksi, dan masih banyak lagi. Gabung JOINESPORTS sekarang dan dapatkan berbagai benefit!</p>
        </div>
        <div class=\"col-lg-6 ml-auto text-lg-right\">
          <a href=\"\">HOME</a>
          <a href=\"\">NEWS</a>
          <a href=\"\">ABOUT</a>
          <a href=\"\">CONTACT</a>
          <a href=\"\">PARTNERS</a>
          <br>
          <div class=\"social d-flex justify-content-lg-end\">
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-twitter\"></i>
            </a>
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-facebook-f\"></i>
            </a>
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-github\"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"bottom d-flex flex-row text-lg-left text-sm-center\">
        <div class=\"container\">
          <p>Copyright © JOINESPORTS. All Right Reserved</p>
        </div>
      </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/joinesports-theme/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"text-white-50\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <img src=\"{{'assets/img/logo/header.png'|theme}}\" width=\"60%\" class=\"mb-3\">
          <p>JOINESPORTS merupakan portal media yang menyajikan event,update turnamen, profil tim, match analysis, prediksi, dan masih banyak lagi. Gabung JOINESPORTS sekarang dan dapatkan berbagai benefit!</p>
        </div>
        <div class=\"col-lg-6 ml-auto text-lg-right\">
          <a href=\"\">HOME</a>
          <a href=\"\">NEWS</a>
          <a href=\"\">ABOUT</a>
          <a href=\"\">CONTACT</a>
          <a href=\"\">PARTNERS</a>
          <br>
          <div class=\"social d-flex justify-content-lg-end\">
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-twitter\"></i>
            </a>
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-facebook-f\"></i>
            </a>
            <a href=\"#\" class=\"mx-2\">
              <i class=\"fab fa-github\"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"bottom d-flex flex-row text-lg-left text-sm-center\">
        <div class=\"container\">
          <p>Copyright © JOINESPORTS. All Right Reserved</p>
        </div>
      </div>
  </footer>", "C:\\xampp\\htdocs\\october/themes/joinesports-theme/partials/footer.htm", "");
    }
}
