<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_04c18bbc3f68389a919c3ae5d66730976b451bf6f5b28c324c5af9b7fb030b7e extends Twig_Template
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
        $__internal_8545052f35648aaec4a28c3017fc5290e722a0b6256b24eca6ed621d45c68264 = $this->env->getExtension("native_profiler");
        $__internal_8545052f35648aaec4a28c3017fc5290e722a0b6256b24eca6ed621d45c68264->enter($__internal_8545052f35648aaec4a28c3017fc5290e722a0b6256b24eca6ed621d45c68264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_8545052f35648aaec4a28c3017fc5290e722a0b6256b24eca6ed621d45c68264->leave($__internal_8545052f35648aaec4a28c3017fc5290e722a0b6256b24eca6ed621d45c68264_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
