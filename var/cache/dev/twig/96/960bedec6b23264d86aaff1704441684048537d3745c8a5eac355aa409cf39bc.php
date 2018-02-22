<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a2e0c72a9c1b566ba72211387f09b929ffcbc75c0632aebfa1001baedb37bf7a extends Twig_Template
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
        $__internal_a5703761f68ae1b786473a0eba58ad588e3aa78796d8d37848f625b6d6898470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5703761f68ae1b786473a0eba58ad588e3aa78796d8d37848f625b6d6898470->enter($__internal_a5703761f68ae1b786473a0eba58ad588e3aa78796d8d37848f625b6d6898470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8b55100255c28eabe023c14a82f66a5573f1ab03ca083287aa152e89e3fe7dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b55100255c28eabe023c14a82f66a5573f1ab03ca083287aa152e89e3fe7dd2->enter($__internal_8b55100255c28eabe023c14a82f66a5573f1ab03ca083287aa152e89e3fe7dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5703761f68ae1b786473a0eba58ad588e3aa78796d8d37848f625b6d6898470->leave($__internal_a5703761f68ae1b786473a0eba58ad588e3aa78796d8d37848f625b6d6898470_prof);

        
        $__internal_8b55100255c28eabe023c14a82f66a5573f1ab03ca083287aa152e89e3fe7dd2->leave($__internal_8b55100255c28eabe023c14a82f66a5573f1ab03ca083287aa152e89e3fe7dd2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93fcbc9f16f2d7d06494ea306588c6ca7e601c324af97a0e81e74e1bce9ba80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fcbc9f16f2d7d06494ea306588c6ca7e601c324af97a0e81e74e1bce9ba80f->enter($__internal_93fcbc9f16f2d7d06494ea306588c6ca7e601c324af97a0e81e74e1bce9ba80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dadd98bafcae60949270b4029d859854304134b456c2f28390bd043350ad79d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd98bafcae60949270b4029d859854304134b456c2f28390bd043350ad79d6->enter($__internal_dadd98bafcae60949270b4029d859854304134b456c2f28390bd043350ad79d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_dadd98bafcae60949270b4029d859854304134b456c2f28390bd043350ad79d6->leave($__internal_dadd98bafcae60949270b4029d859854304134b456c2f28390bd043350ad79d6_prof);

        
        $__internal_93fcbc9f16f2d7d06494ea306588c6ca7e601c324af97a0e81e74e1bce9ba80f->leave($__internal_93fcbc9f16f2d7d06494ea306588c6ca7e601c324af97a0e81e74e1bce9ba80f_prof);

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
