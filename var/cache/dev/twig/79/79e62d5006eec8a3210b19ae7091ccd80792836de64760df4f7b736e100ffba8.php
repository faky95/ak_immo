<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
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
        $__internal_0a7e878e481080fb3d0af688bf6f83e21741d8d46bb96e060e35a905c673e065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7e878e481080fb3d0af688bf6f83e21741d8d46bb96e060e35a905c673e065->enter($__internal_0a7e878e481080fb3d0af688bf6f83e21741d8d46bb96e060e35a905c673e065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_427c1db649dca862f840e60f7eda2b05385cdbbabc37637745229f56888279b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427c1db649dca862f840e60f7eda2b05385cdbbabc37637745229f56888279b3->enter($__internal_427c1db649dca862f840e60f7eda2b05385cdbbabc37637745229f56888279b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7e878e481080fb3d0af688bf6f83e21741d8d46bb96e060e35a905c673e065->leave($__internal_0a7e878e481080fb3d0af688bf6f83e21741d8d46bb96e060e35a905c673e065_prof);

        
        $__internal_427c1db649dca862f840e60f7eda2b05385cdbbabc37637745229f56888279b3->leave($__internal_427c1db649dca862f840e60f7eda2b05385cdbbabc37637745229f56888279b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa3123d62bebd75d7edf3859693d2884e64e2298a38f264795490e063b6935eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3123d62bebd75d7edf3859693d2884e64e2298a38f264795490e063b6935eb->enter($__internal_aa3123d62bebd75d7edf3859693d2884e64e2298a38f264795490e063b6935eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79aa8f230ee67fcc7a0d2f51d6dcb5361091bf76de4fe17c2f5e192df21d7db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aa8f230ee67fcc7a0d2f51d6dcb5361091bf76de4fe17c2f5e192df21d7db6->enter($__internal_79aa8f230ee67fcc7a0d2f51d6dcb5361091bf76de4fe17c2f5e192df21d7db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_79aa8f230ee67fcc7a0d2f51d6dcb5361091bf76de4fe17c2f5e192df21d7db6->leave($__internal_79aa8f230ee67fcc7a0d2f51d6dcb5361091bf76de4fe17c2f5e192df21d7db6_prof);

        
        $__internal_aa3123d62bebd75d7edf3859693d2884e64e2298a38f264795490e063b6935eb->leave($__internal_aa3123d62bebd75d7edf3859693d2884e64e2298a38f264795490e063b6935eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bc0a82ca0191243f9bfa995ee2855510dcfee5c6adafea8c2ac5e5e5c92476a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc0a82ca0191243f9bfa995ee2855510dcfee5c6adafea8c2ac5e5e5c92476a->enter($__internal_2bc0a82ca0191243f9bfa995ee2855510dcfee5c6adafea8c2ac5e5e5c92476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca907b22bcea07b031f06fcd9eddb23262ea6864b07adfba6777fef0b82d09af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca907b22bcea07b031f06fcd9eddb23262ea6864b07adfba6777fef0b82d09af->enter($__internal_ca907b22bcea07b031f06fcd9eddb23262ea6864b07adfba6777fef0b82d09af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca907b22bcea07b031f06fcd9eddb23262ea6864b07adfba6777fef0b82d09af->leave($__internal_ca907b22bcea07b031f06fcd9eddb23262ea6864b07adfba6777fef0b82d09af_prof);

        
        $__internal_2bc0a82ca0191243f9bfa995ee2855510dcfee5c6adafea8c2ac5e5e5c92476a->leave($__internal_2bc0a82ca0191243f9bfa995ee2855510dcfee5c6adafea8c2ac5e5e5c92476a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a49eec792b8fc619a1c49aa360180d979b5315dec5e798c58f9dd6633e285d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a49eec792b8fc619a1c49aa360180d979b5315dec5e798c58f9dd6633e285d->enter($__internal_06a49eec792b8fc619a1c49aa360180d979b5315dec5e798c58f9dd6633e285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb6ef1d855cdfa1902eb1658a325a5fedbac865080e492dfcad3635b1ce4ebae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6ef1d855cdfa1902eb1658a325a5fedbac865080e492dfcad3635b1ce4ebae->enter($__internal_bb6ef1d855cdfa1902eb1658a325a5fedbac865080e492dfcad3635b1ce4ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bb6ef1d855cdfa1902eb1658a325a5fedbac865080e492dfcad3635b1ce4ebae->leave($__internal_bb6ef1d855cdfa1902eb1658a325a5fedbac865080e492dfcad3635b1ce4ebae_prof);

        
        $__internal_06a49eec792b8fc619a1c49aa360180d979b5315dec5e798c58f9dd6633e285d->leave($__internal_06a49eec792b8fc619a1c49aa360180d979b5315dec5e798c58f9dd6633e285d_prof);

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
