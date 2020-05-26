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

/* C:\xampp\htdocs\acme/plugins/mmatters/resources/components/links/default.htm */
class __TwigTemplate_d7fa033e51b4ade18b966ef5c177e31d80f341f8d9f8b908b16eb676f378dd47 extends \Twig\Template
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
        echo "<ul class=\"list-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "        <li class=\"list-group\"><a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "</a></li>   
        <br>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>  ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/plugins/mmatters/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"list-group\">
    {% for link in links %}
        <li class=\"list-group\"><a href=\"{{link}}\">{{link}}</a></li>   
        <br>  
    {% endfor %}
</ul>  ", "C:\\xampp\\htdocs\\acme/plugins/mmatters/resources/components/links/default.htm", "");
    }
}
