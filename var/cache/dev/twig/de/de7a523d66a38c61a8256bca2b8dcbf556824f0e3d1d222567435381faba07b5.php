<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cad09637d482d9643725fb2524c2a3345371aa67bc5c3a3aba167597fea7b023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a0d7a1d319569eb5ebede639f2a63d4656b1ad6002d84c19c10c528bf58404a4 = $this->env->getExtension("native_profiler");
        $__internal_a0d7a1d319569eb5ebede639f2a63d4656b1ad6002d84c19c10c528bf58404a4->enter($__internal_a0d7a1d319569eb5ebede639f2a63d4656b1ad6002d84c19c10c528bf58404a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d7a1d319569eb5ebede639f2a63d4656b1ad6002d84c19c10c528bf58404a4->leave($__internal_a0d7a1d319569eb5ebede639f2a63d4656b1ad6002d84c19c10c528bf58404a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bcabae90bc7e1c1eaae689152f50ba569accc1bb7134b4d9c611b743cf02ef1 = $this->env->getExtension("native_profiler");
        $__internal_1bcabae90bc7e1c1eaae689152f50ba569accc1bb7134b4d9c611b743cf02ef1->enter($__internal_1bcabae90bc7e1c1eaae689152f50ba569accc1bb7134b4d9c611b743cf02ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1bcabae90bc7e1c1eaae689152f50ba569accc1bb7134b4d9c611b743cf02ef1->leave($__internal_1bcabae90bc7e1c1eaae689152f50ba569accc1bb7134b4d9c611b743cf02ef1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92a89690c0d05d7e37318aaf08aec6dcf712c10f0dfe7f24ad90d91ec00b59e7 = $this->env->getExtension("native_profiler");
        $__internal_92a89690c0d05d7e37318aaf08aec6dcf712c10f0dfe7f24ad90d91ec00b59e7->enter($__internal_92a89690c0d05d7e37318aaf08aec6dcf712c10f0dfe7f24ad90d91ec00b59e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92a89690c0d05d7e37318aaf08aec6dcf712c10f0dfe7f24ad90d91ec00b59e7->leave($__internal_92a89690c0d05d7e37318aaf08aec6dcf712c10f0dfe7f24ad90d91ec00b59e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97628b38e25b843bff2c2227b26c92cfbd5b42f369089797d0adb79076c6a195 = $this->env->getExtension("native_profiler");
        $__internal_97628b38e25b843bff2c2227b26c92cfbd5b42f369089797d0adb79076c6a195->enter($__internal_97628b38e25b843bff2c2227b26c92cfbd5b42f369089797d0adb79076c6a195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97628b38e25b843bff2c2227b26c92cfbd5b42f369089797d0adb79076c6a195->leave($__internal_97628b38e25b843bff2c2227b26c92cfbd5b42f369089797d0adb79076c6a195_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
