<?php

/* forms/fields/password/password.html.twig */
class __TwigTemplate_d787c0797bee41c087a66defc4fa2d0fa7889fd2906ade68fbb5dff705261282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/password/password.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    type=\"password\"
    class=\"input\"
    ";
        // line 6
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/password/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block input_attributes %}*/
/*     type="password"*/
/*     class="input"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
