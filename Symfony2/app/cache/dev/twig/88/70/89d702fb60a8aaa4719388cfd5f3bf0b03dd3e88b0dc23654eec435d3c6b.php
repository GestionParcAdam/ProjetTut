<?php

/* ParcInfoBundle:Default:PopUp/index.html.twig */
class __TwigTemplate_887089d702fb60a8aaa4719388cfd5f3bf0b03dd3e88b0dc23654eec435d3c6b extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
<div class=\"row\">
    <div class=\"col-lg-6\">
        <h2> Gestion du Parc Informatique</h2>
        <div class=\"alert alert-dismissable alert-warning\">
            <button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
            <h4> Attention! </h4>
            <p>  5 Matériels sont HS.  </p>
            <a href=\"MatHs.html\" ><button class=\"btn btn-defaut col-lg-offset-9\">Accéder à la liste</button></a>      
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default:PopUp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
