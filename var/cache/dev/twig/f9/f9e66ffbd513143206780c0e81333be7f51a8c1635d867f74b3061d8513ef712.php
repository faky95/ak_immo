<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_bd81f2523893a14a1eb27136677132885000004910000ebe34e36010c3b097ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:var/cache/dev/twig/f9/f9e66ffbd513143206780c0e81333be7f51a8c1635d867f74b3061d8513ef712.php
        $__internal_994dcea39c1e41288639142c6b0951eb51d119387cbe1c5236f7dae86335109e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994dcea39c1e41288639142c6b0951eb51d119387cbe1c5236f7dae86335109e->enter($__internal_994dcea39c1e41288639142c6b0951eb51d119387cbe1c5236f7dae86335109e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ff40507f49cb033d60e563859c8c12aaf25d4a0fa9e0795c03eec2ef95b96b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff40507f49cb033d60e563859c8c12aaf25d4a0fa9e0795c03eec2ef95b96b8c->enter($__internal_ff40507f49cb033d60e563859c8c12aaf25d4a0fa9e0795c03eec2ef95b96b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_78f1db1b75323d1b29b0a65745531422529088154d8487e8b5cb1370644d8012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f1db1b75323d1b29b0a65745531422529088154d8487e8b5cb1370644d8012->enter($__internal_78f1db1b75323d1b29b0a65745531422529088154d8487e8b5cb1370644d8012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_095fb5c2ef5d7f9a076f25945fe9ecd4a61d96f84db3a2c1cf82caf08146c427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095fb5c2ef5d7f9a076f25945fe9ecd4a61d96f84db3a2c1cf82caf08146c427->enter($__internal_095fb5c2ef5d7f9a076f25945fe9ecd4a61d96f84db3a2c1cf82caf08146c427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/7c/7ca323dfe72c2941745cb9e484bd93a661eaca11d0a0621a8ea6eb598bf66091.php

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) {
                // line 5
                echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
<<<<<<< HEAD:var/cache/dev/twig/f9/f9e66ffbd513143206780c0e81333be7f51a8c1635d867f74b3061d8513ef712.php
        $__internal_994dcea39c1e41288639142c6b0951eb51d119387cbe1c5236f7dae86335109e->leave($__internal_994dcea39c1e41288639142c6b0951eb51d119387cbe1c5236f7dae86335109e_prof);

        
        $__internal_ff40507f49cb033d60e563859c8c12aaf25d4a0fa9e0795c03eec2ef95b96b8c->leave($__internal_ff40507f49cb033d60e563859c8c12aaf25d4a0fa9e0795c03eec2ef95b96b8c_prof);
=======
        $__internal_78f1db1b75323d1b29b0a65745531422529088154d8487e8b5cb1370644d8012->leave($__internal_78f1db1b75323d1b29b0a65745531422529088154d8487e8b5cb1370644d8012_prof);

        
        $__internal_095fb5c2ef5d7f9a076f25945fe9ecd4a61d96f84db3a2c1cf82caf08146c427->leave($__internal_095fb5c2ef5d7f9a076f25945fe9ecd4a61d96f84db3a2c1cf82caf08146c427_prof);
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/7c/7ca323dfe72c2941745cb9e484bd93a661eaca11d0a0621a8ea6eb598bf66091.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
