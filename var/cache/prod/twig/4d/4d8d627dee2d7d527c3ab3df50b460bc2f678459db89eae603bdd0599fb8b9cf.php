<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_0ae44eb147792500164675a1f900f0b7e82703166b0ea2a916ec762e67a74803 extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute((isset($context["color_schemes"]) ? $context["color_schemes"] : null), (isset($context["color_scheme"]) ? $context["color_scheme"] : null), array(), "array");
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "link", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "success", array());
        echo ";
    color: ";
        // line 113
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    color: ";
        // line 117
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "success", array());
        echo ";
    border-color: ";
        // line 186
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "success", array());
        echo ";
    color: ";
        // line 187
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    border-color: ";
        // line 197
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    color: ";
        // line 198
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
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
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 246
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 247
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 248
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
            echo ";
";
        }
        // line 250
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 253
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
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
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
        echo ";
    border-color: transparent;
    color: ";
        // line 269
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 286
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 294
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 296
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 341
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 342
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 344
        echo "    color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 349
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 350
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 352
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 353
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_darker", array());
            echo ";
";
        }
        // line 355
        echo "}

.has-error .error-block {
    color: ";
        // line 358
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text_muted", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 385
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 386
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 387
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 388
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 389
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
            echo ";
";
        }
        // line 391
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 393
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter((isset($context["kernel_debug"]) ? $context["kernel_debug"] : null), false)) : (false))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 413
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 414
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 415
            echo "    border-top-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
            echo ";
";
        }
        // line 417
        echo "}
.field-group .field-divider hr {
";
        // line 419
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 420
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 421
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 431
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
    color: ";
            // line 432
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 433
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 434
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 435
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_darker", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 442
            echo "    color: #555;
";
        } elseif (("light" ==         // line 443
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 454
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 455
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 462
            echo "    color: #555;
";
        } elseif (("light" ==         // line 463
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 470
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 472
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 473
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 475
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_darker", array());
            echo ";
";
        }
        // line 477
        echo "    padding: 11px 10px 9px;
}
";
        // line 479
        if (("light" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 501
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 516
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 520
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 523
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 526
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 532
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_dark", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 547
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 572
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 603
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "page_background", array());
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
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 634
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 721
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 722
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 723
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 732
            echo "    color: #777;
";
        } elseif (("light" ==         // line 733
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 734
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_dark", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 742
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 743
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 744
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 764
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 766
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 767
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_darker", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 776
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 777
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 778
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 790
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 793
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 835
            echo "    background: #333;
";
        } elseif (("light" ==         // line 836
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 837
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 844
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 845
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
";
        // line 915
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 916
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 917
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 918
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "table_row_border", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 980
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 981
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 982
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
            echo ";
";
        }
        // line 984
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 986
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
    border-color: ";
        // line 987
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 989
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 992
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
        echo ";
    color: ";
        // line 993
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
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
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1069
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1070
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1071
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1089
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1090
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
        echo ";
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1097
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "danger", array());
        echo ";
    color: ";
        // line 1098
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1183
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1189
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1193
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1198
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1204
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1209
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1210
            echo "        background: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
            echo ";
        color: ";
            // line 1211
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
            echo ";
";
        }
        // line 1213
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1216
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1217
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1218
(isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1219
            echo "        color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1232
        echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
        echo ";
    }
    ";
        // line 1235
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1236
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : null))) {
            // line 1237
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
            echo ";
        border-top: 1px solid ";
            // line 1238
            echo (isset($context["brand_color"]) ? $context["brand_color"] : null);
            echo ";
";
        }
        // line 1240
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1242
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_light", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "table_row_border", array());
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
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1261
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1264
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), "gray_lighter", array());
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
        return array (  1780 => 1300,  1743 => 1264,  1737 => 1261,  1733 => 1260,  1721 => 1251,  1709 => 1242,  1705 => 1240,  1700 => 1238,  1695 => 1237,  1693 => 1236,  1690 => 1235,  1685 => 1232,  1679 => 1229,  1669 => 1221,  1663 => 1219,  1661 => 1218,  1656 => 1217,  1654 => 1216,  1649 => 1213,  1644 => 1211,  1639 => 1210,  1637 => 1209,  1629 => 1204,  1620 => 1198,  1612 => 1193,  1605 => 1189,  1596 => 1183,  1592 => 1182,  1589 => 1181,  1548 => 1141,  1523 => 1117,  1520 => 1113,  1505 => 1098,  1501 => 1097,  1491 => 1090,  1487 => 1089,  1483 => 1088,  1480 => 1087,  1467 => 1073,  1461 => 1071,  1459 => 1070,  1454 => 1069,  1452 => 1068,  1449 => 1067,  1428 => 1045,  1407 => 1023,  1399 => 1015,  1395 => 1013,  1388 => 1005,  1376 => 993,  1372 => 992,  1366 => 989,  1361 => 987,  1357 => 986,  1353 => 984,  1347 => 982,  1345 => 981,  1340 => 980,  1338 => 979,  1329 => 972,  1316 => 959,  1280 => 924,  1274 => 920,  1268 => 918,  1266 => 917,  1261 => 916,  1259 => 915,  1255 => 914,  1240 => 901,  1204 => 865,  1198 => 858,  1189 => 848,  1185 => 846,  1183 => 845,  1180 => 844,  1178 => 843,  1175 => 842,  1171 => 839,  1165 => 837,  1163 => 836,  1160 => 835,  1158 => 834,  1139 => 817,  1132 => 811,  1126 => 806,  1116 => 797,  1111 => 794,  1109 => 793,  1102 => 790,  1100 => 789,  1089 => 780,  1083 => 778,  1081 => 777,  1078 => 776,  1076 => 775,  1068 => 769,  1062 => 767,  1060 => 766,  1056 => 764,  1054 => 763,  1035 => 746,  1029 => 744,  1027 => 743,  1024 => 742,  1022 => 741,  1015 => 736,  1009 => 734,  1007 => 733,  1004 => 732,  1002 => 731,  994 => 725,  988 => 723,  986 => 722,  983 => 721,  981 => 720,  977 => 718,  961 => 702,  938 => 680,  916 => 661,  889 => 636,  885 => 634,  878 => 630,  875 => 629,  866 => 621,  863 => 620,  860 => 617,  853 => 609,  846 => 603,  842 => 602,  832 => 594,  809 => 572,  805 => 571,  802 => 570,  792 => 560,  777 => 547,  773 => 546,  770 => 545,  756 => 532,  747 => 526,  741 => 523,  735 => 520,  728 => 516,  718 => 509,  707 => 501,  701 => 498,  695 => 494,  686 => 484,  680 => 480,  678 => 479,  674 => 477,  669 => 475,  663 => 473,  661 => 472,  657 => 470,  655 => 469,  650 => 466,  646 => 464,  644 => 463,  641 => 462,  639 => 461,  634 => 458,  630 => 456,  628 => 455,  625 => 454,  623 => 453,  614 => 446,  610 => 444,  608 => 443,  605 => 442,  603 => 441,  597 => 437,  592 => 435,  589 => 434,  587 => 433,  583 => 432,  578 => 431,  576 => 430,  568 => 424,  564 => 422,  562 => 421,  559 => 420,  557 => 419,  553 => 417,  547 => 415,  545 => 414,  542 => 413,  540 => 412,  533 => 407,  527 => 401,  523 => 397,  518 => 394,  516 => 393,  512 => 391,  507 => 389,  502 => 388,  500 => 387,  496 => 386,  491 => 385,  489 => 384,  476 => 374,  457 => 358,  452 => 355,  446 => 353,  444 => 352,  438 => 350,  436 => 349,  427 => 344,  423 => 342,  421 => 341,  416 => 339,  409 => 334,  380 => 306,  372 => 300,  366 => 296,  361 => 294,  350 => 286,  345 => 284,  327 => 269,  322 => 267,  305 => 253,  300 => 250,  294 => 248,  292 => 247,  287 => 246,  285 => 245,  266 => 228,  260 => 223,  257 => 222,  240 => 206,  229 => 198,  225 => 197,  221 => 196,  209 => 187,  205 => 186,  201 => 185,  175 => 161,  168 => 154,  161 => 149,  151 => 143,  144 => 139,  133 => 130,  127 => 127,  124 => 126,  115 => 117,  111 => 116,  105 => 113,  101 => 112,  95 => 108,  77 => 90,  67 => 81,  60 => 77,  45 => 66,  39 => 60,  32 => 52,  29 => 45,  27 => 44,  24 => 43,  22 => 5,  19 => 4,);
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
