<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_12954ccd595a2c1cfe5122cd652f68206395929157ec5aef620da55b4f736e52 extends Twig_Template
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
        $__internal_9265ff0dcbb8363f4dc788e82b2df29dcaf5f7d13a53a4639ff8f51a3cd85821 = $this->env->getExtension("native_profiler");
        $__internal_9265ff0dcbb8363f4dc788e82b2df29dcaf5f7d13a53a4639ff8f51a3cd85821->enter($__internal_9265ff0dcbb8363f4dc788e82b2df29dcaf5f7d13a53a4639ff8f51a3cd85821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9265ff0dcbb8363f4dc788e82b2df29dcaf5f7d13a53a4639ff8f51a3cd85821->leave($__internal_9265ff0dcbb8363f4dc788e82b2df29dcaf5f7d13a53a4639ff8f51a3cd85821_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
