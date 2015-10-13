<?php

/* bundlePPEMission2BootstrapBundle:Default:base.html.twig */
class __TwigTemplate_ca86cca0b2397fe4c51ff00337118de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1 id=\"titre\"> Hôpital AQP </h1>
<div id=\"menu\">
<ul>
\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_accueil", array());
        echo "\">Accueil</a>
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_services", array());
        echo "\">Services</a>
\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_personnel", array());
        echo "\">Personnel</a>
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_annuaire", array());
        echo "\">Annuaire</a>
\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_horaires", array());
        echo "\">Horaires</a>
\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_plan", array());
        echo "\">Plan</a>
\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_infos", array());
        echo "\">Informations</a>
</ul>
</div>
";
        // line 20
        $this->displayBlock('corps', $context, $blocks);
    }

    public function block_corps($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  48 => 8,  45 => 7,  39 => 5,  34 => 2,  26 => 22,  24 => 7,  22 => 1,  31 => 1,  28 => 2,);
    }
}
