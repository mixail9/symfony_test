<?php

/* security/login.html.twig */
class __TwigTemplate_fab448c36c7e517ab53892599cd756780c2c4212dc97c620b0e3080f569eb783 extends Twig_Template
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
        $__internal_e3216d42d417035a2310979e8a37edb7bd0df3be3cb71f223d0e1f4b113894bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3216d42d417035a2310979e8a37edb7bd0df3be3cb71f223d0e1f4b113894bb->enter($__internal_e3216d42d417035a2310979e8a37edb7bd0df3be3cb71f223d0e1f4b113894bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <p>Username: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        } else {
            // line 4
            echo "
";
            // line 5
            if (($context["error"] ?? $this->getContext($context, "error"))) {
                // line 6
                echo "    <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "</div>
";
            }
            // line 8
            echo "
<form action=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" method=\"post\">
\t
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>

";
        }
        
        $__internal_e3216d42d417035a2310979e8a37edb7bd0df3be3cb71f223d0e1f4b113894bb->leave($__internal_e3216d42d417035a2310979e8a37edb7bd0df3be3cb71f223d0e1f4b113894bb_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  44 => 9,  41 => 8,  35 => 6,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <p>Username: {{ app.user.username }}</p>
{% else %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
\t
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>

{% endif %}
", "security/login.html.twig", "/var/www/html/1/first/app/Resources/views/security/login.html.twig");
    }
}
