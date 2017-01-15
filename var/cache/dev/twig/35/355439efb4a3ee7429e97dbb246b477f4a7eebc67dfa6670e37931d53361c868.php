<?php

/* admin/entity/list.html.twig */
class __TwigTemplate_4694cb7e2d16d1c27792810faab501a05ab37b9cf864bc775d7b2a5ed2a40d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/entity/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ff5f5ad4ee61d6dbbed43d9bfcc1d3f8356ce150271c2371e6d11a2769fa831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff5f5ad4ee61d6dbbed43d9bfcc1d3f8356ce150271c2371e6d11a2769fa831->enter($__internal_2ff5f5ad4ee61d6dbbed43d9bfcc1d3f8356ce150271c2371e6d11a2769fa831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/entity/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff5f5ad4ee61d6dbbed43d9bfcc1d3f8356ce150271c2371e6d11a2769fa831->leave($__internal_2ff5f5ad4ee61d6dbbed43d9bfcc1d3f8356ce150271c2371e6d11a2769fa831_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9e04329c2c096f117ea593ce856698019219db616d67af5a9a5b21476173b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9e04329c2c096f117ea593ce856698019219db616d67af5a9a5b21476173b5->enter($__internal_be9e04329c2c096f117ea593ce856698019219db616d67af5a9a5b21476173b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<table>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "        <tr><td><a href=\"/admin/entity/edit?name=";
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</a></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</table>

";
        
        $__internal_be9e04329c2c096f117ea593ce856698019219db616d67af5a9a5b21476173b5->leave($__internal_be9e04329c2c096f117ea593ce856698019219db616d67af5a9a5b21476173b5_prof);

    }

    public function getTemplateName()
    {
        return "admin/entity/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}


{% block body %}

<table>
    {% for entity in entities %}
        <tr><td><a href=\"/admin/entity/edit?name={{ entity }}\">{{ entity }}</a></td></tr>
    {% endfor %}
</table>

{% endblock %}
", "admin/entity/list.html.twig", "/var/www/html/1/first/app/Resources/views/admin/entity/list.html.twig");
    }
}
