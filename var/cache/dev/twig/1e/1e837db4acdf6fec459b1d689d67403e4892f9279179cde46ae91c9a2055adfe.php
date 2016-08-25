<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_58e5bb78b06c031e3cd60479b341eb5b11d9e0e299d4119bc3501b5b1013921c extends Twig_Template
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
        $__internal_1457db7ff5f20edbdb6da404fe344d6fe27e1348aba94e5785cdb05e4b4b840e = $this->env->getExtension("native_profiler");
        $__internal_1457db7ff5f20edbdb6da404fe344d6fe27e1348aba94e5785cdb05e4b4b840e->enter($__internal_1457db7ff5f20edbdb6da404fe344d6fe27e1348aba94e5785cdb05e4b4b840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1457db7ff5f20edbdb6da404fe344d6fe27e1348aba94e5785cdb05e4b4b840e->leave($__internal_1457db7ff5f20edbdb6da404fe344d6fe27e1348aba94e5785cdb05e4b4b840e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
