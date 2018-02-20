<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_650fedcf4ce545413cc7315b3ff89393155d9bb002ac7ac70df21c9fb3d99c5d extends Twig_Template
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
        $__internal_b316911a3b4ca1b7cd0fd9724fdfd0190a8a1e6d54f2ad85731500d7b978b7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b316911a3b4ca1b7cd0fd9724fdfd0190a8a1e6d54f2ad85731500d7b978b7e6->enter($__internal_b316911a3b4ca1b7cd0fd9724fdfd0190a8a1e6d54f2ad85731500d7b978b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f040732b39cb8b9b45f67cab5244d34812e231973504fd7784c4ca6c8fd43053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f040732b39cb8b9b45f67cab5244d34812e231973504fd7784c4ca6c8fd43053->enter($__internal_f040732b39cb8b9b45f67cab5244d34812e231973504fd7784c4ca6c8fd43053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b316911a3b4ca1b7cd0fd9724fdfd0190a8a1e6d54f2ad85731500d7b978b7e6->leave($__internal_b316911a3b4ca1b7cd0fd9724fdfd0190a8a1e6d54f2ad85731500d7b978b7e6_prof);

        
        $__internal_f040732b39cb8b9b45f67cab5244d34812e231973504fd7784c4ca6c8fd43053->leave($__internal_f040732b39cb8b9b45f67cab5244d34812e231973504fd7784c4ca6c8fd43053_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_994e5036a59eba800e6d6c444cbd26dab2e762b1c20915923f5a4a1ceefd53e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994e5036a59eba800e6d6c444cbd26dab2e762b1c20915923f5a4a1ceefd53e8->enter($__internal_994e5036a59eba800e6d6c444cbd26dab2e762b1c20915923f5a4a1ceefd53e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97c5d04f3c76ebac840f236113a344961a7eb77bbb564b543d35eda60ff30254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c5d04f3c76ebac840f236113a344961a7eb77bbb564b543d35eda60ff30254->enter($__internal_97c5d04f3c76ebac840f236113a344961a7eb77bbb564b543d35eda60ff30254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97c5d04f3c76ebac840f236113a344961a7eb77bbb564b543d35eda60ff30254->leave($__internal_97c5d04f3c76ebac840f236113a344961a7eb77bbb564b543d35eda60ff30254_prof);

        
        $__internal_994e5036a59eba800e6d6c444cbd26dab2e762b1c20915923f5a4a1ceefd53e8->leave($__internal_994e5036a59eba800e6d6c444cbd26dab2e762b1c20915923f5a4a1ceefd53e8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61fa5b0375963c388c2651fd04b0fa33a84f5fbe8b8751e73f6b2e619f0fa994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fa5b0375963c388c2651fd04b0fa33a84f5fbe8b8751e73f6b2e619f0fa994->enter($__internal_61fa5b0375963c388c2651fd04b0fa33a84f5fbe8b8751e73f6b2e619f0fa994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_045c8082b3506dd5fa3bc40b134de5709dd2bf4e17fbab1fe06be22cf8267f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045c8082b3506dd5fa3bc40b134de5709dd2bf4e17fbab1fe06be22cf8267f37->enter($__internal_045c8082b3506dd5fa3bc40b134de5709dd2bf4e17fbab1fe06be22cf8267f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_045c8082b3506dd5fa3bc40b134de5709dd2bf4e17fbab1fe06be22cf8267f37->leave($__internal_045c8082b3506dd5fa3bc40b134de5709dd2bf4e17fbab1fe06be22cf8267f37_prof);

        
        $__internal_61fa5b0375963c388c2651fd04b0fa33a84f5fbe8b8751e73f6b2e619f0fa994->leave($__internal_61fa5b0375963c388c2651fd04b0fa33a84f5fbe8b8751e73f6b2e619f0fa994_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82a2569b7131d07d3ff5faf978353167b2447e1357ec07de8af1882d22cdf338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a2569b7131d07d3ff5faf978353167b2447e1357ec07de8af1882d22cdf338->enter($__internal_82a2569b7131d07d3ff5faf978353167b2447e1357ec07de8af1882d22cdf338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1b8bd569c98c6763d8c9d5b035e0800a66c4529f0b3bfc25e96020a9484ca76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b8bd569c98c6763d8c9d5b035e0800a66c4529f0b3bfc25e96020a9484ca76->enter($__internal_c1b8bd569c98c6763d8c9d5b035e0800a66c4529f0b3bfc25e96020a9484ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1b8bd569c98c6763d8c9d5b035e0800a66c4529f0b3bfc25e96020a9484ca76->leave($__internal_c1b8bd569c98c6763d8c9d5b035e0800a66c4529f0b3bfc25e96020a9484ca76_prof);

        
        $__internal_82a2569b7131d07d3ff5faf978353167b2447e1357ec07de8af1882d22cdf338->leave($__internal_82a2569b7131d07d3ff5faf978353167b2447e1357ec07de8af1882d22cdf338_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
