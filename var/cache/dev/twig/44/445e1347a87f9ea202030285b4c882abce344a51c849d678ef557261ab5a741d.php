<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_e0a08646d15e92fa019b8a88b81eb2009b3a6a53a64bd83496ecaa332ccd08f3 extends Twig_Template
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
        $__internal_b871b21ca5bca12eed39a0334d114369b459f5d01a072d831b9ce56f668bd833 = $this->env->getExtension("native_profiler");
        $__internal_b871b21ca5bca12eed39a0334d114369b459f5d01a072d831b9ce56f668bd833->enter($__internal_b871b21ca5bca12eed39a0334d114369b459f5d01a072d831b9ce56f668bd833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_b871b21ca5bca12eed39a0334d114369b459f5d01a072d831b9ce56f668bd833->leave($__internal_b871b21ca5bca12eed39a0334d114369b459f5d01a072d831b9ce56f668bd833_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
