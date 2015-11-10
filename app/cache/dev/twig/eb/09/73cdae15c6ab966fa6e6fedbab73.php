<?php

/* bundlePPEMission2BootstrapBundle:Default:services.html.twig */
class __TwigTemplate_eb0973cdae15c6ab966fa6e6fedbab73 extends Twig_Template
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
<div class=\"col-md-6\" id=\"tableauMedecin\">
<table class=\"table table-bordered\">
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesServices"]) ? $context["lesServices"] : $this->getContext($context, "lesServices")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "
<tr class=\"warning\">
\t<td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "getIntitule", array(), "method"), "html", null, true);
            echo " </td>
\t<td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "getNumero", array(), "method"), "html", null, true);
            echo " </td>
\t
\t<td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_modifService", array("id" => $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier </a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>
</div>
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
        return array (  62 => 15,  53 => 12,  48 => 10,  44 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
