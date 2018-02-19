<?php

/* AKImmobilierBundle:Default:reserver.html.twig */
class __TwigTemplate_10a9cfa7d56bcb6e9901598aadbb839a3bdfe801c0c97fd395f13d536fafde86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AKImmobilier/layout.html.twig", "AKImmobilierBundle:Default:reserver.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AKImmobilier/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ec6d3f9c15919e3faf4d69f54dfc7feb339f45dcfd852b0cdcaf733338f1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ec6d3f9c15919e3faf4d69f54dfc7feb339f45dcfd852b0cdcaf733338f1d1->enter($__internal_d1ec6d3f9c15919e3faf4d69f54dfc7feb339f45dcfd852b0cdcaf733338f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Default:reserver.html.twig"));

        $__internal_f854ce885db8a462b00954fd86cd779ab6ab74f4aec1c0ec20cf1d1af231a2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f854ce885db8a462b00954fd86cd779ab6ab74f4aec1c0ec20cf1d1af231a2d2->enter($__internal_f854ce885db8a462b00954fd86cd779ab6ab74f4aec1c0ec20cf1d1af231a2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Default:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ec6d3f9c15919e3faf4d69f54dfc7feb339f45dcfd852b0cdcaf733338f1d1->leave($__internal_d1ec6d3f9c15919e3faf4d69f54dfc7feb339f45dcfd852b0cdcaf733338f1d1_prof);

        
        $__internal_f854ce885db8a462b00954fd86cd779ab6ab74f4aec1c0ec20cf1d1af231a2d2->leave($__internal_f854ce885db8a462b00954fd86cd779ab6ab74f4aec1c0ec20cf1d1af231a2d2_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_e115b2c398943b826e6871a493f426a0fb716684327cf5004bd8b66c5d61f753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e115b2c398943b826e6871a493f426a0fb716684327cf5004bd8b66c5d61f753->enter($__internal_e115b2c398943b826e6871a493f426a0fb716684327cf5004bd8b66c5d61f753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_748fb5923d7b25263da289015dc23cf4c9816ffdb773da21ca54419b6a9cbd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748fb5923d7b25263da289015dc23cf4c9816ffdb773da21ca54419b6a9cbd79->enter($__internal_748fb5923d7b25263da289015dc23cf4c9816ffdb773da21ca54419b6a9cbd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        h1{
            text-align:center;    
        }
    </style>   
";
        
        $__internal_748fb5923d7b25263da289015dc23cf4c9816ffdb773da21ca54419b6a9cbd79->leave($__internal_748fb5923d7b25263da289015dc23cf4c9816ffdb773da21ca54419b6a9cbd79_prof);

        
        $__internal_e115b2c398943b826e6871a493f426a0fb716684327cf5004bd8b66c5d61f753->leave($__internal_e115b2c398943b826e6871a493f426a0fb716684327cf5004bd8b66c5d61f753_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_112baa68e2d1fe023c187e0b131ac1a7002510be060013e8d70f40fda51219a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112baa68e2d1fe023c187e0b131ac1a7002510be060013e8d70f40fda51219a1->enter($__internal_112baa68e2d1fe023c187e0b131ac1a7002510be060013e8d70f40fda51219a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b0f54a2ad0a3ec32787c883872961ba4afd077520e65031ea28b76dd0b7de5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f54a2ad0a3ec32787c883872961ba4afd077520e65031ea28b76dd0b7de5fb->enter($__internal_b0f54a2ad0a3ec32787c883872961ba4afd077520e65031ea28b76dd0b7de5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "<div class=\"contact-us container\">
            <div class=\"row\">
                <div class=\"contact-form span6\">
                    <p><h1>INSCRIPTION</h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Name</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your name...\">
                        <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Enter your email...\">
                        <label for=\"password\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         ";
        // line 24
        echo "                          ";
        echo " 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
                <div class=\"contact-form span6\">
                <p><h1>AUTHENTIFICATION<h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Username/Email</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your username/password...\">
                        ";
        // line 35
        echo "                        <label for=\"subject\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         ";
        // line 38
        echo "                          ";
        echo " 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
            </div>
</div>   
";
        
        $__internal_b0f54a2ad0a3ec32787c883872961ba4afd077520e65031ea28b76dd0b7de5fb->leave($__internal_b0f54a2ad0a3ec32787c883872961ba4afd077520e65031ea28b76dd0b7de5fb_prof);

        
        $__internal_112baa68e2d1fe023c187e0b131ac1a7002510be060013e8d70f40fda51219a1->leave($__internal_112baa68e2d1fe023c187e0b131ac1a7002510be060013e8d70f40fda51219a1_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Default:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  99 => 35,  87 => 24,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends '@AKImmobilier/layout.html.twig' %}

{% block style %}
    <style>
        h1{
            text-align:center;    
        }
    </style>   
{% endblock %}

{% block main %}
<div class=\"contact-us container\">
            <div class=\"row\">
                <div class=\"contact-form span6\">
                    <p><h1>INSCRIPTION</h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Name</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your name...\">
                        <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Enter your email...\">
                        <label for=\"password\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         {# <label for=\"message\" class=\"messageLabel\">Message</label> #}
                          {# <textarea id=\"message\" name=\"message\" placeholder=\"Your message...\"></textarea> #} 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
                <div class=\"contact-form span6\">
                <p><h1>AUTHENTIFICATION<h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Username/Email</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your username/password...\">
                        {# <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Enter your email...\"> #}
                        <label for=\"subject\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         {# <label for=\"message\" class=\"messageLabel\">Message</label> #}
                          {# <textarea id=\"message\" name=\"message\" placeholder=\"Your message...\"></textarea> #} 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
            </div>
</div>   
{% endblock %} ", "AKImmobilierBundle:Default:reserver.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Default/reserver.html.twig");
    }
}
