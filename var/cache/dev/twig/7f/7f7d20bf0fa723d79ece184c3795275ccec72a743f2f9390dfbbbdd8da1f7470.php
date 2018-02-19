<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
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
        $__internal_6d6a602dd4d52bbdc3e0bbfca917481114279f89599ba8a864f64bef2ab732d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6a602dd4d52bbdc3e0bbfca917481114279f89599ba8a864f64bef2ab732d1->enter($__internal_6d6a602dd4d52bbdc3e0bbfca917481114279f89599ba8a864f64bef2ab732d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7165b2c287d5dcf4c1a365d08ff4cc502a75f04b8252c67a153e776f39915590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7165b2c287d5dcf4c1a365d08ff4cc502a75f04b8252c67a153e776f39915590->enter($__internal_7165b2c287d5dcf4c1a365d08ff4cc502a75f04b8252c67a153e776f39915590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d6a602dd4d52bbdc3e0bbfca917481114279f89599ba8a864f64bef2ab732d1->leave($__internal_6d6a602dd4d52bbdc3e0bbfca917481114279f89599ba8a864f64bef2ab732d1_prof);

        
        $__internal_7165b2c287d5dcf4c1a365d08ff4cc502a75f04b8252c67a153e776f39915590->leave($__internal_7165b2c287d5dcf4c1a365d08ff4cc502a75f04b8252c67a153e776f39915590_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06e41988bd61a06585127ecf1923bc1bc874299f5f1242c6d9684886fe30ac8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e41988bd61a06585127ecf1923bc1bc874299f5f1242c6d9684886fe30ac8f->enter($__internal_06e41988bd61a06585127ecf1923bc1bc874299f5f1242c6d9684886fe30ac8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77afe91894fd0853923fe3a2873523443626405978f20a47e305eb62583e80e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77afe91894fd0853923fe3a2873523443626405978f20a47e305eb62583e80e7->enter($__internal_77afe91894fd0853923fe3a2873523443626405978f20a47e305eb62583e80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_77afe91894fd0853923fe3a2873523443626405978f20a47e305eb62583e80e7->leave($__internal_77afe91894fd0853923fe3a2873523443626405978f20a47e305eb62583e80e7_prof);

        
        $__internal_06e41988bd61a06585127ecf1923bc1bc874299f5f1242c6d9684886fe30ac8f->leave($__internal_06e41988bd61a06585127ecf1923bc1bc874299f5f1242c6d9684886fe30ac8f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df9aad7130ef0cee7315259d045aaee1db2d2741adf0cb610fd4ae1ce03c4fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9aad7130ef0cee7315259d045aaee1db2d2741adf0cb610fd4ae1ce03c4fc0->enter($__internal_df9aad7130ef0cee7315259d045aaee1db2d2741adf0cb610fd4ae1ce03c4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_002844d6e3734d0f6432f126e5f00b0ec4e3a81376f61dcc0c656945370af7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002844d6e3734d0f6432f126e5f00b0ec4e3a81376f61dcc0c656945370af7de->enter($__internal_002844d6e3734d0f6432f126e5f00b0ec4e3a81376f61dcc0c656945370af7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_002844d6e3734d0f6432f126e5f00b0ec4e3a81376f61dcc0c656945370af7de->leave($__internal_002844d6e3734d0f6432f126e5f00b0ec4e3a81376f61dcc0c656945370af7de_prof);

        
        $__internal_df9aad7130ef0cee7315259d045aaee1db2d2741adf0cb610fd4ae1ce03c4fc0->leave($__internal_df9aad7130ef0cee7315259d045aaee1db2d2741adf0cb610fd4ae1ce03c4fc0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58d772b760c92e40b3dc28d97a19e9c13eb05a37d004ab949edb73498790a992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d772b760c92e40b3dc28d97a19e9c13eb05a37d004ab949edb73498790a992->enter($__internal_58d772b760c92e40b3dc28d97a19e9c13eb05a37d004ab949edb73498790a992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bdb99f7c20ca49a70d1fa3ecae8b2a4951d8eca79a20c066964aae830e1cf0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb99f7c20ca49a70d1fa3ecae8b2a4951d8eca79a20c066964aae830e1cf0f7->enter($__internal_bdb99f7c20ca49a70d1fa3ecae8b2a4951d8eca79a20c066964aae830e1cf0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bdb99f7c20ca49a70d1fa3ecae8b2a4951d8eca79a20c066964aae830e1cf0f7->leave($__internal_bdb99f7c20ca49a70d1fa3ecae8b2a4951d8eca79a20c066964aae830e1cf0f7_prof);

        
        $__internal_58d772b760c92e40b3dc28d97a19e9c13eb05a37d004ab949edb73498790a992->leave($__internal_58d772b760c92e40b3dc28d97a19e9c13eb05a37d004ab949edb73498790a992_prof);

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
