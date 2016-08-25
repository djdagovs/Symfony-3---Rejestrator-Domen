<?php

/* main/dodaj/serwer.twig */
class __TwigTemplate_d48aeaddb348ff44df5d01d6764067ee0d686587a74db405bdd1fc3554987526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/dodaj/serwer.twig", 1);
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
        $__internal_112b46b82153bb87515b0f94ed9691a4b864dfd10dc1712a0aa2875f397393af = $this->env->getExtension("native_profiler");
        $__internal_112b46b82153bb87515b0f94ed9691a4b864dfd10dc1712a0aa2875f397393af->enter($__internal_112b46b82153bb87515b0f94ed9691a4b864dfd10dc1712a0aa2875f397393af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/dodaj/serwer.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112b46b82153bb87515b0f94ed9691a4b864dfd10dc1712a0aa2875f397393af->leave($__internal_112b46b82153bb87515b0f94ed9691a4b864dfd10dc1712a0aa2875f397393af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc728cb50e19063020adcdb4247c7f978c850507041da9b76a10041d4a15451c = $this->env->getExtension("native_profiler");
        $__internal_dc728cb50e19063020adcdb4247c7f978c850507041da9b76a10041d4a15451c->enter($__internal_dc728cb50e19063020adcdb4247c7f978c850507041da9b76a10041d4a15451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Dodaj serwer   <a href=\"/serwery\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
<p> Powiąż relacją serwer i domenę</p>


";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : $this->getContext($context, "form_dodaj_serwer")), 'form_start');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : $this->getContext($context, "form_dodaj_serwer")), 'widget');
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : $this->getContext($context, "form_dodaj_serwer")), 'form_end');
        echo "


";
        
        $__internal_dc728cb50e19063020adcdb4247c7f978c850507041da9b76a10041d4a15451c->leave($__internal_dc728cb50e19063020adcdb4247c7f978c850507041da9b76a10041d4a15451c_prof);

    }

    public function getTemplateName()
    {
        return "main/dodaj/serwer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h2>Dodaj serwer   <a href="/serwery"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* <p> Powiąż relacją serwer i domenę</p>*/
/* */
/* */
/* {{form_start(form_dodaj_serwer)}}*/
/* {{form_widget(form_dodaj_serwer)}}*/
/* {{form_end(form_dodaj_serwer)}}*/
/* */
/* */
/* {% endblock %}*/
