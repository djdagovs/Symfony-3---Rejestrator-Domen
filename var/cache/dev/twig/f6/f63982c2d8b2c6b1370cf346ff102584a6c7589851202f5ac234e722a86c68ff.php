<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_3c95aa014a706754ad46796c88a7ac90196b3086e5609a1597d4f273ddb81f52 extends Twig_Template
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
        $__internal_91085627f1f9830052eaa27f903772493785f88f225a847dcede7fc3701df8a6 = $this->env->getExtension("native_profiler");
        $__internal_91085627f1f9830052eaa27f903772493785f88f225a847dcede7fc3701df8a6->enter($__internal_91085627f1f9830052eaa27f903772493785f88f225a847dcede7fc3701df8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_91085627f1f9830052eaa27f903772493785f88f225a847dcede7fc3701df8a6->leave($__internal_91085627f1f9830052eaa27f903772493785f88f225a847dcede7fc3701df8a6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
