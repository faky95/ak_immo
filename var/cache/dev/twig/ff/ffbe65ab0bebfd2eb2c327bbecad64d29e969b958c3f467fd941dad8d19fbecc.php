<?php

/* AKImmobilierBundle:Front:layout.html.twig */
class __TwigTemplate_138c11f942498c40f2d089e02391e3fa91a7b66812b62d705ea9df2da7ac31a4 extends Twig_Template
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
        $__internal_15b2c0240152bac0b3e9cb66cc9d55cfde5adf810394e4803cbec203f8353d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b2c0240152bac0b3e9cb66cc9d55cfde5adf810394e4803cbec203f8353d7f->enter($__internal_15b2c0240152bac0b3e9cb66cc9d55cfde5adf810394e4803cbec203f8353d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $__internal_60584b29abca3e2e29fdc21faf4e2f1efc4e95347cf81148a8c2739d78834ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60584b29abca3e2e29fdc21faf4e2f1efc4e95347cf81148a8c2739d78834ef5->enter($__internal_60584b29abca3e2e29fdc21faf4e2f1efc4e95347cf81148a8c2739d78834ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b2c0240152bac0b3e9cb66cc9d55cfde5adf810394e4803cbec203f8353d7f->leave($__internal_15b2c0240152bac0b3e9cb66cc9d55cfde5adf810394e4803cbec203f8353d7f_prof);

        
        $__internal_60584b29abca3e2e29fdc21faf4e2f1efc4e95347cf81148a8c2739d78834ef5->leave($__internal_60584b29abca3e2e29fdc21faf4e2f1efc4e95347cf81148a8c2739d78834ef5_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_89a9575d9afa3f8205c4be80e4f1708f4c97537c657516d1ccf079863c68a4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a9575d9afa3f8205c4be80e4f1708f4c97537c657516d1ccf079863c68a4ab->enter($__internal_89a9575d9afa3f8205c4be80e4f1708f4c97537c657516d1ccf079863c68a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_db31ff7c13b51c8ae26dcc84207d32eb9311e841ad8ccb53655aa5c019c7b4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db31ff7c13b51c8ae26dcc84207d32eb9311e841ad8ccb53655aa5c019c7b4c0->enter($__internal_db31ff7c13b51c8ae26dcc84207d32eb9311e841ad8ccb53655aa5c019c7b4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_db31ff7c13b51c8ae26dcc84207d32eb9311e841ad8ccb53655aa5c019c7b4c0->leave($__internal_db31ff7c13b51c8ae26dcc84207d32eb9311e841ad8ccb53655aa5c019c7b4c0_prof);

        
        $__internal_89a9575d9afa3f8205c4be80e4f1708f4c97537c657516d1ccf079863c68a4ab->leave($__internal_89a9575d9afa3f8205c4be80e4f1708f4c97537c657516d1ccf079863c68a4ab_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_2dc89fdbe3cf62ceb74e03c9d71b7f59b736e21ac013e95a9e1d7211a902919e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc89fdbe3cf62ceb74e03c9d71b7f59b736e21ac013e95a9e1d7211a902919e->enter($__internal_2dc89fdbe3cf62ceb74e03c9d71b7f59b736e21ac013e95a9e1d7211a902919e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ac544a3a8216ee7958f6142d573859885414e7e79d2539ee31cf9fe482fc7f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac544a3a8216ee7958f6142d573859885414e7e79d2539ee31cf9fe482fc7f82->enter($__internal_ac544a3a8216ee7958f6142d573859885414e7e79d2539ee31cf9fe482fc7f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ac544a3a8216ee7958f6142d573859885414e7e79d2539ee31cf9fe482fc7f82->leave($__internal_ac544a3a8216ee7958f6142d573859885414e7e79d2539ee31cf9fe482fc7f82_prof);

        
        $__internal_2dc89fdbe3cf62ceb74e03c9d71b7f59b736e21ac013e95a9e1d7211a902919e->leave($__internal_2dc89fdbe3cf62ceb74e03c9d71b7f59b736e21ac013e95a9e1d7211a902919e_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_10c10336e9f21665d591c7178b40b51f25582405c97cdcb3328ab85808bfe3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c10336e9f21665d591c7178b40b51f25582405c97cdcb3328ab85808bfe3ad->enter($__internal_10c10336e9f21665d591c7178b40b51f25582405c97cdcb3328ab85808bfe3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5c9b23fb8fe55ba8567fdba20673cfb60f11d23eeb5caee68c04b26fca5bde36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9b23fb8fe55ba8567fdba20673cfb60f11d23eeb5caee68c04b26fca5bde36->enter($__internal_5c9b23fb8fe55ba8567fdba20673cfb60f11d23eeb5caee68c04b26fca5bde36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            <form method=\"post\" action=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\"> 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                    <select>
                        <option value=\"\"> Choisir le Type Bien </option>
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 112
            echo "                            <option value=\"\" name=\"typebien\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </select> 
                </div>
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                     <select>
                        <option value=\"\" > Choisir la localite </option>
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 120
            echo "                            <option value=\"\" name=\"localite\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "nomlocalite", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        
                    </select>
                </div>  
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
<th>localite</th>
<th>typebien</th>
<th>Image</th>


</tr>
";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 154
            echo "
<tr>


<td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
 <td>
    
 ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 166
                echo " ";
                // line 167
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "
 </td> 
 <style>
 .img
 {
     width:200px;
 }
 </style>

";
            // line 184
            echo "
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "</table>
</div>   
     
     ";
        // line 282
        echo "            
";
        
        $__internal_5c9b23fb8fe55ba8567fdba20673cfb60f11d23eeb5caee68c04b26fca5bde36->leave($__internal_5c9b23fb8fe55ba8567fdba20673cfb60f11d23eeb5caee68c04b26fca5bde36_prof);

        
        $__internal_10c10336e9f21665d591c7178b40b51f25582405c97cdcb3328ab85808bfe3ad->leave($__internal_10c10336e9f21665d591c7178b40b51f25582405c97cdcb3328ab85808bfe3ad_prof);

    }

    // line 52
    public function block_slide($context, array $blocks = array())
    {
        $__internal_03c2e0142f6c7deaf8f8c6cc7fb4ed8b4d270f7b155d78ad23178bd7c7e00802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c2e0142f6c7deaf8f8c6cc7fb4ed8b4d270f7b155d78ad23178bd7c7e00802->enter($__internal_03c2e0142f6c7deaf8f8c6cc7fb4ed8b4d270f7b155d78ad23178bd7c7e00802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_7850129458b1c4e8d97a66244c5552eeff9457695ef2b928ed66eac3c01f70e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7850129458b1c4e8d97a66244c5552eeff9457695ef2b928ed66eac3c01f70e4->enter($__internal_7850129458b1c4e8d97a66244c5552eeff9457695ef2b928ed66eac3c01f70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_7850129458b1c4e8d97a66244c5552eeff9457695ef2b928ed66eac3c01f70e4->leave($__internal_7850129458b1c4e8d97a66244c5552eeff9457695ef2b928ed66eac3c01f70e4_prof);

        
        $__internal_03c2e0142f6c7deaf8f8c6cc7fb4ed8b4d270f7b155d78ad23178bd7c7e00802->leave($__internal_03c2e0142f6c7deaf8f8c6cc7fb4ed8b4d270f7b155d78ad23178bd7c7e00802_prof);

    }

    // line 85
    public function block_plus($context, array $blocks = array())
    {
        $__internal_20d9974489168f198f09d0fa4214e71e2d34443f2672d453227bce17310c154a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d9974489168f198f09d0fa4214e71e2d34443f2672d453227bce17310c154a->enter($__internal_20d9974489168f198f09d0fa4214e71e2d34443f2672d453227bce17310c154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_6f1fd59a03b596a13e3bcb666d8f1d213d506e1045fe077df3a36e980b121c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1fd59a03b596a13e3bcb666d8f1d213d506e1045fe077df3a36e980b121c8f->enter($__internal_6f1fd59a03b596a13e3bcb666d8f1d213d506e1045fe077df3a36e980b121c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 86
        echo "    ";
        
        $__internal_6f1fd59a03b596a13e3bcb666d8f1d213d506e1045fe077df3a36e980b121c8f->leave($__internal_6f1fd59a03b596a13e3bcb666d8f1d213d506e1045fe077df3a36e980b121c8f_prof);

        
        $__internal_20d9974489168f198f09d0fa4214e71e2d34443f2672d453227bce17310c154a->leave($__internal_20d9974489168f198f09d0fa4214e71e2d34443f2672d453227bce17310c154a_prof);

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
        return array (  406 => 86,  397 => 85,  387 => 87,  385 => 85,  373 => 76,  369 => 75,  363 => 72,  359 => 71,  356 => 70,  352 => 68,  348 => 67,  342 => 64,  337 => 63,  329 => 53,  320 => 52,  309 => 282,  304 => 189,  294 => 184,  283 => 170,  273 => 167,  271 => 166,  267 => 165,  261 => 162,  257 => 161,  253 => 160,  249 => 159,  245 => 158,  239 => 154,  235 => 153,  202 => 122,  193 => 120,  189 => 119,  182 => 114,  173 => 112,  169 => 111,  161 => 106,  141 => 88,  139 => 52,  136 => 51,  127 => 50,  108 => 40,  105 => 39,  80 => 13,  71 => 12,  53 => 3,  44 => 2,  11 => 1,);
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
            <form method=\"post\" action=\"{{path('search')}}\"> 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                    <select>
                        <option value=\"\"> Choisir le Type Bien </option>
                        {% for type in types %}
                            <option value=\"\" name=\"typebien\"> {{type.libelle}} </option>
                        {% endfor %}
                    </select> 
                </div>
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                     <select>
                        <option value=\"\" > Choisir la localite </option>
                        {% for localite in localites %}
                            <option value=\"\" name=\"localite\"> {{localite.nomlocalite}} </option>
                        {% endfor %}
                        
                    </select>
                </div>  
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
<th>localite</th>
<th>typebien</th>
<th>Image</th>


</tr>
{% for bien in biens %}

<tr>


<td>{{bien.nombien}}</td>
<td>{{bien.prixlocation }}</td>
<td>{{bien.description}}</td>
<td>{{bien.localite}}</td>
<td>{{bien.typebien}}</td>
 <td>
    
 {% for image in bien.images %}
 {# {{image.image}} #}
   <img src=\"{{asset('assets/img/photo/'~image.image)}}\"class=\"img\">

{% endfor %}

 </td> 
 <style>
 .img
 {
     width:200px;
 }
 </style>

{# {% if bien.etat == false %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">libre</a> </td>
{% else %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">occupé</a> </td>
{% endif %} #}

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
