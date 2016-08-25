<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e56843d3f75a78e83f96c1ddbb80b79744a03ea1f26305a9700cb385a4b8963f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159c032090624b5bc6de51be9739af8778596c72bb81b8ec1dbb77fce066315b = $this->env->getExtension("native_profiler");
        $__internal_159c032090624b5bc6de51be9739af8778596c72bb81b8ec1dbb77fce066315b->enter($__internal_159c032090624b5bc6de51be9739af8778596c72bb81b8ec1dbb77fce066315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159c032090624b5bc6de51be9739af8778596c72bb81b8ec1dbb77fce066315b->leave($__internal_159c032090624b5bc6de51be9739af8778596c72bb81b8ec1dbb77fce066315b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9ac309b6981a689735c767f34ec9b61e9e3cd727a41773224db80ba63a00628 = $this->env->getExtension("native_profiler");
        $__internal_b9ac309b6981a689735c767f34ec9b61e9e3cd727a41773224db80ba63a00628->enter($__internal_b9ac309b6981a689735c767f34ec9b61e9e3cd727a41773224db80ba63a00628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b9ac309b6981a689735c767f34ec9b61e9e3cd727a41773224db80ba63a00628->leave($__internal_b9ac309b6981a689735c767f34ec9b61e9e3cd727a41773224db80ba63a00628_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c36b47fa3dbac750a0f1d1d20556f2155b9e4e86ffb1b05382969bf56611eee = $this->env->getExtension("native_profiler");
        $__internal_0c36b47fa3dbac750a0f1d1d20556f2155b9e4e86ffb1b05382969bf56611eee->enter($__internal_0c36b47fa3dbac750a0f1d1d20556f2155b9e4e86ffb1b05382969bf56611eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0c36b47fa3dbac750a0f1d1d20556f2155b9e4e86ffb1b05382969bf56611eee->leave($__internal_0c36b47fa3dbac750a0f1d1d20556f2155b9e4e86ffb1b05382969bf56611eee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4791cb15cc9839aa9f751faa0f5f0feae813e18e36460d5bb19da1dcf484808 = $this->env->getExtension("native_profiler");
        $__internal_f4791cb15cc9839aa9f751faa0f5f0feae813e18e36460d5bb19da1dcf484808->enter($__internal_f4791cb15cc9839aa9f751faa0f5f0feae813e18e36460d5bb19da1dcf484808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f4791cb15cc9839aa9f751faa0f5f0feae813e18e36460d5bb19da1dcf484808->leave($__internal_f4791cb15cc9839aa9f751faa0f5f0feae813e18e36460d5bb19da1dcf484808_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
