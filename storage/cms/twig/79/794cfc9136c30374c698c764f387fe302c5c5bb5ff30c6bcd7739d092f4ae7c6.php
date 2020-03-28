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

/* C:\xampp\htdocs\acme/plugins/mmregister/form/components/form/default.htm */
class __TwigTemplate_e51d542d7eb1a6dc0c519a881746965c32d7e67bc4d0de16da151de1f457a90e extends \Twig\Template
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
        echo "
<hr>

<form class=\"form/group\" data-request=\"onSave\">
    <label>Delegate Title:</label>
    <input type=\"text\" class=\"form-control\" name=\"delegate\">
    
    <label>First Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"first\">
    
    <label>Last Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"last\">
    
    <label>Fund/Organisation:</label>
    <input type=\"text\" class=\"form-control\" name=\"fund\">
    
    <label>Postal Address:</label>
    <input type=\"text\" class=\"form-control\" name=\"post\">
    
    <label>Business Tel:</label>
    <input type=\"tel\" class=\"form-control\" name=\"tel\">
    
    <label>Email Address:</label>
    <input type=\"email\" class=\"form-control\" name=\"email\">
    
    <label>Designation:</label>
    <input type=\"text\" class=\"form-control\" name=\"desg\">
        <br>
    <button type=\"submit\">Submit</button>
    
        <hr>
    
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/plugins/mmregister/form/components/form/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<hr>

<form class=\"form/group\" data-request=\"onSave\">
    <label>Delegate Title:</label>
    <input type=\"text\" class=\"form-control\" name=\"delegate\">
    
    <label>First Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"first\">
    
    <label>Last Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"last\">
    
    <label>Fund/Organisation:</label>
    <input type=\"text\" class=\"form-control\" name=\"fund\">
    
    <label>Postal Address:</label>
    <input type=\"text\" class=\"form-control\" name=\"post\">
    
    <label>Business Tel:</label>
    <input type=\"tel\" class=\"form-control\" name=\"tel\">
    
    <label>Email Address:</label>
    <input type=\"email\" class=\"form-control\" name=\"email\">
    
    <label>Designation:</label>
    <input type=\"text\" class=\"form-control\" name=\"desg\">
        <br>
    <button type=\"submit\">Submit</button>
    
        <hr>
    
</form>", "C:\\xampp\\htdocs\\acme/plugins/mmregister/form/components/form/default.htm", "");
    }
}
