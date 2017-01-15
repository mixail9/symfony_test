<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3508d43dd9c04657ad5092764b23ccc23083962f6ecf373a1a13025bac8f155e extends Twig_Template
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
        $__internal_dc7a3cd56e9e6b866cd060c95be36981196299dc118f09a06fbeb00ebdfb58ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7a3cd56e9e6b866cd060c95be36981196299dc118f09a06fbeb00ebdfb58ba->enter($__internal_dc7a3cd56e9e6b866cd060c95be36981196299dc118f09a06fbeb00ebdfb58ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7a3cd56e9e6b866cd060c95be36981196299dc118f09a06fbeb00ebdfb58ba->leave($__internal_dc7a3cd56e9e6b866cd060c95be36981196299dc118f09a06fbeb00ebdfb58ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6775240abe1a5069453af4def10c7a9b3a438c206537c592146a28982c2aaaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6775240abe1a5069453af4def10c7a9b3a438c206537c592146a28982c2aaaba->enter($__internal_6775240abe1a5069453af4def10c7a9b3a438c206537c592146a28982c2aaaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6775240abe1a5069453af4def10c7a9b3a438c206537c592146a28982c2aaaba->leave($__internal_6775240abe1a5069453af4def10c7a9b3a438c206537c592146a28982c2aaaba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50485738e39979bb3468e57c54927ad0769b2d94f28add961a6d48ea65e9fcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50485738e39979bb3468e57c54927ad0769b2d94f28add961a6d48ea65e9fcbf->enter($__internal_50485738e39979bb3468e57c54927ad0769b2d94f28add961a6d48ea65e9fcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50485738e39979bb3468e57c54927ad0769b2d94f28add961a6d48ea65e9fcbf->leave($__internal_50485738e39979bb3468e57c54927ad0769b2d94f28add961a6d48ea65e9fcbf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f31434c46eb2b20d6acf1be5edc6944941dd16be756450159770b30913690120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31434c46eb2b20d6acf1be5edc6944941dd16be756450159770b30913690120->enter($__internal_f31434c46eb2b20d6acf1be5edc6944941dd16be756450159770b30913690120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f31434c46eb2b20d6acf1be5edc6944941dd16be756450159770b30913690120->leave($__internal_f31434c46eb2b20d6acf1be5edc6944941dd16be756450159770b30913690120_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/1/first/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
