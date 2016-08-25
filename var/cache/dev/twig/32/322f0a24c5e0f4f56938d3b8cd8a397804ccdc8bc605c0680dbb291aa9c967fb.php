<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c91c74046dc21765d91bd22617ea7e35fd0ad7f2466aa7ab52a1e4b2d2a61fd2 extends Twig_Template
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
        $__internal_9c241d8aec25c3486cff988efb010f3b32f12b3d6af2880e3a6fee9e09594cb1 = $this->env->getExtension("native_profiler");
        $__internal_9c241d8aec25c3486cff988efb010f3b32f12b3d6af2880e3a6fee9e09594cb1->enter($__internal_9c241d8aec25c3486cff988efb010f3b32f12b3d6af2880e3a6fee9e09594cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9c241d8aec25c3486cff988efb010f3b32f12b3d6af2880e3a6fee9e09594cb1->leave($__internal_9c241d8aec25c3486cff988efb010f3b32f12b3d6af2880e3a6fee9e09594cb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
