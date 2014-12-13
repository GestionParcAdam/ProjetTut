<?php

/* ::base.html.twig */
class __TwigTemplate_08f6a834456b1f2483ede7a8a7b1b08b2f96971b96e69c3c4750d5f3e5fef507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Gestion du Parc informatique ADAM SAS</title>

    
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/local.css"), "html", null, true);
        echo "\" />
    
    <!--
    <link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"font-awesome/css/font-awesome.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/local.css\" /> -->

    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</head>
<body>

    <div id=\"wrapper\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>

                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><i class=\"fa fa-home\"></i> Gestion du Parc informatique ADAM SAS</a>
            </div>

            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul id=\"active\" class=\"nav navbar-nav side-nav\">
                    <li class=\"selected\"><a href=\"GererMateriel.html\"><i class=\"glyphicon glyphicon-hdd\"></i> Gérer le matériel </a></li>
                    <li><a href=\"Recherche.html\"><i class=\"glyphicon glyphicon-search\"></i>  Recherche multicritère </a></li>
                    <li><a href=\"EditerRapport.html\"><i class=\"glyphicon glyphicon-print\"></i> Edition de rapport </a></li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right navbar-user\">
                    <li>
                        <a><i class=\"fa fa-user\"></i> Administrateur</a>
                    </li>
                    <li>
                        <a href=\"#\"  ><i class=\"glyphicon glyphicon-off\"></i> Déconnexion  </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id=\"page-wrapper\">
            ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "        </div>
    </div>
    </body>
</html>
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  111 => 58,  103 => 60,  100 => 59,  98 => 58,  58 => 21,  54 => 20,  44 => 13,  40 => 12,  36 => 11,  32 => 10,  21 => 1,);
    }
}
