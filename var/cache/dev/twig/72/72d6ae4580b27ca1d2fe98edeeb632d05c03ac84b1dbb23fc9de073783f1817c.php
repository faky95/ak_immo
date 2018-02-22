<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_58460da52d5f0f5c499433126bc76f2711931cf170a9aa3558f67255c9c62373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f7661d4a1f0ea110eff9593b9ddf0627d215aad303c74c2ec58a823da758267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7661d4a1f0ea110eff9593b9ddf0627d215aad303c74c2ec58a823da758267->enter($__internal_1f7661d4a1f0ea110eff9593b9ddf0627d215aad303c74c2ec58a823da758267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_903219796efb37e9257942fb3baa4ddec3d8f6c1e21cb67d08d6eacaeda7d97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903219796efb37e9257942fb3baa4ddec3d8f6c1e21cb67d08d6eacaeda7d97c->enter($__internal_903219796efb37e9257942fb3baa4ddec3d8f6c1e21cb67d08d6eacaeda7d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"] ?? $this->getContext($context, "__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"] ?? $this->getContext($context, "__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7661d4a1f0ea110eff9593b9ddf0627d215aad303c74c2ec58a823da758267->leave($__internal_1f7661d4a1f0ea110eff9593b9ddf0627d215aad303c74c2ec58a823da758267_prof);

        
        $__internal_903219796efb37e9257942fb3baa4ddec3d8f6c1e21cb67d08d6eacaeda7d97c->leave($__internal_903219796efb37e9257942fb3baa4ddec3d8f6c1e21cb67d08d6eacaeda7d97c_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1b740cf9f991d7801e29aba509ad88be05ab30fc4ace83212b48f6e76697a45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b740cf9f991d7801e29aba509ad88be05ab30fc4ace83212b48f6e76697a45f->enter($__internal_1b740cf9f991d7801e29aba509ad88be05ab30fc4ace83212b48f6e76697a45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_32e2a27033cd3e57ded2745a5705c2ba3304452a5da78aaf40ec96d6cc847426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e2a27033cd3e57ded2745a5705c2ba3304452a5da78aaf40ec96d6cc847426->enter($__internal_32e2a27033cd3e57ded2745a5705c2ba3304452a5da78aaf40ec96d6cc847426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_32e2a27033cd3e57ded2745a5705c2ba3304452a5da78aaf40ec96d6cc847426->leave($__internal_32e2a27033cd3e57ded2745a5705c2ba3304452a5da78aaf40ec96d6cc847426_prof);

        
        $__internal_1b740cf9f991d7801e29aba509ad88be05ab30fc4ace83212b48f6e76697a45f->leave($__internal_1b740cf9f991d7801e29aba509ad88be05ab30fc4ace83212b48f6e76697a45f_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b758f82df02afb16acdb2929c96f9a6e5cece35bd371a71dbd0906a14f6f075a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b758f82df02afb16acdb2929c96f9a6e5cece35bd371a71dbd0906a14f6f075a->enter($__internal_b758f82df02afb16acdb2929c96f9a6e5cece35bd371a71dbd0906a14f6f075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_0513b6e68436c5bd519641e4a6e55dddeb5b58d2535a54cee1743731e6387d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0513b6e68436c5bd519641e4a6e55dddeb5b58d2535a54cee1743731e6387d8a->enter($__internal_0513b6e68436c5bd519641e4a6e55dddeb5b58d2535a54cee1743731e6387d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0513b6e68436c5bd519641e4a6e55dddeb5b58d2535a54cee1743731e6387d8a->leave($__internal_0513b6e68436c5bd519641e4a6e55dddeb5b58d2535a54cee1743731e6387d8a_prof);

        
        $__internal_b758f82df02afb16acdb2929c96f9a6e5cece35bd371a71dbd0906a14f6f075a->leave($__internal_b758f82df02afb16acdb2929c96f9a6e5cece35bd371a71dbd0906a14f6f075a_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_79f6abafc53efa54a7729fc5086a67da257666f0776e113df366d764aabac48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f6abafc53efa54a7729fc5086a67da257666f0776e113df366d764aabac48d->enter($__internal_79f6abafc53efa54a7729fc5086a67da257666f0776e113df366d764aabac48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_91a10137b0b287a5ec129b86a7d8082bd95bb3ff30c38eabfb076727bb87c85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a10137b0b287a5ec129b86a7d8082bd95bb3ff30c38eabfb076727bb87c85a->enter($__internal_91a10137b0b287a5ec129b86a7d8082bd95bb3ff30c38eabfb076727bb87c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982"] ?? $this->getContext($context, "__internal_bd8880861a5428864e116160cdf5691642475b27c0853b1492ed2f5ef1c05982")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91a10137b0b287a5ec129b86a7d8082bd95bb3ff30c38eabfb076727bb87c85a->leave($__internal_91a10137b0b287a5ec129b86a7d8082bd95bb3ff30c38eabfb076727bb87c85a_prof);

        
        $__internal_79f6abafc53efa54a7729fc5086a67da257666f0776e113df366d764aabac48d->leave($__internal_79f6abafc53efa54a7729fc5086a67da257666f0776e113df366d764aabac48d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9da9b57aca9efc8f7865ae788eaa1b7ea94df7f1c831b93d3b044ea1345f2e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da9b57aca9efc8f7865ae788eaa1b7ea94df7f1c831b93d3b044ea1345f2e27->enter($__internal_9da9b57aca9efc8f7865ae788eaa1b7ea94df7f1c831b93d3b044ea1345f2e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_54d1d997a8fba549593b02495a75de22ca70d88521a0cede1839864d67100b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d1d997a8fba549593b02495a75de22ca70d88521a0cede1839864d67100b84->enter($__internal_54d1d997a8fba549593b02495a75de22ca70d88521a0cede1839864d67100b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_54d1d997a8fba549593b02495a75de22ca70d88521a0cede1839864d67100b84->leave($__internal_54d1d997a8fba549593b02495a75de22ca70d88521a0cede1839864d67100b84_prof);

        
        $__internal_9da9b57aca9efc8f7865ae788eaa1b7ea94df7f1c831b93d3b044ea1345f2e27->leave($__internal_9da9b57aca9efc8f7865ae788eaa1b7ea94df7f1c831b93d3b044ea1345f2e27_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_7b9f26071b1141b68b261f4848fa43c366cef1ff649497138c0ad61b34ee068c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9f26071b1141b68b261f4848fa43c366cef1ff649497138c0ad61b34ee068c->enter($__internal_7b9f26071b1141b68b261f4848fa43c366cef1ff649497138c0ad61b34ee068c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_702fb96b3f962e355e4c75a5ec003c3339fbff6861b6e103b076e8f0ac132a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702fb96b3f962e355e4c75a5ec003c3339fbff6861b6e103b076e8f0ac132a10->enter($__internal_702fb96b3f962e355e4c75a5ec003c3339fbff6861b6e103b076e8f0ac132a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_702fb96b3f962e355e4c75a5ec003c3339fbff6861b6e103b076e8f0ac132a10->leave($__internal_702fb96b3f962e355e4c75a5ec003c3339fbff6861b6e103b076e8f0ac132a10_prof);

        
        $__internal_7b9f26071b1141b68b261f4848fa43c366cef1ff649497138c0ad61b34ee068c->leave($__internal_7b9f26071b1141b68b261f4848fa43c366cef1ff649497138c0ad61b34ee068c_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0d2bc299a0749c33129c77c532c0eaff202424799df612dac68e6cfb28db1dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2bc299a0749c33129c77c532c0eaff202424799df612dac68e6cfb28db1dc3->enter($__internal_0d2bc299a0749c33129c77c532c0eaff202424799df612dac68e6cfb28db1dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a562215894f69df73d8c268858405f5e8a454fcb29a343291c7e252990c1ed60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a562215894f69df73d8c268858405f5e8a454fcb29a343291c7e252990c1ed60->enter($__internal_a562215894f69df73d8c268858405f5e8a454fcb29a343291c7e252990c1ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_a562215894f69df73d8c268858405f5e8a454fcb29a343291c7e252990c1ed60->leave($__internal_a562215894f69df73d8c268858405f5e8a454fcb29a343291c7e252990c1ed60_prof);

        
        $__internal_0d2bc299a0749c33129c77c532c0eaff202424799df612dac68e6cfb28db1dc3->leave($__internal_0d2bc299a0749c33129c77c532c0eaff202424799df612dac68e6cfb28db1dc3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "/var/www/html/ak_immo/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
