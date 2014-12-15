<?php

/* ParcInfoBundle:Default:AjouterMateriel/ajouterMateriel.html.twig */
class __TwigTemplate_02669fada89d3440e292243e02a6fc3c2a69049124e8294536ed602003bb6df3 extends Twig_Template
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
        echo "    <br/>
    <div class=\"row\">     
        <div class=\"panel-body\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-laptop\"></i> Ajout d'un matériel</h3>
                </div>
                <div class=\"panel-body\">
                    <p class=\"col-lg-5\"><b>Type de matériel :</b>
                        <br/>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeMat"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Nom du matériel :</b> 
                       ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMat"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Etat du matériel :</b> 
                       ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etatMat"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Statut du matériel :</b> 
                       ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statutMat"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Site géographique :</b> 
                       ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteGeo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <div class=\"systeme_onglets\">
                        <div class=\"onglets col-sm-12\">
                            <span class=\"onglet_0 onglet\" id=\"onglet_1\" onclick=\"javascript:change_onglet('1');\">Carac. commerciales</span>
                            <span class=\"onglet_0 onglet\" id=\"onglet_2\" onclick=\"javascript:change_onglet('2');\">Carac. logiciels</span>
                            <span class=\"onglet_0 onglet\" id=\"onglet_3\" onclick=\"javascript:change_onglet('3');\">Carac. réseau</span>
                            <span class=\"onglet_0 onglet\" id=\"onglet_4\" onclick=\"javascript:change_onglet('4');\">Utilisateurs affectés</span>
                            <span class=\"onglet_0 onglet\" id=\"onglet_5\" onclick=\"javascript:change_onglet('5');\">Garanti</span>
                            <span class=\"onglet_0 onglet\" id=\"onglet_6\" onclick=\"javascript:change_onglet('6');\">Historique des maintenances</span>
                        </div>
                        <div class=\"contenu_onglets\">
                            ";
        // line 47
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_1\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-6\"><b>Date d'achat :</b>
                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAchat"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Prix d'achat :</b> 
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixAchat"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "En €")));
        // line 55
        echo "
                                </p>

                                <p class=\"col-lg-6\"><b>N° facture :</b>
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numFacture"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Modèle :</b>
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Fabricant :</b> 
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fabricant"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Revendeur :</b> 
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "revendeur"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                            </div>
                            ";
        // line 72
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_2\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-12\"><b>Editeur  :</b> 
                                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editeur"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Nom du logiciel :</b> 
                                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomLog"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Licence :</b>
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "licence"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-12\"></p>
                            </div>
                            ";
        // line 86
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_3\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-12\"><b>@MAC :</b> 
                                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adMac"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-12\"><b>@IP :</b> 
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adIp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-12\"><b>@PASSERELLE :</b>
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adPasserelle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                            </div> 
                            ";
        // line 99
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_4\">
                                <p class=\"col-lg-12\">
                                    <br/> 
                                    <button class=\"btn btn-default\" id=\"ajouter_user\" ><a href=\"#\">Ajouter un utilisateur</a></button> 
                                </p>
                            </div>
                            ";
        // line 106
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_5\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-6\"><b>Date de fin de garanti :</b> 
                                    <input class=\"form-control\" type=\"date\" id=\"date\"/>
                                </p>    
                            </div>
                            ";
        // line 113
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_6\">
                                <p class=\"col-lg-12\">
                                    <br/> 
                                    <button class=\"btn btn-default\" id=\"ajouter_user\" ><a href=\"#\">Ajouter une maintenance</a></button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class=\"col-lg-12\">
                    <p class=\"col-lg-11\">
                    <p class=\"col-lg-1\">
                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
                <script type=\"text/javascript\">
                    var anc_onglet='1';
                    change_onglet(anc_onglet);
                </script>
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default:AjouterMateriel/ajouterMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 124,  188 => 113,  180 => 106,  172 => 99,  166 => 95,  160 => 92,  154 => 89,  149 => 86,  142 => 81,  136 => 78,  130 => 75,  125 => 72,  119 => 68,  113 => 65,  107 => 62,  101 => 59,  95 => 55,  93 => 53,  87 => 50,  82 => 47,  67 => 34,  61 => 31,  55 => 28,  49 => 25,  43 => 22,  31 => 12,  28 => 11,);
    }
}
