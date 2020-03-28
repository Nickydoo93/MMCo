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

/* C:\xampp\htdocs\acme/plugins/mmcontact/contact/components/contactform/default.htm */
class __TwigTemplate_bb0c3d2e2bee44b54de5a79c7f5acdbaf7d9b236445412a13e297ca96c6d73e3 extends \Twig\Template
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
        echo "<form data-request=\"onSend\">
    <div class=\"form/group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\" name=\"name\">
    </div>

    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "name"], "method", false, false, false, 7), "html", null, true);
        echo "

    <div class=\"form/group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\" name=\"email\">
    </div>

    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "email"], "method", false, false, false, 14), "html", null, true);
        echo "

    <div class=\"form/group\">
        <label>Message</label>
        <textarea class=\"form-control\" name=\"content\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>

    <ul>
        
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 25
            echo "            <li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  
    
    </ul>
    </form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/plugins/mmcontact/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  72 => 25,  68 => 24,  55 => 14,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\">
    <div class=\"form/group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\" name=\"name\">
    </div>

    {{ errors.first('name') }}

    <div class=\"form/group\">
        <label>Email</label>
        <input type=\"text\" class=\"form-control\" name=\"email\">
    </div>

    {{ errors.first('email') }}

    <div class=\"form/group\">
        <label>Message</label>
        <textarea class=\"form-control\" name=\"content\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>

    <ul>
        
        {% for error in errors.all() %}
            <li>{{ error }}</li>
        {% endfor %}  
    
    </ul>
    </form>", "C:\\xampp\\htdocs\\acme/plugins/mmcontact/contact/components/contactform/default.htm", "");
    }
}
