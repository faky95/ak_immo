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
        $__internal_73e5c7f1c6fe3484ef558e942bcce625d529623e6cd07f6ff31f8b177cfe7e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e5c7f1c6fe3484ef558e942bcce625d529623e6cd07f6ff31f8b177cfe7e80->enter($__internal_73e5c7f1c6fe3484ef558e942bcce625d529623e6cd07f6ff31f8b177cfe7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3d033adff46ba6b88c9772978c96b8d4bfd2cc5c9cffc400ddb3aeaaf0f9dc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d033adff46ba6b88c9772978c96b8d4bfd2cc5c9cffc400ddb3aeaaf0f9dc7c->enter($__internal_3d033adff46ba6b88c9772978c96b8d4bfd2cc5c9cffc400ddb3aeaaf0f9dc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e5c7f1c6fe3484ef558e942bcce625d529623e6cd07f6ff31f8b177cfe7e80->leave($__internal_73e5c7f1c6fe3484ef558e942bcce625d529623e6cd07f6ff31f8b177cfe7e80_prof);

        
        $__internal_3d033adff46ba6b88c9772978c96b8d4bfd2cc5c9cffc400ddb3aeaaf0f9dc7c->leave($__internal_3d033adff46ba6b88c9772978c96b8d4bfd2cc5c9cffc400ddb3aeaaf0f9dc7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe7b40f1d2e6ca5b23a99091e629771e4e13f1cf051b562c3672b167cbb2467a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7b40f1d2e6ca5b23a99091e629771e4e13f1cf051b562c3672b167cbb2467a->enter($__internal_fe7b40f1d2e6ca5b23a99091e629771e4e13f1cf051b562c3672b167cbb2467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_667ed2b45fbd14e0bfd0d3b928043c64a43defb969b80372a5921ccddaf90156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667ed2b45fbd14e0bfd0d3b928043c64a43defb969b80372a5921ccddaf90156->enter($__internal_667ed2b45fbd14e0bfd0d3b928043c64a43defb969b80372a5921ccddaf90156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_667ed2b45fbd14e0bfd0d3b928043c64a43defb969b80372a5921ccddaf90156->leave($__internal_667ed2b45fbd14e0bfd0d3b928043c64a43defb969b80372a5921ccddaf90156_prof);

        
        $__internal_fe7b40f1d2e6ca5b23a99091e629771e4e13f1cf051b562c3672b167cbb2467a->leave($__internal_fe7b40f1d2e6ca5b23a99091e629771e4e13f1cf051b562c3672b167cbb2467a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_130bf36908c266dee50cae79c2a34b36e3698b45fb153bfaaa3c94267244131f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130bf36908c266dee50cae79c2a34b36e3698b45fb153bfaaa3c94267244131f->enter($__internal_130bf36908c266dee50cae79c2a34b36e3698b45fb153bfaaa3c94267244131f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe460d641f446118baf49cd48920e4ad8f12488e4668e769fbbd8a008cf92284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe460d641f446118baf49cd48920e4ad8f12488e4668e769fbbd8a008cf92284->enter($__internal_fe460d641f446118baf49cd48920e4ad8f12488e4668e769fbbd8a008cf92284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe460d641f446118baf49cd48920e4ad8f12488e4668e769fbbd8a008cf92284->leave($__internal_fe460d641f446118baf49cd48920e4ad8f12488e4668e769fbbd8a008cf92284_prof);

        
        $__internal_130bf36908c266dee50cae79c2a34b36e3698b45fb153bfaaa3c94267244131f->leave($__internal_130bf36908c266dee50cae79c2a34b36e3698b45fb153bfaaa3c94267244131f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d1f3fb88e0421785113b405a4bf8aecabe581d0cd2a1dbf5eca832d2e34764c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1f3fb88e0421785113b405a4bf8aecabe581d0cd2a1dbf5eca832d2e34764c->enter($__internal_7d1f3fb88e0421785113b405a4bf8aecabe581d0cd2a1dbf5eca832d2e34764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8fcf4cb7e1003d18879517c5c1008abae3002be1ad533e134d71df7f066652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fcf4cb7e1003d18879517c5c1008abae3002be1ad533e134d71df7f066652c->enter($__internal_d8fcf4cb7e1003d18879517c5c1008abae3002be1ad533e134d71df7f066652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8fcf4cb7e1003d18879517c5c1008abae3002be1ad533e134d71df7f066652c->leave($__internal_d8fcf4cb7e1003d18879517c5c1008abae3002be1ad533e134d71df7f066652c_prof);

        
        $__internal_7d1f3fb88e0421785113b405a4bf8aecabe581d0cd2a1dbf5eca832d2e34764c->leave($__internal_7d1f3fb88e0421785113b405a4bf8aecabe581d0cd2a1dbf5eca832d2e34764c_prof);

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
