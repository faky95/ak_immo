<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10c655f3109ad76fadc16109c8d51996220afd5b182e8327ed819e323ad88e49 extends Twig_Template
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
        $__internal_851bea62c85e8fe17b7785d047ad8ddc0fb641f62ca2d002e57cc00160a0c06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851bea62c85e8fe17b7785d047ad8ddc0fb641f62ca2d002e57cc00160a0c06c->enter($__internal_851bea62c85e8fe17b7785d047ad8ddc0fb641f62ca2d002e57cc00160a0c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f89b0f95117d703c5b0d2ad45271ded200a1ddc86b14ab7a419bdfac56c1065c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89b0f95117d703c5b0d2ad45271ded200a1ddc86b14ab7a419bdfac56c1065c->enter($__internal_f89b0f95117d703c5b0d2ad45271ded200a1ddc86b14ab7a419bdfac56c1065c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_851bea62c85e8fe17b7785d047ad8ddc0fb641f62ca2d002e57cc00160a0c06c->leave($__internal_851bea62c85e8fe17b7785d047ad8ddc0fb641f62ca2d002e57cc00160a0c06c_prof);

        
        $__internal_f89b0f95117d703c5b0d2ad45271ded200a1ddc86b14ab7a419bdfac56c1065c->leave($__internal_f89b0f95117d703c5b0d2ad45271ded200a1ddc86b14ab7a419bdfac56c1065c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c59d7a6dd66fa2a9c0c49fd57be4621b4cefc7e0df99ab4679b34d6ddf536c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c59d7a6dd66fa2a9c0c49fd57be4621b4cefc7e0df99ab4679b34d6ddf536c1->enter($__internal_5c59d7a6dd66fa2a9c0c49fd57be4621b4cefc7e0df99ab4679b34d6ddf536c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef5cfe84c8533256ec256fd4b64167ad9138713a632a80a1f732c707e3721b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5cfe84c8533256ec256fd4b64167ad9138713a632a80a1f732c707e3721b21->enter($__internal_ef5cfe84c8533256ec256fd4b64167ad9138713a632a80a1f732c707e3721b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ef5cfe84c8533256ec256fd4b64167ad9138713a632a80a1f732c707e3721b21->leave($__internal_ef5cfe84c8533256ec256fd4b64167ad9138713a632a80a1f732c707e3721b21_prof);

        
        $__internal_5c59d7a6dd66fa2a9c0c49fd57be4621b4cefc7e0df99ab4679b34d6ddf536c1->leave($__internal_5c59d7a6dd66fa2a9c0c49fd57be4621b4cefc7e0df99ab4679b34d6ddf536c1_prof);

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
