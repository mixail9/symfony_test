<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7e82f9f267b0221619aab99fa96c1cc49ad837b5a7e7d114560f9de26c5820fa extends Twig_Template
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
        $__internal_8308c5caa2401cfe3c36df3d5adca1797d564ebcf107593d4bff01b62093fc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8308c5caa2401cfe3c36df3d5adca1797d564ebcf107593d4bff01b62093fc8e->enter($__internal_8308c5caa2401cfe3c36df3d5adca1797d564ebcf107593d4bff01b62093fc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8308c5caa2401cfe3c36df3d5adca1797d564ebcf107593d4bff01b62093fc8e->leave($__internal_8308c5caa2401cfe3c36df3d5adca1797d564ebcf107593d4bff01b62093fc8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90f3673a52cf2819931ae432123940cc1d837f0598c2609605c5cbb74f8342ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f3673a52cf2819931ae432123940cc1d837f0598c2609605c5cbb74f8342ec->enter($__internal_90f3673a52cf2819931ae432123940cc1d837f0598c2609605c5cbb74f8342ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90f3673a52cf2819931ae432123940cc1d837f0598c2609605c5cbb74f8342ec->leave($__internal_90f3673a52cf2819931ae432123940cc1d837f0598c2609605c5cbb74f8342ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de348f356330f69580fdd57f4a7f8702b7aa2325b95d7bb5635776eeb10e1184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de348f356330f69580fdd57f4a7f8702b7aa2325b95d7bb5635776eeb10e1184->enter($__internal_de348f356330f69580fdd57f4a7f8702b7aa2325b95d7bb5635776eeb10e1184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de348f356330f69580fdd57f4a7f8702b7aa2325b95d7bb5635776eeb10e1184->leave($__internal_de348f356330f69580fdd57f4a7f8702b7aa2325b95d7bb5635776eeb10e1184_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19731bb1b301ee6ed3925a68bc9cf26672e3efea902cd7aa5c90e9332fce46a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19731bb1b301ee6ed3925a68bc9cf26672e3efea902cd7aa5c90e9332fce46a3->enter($__internal_19731bb1b301ee6ed3925a68bc9cf26672e3efea902cd7aa5c90e9332fce46a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_19731bb1b301ee6ed3925a68bc9cf26672e3efea902cd7aa5c90e9332fce46a3->leave($__internal_19731bb1b301ee6ed3925a68bc9cf26672e3efea902cd7aa5c90e9332fce46a3_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/1/first/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
