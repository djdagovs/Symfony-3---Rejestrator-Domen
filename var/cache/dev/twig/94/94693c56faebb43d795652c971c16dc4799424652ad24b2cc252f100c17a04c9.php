<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_6a89d68d6e2114525d916996f4392b54edea4e1ad87af4fcbb011a3360a1c52d extends Twig_Template
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
        $__internal_2bb39a0c1ddbfe8ae2c13140f693bcf26d05417aaa060b580bc803b39b91eaea = $this->env->getExtension("native_profiler");
        $__internal_2bb39a0c1ddbfe8ae2c13140f693bcf26d05417aaa060b580bc803b39b91eaea->enter($__internal_2bb39a0c1ddbfe8ae2c13140f693bcf26d05417aaa060b580bc803b39b91eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2bb39a0c1ddbfe8ae2c13140f693bcf26d05417aaa060b580bc803b39b91eaea->leave($__internal_2bb39a0c1ddbfe8ae2c13140f693bcf26d05417aaa060b580bc803b39b91eaea_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
