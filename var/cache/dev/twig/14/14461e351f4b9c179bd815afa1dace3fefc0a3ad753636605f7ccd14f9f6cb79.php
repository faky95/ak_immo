<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_881e4bf4840f5896948e1ecba82a9263770b8fc690d1a3bcb0d26ede8a44d215 extends Twig_Template
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
        $__internal_118d62f985bde38811b3a27b2c4769a1d1a6ee5821ec0d47f357777776935484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118d62f985bde38811b3a27b2c4769a1d1a6ee5821ec0d47f357777776935484->enter($__internal_118d62f985bde38811b3a27b2c4769a1d1a6ee5821ec0d47f357777776935484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7098599ce8905ecc38a3316815a7b9b79eaa9d830a6a9e3b00b4af5ddffed2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7098599ce8905ecc38a3316815a7b9b79eaa9d830a6a9e3b00b4af5ddffed2f->enter($__internal_f7098599ce8905ecc38a3316815a7b9b79eaa9d830a6a9e3b00b4af5ddffed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118d62f985bde38811b3a27b2c4769a1d1a6ee5821ec0d47f357777776935484->leave($__internal_118d62f985bde38811b3a27b2c4769a1d1a6ee5821ec0d47f357777776935484_prof);

        
        $__internal_f7098599ce8905ecc38a3316815a7b9b79eaa9d830a6a9e3b00b4af5ddffed2f->leave($__internal_f7098599ce8905ecc38a3316815a7b9b79eaa9d830a6a9e3b00b4af5ddffed2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c44c3eb1aa873e2696ad812c1bb854584cc0536dadd1a1415654131bf1050bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44c3eb1aa873e2696ad812c1bb854584cc0536dadd1a1415654131bf1050bd9->enter($__internal_c44c3eb1aa873e2696ad812c1bb854584cc0536dadd1a1415654131bf1050bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_15e701585d92fd68955835151c9e352cc5d000cab6507a166e28dee7be6991ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e701585d92fd68955835151c9e352cc5d000cab6507a166e28dee7be6991ee->enter($__internal_15e701585d92fd68955835151c9e352cc5d000cab6507a166e28dee7be6991ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15e701585d92fd68955835151c9e352cc5d000cab6507a166e28dee7be6991ee->leave($__internal_15e701585d92fd68955835151c9e352cc5d000cab6507a166e28dee7be6991ee_prof);

        
        $__internal_c44c3eb1aa873e2696ad812c1bb854584cc0536dadd1a1415654131bf1050bd9->leave($__internal_c44c3eb1aa873e2696ad812c1bb854584cc0536dadd1a1415654131bf1050bd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67b53a544ff7f08a8cac177c2372e7e2292f921acb65b56723258c47d63e9d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b53a544ff7f08a8cac177c2372e7e2292f921acb65b56723258c47d63e9d83->enter($__internal_67b53a544ff7f08a8cac177c2372e7e2292f921acb65b56723258c47d63e9d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41c8da20a34f8d159cfca5d07e4017fe6030002250bf1ded7e54eabd0d06fb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c8da20a34f8d159cfca5d07e4017fe6030002250bf1ded7e54eabd0d06fb87->enter($__internal_41c8da20a34f8d159cfca5d07e4017fe6030002250bf1ded7e54eabd0d06fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41c8da20a34f8d159cfca5d07e4017fe6030002250bf1ded7e54eabd0d06fb87->leave($__internal_41c8da20a34f8d159cfca5d07e4017fe6030002250bf1ded7e54eabd0d06fb87_prof);

        
        $__internal_67b53a544ff7f08a8cac177c2372e7e2292f921acb65b56723258c47d63e9d83->leave($__internal_67b53a544ff7f08a8cac177c2372e7e2292f921acb65b56723258c47d63e9d83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ff217cf6bf0c9b6507377d7519b9a44e4d03d3838d2479390ade7a002bd29b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff217cf6bf0c9b6507377d7519b9a44e4d03d3838d2479390ade7a002bd29b3->enter($__internal_2ff217cf6bf0c9b6507377d7519b9a44e4d03d3838d2479390ade7a002bd29b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7cee517d2da885604be4c854d9bc89cbe65cbfb62f61b345bb88ecc20012fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7cee517d2da885604be4c854d9bc89cbe65cbfb62f61b345bb88ecc20012fb->enter($__internal_fd7cee517d2da885604be4c854d9bc89cbe65cbfb62f61b345bb88ecc20012fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd7cee517d2da885604be4c854d9bc89cbe65cbfb62f61b345bb88ecc20012fb->leave($__internal_fd7cee517d2da885604be4c854d9bc89cbe65cbfb62f61b345bb88ecc20012fb_prof);

        
        $__internal_2ff217cf6bf0c9b6507377d7519b9a44e4d03d3838d2479390ade7a002bd29b3->leave($__internal_2ff217cf6bf0c9b6507377d7519b9a44e4d03d3838d2479390ade7a002bd29b3_prof);

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
