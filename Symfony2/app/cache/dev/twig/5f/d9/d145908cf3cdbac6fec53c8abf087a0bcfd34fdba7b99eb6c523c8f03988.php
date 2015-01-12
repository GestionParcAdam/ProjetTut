<?php

/* ParcInfoBundle:Default:AjouterMateriel/ajouterMateriel.html.twig */
class __TwigTemplate_5fd9d145908cf3cdbac6fec53c8abf087a0bcfd34fdba7b99eb6c523c8f03988 extends Twig_Template
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
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <p class=\"col-lg-5\"><b>Type de matériel :</b>
                        <br/>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Nom du matériel :</b> 
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Etat du matériel :</b> 
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etatMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Statut du matériel :</b> 
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statutMat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </p>
                    <p class=\"col-lg-5\"><b>Site géographique :</b> 
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteGeo", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 48
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_1\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-6\"><b>Date d'achat :</b>
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAchat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Prix d'achat :</b> 
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixAchat", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "En €")));
        // line 55
        echo "
                                </p>

                                <p class=\"col-lg-6\"><b>N° facture :</b>
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numFacture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Modèle :</b>
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Fabricant :</b> 
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fabricant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>Revendeur :</b> 
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "revendeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-6\"><b>N° immobilisation :</b> 
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "immobilisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                            </div>
                            ";
        // line 75
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_2\">
                                <p class=\"col-lg-12\">
                                    <br/>
                                    <button class=\"btn btn-default\" id=\"ajouter_user\" 
                                            data-toggle=\"modal\" data-target=\"#myModal3\">Ajouter un logiciel</button>
                                </p>
                                <p class=\"col-lg-12\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <td>Nom du logiciel</td> 
                                                <td>Editeur</td> 
                                                <td>Licence</td> 
                                                <td>Supprimer</td>
                                            </tr>
                                        </thead>
                                        <tbody id=\"tabLog\">
                                            
                                        </tbody>                                            
                                    </table>
                                </p>
                                
                            </div>
                            ";
        // line 99
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_3\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-12\"><b>@MAC :</b> 
                                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adMac", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-12\"><b>@IP :</b> 
                                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adIp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                                <p class=\"col-lg-12\"><b>@PASSERELLE :</b>
                                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adPasserelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>
                            </div> 
                            ";
        // line 112
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_4\">
                                <p class=\"col-lg-12\">
                                    <br/> 
                                    <button class=\"btn btn-default\" id=\"ajouter_user\" 
                                            data-toggle=\"modal\" data-target=\"#myModal2\">Ajouter un utilisateur</button> 
                                </p>
                                <p class=\"col-lg-12\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <td>Nom des utilisateurs affectés</td> 
                                                <td>Supprimer</td>
                                            </tr>
                                        </thead>
                                        <tbody id=\"tabUser\">
                                            
                                        </tbody>                                            
                                    </table>
                                </p>
                            </div>
                            ";
        // line 133
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_5\">
                                <p class=\"col-lg-12\"></p>
                                <p class=\"col-lg-6\"><b>Date de fin de garanti :</b> 
                                    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGarantie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </p>    
                            </div>
                            ";
        // line 140
        echo "                            <div class=\"contenu_onglet\" id=\"contenu_onglet_6\">
                                <p class=\"col-lg-12\">
                                    <br/> 
                                    <button class=\"btn btn-default\" id=\"ajouter_user\" 
                                            data-toggle=\"modal\" data-target=\"#myModal\">Ajouter une maintenance</button>
                                </p>
                                
                                <p class=\"col-lg-12\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <td>Date intervention</td>
                                                <td>Objet de l'intervention</td> 
                                                <td>Description de l'intervention</td> 
                                                <td>Prestataire de l'intervention</td> 
                                                <td>Cout de l'intervention</td> 
                                                <td>Supprimer</td>
                                            </tr>
                                        </thead>
                                        <tbody id=\"tabMaintenance\">
                                            
                                        </tbody>                                            
                                    </table>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class=\"col-lg-12\">
                    <p class=\"col-lg-11\">
                    <p class=\"col-lg-1\">
                        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    </p>

                    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter une maintenance</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <label>Date d'intervention : </label>
                                    <input type=\"date\" id=\"dateInterv\" class=\"form-control\" />
                                    <br/>
                                    <label>Objet de l'intervention : </label>
                                    <input type=\"text\" id=\"objInterv\" class=\"form-control\" />
                                    <br/>
                                    <label>Description de l'intervention : </label>
                                    <textarea cols=\"5\" rows=\"5\" id=\"descInterv\" class=\"form-control\"></textarea>
                                    <br/>
                                    <label>Prestataire de l'intervention : </label>
                                    <input type=\"text\" id=\"prestaInterv\" class=\"form-control\" />
                                    <br/>
                                    <label>Cout de l'intervention : </label>
                                    <input type=\"text\" id=\"coutInterv\" class=\"form-control\" />
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Quitter</button>
                                    <button type=\"button\" class=\"btn btn-primary\" 
                                            onclick=\"javascript:recupSaisiePopupMaintenance()\" 
                                            data-dismiss=\"modal\">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un utilisateur</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <label>Nom de l'utilisateur : </label>
                                    <input type=\"text\" id=\"nomUser\" class=\"form-control\" />
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Quitter</button>
                                    <button type=\"button\" class=\"btn btn-primary\" 
                                            onclick=\"javascript:recupSaisiePopupUser()\" 
                                            data-dismiss=\"modal\">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un logiciel</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <p class=\"col-lg-12\"><b>Editeur  :</b> 
                                        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </p>
                                    <p class=\"col-lg-6\"><b>Nom du logiciel :</b> 
                                        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomLog", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </p>
                                    <p class=\"col-lg-6\"><b>Licence :</b>
                                        ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "licence", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </p>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Quitter</button>
                                    <button type=\"button\" class=\"btn btn-primary\" 
                                            onclick=\"javascript:recupSaisiePopupLog()\" 
                                            data-dismiss=\"modal\">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 254
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        var anc_onglet = '1';
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
        return array (  344 => 254,  329 => 242,  323 => 239,  317 => 236,  248 => 170,  216 => 140,  210 => 136,  205 => 133,  183 => 112,  177 => 108,  171 => 105,  165 => 102,  160 => 99,  135 => 75,  129 => 71,  123 => 68,  117 => 65,  111 => 62,  105 => 59,  99 => 55,  97 => 54,  91 => 51,  86 => 48,  71 => 35,  65 => 32,  59 => 29,  53 => 26,  47 => 23,  41 => 20,  31 => 12,  28 => 11,);
    }
}
