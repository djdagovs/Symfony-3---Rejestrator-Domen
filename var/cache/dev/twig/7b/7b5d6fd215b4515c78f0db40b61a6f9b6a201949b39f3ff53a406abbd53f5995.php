<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_15052cb5ce47c04a5b26c25bca1c24668a232abc79d7668891007115db620856 extends Twig_Template
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
        $__internal_6d36537bb77b28a5dbfa7bad5f404db4853b2a60ce4795016cfd8e605ae8a50b = $this->env->getExtension("native_profiler");
        $__internal_6d36537bb77b28a5dbfa7bad5f404db4853b2a60ce4795016cfd8e605ae8a50b->enter($__internal_6d36537bb77b28a5dbfa7bad5f404db4853b2a60ce4795016cfd8e605ae8a50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6d36537bb77b28a5dbfa7bad5f404db4853b2a60ce4795016cfd8e605ae8a50b->leave($__internal_6d36537bb77b28a5dbfa7bad5f404db4853b2a60ce4795016cfd8e605ae8a50b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
