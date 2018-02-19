<?php

/* AKImmobilierBundle:Front:type.html.twig */
class __TwigTemplate_90f777fe42500b8c639033abf604110446dcc01249b7291537e3de543a447939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:type.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54686a6011c3a7d0cc3d664596b9df18c6a79cb2395a9d6178eb0410928f1cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54686a6011c3a7d0cc3d664596b9df18c6a79cb2395a9d6178eb0410928f1cba->enter($__internal_54686a6011c3a7d0cc3d664596b9df18c6a79cb2395a9d6178eb0410928f1cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:type.html.twig"));

        $__internal_b5a338268f73b2e2ba8214580cdd70ae5063f3f9951ec2283042ca8a0f400ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a338268f73b2e2ba8214580cdd70ae5063f3f9951ec2283042ca8a0f400ad0->enter($__internal_b5a338268f73b2e2ba8214580cdd70ae5063f3f9951ec2283042ca8a0f400ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54686a6011c3a7d0cc3d664596b9df18c6a79cb2395a9d6178eb0410928f1cba->leave($__internal_54686a6011c3a7d0cc3d664596b9df18c6a79cb2395a9d6178eb0410928f1cba_prof);

        
        $__internal_b5a338268f73b2e2ba8214580cdd70ae5063f3f9951ec2283042ca8a0f400ad0->leave($__internal_b5a338268f73b2e2ba8214580cdd70ae5063f3f9951ec2283042ca8a0f400ad0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ef6a41c18a4d90d3ee17ae369add333c4a9d11db5a7b12587d6b28a831ad535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef6a41c18a4d90d3ee17ae369add333c4a9d11db5a7b12587d6b28a831ad535->enter($__internal_1ef6a41c18a4d90d3ee17ae369add333c4a9d11db5a7b12587d6b28a831ad535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c94e37eb0a3573e669789b1cb37fab59413717f3ead9e2c149ba5a4ace3b8411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94e37eb0a3573e669789b1cb37fab59413717f3ead9e2c149ba5a4ace3b8411->enter($__internal_c94e37eb0a3573e669789b1cb37fab59413717f3ead9e2c149ba5a4ace3b8411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formulaire";
        
        $__internal_c94e37eb0a3573e669789b1cb37fab59413717f3ead9e2c149ba5a4ace3b8411->leave($__internal_c94e37eb0a3573e669789b1cb37fab59413717f3ead9e2c149ba5a4ace3b8411_prof);

        
        $__internal_1ef6a41c18a4d90d3ee17ae369add333c4a9d11db5a7b12587d6b28a831ad535->leave($__internal_1ef6a41c18a4d90d3ee17ae369add333c4a9d11db5a7b12587d6b28a831ad535_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1f9be675cd4e69a9b509c1858311f31ba3ad187d799f88d7e5b2502bc8b2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1f9be675cd4e69a9b509c1858311f31ba3ad187d799f88d7e5b2502bc8b2f2->enter($__internal_ee1f9be675cd4e69a9b509c1858311f31ba3ad187d799f88d7e5b2502bc8b2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_680021732814a708317393232d2530a623913af0b217911357f7c28e4bb78691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680021732814a708317393232d2530a623913af0b217911357f7c28e4bb78691->enter($__internal_680021732814a708317393232d2530a623913af0b217911357f7c28e4bb78691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 style=\"text-align:center;\">Form</h1>
<from>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</form>

";
        
        $__internal_680021732814a708317393232d2530a623913af0b217911357f7c28e4bb78691->leave($__internal_680021732814a708317393232d2530a623913af0b217911357f7c28e4bb78691_prof);

        
        $__internal_ee1f9be675cd4e69a9b509c1858311f31ba3ad187d799f88d7e5b2502bc8b2f2->leave($__internal_ee1f9be675cd4e69a9b509c1858311f31ba3ad187d799f88d7e5b2502bc8b2f2_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Formulaire{% endblock %}

{% block body %}
<h1 style=\"text-align:center;\">Form</h1>
<from>
{{form(form)}}
</form>

{% endblock %}", "AKImmobilierBundle:Front:type.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/type.html.twig");
    }
}
