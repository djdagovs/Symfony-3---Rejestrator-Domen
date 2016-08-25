<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_50d9e28539db69cc9fadd85b696ebfe4f70411f1c6f3c687667b392293a32c58 extends Twig_Template
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
        $__internal_766adff564335b5dd562367323eb2c2ad3fc178b14fa699914181190a10260c7 = $this->env->getExtension("native_profiler");
        $__internal_766adff564335b5dd562367323eb2c2ad3fc178b14fa699914181190a10260c7->enter($__internal_766adff564335b5dd562367323eb2c2ad3fc178b14fa699914181190a10260c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_766adff564335b5dd562367323eb2c2ad3fc178b14fa699914181190a10260c7->leave($__internal_766adff564335b5dd562367323eb2c2ad3fc178b14fa699914181190a10260c7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
