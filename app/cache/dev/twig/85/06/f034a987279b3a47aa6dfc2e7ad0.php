<?php

/* bundlePPEMission2BootstrapBundle:Default:accueil.html.twig */
class __TwigTemplate_8506f034a987279b3a47aa6dfc2e7ad0 extends Twig_Template
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
        echo "<h1><u> Accueil </u></h1>
<p class=\"col-md-6\"> Afin que votre hospitalisation se passe dans les meilleures conditions, notre organisation est centrée sur la recherche permanente de la qualité de la part des praticiens, du personnel et de l’encadrement.
Le patient est donc au cœur de notre dispositif qui doit concourir à lui offrir à la fois des conditions d’accès aux soins adaptées en termes d’efficacité et de sécurité et des conditions de séjour confortables et agréables. L’établissement met en œuvre des démarches dans les domaines du traitement de la douleur, de la maîtrise de la qualité et de la prévention des risques. </p>
<img id=\"logo\" src=\"http://www.clker.com/cliparts/1/4/7/0/1207314060955899368hospital%20blue.svg.med.png\"/>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:accueil.html.twig";
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
