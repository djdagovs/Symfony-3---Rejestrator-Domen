<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_ff4347e25f03f38586903ad38c2bbb7dd9898679c6124574b4ea2a945328840c extends Twig_Template
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
        $__internal_19c0545407ca1154311a6eb2d9e82653c57f7483362ceb1092cae196f0043821 = $this->env->getExtension("native_profiler");
        $__internal_19c0545407ca1154311a6eb2d9e82653c57f7483362ceb1092cae196f0043821->enter($__internal_19c0545407ca1154311a6eb2d9e82653c57f7483362ceb1092cae196f0043821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        // line 2
        if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 3
            echo "    ";
            if (("show" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("show.max_results")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if (array_key_exists("link_parameters", $context)) {
                            // line 9
                            echo "                            ";
                            $context["primary_key_value"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), "primary_key_name", array()));
                            // line 10
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("id" => (isset($context["primary_key_value"]) ? $context["primary_key_value"] : $this->getContext($context, "primary_key_value")), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 12
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 14
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "
                ";
                    // line 17
                    $context["_remaining_items"] = (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) - $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("show.max_results"));
                    // line 18
                    echo "                ";
                    if (((isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")) > 0)) {
                        // line 19
                        echo "                    <li>(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("show.remaining_items", (isset($context["_remaining_items"]) ? $context["_remaining_items"] : $this->getContext($context, "_remaining_items")), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 21
                    echo "            </ul>
        ";
                } else {
                    // line 23
                    echo "            <div class=\"empty collection-empty\">
                <span class=\"label label-empty\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
                    echo "</span>
            </div>
        ";
                }
                // line 27
                echo "    ";
            } elseif (("list" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 28
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 31
array_key_exists("link_parameters", $context)) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_19c0545407ca1154311a6eb2d9e82653c57f7483362ceb1092cae196f0043821->leave($__internal_19c0545407ca1154311a6eb2d9e82653c57f7483362ceb1092cae196f0043821_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 32,  104 => 31,  98 => 28,  95 => 27,  89 => 24,  86 => 23,  82 => 21,  76 => 19,  73 => 18,  71 => 17,  68 => 16,  61 => 14,  55 => 12,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  35 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,);
    }
}
/* {# a *-to-many collection of values #}*/
/* {% if value is iterable %}*/
/*     {% if 'show' == view %}*/
/*         {% if value|length > 0 %}*/
/*             <ul class="{{ value|length < 2 ? 'inline' }}">*/
/*                 {% for item in value|slice(0, easyadmin_config('show.max_results')) %}*/
/*                     <li>*/
/*                         {% if link_parameters is defined %}*/
/*                             {% set primary_key_value = attribute(item, link_parameters.primary_key_name) %}*/
/*                             <a href="{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}">{{ item }}</a>*/
/*                         {% else %}*/
/*                             {{ item }}*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 {% endfor %}*/
/* */
/*                 {% set _remaining_items = value|length - easyadmin_config('show.max_results') %}*/
/*                 {% if _remaining_items > 0 %}*/
/*                     <li>({{ 'show.remaining_items'|transchoice(count = _remaining_items, domain = 'EasyAdminBundle') }})</li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         {% else %}*/
/*             <div class="empty collection-empty">*/
/*                 <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% elseif 'list' == view %}*/
/*         <span class="badge">{{ value|length }}</span>*/
/*     {% endif %}*/
/* {# a simple *-to-one value associated with an entity managed by this backend #}*/
/* {% elseif link_parameters is defined %}*/
/*     <a href="{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}">{{ value|easyadmin_truncate }}</a>*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
