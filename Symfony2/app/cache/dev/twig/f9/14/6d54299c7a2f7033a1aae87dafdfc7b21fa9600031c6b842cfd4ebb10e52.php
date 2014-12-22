<?php

/* ParcInfoBundle:Default:RechercherMateriel/rechercherMateriel.html.twig */
class __TwigTemplate_f9146d54299c7a2f7033a1aae87dafdfc7b21fa9600031c6b842cfd4ebb10e52 extends Twig_Template
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
        echo "    <div class=\"col-lg-12\"><br/></div>
                <div class=\"col-lg-8\">
                    
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-th-list\"></i> Recherche multicritères</h3>
                        </div>
                        <div class=\"panel-body\">
                            <p class=\"col-lg-5\"><b>Site géographique :</b>
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteGeo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <p class=\"col-lg-5\"><b>Type de matériel :</b>
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                            </p>                                        
                            <p class=\"col-lg-5\"><b>Etat du matériel :</b>
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etatMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <p class=\"col-lg-5\"><b>Statut du matériel :</b> 
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statutMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>  
                        </div>
                        
        <hr/>
                        
                        <div class=\"panel-body\">
                            <p class=\"col-lg-5\"><b>Utilisateur :</b> 
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "utilisateur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                        </div>
        <hr/>            
                        <div class=\"panel-body\">
                            <p class=\"col-lg-6\"><b>Nom du matériel :</b> 
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <p class=\"col-lg-6\"><b>Modèle :</b>
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <p class=\"col-lg-12\"></p>
                            <p class=\"col-lg-6\"><b>Date d'achat :</b>
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAchat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <p class=\"col-lg-6\"><b>Fabricant :</b> 
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fabricant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <div class=\"col-lg-12\"></div>
                            <p class=\"col-lg-6\"><b>Revendeur :</b> 
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "revendeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <div class=\"col-lg-12\"></div>
                            <p class=\"col-lg-6\"><b>N° facture :</b>
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numFacture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </p>
                            <div class=\"col-lg-12\"></div>
                            <p class=\"col-lg-4 col-lg-push-8\">
                                <button class=\"btn btn-default\" type=\"submit\" id=\"Valider\">Lancer la recherche</button>
                            </p>
                        </div>
                        
                    </div>
                </div>
            <div class=\"col-lg-4\"><i class=\"glyphicon glyphicon-warning-sign\">&nbsp;Les champs non renseignés ne seront pas pris en compte</i></div>
          
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default:RechercherMateriel/rechercherMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 62,  106 => 58,  99 => 54,  93 => 51,  86 => 47,  80 => 44,  71 => 38,  60 => 30,  54 => 27,  48 => 24,  42 => 21,  31 => 12,  28 => 11,);
    }
}
