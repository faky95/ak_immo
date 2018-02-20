<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f3a4e4fefc781fea7b79e6a42c3ccf2a163350a707e86246afcf514c71a36b79 extends Twig_Template
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
        $__internal_8f6b7e4e2b7a59b066c07395c862bf6d29dedf9f6eaabc599366d6f3c9b58437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6b7e4e2b7a59b066c07395c862bf6d29dedf9f6eaabc599366d6f3c9b58437->enter($__internal_8f6b7e4e2b7a59b066c07395c862bf6d29dedf9f6eaabc599366d6f3c9b58437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6cd073eafa3d26436b779d5c6b0e0c7a54c076d295d0b73062ecd25d3d643e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd073eafa3d26436b779d5c6b0e0c7a54c076d295d0b73062ecd25d3d643e5f->enter($__internal_6cd073eafa3d26436b779d5c6b0e0c7a54c076d295d0b73062ecd25d3d643e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8f6b7e4e2b7a59b066c07395c862bf6d29dedf9f6eaabc599366d6f3c9b58437->leave($__internal_8f6b7e4e2b7a59b066c07395c862bf6d29dedf9f6eaabc599366d6f3c9b58437_prof);

        
        $__internal_6cd073eafa3d26436b779d5c6b0e0c7a54c076d295d0b73062ecd25d3d643e5f->leave($__internal_6cd073eafa3d26436b779d5c6b0e0c7a54c076d295d0b73062ecd25d3d643e5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea77eee1b55ced7e2c7d93cd08fbaadc555f29c0b7e72b8009a26ad2e3ab512e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea77eee1b55ced7e2c7d93cd08fbaadc555f29c0b7e72b8009a26ad2e3ab512e->enter($__internal_ea77eee1b55ced7e2c7d93cd08fbaadc555f29c0b7e72b8009a26ad2e3ab512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb48251d9f1aeef13855ea09a1c0fafa97614b3bf6ea72b44063bc131eba7f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb48251d9f1aeef13855ea09a1c0fafa97614b3bf6ea72b44063bc131eba7f25->enter($__internal_cb48251d9f1aeef13855ea09a1c0fafa97614b3bf6ea72b44063bc131eba7f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb48251d9f1aeef13855ea09a1c0fafa97614b3bf6ea72b44063bc131eba7f25->leave($__internal_cb48251d9f1aeef13855ea09a1c0fafa97614b3bf6ea72b44063bc131eba7f25_prof);

        
        $__internal_ea77eee1b55ced7e2c7d93cd08fbaadc555f29c0b7e72b8009a26ad2e3ab512e->leave($__internal_ea77eee1b55ced7e2c7d93cd08fbaadc555f29c0b7e72b8009a26ad2e3ab512e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cb174c504f71c144117298f87d9aef2e1e3e8676b43c1c78e44123e17cc58ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb174c504f71c144117298f87d9aef2e1e3e8676b43c1c78e44123e17cc58ab->enter($__internal_4cb174c504f71c144117298f87d9aef2e1e3e8676b43c1c78e44123e17cc58ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2c655348a555339f178e870a3f31b429c8c0702289773c80ae35956d9cfe2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c655348a555339f178e870a3f31b429c8c0702289773c80ae35956d9cfe2b5->enter($__internal_d2c655348a555339f178e870a3f31b429c8c0702289773c80ae35956d9cfe2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d2c655348a555339f178e870a3f31b429c8c0702289773c80ae35956d9cfe2b5->leave($__internal_d2c655348a555339f178e870a3f31b429c8c0702289773c80ae35956d9cfe2b5_prof);

        
        $__internal_4cb174c504f71c144117298f87d9aef2e1e3e8676b43c1c78e44123e17cc58ab->leave($__internal_4cb174c504f71c144117298f87d9aef2e1e3e8676b43c1c78e44123e17cc58ab_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_079d453b8f9dbcbe5b9eec3762e05569ab66fafe915881cfbce43c8a827c1091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079d453b8f9dbcbe5b9eec3762e05569ab66fafe915881cfbce43c8a827c1091->enter($__internal_079d453b8f9dbcbe5b9eec3762e05569ab66fafe915881cfbce43c8a827c1091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55bc1ee61590daf30616718c5d9241bf2b84ef3c3c65e2c6e3e70120e67e6c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bc1ee61590daf30616718c5d9241bf2b84ef3c3c65e2c6e3e70120e67e6c51->enter($__internal_55bc1ee61590daf30616718c5d9241bf2b84ef3c3c65e2c6e3e70120e67e6c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55bc1ee61590daf30616718c5d9241bf2b84ef3c3c65e2c6e3e70120e67e6c51->leave($__internal_55bc1ee61590daf30616718c5d9241bf2b84ef3c3c65e2c6e3e70120e67e6c51_prof);

        
        $__internal_079d453b8f9dbcbe5b9eec3762e05569ab66fafe915881cfbce43c8a827c1091->leave($__internal_079d453b8f9dbcbe5b9eec3762e05569ab66fafe915881cfbce43c8a827c1091_prof);

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
