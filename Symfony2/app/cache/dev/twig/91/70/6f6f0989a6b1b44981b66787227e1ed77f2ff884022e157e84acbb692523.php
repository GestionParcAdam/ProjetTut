<?php

/* ::base.html.twig */
class __TwigTemplate_91706f6f0989a6b1b44981b66787227e1ed77f2ff884022e157e84acbb692523 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/local.css"), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
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
                <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("parc_info_homepage");
        echo "\"><i class=\"fa fa-home\"></i> Gestion du Parc informatique ADAM SAS</a>
            </div>

            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul id=\"active\" class=\"nav navbar-nav side-nav\">
                    <li class=\"selected\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("parc_info_ajouter");
        echo "\"><i class=\"glyphicon glyphicon-hdd\"></i> Ajouter un matériel </a></li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("parc_info_rechercher");
        echo "\"><i class=\"glyphicon glyphicon-search\"></i>  Recherche multicritère </a></li>
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("parc_info_edition");
        echo "\"><i class=\"glyphicon glyphicon-print\"></i> Edition de rapport </a></li>
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
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        </div>
    </div>
    </body>
</html>
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
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
        return array (  123 => 54,  118 => 53,  110 => 55,  107 => 54,  105 => 53,  88 => 39,  84 => 38,  80 => 37,  72 => 32,  53 => 16,  49 => 15,  45 => 14,  40 => 12,  36 => 11,  32 => 10,  21 => 1,);
    }
}
