<?php

/* main/dodaj/domene.twig */
class __TwigTemplate_4c37f9ff848dd31faf52f35b6b832e9f5841b6b0bb8d8ba1713d5a7bf672198c extends Twig_Template
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
        $__internal_371bd47032615dae673276d585d4db9560c2e36655f963b1aef5562511d65853 = $this->env->getExtension("native_profiler");
        $__internal_371bd47032615dae673276d585d4db9560c2e36655f963b1aef5562511d65853->enter($__internal_371bd47032615dae673276d585d4db9560c2e36655f963b1aef5562511d65853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/dodaj/domene.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371bd47032615dae673276d585d4db9560c2e36655f963b1aef5562511d65853->leave($__internal_371bd47032615dae673276d585d4db9560c2e36655f963b1aef5562511d65853_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d4b712126379f4e3669941ac398bf4763449b3d0201fe7513e4dd5886f1c1a = $this->env->getExtension("native_profiler");
        $__internal_67d4b712126379f4e3669941ac398bf4763449b3d0201fe7513e4dd5886f1c1a->enter($__internal_67d4b712126379f4e3669941ac398bf4763449b3d0201fe7513e4dd5886f1c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h2>Dodaj domene   <a href=\"/domeny\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>



";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'widget');
        echo "
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'form_end');
        echo "

<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-sm-12\">Dodaj domene do serwera</div>
\t\t    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'form_start');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'widget');
        echo "
\t\t    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domene"]) ? $context["form_dodaj_domene"] : $this->getContext($context, "form_dodaj_domene")), 'form_end');
        echo "
\t\t</div>
   \t</div>
</div>



";
        
        $__internal_67d4b712126379f4e3669941ac398bf4763449b3d0201fe7513e4dd5886f1c1a->leave($__internal_67d4b712126379f4e3669941ac398bf4763449b3d0201fe7513e4dd5886f1c1a_prof);

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
        return array (  73 => 20,  69 => 19,  65 => 18,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
