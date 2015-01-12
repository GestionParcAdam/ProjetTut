<?php

/* ParcInfoBundle:Default:index.html.twig */
class __TwigTemplate_917789c9067aa868bdbae269c5e0ee503a8ec41ea46a1bb3f2a06c746b72663a extends Twig_Template
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
        if (((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")) != null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 25
                echo "                    ";
                $context["nbMatHS"] = ((isset($context["nbMatHS"]) ? $context["nbMatHS"] : $this->getContext($context, "nbMatHS")) + 1);
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
            echo twig_escape_filter($this->env, (isset($context["nbMatHS"]) ? $context["nbMatHS"] : $this->getContext($context, "nbMatHS")), "html", null, true);
            echo " Matériels sont HS.  </p>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parc_info_matHS", array("materiels" => (isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")))), "html", null, true);
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
                                  
                
               ";
        // line 47
        if (((isset($context["allsite"]) ? $context["allsite"] : $this->getContext($context, "allsite")) != null)) {
            // line 48
            echo "                 ";
            $context["nbMatHS"] = 0;
            // line 49
            echo "
                    ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsite"]) ? $context["allsite"] : $this->getContext($context, "allsite")));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 51
                echo "                        ";
                $context["nbMatService"] = 0;
                // line 52
                echo "                        ";
                $context["nbMatPan"] = 0;
                // line 53
                echo "                        ";
                $context["nbMatHs"] = 0;
                // line 54
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["site"], "materiels", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                    // line 55
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["materiel"], "numEtat", array()), "id", array()) == 1)) {
                        // line 56
                        echo "                                ";
                        $context["nbMatService"] = ((isset($context["nbMatService"]) ? $context["nbMatService"] : $this->getContext($context, "nbMatService")) + 1);
                        // line 57
                        echo "                            ";
                    }
                    // line 58
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["materiel"], "numEtat", array()), "id", array()) == 2)) {
                        // line 59
                        echo "                                ";
                        $context["nbMatHs"] = ((isset($context["nbMatHs"]) ? $context["nbMatHs"] : $this->getContext($context, "nbMatHs")) + 1);
                        // line 60
                        echo "                            ";
                    }
                    // line 61
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["materiel"], "numEtat", array()), "id", array()) == 3)) {
                        // line 62
                        echo "                                ";
                        $context["nbMatPan"] = ((isset($context["nbMatPan"]) ? $context["nbMatPan"] : $this->getContext($context, "nbMatPan")) + 1);
                        // line 63
                        echo "                            ";
                    }
                    // line 64
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                        <div class=\"col-lg-6\">
                            <div class=\"panel panel-info\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\"><i class=\"fa fa-laptop\"></i> ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "nomSite", array()), "html", null, true);
                echo " </h3>
                                </div>
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Etat</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr onclick=\"document.location.href='";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parc_info_etat", array("idEtat" => 1, "numSite" => $this->getAttribute($context["site"], "id", array()))), "html", null, true);
                echo "'\" class=\"cellule\">
                                            <td>En Service</td>
                                            <td>";
                // line 80
                echo twig_escape_filter($this->env, (isset($context["nbMatService"]) ? $context["nbMatService"] : $this->getContext($context, "nbMatService")), "html", null, true);
                echo "</td>
                                        </tr>
                                        <tr onclick=\"document.location.href='";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parc_info_etat", array("idEtat" => 3, "numSite" => $this->getAttribute($context["site"], "id", array()))), "html", null, true);
                echo "'\" class=\"cellule\">
                                            <td>En panne</td>
                                            <td>";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["nbMatPan"]) ? $context["nbMatPan"] : $this->getContext($context, "nbMatPan")), "html", null, true);
                echo "</td>
                                        </tr>
                                        <tr onclick=\"document.location.href='";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parc_info_etat", array("idEtat" => 2, "numSite" => $this->getAttribute($context["site"], "id", array()))), "html", null, true);
                echo "'\" class=\"cellule\">
                                            <td>HS</td>
                                            <td>";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["nbMatHs"]) ? $context["nbMatHs"] : $this->getContext($context, "nbMatHs")), "html", null, true);
                echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                
                ";
        }
        // line 97
        echo "                
                
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
        return array (  209 => 97,  205 => 95,  192 => 88,  187 => 86,  182 => 84,  177 => 82,  172 => 80,  167 => 78,  154 => 68,  149 => 65,  143 => 64,  140 => 63,  137 => 62,  134 => 61,  131 => 60,  128 => 59,  125 => 58,  122 => 57,  119 => 56,  116 => 55,  111 => 54,  108 => 53,  105 => 52,  102 => 51,  98 => 50,  95 => 49,  92 => 48,  90 => 47,  75 => 34,  69 => 31,  65 => 30,  60 => 27,  54 => 26,  51 => 25,  47 => 24,  44 => 23,  41 => 22,  39 => 19,  36 => 18,  28 => 11,);
    }
}
