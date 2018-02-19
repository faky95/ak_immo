<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b47fe2c892026d47628c0b02ffcfb5295d5601f5ca7303c90906caacf263f3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_520707196799553d8d88e3a0d13fdb8ce19acd2525d75a5d394570713b5d6ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520707196799553d8d88e3a0d13fdb8ce19acd2525d75a5d394570713b5d6ca1->enter($__internal_520707196799553d8d88e3a0d13fdb8ce19acd2525d75a5d394570713b5d6ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dd8647c38ad1fcaa8bea4091b4b19d14a78897d0c262bb23ae1c4cd7fe0e48db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8647c38ad1fcaa8bea4091b4b19d14a78897d0c262bb23ae1c4cd7fe0e48db->enter($__internal_dd8647c38ad1fcaa8bea4091b4b19d14a78897d0c262bb23ae1c4cd7fe0e48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520707196799553d8d88e3a0d13fdb8ce19acd2525d75a5d394570713b5d6ca1->leave($__internal_520707196799553d8d88e3a0d13fdb8ce19acd2525d75a5d394570713b5d6ca1_prof);

        
        $__internal_dd8647c38ad1fcaa8bea4091b4b19d14a78897d0c262bb23ae1c4cd7fe0e48db->leave($__internal_dd8647c38ad1fcaa8bea4091b4b19d14a78897d0c262bb23ae1c4cd7fe0e48db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbdecd1539a9928651748017bb67b0ef4a1186fedbfb61e99b6934f13d4a4c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdecd1539a9928651748017bb67b0ef4a1186fedbfb61e99b6934f13d4a4c33->enter($__internal_fbdecd1539a9928651748017bb67b0ef4a1186fedbfb61e99b6934f13d4a4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_977b7b1839596091340787e28b4e0e2205abfe821b0f9a8bd18f31b36d8385bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977b7b1839596091340787e28b4e0e2205abfe821b0f9a8bd18f31b36d8385bf->enter($__internal_977b7b1839596091340787e28b4e0e2205abfe821b0f9a8bd18f31b36d8385bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_977b7b1839596091340787e28b4e0e2205abfe821b0f9a8bd18f31b36d8385bf->leave($__internal_977b7b1839596091340787e28b4e0e2205abfe821b0f9a8bd18f31b36d8385bf_prof);

        
        $__internal_fbdecd1539a9928651748017bb67b0ef4a1186fedbfb61e99b6934f13d4a4c33->leave($__internal_fbdecd1539a9928651748017bb67b0ef4a1186fedbfb61e99b6934f13d4a4c33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
