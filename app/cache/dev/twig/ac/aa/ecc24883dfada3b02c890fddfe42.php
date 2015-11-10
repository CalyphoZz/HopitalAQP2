<?php

/* bundlePPEMission2BootstrapBundle:Default:personnel.html.twig */
class __TwigTemplate_acaaecc24883dfada3b02c890fddfe42 extends Twig_Template
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
<div class=\"col-md-6\" id=\"tableauMedecin\">
<table class=\"table table-bordered\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesMedecins"]) ? $context["lesMedecins"] : $this->getContext($context, "lesMedecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            // line 8
            echo "
<tr class=\"warning\">
\t<td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "getNom", array(), "method"), "html", null, true);
            echo " </td>
\t<td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "getPrenom", array(), "method"), "html", null, true);
            echo " </td>
\t<td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "getTelephone", array(), "method"), "html", null, true);
            echo " </td>
\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bundle_ppe_mission2_bootstrap_modifMedecin", array("id" => $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "getId", array(), "method"))), "html", null, true);
            echo "\"> Modifier </a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
</div>


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
        return array (  66 => 16,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
