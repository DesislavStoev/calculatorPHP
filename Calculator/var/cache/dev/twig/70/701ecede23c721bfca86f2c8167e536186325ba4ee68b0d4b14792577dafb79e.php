<?php

/* base.html.twig */
class __TwigTemplate_91c60b138f7612a77a7a6f5a11eb509601b0ea7c4cdecb757bc091b416f62ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e0d1de5504ad169cb64f60e82030fea78cd97e4de05b169f9b2f4cdd146414d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d1de5504ad169cb64f60e82030fea78cd97e4de05b169f9b2f4cdd146414d->enter($__internal_2e0d1de5504ad169cb64f60e82030fea78cd97e4de05b169f9b2f4cdd146414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_2e0d1de5504ad169cb64f60e82030fea78cd97e4de05b169f9b2f4cdd146414d->leave($__internal_2e0d1de5504ad169cb64f60e82030fea78cd97e4de05b169f9b2f4cdd146414d_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeb6d44bf4d5198e005f858337f8e6712a952132d275136e700db8438b0d56ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb6d44bf4d5198e005f858337f8e6712a952132d275136e700db8438b0d56ce->enter($__internal_aeb6d44bf4d5198e005f858337f8e6712a952132d275136e700db8438b0d56ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_aeb6d44bf4d5198e005f858337f8e6712a952132d275136e700db8438b0d56ce->leave($__internal_aeb6d44bf4d5198e005f858337f8e6712a952132d275136e700db8438b0d56ce_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c54206df36d69c4a2ae0a8516ca5b6c059c21796a901bd41e2e2230e010736a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54206df36d69c4a2ae0a8516ca5b6c059c21796a901bd41e2e2230e010736a7->enter($__internal_c54206df36d69c4a2ae0a8516ca5b6c059c21796a901bd41e2e2230e010736a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_c54206df36d69c4a2ae0a8516ca5b6c059c21796a901bd41e2e2230e010736a7->leave($__internal_c54206df36d69c4a2ae0a8516ca5b6c059c21796a901bd41e2e2230e010736a7_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_10c337bd8bc6a8b680f6f0b7334f08a6cf9b81357e71c29aa25696ca9fbed57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c337bd8bc6a8b680f6f0b7334f08a6cf9b81357e71c29aa25696ca9fbed57a->enter($__internal_10c337bd8bc6a8b680f6f0b7334f08a6cf9b81357e71c29aa25696ca9fbed57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_10c337bd8bc6a8b680f6f0b7334f08a6cf9b81357e71c29aa25696ca9fbed57a->leave($__internal_10c337bd8bc6a8b680f6f0b7334f08a6cf9b81357e71c29aa25696ca9fbed57a_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_89e26fc8fa9d03d8080166eb57bf2ea007cbd54555f1f09fa914a36d3a10b85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e26fc8fa9d03d8080166eb57bf2ea007cbd54555f1f09fa914a36d3a10b85b->enter($__internal_89e26fc8fa9d03d8080166eb57bf2ea007cbd54555f1f09fa914a36d3a10b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_89e26fc8fa9d03d8080166eb57bf2ea007cbd54555f1f09fa914a36d3a10b85b->leave($__internal_89e26fc8fa9d03d8080166eb57bf2ea007cbd54555f1f09fa914a36d3a10b85b_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_b26575e7035fab6aeaf29d5ec3cbbcb95e3f9a4bf6a60f49e0046d268dd64518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26575e7035fab6aeaf29d5ec3cbbcb95e3f9a4bf6a60f49e0046d268dd64518->enter($__internal_b26575e7035fab6aeaf29d5ec3cbbcb95e3f9a4bf6a60f49e0046d268dd64518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_b26575e7035fab6aeaf29d5ec3cbbcb95e3f9a4bf6a60f49e0046d268dd64518->leave($__internal_b26575e7035fab6aeaf29d5ec3cbbcb95e3f9a4bf6a60f49e0046d268dd64518_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_1c48931c3a6528abfeb7686db75932132dbdc883373756f7787dd392f83dc629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c48931c3a6528abfeb7686db75932132dbdc883373756f7787dd392f83dc629->enter($__internal_1c48931c3a6528abfeb7686db75932132dbdc883373756f7787dd392f83dc629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1c48931c3a6528abfeb7686db75932132dbdc883373756f7787dd392f83dc629->leave($__internal_1c48931c3a6528abfeb7686db75932132dbdc883373756f7787dd392f83dc629_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1323cd2bfa6f03417fbaf39c40c15bc57df460bfe8c34cf3711757ace2830328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1323cd2bfa6f03417fbaf39c40c15bc57df460bfe8c34cf3711757ace2830328->enter($__internal_1323cd2bfa6f03417fbaf39c40c15bc57df460bfe8c34cf3711757ace2830328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1323cd2bfa6f03417fbaf39c40c15bc57df460bfe8c34cf3711757ace2830328->leave($__internal_1323cd2bfa6f03417fbaf39c40c15bc57df460bfe8c34cf3711757ace2830328_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
