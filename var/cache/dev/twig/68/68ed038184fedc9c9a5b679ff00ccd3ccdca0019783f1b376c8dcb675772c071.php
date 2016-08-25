<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8d868e8b8529eedffa5bf012d6b5da491d00cf5996c6fbd2324e90af1f00b2e1 extends Twig_Template
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
        $__internal_2363c0d8a0223a80c898db2fda500f77a895777d9e7bf8af22b0360e0279baf2 = $this->env->getExtension("native_profiler");
        $__internal_2363c0d8a0223a80c898db2fda500f77a895777d9e7bf8af22b0360e0279baf2->enter($__internal_2363c0d8a0223a80c898db2fda500f77a895777d9e7bf8af22b0360e0279baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2363c0d8a0223a80c898db2fda500f77a895777d9e7bf8af22b0360e0279baf2->leave($__internal_2363c0d8a0223a80c898db2fda500f77a895777d9e7bf8af22b0360e0279baf2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
