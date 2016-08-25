<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_fdb4febce9c807743d820f50eba3422766b90db2e9f0c9f332df4a47069fbf52 extends Twig_Template
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
        $__internal_ef9e21c982e7796859bd64be726bbbd41b60327cd6a2002ba0a008e1fe7909ce = $this->env->getExtension("native_profiler");
        $__internal_ef9e21c982e7796859bd64be726bbbd41b60327cd6a2002ba0a008e1fe7909ce->enter($__internal_ef9e21c982e7796859bd64be726bbbd41b60327cd6a2002ba0a008e1fe7909ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_ef9e21c982e7796859bd64be726bbbd41b60327cd6a2002ba0a008e1fe7909ce->leave($__internal_ef9e21c982e7796859bd64be726bbbd41b60327cd6a2002ba0a008e1fe7909ce_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
