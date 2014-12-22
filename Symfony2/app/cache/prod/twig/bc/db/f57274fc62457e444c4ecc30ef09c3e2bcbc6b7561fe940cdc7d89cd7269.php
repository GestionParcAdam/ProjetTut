<?php

/* ParcInfoBundle:Default:index.html.twig */
class __TwigTemplate_bcdbf57274fc62457e444c4ecc30ef09c3e2bcbc6b7561fe940cdc7d89cd7269 extends Twig_Template
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
        echo "        
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h2> Gestion du Parc Informatique</h2>
            ";
        // line 18
        echo "            ";
        if (((isset($context["materiels"]) ? $context["materiels"] : null) != null)) {
            // line 19
            echo "                ";
            // line 22
            echo "                ";
            $context["nbMatHS"] = 0;
            // line 23
            echo "
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 25
                echo "                    ";
                $context["nbMatHS"] = ((isset($context["nbMatHS"]) ? $context["nbMatHS"] : null) + 1);
                // line 26
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                    <h4> Attention! </h4>
                    <p>  ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["nbMatHS"]) ? $context["nbMatHS"] : null), "html", null, true);
            echo " Matériels sont HS.  </p>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parc_info_matHS", array("materiels" => (isset($context["materiels"]) ? $context["materiels"] : null))), "html", null, true);
            echo "\" ><button class=\"btn btn-defaut col-lg-offset-9\">Accéder à la liste</button></a>      
                </div>
            ";
        }
        // line 34
        echo "        </div>
    </div> 
    

<div class=\"row\"> 
    <div class=\"col-lg-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-th-list\"></i> Etat du parc</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-laptop\"></i> Ordinateur</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>2</td>
                                </tr>
                                <tr onclick=\"document.location.href='MatHS/ordiHS.html'\" class=\"cellule\">
                                    <td>HS</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-print\"></i> Imprimante</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>2</td>
                                </tr>
                                <tr onclick=\"document.location.href='MatHS/printHS.html'\" class=\"cellule\">
                                    <td>HS</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-tablet\"></i> Smartphone</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>HS</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-files-o\"></i> Copieur</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>HS</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-signal\"></i> Clé 3G</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>HS</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-exchange\"></i> Switch</h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>HS</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-hdd\"></i> Routeur </h3>
                        </div>
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Etat</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>En Service</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>En panne</td>
                                    <td>0</td>
                                </tr>
                                <tr onclick=\"document.location.href='MatHS/routeurHS.html'\" class=\"cellule\">
                                    <td>HS</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-lg-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-th-list\"></i> Dernière modification</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Nom matériel</th>
                            <th>Lieu</th>
                            <th>Date de dernière modification</th>
                            <th class=\"text-center\">Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PC-13</td>
                            <td>Limoges</td>
                            <td>18/10/2014</td>
                            <td class=\"text-center\"><a href=\"modifierMat/PC1/ficheMateriel1.html\"> <i class=\"glyphicon glyphicon-edit\"></i></a></td>
                        </tr>
                        <tr>
                            <td>PC-Secretaire01</td>
                            <td>St-Maur</td>
                            <td>18/11/2014</td>
                            <td class=\"text-center\"><a href=\".\"><i class=\"glyphicon glyphicon-edit\"></i></a> </td>
                        </tr>
                        <tr>
                            <td>Impr-HP-03</td>
                            <td>Limoges</td>
                            <td>15/09/2013</td>
                            <td class=\"text-center\"><a href=\"\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  69 => 31,  65 => 30,  60 => 27,  54 => 26,  51 => 25,  47 => 24,  44 => 23,  41 => 22,  39 => 19,  36 => 18,  28 => 11,);
    }
}
