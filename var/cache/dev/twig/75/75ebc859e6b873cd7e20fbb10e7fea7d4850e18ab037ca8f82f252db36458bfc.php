<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_21f4443d4de47639fd398239d1981de4f434df6412292f70d55b9a1248e016ea extends Twig_Template
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
        $__internal_51f6f417bf0c12265c2ee98cb61479d6c50e7c0a523b29989f333306c2fbfaf2 = $this->env->getExtension("native_profiler");
        $__internal_51f6f417bf0c12265c2ee98cb61479d6c50e7c0a523b29989f333306c2fbfaf2->enter($__internal_51f6f417bf0c12265c2ee98cb61479d6c50e7c0a523b29989f333306c2fbfaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_51f6f417bf0c12265c2ee98cb61479d6c50e7c0a523b29989f333306c2fbfaf2->leave($__internal_51f6f417bf0c12265c2ee98cb61479d6c50e7c0a523b29989f333306c2fbfaf2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if value == true %}*/
/*     <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/* {% else %}*/
/*     <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/* {% endif %}*/
/* */
