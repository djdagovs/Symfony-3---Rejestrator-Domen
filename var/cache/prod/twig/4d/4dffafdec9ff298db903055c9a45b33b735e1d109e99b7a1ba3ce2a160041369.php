<?php

/* main/dodaj/domene.twig */
class __TwigTemplate_9bb2553bfa76daa5c62af513478be0a018813a261a19f777d63910cb46b602c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/dodaj/domene.twig", 1);
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

<h2>Dodaj domene   <a href=\"/domeny\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>



";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'widget');
        echo "
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'form_end');
        echo "

<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-sm-12\">Dodaj domene do serwera</div>
\t\t    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'form_start');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'widget');
        echo "
\t\t    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : null), 'form_end');
        echo "
\t\t</div>
   \t</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "main/dodaj/domene.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  60 => 19,  56 => 18,  47 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <h2>Dodaj domene   <a href="/domeny"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* */
/* */
/* */
/* {{form_start(form_dodaj_domene)}}*/
/* {{form_widget(form_dodaj_domene)}}*/
/* {{form_end(form_dodaj_domene)}}*/
/* */
/* <div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<div class="col-sm-12">Dodaj domene do serwera</div>*/
/* 		    {{form_start(form_dodaj_domene)}}*/
/* 		    {{form_widget(form_dodaj_domene)}}*/
/* 		    {{form_end(form_dodaj_domene)}}*/
/* 		</div>*/
/*    	</div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
