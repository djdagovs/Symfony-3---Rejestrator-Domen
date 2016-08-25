<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bf40e46eff2b784fd49060bab515f9f4d21564c9bd0f144edfc27de0849534c1 extends Twig_Template
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
        $__internal_52cf07d4e6ce5c1348429f80472c217a64799fa17f4f7d03d659e6b4d5664767 = $this->env->getExtension("native_profiler");
        $__internal_52cf07d4e6ce5c1348429f80472c217a64799fa17f4f7d03d659e6b4d5664767->enter($__internal_52cf07d4e6ce5c1348429f80472c217a64799fa17f4f7d03d659e6b4d5664767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_52cf07d4e6ce5c1348429f80472c217a64799fa17f4f7d03d659e6b4d5664767->leave($__internal_52cf07d4e6ce5c1348429f80472c217a64799fa17f4f7d03d659e6b4d5664767_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
