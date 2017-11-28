<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7cb9ad49854ac084cd952d204be281f3ce0d28fb6474f4aaf5dd30be9b5803ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42180031534b40a445635b8518769af6f24cdd316c5c453de36f6d14e2f01645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42180031534b40a445635b8518769af6f24cdd316c5c453de36f6d14e2f01645->enter($__internal_42180031534b40a445635b8518769af6f24cdd316c5c453de36f6d14e2f01645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42180031534b40a445635b8518769af6f24cdd316c5c453de36f6d14e2f01645->leave($__internal_42180031534b40a445635b8518769af6f24cdd316c5c453de36f6d14e2f01645_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63b4704c10ad5b9cecae3f1ff6bb17f78ee163933df410fbc0f2e203c61c2b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b4704c10ad5b9cecae3f1ff6bb17f78ee163933df410fbc0f2e203c61c2b97->enter($__internal_63b4704c10ad5b9cecae3f1ff6bb17f78ee163933df410fbc0f2e203c61c2b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63b4704c10ad5b9cecae3f1ff6bb17f78ee163933df410fbc0f2e203c61c2b97->leave($__internal_63b4704c10ad5b9cecae3f1ff6bb17f78ee163933df410fbc0f2e203c61c2b97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73a083ad863c7f9a032908d50db577e89e2330b29ceb90a5bcbf95ce1d221151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a083ad863c7f9a032908d50db577e89e2330b29ceb90a5bcbf95ce1d221151->enter($__internal_73a083ad863c7f9a032908d50db577e89e2330b29ceb90a5bcbf95ce1d221151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73a083ad863c7f9a032908d50db577e89e2330b29ceb90a5bcbf95ce1d221151->leave($__internal_73a083ad863c7f9a032908d50db577e89e2330b29ceb90a5bcbf95ce1d221151_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d670d3ed041f24fab39ff30de7a51569df392ba5c4a8959de731e515cf5701cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d670d3ed041f24fab39ff30de7a51569df392ba5c4a8959de731e515cf5701cd->enter($__internal_d670d3ed041f24fab39ff30de7a51569df392ba5c4a8959de731e515cf5701cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d670d3ed041f24fab39ff30de7a51569df392ba5c4a8959de731e515cf5701cd->leave($__internal_d670d3ed041f24fab39ff30de7a51569df392ba5c4a8959de731e515cf5701cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
