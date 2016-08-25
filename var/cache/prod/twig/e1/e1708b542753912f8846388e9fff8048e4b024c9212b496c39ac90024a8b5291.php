<?php

/* :main:index.html.twig */
class __TwigTemplate_39e1e94d9a03d7c45fc0a3e03f94394c4335db11e7d395640a70ba1674ff3234 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " </b> ";
            if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 1)) {
                echo "  - <b>ADMINISTRATOR</b>";
            }
            echo "</p>
                \t<p> Twój adres email do powiadomień to: <b> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
            echo " </b></p>
                  ";
            // line 12
            if (((isset($context["is_admin"]) ? $context["is_admin"] : null) == 0)) {
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
        return array (  68 => 19,  63 => 16,  60 => 15,  56 => 13,  54 => 12,  50 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
