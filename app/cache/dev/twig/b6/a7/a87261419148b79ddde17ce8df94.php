<?php

/* bundlePPEMission2BootstrapBundle:Default:annuaire.html.twig */
class __TwigTemplate_b6a7a87261419148b79ddde17ce8df94 extends Twig_Template
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
        echo "<h1> Annuaire </h1>
<div id=\"tableau\" class=\"col-md-4\"/>
<table class=\"table table-bordered\">
<tr><th class=\"success\"> Service </th><th class=\"success\"> Numéro du service </th></tr>
<tr><td class=\"warning\"> Secrétariat </td><td class=\"warning\"> 0325685325 </td></tr>
<tr><td class=\"warning\"> Cancérologie </td><td class=\"warning\"> 0356585412 </td></tr>
<tr><td class=\"warning\"> Grand brulés </td><td class=\"warning\"> 0375652352 </td></tr>
<tr><td class=\"warning\"> Cardiologie </td><td class=\"warning\"> 0385685325 </td></tr>
<tr><td class=\"warning\"> Réanimation </td><td class=\"warning\"> 0325665325 </td></tr>
<tr><td class=\"warning\"> Maternité </td><td class=\"warning\"> 0325685879 </td></tr>
<tr><td class=\"warning\"> Dr Martel </td><td class=\"warning\"> 0325885879 </td></tr>
<tr><td class=\"warning\"> Dr Chaibi </td><td class=\"warning\"> 0325665879 </td></tr>
<tr><td class=\"warning\"> Dr Vandamme </td><td class=\"warning\"> 0365859563</td></tr>
</div>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:annuaire.html.twig";
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
