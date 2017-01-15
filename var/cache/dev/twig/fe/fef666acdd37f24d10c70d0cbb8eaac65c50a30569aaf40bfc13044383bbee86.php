<?php

/* base.html.twig */
class __TwigTemplate_025fb262130a1aec71b942be73d3b315fa23cfcde6f94d633a7df71e46c0bc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14c0beb068f39491378b1b3145d158eee568488536dd4045a99c1bf6d04208fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c0beb068f39491378b1b3145d158eee568488536dd4045a99c1bf6d04208fe->enter($__internal_14c0beb068f39491378b1b3145d158eee568488536dd4045a99c1bf6d04208fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/other/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/other/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/other/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/other/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
    \t<div class=\"header\">
    \t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t    \t\t<div class=\"login_form\">
\t\t\t    \t\t\t";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "\t\t\t\t\t\t    <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span><a href=\"/logout\">Logout</a></span></p>
\t\t\t\t\t\t";
        } else {
            // line 22
            echo "
\t\t\t\t\t\t

\t\t\t\t\t\t<form action=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">
\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
\t\t
\t\t\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

\t\t\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />

\t\t\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t    \t\t</div>
\t\t\t    \t</div>
\t\t\t</div>
\t\t</div>
\t\t
    \t\t<div class=\"row head_block\">
    \t\t\t<h1>Welcome!</h1>
    \t\t</div>
    \t</div>
    \t
    \t<div class=\"main row\">
    \t\t<div class=\"col-md-2\">
    \t\t</div>
    \t\t<div class=\"col-md-8\">
        \t\t";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        \t</div>
    \t\t<div class=\"col-md-2\">
    \t\t</div>
        </div>
        <div class=\"footer\">
        </div>
        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_14c0beb068f39491378b1b3145d158eee568488536dd4045a99c1bf6d04208fe->leave($__internal_14c0beb068f39491378b1b3145d158eee568488536dd4045a99c1bf6d04208fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68f9c764060f28ca5ae3d814ed4714f1a059047a9c89ac99c41ea0b6277aec8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f9c764060f28ca5ae3d814ed4714f1a059047a9c89ac99c41ea0b6277aec8f->enter($__internal_68f9c764060f28ca5ae3d814ed4714f1a059047a9c89ac99c41ea0b6277aec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68f9c764060f28ca5ae3d814ed4714f1a059047a9c89ac99c41ea0b6277aec8f->leave($__internal_68f9c764060f28ca5ae3d814ed4714f1a059047a9c89ac99c41ea0b6277aec8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe0ccde81144626b46560f888a98dd9603c28157a80f9e51cc12017692b14672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0ccde81144626b46560f888a98dd9603c28157a80f9e51cc12017692b14672->enter($__internal_fe0ccde81144626b46560f888a98dd9603c28157a80f9e51cc12017692b14672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe0ccde81144626b46560f888a98dd9603c28157a80f9e51cc12017692b14672->leave($__internal_fe0ccde81144626b46560f888a98dd9603c28157a80f9e51cc12017692b14672_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_554a47389ec0a8e6d5c0a7aeaab6281900adb10980386a6ff9d229ead607a498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554a47389ec0a8e6d5c0a7aeaab6281900adb10980386a6ff9d229ead607a498->enter($__internal_554a47389ec0a8e6d5c0a7aeaab6281900adb10980386a6ff9d229ead607a498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_554a47389ec0a8e6d5c0a7aeaab6281900adb10980386a6ff9d229ead607a498->leave($__internal_554a47389ec0a8e6d5c0a7aeaab6281900adb10980386a6ff9d229ead607a498_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc5c8812e5a5a71ed3147597fee923e4a7bee12eb90b0a011f2336cccc8e6346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5c8812e5a5a71ed3147597fee923e4a7bee12eb90b0a011f2336cccc8e6346->enter($__internal_dc5c8812e5a5a71ed3147597fee923e4a7bee12eb90b0a011f2336cccc8e6346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc5c8812e5a5a71ed3147597fee923e4a7bee12eb90b0a011f2336cccc8e6346->leave($__internal_dc5c8812e5a5a71ed3147597fee923e4a7bee12eb90b0a011f2336cccc8e6346_prof);

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
        return array (  170 => 60,  159 => 53,  148 => 6,  136 => 5,  127 => 61,  125 => 60,  117 => 54,  115 => 53,  99 => 39,  87 => 30,  79 => 25,  74 => 22,  68 => 20,  66 => 19,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('bundles/other/bootstrap.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('bundles/other/style.css') }}\" rel=\"stylesheet\"/>
        <script src=\"{{ asset('bundles/other/jquery.js') }}\"></script>
        <script src=\"{{ asset('bundles/other/bootstrap.js') }}\"></script>
    </head>
    <body>
    \t<div class=\"header\">
    \t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t    \t\t<div class=\"login_form\">
\t\t\t    \t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t    <p>Username: {{ app.user.username }} <span><a href=\"/logout\">Logout</a></span></p>
\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t

\t\t\t\t\t\t<form action=\"{{ path('login') }}\" method=\"post\">
\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
\t\t
\t\t\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

\t\t\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />

\t\t\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t{% endif %}
\t\t\t    \t\t</div>
\t\t\t    \t</div>
\t\t\t</div>
\t\t</div>
\t\t
    \t\t<div class=\"row head_block\">
    \t\t\t<h1>Welcome!</h1>
    \t\t</div>
    \t</div>
    \t
    \t<div class=\"main row\">
    \t\t<div class=\"col-md-2\">
    \t\t</div>
    \t\t<div class=\"col-md-8\">
        \t\t{% block body %}{% endblock %}
        \t</div>
    \t\t<div class=\"col-md-2\">
    \t\t</div>
        </div>
        <div class=\"footer\">
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/1/first/app/Resources/views/base.html.twig");
    }
}
