<?php

/* EasyAdminBundle:default/includes:_delete_form.html.twig */
class __TwigTemplate_f8832d3746484e9d70d6f09872e43273a18330deaaf1b7b07cd8c707715e6fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b04c2c7c2d9dde28a938b7e7a1b4de197ec0379b9b5cdfb742c0e0c4ea37af0 = $this->env->getExtension("native_profiler");
        $__internal_0b04c2c7c2d9dde28a938b7e7a1b4de197ec0379b9b5cdfb742c0e0c4ea37af0->enter($__internal_0b04c2c7c2d9dde28a938b7e7a1b4de197ec0379b9b5cdfb742c0e0c4ea37af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("action" => (($this->getAttribute($this->getAttribute(        // line 3
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "vars", array()), "action", array()) . "&referer=") . (isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.content", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.cancel", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "delete", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\">
                        ";
            // line 24
            if ($this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_delete_action"]) ? $context["_delete_action"] : $this->getContext($context, "_delete_action")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_modal.action", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0b04c2c7c2d9dde28a938b7e7a1b4de197ec0379b9b5cdfb742c0e0c4ea37af0->leave($__internal_0b04c2c7c2d9dde28a938b7e7a1b4de197ec0379b9b5cdfb742c0e0c4ea37af0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  65 => 25,  59 => 24,  56 => 23,  53 => 22,  51 => 21,  45 => 18,  38 => 14,  34 => 13,  26 => 7,  24 => 3,  23 => 2,  22 => 1,);
    }
}
/* {{*/
/*     form(delete_form, {*/
/*         action: delete_form.vars.action ~ '&referer=' ~ referer,*/
/*         method: 'DELETE',*/
/*         attr: { id: 'delete-form', style: 'display: none' }*/
/*     })*/
/* }}*/
/* */
/* <div id="modal-delete" class="modal fade">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/*                 <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>*/
/*                 <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" data-dismiss="modal" class="btn">*/
/*                     {{ 'action.cancel'|trans(_trans_parameters) }}*/
/*                 </button>*/
/* */
/*                 {% if easyadmin_action_is_enabled(view, 'delete', _entity_config.name) %}*/
/*                     {% set _delete_action = easyadmin_get_action(view, 'delete', _entity_config.name) %}*/
/*                     <button type="button" data-dismiss="modal" class="btn btn-danger" id="modal-delete-button">*/
/*                         {% if _delete_action.icon %}<i class="fa fa-{{ _delete_action.icon }}"></i>{% endif %}*/
/*                         {{ 'delete_modal.action'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                     </button>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
