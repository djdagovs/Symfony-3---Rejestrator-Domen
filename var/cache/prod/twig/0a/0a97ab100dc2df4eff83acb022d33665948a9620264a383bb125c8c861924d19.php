<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_8654c4d1c1da649661c3f325f33cf5712a667f9997c0bceb9c2eb62725db104a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"]);
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"]);
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
    }

    // line 1
    public function getrender_menu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : null), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : null), "type", array()) == "route")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : null), "type", array()) == "entity")) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : null)), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : null), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "route") && (is_string($__internal_06f566df7907678259a5162bf459525e5761cf6189dd4063cae2b2f77f378612 = (isset($context["path"]) ? $context["path"] : null)) && is_string($__internal_3bd86e125752fd89439841fe46700d1fd0d01b8e4cfcda35902ed5d395ca247e = $this->env->getExtension('routing')->getPath("easyadmin")) && ('' === $__internal_3bd86e125752fd89439841fe46700d1fd0d01b8e4cfcda35902ed5d395ca247e || 0 === strpos($__internal_06f566df7907678259a5162bf459525e5761cf6189dd4063cae2b2f77f378612, $__internal_3bd86e125752fd89439841fe46700d1fd0d01b8e4cfcda35902ed5d395ca247e))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 25,  229 => 24,  224 => 23,  218 => 22,  208 => 21,  205 => 20,  202 => 19,  199 => 18,  196 => 17,  193 => 12,  191 => 10,  190 => 9,  189 => 8,  188 => 7,  186 => 6,  183 => 5,  177 => 3,  174 => 2,  162 => 1,  157 => 53,  153 => 50,  138 => 48,  134 => 46,  117 => 43,  110 => 42,  93 => 41,  90 => 40,  88 => 39,  83 => 37,  72 => 36,  54 => 35,  51 => 34,  46 => 31,  42 => 53,  38 => 51,  36 => 34,  32 => 32,  30 => 31,  27 => 30,  25 => 29,  22 => 28,);
    }
}
/* {% macro render_menu_item(item) %}*/
/*     {% if item.type == 'divider' %}*/
/*         {{ item.label|trans }}*/
/*     {% else %}*/
/*         {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}*/
/*         {% set path =*/
/*             item.type == 'link' ? item.url :*/
/*             item.type == 'route' ? path(item.route, item.params) :*/
/*             item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :*/
/*             item.type == 'empty' ? '#' : ''*/
/*         %}*/
/* */
/*         {# if the URL generated for the route belongs to the backend, regenerate*/
/*            the URL to include the menu_params to display the selected menu item*/
/*            (this is checked comparing the beginning of the route URL with the backend homepage URL)*/
/*         #}*/
/*         {% if item.type == 'route' and (path starts with path('easyadmin')) %}*/
/*             {% set path = path(item.route, menu_params|merge(item.params)) %}*/
/*         {% endif %}*/
/* */
/*         <a href="{{ path }}" {% if item.target|default(false) %}target="{{ item.target }}"{% endif %}>*/
/*             {% if item.icon is not empty %}<i class="fa {{ item.icon }}"></i>{% endif %}*/
/*             <span>{{ item.label|trans }}</span>*/
/*             {% if item.children|default([]) is not empty %}<i class="fa fa-angle-left pull-right"></i>{% endif %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block main_menu_before %}{% endblock %}*/
/* */
/* <ul class="sidebar-menu">*/
/*     {% block main_menu %}*/
/*         {% for item in easyadmin_config('design.menu') %}*/
/*             <li class="{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}">*/
/*                 {{ helper.render_menu_item(item) }}*/
/* */
/*                 {% if item.children|default([]) is not empty %}*/
/*                     <ul class="treeview-menu">*/
/*                         {% for subitem in item.children %}*/
/*                             <li class="{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}">*/
/*                                 {{ helper.render_menu_item(subitem) }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endblock main_menu %}*/
/* </ul>*/
/* */
/* {% block main_menu_after %}{% endblock %}*/
/* */
