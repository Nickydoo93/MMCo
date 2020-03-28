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

/* C:\xampp\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_8486a14dad0a9decf3bdab3bb10e2f94d454f33d4b4f790ff2440ba84ebb498e extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <!--<a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</a>-->
    <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Money Matters Logo.png");
        echo "\" ></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">

        <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == "home")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
        </li>
        <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "about")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
        </li>
        <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "events")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("events");
        echo "\">Events</a>
        </li>
        <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "services")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a>
        </li>
        
        <li class=\"";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == "contact-us")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">Contact Us</a>
      </li>

        <li class=\"";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == "register")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">
              ";
        // line 30
        if ( !($context["user"] ?? null)) {
            // line 31
            echo "              Register
              ";
        } else {
            // line 33
            echo "              My Profile
              ";
        }
        // line 35
        echo "            </a>
        </li>

        ";
        // line 38
        if (($context["user"] ?? null)) {
            // line 39
            echo "        <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == "signout")) {
                echo "active";
            }
            echo "\">
          <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
      </li>
        ";
        }
        // line 43
        echo "        
        
        
      </ul>
      
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  139 => 39,  137 => 38,  132 => 35,  128 => 33,  124 => 31,  122 => 30,  118 => 29,  112 => 28,  106 => 25,  100 => 24,  94 => 21,  88 => 20,  83 => 18,  77 => 17,  72 => 15,  66 => 14,  61 => 12,  55 => 11,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <!--<a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>-->
    <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ 'assets/images/Money Matters Logo.png'|theme }}\" ></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">

        <li class=\"{% if this.page.id == 'home' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
        </li>
        <li class=\"{% if this.page.id == 'about' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
        </li>
        <li class=\"{% if this.page.id == 'events' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'events'|page }}\">Events</a>
        </li>
        <li class=\"{% if this.page.id == 'services' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'services'|page }}\">Services</a>
        </li>
        
        <li class=\"{% if this.page.id == 'contact-us' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'contact-us'|page }}\">Contact Us</a>
      </li>

        <li class=\"{% if this.page.id == 'register' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ 'register'|page }}\">
              {% if not user %}
              Register
              {% else %}
              My Profile
              {% endif %}
            </a>
        </li>

        {% if user %}
        <li class=\"{% if this.page.id == 'signout' %}active{% endif %}\">
          <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
      </li>
        {% endif %}
        
        
        
      </ul>
      
    </div>
  </nav>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}
