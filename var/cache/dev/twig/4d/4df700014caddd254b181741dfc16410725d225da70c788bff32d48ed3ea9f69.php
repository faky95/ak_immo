<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_57888d432ed757c406088cd17eeb99389f1dd9bcd676ae6c7b4e8dde300b30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f6066df3e0c98ccf5aae6dc7ea7bcb0325c2a891cfc834378a2230b03d9f642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6066df3e0c98ccf5aae6dc7ea7bcb0325c2a891cfc834378a2230b03d9f642->enter($__internal_8f6066df3e0c98ccf5aae6dc7ea7bcb0325c2a891cfc834378a2230b03d9f642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fba94c148b4f1006ed7589bfc4d21770598e59e03f04e91c0a048a9a260fc889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba94c148b4f1006ed7589bfc4d21770598e59e03f04e91c0a048a9a260fc889->enter($__internal_fba94c148b4f1006ed7589bfc4d21770598e59e03f04e91c0a048a9a260fc889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8f6066df3e0c98ccf5aae6dc7ea7bcb0325c2a891cfc834378a2230b03d9f642->leave($__internal_8f6066df3e0c98ccf5aae6dc7ea7bcb0325c2a891cfc834378a2230b03d9f642_prof);

        
        $__internal_fba94c148b4f1006ed7589bfc4d21770598e59e03f04e91c0a048a9a260fc889->leave($__internal_fba94c148b4f1006ed7589bfc4d21770598e59e03f04e91c0a048a9a260fc889_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d4e58e136fd21671cb73d02e20633b8c6448fce5c73028654470a9ef7d23dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4e58e136fd21671cb73d02e20633b8c6448fce5c73028654470a9ef7d23dba->enter($__internal_4d4e58e136fd21671cb73d02e20633b8c6448fce5c73028654470a9ef7d23dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e45462b484e5ab343ec177416eb0799caf69688f354324cc0840812a0c39279c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45462b484e5ab343ec177416eb0799caf69688f354324cc0840812a0c39279c->enter($__internal_e45462b484e5ab343ec177416eb0799caf69688f354324cc0840812a0c39279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e45462b484e5ab343ec177416eb0799caf69688f354324cc0840812a0c39279c->leave($__internal_e45462b484e5ab343ec177416eb0799caf69688f354324cc0840812a0c39279c_prof);

        
        $__internal_4d4e58e136fd21671cb73d02e20633b8c6448fce5c73028654470a9ef7d23dba->leave($__internal_4d4e58e136fd21671cb73d02e20633b8c6448fce5c73028654470a9ef7d23dba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f8bac4aeda48cae4de8df617538d63ba674ac2559f0ef956189ea3fd4592156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8bac4aeda48cae4de8df617538d63ba674ac2559f0ef956189ea3fd4592156->enter($__internal_2f8bac4aeda48cae4de8df617538d63ba674ac2559f0ef956189ea3fd4592156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfd813b9836aef178a82f47eb3aa298c3283491dac19d55548527ca14a5df518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd813b9836aef178a82f47eb3aa298c3283491dac19d55548527ca14a5df518->enter($__internal_dfd813b9836aef178a82f47eb3aa298c3283491dac19d55548527ca14a5df518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dfd813b9836aef178a82f47eb3aa298c3283491dac19d55548527ca14a5df518->leave($__internal_dfd813b9836aef178a82f47eb3aa298c3283491dac19d55548527ca14a5df518_prof);

        
        $__internal_2f8bac4aeda48cae4de8df617538d63ba674ac2559f0ef956189ea3fd4592156->leave($__internal_2f8bac4aeda48cae4de8df617538d63ba674ac2559f0ef956189ea3fd4592156_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_07365b8ef5f8b246c74eafd2f9b5137a82893e1947f491271556851a2df49e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07365b8ef5f8b246c74eafd2f9b5137a82893e1947f491271556851a2df49e7e->enter($__internal_07365b8ef5f8b246c74eafd2f9b5137a82893e1947f491271556851a2df49e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce0592a06d2d3b35e872ef63ff9a7b8ba33fd129dbb4e97da1ae718d3a19ce3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0592a06d2d3b35e872ef63ff9a7b8ba33fd129dbb4e97da1ae718d3a19ce3c->enter($__internal_ce0592a06d2d3b35e872ef63ff9a7b8ba33fd129dbb4e97da1ae718d3a19ce3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce0592a06d2d3b35e872ef63ff9a7b8ba33fd129dbb4e97da1ae718d3a19ce3c->leave($__internal_ce0592a06d2d3b35e872ef63ff9a7b8ba33fd129dbb4e97da1ae718d3a19ce3c_prof);

        
        $__internal_07365b8ef5f8b246c74eafd2f9b5137a82893e1947f491271556851a2df49e7e->leave($__internal_07365b8ef5f8b246c74eafd2f9b5137a82893e1947f491271556851a2df49e7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
