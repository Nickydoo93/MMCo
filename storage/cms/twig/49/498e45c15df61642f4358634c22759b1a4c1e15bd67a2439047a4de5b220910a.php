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

/* C:\xampp\htdocs\acme/themes/acme/partials/site/footer.htm */
class __TwigTemplate_b31641110e933753931f5326d13704a2588c1e49193757b07f85718753ddbcc0 extends \Twig\Template
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
        echo "<!--Footer-->
<footer>
        
    <div class=\"container-fluid bird\">
            <div class=\"row text-center\">
                <div class=\"col-md-4 one\">
                    <hr class=\"light\">
                    
                    <h5><a href=\"https://www.google.com\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Money Matters Logo.png");
        echo "\" class=\"img-fluid\"></a>Contact Us</h5>
                    <hr class=\"light\">
                    <p>Telephone: 393 4003</p>
                    <p>Fax: 3934004</p>
                    <p>info@moneymatters.co.bw</p>
                    <p>Unit 105 1st Floor RD Block, Molapo Crossing</p>
                    <p>Gaborone, Botswana</p>
                </div>   
                <div class=\"col-md-4 two\">
                    <hr class=\"light\">
                    <h5>Hours</h5>
                    <hr class=\"light\">
                    <p>Monday - Friday: 08:00 - 17:00</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
                <div class=\"col-md-4 three\">
                        <hr class=\"light\">
                        <h5>Connect with Us</h5>
                        <hr class=\"light\">
                        <div class=\"col-12 social padding\">
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                        </div>
                        
                </div>  
                <div class=\"col-12\">
                    <hr class=\"light\">
                    <h5>&copy;Money Matters (Pty) Ltd</h5>
                </div>  
            </div>     
           </div> 
        
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer>
        
    <div class=\"container-fluid bird\">
            <div class=\"row text-center\">
                <div class=\"col-md-4 one\">
                    <hr class=\"light\">
                    
                    <h5><a href=\"https://www.google.com\"><img src=\"{{ 'assets/images/Money Matters Logo.png'|theme }}\" class=\"img-fluid\"></a>Contact Us</h5>
                    <hr class=\"light\">
                    <p>Telephone: 393 4003</p>
                    <p>Fax: 3934004</p>
                    <p>info@moneymatters.co.bw</p>
                    <p>Unit 105 1st Floor RD Block, Molapo Crossing</p>
                    <p>Gaborone, Botswana</p>
                </div>   
                <div class=\"col-md-4 two\">
                    <hr class=\"light\">
                    <h5>Hours</h5>
                    <hr class=\"light\">
                    <p>Monday - Friday: 08:00 - 17:00</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
                <div class=\"col-md-4 three\">
                        <hr class=\"light\">
                        <h5>Connect with Us</h5>
                        <hr class=\"light\">
                        <div class=\"col-12 social padding\">
                            <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
                        </div>
                        
                </div>  
                <div class=\"col-12\">
                    <hr class=\"light\">
                    <h5>&copy;Money Matters (Pty) Ltd</h5>
                </div>  
            </div>     
           </div> 
        
</footer>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm", "");
    }
}
