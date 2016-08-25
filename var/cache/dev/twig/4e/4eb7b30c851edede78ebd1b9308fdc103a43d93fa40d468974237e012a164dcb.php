<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_035b830c77ebfbc6bfcddf0e5dc2ce11e65c83c886e90ede05c1b741f0965a4c extends Twig_Template
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
        $__internal_0b61fb22b6d2e4da510790e360e54ffac6dbc81aa220840ac420430ca5b31280 = $this->env->getExtension("native_profiler");
        $__internal_0b61fb22b6d2e4da510790e360e54ffac6dbc81aa220840ac420430ca5b31280->enter($__internal_0b61fb22b6d2e4da510790e360e54ffac6dbc81aa220840ac420430ca5b31280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute((isset($context["color_schemes"]) ? $context["color_schemes"] : $this->getContext($context, "color_schemes")), (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 113
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 117
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 161
        echo ".toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 185
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: ";
        // line 186
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 187
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 196
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: ";
        // line 197
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 198
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 206
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 222
        echo "span.badge {
    background-color: ";
        // line 223
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}

";
        // line 228
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 245
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 246
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 247
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 248
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 250
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 253
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 267
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    border-color: transparent;
    color: ";
        // line 269
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 284
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 286
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 294
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 296
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

";
        // line 300
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 306
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 334
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 339
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 341
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 342
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 344
        echo "    color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 349
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 350
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 352
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 353
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 355
        echo "}

.has-error .error-block {
    color: ";
        // line 358
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 374
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 384
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 385
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 386
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 387
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 388
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 389
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 391
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 393
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter((isset($context["kernel_debug"]) ? $context["kernel_debug"] : $this->getContext($context, "kernel_debug")), false)) : (false))) {
            // line 394
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 397
        echo "}

";
        // line 401
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 407
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 412
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 413
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 414
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 415
            echo "    border-top-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 417
        echo "}
.field-group .field-divider hr {
";
        // line 419
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 420
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 421
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 422
            echo "    border-top-color: #EEE;
";
        }
        // line 424
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 430
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 431
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    color: ";
            // line 432
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 433
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 434
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 435
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 437
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 441
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 442
            echo "    color: #555;
";
        } elseif (("light" ==         // line 443
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 444
            echo "    color: #777;
";
        }
        // line 446
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 453
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 454
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 455
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 456
            echo "    border: 1px solid #EEE;
";
        }
        // line 458
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 461
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 462
            echo "    color: #555;
";
        } elseif (("light" ==         // line 463
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 464
            echo "    color: #777;
";
        }
        // line 466
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 469
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 470
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 472
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 473
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 475
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 477
        echo "    padding: 11px 10px 9px;
}
";
        // line 479
        if (("light" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 480
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 484
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 494
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 498
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 501
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 509
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 516
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 520
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 523
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 526
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 532
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 545
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 546
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 547
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 560
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 570
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 571
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 572
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 594
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 602
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 603
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 609
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 617
        echo "
";
        // line 620
        echo ".content-wrapper {
    background: ";
        // line 621
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 629
        echo ".main-header {
    background: ";
        // line 630
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 634
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 636
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 661
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 680
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

";
        // line 702
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 718
        echo ".main-sidebar,
.wrapper {
";
        // line 720
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 721
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 722
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 723
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 725
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 731
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 732
            echo "    color: #777;
";
        } elseif (("light" ==         // line 733
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 734
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        }
        // line 736
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 741
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 742
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 743
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 744
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 746
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 763
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 764
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 766
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 767
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 769
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 775
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 776
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 777
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 778
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 780
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 789
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 790
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 793
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 794
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 797
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 806
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 811
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 817
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 834
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 835
            echo "    background: #333;
";
        } elseif (("light" ==         // line 836
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 837
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 839
        echo "}

";
        // line 842
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 843
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 844
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 845
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 846
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 848
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 858
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

";
        // line 865
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 901
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 914
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
";
        // line 915
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 916
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 917
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 918
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 920
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 924
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    text-align: right;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 959
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 972
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 979
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 980
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 981
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 982
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 984
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 986
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border-color: ";
        // line 987
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 989
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 992
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 993
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1005
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1013
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1015
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-size: 16px;
    position: absolute;
}

";
        // line 1023
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1045
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1067
        echo "body.show .form-control {
";
        // line 1068
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1069
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1070
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1071
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 1073
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1087
        echo "body.error .error-description {
    background: ";
        // line 1088
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border: 1px solid ";
        // line 1089
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1090
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1097
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 1098
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 15px;
}

";
        // line 1113
        echo "
";
        // line 1117
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1141
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1181
        echo "    body.list table {
        background: ";
        // line 1182
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
        border: 1px solid ";
        // line 1183
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1189
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1193
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1198
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1204
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1209
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1210
            echo "        background: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        color: ";
            // line 1211
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        }
        // line 1213
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1216
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1217
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1218
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1219
            echo "        color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1221
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1229
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1232
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    ";
        // line 1235
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1236
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 1237
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        border-top: 1px solid ";
            // line 1238
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1240
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1242
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1251
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1260
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1261
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1264
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 70%;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1300
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_0b61fb22b6d2e4da510790e360e54ffac6dbc81aa220840ac420430ca5b31280->leave($__internal_0b61fb22b6d2e4da510790e360e54ffac6dbc81aa220840ac420430ca5b31280_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1783 => 1300,  1746 => 1264,  1740 => 1261,  1736 => 1260,  1724 => 1251,  1712 => 1242,  1708 => 1240,  1703 => 1238,  1698 => 1237,  1696 => 1236,  1693 => 1235,  1688 => 1232,  1682 => 1229,  1672 => 1221,  1666 => 1219,  1664 => 1218,  1659 => 1217,  1657 => 1216,  1652 => 1213,  1647 => 1211,  1642 => 1210,  1640 => 1209,  1632 => 1204,  1623 => 1198,  1615 => 1193,  1608 => 1189,  1599 => 1183,  1595 => 1182,  1592 => 1181,  1551 => 1141,  1526 => 1117,  1523 => 1113,  1508 => 1098,  1504 => 1097,  1494 => 1090,  1490 => 1089,  1486 => 1088,  1483 => 1087,  1470 => 1073,  1464 => 1071,  1462 => 1070,  1457 => 1069,  1455 => 1068,  1452 => 1067,  1431 => 1045,  1410 => 1023,  1402 => 1015,  1398 => 1013,  1391 => 1005,  1379 => 993,  1375 => 992,  1369 => 989,  1364 => 987,  1360 => 986,  1356 => 984,  1350 => 982,  1348 => 981,  1343 => 980,  1341 => 979,  1332 => 972,  1319 => 959,  1283 => 924,  1277 => 920,  1271 => 918,  1269 => 917,  1264 => 916,  1262 => 915,  1258 => 914,  1243 => 901,  1207 => 865,  1201 => 858,  1192 => 848,  1188 => 846,  1186 => 845,  1183 => 844,  1181 => 843,  1178 => 842,  1174 => 839,  1168 => 837,  1166 => 836,  1163 => 835,  1161 => 834,  1142 => 817,  1135 => 811,  1129 => 806,  1119 => 797,  1114 => 794,  1112 => 793,  1105 => 790,  1103 => 789,  1092 => 780,  1086 => 778,  1084 => 777,  1081 => 776,  1079 => 775,  1071 => 769,  1065 => 767,  1063 => 766,  1059 => 764,  1057 => 763,  1038 => 746,  1032 => 744,  1030 => 743,  1027 => 742,  1025 => 741,  1018 => 736,  1012 => 734,  1010 => 733,  1007 => 732,  1005 => 731,  997 => 725,  991 => 723,  989 => 722,  986 => 721,  984 => 720,  980 => 718,  964 => 702,  941 => 680,  919 => 661,  892 => 636,  888 => 634,  881 => 630,  878 => 629,  869 => 621,  866 => 620,  863 => 617,  856 => 609,  849 => 603,  845 => 602,  835 => 594,  812 => 572,  808 => 571,  805 => 570,  795 => 560,  780 => 547,  776 => 546,  773 => 545,  759 => 532,  750 => 526,  744 => 523,  738 => 520,  731 => 516,  721 => 509,  710 => 501,  704 => 498,  698 => 494,  689 => 484,  683 => 480,  681 => 479,  677 => 477,  672 => 475,  666 => 473,  664 => 472,  660 => 470,  658 => 469,  653 => 466,  649 => 464,  647 => 463,  644 => 462,  642 => 461,  637 => 458,  633 => 456,  631 => 455,  628 => 454,  626 => 453,  617 => 446,  613 => 444,  611 => 443,  608 => 442,  606 => 441,  600 => 437,  595 => 435,  592 => 434,  590 => 433,  586 => 432,  581 => 431,  579 => 430,  571 => 424,  567 => 422,  565 => 421,  562 => 420,  560 => 419,  556 => 417,  550 => 415,  548 => 414,  545 => 413,  543 => 412,  536 => 407,  530 => 401,  526 => 397,  521 => 394,  519 => 393,  515 => 391,  510 => 389,  505 => 388,  503 => 387,  499 => 386,  494 => 385,  492 => 384,  479 => 374,  460 => 358,  455 => 355,  449 => 353,  447 => 352,  441 => 350,  439 => 349,  430 => 344,  426 => 342,  424 => 341,  419 => 339,  412 => 334,  383 => 306,  375 => 300,  369 => 296,  364 => 294,  353 => 286,  348 => 284,  330 => 269,  325 => 267,  308 => 253,  303 => 250,  297 => 248,  295 => 247,  290 => 246,  288 => 245,  269 => 228,  263 => 223,  260 => 222,  243 => 206,  232 => 198,  228 => 197,  224 => 196,  212 => 187,  208 => 186,  204 => 185,  178 => 161,  171 => 154,  164 => 149,  154 => 143,  147 => 139,  136 => 130,  130 => 127,  127 => 126,  118 => 117,  114 => 116,  108 => 113,  104 => 112,  98 => 108,  80 => 90,  70 => 81,  63 => 77,  48 => 66,  42 => 60,  35 => 52,  32 => 45,  30 => 44,  27 => 43,  25 => 5,  22 => 4,);
    }
}
/* {#  ========================================================================*/
/*     EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License*/
/*     ======================================================================== #}*/
/* */
/* {% set color_schemes = {*/
/*     'dark': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#222222',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#111111',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#252525',*/
/*         gray_dark: '#444',*/
/*         gray: '#AAA',*/
/*         gray_light: '#CCC',*/
/*         gray_lighter: '#F5F5F5',*/
/*         page_background: '#F5F5F5',*/
/*         table_header: '#EEE',*/
/*         table_border: '#CCC',*/
/*         table_row_border: '#DDD',*/
/*     },*/
/*     'light': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#444444',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#333333',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#444',*/
/*         gray_dark: '#AAA',*/
/*         gray: '#CCC',*/
/*         gray_light: '#F5F5F5',*/
/*         gray_lighter: '#FAFAFA',*/
/*         page_background: '#FFFFFF',*/
/*         table_header: '#FAFAFA',*/
/*         table_border: '#FFFFFF',*/
/*         table_row_border: '#E5E5E5',*/
/*     }*/
/* } %}*/
/* */
/* {% set colors = color_schemes[color_scheme] %}*/
/* */
/* {% autoescape false %}*/
/* {# -------------------------------------------------------------------------*/
/*    RESET STYLES*/
/*    ------------------------------------------------------------------------- #}*/
/* {# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied*/
/*    globally by the AdminLTE template styles #}*/
/* .sf-toolbarreset {*/
/*     -webkit-font-smoothing: subpixel-antialiased;*/
/*     -moz-osx-font-smoothing: auto;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    BASIC STYLES*/
/*    ------------------------------------------------------------------------- #}*/
/* body {*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;*/
/* }*/
/* */
/* {# Links*/
/*    ------------------------------------------------------------------------- #}*/
/* a        { color: {{ colors.link }}; }*/
/* a:hover  { opacity: 0.9; }*/
/* a:active { outline: 0; }*/
/* */
/* #main a:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* a.text-primary,*/
/* a.text-primary:focus {*/
/*     color: {{ colors.link }};*/
/* }*/
/* a.text-danger,*/
/* a.text-danger:focus {*/
/*     color: {{ colors.danger }};*/
/* }*/
/* a.text-primary:hover,*/
/* a.text-danger:hover {*/
/*     opacity: 0.9;*/
/* }*/
/* */
/* {# Lists*/
/*    ------------------------------------------------------------------------- #}*/
/* ul, ol {*/
/*     margin: 1em 0 1em 1em;*/
/*     padding: 0;*/
/* }*/
/* li {*/
/*     margin-bottom: 1em;*/
/* }*/
/* */
/* ul.inline {*/
/*     list-style: none;*/
/*     margin: 0;*/
/* }*/
/* ul.inline li {*/
/*     margin: 0;*/
/* }*/
/* */
/* {# Flash messages*/
/*    ------------------------------------------------------------------------- #}*/
/* div.flash {*/
/*     padding: .5em;*/
/* }*/
/* div.flash-success {*/
/*     background: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error strong {*/
/*     padding-right: .5em;*/
/* }*/
/* */
/* {# Labels*/
/*    ------------------------------------------------------------------------- #}*/
/* {# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}*/
/* .label:not([class*=label-]) {*/
/*     background: {{ colors.gray_darker }};*/
/* }*/
/* .label {*/
/*     color: {{ colors.white }};*/
/*     display: inline-block;*/
/*     font-size: 11px;*/
/*     padding: 4px;*/
/*     text-transform: uppercase;*/
/* }*/
/* */
/* .label-success {*/
/*     {# !important is required to override AdminLTE styles #}*/
/*     background: {{ colors.success }} !important;*/
/* }*/
/* .label-danger {*/
/*     {# !important is required to override AdminLTE styles #}*/
/*     background: {{ colors.danger }} !important;*/
/* }*/
/* .label-empty {*/
/*     background: transparent;*/
/*     border: 2px dotted;*/
/*     border-radius: 4px;*/
/*     color: {{ colors.gray_light }};*/
/*     padding: 4px 8px;*/
/* }*/
/* */
/* {# this makes boolean labels to be of the same width for most languages #}*/
/* .boolean .label,*/
/* .toggle .label {*/
/*     min-width: 33px;*/
/* }*/
/* */
/* {# Switches / toggles*/
/*    ------------------------------------------------------------------------- #}*/
/* .toggle.btn-xs {*/
/*  width: 44px;*/
/* }*/
/* .toggle-group .btn,*/
/* .toggle-group .btn:hover {*/
/*    border-radius: 3px;*/
/*    font-size: 10px;*/
/*    font-weight: bold;*/
/*    text-transform: uppercase;*/
/* }*/
/* .toggle-group .btn {*/
/*    padding: 4px 6px;*/
/* }*/
/* .toggle-group .btn:hover {*/
/*     border: 0;*/
/* }*/
/* .toggle-group .btn + .btn {*/
/*     margin-left: 0;*/
/* }*/
/* .toggle-group .toggle-on,*/
/* .toggle-group .toggle-on.btn-xs,*/
/* .toggle-group .toggle-on:hover,*/
/* .toggle-group .toggle-on:active,*/
/* .toggle-group .toggle-on:active:hover {*/
/*     background: {{ colors.success }};*/
/*     border-color: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 5px 4px 0;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-off,*/
/* .toggle-group .toggle-off.btn-xs,*/
/* .toggle-group .toggle-off:hover,*/
/* .toggle-group .toggle-off:active,*/
/* .toggle-group .toggle-off:active:hover {*/
/*     background: {{ colors.danger }};*/
/*     border-color: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 0 4px 5px;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-handle,*/
/* .toggle-group .toggle-handle:hover,*/
/* .toggle-group .toggle-handle:active,*/
/* .toggle-group .toggle-handle:active:hover {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border: 0;*/
/*     border-radius: 2px;*/
/*     height: 19px;*/
/*     margin-top: 2px;*/
/*     padding: 5px;*/
/* }*/
/* .toggle .btn-success .toggle-handle {*/
/*     box-shadow: -2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* .toggle .btn-danger .toggle-handle {*/
/*     box-shadow: 2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* */
/* {# Badges*/
/*    ------------------------------------------------------------------------- #}*/
/* span.badge {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* */
/* {# Buttons*/
/*    ------------------------------------------------------------------------- #}*/
/* .btn:focus {*/
/*     outline: none;*/
/* }*/
/* .btn + .btn {*/
/*     margin-left: 5px;*/
/* }*/
/* */
/* button.btn:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* .btn,*/
/* .btn:hover,*/
/* .btn:active,*/
/* .btn:focus,*/
/* .btn:active:hover  {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray }};*/
/* {% endif %}*/
/*     border: 1px solid transparent;*/
/*     border-radius: 4px;*/
/*     box-shadow: none;*/
/*     color: {{ colors.text }};*/
/*     display: inline-block;*/
/*     line-height: 1.42857143;*/
/*     opacity: 1;*/
/*     outline: none;*/
/*     padding: 6px 12px;*/
/*     text-align: center;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-primary:hover,*/
/* .btn-primary:active,*/
/* .btn-primary:focus,*/
/* .btn-primary:active:hover {*/
/*     background-color: {{ brand_color }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* .btn-default,*/
/* .btn-default:hover,*/
/* .btn-default:active,*/
/* .btn-default:focus,*/
/* .btn-default:active:hover {*/
/*     border-color: transparent;*/
/* }*/
/* */
/* .btn-danger,*/
/* .btn-danger:hover,*/
/* .btn-danger:active,*/
/* .btn-danger:focus,*/
/* .btn-danger:active:hover {*/
/*     background-color: {{ colors.danger }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* .btn-success,*/
/* .btn-success:hover,*/
/* .btn-success:active,*/
/* .btn-success:focus,*/
/* .btn-success:active:hover {*/
/*     background-color: {{ colors.success }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* {# .bnt-secondary is for 'buttons' displayed as text links #}*/
/* .btn-secondary,*/
/* .btn-secondary:hover,*/
/* .btn-secondary:active,*/
/* .btn-secondary:focus,*/
/* .btn-secondary:active:hover {*/
/*     background: transparent;*/
/*     color: {{ brand_color }};*/
/*     text-decoration: underline;*/
/* }*/
/* .btn-secondary:hover {*/
/*     text-decoration: none;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-danger,*/
/* .btn-success {*/
/*     font-weight: bold;*/
/* }*/
/* */
/* .btn i {*/
/*     font-size: 16px;*/
/*     margin-right: 2px;*/
/* }*/
/* */
/* .btn-flat,*/
/* .btn-flat:hover,*/
/* .btn-flat:active,*/
/* .btn-flat:focus,*/
/* .btn-flat:active:hover {*/
/*     border-radius: 0;*/
/* }*/
/* */
/* {# Forms*/
/*    ------------------------------------------------------------------------- #}*/
/* .form-inline .form-control {*/
/*     margin-bottom: 5px;*/
/* }*/
/* .form-control,*/
/* .form-inline .form-control {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/* {% if 'dark' == color_scheme %}*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% endif %}*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .form-control:focus {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-color: {{ colors.gray_dark }};*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/* }*/
/* */
/* .has-error .error-block {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     padding-top: 5px;*/
/* }*/
/* .has-error .error-block .label-danger {*/
/*     margin-right: 3px;*/
/* }*/
/* .has-error .error-block ul {*/
/*     margin: .5em 0 .5em 1.5em;*/
/* }*/
/* .has-error .error-block ul li {*/
/*     margin-bottom: .5em;*/
/* }*/
/* */
/* .help-block,*/
/* .has-error .help-block {*/
/*     color: {{ colors.text_muted }};*/
/*     font-size: 13px;*/
/* }*/
/* .nullable-control {*/
/*    padding-top: 5px;*/
/* }*/
/* */
/* .form-actions.stuck {*/
/*     bottom: 0;*/
/*     position: fixed;*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: {{ colors.gray_lighter }};*/
/*     box-shadow: 0 -1px 4px {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/*     box-shadow: 0 -1px 4px {{ colors.gray }};*/
/* {% endif %}*/
/*     height: 52px;*/
/*     padding-top: 10px;*/
/* {% if kernel_debug|default(false) %}*/
/*     height: 85px;*/
/*     padding-bottom: 45px;*/
/* {% endif %}*/
/* }*/
/* */
/* {# Field: collection*/
/*    ------------------------------------------------------------------------- #}*/
/* .field-collection .collection-empty {*/
/*     margin: .5em 0;*/
/* }*/
/* */
/* {# Field: special Form Fields (dividers, groups, sections)*/
/*    ------------------------------------------------------------------------- #}*/
/* .field-divider hr {*/
/*     margin-top: 15px;*/
/*     margin-bottom: 26px;*/
/*     border: 0;*/
/*     border-top: 1px solid;*/
/* {% if 'dark' == color_scheme %}*/
/*     border-top-color: #DDD;*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-top-color: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/* }*/
/* .field-group .field-divider hr {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-top-color: #DDD;*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-top-color: #EEE;*/
/* {% endif %}*/
/* }*/
/* */
/* .field-section {*/
/*     margin: 16px 0 15px;*/
/* }*/
/* .field-section h2 {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-bottom: 1px solid {{ colors.gray_light }};*/
/*     color: {{ colors.gray_dark }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-bottom: 1px solid #EEE;*/
/*     color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/*     font-size: 16px;*/
/*     padding-bottom: 6px;*/
/* }*/
/* .field-section h2 i {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: #555;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: #777;*/
/* {% endif %}*/
/*     margin-right: 2px;*/
/* }*/
/* .field-section p.help-block {*/
/*     margin: 8px 0 0;*/
/* }*/
/* */
/* .field-group .box {*/
/* {% if 'dark' == color_scheme %}*/
/*     border: 1px solid #DDD;*/
/* {% elseif 'light' == color_scheme %}*/
/*     border: 1px solid #EEE;*/
/* {% endif %}*/
/*     box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);*/
/* }*/
/* .field-group .box-header i {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: #555;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: #777;*/
/* {% endif %}*/
/*     margin-right: 2px;*/
/* }*/
/* .field-group .box-header.with-border {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: #F0F0F0;*/
/*     border-bottom-color: #DDD;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_light }};*/
/*     border-bottom-color: #EEE;*/
/*     color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/*     padding: 11px 10px 9px;*/
/* }*/
/* {% if 'light' == color_scheme %}*/
/* .field-group .box-header .box-title {*/
/*     color: #777;*/
/* }*/
/* {% endif %}*/
/* .field-group .box-body {*/
/*     padding: 15px 15px 5px;*/
/* }*/
/* .field-group .box-body > .help-block {*/
/*     margin-top: 0;*/
/* }*/
/* */
/* {# Select2 widget*/
/*    ------------------------------------------------------------------------- #}*/
/* {# these styles must be applied after loading the default select2 styles #}*/
/* .select2-container {*/
/*     width: 100% !important;*/
/* }*/
/* .select2-container--bootstrap .select2-selection {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .select2-container--bootstrap .select2-selection .select2-search--inline {*/
/*     margin: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {*/
/*     color: {{ colors.text }};*/
/*     padding-top: 4px;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option {*/
/*     margin-bottom: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option[aria-selected=true] {*/
/*     background-color: {{ colors.gray_light }};*/
/*     font-weight: bold;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {*/
/*     color: {{ colors.text }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     position: relative;*/
/*     top: -1px;*/
/* }*/
/* .select2-container--bootstrap .select2-search--dropdown .select2-search__field {*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/*     border-radius: 0;*/
/*     margin: 5px 10px;*/
/*     padding: 6px;*/
/*     width: 96%;*/
/* }*/
/* .select2-search--inline .select2-search__field:focus {*/
/*     outline: 0;*/
/*     border: 0;*/
/* }*/
/* */
/* {# VichUploaderBundle files and images*/
/*    ------------------------------------------------------------------------- #}*/
/* .easyadmin-vich-image img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 300px;*/
/*     max-width: 400px;*/
/* }*/
/* .easyadmin-vich-image input[type="file"],*/
/* .easyadmin-vich-file input[type="file"] {*/
/*     padding-top: 7px;*/
/* }*/
/* .easyadmin-vich-file a {*/
/*     display: inline-block;*/
/*     padding-top: 7px;*/
/* }*/
/* {# the checkbox to delete the image/file #}*/
/* .easyadmin-vich-file .field-checkbox {*/
/*     margin-bottom: 0;*/
/* }*/
/* .easyadmin-vich-file .field-checkbox .col-sm-2,*/
/* .easyadmin-vich-image .field-checkbox .col-sm-2 {*/
/*     display: none;*/
/* }*/
/* */
/* {# Thumbnails and image lightbox*/
/*    ------------------------------------------------------------------------- #}*/
/* .easyadmin-thumbnail img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 100px;*/
/*     max-width: 100%;*/
/* }*/
/* .easyadmin-thumbnail img:hover {*/
/*     cursor: zoom-in;*/
/* }*/
/* .featherlight .easyadmin-lightbox:hover {*/
/*     cursor: zoom-out;*/
/* }*/
/* .easyadmin-lightbox {*/
/*     display: none;*/
/* }*/
/* .featherlight .easyadmin-lightbox {*/
/*     display: block;*/
/* }*/
/* .easyadmin-lightbox img {*/
/*     max-width: 100%;*/
/* }*/
/* */
/* {# Modal windows*/
/*    ------------------------------------------------------------------------- #}*/
/* .modal-dialog .modal-content {*/
/*     border-radius: 0;*/
/* }*/
/* .modal-dialog .modal-content .modal-body h4 {*/
/*     font-size: 21px;*/
/*     margin: .5em 0;*/
/* }*/
/* .modal-dialog .modal-footer {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border-top: 1px solid {{ colors.gray_light }};*/
/*     margin-top: 1.5em;*/
/* }*/
/* */
/* {# Utils*/
/*    ------------------------------------------------------------------------- #}*/
/* .newrow, .new-row {*/
/*     clear: both;*/
/*     display: block;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    LAYOUT*/
/*    ------------------------------------------------------------------------- #}*/
/* */
/* {# Wrapper*/
/*    ------------------------------------------------------------------------- #}*/
/* .content-wrapper {*/
/*     background: {{ colors.page_background }};*/
/* }*/
/* .fixed .content-wrapper {*/
/*     padding-top: 50px;*/
/* }*/
/* */
/* {# Header*/
/*    ------------------------------------------------------------------------- #}*/
/* .main-header {*/
/*     background: {{ brand_color }};*/
/*     position: relative;*/
/* }*/
/* .main-header .logo {*/
/*     color: {{ colors.white }};*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif; {# needed to override AdminLTE styles #}*/
/*     font-size: 18px;*/
/*     font-weight: bold;*/
/*     height: 45px;*/
/*     line-height: 45px;*/
/*     padding: 0;*/
/* }*/
/* .main-header .logo-long .logo-lg {*/
/*     font-size: 16px;*/
/* }*/
/* .main-header .logo-lg {*/
/*     overflow: hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/* }*/
/* .main-header #header-logo {*/
/* }*/
/* .main-header img {*/
/*     margin-top: -2px;*/
/*     max-height: 36px;*/
/* }*/
/* .main-header li {*/
/*     margin-bottom: 0;*/
/* }*/
/* */
/* .main-header > .navbar {*/
/*     background-color: {{ brand_color }};*/
/*     color: rgba(255, 255, 255, 0.9);*/
/*     margin-left: 0;*/
/*     min-height: 40px;*/
/* }*/
/* */
/* .main-header .navbar .sidebar-toggle {*/
/*     color: rgba(255, 255, 255, 0.8);*/
/*     display: inline-block;*/
/*     font-size: 16px;*/
/*     height: 35px;*/
/*     left: 0;*/
/*     line-height: 35px;*/
/*     padding: 0 15px;*/
/*     position: absolute;*/
/*     text-align: center;*/
/*     top: 45px;*/
/* }*/
/* .sidebar-mini.sidebar-collapse .sidebar-toggle {*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* .navbar-custom-menu,*/
/* .navbar-custom-menu ul.navbar-nav,*/
/* .navbar-custom-menu ul.navbar-nav .user-menu {*/
/*     float: none;*/
/* }*/
/* .navbar-custom-menu {*/
/*     background: rgba(255, 255, 255, 0.1);*/
/*     color: rgba(255, 255, 255, 0.8);*/
/*     font-size: 13px;*/
/*     font-weight: bold;*/
/*     height: 35px;*/
/*     line-height: 35px;*/
/*     padding: 0 15px;*/
/*     text-align: right;*/
/*     width: 100%;*/
/* }*/
/* */
/* {# Main body*/
/*    ------------------------------------------------------------------------- #}*/
/* #content #main {*/
/*     padding-bottom: 3em;*/
/* }*/
/* .content {*/
/*     padding-top: 10px;*/
/* }*/
/* .content-header {*/
/*     padding: 12px 15px 0 15px;*/
/* }*/
/* .content-header h1 {*/
/*     margin: 0;*/
/*     font-size: 24px;*/
/* }*/
/* */
/* {# Sidebar*/
/*    ------------------------------------------------------------------------- #}*/
/* .main-sidebar,*/
/* .wrapper {*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: #333;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/* {% endif %}*/
/* }*/
/* .main-sidebar {*/
/*     padding-top: 80px;*/
/* }*/
/* */
/* .sidebar-menu li.header {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: #777;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray_dark }};*/
/* {% endif %}*/
/*     font-size: 12px;*/
/*     font-weight: bold;*/
/*     text-transform: uppercase;*/
/* }*/
/* .treeview-menu > li.header {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: #404040;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     padding-left: 28px;*/
/* }*/
/* */
/* .sidebar-menu li a,*/
/* .sidebar-menu li a span,*/
/* .sidebar-menu li.header,*/
/* .sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {*/
/*     overflow: hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/* }*/
/* .sidebar-mini.sidebar-collapse .sidebar-menu li a {*/
/*     overflow: visible;*/
/* }*/
/* */
/* .sidebar-menu > li > a,*/
/* .sidebar-menu .treeview-menu > li > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: #333;*/
/*     color: #CCC;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/*     border-left: 3px solid transparent;*/
/*     display: block;*/
/*     font-weight: bold;*/
/*     opacity: 1;*/
/* }*/
/* .sidebar-menu .treeview-menu > li > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: #404040;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     font-size: 13px;*/
/*     padding: 8px 5px 8px 25px;*/
/* }*/
/* .sidebar-menu > li:hover > a,*/
/* .sidebar-menu .treeview-menu > li:hover > a,*/
/* .sidebar-menu > li.active > a,*/
/* .sidebar-menu .treeview-menu > li.active > a,*/
/* .sidebar-collapse .sidebar-menu > li.active.submenu-active > a,*/
/* .sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/*     background: #4D4D4D;*/
/*     border-left-color: #BBB;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: #DCDCDC;*/
/*     border-left-color: #808080;*/
/* {% endif %}*/
/* }*/
/* .sidebar-menu > li > a > .fa {*/
/*     width: 22px;*/
/* }*/
/* .sidebar-menu .treeview-menu {*/
/*     padding: 0;*/
/* }*/
/* */
/* {# icon displayed for collapsed submenus #}*/
/* .sidebar-menu li > a > .pull-right {*/
/*     font-weight: bold;*/
/*     text-align: right;*/
/* }*/
/* {# icon displayed for revealed submenus #}*/
/* .sidebar-menu li.active > a > .fa-angle-left {*/
/*     top: 30px;*/
/*     right: 0;*/
/* }*/
/* */
/* {# when the sidebar is collapsed #}*/
/* .sidebar-collapse .sidebar-menu > li > a {*/
/*     padding: 12px 5px 12px 12px;*/
/* }*/
/* .sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {*/
/*     padding-left: 12px;*/
/* }*/
/* .sidebar-collapse .sidebar-menu > li > a > i.fa {*/
/*     font-size: 18px;*/
/* }*/
/* .sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {*/
/*     padding: 0;*/
/* }*/
/* .sidebar-collapse .sidebar-menu > li:hover > a,*/
/* .sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,*/
/* .sidebar-menu > li.active.submenu-active > a,*/
/* .sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {*/
/*     border-left-color: transparent;*/
/* {% if 'dark' == color_scheme %}*/
/*     background: #333;*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_light }};*/
/* {% endif %}*/
/* }*/
/* */
/* {# when collapsed, menu dividers are displayed as a straight line #}*/
/* .sidebar-mini.sidebar-collapse .sidebar-menu li.header {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-bottom: 1px solid #777;*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-bottom: 1px solid #BBB;*/
/* {% endif %}*/
/*     display: block !important;*/
/*     font-size: 0;*/
/*     height: 1px;*/
/*     margin: 0;*/
/*     padding: 0;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    COMMON ADMIN PAGES*/
/*    ------------------------------------------------------------------------- #}*/
/* body.easyadmin h1.title {*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    LIST PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* */
/* body.list .global-actions {*/
/*     display: table;*/
/*     width: 100%;*/
/* }*/
/* body.list .global-actions .button-action {*/
/*     display: table-cell;*/
/*     padding-left: 10px;*/
/*     vertical-align: middle;*/
/*     width: 120px;*/
/* }*/
/* body.list .global-actions .button-action a {*/
/*     float: right;*/
/* }*/
/* body.list .global-actions .form-action {*/
/*     display: table-cell;*/
/*     width: 100%;*/
/* }*/
/* body.list .global-actions .form-action .input-group {*/
/*     width: 100%;*/
/* }*/
/* */
/* body.list .global-actions .form-control {*/
/*     box-shadow: none;*/
/* }*/
/* body.list .global-actions .input-group-btn > button.btn:not(:last-child) {*/
/*     border-bottom-right-radius: 3px;*/
/*     border-top-right-radius: 3px;*/
/* }*/
/* body.list .global-actions .input-group-btn a.btn {*/
/*     border-radius: 3px;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* {# Responsive tables*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .table-responsive,*/
/* body.list table {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table thead {*/
/*     display: none;*/
/* }*/
/* body.list .table tbody {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table tbody tr {*/
/*     background: {{ colors.white }};*/
/* {% if 'dark' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray }};*/
/* {% endif %}*/
/*     display: block;*/
/*     margin-bottom: 1em;*/
/* }*/
/* body.list table tbody td {*/
/*     border-bottom: 1px solid {{ colors.table_row_border }};*/
/*     border-top: 0;*/
/*     display: block;*/
/*     text-align: right;*/
/*     vertical-align: middle;*/
/* }*/
/* body.list table tbody td:last-child {*/
/*     border-bottom: 0;*/
/* }*/
/* table td:before {*/
/*     content: attr(data-label);*/
/*     float: left;*/
/*     font-weight: bold;*/
/* }*/
/* table td:after {*/
/*     clear: both;*/
/*     content: "";*/
/*     display: block;*/
/* }*/
/* */
/* body.list table tbody td.image .easyadmin-thumbnail img {*/
/*     border-width: 2px;*/
/*     max-height: 50px;*/
/*     max-width: 150px;*/
/* }*/
/* body.list table tbody td.association .badge {*/
/*     font-size: 13px;*/
/* }*/
/* body.list table tbody td.actions a {*/
/*     font-weight: bold;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* {# Search results*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .table tbody span.highlight {*/
/*     background: #FF9;*/
/*     border-radius: 2px;*/
/*     padding: 1px;*/
/* }*/
/* body.list .table tbody .no-results span.highlight,*/
/* body.list .table tbody .actions span.highlight {*/
/*     background: 0;*/
/*     border-radius: 0;*/
/* }*/
/* */
/* {# Pagination*/
/*    ------------------------------------------------------------------------- #}*/
/* body.list .pagination {*/
/*     float: right;*/
/*     margin: 0;*/
/* }*/
/* body.list .pagination > .disabled > span {*/
/*     background: transparent;*/
/*     border: 1px solid transparent;*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray }};*/
/* {% endif %}*/
/* }*/
/* body.list .pagination > li > a {*/
/*     background: {{ colors.white }};*/
/*     border-color: {{ colors.gray_light }};*/
/*     border-radius: 0;*/
/*     color: {{ colors.text }};*/
/* }*/
/* body.list .pagination > li > a:hover {*/
/*     background: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* .pagination > li > a,*/
/* .pagination > li > span {*/
/*     padding: 6px 8px;*/
/* }*/
/* body.list .pagination > li i {*/
/*     padding: 0 3px;*/
/* }*/
/* {# this hack is needed to avoid the last pagination page from showing wrong*/
/*    borders for the second pagination element (we need to put this element above*/
/*    the third element) #}*/
/* body.list .pagination.last-page li:nth-child(2) {*/
/*     position: relative;*/
/*     z-index: 1;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    FORM PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* form label.control-label.required:after {*/
/*     content: "\00a0*";*/
/*     color: {{ colors.danger }};*/
/*     font-size: 16px;*/
/*     position: absolute;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    NEW PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.new textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.new .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.new .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.new #form-actions-row button,*/
/* body.new #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.new .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    EDIT PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.edit textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.edit .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.edit .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.edit #form-actions-row button,*/
/* body.edit #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.edit .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    SHOW PAGE*/
/*    ------------------------------------------------------------------------- #}*/
/* body.show .form-control {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     border: 0;*/
/*     border-radius: 0;*/
/*     box-shadow: none;*/
/*     height: auto;*/
/* }*/
/* body.show .form-control.text {*/
/*     min-height: 34px;*/
/*     max-height: 250px;*/
/*     overflow-y: auto;*/
/* }*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    ERROR PAGES*/
/*    ------------------------------------------------------------------------- #}*/
/* body.error .error-description {*/
/*     background: {{ colors.white }};*/
/*     border: 1px solid {{ colors.gray_lighter }};*/
/*     box-shadow: 0 0 3px {{ colors.gray_light }};*/
/*     margin: 2em auto 2em;*/
/*     max-width: 90%;*/
/*     min-height: 150px;*/
/*     padding: 0;*/
/* }*/
/* body.error .error-description h1 {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     font-size: 18px;*/
/*     font-weight: bold;*/
/*     margin-top: 0;*/
/*     padding: 10px;*/
/*     text-transform: uppercase;*/
/* }*/
/* body.error .error-message {*/
/*     font-size: 16px;*/
/*     padding: 15px;*/
/* }*/
/* */
/* {# =========================================================================*/
/*    RESPONSIVE*/
/*    ========================================================================= #}*/
/* */
/* {# -------------------------------------------------------------------------*/
/*    VERTICAL TABLETS and LANDSCAPE SMARTPHONES*/
/*    ------------------------------------------------------------------------- #}*/
/* @media (min-width: 768px) {*/
/*     ul, ol {*/
/*         margin-left: 2em;*/
/*     }*/
/* */
/*     .main-header > .navbar {*/
/*       min-height: 50px;*/
/*     }*/
/*     .sidebar-mini.sidebar-collapse .main-header .navbar {*/
/*         margin-left: 0;*/
/*     }*/
/*     .main-header #header-logo {*/
/*         float: left;*/
/*     }*/
/*     .main-header .logo {*/
/*         font-size: 21px;*/
/*         height: 50px;*/
/*         line-height: 50px;*/
/*         text-align: left;*/
/*         transition: padding-left .3s linear;*/
/*     }*/
/*     .sidebar-mini.sidebar-collapse .main-header .logo {*/
/*         padding-left: 15px;*/
/*         width: auto; {# neutralizes AdminLTE styles #}*/
/*         transition: padding-left .3s linear;*/
/*     }*/
/* */
/*     .main-header .navbar .sidebar-toggle {*/
/*         height: 50px;*/
/*         line-height: 50px;*/
/*         position: static;*/
/*         padding: 0 12px 0 18px;*/
/*     }*/
/*     .sidebar-mini.sidebar-collapse .sidebar-toggle {*/
/*         background: rgba(0, 0, 0, 0.15);*/
/*         font-size: 18px;*/
/*         padding-left: 12px;*/
/*         width: 50px;*/
/*     }*/
/* */
/*     .navbar-custom-menu,*/
/*     .navbar-custom-menu ul.navbar-nav,*/
/*     .navbar-custom-menu ul.navbar-nav .user-menu {*/
/*         float: right;*/
/*     }*/
/*     .navbar-custom-menu {*/
/*         background: inherit;*/
/*         height: 50px;*/
/*         line-height: 50px;*/
/*         width: auto;*/
/*     }*/
/*     .navbar-custom-menu .user-menu i {*/
/*         padding-right: 4px;*/
/*     }*/
/* */
/*     .main-sidebar {*/
/*         padding-top: 50px;*/
/*     }*/
/* */
/*     .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {*/
/*         padding-left: 5px;*/
/*     }*/
/* */
/*     {# these table styles are needed to override the "responsive tables" styles #}*/
/*     body.list table {*/
/*         background: {{ colors.white }};*/
/*         border: 1px solid {{ colors.table_border }};*/
/*     }*/
/*     body.list table thead {*/
/*         display: table-header-group;*/
/*     }*/
/*     body.list table thead th {*/
/*         background: {{ colors.table_header }};*/
/*         padding: 0;*/
/*     }*/
/*     body.list table thead th i {*/
/*         color: {{ colors.gray }};*/
/*         padding: 0 3px;*/
/*     }*/
/*     body.list table thead th a,*/
/*     body.list table thead th span {*/
/*         color: {{ colors.text }};*/
/*         display: block;*/
/*         padding: 10px 6px;*/
/*         white-space: nowrap;*/
/*     }*/
/*     body.list table thead th a:hover {*/
/*         background: {{ colors.gray_light }};*/
/*         text-decoration: none;*/
/*     }*/
/*     body.list table thead th.sorted,*/
/*     body.list table thead th.sorted a {*/
/* {% if 'dark' == color_scheme %}*/
/*         background: {{ brand_color }};*/
/*         color: {{ colors.white }};*/
/* {% endif %}*/
/*     }*/
/*     body.list table thead th.sorted a:hover i,*/
/*     body.list table thead th.sorted i {*/
/* {% if 'dark' == color_scheme %}*/
/*         color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*         color: {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list th.boolean, body.list td.boolean,*/
/*     body.list th.toggle, body.list td.toggle,*/
/*     body.list td.image {*/
/*         text-align: center;*/
/*     }*/
/* */
/*     body.list .table thead tr th {*/
/*         border-bottom: 2px solid {{ colors.gray_light }};*/
/*     }*/
/*     body.list .table thead tr th.sorted {*/
/*         border-bottom: 2px outset {{ brand_color }};*/
/*     }*/
/*     {# these styles are needed to fix some visual glitches when the sort field is the first column #}*/
/*     body.list .table thead tr th:first-child.sorted {*/
/* {% if 'dark' == color_scheme %}*/
/*         border-left: 1px solid {{ brand_color }};*/
/*         border-top: 1px solid {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list .table tbody {*/
/*         border-bottom: 2px double {{ colors.gray_light }};*/
/*     }*/
/*     body.list table tbody tr {*/
/*         border: 0;*/
/*         display: table-row;*/
/*         margin-bottom: 0;*/
/*     }*/
/*     body.list table tbody td {*/
/*         border-bottom: 0;*/
/*         border-top: 1px solid {{ colors.table_row_border }};*/
/*         display: table-cell;*/
/*         text-align: left;*/
/*     }*/
/*     table td:before {*/
/*         content: none;*/
/*         float: none;*/
/*     }*/
/*     body.list table tbody td.sorted {*/
/*         background: {{ colors.gray_lighter }};*/
/*         border-color: {{ colors.table_row_border }};*/
/*     }*/
/*     body.list .table tbody tr:hover td {*/
/*         background: {{ colors.gray_lighter }};*/
/*     }*/
/*     body.list table tbody td.actions a {*/
/*         margin-left: 0;*/
/*         margin-right: 10px;*/
/*     }*/
/* */
/*     .field-date select + select,*/
/*     .field-time select + select,*/
/*     .field-datetime select + select {*/
/*         margin-left: 2px;*/
/*     }*/
/* */
/*     body.error .error-description {*/
/*         max-width: 70%;*/
/*     }*/
/* */
/*     .pagination > li > a,*/
/*     .pagination > li > span {*/
/*         padding: 6px 12px;*/
/*     }*/
/* */
/*     .form-inline .form-control {*/
/*         margin-bottom: 0;*/
/*     }*/
/* */
/*     body.new .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* */
/*     body.edit .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* */
/*     {# Field: checkbox*/
/*        ------------------------------------------------------------------------- #}*/
/*     .form-vertical .field-checkbox label {*/
/*         padding-top: 23px;*/
/*     }*/
/*     .form-vertical .field-group .field-checkbox label {*/
/*         padding-top: 0;*/
/*     }*/
/* }*/
/* {% endautoescape %}*/
/* */
