<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_78fece5d0dac228cbc06eea970584243d196f660e3962277d8eecda545d6a6b4 extends Twig_Template
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
        $__internal_fab01c005dfbf4cf47c47d57ee2aeeece707bae3855e5891cf72432f953a4068 = $this->env->getExtension("native_profiler");
        $__internal_fab01c005dfbf4cf47c47d57ee2aeeece707bae3855e5891cf72432f953a4068->enter($__internal_fab01c005dfbf4cf47c47d57ee2aeeece707bae3855e5891cf72432f953a4068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fab01c005dfbf4cf47c47d57ee2aeeece707bae3855e5891cf72432f953a4068->leave($__internal_fab01c005dfbf4cf47c47d57ee2aeeece707bae3855e5891cf72432f953a4068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
