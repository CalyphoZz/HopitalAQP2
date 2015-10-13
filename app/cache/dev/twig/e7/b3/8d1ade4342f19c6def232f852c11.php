<?php

/* bundlePPEMission2BootstrapBundle:Default:horaires.html.twig */
class __TwigTemplate_e7b38d1ade4342f19c6def232f852c11 extends Twig_Template
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
        echo "<h1> Horaires </h1>
<div class=\"col-md-6\" id=\"tabl\">
<table class=\"table table-bordered\">
<tr><th class=\"info\"> Service </th><th class=\"info\"> Horaire ouverture </th><th class=\"info\"> Horaire fermeture </th> </tr>
<tr><td class=\"danger\"> Caféteria </td><td class=\"danger\"> 11h </td><td class=\"danger\"> 14h </td></tr>
<tr><td class=\"danger\"> Cardiologie </td><td class=\"danger\"> 6h </td><td class=\"danger\"> 20h </td></tr>
<tr><td class=\"danger\"> Grand brulés </td><td class=\"danger\"> 6h </td><td class=\"danger\"> 20h </td></tr>
<tr><td class=\"danger\"> Maternité </td><td class=\"danger\"> 8h </td><td class=\"danger\"> 18h </td></tr>
<tr><td class=\"danger\"> Secrétariat </td><td class=\"danger\"> 7h </td><td class=\"danger\"> 19h </td></tr>
<tr><td class=\"danger\"> Réanimation </td><td class=\"danger\"> 7h </td><td class=\"danger\"> 20h </td></tr>
<tr><td class=\"danger\"> Cancérologie </td><td class=\"danger\"> 8h </td><td class=\"danger\"> 18h </td></tr>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:horaires.html.twig";
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
