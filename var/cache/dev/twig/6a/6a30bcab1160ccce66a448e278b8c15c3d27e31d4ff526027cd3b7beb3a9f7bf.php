<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6f899c8b0fe4c18ce6d6a8ef3b2c6781f8cf9fe4f63f73d33d0ec5cab463798f extends Twig_Template
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
        $__internal_dbdc8495ccc911e2db527e657bec351e7b0ff6b560f9a113eb2386fc81415a51 = $this->env->getExtension("native_profiler");
        $__internal_dbdc8495ccc911e2db527e657bec351e7b0ff6b560f9a113eb2386fc81415a51->enter($__internal_dbdc8495ccc911e2db527e657bec351e7b0ff6b560f9a113eb2386fc81415a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dbdc8495ccc911e2db527e657bec351e7b0ff6b560f9a113eb2386fc81415a51->leave($__internal_dbdc8495ccc911e2db527e657bec351e7b0ff6b560f9a113eb2386fc81415a51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
