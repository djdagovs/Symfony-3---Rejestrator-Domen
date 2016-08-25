<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_675ed228197384dcd3eb68e01d48c034abb7af1375626912e0fb96c44591f7d2 extends Twig_Template
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
        $__internal_9468913219fb8b8f99fa2b114c37a30a99e128492f2edc1c5d98277dfcdad7bc = $this->env->getExtension("native_profiler");
        $__internal_9468913219fb8b8f99fa2b114c37a30a99e128492f2edc1c5d98277dfcdad7bc->enter($__internal_9468913219fb8b8f99fa2b114c37a30a99e128492f2edc1c5d98277dfcdad7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9468913219fb8b8f99fa2b114c37a30a99e128492f2edc1c5d98277dfcdad7bc->leave($__internal_9468913219fb8b8f99fa2b114c37a30a99e128492f2edc1c5d98277dfcdad7bc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
