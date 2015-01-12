<?php

/* ParcInfoBundle:Default/PopUp:affichePopUp.html.twig */
class __TwigTemplate_9ecef9955406275ad3780d7f9b2a2bafa217aae256ebee6370c6ee67cb19cadf extends Twig_Template
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
        <div class=\"col-lg-7\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"glyphicon glyphicon-th-list\"></i> Matériel HS</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-laptop\"></i> Ordinateur</h3>
                            </div>
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Nom du matériel</th>
                                        <th>Lieu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiels"]) ? $context["materiels"] : $this->getContext($context, "materiels")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 34
            echo "                                        <tr onclick=\"document.location.href = '";
            echo "'\" class=\"cellule\">
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiel"], "nomMat", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["materiel"], "getNumSite", array()), "nomSite", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    ";
        // line 91
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ParcInfoBundle:Default/PopUp:affichePopUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 91,  75 => 39,  66 => 36,  62 => 35,  58 => 34,  54 => 33,  31 => 12,  28 => 11,);
    }
}
