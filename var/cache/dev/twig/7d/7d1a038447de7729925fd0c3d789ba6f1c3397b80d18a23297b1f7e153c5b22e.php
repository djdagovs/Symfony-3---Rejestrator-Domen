<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_f5aefe10e8531990627e27477aad3ce611980c7a187bcc8f240e7e56bcc40fdc extends Twig_Template
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
        $__internal_ab8c54f96a81a8352cf111f6b77245c4d3c92a2517c60749ea33eb350c493ec4 = $this->env->getExtension("native_profiler");
        $__internal_ab8c54f96a81a8352cf111f6b77245c4d3c92a2517c60749ea33eb350c493ec4->enter($__internal_ab8c54f96a81a8352cf111f6b77245c4d3c92a2517c60749ea33eb350c493ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_ab8c54f96a81a8352cf111f6b77245c4d3c92a2517c60749ea33eb350c493ec4->leave($__internal_ab8c54f96a81a8352cf111f6b77245c4d3c92a2517c60749ea33eb350c493ec4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
