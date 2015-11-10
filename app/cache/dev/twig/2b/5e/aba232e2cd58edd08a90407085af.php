<?php

/* bundlePPEMission2BootstrapBundle:Default:modifMedecin.html.twig */
class __TwigTemplate_2b5eaba232e2cd58edd08a90407085af extends Twig_Template
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
        echo "<h1><u> Modification médecin </u></h1>
<div id=\"formulaireMedecin\"/>
<form action=\"\" method=\"post\">
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" value=\"Modifier le médecin\"/>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:modifMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,);
    }
}
