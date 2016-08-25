<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fffc13deb841482aa1ca63eb82e36504ab81b7c3e9fb8583a4faed87c431f716 extends Twig_Template
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
        $__internal_f79168c277d61e13233057936e26bac45e3cd0b8fd160384d67344bc608f0eeb = $this->env->getExtension("native_profiler");
        $__internal_f79168c277d61e13233057936e26bac45e3cd0b8fd160384d67344bc608f0eeb->enter($__internal_f79168c277d61e13233057936e26bac45e3cd0b8fd160384d67344bc608f0eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f79168c277d61e13233057936e26bac45e3cd0b8fd160384d67344bc608f0eeb->leave($__internal_f79168c277d61e13233057936e26bac45e3cd0b8fd160384d67344bc608f0eeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
