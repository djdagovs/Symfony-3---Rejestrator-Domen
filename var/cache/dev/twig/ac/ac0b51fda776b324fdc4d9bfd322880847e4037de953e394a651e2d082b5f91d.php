<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_025794a65a69f2117b6c53a8b5632c4420e9a5a1f123b4d6e7f3e9b5454b1a12 extends Twig_Template
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
        $__internal_7a9a46d5f972cd9ebb4c18ad801301c8256971a47d438bf56e0edb5f719ef87d = $this->env->getExtension("native_profiler");
        $__internal_7a9a46d5f972cd9ebb4c18ad801301c8256971a47d438bf56e0edb5f719ef87d->enter($__internal_7a9a46d5f972cd9ebb4c18ad801301c8256971a47d438bf56e0edb5f719ef87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7a9a46d5f972cd9ebb4c18ad801301c8256971a47d438bf56e0edb5f719ef87d->leave($__internal_7a9a46d5f972cd9ebb4c18ad801301c8256971a47d438bf56e0edb5f719ef87d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
