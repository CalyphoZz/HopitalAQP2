<?php

/* bundlePPEMission2BootstrapBundle:Default:login.html.twig */
class __TwigTemplate_2e002ce537a4b03453da51e36c08f0ea extends Twig_Template
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
        echo "
<div id=\"formulaireMedecin\"/>
<form action=\"\" method=\"post\">
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

</form>
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_creation", array());
        echo "\">Créer un compte</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "bundlePPEMission2BootstrapBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
