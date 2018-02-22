<?php

/* AKImmobilierBundle:Front:confirm.html.twig */
class __TwigTemplate_739e742c7071ec4285d4a146759014eedc4d468e8a03e1bdb4b169c50d3efc70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:confirm.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab579b81c94d1b4645158b336679822d705ee97155ff79bbb004a82cfe55733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab579b81c94d1b4645158b336679822d705ee97155ff79bbb004a82cfe55733->enter($__internal_6ab579b81c94d1b4645158b336679822d705ee97155ff79bbb004a82cfe55733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:confirm.html.twig"));

        $__internal_b3a95704d5ceca20436c85c205e94fad1c4cf4b5d067710f50421accd5eaec23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a95704d5ceca20436c85c205e94fad1c4cf4b5d067710f50421accd5eaec23->enter($__internal_b3a95704d5ceca20436c85c205e94fad1c4cf4b5d067710f50421accd5eaec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab579b81c94d1b4645158b336679822d705ee97155ff79bbb004a82cfe55733->leave($__internal_6ab579b81c94d1b4645158b336679822d705ee97155ff79bbb004a82cfe55733_prof);

        
        $__internal_b3a95704d5ceca20436c85c205e94fad1c4cf4b5d067710f50421accd5eaec23->leave($__internal_b3a95704d5ceca20436c85c205e94fad1c4cf4b5d067710f50421accd5eaec23_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_54fa55dd722c51425e83ec46cc163d0592c865f4c725f14e8101a56087169180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fa55dd722c51425e83ec46cc163d0592c865f4c725f14e8101a56087169180->enter($__internal_54fa55dd722c51425e83ec46cc163d0592c865f4c725f14e8101a56087169180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eab2a4d0a019d95e97d8998811d7245ccdc1aa86461e467a4929cb23fb87c0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab2a4d0a019d95e97d8998811d7245ccdc1aa86461e467a4929cb23fb87c0c2->enter($__internal_eab2a4d0a019d95e97d8998811d7245ccdc1aa86461e467a4929cb23fb87c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
 ";
        
        $__internal_eab2a4d0a019d95e97d8998811d7245ccdc1aa86461e467a4929cb23fb87c0c2->leave($__internal_eab2a4d0a019d95e97d8998811d7245ccdc1aa86461e467a4929cb23fb87c0c2_prof);

        
        $__internal_54fa55dd722c51425e83ec46cc163d0592c865f4c725f14e8101a56087169180->leave($__internal_54fa55dd722c51425e83ec46cc163d0592c865f4c725f14e8101a56087169180_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  11 => 1,);
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


 {% block body %} 
 <h1> welcome </h1>
 <p> reservation prise en compte </p>
 {% endblock %}", "AKImmobilierBundle:Front:confirm.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/confirm.html.twig");
    }
}
