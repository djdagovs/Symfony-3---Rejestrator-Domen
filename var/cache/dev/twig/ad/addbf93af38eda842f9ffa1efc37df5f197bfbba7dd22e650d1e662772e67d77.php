<?php

/* :easy_admin:layout.html.twig */
class __TwigTemplate_9cce449f9ba8cec9ced0e8d0d1da062c461122677f60a99292e4ee6f8cfc4e93 extends Twig_Template
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
        $__internal_82ec39358e8edd9cbdc1f5c3b846e6fbcfc5b6dbc68d5024b0ae319deee86b1f = $this->env->getExtension("native_profiler");
        $__internal_82ec39358e8edd9cbdc1f5c3b846e6fbcfc5b6dbc68d5024b0ae319deee86b1f->enter($__internal_82ec39358e8edd9cbdc1f5c3b846e6fbcfc5b6dbc68d5024b0ae319deee86b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":easy_admin:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ec39358e8edd9cbdc1f5c3b846e6fbcfc5b6dbc68d5024b0ae319deee86b1f->leave($__internal_82ec39358e8edd9cbdc1f5c3b846e6fbcfc5b6dbc68d5024b0ae319deee86b1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8a4576d3acf753a266f423ea232275ece89c7abbe15168d0bb5746f7ff9ea47 = $this->env->getExtension("native_profiler");
        $__internal_a8a4576d3acf753a266f423ea232275ece89c7abbe15168d0bb5746f7ff9ea47->enter($__internal_a8a4576d3acf753a266f423ea232275ece89c7abbe15168d0bb5746f7ff9ea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8a4576d3acf753a266f423ea232275ece89c7abbe15168d0bb5746f7ff9ea47->leave($__internal_a8a4576d3acf753a266f423ea232275ece89c7abbe15168d0bb5746f7ff9ea47_prof);

    }

    // line 6
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_2db880e787d0b6248f3f802c6f68f0c392752d0d4b6923713dbc3f08bafe05f9 = $this->env->getExtension("native_profiler");
        $__internal_2db880e787d0b6248f3f802c6f68f0c392752d0d4b6923713dbc3f08bafe05f9->enter($__internal_2db880e787d0b6248f3f802c6f68f0c392752d0d4b6923713dbc3f08bafe05f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 7
        echo "


            <div class=\"content-wrapper\">
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>
        ";
        
        $__internal_2db880e787d0b6248f3f802c6f68f0c392752d0d4b6923713dbc3f08bafe05f9->leave($__internal_2db880e787d0b6248f3f802c6f68f0c392752d0d4b6923713dbc3f08bafe05f9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e713ef02d1fcaaeb3194872f2b0eecc53f53888e48b0dc9b755431bbb845c432 = $this->env->getExtension("native_profiler");
        $__internal_e713ef02d1fcaaeb3194872f2b0eecc53f53888e48b0dc9b755431bbb845c432->enter($__internal_e713ef02d1fcaaeb3194872f2b0eecc53f53888e48b0dc9b755431bbb845c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e713ef02d1fcaaeb3194872f2b0eecc53f53888e48b0dc9b755431bbb845c432->leave($__internal_e713ef02d1fcaaeb3194872f2b0eecc53f53888e48b0dc9b755431bbb845c432_prof);

    }

    // line 12
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_866047012db9cfd531bae9d2843ca5d7037d098ddfc38e0fd411fd910efacb66 = $this->env->getExtension("native_profiler");
        $__internal_866047012db9cfd531bae9d2843ca5d7037d098ddfc38e0fd411fd910efacb66->enter($__internal_866047012db9cfd531bae9d2843ca5d7037d098ddfc38e0fd411fd910efacb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 13
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_866047012db9cfd531bae9d2843ca5d7037d098ddfc38e0fd411fd910efacb66->leave($__internal_866047012db9cfd531bae9d2843ca5d7037d098ddfc38e0fd411fd910efacb66_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_609a25e60f27b542f654862cb4252ac84a8a0893f42442a4a9f53d5c7f9ff6a1 = $this->env->getExtension("native_profiler");
        $__internal_609a25e60f27b542f654862cb4252ac84a8a0893f42442a4a9f53d5c7f9ff6a1->enter($__internal_609a25e60f27b542f654862cb4252ac84a8a0893f42442a4a9f53d5c7f9ff6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_609a25e60f27b542f654862cb4252ac84a8a0893f42442a4a9f53d5c7f9ff6a1->leave($__internal_609a25e60f27b542f654862cb4252ac84a8a0893f42442a4a9f53d5c7f9ff6a1_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_51f40829334522b14fabe6f5283e6c42933347dc5bbb1933cbcd3f7af7f56da1 = $this->env->getExtension("native_profiler");
        $__internal_51f40829334522b14fabe6f5283e6c42933347dc5bbb1933cbcd3f7af7f56da1->enter($__internal_51f40829334522b14fabe6f5283e6c42933347dc5bbb1933cbcd3f7af7f56da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_51f40829334522b14fabe6f5283e6c42933347dc5bbb1933cbcd3f7af7f56da1->leave($__internal_51f40829334522b14fabe6f5283e6c42933347dc5bbb1933cbcd3f7af7f56da1_prof);

    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        $__internal_9cdd2b99598a09e28df34e425eca55ba89f82688edc4b3e1964e43de8c4b383e = $this->env->getExtension("native_profiler");
        $__internal_9cdd2b99598a09e28df34e425eca55ba89f82688edc4b3e1964e43de8c4b383e->enter($__internal_9cdd2b99598a09e28df34e425eca55ba89f82688edc4b3e1964e43de8c4b383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_9cdd2b99598a09e28df34e425eca55ba89f82688edc4b3e1964e43de8c4b383e->leave($__internal_9cdd2b99598a09e28df34e425eca55ba89f82688edc4b3e1964e43de8c4b383e_prof);

    }

    // line 30
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_abed1dd8442c096b391a79911cd66a7471bfdd5ae49d7faf7795868cbd6b3b93 = $this->env->getExtension("native_profiler");
        $__internal_abed1dd8442c096b391a79911cd66a7471bfdd5ae49d7faf7795868cbd6b3b93->enter($__internal_abed1dd8442c096b391a79911cd66a7471bfdd5ae49d7faf7795868cbd6b3b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_abed1dd8442c096b391a79911cd66a7471bfdd5ae49d7faf7795868cbd6b3b93->leave($__internal_abed1dd8442c096b391a79911cd66a7471bfdd5ae49d7faf7795868cbd6b3b93_prof);

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
        return array (  190 => 30,  179 => 23,  159 => 18,  153 => 17,  143 => 13,  137 => 12,  129 => 24,  127 => 23,  122 => 20,  120 => 17,  116 => 15,  113 => 12,  107 => 11,  99 => 26,  97 => 11,  91 => 7,  85 => 6,  75 => 35,  66 => 33,  62 => 32,  59 => 31,  57 => 30,  53 => 28,  51 => 6,  47 => 4,  41 => 3,  11 => 1,);
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
