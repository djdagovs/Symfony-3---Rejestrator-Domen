<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_0285f1549ed8a65d1ba60310546cc1ccc1d428c4a9d4ac6f72ddf33a8944da43 extends Twig_Template
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
        $__internal_4c76b5e939b9f33367facd16ccb441af9871acab72468f67b646984e2c2b8f24 = $this->env->getExtension("native_profiler");
        $__internal_4c76b5e939b9f33367facd16ccb441af9871acab72468f67b646984e2c2b8f24->enter($__internal_4c76b5e939b9f33367facd16ccb441af9871acab72468f67b646984e2c2b8f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_4c76b5e939b9f33367facd16ccb441af9871acab72468f67b646984e2c2b8f24->leave($__internal_4c76b5e939b9f33367facd16ccb441af9871acab72468f67b646984e2c2b8f24_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
