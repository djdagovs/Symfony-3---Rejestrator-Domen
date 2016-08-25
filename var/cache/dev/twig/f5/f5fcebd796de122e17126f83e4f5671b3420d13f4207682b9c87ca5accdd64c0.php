<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_986aaef7b45593b30f52d18b8fa9903af892cf2ec5ac07d1ca7bb7e389a0e7ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd9f4203d3b17eaff03c73c5dac56fbe96dbe399ebe5a93d2cac908b79746dc2 = $this->env->getExtension("native_profiler");
        $__internal_cd9f4203d3b17eaff03c73c5dac56fbe96dbe399ebe5a93d2cac908b79746dc2->enter($__internal_cd9f4203d3b17eaff03c73c5dac56fbe96dbe399ebe5a93d2cac908b79746dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9f4203d3b17eaff03c73c5dac56fbe96dbe399ebe5a93d2cac908b79746dc2->leave($__internal_cd9f4203d3b17eaff03c73c5dac56fbe96dbe399ebe5a93d2cac908b79746dc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19717e95e40a1874982c6b46d513aae11f4cecd38787b27fabd13e4f10bd07a1 = $this->env->getExtension("native_profiler");
        $__internal_19717e95e40a1874982c6b46d513aae11f4cecd38787b27fabd13e4f10bd07a1->enter($__internal_19717e95e40a1874982c6b46d513aae11f4cecd38787b27fabd13e4f10bd07a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19717e95e40a1874982c6b46d513aae11f4cecd38787b27fabd13e4f10bd07a1->leave($__internal_19717e95e40a1874982c6b46d513aae11f4cecd38787b27fabd13e4f10bd07a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_669d96482c8eab5ca5d42aae8a4221ac7347ba028a04ce40432335cbf56d21fc = $this->env->getExtension("native_profiler");
        $__internal_669d96482c8eab5ca5d42aae8a4221ac7347ba028a04ce40432335cbf56d21fc->enter($__internal_669d96482c8eab5ca5d42aae8a4221ac7347ba028a04ce40432335cbf56d21fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_669d96482c8eab5ca5d42aae8a4221ac7347ba028a04ce40432335cbf56d21fc->leave($__internal_669d96482c8eab5ca5d42aae8a4221ac7347ba028a04ce40432335cbf56d21fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
