<?php

/* bundlePPEMission2BootstrapBundle:Default:services.html.twig */
class __TwigTemplate_ee68fd9007e4408d23cb91945832a744 extends Twig_Template
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
        echo "<h1> Services </h1>
<ul id=\"serv\">
<li> Grand brulés </li>
<li> Cancérologie </li>
<li> Cardiologie </li>
<li> Réanimation </li>
<li> Maternité </li>
</ul>
<img class=\"img-circle\" id=\"servic\" src=\"http://www.mutuelle-infirmier.fr/images/infirmiere.jpg\"/>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:services.html.twig";
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
