<?php

/* form/fields.html.twig */
class __TwigTemplate_5af58007f3edc3de66e4e18d25f433e96e3a8f6d67070b560e28ed8e5897d83d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22ae532dcba6d407dcd19932fd2f524ddc84b2078ea690a79fbe080b01631a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ae532dcba6d407dcd19932fd2f524ddc84b2078ea690a79fbe080b01631a4f->enter($__internal_22ae532dcba6d407dcd19932fd2f524ddc84b2078ea690a79fbe080b01631a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_22ae532dcba6d407dcd19932fd2f524ddc84b2078ea690a79fbe080b01631a4f->leave($__internal_22ae532dcba6d407dcd19932fd2f524ddc84b2078ea690a79fbe080b01631a4f_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_127f4a363f8f0891d2bb38fd93c4c4d404070429230cf0e5bfb9bfb7d8c63ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127f4a363f8f0891d2bb38fd93c4c4d404070429230cf0e5bfb9bfb7d8c63ad2->enter($__internal_127f4a363f8f0891d2bb38fd93c4c4d404070429230cf0e5bfb9bfb7d8c63ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_127f4a363f8f0891d2bb38fd93c4c4d404070429230cf0e5bfb9bfb7d8c63ad2->leave($__internal_127f4a363f8f0891d2bb38fd93c4c4d404070429230cf0e5bfb9bfb7d8c63ad2_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
