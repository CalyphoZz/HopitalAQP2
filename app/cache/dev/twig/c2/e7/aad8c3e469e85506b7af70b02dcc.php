<?php

/* bundlePPEMission2BootstrapBundle:Default:infos.html.twig */
class __TwigTemplate_c2e7aad8c3e469e85506b7af70b02dcc extends Twig_Template
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
        echo "<h1> Informations </h1>
<p> Pour faire votre entrée à l'hôpital, veuillez passer à l'accueil. Si vous souhaitez rendre visite à une patient, les horaires sont entre 10h et 16h pour la plupart des services. Les chiens ne sont pas admis dans l'établissement. </p>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:infos.html.twig";
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
