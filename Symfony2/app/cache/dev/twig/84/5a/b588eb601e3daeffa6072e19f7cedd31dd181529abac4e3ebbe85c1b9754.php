<?php

/* ParcInfoBundle:Default/EditionRapport:EditionRapport.html.twig */
class __TwigTemplate_845ab588eb601e3daeffa6072e19f7cedd31dd181529abac4e3ebbe85c1b9754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"page-wrapper\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-th-list\"></i> Edition de rapport</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"col-lg-12\">
                        <div class=\"col-lg-9\">
                            <button type=\"button\" class=\"btn btn-default sameSize\">
                                Générer la liste des biens informatique du parc
                            </button>
                        </div>
                        <div class=\"col-lg-3\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteGeo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
<div class=\"col-lg-12\"></div> 
                        <div class=\"col-lg-9\">
                            <button type=\"button\" class=\"btn btn-default sameSize\">
                                Générer la liste des biens en fin de garantie
                            </button>
                        </div>
<div class=\"col-lg-12\"></div> 
                        <div class=\"col-lg-9\">
                            <button type=\"button\" class=\"btn btn-default sameSize\">
                                Générer la liste des matériels en fonction de son état
                            </button>
                        </div>
<div class=\"col-lg-12\"></div>  
                        <div class=\"col-lg-9\">
                            <button type=\"button\" class=\"btn btn-default sameSize\">
                                Générer la liste des logiciels
                            </button>   
                        </div>
                        <div class=\"col-lg-3\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etatMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    
                        
                        
                        
                    
                </div> 
            </div>
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default/EditionRapport:EditionRapport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 46,  46 => 25,  31 => 12,  28 => 11,);
    }
}
