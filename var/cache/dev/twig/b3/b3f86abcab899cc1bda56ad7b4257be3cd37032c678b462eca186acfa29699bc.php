<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b81879d7b2bd674b8796f5761ccff0af4ae26fb429d576ba271dfc8d7469cf2c extends Twig_Template
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
        $__internal_c157c414e6cb004917280906cf1d9b1eb21612c60bb19cecd003a9859690539a = $this->env->getExtension("native_profiler");
        $__internal_c157c414e6cb004917280906cf1d9b1eb21612c60bb19cecd003a9859690539a->enter($__internal_c157c414e6cb004917280906cf1d9b1eb21612c60bb19cecd003a9859690539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c157c414e6cb004917280906cf1d9b1eb21612c60bb19cecd003a9859690539a->leave($__internal_c157c414e6cb004917280906cf1d9b1eb21612c60bb19cecd003a9859690539a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
