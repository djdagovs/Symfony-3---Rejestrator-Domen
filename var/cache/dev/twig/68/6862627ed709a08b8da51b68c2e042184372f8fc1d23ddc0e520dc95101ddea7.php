<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_779dda39f4fcf5a50616d9f32baa174a6267af633e8bb329e19f0c00b4b38995 extends Twig_Template
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
        $__internal_7d7ebf133008de974a8cf2ecdcd43b9ee18a3dbadd7b1951cc294cd655d80f22 = $this->env->getExtension("native_profiler");
        $__internal_7d7ebf133008de974a8cf2ecdcd43b9ee18a3dbadd7b1951cc294cd655d80f22->enter($__internal_7d7ebf133008de974a8cf2ecdcd43b9ee18a3dbadd7b1951cc294cd655d80f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_7d7ebf133008de974a8cf2ecdcd43b9ee18a3dbadd7b1951cc294cd655d80f22->leave($__internal_7d7ebf133008de974a8cf2ecdcd43b9ee18a3dbadd7b1951cc294cd655d80f22_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */
