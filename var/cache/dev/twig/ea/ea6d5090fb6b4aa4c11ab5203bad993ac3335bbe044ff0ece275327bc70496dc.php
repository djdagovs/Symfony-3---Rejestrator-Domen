<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_7a02df62864f1780c0adcfafbfcf1ce1f5449245c65aee82fc9531b1f01e6908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdc5b5de5a97ef2218f7df96dbfd8fdecaeb5b2758fe0c87142d3d20f8afbc4f = $this->env->getExtension("native_profiler");
        $__internal_bdc5b5de5a97ef2218f7df96dbfd8fdecaeb5b2758fe0c87142d3d20f8afbc4f->enter($__internal_bdc5b5de5a97ef2218f7df96dbfd8fdecaeb5b2758fe0c87142d3d20f8afbc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc5b5de5a97ef2218f7df96dbfd8fdecaeb5b2758fe0c87142d3d20f8afbc4f->leave($__internal_bdc5b5de5a97ef2218f7df96dbfd8fdecaeb5b2758fe0c87142d3d20f8afbc4f_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9ba1edcd61b8f98945d4f9bdb10790c6cfc4fd24498411c6cb6b457be096b99b = $this->env->getExtension("native_profiler");
        $__internal_9ba1edcd61b8f98945d4f9bdb10790c6cfc4fd24498411c6cb6b457be096b99b->enter($__internal_9ba1edcd61b8f98945d4f9bdb10790c6cfc4fd24498411c6cb6b457be096b99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_9ba1edcd61b8f98945d4f9bdb10790c6cfc4fd24498411c6cb6b457be096b99b->leave($__internal_9ba1edcd61b8f98945d4f9bdb10790c6cfc4fd24498411c6cb6b457be096b99b_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0bb489d3dfee6a8f43c72bfcfdfccb0ce6d69a2e14fc8ec60b42c95a9746f4e9 = $this->env->getExtension("native_profiler");
        $__internal_0bb489d3dfee6a8f43c72bfcfdfccb0ce6d69a2e14fc8ec60b42c95a9746f4e9->enter($__internal_0bb489d3dfee6a8f43c72bfcfdfccb0ce6d69a2e14fc8ec60b42c95a9746f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_0bb489d3dfee6a8f43c72bfcfdfccb0ce6d69a2e14fc8ec60b42c95a9746f4e9->leave($__internal_0bb489d3dfee6a8f43c72bfcfdfccb0ce6d69a2e14fc8ec60b42c95a9746f4e9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdf902a8780a84980c00c98582c357cda0384f95273ce188297a44fb8527305f = $this->env->getExtension("native_profiler");
        $__internal_cdf902a8780a84980c00c98582c357cda0384f95273ce188297a44fb8527305f->enter($__internal_cdf902a8780a84980c00c98582c357cda0384f95273ce188297a44fb8527305f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1>Error</h1>

            <div class=\"error-message\">
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "safeMessage", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
";
        
        $__internal_cdf902a8780a84980c00c98582c357cda0384f95273ce188297a44fb8527305f->leave($__internal_cdf902a8780a84980c00c98582c357cda0384f95273ce188297a44fb8527305f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title 'ERROR' %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1>Error</h1>*/
/* */
/*             <div class="error-message">*/
/*                 <p>{{ exception.safeMessage }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
