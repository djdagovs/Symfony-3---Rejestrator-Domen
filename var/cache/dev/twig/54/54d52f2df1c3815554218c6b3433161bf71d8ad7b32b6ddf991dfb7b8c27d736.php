<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_fafe9cdf019b69788d8f4f4bd78dc34062a7054de3125b23f635c917d85e23b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dc584209c7f9d7baa420aad69071523992d2125499a69511b13586bc5cdf973 = $this->env->getExtension("native_profiler");
        $__internal_9dc584209c7f9d7baa420aad69071523992d2125499a69511b13586bc5cdf973->enter($__internal_9dc584209c7f9d7baa420aad69071523992d2125499a69511b13586bc5cdf973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "</html>
";
        
        $__internal_9dc584209c7f9d7baa420aad69071523992d2125499a69511b13586bc5cdf973->leave($__internal_9dc584209c7f9d7baa420aad69071523992d2125499a69511b13586bc5cdf973_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_08966f674c5b1e26593ad53a680e975ff743aebdf12fac64d3fdb50dd247b074 = $this->env->getExtension("native_profiler");
        $__internal_08966f674c5b1e26593ad53a680e975ff743aebdf12fac64d3fdb50dd247b074->enter($__internal_08966f674c5b1e26593ad53a680e975ff743aebdf12fac64d3fdb50dd247b074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_08966f674c5b1e26593ad53a680e975ff743aebdf12fac64d3fdb50dd247b074->leave($__internal_08966f674c5b1e26593ad53a680e975ff743aebdf12fac64d3fdb50dd247b074_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_390163b50235c2547e52a840b65ae296bfc3ec497631c7fc0dc18d7c9cdc2902 = $this->env->getExtension("native_profiler");
        $__internal_390163b50235c2547e52a840b65ae296bfc3ec497631c7fc0dc18d7c9cdc2902->enter($__internal_390163b50235c2547e52a840b65ae296bfc3ec497631c7fc0dc18d7c9cdc2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_390163b50235c2547e52a840b65ae296bfc3ec497631c7fc0dc18d7c9cdc2902->leave($__internal_390163b50235c2547e52a840b65ae296bfc3ec497631c7fc0dc18d7c9cdc2902_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_58eb4c28ed4f41062da17b284a41fa76b6a172dbe2d86521aa1574a6f32696b1 = $this->env->getExtension("native_profiler");
        $__internal_58eb4c28ed4f41062da17b284a41fa76b6a172dbe2d86521aa1574a6f32696b1->enter($__internal_58eb4c28ed4f41062da17b284a41fa76b6a172dbe2d86521aa1574a6f32696b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_58eb4c28ed4f41062da17b284a41fa76b6a172dbe2d86521aa1574a6f32696b1->leave($__internal_58eb4c28ed4f41062da17b284a41fa76b6a172dbe2d86521aa1574a6f32696b1_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_9031b1ea25f339c090736287ea617077919d94b57d31250f2fd1f343e7ed6eb9 = $this->env->getExtension("native_profiler");
        $__internal_9031b1ea25f339c090736287ea617077919d94b57d31250f2fd1f343e7ed6eb9->enter($__internal_9031b1ea25f339c090736287ea617077919d94b57d31250f2fd1f343e7ed6eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 41
        echo "
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9031b1ea25f339c090736287ea617077919d94b57d31250f2fd1f343e7ed6eb9->leave($__internal_9031b1ea25f339c090736287ea617077919d94b57d31250f2fd1f343e7ed6eb9_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_ab31b433e10fe3bc6de06b98450aa790cf7409a49f4a98adda911dcd8a6a79c1 = $this->env->getExtension("native_profiler");
        $__internal_ab31b433e10fe3bc6de06b98450aa790cf7409a49f4a98adda911dcd8a6a79c1->enter($__internal_ab31b433e10fe3bc6de06b98450aa790cf7409a49f4a98adda911dcd8a6a79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 29
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_ab31b433e10fe3bc6de06b98450aa790cf7409a49f4a98adda911dcd8a6a79c1->leave($__internal_ab31b433e10fe3bc6de06b98450aa790cf7409a49f4a98adda911dcd8a6a79c1_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c460167db9015f3ca7248665cdb8b05a0515bc6e9d206a7a55a9ba376ed7a1 = $this->env->getExtension("native_profiler");
        $__internal_86c460167db9015f3ca7248665cdb8b05a0515bc6e9d206a7a55a9ba376ed7a1->enter($__internal_86c460167db9015f3ca7248665cdb8b05a0515bc6e9d206a7a55a9ba376ed7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 123
        echo "        </div>

        ";
        // line 125
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 126
        echo "
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 128
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </body>
    ";
        
        $__internal_86c460167db9015f3ca7248665cdb8b05a0515bc6e9d206a7a55a9ba376ed7a1->leave($__internal_86c460167db9015f3ca7248665cdb8b05a0515bc6e9d206a7a55a9ba376ed7a1_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_36ec2a4911de99056ec967a9478e341708744da6c6cb69c431a868751385f5eb = $this->env->getExtension("native_profiler");
        $__internal_36ec2a4911de99056ec967a9478e341708744da6c6cb69c431a868751385f5eb->enter($__internal_36ec2a4911de99056ec967a9478e341708744da6c6cb69c431a868751385f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_36ec2a4911de99056ec967a9478e341708744da6c6cb69c431a868751385f5eb->leave($__internal_36ec2a4911de99056ec967a9478e341708744da6c6cb69c431a868751385f5eb_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0c79139d894084026677cf5d5aa465de9007cab3c1b3371f085801974bfe3b00 = $this->env->getExtension("native_profiler");
        $__internal_0c79139d894084026677cf5d5aa465de9007cab3c1b3371f085801974bfe3b00->enter($__internal_0c79139d894084026677cf5d5aa465de9007cab3c1b3371f085801974bfe3b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_0c79139d894084026677cf5d5aa465de9007cab3c1b3371f085801974bfe3b00->leave($__internal_0c79139d894084026677cf5d5aa465de9007cab3c1b3371f085801974bfe3b00_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_d4913c639fc352aae73aab3c3d1895fb61a170b84717af195a275e4f97b8d955 = $this->env->getExtension("native_profiler");
        $__internal_d4913c639fc352aae73aab3c3d1895fb61a170b84717af195a275e4f97b8d955->enter($__internal_d4913c639fc352aae73aab3c3d1895fb61a170b84717af195a275e4f97b8d955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 55
        echo "            <header class=\"main-header\">
            ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 92
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "            </div>
        ";
        
        $__internal_d4913c639fc352aae73aab3c3d1895fb61a170b84717af195a275e4f97b8d955->leave($__internal_d4913c639fc352aae73aab3c3d1895fb61a170b84717af195a275e4f97b8d955_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_bbe9b4a5ca8609193541872aa6c8599857c4ea041193df31e8665ab432f8a2f7 = $this->env->getExtension("native_profiler");
        $__internal_bbe9b4a5ca8609193541872aa6c8599857c4ea041193df31e8665ab432f8a2f7->enter($__internal_bbe9b4a5ca8609193541872aa6c8599857c4ea041193df31e8665ab432f8a2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 63
        $this->displayBlock('header_logo', $context, $blocks);
        // line 68
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 71
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 86
        echo "                    </div>
                </nav>
            ";
        
        $__internal_bbe9b4a5ca8609193541872aa6c8599857c4ea041193df31e8665ab432f8a2f7->leave($__internal_bbe9b4a5ca8609193541872aa6c8599857c4ea041193df31e8665ab432f8a2f7_prof);

    }

    // line 63
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_ad0e97d27fa4045fe29f3f68eab6959fc4a599bade688aa333d52e467ff68964 = $this->env->getExtension("native_profiler");
        $__internal_ad0e97d27fa4045fe29f3f68eab6959fc4a599bade688aa333d52e467ff68964->enter($__internal_ad0e97d27fa4045fe29f3f68eab6959fc4a599bade688aa333d52e467ff68964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 64
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 65
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_ad0e97d27fa4045fe29f3f68eab6959fc4a599bade688aa333d52e467ff68964->leave($__internal_ad0e97d27fa4045fe29f3f68eab6959fc4a599bade688aa333d52e467ff68964_prof);

    }

    // line 71
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_e1ee1b954cab1e5406ab963da83271e68203cb23634560c5074606d3d83adeb5 = $this->env->getExtension("native_profiler");
        $__internal_e1ee1b954cab1e5406ab963da83271e68203cb23634560c5074606d3d83adeb5->enter($__internal_e1ee1b954cab1e5406ab963da83271e68203cb23634560c5074606d3d83adeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 72
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 74
        $this->displayBlock('user_menu', $context, $blocks);
        // line 83
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_e1ee1b954cab1e5406ab963da83271e68203cb23634560c5074606d3d83adeb5->leave($__internal_e1ee1b954cab1e5406ab963da83271e68203cb23634560c5074606d3d83adeb5_prof);

    }

    // line 74
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_6914aa2658c42d813a99627c0777f2c84a079bf4f40f0ae08a70e20056f12d27 = $this->env->getExtension("native_profiler");
        $__internal_6914aa2658c42d813a99627c0777f2c84a079bf4f40f0ae08a70e20056f12d27->enter($__internal_6914aa2658c42d813a99627c0777f2c84a079bf4f40f0ae08a70e20056f12d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 75
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 77
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 78
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 80
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 82
        echo "                                ";
        
        $__internal_6914aa2658c42d813a99627c0777f2c84a079bf4f40f0ae08a70e20056f12d27->leave($__internal_6914aa2658c42d813a99627c0777f2c84a079bf4f40f0ae08a70e20056f12d27_prof);

    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8d2b6204fbec606258d69a7b894f9cb19c4d7821054815bd5cd2febaf49ef642 = $this->env->getExtension("native_profiler");
        $__internal_8d2b6204fbec606258d69a7b894f9cb19c4d7821054815bd5cd2febaf49ef642->enter($__internal_8d2b6204fbec606258d69a7b894f9cb19c4d7821054815bd5cd2febaf49ef642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 93
        echo "                <section class=\"sidebar\">
                    ";
        // line 94
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 101
        echo "                </section>
            ";
        
        $__internal_8d2b6204fbec606258d69a7b894f9cb19c4d7821054815bd5cd2febaf49ef642->leave($__internal_8d2b6204fbec606258d69a7b894f9cb19c4d7821054815bd5cd2febaf49ef642_prof);

    }

    // line 94
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_555b974135814eaf128aa8837daa2802c38a571cc43cbb46941ba7291d5e7ab7 = $this->env->getExtension("native_profiler");
        $__internal_555b974135814eaf128aa8837daa2802c38a571cc43cbb46941ba7291d5e7ab7->enter($__internal_555b974135814eaf128aa8837daa2802c38a571cc43cbb46941ba7291d5e7ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 95
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 96
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 99
        echo "
                    ";
        
        $__internal_555b974135814eaf128aa8837daa2802c38a571cc43cbb46941ba7291d5e7ab7->leave($__internal_555b974135814eaf128aa8837daa2802c38a571cc43cbb46941ba7291d5e7ab7_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e699c57cbfbd303d0857721d99d3728948dbe768b4c309fd043c029a5a5d40e = $this->env->getExtension("native_profiler");
        $__internal_5e699c57cbfbd303d0857721d99d3728948dbe768b4c309fd043c029a5a5d40e->enter($__internal_5e699c57cbfbd303d0857721d99d3728948dbe768b4c309fd043c029a5a5d40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 107
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 110
        echo "
                <section class=\"content-header\">
                ";
        // line 112
        $this->displayBlock('content_header', $context, $blocks);
        // line 115
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 119
        echo "                </section>
            ";
        
        $__internal_5e699c57cbfbd303d0857721d99d3728948dbe768b4c309fd043c029a5a5d40e->leave($__internal_5e699c57cbfbd303d0857721d99d3728948dbe768b4c309fd043c029a5a5d40e_prof);

    }

    // line 107
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_f966f378db26e861b95c95973d3277fe1d84b7579a5f774693fb86fe26cd2fee = $this->env->getExtension("native_profiler");
        $__internal_f966f378db26e861b95c95973d3277fe1d84b7579a5f774693fb86fe26cd2fee->enter($__internal_f966f378db26e861b95c95973d3277fe1d84b7579a5f774693fb86fe26cd2fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 108
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_f966f378db26e861b95c95973d3277fe1d84b7579a5f774693fb86fe26cd2fee->leave($__internal_f966f378db26e861b95c95973d3277fe1d84b7579a5f774693fb86fe26cd2fee_prof);

    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_428dce3781b8a78657fcc2ab02599fdb8f42465cec5efd1a56093f1c7e090260 = $this->env->getExtension("native_profiler");
        $__internal_428dce3781b8a78657fcc2ab02599fdb8f42465cec5efd1a56093f1c7e090260->enter($__internal_428dce3781b8a78657fcc2ab02599fdb8f42465cec5efd1a56093f1c7e090260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 113
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_428dce3781b8a78657fcc2ab02599fdb8f42465cec5efd1a56093f1c7e090260->leave($__internal_428dce3781b8a78657fcc2ab02599fdb8f42465cec5efd1a56093f1c7e090260_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_52ec6c001dc5395e984670b9786629a795f36f4c95b7cb3ca49130470234954f = $this->env->getExtension("native_profiler");
        $__internal_52ec6c001dc5395e984670b9786629a795f36f4c95b7cb3ca49130470234954f->enter($__internal_52ec6c001dc5395e984670b9786629a795f36f4c95b7cb3ca49130470234954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_52ec6c001dc5395e984670b9786629a795f36f4c95b7cb3ca49130470234954f->leave($__internal_52ec6c001dc5395e984670b9786629a795f36f4c95b7cb3ca49130470234954f_prof);

    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        $__internal_db6d8aae05bd5f11694459575190107f4d5826626ebdf6bd3187ded89c2227ab = $this->env->getExtension("native_profiler");
        $__internal_db6d8aae05bd5f11694459575190107f4d5826626ebdf6bd3187ded89c2227ab->enter($__internal_db6d8aae05bd5f11694459575190107f4d5826626ebdf6bd3187ded89c2227ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_db6d8aae05bd5f11694459575190107f4d5826626ebdf6bd3187ded89c2227ab->leave($__internal_db6d8aae05bd5f11694459575190107f4d5826626ebdf6bd3187ded89c2227ab_prof);

    }

    // line 125
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8a8bcfe474acf8ff02eb0d548d2063bf2beae290f8458d079cbaafed6a41bfd3 = $this->env->getExtension("native_profiler");
        $__internal_8a8bcfe474acf8ff02eb0d548d2063bf2beae290f8458d079cbaafed6a41bfd3->enter($__internal_8a8bcfe474acf8ff02eb0d548d2063bf2beae290f8458d079cbaafed6a41bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_8a8bcfe474acf8ff02eb0d548d2063bf2beae290f8458d079cbaafed6a41bfd3->leave($__internal_8a8bcfe474acf8ff02eb0d548d2063bf2beae290f8458d079cbaafed6a41bfd3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 125,  539 => 118,  519 => 113,  513 => 112,  503 => 108,  497 => 107,  489 => 119,  487 => 118,  482 => 115,  480 => 112,  476 => 110,  473 => 107,  467 => 106,  459 => 99,  457 => 96,  455 => 95,  449 => 94,  441 => 101,  439 => 94,  436 => 93,  430 => 92,  423 => 82,  417 => 80,  411 => 78,  409 => 77,  403 => 75,  397 => 74,  388 => 83,  386 => 74,  382 => 72,  376 => 71,  366 => 65,  357 => 64,  351 => 63,  342 => 86,  340 => 71,  335 => 68,  333 => 63,  326 => 59,  322 => 57,  316 => 56,  308 => 121,  306 => 106,  301 => 103,  299 => 92,  294 => 89,  292 => 56,  289 => 55,  283 => 54,  262 => 52,  254 => 130,  245 => 128,  241 => 127,  238 => 126,  236 => 125,  232 => 123,  230 => 54,  220 => 52,  214 => 51,  196 => 29,  190 => 28,  181 => 42,  178 => 41,  175 => 28,  169 => 27,  157 => 24,  154 => 23,  148 => 22,  138 => 14,  132 => 12,  126 => 11,  114 => 9,  106 => 132,  104 => 51,  97 => 47,  93 => 46,  89 => 44,  87 => 27,  84 => 26,  82 => 22,  79 => 21,  70 => 19,  66 => 18,  63 => 17,  61 => 11,  56 => 9,  46 => 2,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'normal',*/
/*                         sidebarExpandOnHover: false,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/*         {% endblock head_javascript %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*             {% block header %}*/
/*                 <nav class="navbar" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/* */
/*                     <div id="header-logo">*/
/*                         {% block header_logo %}*/
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                                 {{ easyadmin_config('site_name')|raw }}*/
/*                             </a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/*                     {% block header_custom_menu %}*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% endblock header_custom_menu %}*/
/*                     </div>*/
/*                 </nav>*/
/*             {% endblock header %}*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
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
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
