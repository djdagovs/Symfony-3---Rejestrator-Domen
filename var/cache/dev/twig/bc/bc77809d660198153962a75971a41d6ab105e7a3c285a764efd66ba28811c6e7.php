<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_510805e7fc107f3b6fe7d0b341d535d0b40769c243f6be7444490ae851aed9bb extends Twig_Template
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
        $__internal_e9f97a906c2684598b34676b2e1ba5302723a913590fa4f1e93d60d5c24be5a6 = $this->env->getExtension("native_profiler");
        $__internal_e9f97a906c2684598b34676b2e1ba5302723a913590fa4f1e93d60d5c24be5a6->enter($__internal_e9f97a906c2684598b34676b2e1ba5302723a913590fa4f1e93d60d5c24be5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9f97a906c2684598b34676b2e1ba5302723a913590fa4f1e93d60d5c24be5a6->leave($__internal_e9f97a906c2684598b34676b2e1ba5302723a913590fa4f1e93d60d5c24be5a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
