<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_699b597579df7ed0635cc88094325013f5b5358851fca240ee9ee7c2f93ddb11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e028a84524b095f4254b96e1fbe04516382c9d3bb52715edbfaf110a6b8104d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e028a84524b095f4254b96e1fbe04516382c9d3bb52715edbfaf110a6b8104d->enter($__internal_7e028a84524b095f4254b96e1fbe04516382c9d3bb52715edbfaf110a6b8104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_51b6688eff0299b2051fdf021ee564af05f8ed83726b7361aeeac3dbb65375b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b6688eff0299b2051fdf021ee564af05f8ed83726b7361aeeac3dbb65375b7->enter($__internal_51b6688eff0299b2051fdf021ee564af05f8ed83726b7361aeeac3dbb65375b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e028a84524b095f4254b96e1fbe04516382c9d3bb52715edbfaf110a6b8104d->leave($__internal_7e028a84524b095f4254b96e1fbe04516382c9d3bb52715edbfaf110a6b8104d_prof);

        
        $__internal_51b6688eff0299b2051fdf021ee564af05f8ed83726b7361aeeac3dbb65375b7->leave($__internal_51b6688eff0299b2051fdf021ee564af05f8ed83726b7361aeeac3dbb65375b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79bc788ea481cb6b7c88a5b2b4df349068334242182e82eb94461b8977e17831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bc788ea481cb6b7c88a5b2b4df349068334242182e82eb94461b8977e17831->enter($__internal_79bc788ea481cb6b7c88a5b2b4df349068334242182e82eb94461b8977e17831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c1f8f58e29dd58e7ce252f1e6c585b2a14b6704d4099a8e259908e7f167f8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1f8f58e29dd58e7ce252f1e6c585b2a14b6704d4099a8e259908e7f167f8ab->enter($__internal_0c1f8f58e29dd58e7ce252f1e6c585b2a14b6704d4099a8e259908e7f167f8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0c1f8f58e29dd58e7ce252f1e6c585b2a14b6704d4099a8e259908e7f167f8ab->leave($__internal_0c1f8f58e29dd58e7ce252f1e6c585b2a14b6704d4099a8e259908e7f167f8ab_prof);

        
        $__internal_79bc788ea481cb6b7c88a5b2b4df349068334242182e82eb94461b8977e17831->leave($__internal_79bc788ea481cb6b7c88a5b2b4df349068334242182e82eb94461b8977e17831_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6cdb1cdedac099da9845dfa113830325880ce1616a5bebd97f0f47e5114d15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cdb1cdedac099da9845dfa113830325880ce1616a5bebd97f0f47e5114d15c->enter($__internal_a6cdb1cdedac099da9845dfa113830325880ce1616a5bebd97f0f47e5114d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fadf51691b8c1588fd3d63bb7548545fff9a307ad5736f981d5d75c77f0e0b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadf51691b8c1588fd3d63bb7548545fff9a307ad5736f981d5d75c77f0e0b74->enter($__internal_fadf51691b8c1588fd3d63bb7548545fff9a307ad5736f981d5d75c77f0e0b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fadf51691b8c1588fd3d63bb7548545fff9a307ad5736f981d5d75c77f0e0b74->leave($__internal_fadf51691b8c1588fd3d63bb7548545fff9a307ad5736f981d5d75c77f0e0b74_prof);

        
        $__internal_a6cdb1cdedac099da9845dfa113830325880ce1616a5bebd97f0f47e5114d15c->leave($__internal_a6cdb1cdedac099da9845dfa113830325880ce1616a5bebd97f0f47e5114d15c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1deb2c12100775c4d22cd0f2fd859bac546e449dad83855e74f98b71b43349a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1deb2c12100775c4d22cd0f2fd859bac546e449dad83855e74f98b71b43349a->enter($__internal_e1deb2c12100775c4d22cd0f2fd859bac546e449dad83855e74f98b71b43349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a527e0df59c064e088fb37105bea585f825e024d68aef73c679b7449a750a40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a527e0df59c064e088fb37105bea585f825e024d68aef73c679b7449a750a40f->enter($__internal_a527e0df59c064e088fb37105bea585f825e024d68aef73c679b7449a750a40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a527e0df59c064e088fb37105bea585f825e024d68aef73c679b7449a750a40f->leave($__internal_a527e0df59c064e088fb37105bea585f825e024d68aef73c679b7449a750a40f_prof);

        
        $__internal_e1deb2c12100775c4d22cd0f2fd859bac546e449dad83855e74f98b71b43349a->leave($__internal_e1deb2c12100775c4d22cd0f2fd859bac546e449dad83855e74f98b71b43349a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
