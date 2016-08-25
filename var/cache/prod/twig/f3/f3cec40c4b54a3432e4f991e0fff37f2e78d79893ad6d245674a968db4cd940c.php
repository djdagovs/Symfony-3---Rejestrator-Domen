<?php

/* base.html.twig */
class __TwigTemplate_64135277812b3c9963a462cb5436b8013644d603abc8b8ea9a839b39b88eb629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
            echo "                <li><a href=\"/domeny\">Domeny</a></li>
                <li><a href=\"/serwery\">Serwery</a></li> 
                <li><a href=\"/firmy\">Firmy</a></li> 
                ";
            // line 39
            if (array_key_exists("is_admin", $context)) {
                // line 40
                echo "                  ";
                if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                    // line 41
                    echo "                    <li><a href=\"/admin\">Ustawienia</a></li> 
                  ";
                }
                // line 43
                echo "                ";
            }
            // line 44
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    Wyloguj
                </a></li>
            ";
        } else {
            // line 48
            echo "               <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj</a></li>
               <li><a href=\"/register\">Zarejestruj</a></li>
            ";
        }
        // line 51
        echo "          </ul>
        </div>
      </nav>
        <h3 class=\"text-muted title\">Monitoring Domen</h3>
      </div>

      <div class=\"row page\">
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "      </div>

      <footer class=\"footer\">
        <p>&copy; Janusz Jaśkowski 2016 </p>
      </footer>

    </div> <!-- /container -->

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "  </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "System Monitorowania Domen!";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367") : $this->env->getExtension('asset')->getAssetUrl("css/2c8c367.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "8ef5d4e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ef5d4e") : $this->env->getExtension('asset')->getAssetUrl("js/8ef5d4e.js");
            // line 72
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 72,  161 => 71,  158 => 70,  153 => 58,  144 => 18,  138 => 17,  135 => 16,  129 => 11,  124 => 75,  122 => 70,  109 => 59,  107 => 58,  98 => 51,  91 => 48,  83 => 44,  80 => 43,  76 => 41,  73 => 40,  71 => 39,  66 => 36,  64 => 35,  48 => 21,  46 => 16,  38 => 11,  34 => 10,  23 => 1,);
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
/*                 <li><a href="/domeny">Domeny</a></li>*/
/*                 <li><a href="/serwery">Serwery</a></li> */
/*                 <li><a href="/firmy">Firmy</a></li> */
/*                 {% if is_admin is defined %}*/
/*                   {% if is_admin == 1 %}*/
/*                     <li><a href="/admin">Ustawienia</a></li> */
/*                   {% endif %}*/
/*                 {% endif %}*/
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
/*       <div class="row page">*/
/*         {% block body %}{% endblock %}*/
/*       </div>*/
/* */
/*       <footer class="footer">*/
/*         <p>&copy; Janusz Jaśkowski 2016 </p>*/
/*       </footer>*/
/* */
/*     </div> <!-- /container -->*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/* {% block javascripts %}*/
/*     {% javascripts 'bundles/app/js/*' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/*   </body>*/
/* </html>*/
