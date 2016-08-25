<?php

/* EasyAdminBundle:default/includes:_actions.html.twig */
class __TwigTemplate_f3c602ca616191076d18b0924de64c238bb7631600a631ea7647720c32257e20 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == $this->getAttribute($context["action"], "name", array()))) {
                // line 3
                echo "        ";
                $context["action_href"] = (((($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", array()), "")) : (""))) ? (urldecode($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", array()))) : ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), array("action" => "list")))));
                // line 4
                echo "    ";
            } elseif (("method" == $this->getAttribute($context["action"], "type", array()))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => (isset($context["item_id"]) ? $context["item_id"] : null))));
                // line 6
                echo "    ";
            } elseif (("route" == $this->getAttribute($context["action"], "type", array()))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('routing')->getPath($this->getAttribute($context["action"], "name", array()), twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : null), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => (isset($context["item_id"]) ? $context["item_id"] : null))));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) ? $context["action_href"] : null), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if (($this->getAttribute($context["action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "label", array())))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["action"], "label", array()), twig_array_merge((isset($context["trans_parameters"]) ? $context["trans_parameters"] : null), array("%entity_id%" => (isset($context["item_id"]) ? $context["item_id"] : null))), "messages"), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  60 => 13,  58 => 12,  52 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for action in actions %}*/
/*     {% if 'list' == action.name %}*/
/*         {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}*/
/*     {% elseif 'method' == action.type %}*/
/*         {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}*/
/*     {% elseif 'route' == action.type %}*/
/*         {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}*/
/*     {% endif %}*/
/* */
/*     <a class="{{ action.css_class|default('') }}" href="{{ action_href }}">*/
/*         {%- if action.icon %}<i class="fa fa-{{ action.icon }}"></i> {% endif -%}*/
/*         {%- if action.label is defined and not action.label is empty -%}*/
/*             {{ action.label|trans(trans_parameters|merge({ '%entity_id%': item_id }), 'messages') }}*/
/*         {%- endif -%}*/
/*     </a>*/
/* {% endfor %}*/
/* */
