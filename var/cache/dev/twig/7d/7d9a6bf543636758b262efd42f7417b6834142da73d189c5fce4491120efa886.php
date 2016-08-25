<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_970ccb390e3115a6ededd8aed6b126b23b59d43247f25398a85fa91cfd21c505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac527354df3aa67aae1606aade360eea52c0e13c53c6dca386dc4ee1528a7326 = $this->env->getExtension("native_profiler");
        $__internal_ac527354df3aa67aae1606aade360eea52c0e13c53c6dca386dc4ee1528a7326->enter($__internal_ac527354df3aa67aae1606aade360eea52c0e13c53c6dca386dc4ee1528a7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
  </head>

  <body>

    <div class=\"container\">
      <div class=\"header clearfix\">
       <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">Menu</a>
          </div>
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/\">Home</a></li>
            ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                 <li><a href=\"/domeny\">Domeny</a></li>
                <li><a href=\"/serwery\">Serwery</a></li> 
                <li><a href=\"/firmy\">Firmy</a></li> 
                <li><a href=\"/ustawienia\">Ustawienia</a></li> 
                <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    Wyloguj
                </a></li>
            ";
        } else {
            // line 45
            echo "               <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj</a></li>
               <li><a href=\"/register\">Zarejestruj</a></li>
            ";
        }
        // line 48
        echo "          </ul>
        </div>
      </nav>
        <h3 class=\"text-muted title\">Monitoring Domen</h3>
      </div>

        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 55
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
       ";
        // line 60
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 62
        echo " 
      </div>

      <footer class=\"footer\">
        <p>&copy; 2016 interaktywni.pro, Inc.</p>
      </footer>

    </div> <!-- /container -->

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "  </body>
</html>





";
        
        $__internal_ac527354df3aa67aae1606aade360eea52c0e13c53c6dca386dc4ee1528a7326->leave($__internal_ac527354df3aa67aae1606aade360eea52c0e13c53c6dca386dc4ee1528a7326_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cbb7304e47f1fb53a7a383a2329577fc692e0daa23facfe1bfa3c060ebdeed8 = $this->env->getExtension("native_profiler");
        $__internal_0cbb7304e47f1fb53a7a383a2329577fc692e0daa23facfe1bfa3c060ebdeed8->enter($__internal_0cbb7304e47f1fb53a7a383a2329577fc692e0daa23facfe1bfa3c060ebdeed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Monitorowania Domen!";
        
        $__internal_0cbb7304e47f1fb53a7a383a2329577fc692e0daa23facfe1bfa3c060ebdeed8->leave($__internal_0cbb7304e47f1fb53a7a383a2329577fc692e0daa23facfe1bfa3c060ebdeed8_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_000f483233e6128dd2c50a6dc51764217305d4ec4ba927ffd4f271f4aba2fa3b = $this->env->getExtension("native_profiler");
        $__internal_000f483233e6128dd2c50a6dc51764217305d4ec4ba927ffd4f271f4aba2fa3b->enter($__internal_000f483233e6128dd2c50a6dc51764217305d4ec4ba927ffd4f271f4aba2fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_000f483233e6128dd2c50a6dc51764217305d4ec4ba927ffd4f271f4aba2fa3b->leave($__internal_000f483233e6128dd2c50a6dc51764217305d4ec4ba927ffd4f271f4aba2fa3b_prof);

    }

    // line 60
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c009d7fc62bee7f16dc8f7833a274b86a2ae5b52b67fde9381f5e1f7ee33597b = $this->env->getExtension("native_profiler");
        $__internal_c009d7fc62bee7f16dc8f7833a274b86a2ae5b52b67fde9381f5e1f7ee33597b->enter($__internal_c009d7fc62bee7f16dc8f7833a274b86a2ae5b52b67fde9381f5e1f7ee33597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 61
        echo "        
        ";
        
        $__internal_c009d7fc62bee7f16dc8f7833a274b86a2ae5b52b67fde9381f5e1f7ee33597b->leave($__internal_c009d7fc62bee7f16dc8f7833a274b86a2ae5b52b67fde9381f5e1f7ee33597b_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_965ac191203db3698570d09311d4eee8c506e08c1891b3c8cfac8626533487d5 = $this->env->getExtension("native_profiler");
        $__internal_965ac191203db3698570d09311d4eee8c506e08c1891b3c8cfac8626533487d5->enter($__internal_965ac191203db3698570d09311d4eee8c506e08c1891b3c8cfac8626533487d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "


";
        
        $__internal_965ac191203db3698570d09311d4eee8c506e08c1891b3c8cfac8626533487d5->leave($__internal_965ac191203db3698570d09311d4eee8c506e08c1891b3c8cfac8626533487d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 75,  209 => 74,  201 => 61,  195 => 60,  183 => 18,  177 => 17,  171 => 16,  159 => 11,  145 => 79,  143 => 74,  129 => 62,  127 => 60,  124 => 59,  118 => 58,  109 => 56,  104 => 55,  100 => 54,  92 => 48,  85 => 45,  78 => 41,  69 => 36,  67 => 35,  51 => 21,  49 => 16,  41 => 11,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}System Monitorowania Domen!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/* {% block stylesheets %}*/
/*     {% stylesheets 'bundles/app/css/*' filter='cssrewrite' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*        <nav class="navbar navbar-inverse">*/
/*         <div class="container-fluid">*/
/*           <div class="navbar-header">*/
/*             <a class="navbar-brand" href="/">Menu</a>*/
/*           </div>*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="/">Home</a></li>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                  <li><a href="/domeny">Domeny</a></li>*/
/*                 <li><a href="/serwery">Serwery</a></li> */
/*                 <li><a href="/firmy">Firmy</a></li> */
/*                 <li><a href="/ustawienia">Ustawienia</a></li> */
/*                 <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                     Wyloguj*/
/*                 </a></li>*/
/*             {% else %}*/
/*                <li> <a href="{{ path('fos_user_security_login') }}">Zaloguj</a></li>*/
/*                <li><a href="/register">Zarejestruj</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       </nav>*/
/*         <h3 class="text-muted title">Monitoring Domen</h3>*/
/*       </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*        {% block fos_user_content %}*/
/*         */
/*         {% endblock fos_user_content %} */
/*       </div>*/
/* */
/*       <footer class="footer">*/
/*         <p>&copy; 2016 interaktywni.pro, Inc.</p>*/
/*       </footer>*/
/* */
/*     </div> <!-- /container -->*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
