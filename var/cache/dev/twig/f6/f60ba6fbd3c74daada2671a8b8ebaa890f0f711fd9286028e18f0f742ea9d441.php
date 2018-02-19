<?php

/* AKImmobilierBundle:Front:layout.html.twig */
class __TwigTemplate_3c11ffa0f943e7b7fcd630e82138d5ddc81b686200c43c9cd77ee71b6683e91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:layout.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'slide' => array($this, 'block_slide'),
            'plus' => array($this, 'block_plus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2424cf5978f6397ea4091fe5067ad005e975283873942f3b1554c9c499605c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2424cf5978f6397ea4091fe5067ad005e975283873942f3b1554c9c499605c45->enter($__internal_2424cf5978f6397ea4091fe5067ad005e975283873942f3b1554c9c499605c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $__internal_d5d9be7ea66e4b346c1da2cbaf8bbf652d640e9df0f1b8c699d316e307a711ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d9be7ea66e4b346c1da2cbaf8bbf652d640e9df0f1b8c699d316e307a711ac->enter($__internal_d5d9be7ea66e4b346c1da2cbaf8bbf652d640e9df0f1b8c699d316e307a711ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2424cf5978f6397ea4091fe5067ad005e975283873942f3b1554c9c499605c45->leave($__internal_2424cf5978f6397ea4091fe5067ad005e975283873942f3b1554c9c499605c45_prof);

        
        $__internal_d5d9be7ea66e4b346c1da2cbaf8bbf652d640e9df0f1b8c699d316e307a711ac->leave($__internal_d5d9be7ea66e4b346c1da2cbaf8bbf652d640e9df0f1b8c699d316e307a711ac_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_000df689ca6a64583dfe6c9c4f349348fbf39b943baedb4003fbc53e7355653f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000df689ca6a64583dfe6c9c4f349348fbf39b943baedb4003fbc53e7355653f->enter($__internal_000df689ca6a64583dfe6c9c4f349348fbf39b943baedb4003fbc53e7355653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_3d1d949047e49ece40eb39b527e57ae6bb2ca99704d074a6d647d1038ef10a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1d949047e49ece40eb39b527e57ae6bb2ca99704d074a6d647d1038ef10a6e->enter($__internal_3d1d949047e49ece40eb39b527e57ae6bb2ca99704d074a6d647d1038ef10a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <style>
        .slogan{
            font-size: 20px;
            position: relative;
            top: 30px;
            right: 250px;
        }
    </style>
";
        
        $__internal_3d1d949047e49ece40eb39b527e57ae6bb2ca99704d074a6d647d1038ef10a6e->leave($__internal_3d1d949047e49ece40eb39b527e57ae6bb2ca99704d074a6d647d1038ef10a6e_prof);

        
        $__internal_000df689ca6a64583dfe6c9c4f349348fbf39b943baedb4003fbc53e7355653f->leave($__internal_000df689ca6a64583dfe6c9c4f349348fbf39b943baedb4003fbc53e7355653f_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_f43979108abd6ae4e6b2baf72a2c37a8cb278311e09a1015b459ef36ee5f9e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43979108abd6ae4e6b2baf72a2c37a8cb278311e09a1015b459ef36ee5f9e78->enter($__internal_f43979108abd6ae4e6b2baf72a2c37a8cb278311e09a1015b459ef36ee5f9e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8667e5967ee039d7fb0831925d2fe28f05e2166f965089fda57b932102a833f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8667e5967ee039d7fb0831925d2fe28f05e2166f965089fda57b932102a833f7->enter($__internal_8667e5967ee039d7fb0831925d2fe28f05e2166f965089fda57b932102a833f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    <!-- Header -->
    <div class=\"container\">
        <div class=\"header row\">
            <div class=\"span12\">
                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>
                        <h1>
                            <span class=\"violet\">AK1/2 IMMO </span>
                            <span class=\"slogan\"> trouver votre futur logement</span>
                        </h1>
                        <div class=\"nav-collapse collapse\">
                            <ul class=\"nav pull-right\">
                                <li class=\"current-page\">
                                    <a href=\"\"><i class=\"icon-home\"></i><br />ACCUEIL</a>
                                 </li>
                                 <li>
                                    <a href=\"\"><i class=\"icon-camera\"></i><br />Portfolio</a>
                                </li> 
                                ";
        // line 39
        echo "                                    <li>
                                    <a href=\"";
        // line 40
        echo "\"><i class=\"icon-envelope-alt\"></i><br />Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8667e5967ee039d7fb0831925d2fe28f05e2166f965089fda57b932102a833f7->leave($__internal_8667e5967ee039d7fb0831925d2fe28f05e2166f965089fda57b932102a833f7_prof);

        
        $__internal_f43979108abd6ae4e6b2baf72a2c37a8cb278311e09a1015b459ef36ee5f9e78->leave($__internal_f43979108abd6ae4e6b2baf72a2c37a8cb278311e09a1015b459ef36ee5f9e78_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_5692cee581b69d94a540799da5ac6fdce951c048f889f5dbc18f69b09491a712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5692cee581b69d94a540799da5ac6fdce951c048f889f5dbc18f69b09491a712->enter($__internal_5692cee581b69d94a540799da5ac6fdce951c048f889f5dbc18f69b09491a712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9a4b899ff55334f7614404f632b230b4f2b8c4da60d47cb31f3836ea06af4344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4b899ff55334f7614404f632b230b4f2b8c4da60d47cb31f3836ea06af4344->enter($__internal_9a4b899ff55334f7614404f632b230b4f2b8c4da60d47cb31f3836ea06af4344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "    <!-- Slider -->
    ";
        // line 52
        $this->displayBlock('slide', $context, $blocks);
        // line 88
        echo "
    <!-- Site Description -->
    <div class=\"presentation container\">
        <h2>AVEC <span class=\"violet\">AK1/2 IMMO</span>, trouver votre futur logement.</h2>
        <p>Votre maison on la vois comme vous.</p>
        <!-- partie recherche -->
    </div>
    <!-- Content -->
    <main class=\"main\">
      <!-- Promo Block -->
      <div class=\"g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-100\" style=\"background-image: url(assets/img-temp/1920x1080/img1.jpg);\">
        <div class=\"container g-pos-rel g-z-index-1\">
          <div class=\"g-mb-20\">
            <h1 class=\"g-color-white g-font-size-40 mb-0\">Trouver un Logement</h1>
          </div>

          <div class=\"g-bg-white g-pa-30\"style=\"margin-top:50px;\">
            <!-- Input Group -->
            <form method=\"post\" > 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                      <input name=\"localite\"class=\"col-lg-3 form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"Search by City ...\">
                </div>
                ";
        // line 118
        echo "                <div class=\"col-lg-3\" style=\"margin-left:30px;\">
                     <input name=\"prixlocation\"class=\"form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"Budget\">
                </div>
                <div class=\"col-lg-3 bg-primary\"style=\"margin-left:30px;\">
                    <input name=\"search\"value=\"SEARCH\"  style=\"width:100px; height:30px; margin-bottom:12px\" type=\"submit\">
                  
                </div>
            </div>
       
            </form>
            
          </div>
           <div class=\"row\">
          
           
           <table border=\"2\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>etat</th>

</tr>
";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 143
            echo "<tr>

<td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
";
            // line 148
            if (($this->getAttribute($context["bien"], "etat", array()) == false)) {
                // line 149
                echo "<td> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
                echo "\">libre</a> </td>
";
            } else {
                // line 151
                echo "<td> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
                echo "\">occupé</a> </td>
";
            }
            // line 153
            echo "
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "</table>
</div>   
     
     ";
        // line 251
        echo "            
";
        
        $__internal_9a4b899ff55334f7614404f632b230b4f2b8c4da60d47cb31f3836ea06af4344->leave($__internal_9a4b899ff55334f7614404f632b230b4f2b8c4da60d47cb31f3836ea06af4344_prof);

        
        $__internal_5692cee581b69d94a540799da5ac6fdce951c048f889f5dbc18f69b09491a712->leave($__internal_5692cee581b69d94a540799da5ac6fdce951c048f889f5dbc18f69b09491a712_prof);

    }

    // line 52
    public function block_slide($context, array $blocks = array())
    {
        $__internal_4d06236b0117c5960ec17f4f840e2984e4360c212a18c87b8fe45e12938ae3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d06236b0117c5960ec17f4f840e2984e4360c212a18c87b8fe45e12938ae3c1->enter($__internal_4d06236b0117c5960ec17f4f840e2984e4360c212a18c87b8fe45e12938ae3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_f61accd3ab998d1dcd2afccb407fbfe1056152e9b4292699fb32c18649422096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61accd3ab998d1dcd2afccb407fbfe1056152e9b4292699fb32c18649422096->enter($__internal_f61accd3ab998d1dcd2afccb407fbfe1056152e9b4292699fb32c18649422096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 53
        echo "    <div class=\"slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span10 offset1\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            ";
        // line 63
        echo "                             <li data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/maison.jpg"), "html", null, true);
        echo "\" style=\"height:0px\">
                                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/maison.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                <p class=\"flex-caption\">Maison meublée avec 2 chambres ,une cuisine, un salon, un bureau, une piscine et un jardin en Rez de chaussée.Quatre chambre avec salle de bain un salon de the, deux toilettes publiques.</p>
                            </li>
                            <li data-thumb=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/02.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/02.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                ";
        // line 70
        echo "                            </li>
                            <li data-thumb=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/03.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/03.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine.</p>
                            </li>
                            <li data-thumb=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/07.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/07.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 85
        $this->displayBlock('plus', $context, $blocks);
        // line 87
        echo "    ";
        
        $__internal_f61accd3ab998d1dcd2afccb407fbfe1056152e9b4292699fb32c18649422096->leave($__internal_f61accd3ab998d1dcd2afccb407fbfe1056152e9b4292699fb32c18649422096_prof);

        
        $__internal_4d06236b0117c5960ec17f4f840e2984e4360c212a18c87b8fe45e12938ae3c1->leave($__internal_4d06236b0117c5960ec17f4f840e2984e4360c212a18c87b8fe45e12938ae3c1_prof);

    }

    // line 85
    public function block_plus($context, array $blocks = array())
    {
        $__internal_b57949df4b83f02640eebc5b9c92c860d403812eee98451ce6d83e3f863a880d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57949df4b83f02640eebc5b9c92c860d403812eee98451ce6d83e3f863a880d->enter($__internal_b57949df4b83f02640eebc5b9c92c860d403812eee98451ce6d83e3f863a880d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_876c4a574fa458ba0a6c0250f2344db6b408b8c28681adcb0cf750880cf62951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876c4a574fa458ba0a6c0250f2344db6b408b8c28681adcb0cf750880cf62951->enter($__internal_876c4a574fa458ba0a6c0250f2344db6b408b8c28681adcb0cf750880cf62951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 86
        echo "    ";
        
        $__internal_876c4a574fa458ba0a6c0250f2344db6b408b8c28681adcb0cf750880cf62951->leave($__internal_876c4a574fa458ba0a6c0250f2344db6b408b8c28681adcb0cf750880cf62951_prof);

        
        $__internal_b57949df4b83f02640eebc5b9c92c860d403812eee98451ce6d83e3f863a880d->leave($__internal_b57949df4b83f02640eebc5b9c92c860d403812eee98451ce6d83e3f863a880d_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 86,  329 => 85,  319 => 87,  317 => 85,  305 => 76,  301 => 75,  295 => 72,  291 => 71,  288 => 70,  284 => 68,  280 => 67,  274 => 64,  269 => 63,  261 => 53,  252 => 52,  241 => 251,  236 => 158,  226 => 153,  220 => 151,  214 => 149,  212 => 148,  208 => 147,  204 => 146,  200 => 145,  196 => 143,  192 => 142,  166 => 118,  141 => 88,  139 => 52,  136 => 51,  127 => 50,  108 => 40,  105 => 39,  80 => 13,  71 => 12,  53 => 3,  44 => 2,  11 => 1,);
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
{% block styles %}
    <style>
        .slogan{
            font-size: 20px;
            position: relative;
            top: 30px;
            right: 250px;
        }
    </style>
{% endblock %}
{% block header %}
    <!-- Header -->
    <div class=\"container\">
        <div class=\"header row\">
            <div class=\"span12\">
                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>
                        <h1>
                            <span class=\"violet\">AK1/2 IMMO </span>
                            <span class=\"slogan\"> trouver votre futur logement</span>
                        </h1>
                        <div class=\"nav-collapse collapse\">
                            <ul class=\"nav pull-right\">
                                <li class=\"current-page\">
                                    <a href=\"\"><i class=\"icon-home\"></i><br />ACCUEIL</a>
                                 </li>
                                 <li>
                                    <a href=\"\"><i class=\"icon-camera\"></i><br />Portfolio</a>
                                </li> 
                                {# <li>
                                    <a href=\"{{asset('services.html')}}\"><i class=\"icon-tasks\"></i><br />RESERVATION</a>
                                </li> #}
                                    <li>
                                    <a href=\"{# {{path('contact_path')}} #}\"><i class=\"icon-envelope-alt\"></i><br />Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block main %}
    <!-- Slider -->
    {% block slide %}
    <div class=\"slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span10 offset1\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            {# <li data-thumb=\"{{asset('assets/img/photo/01.jpg')}}\" style=\"height:0px\">
                                <img src=\"{{asset('assets/img/photo/01.jpg')}}\" style=\"height:550px\">
                                <p class=\"flex-caption\">Maison meuble avec 2 chambres ,une cuisine, un salon, un bureau, une piscine et un jardin en Rez de chaussée.Quatre chambre avec salle de bain un salon de the, deux toilettes publiques.</p>
                            </li> #}
                             <li data-thumb=\"{{asset('assets/img/photo/maison.jpg')}}\" style=\"height:0px\">
                                <img src=\"{{asset('assets/img/photo/maison.jpg')}}\" style=\"height:550px\">
                                <p class=\"flex-caption\">Maison meublée avec 2 chambres ,une cuisine, un salon, un bureau, une piscine et un jardin en Rez de chaussée.Quatre chambre avec salle de bain un salon de the, deux toilettes publiques.</p>
                            </li>
                            <li data-thumb=\"{{asset('assets/img/photo/02.jpg')}}\">
                                <img src=\"{{asset('assets/img/photo/02.jpg')}}\" style=\"height:550px\">
                                {# <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine</p> #}
                            </li>
                            <li data-thumb=\"{{asset('assets/img/photo/03.jpg')}}\">
                                <img src=\"{{asset('assets/img/photo/03.jpg')}}\" style=\"height:550px\">
                                <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine.</p>
                            </li>
                            <li data-thumb=\"{{asset('assets/img/photo/07.jpg')}}\">
                                <img src=\"{{asset('assets/img/photo/07.jpg')}}\" style=\"height:550px\">
                                <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% block plus %}
    {% endblock %}
    {% endblock %}

    <!-- Site Description -->
    <div class=\"presentation container\">
        <h2>AVEC <span class=\"violet\">AK1/2 IMMO</span>, trouver votre futur logement.</h2>
        <p>Votre maison on la vois comme vous.</p>
        <!-- partie recherche -->
    </div>
    <!-- Content -->
    <main class=\"main\">
      <!-- Promo Block -->
      <div class=\"g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-100\" style=\"background-image: url(assets/img-temp/1920x1080/img1.jpg);\">
        <div class=\"container g-pos-rel g-z-index-1\">
          <div class=\"g-mb-20\">
            <h1 class=\"g-color-white g-font-size-40 mb-0\">Trouver un Logement</h1>
          </div>

          <div class=\"g-bg-white g-pa-30\"style=\"margin-top:50px;\">
            <!-- Input Group -->
            <form method=\"post\" > 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                      <input name=\"localite\"class=\"col-lg-3 form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"Search by City ...\">
                </div>
                {# <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                      <select>
                        {% for type in types %}
                        <option value=\"\"> {{type.libelle}} </option>
                        {% endfor %}
                     </select> 
                </div> #}
                <div class=\"col-lg-3\" style=\"margin-left:30px;\">
                     <input name=\"prixlocation\"class=\"form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"Budget\">
                </div>
                <div class=\"col-lg-3 bg-primary\"style=\"margin-left:30px;\">
                    <input name=\"search\"value=\"SEARCH\"  style=\"width:100px; height:30px; margin-bottom:12px\" type=\"submit\">
                  
                </div>
            </div>
       
            </form>
            
          </div>
           <div class=\"row\">
          
           
           <table border=\"2\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>etat</th>

</tr>
{% for bien in biens %}
<tr>

<td>{{bien.nombien}}</td>
<td>{{bien.prixlocation }}</td>
<td>{{bien.description}}</td>
{% if bien.etat == false %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">libre</a> </td>
{% else %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">occupé</a> </td>
{% endif %}

</tr>


{% endfor %}
</table>
</div>   
     
     {# <!-- Portfolio -->
             <div class=\"portfolio portfolio-page container\"id=\"portfolio\">
           
                <div class=\"row\">
                    <ul class=\"portfolio-img\" style=\"heigth:50px\">
                        <li data-id=\"p-1\" data-type=\"web-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>{{bien.nombien}}</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-2\" data-type=\"logo-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Appartement Meublé</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-3\" data-type=\"print-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Studiot Meublé</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                                </div>
                        </li>
                        <li data-id=\"p-4\" data-type=\"web-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Maison meublée</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-5\" data-type=\"logo-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Appartement non Meublé</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-6\" data-type=\"print-design\" class=\"span3\">
                            <div class=\"work\" style=\"heigth:50px\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Studiot Meublé</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-7\" data-type=\"web-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Maison avec espace de jeu </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                        <li data-id=\"p-8\" data-type=\"print-design\" class=\"span3\">
                            <div class=\"work\">
                                <a href=\"{{asset('assets/img/photo/08.jpg')}}\" rel=\"prettyPhoto\">
                                    <img src=\"{{asset('assets/img/photo/08.jpg')}}\" alt=\"\">
                                </a>
                                <h4>Studiot non Meublé</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <button><span class=\"violet\">RESERVER</span></button>
                            </div>
                        </li>
                  
                        
                    </ul>
                </div>
               #}
            
{% endblock %}
", "AKImmobilierBundle:Front:layout.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/layout.html.twig");
    }
}
