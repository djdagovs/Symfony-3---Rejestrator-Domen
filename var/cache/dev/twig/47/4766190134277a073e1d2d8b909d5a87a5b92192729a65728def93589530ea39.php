<?php

/* base.html.twig */
class __TwigTemplate_0cbe38604b3916163cc1d82a4498c2dc23938f659a3523a9df59aad7a482b244 extends Twig_Template
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
        $__internal_b8e0dff90e178f19b86b80b5b3a6e7eb9b9ccee841f948f1a8a2a8470d33ba2c = $this->env->getExtension("native_profiler");
        $__internal_b8e0dff90e178f19b86b80b5b3a6e7eb9b9ccee841f948f1a8a2a8470d33ba2c->enter($__internal_b8e0dff90e178f19b86b80b5b3a6e7eb9b9ccee841f948f1a8a2a8470d33ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                if (((isset($context["is_admin"]) ? $context["is_admin"] : $this->getContext($context, "is_admin")) == 1)) {
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
        
        $__internal_b8e0dff90e178f19b86b80b5b3a6e7eb9b9ccee841f948f1a8a2a8470d33ba2c->leave($__internal_b8e0dff90e178f19b86b80b5b3a6e7eb9b9ccee841f948f1a8a2a8470d33ba2c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_757a16a37e8319d83148f446589e50beba722a191b62449d085f004c249a28f1 = $this->env->getExtension("native_profiler");
        $__internal_757a16a37e8319d83148f446589e50beba722a191b62449d085f004c249a28f1->enter($__internal_757a16a37e8319d83148f446589e50beba722a191b62449d085f004c249a28f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Monitorowania Domen!";
        
        $__internal_757a16a37e8319d83148f446589e50beba722a191b62449d085f004c249a28f1->leave($__internal_757a16a37e8319d83148f446589e50beba722a191b62449d085f004c249a28f1_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d71fa9f935c0a567917297ea36df9e899f55cd082754f9454e6011fe91fd980 = $this->env->getExtension("native_profiler");
        $__internal_0d71fa9f935c0a567917297ea36df9e899f55cd082754f9454e6011fe91fd980->enter($__internal_0d71fa9f935c0a567917297ea36df9e899f55cd082754f9454e6011fe91fd980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0d71fa9f935c0a567917297ea36df9e899f55cd082754f9454e6011fe91fd980->leave($__internal_0d71fa9f935c0a567917297ea36df9e899f55cd082754f9454e6011fe91fd980_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c63b4b42f4dce9426338ebd2efe81212c7be1a8f898d8a03665320a2e040d1 = $this->env->getExtension("native_profiler");
        $__internal_68c63b4b42f4dce9426338ebd2efe81212c7be1a8f898d8a03665320a2e040d1->enter($__internal_68c63b4b42f4dce9426338ebd2efe81212c7be1a8f898d8a03665320a2e040d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68c63b4b42f4dce9426338ebd2efe81212c7be1a8f898d8a03665320a2e040d1->leave($__internal_68c63b4b42f4dce9426338ebd2efe81212c7be1a8f898d8a03665320a2e040d1_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf330206337345ca9688d7c77a023cd672d5856f018860b43140a813b20a5057 = $this->env->getExtension("native_profiler");
        $__internal_cf330206337345ca9688d7c77a023cd672d5856f018860b43140a813b20a5057->enter($__internal_cf330206337345ca9688d7c77a023cd672d5856f018860b43140a813b20a5057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "8ef5d4e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8ef5d4e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8ef5d4e.js");
            // line 72
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_cf330206337345ca9688d7c77a023cd672d5856f018860b43140a813b20a5057->leave($__internal_cf330206337345ca9688d7c77a023cd672d5856f018860b43140a813b20a5057_prof);

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
        return array (  194 => 72,  188 => 71,  182 => 70,  171 => 58,  159 => 18,  153 => 17,  147 => 16,  135 => 11,  127 => 75,  125 => 70,  112 => 59,  110 => 58,  101 => 51,  94 => 48,  86 => 44,  83 => 43,  79 => 41,  76 => 40,  74 => 39,  69 => 36,  67 => 35,  51 => 21,  49 => 16,  41 => 11,  37 => 10,  26 => 1,);
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
