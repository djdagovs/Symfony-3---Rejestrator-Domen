<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_187cd353a2980e4cdbadd315afc4f1909496ca56bca6737a8805d45529a305fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_row' => array($this, 'block_easyadmin_autocomplete_row'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aceed98a43860d41c3a49e88f1d7da80f4d8a94cb7ee0755ad8954b1f086ef8c = $this->env->getExtension("native_profiler");
        $__internal_aceed98a43860d41c3a49e88f1d7da80f4d8a94cb7ee0755ad8954b1f086ef8c->enter($__internal_aceed98a43860d41c3a49e88f1d7da80f4d8a94cb7ee0755ad8954b1f086ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('form_label', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('choice_label', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 221
        echo "
";
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('collection_row', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('button_row', $context, $blocks);
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('choice_row', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_row', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('time_row', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('radio_row', $context, $blocks);
        // line 319
        echo "
";
        // line 321
        $this->displayBlock('form_errors', $context, $blocks);
        // line 339
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 350
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 355
        echo "
";
        // line 356
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 410
        echo "
";
        // line 412
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 492
        echo "
";
        // line 494
        $this->displayBlock('easyadmin_autocomplete_row', $context, $blocks);
        // line 507
        echo "
";
        // line 508
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 512
        echo "
";
        // line 514
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 519
        echo "
";
        // line 521
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_aceed98a43860d41c3a49e88f1d7da80f4d8a94cb7ee0755ad8954b1f086ef8c->leave($__internal_aceed98a43860d41c3a49e88f1d7da80f4d8a94cb7ee0755ad8954b1f086ef8c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9f15a03cf4b682d324a9715393afeb04dfe29c2b9790cc72169e31042b876bb9 = $this->env->getExtension("native_profiler");
        $__internal_9f15a03cf4b682d324a9715393afeb04dfe29c2b9790cc72169e31042b876bb9->enter($__internal_9f15a03cf4b682d324a9715393afeb04dfe29c2b9790cc72169e31042b876bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9f15a03cf4b682d324a9715393afeb04dfe29c2b9790cc72169e31042b876bb9->leave($__internal_9f15a03cf4b682d324a9715393afeb04dfe29c2b9790cc72169e31042b876bb9_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d5e4ea96ea7f68470f8bf42c317927532b062fee296f25bbc0348388482ff2bd = $this->env->getExtension("native_profiler");
        $__internal_d5e4ea96ea7f68470f8bf42c317927532b062fee296f25bbc0348388482ff2bd->enter($__internal_d5e4ea96ea7f68470f8bf42c317927532b062fee296f25bbc0348388482ff2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_d5e4ea96ea7f68470f8bf42c317927532b062fee296f25bbc0348388482ff2bd->leave($__internal_d5e4ea96ea7f68470f8bf42c317927532b062fee296f25bbc0348388482ff2bd_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6b382b2eacf04803f814f4feedf0c4877e90d97f4cba24cb0672fe0477fbc757 = $this->env->getExtension("native_profiler");
        $__internal_6b382b2eacf04803f814f4feedf0c4877e90d97f4cba24cb0672fe0477fbc757->enter($__internal_6b382b2eacf04803f814f4feedf0c4877e90d97f4cba24cb0672fe0477fbc757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6b382b2eacf04803f814f4feedf0c4877e90d97f4cba24cb0672fe0477fbc757->leave($__internal_6b382b2eacf04803f814f4feedf0c4877e90d97f4cba24cb0672fe0477fbc757_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_860ef889d46e290c3b2622bbff7e307a8fb14ebf6e32e1a236c05f72b9e1fcd0 = $this->env->getExtension("native_profiler");
        $__internal_860ef889d46e290c3b2622bbff7e307a8fb14ebf6e32e1a236c05f72b9e1fcd0->enter($__internal_860ef889d46e290c3b2622bbff7e307a8fb14ebf6e32e1a236c05f72b9e1fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_860ef889d46e290c3b2622bbff7e307a8fb14ebf6e32e1a236c05f72b9e1fcd0->leave($__internal_860ef889d46e290c3b2622bbff7e307a8fb14ebf6e32e1a236c05f72b9e1fcd0_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7831337b2d7a6a708d47aba5cb74b42b7ea56d5f38f0b9053b1077424d2d9b58 = $this->env->getExtension("native_profiler");
        $__internal_7831337b2d7a6a708d47aba5cb74b42b7ea56d5f38f0b9053b1077424d2d9b58->enter($__internal_7831337b2d7a6a708d47aba5cb74b42b7ea56d5f38f0b9053b1077424d2d9b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7831337b2d7a6a708d47aba5cb74b42b7ea56d5f38f0b9053b1077424d2d9b58->leave($__internal_7831337b2d7a6a708d47aba5cb74b42b7ea56d5f38f0b9053b1077424d2d9b58_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7017d1f3f4194a9b072b1fb0e02b6298c926336dcc53523de3ba70874c283b3d = $this->env->getExtension("native_profiler");
        $__internal_7017d1f3f4194a9b072b1fb0e02b6298c926336dcc53523de3ba70874c283b3d->enter($__internal_7017d1f3f4194a9b072b1fb0e02b6298c926336dcc53523de3ba70874c283b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_7017d1f3f4194a9b072b1fb0e02b6298c926336dcc53523de3ba70874c283b3d->leave($__internal_7017d1f3f4194a9b072b1fb0e02b6298c926336dcc53523de3ba70874c283b3d_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1370b96d93e148d082c1f35d04e68a79ae555f0dd8e8d5fb6262303272f2c476 = $this->env->getExtension("native_profiler");
        $__internal_1370b96d93e148d082c1f35d04e68a79ae555f0dd8e8d5fb6262303272f2c476->enter($__internal_1370b96d93e148d082c1f35d04e68a79ae555f0dd8e8d5fb6262303272f2c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_1370b96d93e148d082c1f35d04e68a79ae555f0dd8e8d5fb6262303272f2c476->leave($__internal_1370b96d93e148d082c1f35d04e68a79ae555f0dd8e8d5fb6262303272f2c476_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_549411f95989858691536d95d3c77a1956ba91b1bd1a6add020c6b99f8d557c4 = $this->env->getExtension("native_profiler");
        $__internal_549411f95989858691536d95d3c77a1956ba91b1bd1a6add020c6b99f8d557c4->enter($__internal_549411f95989858691536d95d3c77a1956ba91b1bd1a6add020c6b99f8d557c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_549411f95989858691536d95d3c77a1956ba91b1bd1a6add020c6b99f8d557c4->leave($__internal_549411f95989858691536d95d3c77a1956ba91b1bd1a6add020c6b99f8d557c4_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_891bdf1ec773ac63b479b876086ac3ae79bd190564f7c93a4ed1d597c77c06cd = $this->env->getExtension("native_profiler");
        $__internal_891bdf1ec773ac63b479b876086ac3ae79bd190564f7c93a4ed1d597c77c06cd->enter($__internal_891bdf1ec773ac63b479b876086ac3ae79bd190564f7c93a4ed1d597c77c06cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_891bdf1ec773ac63b479b876086ac3ae79bd190564f7c93a4ed1d597c77c06cd->leave($__internal_891bdf1ec773ac63b479b876086ac3ae79bd190564f7c93a4ed1d597c77c06cd_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1421c9a3b22cae14df8d4c7124ed29a0789943b3f2ec2ff0e496f7e7ecd8f376 = $this->env->getExtension("native_profiler");
        $__internal_1421c9a3b22cae14df8d4c7124ed29a0789943b3f2ec2ff0e496f7e7ecd8f376->enter($__internal_1421c9a3b22cae14df8d4c7124ed29a0789943b3f2ec2ff0e496f7e7ecd8f376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_1421c9a3b22cae14df8d4c7124ed29a0789943b3f2ec2ff0e496f7e7ecd8f376->leave($__internal_1421c9a3b22cae14df8d4c7124ed29a0789943b3f2ec2ff0e496f7e7ecd8f376_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f52de406ff23664c1f96606895dcac4f131dcf4f90d5faf8e2c96847c82b562a = $this->env->getExtension("native_profiler");
        $__internal_f52de406ff23664c1f96606895dcac4f131dcf4f90d5faf8e2c96847c82b562a->enter($__internal_f52de406ff23664c1f96606895dcac4f131dcf4f90d5faf8e2c96847c82b562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f52de406ff23664c1f96606895dcac4f131dcf4f90d5faf8e2c96847c82b562a->leave($__internal_f52de406ff23664c1f96606895dcac4f131dcf4f90d5faf8e2c96847c82b562a_prof);

    }

    // line 140
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8cebe538bd8f9a7de0a4fc809a4a846fce49231ff4ede85329b7d5db97fee8e6 = $this->env->getExtension("native_profiler");
        $__internal_8cebe538bd8f9a7de0a4fc809a4a846fce49231ff4ede85329b7d5db97fee8e6->enter($__internal_8cebe538bd8f9a7de0a4fc809a4a846fce49231ff4ede85329b7d5db97fee8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 141
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 142
            echo "<div class=\"control-group\">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</div>";
        } else {
            // line 150
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 153
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "</div>";
        }
        
        $__internal_8cebe538bd8f9a7de0a4fc809a4a846fce49231ff4ede85329b7d5db97fee8e6->leave($__internal_8cebe538bd8f9a7de0a4fc809a4a846fce49231ff4ede85329b7d5db97fee8e6_prof);

    }

    // line 160
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1695fce2ffc2f6335ad5725801bcf95977fa6d664d2bdd8a621a57e72b20f2a5 = $this->env->getExtension("native_profiler");
        $__internal_1695fce2ffc2f6335ad5725801bcf95977fa6d664d2bdd8a621a57e72b20f2a5->enter($__internal_1695fce2ffc2f6335ad5725801bcf95977fa6d664d2bdd8a621a57e72b20f2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 161
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 162
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 163
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 165
            echo "<div class=\"checkbox\">";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 167
            echo "</div>";
        }
        
        $__internal_1695fce2ffc2f6335ad5725801bcf95977fa6d664d2bdd8a621a57e72b20f2a5->leave($__internal_1695fce2ffc2f6335ad5725801bcf95977fa6d664d2bdd8a621a57e72b20f2a5_prof);

    }

    // line 171
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7ae3560d569f7dda0ae2aa583cc7df561e6b348d0872d1e7cf3f1bdf3d9eecea = $this->env->getExtension("native_profiler");
        $__internal_7ae3560d569f7dda0ae2aa583cc7df561e6b348d0872d1e7cf3f1bdf3d9eecea->enter($__internal_7ae3560d569f7dda0ae2aa583cc7df561e6b348d0872d1e7cf3f1bdf3d9eecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 173
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 176
            echo "<div class=\"radio\">";
            // line 177
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 178
            echo "</div>";
        }
        
        $__internal_7ae3560d569f7dda0ae2aa583cc7df561e6b348d0872d1e7cf3f1bdf3d9eecea->leave($__internal_7ae3560d569f7dda0ae2aa583cc7df561e6b348d0872d1e7cf3f1bdf3d9eecea_prof);

    }

    // line 184
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_acf901fc4b3e57f0592ddeaf0ca8329239c142801b8e2ccf6b0ee35c604e649f = $this->env->getExtension("native_profiler");
        $__internal_acf901fc4b3e57f0592ddeaf0ca8329239c142801b8e2ccf6b0ee35c604e649f->enter($__internal_acf901fc4b3e57f0592ddeaf0ca8329239c142801b8e2ccf6b0ee35c604e649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 185
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 186
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_acf901fc4b3e57f0592ddeaf0ca8329239c142801b8e2ccf6b0ee35c604e649f->leave($__internal_acf901fc4b3e57f0592ddeaf0ca8329239c142801b8e2ccf6b0ee35c604e649f_prof);

    }

    // line 189
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b99d39faaec63f8e1a33bdcc8207d32f0f874dd7d3d18484ce0c6744d7b9d072 = $this->env->getExtension("native_profiler");
        $__internal_b99d39faaec63f8e1a33bdcc8207d32f0f874dd7d3d18484ce0c6744d7b9d072->enter($__internal_b99d39faaec63f8e1a33bdcc8207d32f0f874dd7d3d18484ce0c6744d7b9d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 191
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 192
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b99d39faaec63f8e1a33bdcc8207d32f0f874dd7d3d18484ce0c6744d7b9d072->leave($__internal_b99d39faaec63f8e1a33bdcc8207d32f0f874dd7d3d18484ce0c6744d7b9d072_prof);

    }

    // line 195
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a924f49f42d969bacf26b0cd5ae302b8862e6f423d623bcbfb508dd9a50285cc = $this->env->getExtension("native_profiler");
        $__internal_a924f49f42d969bacf26b0cd5ae302b8862e6f423d623bcbfb508dd9a50285cc->enter($__internal_a924f49f42d969bacf26b0cd5ae302b8862e6f423d623bcbfb508dd9a50285cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a924f49f42d969bacf26b0cd5ae302b8862e6f423d623bcbfb508dd9a50285cc->leave($__internal_a924f49f42d969bacf26b0cd5ae302b8862e6f423d623bcbfb508dd9a50285cc_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_0b8a3bddc0e886615eb71742fa0ba93a5fb9d618980819ea524523c5b278bb30 = $this->env->getExtension("native_profiler");
        $__internal_0b8a3bddc0e886615eb71742fa0ba93a5fb9d618980819ea524523c5b278bb30->enter($__internal_0b8a3bddc0e886615eb71742fa0ba93a5fb9d618980819ea524523c5b278bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0b8a3bddc0e886615eb71742fa0ba93a5fb9d618980819ea524523c5b278bb30->leave($__internal_0b8a3bddc0e886615eb71742fa0ba93a5fb9d618980819ea524523c5b278bb30_prof);

    }

    // line 203
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d4dd2102cad9012c5d05842b6bef8ac39fa3301afb9cefe5c3c664a6fcdd5dd8 = $this->env->getExtension("native_profiler");
        $__internal_d4dd2102cad9012c5d05842b6bef8ac39fa3301afb9cefe5c3c664a6fcdd5dd8->enter($__internal_d4dd2102cad9012c5d05842b6bef8ac39fa3301afb9cefe5c3c664a6fcdd5dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 204
        echo "    ";
        // line 205
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 206
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 210
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 211
                echo "        ";
            }
            // line 212
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 213
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 214
                echo "        ";
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 217
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), "messages")) : ("")), "html", null, true);
            // line 218
            echo "</label>
    ";
        }
        
        $__internal_d4dd2102cad9012c5d05842b6bef8ac39fa3301afb9cefe5c3c664a6fcdd5dd8->leave($__internal_d4dd2102cad9012c5d05842b6bef8ac39fa3301afb9cefe5c3c664a6fcdd5dd8_prof);

    }

    // line 224
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0e3608b8c6f8a163ebf281dda74dd2bbd3f7aa94dd5761f6e9c09cf30e265174 = $this->env->getExtension("native_profiler");
        $__internal_0e3608b8c6f8a163ebf281dda74dd2bbd3f7aa94dd5761f6e9c09cf30e265174->enter($__internal_0e3608b8c6f8a163ebf281dda74dd2bbd3f7aa94dd5761f6e9c09cf30e265174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 225
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 226
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 227
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => "messages") + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 232
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 234
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 243
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
        ";
        }
        // line 245
        echo "    </div>";
        
        $__internal_0e3608b8c6f8a163ebf281dda74dd2bbd3f7aa94dd5761f6e9c09cf30e265174->leave($__internal_0e3608b8c6f8a163ebf281dda74dd2bbd3f7aa94dd5761f6e9c09cf30e265174_prof);

    }

    // line 248
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_4af42b69d1e320e172d1ea9799963f9b4967a439743843e0a2f4319f811d8df8 = $this->env->getExtension("native_profiler");
        $__internal_4af42b69d1e320e172d1ea9799963f9b4967a439743843e0a2f4319f811d8df8->enter($__internal_4af42b69d1e320e172d1ea9799963f9b4967a439743843e0a2f4319f811d8df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 249
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 251
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 252
            echo "        ";
            ob_start();
            // line 253
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 256
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 263
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 270
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 272
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_4af42b69d1e320e172d1ea9799963f9b4967a439743843e0a2f4319f811d8df8->leave($__internal_4af42b69d1e320e172d1ea9799963f9b4967a439743843e0a2f4319f811d8df8_prof);

    }

    // line 280
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_62288dcaf33136c0821477b9dad30c57d8f8898b70484709fc92e86af3bf37b3 = $this->env->getExtension("native_profiler");
        $__internal_62288dcaf33136c0821477b9dad30c57d8f8898b70484709fc92e86af3bf37b3->enter($__internal_62288dcaf33136c0821477b9dad30c57d8f8898b70484709fc92e86af3bf37b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 281
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_62288dcaf33136c0821477b9dad30c57d8f8898b70484709fc92e86af3bf37b3->leave($__internal_62288dcaf33136c0821477b9dad30c57d8f8898b70484709fc92e86af3bf37b3_prof);

    }

    // line 286
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_68c33ea9d9dd85fbe03b741ee02d65f44ac9dd03807b72207c844e2a7d20c21c = $this->env->getExtension("native_profiler");
        $__internal_68c33ea9d9dd85fbe03b741ee02d65f44ac9dd03807b72207c844e2a7d20c21c->enter($__internal_68c33ea9d9dd85fbe03b741ee02d65f44ac9dd03807b72207c844e2a7d20c21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 287
        $context["force_error"] = true;
        // line 288
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_68c33ea9d9dd85fbe03b741ee02d65f44ac9dd03807b72207c844e2a7d20c21c->leave($__internal_68c33ea9d9dd85fbe03b741ee02d65f44ac9dd03807b72207c844e2a7d20c21c_prof);

    }

    // line 291
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fe9eed688d554f359b78ba5942c419423b7001f569e419d5a86f0b922e59e6df = $this->env->getExtension("native_profiler");
        $__internal_fe9eed688d554f359b78ba5942c419423b7001f569e419d5a86f0b922e59e6df->enter($__internal_fe9eed688d554f359b78ba5942c419423b7001f569e419d5a86f0b922e59e6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 292
        $context["force_error"] = true;
        // line 293
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fe9eed688d554f359b78ba5942c419423b7001f569e419d5a86f0b922e59e6df->leave($__internal_fe9eed688d554f359b78ba5942c419423b7001f569e419d5a86f0b922e59e6df_prof);

    }

    // line 296
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_917041d469681d1106af88be1bd126271b517596453f88c601522e223f8de460 = $this->env->getExtension("native_profiler");
        $__internal_917041d469681d1106af88be1bd126271b517596453f88c601522e223f8de460->enter($__internal_917041d469681d1106af88be1bd126271b517596453f88c601522e223f8de460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 297
        $context["force_error"] = true;
        // line 298
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_917041d469681d1106af88be1bd126271b517596453f88c601522e223f8de460->leave($__internal_917041d469681d1106af88be1bd126271b517596453f88c601522e223f8de460_prof);

    }

    // line 301
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9f1f70595acf8e236c7a8327ef03195094851cae0677668f270bb35c5e76539d = $this->env->getExtension("native_profiler");
        $__internal_9f1f70595acf8e236c7a8327ef03195094851cae0677668f270bb35c5e76539d->enter($__internal_9f1f70595acf8e236c7a8327ef03195094851cae0677668f270bb35c5e76539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 302
        $context["force_error"] = true;
        // line 303
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9f1f70595acf8e236c7a8327ef03195094851cae0677668f270bb35c5e76539d->leave($__internal_9f1f70595acf8e236c7a8327ef03195094851cae0677668f270bb35c5e76539d_prof);

    }

    // line 306
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2f644811f926f1cacd2de652eff3bbff6cb7829e6aab2d7dd6b0f49d67751877 = $this->env->getExtension("native_profiler");
        $__internal_2f644811f926f1cacd2de652eff3bbff6cb7829e6aab2d7dd6b0f49d67751877->enter($__internal_2f644811f926f1cacd2de652eff3bbff6cb7829e6aab2d7dd6b0f49d67751877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 307
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 310
        echo "</div>";
        
        $__internal_2f644811f926f1cacd2de652eff3bbff6cb7829e6aab2d7dd6b0f49d67751877->leave($__internal_2f644811f926f1cacd2de652eff3bbff6cb7829e6aab2d7dd6b0f49d67751877_prof);

    }

    // line 313
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ee30fc01e2fb713bf61008f7a3c4f4b9e680c879b95b21c2c9cdd0a8c64cf400 = $this->env->getExtension("native_profiler");
        $__internal_ee30fc01e2fb713bf61008f7a3c4f4b9e680c879b95b21c2c9cdd0a8c64cf400->enter($__internal_ee30fc01e2fb713bf61008f7a3c4f4b9e680c879b95b21c2c9cdd0a8c64cf400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 314
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 317
        echo "</div>";
        
        $__internal_ee30fc01e2fb713bf61008f7a3c4f4b9e680c879b95b21c2c9cdd0a8c64cf400->leave($__internal_ee30fc01e2fb713bf61008f7a3c4f4b9e680c879b95b21c2c9cdd0a8c64cf400_prof);

    }

    // line 321
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d42d7d305dc69f6d04f5376640c0cfc3e78a0b37c11b9c93c6dd497bee00f809 = $this->env->getExtension("native_profiler");
        $__internal_d42d7d305dc69f6d04f5376640c0cfc3e78a0b37c11b9c93c6dd497bee00f809->enter($__internal_d42d7d305dc69f6d04f5376640c0cfc3e78a0b37c11b9c93c6dd497bee00f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 322
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 323
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 324
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 325
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 326
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 327
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 329
                echo "                <ul>
                    ";
                // line 330
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 331
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "                </ul>
            ";
            }
            // line 335
            echo "        </div>
    ";
        }
        
        $__internal_d42d7d305dc69f6d04f5376640c0cfc3e78a0b37c11b9c93c6dd497bee00f809->leave($__internal_d42d7d305dc69f6d04f5376640c0cfc3e78a0b37c11b9c93c6dd497bee00f809_prof);

    }

    // line 339
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_eb0cd0c2343cdda825de7f5cf96b0a3f527de5eeeea166adab59f8d2ab5c56f3 = $this->env->getExtension("native_profiler");
        $__internal_eb0cd0c2343cdda825de7f5cf96b0a3f527de5eeeea166adab59f8d2ab5c56f3->enter($__internal_eb0cd0c2343cdda825de7f5cf96b0a3f527de5eeeea166adab59f8d2ab5c56f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 340
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 341
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 343
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 344
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" => $this->renderBlock("empty_collection", $context, $blocks)));
            // line 345
            echo "    ";
        }
        // line 346
        echo "
    ";
        // line 347
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_eb0cd0c2343cdda825de7f5cf96b0a3f527de5eeeea166adab59f8d2ab5c56f3->leave($__internal_eb0cd0c2343cdda825de7f5cf96b0a3f527de5eeeea166adab59f8d2ab5c56f3_prof);

    }

    // line 350
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_8e9aec15491e9ea0ff5813d47d7ce263af028fb2079cfa6abe5eb5155eb43f33 = $this->env->getExtension("native_profiler");
        $__internal_8e9aec15491e9ea0ff5813d47d7ce263af028fb2079cfa6abe5eb5155eb43f33->enter($__internal_8e9aec15491e9ea0ff5813d47d7ce263af028fb2079cfa6abe5eb5155eb43f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 351
        echo "    <div class=\"empty collection-empty\">
        <span class=\"label label-empty\">";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
    </div>
";
        
        $__internal_8e9aec15491e9ea0ff5813d47d7ce263af028fb2079cfa6abe5eb5155eb43f33->leave($__internal_8e9aec15491e9ea0ff5813d47d7ce263af028fb2079cfa6abe5eb5155eb43f33_prof);

    }

    // line 356
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_048a65e92d1ca9917be0d09f66a75e02f139487d988f269b753ca4ae95f1903b = $this->env->getExtension("native_profiler");
        $__internal_048a65e92d1ca9917be0d09f66a75e02f139487d988f269b753ca4ae95f1903b->enter($__internal_048a65e92d1ca9917be0d09f66a75e02f139487d988f269b753ca4ae95f1903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 357
        echo "    ";
        $context["force_error"] = true;
        // line 358
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_048a65e92d1ca9917be0d09f66a75e02f139487d988f269b753ca4ae95f1903b->leave($__internal_048a65e92d1ca9917be0d09f66a75e02f139487d988f269b753ca4ae95f1903b_prof);

    }

    // line 361
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_1695beeec434866e2d7650d0941ad129966d5b8df6e54fd9fc6e7ccc491a5285 = $this->env->getExtension("native_profiler");
        $__internal_1695beeec434866e2d7650d0941ad129966d5b8df6e54fd9fc6e7ccc491a5285->enter($__internal_1695beeec434866e2d7650d0941ad129966d5b8df6e54fd9fc6e7ccc491a5285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 362
        ob_start();
        // line 363
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 364
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 365
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 366
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 368
        echo "
        <div class=\"row\">
            ";
        // line 370
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 371
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 372
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 375
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 376
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1695beeec434866e2d7650d0941ad129966d5b8df6e54fd9fc6e7ccc491a5285->leave($__internal_1695beeec434866e2d7650d0941ad129966d5b8df6e54fd9fc6e7ccc491a5285_prof);

    }

    // line 383
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_6bfdb2a30d811cf47141b9c0b3697d623629e778d2e447a0c4d3b8a32d125f97 = $this->env->getExtension("native_profiler");
        $__internal_6bfdb2a30d811cf47141b9c0b3697d623629e778d2e447a0c4d3b8a32d125f97->enter($__internal_6bfdb2a30d811cf47141b9c0b3697d623629e778d2e447a0c4d3b8a32d125f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6bfdb2a30d811cf47141b9c0b3697d623629e778d2e447a0c4d3b8a32d125f97->leave($__internal_6bfdb2a30d811cf47141b9c0b3697d623629e778d2e447a0c4d3b8a32d125f97_prof);

    }

    // line 388
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_377b3d794276050ac181e9e96e7f95079a2cb93d318c780ade04671f88d852a1 = $this->env->getExtension("native_profiler");
        $__internal_377b3d794276050ac181e9e96e7f95079a2cb93d318c780ade04671f88d852a1->enter($__internal_377b3d794276050ac181e9e96e7f95079a2cb93d318c780ade04671f88d852a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 391
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 392
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 393
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 395
        echo "
        ";
        // line 396
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 397
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 398
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 400
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 403
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 404
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 407
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_377b3d794276050ac181e9e96e7f95079a2cb93d318c780ade04671f88d852a1->leave($__internal_377b3d794276050ac181e9e96e7f95079a2cb93d318c780ade04671f88d852a1_prof);

    }

    // line 412
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_c63bd94aa37d88f7992e15c28fa9168ca97aaecf09d11886897c33754dbbeb4a = $this->env->getExtension("native_profiler");
        $__internal_c63bd94aa37d88f7992e15c28fa9168ca97aaecf09d11886897c33754dbbeb4a->enter($__internal_c63bd94aa37d88f7992e15c28fa9168ca97aaecf09d11886897c33754dbbeb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 413
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 414
        echo "
    ";
        // line 415
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 416
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 418
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 423
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 425
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 426
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 428
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 429
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 431
                echo "                                ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "label", array()));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 435
            echo "
                    <div class=\"box-body\">
                        ";
            // line 437
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 438
                echo "                            <p class=\"help-block\">";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "help", array()));
                echo "</p>
                        ";
            }
            // line 440
            echo "
                        <div class=\"row\">
                            ";
            // line 442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 443
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 444
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 452
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 453
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 454
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 464
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c63bd94aa37d88f7992e15c28fa9168ca97aaecf09d11886897c33754dbbeb4a->leave($__internal_c63bd94aa37d88f7992e15c28fa9168ca97aaecf09d11886897c33754dbbeb4a_prof);

    }

    // line 464
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_adb4579ae64c2d2eaa7e12ea41cf86565d1316490552ebafed09ffcc887b3f4c = $this->env->getExtension("native_profiler");
        $__internal_adb4579ae64c2d2eaa7e12ea41cf86565d1316490552ebafed09ffcc887b3f4c->enter($__internal_adb4579ae64c2d2eaa7e12ea41cf86565d1316490552ebafed09ffcc887b3f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 465
        echo "                        ";
        // line 466
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 470
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 471
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 472
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 473
        echo "
                        ";
        // line 474
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 476
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 477
        echo "
                        ";
        // line 478
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 479
        echo "
                        ";
        // line 480
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 481
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 482
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 483
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
                    ";
        
        $__internal_adb4579ae64c2d2eaa7e12ea41cf86565d1316490552ebafed09ffcc887b3f4c->leave($__internal_adb4579ae64c2d2eaa7e12ea41cf86565d1316490552ebafed09ffcc887b3f4c_prof);

    }

    // line 494
    public function block_easyadmin_autocomplete_row($context, array $blocks = array())
    {
        $__internal_944beac5f5bcdecb6af651cea0c854fe5206450396497cbe568f92f9f6cb52ab = $this->env->getExtension("native_profiler");
        $__internal_944beac5f5bcdecb6af651cea0c854fe5206450396497cbe568f92f9f6cb52ab->enter($__internal_944beac5f5bcdecb6af651cea0c854fe5206450396497cbe568f92f9f6cb52ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_row"));

        // line 495
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'row', array("attr" => twig_array_merge(        // line 496
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "autocomplete", "entity" => $this->getAttribute($this->getAttribute(        // line 500
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "property" => $this->getAttribute($this->getAttribute(        // line 501
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "fieldName", array()), "view" => $this->getAttribute(        // line 502
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())))))));
        // line 505
        echo "
";
        
        $__internal_944beac5f5bcdecb6af651cea0c854fe5206450396497cbe568f92f9f6cb52ab->leave($__internal_944beac5f5bcdecb6af651cea0c854fe5206450396497cbe568f92f9f6cb52ab_prof);

    }

    // line 508
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_66fc15c015797b569696edce2ffcda118c0cfc4be0167ba4196f3b024446de77 = $this->env->getExtension("native_profiler");
        $__internal_66fc15c015797b569696edce2ffcda118c0cfc4be0167ba4196f3b024446de77->enter($__internal_66fc15c015797b569696edce2ffcda118c0cfc4be0167ba4196f3b024446de77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 509
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 510
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_66fc15c015797b569696edce2ffcda118c0cfc4be0167ba4196f3b024446de77->leave($__internal_66fc15c015797b569696edce2ffcda118c0cfc4be0167ba4196f3b024446de77_prof);

    }

    // line 514
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_a6a75676d3430442fb6a9ffc13fec6927c2ca25d6515ee547452ce01b8b04806 = $this->env->getExtension("native_profiler");
        $__internal_a6a75676d3430442fb6a9ffc13fec6927c2ca25d6515ee547452ce01b8b04806->enter($__internal_a6a75676d3430442fb6a9ffc13fec6927c2ca25d6515ee547452ce01b8b04806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 515
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_a6a75676d3430442fb6a9ffc13fec6927c2ca25d6515ee547452ce01b8b04806->leave($__internal_a6a75676d3430442fb6a9ffc13fec6927c2ca25d6515ee547452ce01b8b04806_prof);

    }

    // line 521
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_50a743ee6619654630e3c58c904814f96ae60d2341dd0eb678172042bdff94d0 = $this->env->getExtension("native_profiler");
        $__internal_50a743ee6619654630e3c58c904814f96ae60d2341dd0eb678172042bdff94d0->enter($__internal_50a743ee6619654630e3c58c904814f96ae60d2341dd0eb678172042bdff94d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 522
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 523
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 524
            echo "            <h2>
                ";
            // line 525
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 526
            echo "                ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), "html", null, true);
            echo "
            </h2>
        ";
        }
        // line 529
        echo "
        ";
        // line 530
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 531
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), "html", null, true));
            echo "</p>
        ";
        }
        // line 533
        echo "    </div>
";
        
        $__internal_50a743ee6619654630e3c58c904814f96ae60d2341dd0eb678172042bdff94d0->leave($__internal_50a743ee6619654630e3c58c904814f96ae60d2341dd0eb678172042bdff94d0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1631 => 533,  1625 => 531,  1623 => 530,  1620 => 529,  1613 => 526,  1607 => 525,  1604 => 524,  1602 => 523,  1597 => 522,  1591 => 521,  1581 => 515,  1575 => 514,  1568 => 510,  1565 => 509,  1559 => 508,  1551 => 505,  1549 => 502,  1548 => 501,  1547 => 500,  1546 => 496,  1544 => 495,  1538 => 494,  1530 => 485,  1528 => 484,  1527 => 483,  1526 => 482,  1525 => 481,  1524 => 480,  1521 => 479,  1519 => 478,  1516 => 477,  1514 => 476,  1513 => 474,  1510 => 473,  1508 => 472,  1507 => 471,  1506 => 470,  1500 => 467,  1497 => 466,  1495 => 465,  1489 => 464,  1478 => 487,  1476 => 464,  1468 => 458,  1462 => 457,  1452 => 454,  1447 => 453,  1441 => 452,  1432 => 447,  1422 => 444,  1417 => 443,  1412 => 442,  1408 => 440,  1402 => 438,  1400 => 437,  1396 => 435,  1388 => 431,  1382 => 429,  1380 => 428,  1376 => 426,  1374 => 425,  1368 => 423,  1363 => 422,  1357 => 419,  1354 => 418,  1348 => 416,  1346 => 415,  1343 => 414,  1340 => 413,  1334 => 412,  1325 => 407,  1319 => 404,  1315 => 403,  1309 => 400,  1305 => 399,  1302 => 398,  1299 => 397,  1297 => 396,  1294 => 395,  1288 => 393,  1286 => 392,  1282 => 391,  1279 => 390,  1277 => 389,  1271 => 388,  1261 => 385,  1258 => 384,  1252 => 383,  1239 => 376,  1234 => 375,  1228 => 372,  1225 => 371,  1223 => 370,  1219 => 368,  1211 => 366,  1208 => 365,  1206 => 364,  1203 => 363,  1201 => 362,  1195 => 361,  1185 => 358,  1182 => 357,  1176 => 356,  1166 => 352,  1163 => 351,  1157 => 350,  1150 => 347,  1147 => 346,  1144 => 345,  1141 => 344,  1138 => 343,  1132 => 341,  1130 => 340,  1124 => 339,  1115 => 335,  1111 => 333,  1102 => 331,  1098 => 330,  1095 => 329,  1089 => 327,  1087 => 326,  1083 => 325,  1080 => 324,  1077 => 323,  1074 => 322,  1068 => 321,  1061 => 317,  1059 => 316,  1057 => 315,  1049 => 314,  1043 => 313,  1036 => 310,  1034 => 309,  1032 => 308,  1024 => 307,  1018 => 306,  1011 => 303,  1009 => 302,  1003 => 301,  996 => 298,  994 => 297,  988 => 296,  981 => 293,  979 => 292,  973 => 291,  966 => 288,  964 => 287,  958 => 286,  951 => 283,  949 => 282,  943 => 281,  937 => 280,  925 => 274,  920 => 272,  916 => 270,  905 => 264,  899 => 263,  889 => 256,  884 => 253,  881 => 252,  879 => 251,  873 => 249,  867 => 248,  860 => 245,  854 => 243,  852 => 242,  850 => 240,  843 => 235,  837 => 234,  833 => 232,  831 => 231,  829 => 229,  827 => 228,  825 => 227,  816 => 226,  814 => 225,  808 => 224,  799 => 218,  797 => 217,  795 => 216,  780 => 215,  777 => 214,  774 => 213,  771 => 212,  768 => 211,  765 => 210,  762 => 209,  759 => 208,  756 => 207,  753 => 206,  750 => 205,  748 => 204,  742 => 203,  735 => 200,  729 => 199,  722 => 196,  716 => 195,  709 => 192,  707 => 191,  701 => 189,  694 => 186,  692 => 185,  686 => 184,  678 => 178,  676 => 177,  674 => 176,  671 => 174,  669 => 173,  667 => 172,  661 => 171,  653 => 167,  651 => 166,  649 => 165,  646 => 163,  644 => 162,  642 => 161,  636 => 160,  628 => 156,  622 => 153,  621 => 152,  617 => 151,  613 => 150,  610 => 148,  604 => 145,  603 => 144,  599 => 143,  597 => 142,  595 => 141,  589 => 140,  582 => 137,  580 => 136,  574 => 135,  565 => 130,  562 => 129,  554 => 128,  549 => 126,  547 => 125,  545 => 124,  542 => 122,  540 => 121,  534 => 120,  525 => 115,  523 => 114,  521 => 112,  520 => 111,  519 => 110,  518 => 109,  513 => 107,  511 => 106,  509 => 105,  506 => 103,  504 => 102,  498 => 101,  490 => 97,  488 => 96,  486 => 95,  484 => 94,  482 => 93,  478 => 92,  476 => 91,  473 => 89,  471 => 88,  465 => 87,  457 => 83,  455 => 82,  453 => 81,  447 => 80,  440 => 77,  434 => 75,  432 => 74,  430 => 73,  424 => 71,  421 => 70,  419 => 69,  416 => 68,  410 => 67,  403 => 64,  401 => 63,  395 => 62,  388 => 59,  386 => 58,  380 => 57,  373 => 54,  370 => 52,  368 => 51,  362 => 50,  350 => 44,  345 => 42,  341 => 40,  328 => 30,  323 => 27,  320 => 26,  318 => 25,  316 => 23,  310 => 22,  303 => 17,  300 => 15,  298 => 13,  297 => 12,  296 => 11,  295 => 9,  294 => 8,  293 => 7,  291 => 5,  289 => 4,  283 => 3,  276 => 521,  273 => 519,  271 => 514,  268 => 512,  266 => 508,  263 => 507,  261 => 494,  258 => 492,  256 => 412,  253 => 410,  251 => 388,  248 => 387,  246 => 383,  243 => 382,  241 => 361,  238 => 360,  236 => 356,  233 => 355,  231 => 350,  229 => 339,  227 => 321,  224 => 319,  222 => 313,  219 => 312,  217 => 306,  214 => 305,  212 => 301,  209 => 300,  207 => 296,  204 => 295,  202 => 291,  199 => 290,  197 => 286,  194 => 285,  192 => 280,  189 => 279,  187 => 248,  184 => 247,  182 => 224,  179 => 223,  176 => 221,  174 => 203,  171 => 202,  169 => 199,  166 => 198,  164 => 195,  161 => 194,  159 => 189,  156 => 188,  154 => 184,  151 => 183,  148 => 181,  146 => 171,  143 => 170,  141 => 160,  138 => 159,  136 => 140,  133 => 139,  131 => 135,  128 => 134,  126 => 120,  123 => 119,  121 => 101,  118 => 100,  116 => 87,  113 => 86,  111 => 80,  108 => 79,  106 => 67,  103 => 66,  101 => 62,  98 => 61,  96 => 57,  93 => 56,  91 => 50,  88 => 49,  86 => 22,  83 => 21,  80 => 19,  78 => 3,  75 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_start -%}*/
/*     {% if 'easyadmin' == block_prefixes|slice(-2)|first %}*/
/*         {% set attr = attr|merge({*/
/*             'class': [*/
/*                 _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',*/
/*                 attr.class|default(''),*/
/*                 easyadmin.view ~ '-form'*/
/*             ]|join(' '),*/
/*             'data-view': easyadmin.view,*/
/*             'data-entity': easyadmin.entity.name,*/
/*             'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             var parentDiv = containerDiv.parents('[data-prototype]:first');*/
/*             containerDiv.remove();*/
/*             parentDiv.trigger('easyadmin.collection.item-deleted');*/
/* */
/*             if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {*/
/*                 $(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);*/
/*             }*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, 'messages') -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/*         {{- form_label(form, _field_label, { translation_domain: 'messages' }) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 var numItems = collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 collection.append(newItem).trigger('easyadmin.collection.item-added');*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-action">*/
/*             <a href="#" onclick="{{ js_add_item|raw }}" class="text-primary">*/
/*                 <i class="fa fa-plus-square"></i>*/
/*                 {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(count = error_count, domain = 'EasyAdminBundle') }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {% if value is empty %}*/
/*         {{ block('empty_collection') }}*/
/*     {% endif %}*/
/*     {% if value is empty or form.vars.prototype is defined %}*/
/*         {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block empty_collection %}*/
/*     <div class="empty collection-empty">*/
/*         <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*     </div>*/
/* {% endblock empty_collection %}*/
/* */
/* {% block vich_file_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-file">*/
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}*/
/*             <a href="{{ download_uri }}">{{ download_title }}</a>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             {% if form.delete is defined %}*/
/*             <div class="col-sm-3 col-md-2">*/
/*                 {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}">*/
/*                 {{ form_widget(form.file) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*             {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}*/
/* */
/*             <a href="#" class="easyadmin-thumbnail" data-featherlight="#{{ _lightbox_id }}" data-featherlight-close-on-click="anywhere">*/
/*                 <img src="{{ download_uri }}">*/
/*             </a>*/
/* */
/*             <div id="{{ _lightbox_id }}" class="easyadmin-lightbox">*/
/*                 <img src="{{ download_uri }}">*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {# EasyAdmin form type #}*/
/* {% block easyadmin_widget %}*/
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*     <div class="row">*/
/*         {% for group_name, group_config in easyadmin_form_groups %}*/
/*             <div class="field-group col-xs-12 {{ group_config.css_class|default('') }}">*/
/*                 <div class="box box-default">*/
/*                     {% if group_config.label|default(false) or group_config.icon|default(false) %}*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">*/
/*                                 {% if group_config.icon|default(false) %}*/
/*                                     <i class="fa fa-{{ group_config.icon }}"></i>*/
/*                                 {% endif %}*/
/*                                 {{ group_config.label|trans|raw }}*/
/*                             </h3>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="box-body">*/
/*                         {% if group_config.help|default(false) %}*/
/*                             <p class="help-block">{{ group_config.help|trans|raw }}</p>*/
/*                         {% endif %}*/
/* */
/*                         <div class="row">*/
/*                             {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}*/
/*                                 <div class="col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}">*/
/*                                     {{ form_row(field) }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*                 <div class="col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}">*/
/*                     {{ form_row(field) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12 form-actions">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, 'messages') }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                             ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                             : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% set _entity_id = (easyadmin.view == 'new')*/
/*                             ? null*/
/*                             : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}*/
/* */
/*                         {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                         {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                             actions: _entity_actions,*/
/*                             request_parameters: _request_parameters,*/
/*                             trans_parameters: _trans_parameters,*/
/*                             item_id: _entity_id*/
/*                         }, with_context = false) }}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
/* {# EasyAdminAutocomplete form type #}*/
/* {% block easyadmin_autocomplete_row %}*/
/*     {{ form_row(form.autocomplete, {*/
/*         attr: attr|merge({*/
/*             'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),*/
/*             'data-easyadmin-autocomplete-url' : path('easyadmin', {*/
/*                 action: 'autocomplete',*/
/*                 entity: easyadmin.entity.name,*/
/*                 property: easyadmin.field.fieldName,*/
/*                 view: easyadmin.view*/
/*             })|raw })*/
/*         })*/
/*     }}*/
/* {% endblock easyadmin_autocomplete_row %}*/
/* */
/* {% block easyadmin_autocomplete_inner_label %}*/
/*     {% set name = form.parent.vars.name %}*/
/*     {{- block('form_label') -}}*/
/* {% endblock easyadmin_autocomplete_inner_label %}*/
/* */
/* {# EasyAdminDivider form type #}*/
/* {% block easyadmin_divider_row %}*/
/*     <div class="field-divider">*/
/*         <hr>*/
/*     </div>*/
/* {% endblock easyadmin_divider_row %}*/
/* */
/* {# EasyAdminSection form type #}*/
/* {% block easyadmin_section_row %}*/
/*     <div class="field-section {{ easyadmin.field.css_class|default('') }}">*/
/*         {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}*/
/*             <h2>*/
/*                 {% if easyadmin.field.icon|default(false) %}<i class="fa fa-{{ easyadmin.field.icon }}"></i>{% endif %}*/
/*                 {{ easyadmin.field.label|default('') }}*/
/*             </h2>*/
/*         {% endif %}*/
/* */
/*         {% if easyadmin.field.help|default(false) %}*/
/*             <p class="help-block">{{ easyadmin.field.help|nl2br }}</p>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock easyadmin_section_row %}*/
/* */
