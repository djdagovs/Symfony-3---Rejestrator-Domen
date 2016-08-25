<?php

/* :easy_admin:layout.html.twig */
class __TwigTemplate_f609a1c074ae599a5335a6279bdf991b3111d996ac621068753ea874ad4545e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":easy_admin:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'wrapper' => array($this, 'block_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"wrapper\">
        ";
        // line 6
        $this->displayBlock('wrapper', $context, $blocks);
        // line 28
        echo "        </div>

        ";
        // line 30
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 33
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "


";
    }

    // line 6
    public function block_wrapper($context, array $blocks = array())
    {
        // line 7
        echo "


            <div class=\"content-wrapper\">
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>
        ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 15
        echo "
                <section class=\"content-header\">
                ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 20
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 24
        echo "                </section>
            ";
    }

    // line 12
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 13
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
    }

    public function block_content_title($context, array $blocks = array())
    {
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
    }

    // line 30
    public function block_body_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":easy_admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 30,  137 => 23,  126 => 18,  123 => 17,  116 => 13,  113 => 12,  108 => 24,  106 => 23,  101 => 20,  99 => 17,  95 => 15,  92 => 12,  89 => 11,  84 => 26,  82 => 11,  76 => 7,  73 => 6,  66 => 35,  57 => 33,  53 => 32,  50 => 31,  48 => 30,  44 => 28,  42 => 6,  38 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/* */
/* */
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
