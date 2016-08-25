<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_dc6cf8ca401aa4edf62d026a44717ed8ce00894a15a162a0e193b798f6fa5703 extends Twig_Template
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
        $__internal_bd7f37fe835741ae370091c636c942ddb18a6454a06d2820f3abb6146ecce307 = $this->env->getExtension("native_profiler");
        $__internal_bd7f37fe835741ae370091c636c942ddb18a6454a06d2820f3abb6146ecce307->enter($__internal_bd7f37fe835741ae370091c636c942ddb18a6454a06d2820f3abb6146ecce307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_bd7f37fe835741ae370091c636c942ddb18a6454a06d2820f3abb6146ecce307->leave($__internal_bd7f37fe835741ae370091c636c942ddb18a6454a06d2820f3abb6146ecce307_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
