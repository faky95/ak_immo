<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_94846995b6aaea9d4cd563599dbdd2b44ce54f3ff4431dd625757e58f5f38c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_037577dce8c092225f766fe70b79a28087bfa015466d3ae2fcc1681d55b8ede9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037577dce8c092225f766fe70b79a28087bfa015466d3ae2fcc1681d55b8ede9->enter($__internal_037577dce8c092225f766fe70b79a28087bfa015466d3ae2fcc1681d55b8ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0dbca72c5bb7ace6385709b3731210dde52632e079e7d1a0aa5dc8484a168a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbca72c5bb7ace6385709b3731210dde52632e079e7d1a0aa5dc8484a168a57->enter($__internal_0dbca72c5bb7ace6385709b3731210dde52632e079e7d1a0aa5dc8484a168a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037577dce8c092225f766fe70b79a28087bfa015466d3ae2fcc1681d55b8ede9->leave($__internal_037577dce8c092225f766fe70b79a28087bfa015466d3ae2fcc1681d55b8ede9_prof);

        
        $__internal_0dbca72c5bb7ace6385709b3731210dde52632e079e7d1a0aa5dc8484a168a57->leave($__internal_0dbca72c5bb7ace6385709b3731210dde52632e079e7d1a0aa5dc8484a168a57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a87825ba6c69c75df240211d98ed7ee687dce8aec87b5abd10135ba2ea282dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87825ba6c69c75df240211d98ed7ee687dce8aec87b5abd10135ba2ea282dd3->enter($__internal_a87825ba6c69c75df240211d98ed7ee687dce8aec87b5abd10135ba2ea282dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_870331fb6e747066dbd6d77347067aaede41e9c252b2770d6b547760ec8fa0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870331fb6e747066dbd6d77347067aaede41e9c252b2770d6b547760ec8fa0ef->enter($__internal_870331fb6e747066dbd6d77347067aaede41e9c252b2770d6b547760ec8fa0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_870331fb6e747066dbd6d77347067aaede41e9c252b2770d6b547760ec8fa0ef->leave($__internal_870331fb6e747066dbd6d77347067aaede41e9c252b2770d6b547760ec8fa0ef_prof);

        
        $__internal_a87825ba6c69c75df240211d98ed7ee687dce8aec87b5abd10135ba2ea282dd3->leave($__internal_a87825ba6c69c75df240211d98ed7ee687dce8aec87b5abd10135ba2ea282dd3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1a81b6d83e9e3f9699a62c25bd18ca2951f1623ce9b292815825d6780e4bf14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a81b6d83e9e3f9699a62c25bd18ca2951f1623ce9b292815825d6780e4bf14->enter($__internal_a1a81b6d83e9e3f9699a62c25bd18ca2951f1623ce9b292815825d6780e4bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbdcef4e4e65267f20eb8e1281dd4cfa4c9f4f9ae9565410cbafb25e8d1919e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdcef4e4e65267f20eb8e1281dd4cfa4c9f4f9ae9565410cbafb25e8d1919e3->enter($__internal_fbdcef4e4e65267f20eb8e1281dd4cfa4c9f4f9ae9565410cbafb25e8d1919e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fbdcef4e4e65267f20eb8e1281dd4cfa4c9f4f9ae9565410cbafb25e8d1919e3->leave($__internal_fbdcef4e4e65267f20eb8e1281dd4cfa4c9f4f9ae9565410cbafb25e8d1919e3_prof);

        
        $__internal_a1a81b6d83e9e3f9699a62c25bd18ca2951f1623ce9b292815825d6780e4bf14->leave($__internal_a1a81b6d83e9e3f9699a62c25bd18ca2951f1623ce9b292815825d6780e4bf14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04c7aaf4e97730d686dfb28029558f761e3ffbe426ddcb95b5084a607e4d48d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c7aaf4e97730d686dfb28029558f761e3ffbe426ddcb95b5084a607e4d48d3->enter($__internal_04c7aaf4e97730d686dfb28029558f761e3ffbe426ddcb95b5084a607e4d48d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77109943bd723713367735c7c83cf5430a11ceb07fa0d39e5963e8629d8b18b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77109943bd723713367735c7c83cf5430a11ceb07fa0d39e5963e8629d8b18b2->enter($__internal_77109943bd723713367735c7c83cf5430a11ceb07fa0d39e5963e8629d8b18b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_77109943bd723713367735c7c83cf5430a11ceb07fa0d39e5963e8629d8b18b2->leave($__internal_77109943bd723713367735c7c83cf5430a11ceb07fa0d39e5963e8629d8b18b2_prof);

        
        $__internal_04c7aaf4e97730d686dfb28029558f761e3ffbe426ddcb95b5084a607e4d48d3->leave($__internal_04c7aaf4e97730d686dfb28029558f761e3ffbe426ddcb95b5084a607e4d48d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
