<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d17d9f74bb44414a8016e89eaee98a747aee1e0a180bfc21c56513057fc5606d extends Twig_Template
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
        $__internal_c4bed286ae57d31f5c304abbae229f95a77e29de7bc488b5544337218ef8727a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bed286ae57d31f5c304abbae229f95a77e29de7bc488b5544337218ef8727a->enter($__internal_c4bed286ae57d31f5c304abbae229f95a77e29de7bc488b5544337218ef8727a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_499a9c16c1301351bf9837a042d595e97ad074fa04d28e05b0f035742dced561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499a9c16c1301351bf9837a042d595e97ad074fa04d28e05b0f035742dced561->enter($__internal_499a9c16c1301351bf9837a042d595e97ad074fa04d28e05b0f035742dced561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bed286ae57d31f5c304abbae229f95a77e29de7bc488b5544337218ef8727a->leave($__internal_c4bed286ae57d31f5c304abbae229f95a77e29de7bc488b5544337218ef8727a_prof);

        
        $__internal_499a9c16c1301351bf9837a042d595e97ad074fa04d28e05b0f035742dced561->leave($__internal_499a9c16c1301351bf9837a042d595e97ad074fa04d28e05b0f035742dced561_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c48b8ffaae19fa23c2a5921bb801cd6596a9ce11942b4e04e46e3703926c33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c48b8ffaae19fa23c2a5921bb801cd6596a9ce11942b4e04e46e3703926c33c->enter($__internal_8c48b8ffaae19fa23c2a5921bb801cd6596a9ce11942b4e04e46e3703926c33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37b5caab0df002f20ff3e1145dcfe6d1ffb2537f13667152abd099787796c1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b5caab0df002f20ff3e1145dcfe6d1ffb2537f13667152abd099787796c1f1->enter($__internal_37b5caab0df002f20ff3e1145dcfe6d1ffb2537f13667152abd099787796c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37b5caab0df002f20ff3e1145dcfe6d1ffb2537f13667152abd099787796c1f1->leave($__internal_37b5caab0df002f20ff3e1145dcfe6d1ffb2537f13667152abd099787796c1f1_prof);

        
        $__internal_8c48b8ffaae19fa23c2a5921bb801cd6596a9ce11942b4e04e46e3703926c33c->leave($__internal_8c48b8ffaae19fa23c2a5921bb801cd6596a9ce11942b4e04e46e3703926c33c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c26e4f3d456e3bff334dc817e02527838b2173f460fc66e8281ff83b6ee62ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c26e4f3d456e3bff334dc817e02527838b2173f460fc66e8281ff83b6ee62ff->enter($__internal_0c26e4f3d456e3bff334dc817e02527838b2173f460fc66e8281ff83b6ee62ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_238848f42138656daaaae1addabfa976a55abcc38a4dbaf182d6c76699f39083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238848f42138656daaaae1addabfa976a55abcc38a4dbaf182d6c76699f39083->enter($__internal_238848f42138656daaaae1addabfa976a55abcc38a4dbaf182d6c76699f39083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_238848f42138656daaaae1addabfa976a55abcc38a4dbaf182d6c76699f39083->leave($__internal_238848f42138656daaaae1addabfa976a55abcc38a4dbaf182d6c76699f39083_prof);

        
        $__internal_0c26e4f3d456e3bff334dc817e02527838b2173f460fc66e8281ff83b6ee62ff->leave($__internal_0c26e4f3d456e3bff334dc817e02527838b2173f460fc66e8281ff83b6ee62ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f96eefd527a5dfc8d28113ad69f19c3d391efb2233623ce0ba13be4f89b6e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f96eefd527a5dfc8d28113ad69f19c3d391efb2233623ce0ba13be4f89b6e16->enter($__internal_1f96eefd527a5dfc8d28113ad69f19c3d391efb2233623ce0ba13be4f89b6e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_496a2dc063e812def5cf309be7c3ec692ccd5b3e878766ef36c6845cc9eb6b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496a2dc063e812def5cf309be7c3ec692ccd5b3e878766ef36c6845cc9eb6b6a->enter($__internal_496a2dc063e812def5cf309be7c3ec692ccd5b3e878766ef36c6845cc9eb6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_496a2dc063e812def5cf309be7c3ec692ccd5b3e878766ef36c6845cc9eb6b6a->leave($__internal_496a2dc063e812def5cf309be7c3ec692ccd5b3e878766ef36c6845cc9eb6b6a_prof);

        
        $__internal_1f96eefd527a5dfc8d28113ad69f19c3d391efb2233623ce0ba13be4f89b6e16->leave($__internal_1f96eefd527a5dfc8d28113ad69f19c3d391efb2233623ce0ba13be4f89b6e16_prof);

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
