<?php

/* bundlePPEMission2BootstrapBundle:Default:personnel.html.twig */
class __TwigTemplate_1d64afd483f5205d08a837baa40104f9 extends Twig_Template
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
        echo "<h1> Personnel </h1>
<p id=\"categorie\"> Médecins : </p>
<p> Vandamme Abigaelle ; Debaudringhien Quentin ; Martel Gaetan ; Vinci Alexis ; Chaibi Fehd </p>
<p id=\"categorie\"> Infirmiers : </p>
<p> Jacek Thibault ; Bernard Maxime ; Bocquet Rémi ; Lagdem Mohammed </p>
<p id=\"categorie\"> Aide soignant(e)s </p>
<p> Mathieu Sommet ; Antoine Daniel ; Bruce Benraman </p></br></br>
<p id=\"petit\"><u> Vous souhaitez postuler ? Par ici </u></p>
<div id=\"btnPostuler\">
<input type=\"button\" class=\"btn btn-success\" value=\"Postuler\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:personnel.html.twig";
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
