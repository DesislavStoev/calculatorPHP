<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2f0e961ad072aa60723a8789cd7cec00f51e6181beee8d4b915d6053db7b6114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84d1e8b9019312df1e6d8b4d17ad30db02f28ba8279a5bb8784b62654f39217c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d1e8b9019312df1e6d8b4d17ad30db02f28ba8279a5bb8784b62654f39217c->enter($__internal_84d1e8b9019312df1e6d8b4d17ad30db02f28ba8279a5bb8784b62654f39217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d1e8b9019312df1e6d8b4d17ad30db02f28ba8279a5bb8784b62654f39217c->leave($__internal_84d1e8b9019312df1e6d8b4d17ad30db02f28ba8279a5bb8784b62654f39217c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a58e6640936919a4c6ddbf5765b51a2e59f457f7903a4ec36b6efd5b8d6a92ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58e6640936919a4c6ddbf5765b51a2e59f457f7903a4ec36b6efd5b8d6a92ec->enter($__internal_a58e6640936919a4c6ddbf5765b51a2e59f457f7903a4ec36b6efd5b8d6a92ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a58e6640936919a4c6ddbf5765b51a2e59f457f7903a4ec36b6efd5b8d6a92ec->leave($__internal_a58e6640936919a4c6ddbf5765b51a2e59f457f7903a4ec36b6efd5b8d6a92ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fedb2f8c4c4e2a86836922d948da3c10e7429b7e31cf26e6c2291a00787b9111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedb2f8c4c4e2a86836922d948da3c10e7429b7e31cf26e6c2291a00787b9111->enter($__internal_fedb2f8c4c4e2a86836922d948da3c10e7429b7e31cf26e6c2291a00787b9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fedb2f8c4c4e2a86836922d948da3c10e7429b7e31cf26e6c2291a00787b9111->leave($__internal_fedb2f8c4c4e2a86836922d948da3c10e7429b7e31cf26e6c2291a00787b9111_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78036aad040b6c1139ffaab24815834839e06ed23cd7c33a7655d5b8c57be458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78036aad040b6c1139ffaab24815834839e06ed23cd7c33a7655d5b8c57be458->enter($__internal_78036aad040b6c1139ffaab24815834839e06ed23cd7c33a7655d5b8c57be458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78036aad040b6c1139ffaab24815834839e06ed23cd7c33a7655d5b8c57be458->leave($__internal_78036aad040b6c1139ffaab24815834839e06ed23cd7c33a7655d5b8c57be458_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
