<?php

/* admin/base.html.twig */
class __TwigTemplate_195a2480e2ba7938e33e8b476789d4d9656a62c5a8c07eb099a5b858f4a5f331 extends Twig_Template
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
        $__internal_3339d7ab6bf73c195fd158e720c9144e32b593bb2640a9d1275143d0be5c8526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3339d7ab6bf73c195fd158e720c9144e32b593bb2640a9d1275143d0be5c8526->enter($__internal_3339d7ab6bf73c195fd158e720c9144e32b593bb2640a9d1275143d0be5c8526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

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
\t\t\t\t\t\t";
            // line 23
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 24
                echo "\t\t\t\t\t\t    <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 26
            echo "
\t\t\t\t\t\t<form action=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">
\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
\t\t
\t\t\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

\t\t\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />

\t\t\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t";
        }
        // line 41
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
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        \t</div>
    \t\t<div class=\"col-md-2\">
    \t\t</div>
        </div>
        <div class=\"footer\">
        </div>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
        
        $__internal_3339d7ab6bf73c195fd158e720c9144e32b593bb2640a9d1275143d0be5c8526->leave($__internal_3339d7ab6bf73c195fd158e720c9144e32b593bb2640a9d1275143d0be5c8526_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4b7c8c297f4cb143b52dc6a7bf065f509d36bb97ab6bf247a09f41f6350e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4b7c8c297f4cb143b52dc6a7bf065f509d36bb97ab6bf247a09f41f6350e5c->enter($__internal_9d4b7c8c297f4cb143b52dc6a7bf065f509d36bb97ab6bf247a09f41f6350e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome(Admin)!";
        
        $__internal_9d4b7c8c297f4cb143b52dc6a7bf065f509d36bb97ab6bf247a09f41f6350e5c->leave($__internal_9d4b7c8c297f4cb143b52dc6a7bf065f509d36bb97ab6bf247a09f41f6350e5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc52c081bed352a1229b51c0cf17b20b39c5c2270b0a255b61258d577ff2f671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc52c081bed352a1229b51c0cf17b20b39c5c2270b0a255b61258d577ff2f671->enter($__internal_dc52c081bed352a1229b51c0cf17b20b39c5c2270b0a255b61258d577ff2f671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc52c081bed352a1229b51c0cf17b20b39c5c2270b0a255b61258d577ff2f671->leave($__internal_dc52c081bed352a1229b51c0cf17b20b39c5c2270b0a255b61258d577ff2f671_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_939b2e0d792f6fd5136efa0ca1c196b35d5d72d95fef30f36e0ccf6a53b4ebd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939b2e0d792f6fd5136efa0ca1c196b35d5d72d95fef30f36e0ccf6a53b4ebd7->enter($__internal_939b2e0d792f6fd5136efa0ca1c196b35d5d72d95fef30f36e0ccf6a53b4ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_939b2e0d792f6fd5136efa0ca1c196b35d5d72d95fef30f36e0ccf6a53b4ebd7->leave($__internal_939b2e0d792f6fd5136efa0ca1c196b35d5d72d95fef30f36e0ccf6a53b4ebd7_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26971cd7e93cd244b822e08de3f4cb9177aadfe95d07602cfa896ab650bb0e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26971cd7e93cd244b822e08de3f4cb9177aadfe95d07602cfa896ab650bb0e06->enter($__internal_26971cd7e93cd244b822e08de3f4cb9177aadfe95d07602cfa896ab650bb0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_26971cd7e93cd244b822e08de3f4cb9177aadfe95d07602cfa896ab650bb0e06->leave($__internal_26971cd7e93cd244b822e08de3f4cb9177aadfe95d07602cfa896ab650bb0e06_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  168 => 55,  157 => 6,  145 => 5,  136 => 63,  134 => 62,  126 => 56,  124 => 55,  108 => 41,  96 => 32,  88 => 27,  85 => 26,  79 => 24,  77 => 23,  74 => 22,  68 => 20,  66 => 19,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome(Admin)!{% endblock %}</title>
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

\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}

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
", "admin/base.html.twig", "/var/www/html/1/first/app/Resources/views/admin/base.html.twig");
    }
}
