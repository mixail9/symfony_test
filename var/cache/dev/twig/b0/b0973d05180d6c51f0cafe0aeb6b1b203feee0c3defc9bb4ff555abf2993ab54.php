<?php

/* admin/iblock/list.html.twig */
class __TwigTemplate_018d8e1cd42ac26f9f173af3cffbc400e25323d6cc18ce2550086ed45fa971ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/iblock/list.html.twig", 1);
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
        $__internal_3995174e77226659e6a75fb66b9ede5a2bbcc791bfd49aa98051e16e60bac849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3995174e77226659e6a75fb66b9ede5a2bbcc791bfd49aa98051e16e60bac849->enter($__internal_3995174e77226659e6a75fb66b9ede5a2bbcc791bfd49aa98051e16e60bac849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/iblock/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3995174e77226659e6a75fb66b9ede5a2bbcc791bfd49aa98051e16e60bac849->leave($__internal_3995174e77226659e6a75fb66b9ede5a2bbcc791bfd49aa98051e16e60bac849_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_57908c8b6e3c287fbbaf204661068ea24d7652f6562ab04d2ebbde2b68744fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57908c8b6e3c287fbbaf204661068ea24d7652f6562ab04d2ebbde2b68744fd3->enter($__internal_57908c8b6e3c287fbbaf204661068ea24d7652f6562ab04d2ebbde2b68744fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57908c8b6e3c287fbbaf204661068ea24d7652f6562ab04d2ebbde2b68744fd3->leave($__internal_57908c8b6e3c287fbbaf204661068ea24d7652f6562ab04d2ebbde2b68744fd3_prof);

    }

    public function getTemplateName()
    {
        return "admin/iblock/list.html.twig";
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
", "admin/iblock/list.html.twig", "/var/www/html/1/first/app/Resources/views/admin/iblock/list.html.twig");
    }
}
