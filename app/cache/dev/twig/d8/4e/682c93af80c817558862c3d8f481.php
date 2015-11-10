<?php

/* bundlePPEMission2BootstrapBundle:Default:plan.html.twig */
class __TwigTemplate_d84e682c93af80c817558862c3d8f481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bundlePPEMission2BootstrapBundle:Default:base.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bundlePPEMission2BootstrapBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "<h1> Plan d'accès </h1>
<p id=\"planDesc\"> Vous pouvez accéder à l'hopital en voiture par la rue Eugène Millon ou par la rue Blomet, ou en métro par les arrêts 8 & 12, en bus par les arrêts 62,80,39 </p>
<img id =\"plan\" src=\"http://www.hopital.cognacq-jay.fr/images/plans/plan_1.gif\"/>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
