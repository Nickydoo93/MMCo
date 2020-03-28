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

/* C:\xampp\htdocs\acme/themes/acme/pages/home.htm */
class __TwigTemplate_19c1055940269cba00ebd99fdf5fed75b43ba0ddf0e0fbb771696b6b8500195b extends \Twig\Template
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

<!--Image Slider-->

<div id=\"slides\" class=\"carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#slides\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#slides\" data-slide-to=\"1\"></li>
            <li data-target=\"#slides\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"slide\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/financial freedom.jpg");
        echo "\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <!--<button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>-->
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Register</a>
                        </button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"slide\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bird.jpg");
        echo "\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Register</a></button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"slide\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/granpaps.jpg");
        echo "\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Register</a></button>
                </div>
            </div>
        </div>
        </div>


<!--Welcome Section-->
<div class=\"container-fluid padding\">
<div class=\"row welcome text-center\">
    <div class=\"col-12\">
        <h1 class=\"display-4\">Pensions and Financial Consultants</h1>
    </div>
    <hr>
    <div class=\"col-12\">
        <p class=\"lead\">\"Retire well and enjoy your hard earned money into financial security\".</p>
    </div>
</div>
</div>

<!--Three Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row text-center padding\">
    <div class=\"col-xs-12 col-sm-6 col-md-4\">
        <i class=\"fas fa-piggy-bank\"></i>
        <h3>Financial Literacy</h3>
        
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-4\">
        <i class=\"fas fa-hourglass-half\"></i>
        <h3>Retirement Planning</h3>
        
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <i class=\"fas fa-chalkboard-teacher\"></i>
        <h3>Retirement Fund Trustee Training</h3>
        
    </div>
</div>
<hr class=\"my-4\">
</div>


<!--Two Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row padding\">
        <div class=\"col-lg-6\">
                <img  src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/eye-for-ebony-415487-unsplash.jpg");
        echo "\" class=\"img-fluid\">
            </div>
    <div class=\"col-lg-6\">
        <h2>Mission</h2>
        <p>Money Matters is committed to providing quality service to its customers and general community. </p>
        <p>We continuously strive to meet the needs of our clients by offering financial consulting and skills’ training that is communicated clearly through appropriate techniques to enable the achievement of desired goals.</p>
               <br>
        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        
        
    </div>
    
</div>    
</div>

<hr class=\"my-4\">


<!--Two Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row padding\">
    <div class=\"col-lg-6\">
        <h2>Vision</h2>
        <p>To be the African Voice of Clarity in the provision of objective financial consulting.</p>
        <br>
    </div>
    <div class=\"col-lg-6\">
        <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/benji-aird-2-unsplash.jpg");
        echo "\" class=\"img-fluid\">
    </div>
</div>
<hr class=\"my-4\">
</div>


<!--Fixed Background-->
<figure>
    <div class=\"fixed-wrap\">
        <div id=\"fixed\">
        </div>
    </div>
</figure>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 111,  140 => 84,  90 => 37,  82 => 32,  75 => 28,  67 => 23,  59 => 18,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<!--Image Slider-->

<div id=\"slides\" class=\"carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#slides\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#slides\" data-slide-to=\"1\"></li>
            <li data-target=\"#slides\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"slide\" src=\"{{ 'assets/images/financial freedom.jpg'|theme }}\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <!--<button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>-->
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"{{ 'login'|page }}\">Register</a>
                        </button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"slide\" src=\"{{ 'assets/images/bird.jpg'|theme }}\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"{{ 'login'|page }}\">Register</a></button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"slide\" src=\"{{ 'assets/images/granpaps.jpg'|theme }}\">
                <div class=\"carousel-caption\">
                        <h1 class=\"display-2\">Money Matters</h1>
                        <h3>...truly independent</h3>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\">Events Calendar</button>
                        <button type=\"button\" class=\"btn btn-outline-light btn-lg\"><a href=\"{{ 'login'|page }}\">Register</a></button>
                </div>
            </div>
        </div>
        </div>


<!--Welcome Section-->
<div class=\"container-fluid padding\">
<div class=\"row welcome text-center\">
    <div class=\"col-12\">
        <h1 class=\"display-4\">Pensions and Financial Consultants</h1>
    </div>
    <hr>
    <div class=\"col-12\">
        <p class=\"lead\">\"Retire well and enjoy your hard earned money into financial security\".</p>
    </div>
</div>
</div>

<!--Three Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row text-center padding\">
    <div class=\"col-xs-12 col-sm-6 col-md-4\">
        <i class=\"fas fa-piggy-bank\"></i>
        <h3>Financial Literacy</h3>
        
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-4\">
        <i class=\"fas fa-hourglass-half\"></i>
        <h3>Retirement Planning</h3>
        
    </div>
    <div class=\"col-sm-12 col-md-4\">
        <i class=\"fas fa-chalkboard-teacher\"></i>
        <h3>Retirement Fund Trustee Training</h3>
        
    </div>
</div>
<hr class=\"my-4\">
</div>


<!--Two Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row padding\">
        <div class=\"col-lg-6\">
                <img  src=\"{{ 'assets/images/eye-for-ebony-415487-unsplash.jpg'|theme }}\" class=\"img-fluid\">
            </div>
    <div class=\"col-lg-6\">
        <h2>Mission</h2>
        <p>Money Matters is committed to providing quality service to its customers and general community. </p>
        <p>We continuously strive to meet the needs of our clients by offering financial consulting and skills’ training that is communicated clearly through appropriate techniques to enable the achievement of desired goals.</p>
               <br>
        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        
        
    </div>
    
</div>    
</div>

<hr class=\"my-4\">


<!--Two Column Section-->
<div class=\"container-fluid padding\">
<div class=\"row padding\">
    <div class=\"col-lg-6\">
        <h2>Vision</h2>
        <p>To be the African Voice of Clarity in the provision of objective financial consulting.</p>
        <br>
    </div>
    <div class=\"col-lg-6\">
        <img src=\"{{ 'assets/images/benji-aird-2-unsplash.jpg'|theme }}\" class=\"img-fluid\">
    </div>
</div>
<hr class=\"my-4\">
</div>


<!--Fixed Background-->
<figure>
    <div class=\"fixed-wrap\">
        <div id=\"fixed\">
        </div>
    </div>
</figure>


</body>
</html>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/home.htm", "");
    }
}
