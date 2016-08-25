<?php

/* :main:index.html.twig */
class __TwigTemplate_7a056f35316453b2459a5ddbe95e79b204c46107f3963160dee68ec24fc9b612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_592e7fb2a0174a5f815390560437fc1aa61dea1f86476ec0fb91f936745927c0 = $this->env->getExtension("native_profiler");
        $__internal_592e7fb2a0174a5f815390560437fc1aa61dea1f86476ec0fb91f936745927c0->enter($__internal_592e7fb2a0174a5f815390560437fc1aa61dea1f86476ec0fb91f936745927c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592e7fb2a0174a5f815390560437fc1aa61dea1f86476ec0fb91f936745927c0->leave($__internal_592e7fb2a0174a5f815390560437fc1aa61dea1f86476ec0fb91f936745927c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c649c5cf3b5fb111b3a2f12b4d12ec9a6e075fce753a2d5ced52786f972dd56 = $this->env->getExtension("native_profiler");
        $__internal_8c649c5cf3b5fb111b3a2f12b4d12ec9a6e075fce753a2d5ced52786f972dd56->enter($__internal_8c649c5cf3b5fb111b3a2f12b4d12ec9a6e075fce753a2d5ced52786f972dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t   ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "\t\t\t     \t<h1 class=\"login-heading\"><strong>Witam.</strong>Miłego korzystania ;) .</h1>
                \t<p> Zalogowano jako <b> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </b> ";
            if (((isset($context["is_admin"]) ? $context["is_admin"] : $this->getContext($context, "is_admin")) == 1)) {
                echo "  - <b>ADMINISTRATOR</b>";
            }
            echo "</p>
                \t<p> Twój adres email do powiadomień to: <b> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo " </b></p>
                  ";
            // line 12
            if (((isset($context["is_admin"]) ? $context["is_admin"] : $this->getContext($context, "is_admin")) == 0)) {
                // line 13
                echo "                    <p>W celu zmiany adresu email skontaktuj się z administratorem</p>
                  ";
            }
            // line 15
            echo "               ";
        } else {
            // line 16
            echo "               \t<p><h1 class=\"login-heading\"><strong>Witam.</strong>Aby skorzystać z aplikacji proszę się <a href=\"/login\">zalogować</a>.</h1></p>
               \t<p><h1 class=\"login-heading\">Albo skorzystać z <b><a href=\"/register\">formularza rejestracyjnego</a></b></h1></p>
           ";
        }
        // line 19
        echo "\t\t</div>
    </div>
</div>

";
        
        $__internal_8c649c5cf3b5fb111b3a2f12b4d12ec9a6e075fce753a2d5ced52786f972dd56->leave($__internal_8c649c5cf3b5fb111b3a2f12b4d12ec9a6e075fce753a2d5ced52786f972dd56_prof);

    }

    public function getTemplateName()
    {
        return ":main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  72 => 16,  69 => 15,  65 => 13,  63 => 12,  59 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			   {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 			     	<h1 class="login-heading"><strong>Witam.</strong>Miłego korzystania ;) .</h1>*/
/*                 	<p> Zalogowano jako <b> {{ app.user.username }} </b> {% if is_admin == 1  %}  - <b>ADMINISTRATOR</b>{% endif %}</p>*/
/*                 	<p> Twój adres email do powiadomień to: <b> {{ app.user.email }} </b></p>*/
/*                   {% if is_admin == 0 %}*/
/*                     <p>W celu zmiany adresu email skontaktuj się z administratorem</p>*/
/*                   {% endif %}*/
/*                {% else %}*/
/*                	<p><h1 class="login-heading"><strong>Witam.</strong>Aby skorzystać z aplikacji proszę się <a href="/login">zalogować</a>.</h1></p>*/
/*                	<p><h1 class="login-heading">Albo skorzystać z <b><a href="/register">formularza rejestracyjnego</a></b></h1></p>*/
/*            {% endif %}*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
