<?php

/* AKImmobilierBundle:Front:reservate_bien.html.twig */
class __TwigTemplate_c582871806e3bc33e1c7641f0bb631fc8a9534aba16f7c2a5dc7430f5e5cf7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AKImmobilier/layout.html.twig", "AKImmobilierBundle:Front:reservate_bien.html.twig", 1);
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
        $__internal_78e098cc9a3240a26f951b3813d4a81d1210a53208d35584b08575ddc1198055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e098cc9a3240a26f951b3813d4a81d1210a53208d35584b08575ddc1198055->enter($__internal_78e098cc9a3240a26f951b3813d4a81d1210a53208d35584b08575ddc1198055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reservate_bien.html.twig"));

        $__internal_f1671919816e981a3ba8c930ea40fde2bc9e9646075286bafe9a73da4047b8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1671919816e981a3ba8c930ea40fde2bc9e9646075286bafe9a73da4047b8e6->enter($__internal_f1671919816e981a3ba8c930ea40fde2bc9e9646075286bafe9a73da4047b8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reservate_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e098cc9a3240a26f951b3813d4a81d1210a53208d35584b08575ddc1198055->leave($__internal_78e098cc9a3240a26f951b3813d4a81d1210a53208d35584b08575ddc1198055_prof);

        
        $__internal_f1671919816e981a3ba8c930ea40fde2bc9e9646075286bafe9a73da4047b8e6->leave($__internal_f1671919816e981a3ba8c930ea40fde2bc9e9646075286bafe9a73da4047b8e6_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_9b08bf0fccd106bd07f90be6a481337132ec724f5bce4989ffc4cd2318420a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b08bf0fccd106bd07f90be6a481337132ec724f5bce4989ffc4cd2318420a22->enter($__internal_9b08bf0fccd106bd07f90be6a481337132ec724f5bce4989ffc4cd2318420a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_f24e42ff146c8eb13b51049bddf99b0db83dde6356d47536b33ec6b98357df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24e42ff146c8eb13b51049bddf99b0db83dde6356d47536b33ec6b98357df4f->enter($__internal_f24e42ff146c8eb13b51049bddf99b0db83dde6356d47536b33ec6b98357df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        h1{
            text-align:center;    
        }
    </style>   
";
        
        $__internal_f24e42ff146c8eb13b51049bddf99b0db83dde6356d47536b33ec6b98357df4f->leave($__internal_f24e42ff146c8eb13b51049bddf99b0db83dde6356d47536b33ec6b98357df4f_prof);

        
        $__internal_9b08bf0fccd106bd07f90be6a481337132ec724f5bce4989ffc4cd2318420a22->leave($__internal_9b08bf0fccd106bd07f90be6a481337132ec724f5bce4989ffc4cd2318420a22_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_88dddd445430c6b2ba96e188aa3abda0c875afbd09795e0ccd858ed433918824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dddd445430c6b2ba96e188aa3abda0c875afbd09795e0ccd858ed433918824->enter($__internal_88dddd445430c6b2ba96e188aa3abda0c875afbd09795e0ccd858ed433918824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_efcea2c7b0826ec86e0eed068785535ec059da872e3d1b3e30609ba99ca8e4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcea2c7b0826ec86e0eed068785535ec059da872e3d1b3e30609ba99ca8e4b2->enter($__internal_efcea2c7b0826ec86e0eed068785535ec059da872e3d1b3e30609ba99ca8e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_efcea2c7b0826ec86e0eed068785535ec059da872e3d1b3e30609ba99ca8e4b2->leave($__internal_efcea2c7b0826ec86e0eed068785535ec059da872e3d1b3e30609ba99ca8e4b2_prof);

        
        $__internal_88dddd445430c6b2ba96e188aa3abda0c875afbd09795e0ccd858ed433918824->leave($__internal_88dddd445430c6b2ba96e188aa3abda0c875afbd09795e0ccd858ed433918824_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:reservate_bien.html.twig";
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
{% endblock %} 
", "AKImmobilierBundle:Front:reservate_bien.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/reservate_bien.html.twig");
    }
}
