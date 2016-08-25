<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_8fa9bd2e137ae4d6d44345c9fb2d0c092be16e63a6deb111cd481535ab5ea8f8 extends Twig_Template
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
        $__internal_05f21ef033396bdeaf17aae0ef2e2e2a27dba0675b966dba5427e1958d5802c2 = $this->env->getExtension("native_profiler");
        $__internal_05f21ef033396bdeaf17aae0ef2e2e2a27dba0675b966dba5427e1958d5802c2->enter($__internal_05f21ef033396bdeaf17aae0ef2e2e2a27dba0675b966dba5427e1958d5802c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_05f21ef033396bdeaf17aae0ef2e2e2a27dba0675b966dba5427e1958d5802c2->leave($__internal_05f21ef033396bdeaf17aae0ef2e2e2a27dba0675b966dba5427e1958d5802c2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
