<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_f8b09bb46b97ad3145e2ea6cf0a8f81af9cce78cdc45bb76adda786d64a59b0a extends Twig_Template
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
        $__internal_ef3354eb705bb37b9814f5d697a09338bfd6dc11cc6d70c77f43be0aa78d61d1 = $this->env->getExtension("native_profiler");
        $__internal_ef3354eb705bb37b9814f5d697a09338bfd6dc11cc6d70c77f43be0aa78d61d1->enter($__internal_ef3354eb705bb37b9814f5d697a09338bfd6dc11cc6d70c77f43be0aa78d61d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ef3354eb705bb37b9814f5d697a09338bfd6dc11cc6d70c77f43be0aa78d61d1->leave($__internal_ef3354eb705bb37b9814f5d697a09338bfd6dc11cc6d70c77f43be0aa78d61d1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */
