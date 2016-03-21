<?php

/* forms/fields/blueprint/blueprint.html.twig */
class __TwigTemplate_69852385e554927e5506a9a8c7e1315bfe054b277f16179d92dbf8d5ceb88086 extends Twig_Template
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
        echo "<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" value=\"";
        echo $this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "name", array());
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/blueprint/blueprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input data-grav-field="hidden" data-grav-disabled="false" type="hidden" class="input" name="{{ (scope ~ field.name)|fieldName }}" value="{{ blueprints.name }}" />*/
/* */
