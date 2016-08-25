<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_177ff43c8d24386fcdf95ebe449a5ea9f76b664502e8f8eebb9af2c4566233e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc24725742c33e72582489d8c2506cb7eae47c5dea9a6d9c38be4fcbd0017361 = $this->env->getExtension("native_profiler");
        $__internal_fc24725742c33e72582489d8c2506cb7eae47c5dea9a6d9c38be4fcbd0017361->enter($__internal_fc24725742c33e72582489d8c2506cb7eae47c5dea9a6d9c38be4fcbd0017361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_fc24725742c33e72582489d8c2506cb7eae47c5dea9a6d9c38be4fcbd0017361->leave($__internal_fc24725742c33e72582489d8c2506cb7eae47c5dea9a6d9c38be4fcbd0017361_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
