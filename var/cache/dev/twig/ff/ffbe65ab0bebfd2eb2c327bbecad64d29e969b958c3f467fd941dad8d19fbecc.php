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
        $__internal_e430135914294ca526cdeca5f8dd778f3a2bca7c4d3ed5411be2750ab267e72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e430135914294ca526cdeca5f8dd778f3a2bca7c4d3ed5411be2750ab267e72d->enter($__internal_e430135914294ca526cdeca5f8dd778f3a2bca7c4d3ed5411be2750ab267e72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $__internal_c9f74de5ade219a0a76fb9da3c33be7ab7ff0707091bd3e85b9c61e6403c19eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f74de5ade219a0a76fb9da3c33be7ab7ff0707091bd3e85b9c61e6403c19eb->enter($__internal_c9f74de5ade219a0a76fb9da3c33be7ab7ff0707091bd3e85b9c61e6403c19eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e430135914294ca526cdeca5f8dd778f3a2bca7c4d3ed5411be2750ab267e72d->leave($__internal_e430135914294ca526cdeca5f8dd778f3a2bca7c4d3ed5411be2750ab267e72d_prof);

        
        $__internal_c9f74de5ade219a0a76fb9da3c33be7ab7ff0707091bd3e85b9c61e6403c19eb->leave($__internal_c9f74de5ade219a0a76fb9da3c33be7ab7ff0707091bd3e85b9c61e6403c19eb_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_1c5fd46d68bceb7a0a4adf4434a953764153f3145acec3b9bc1fa316e14306a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5fd46d68bceb7a0a4adf4434a953764153f3145acec3b9bc1fa316e14306a2->enter($__internal_1c5fd46d68bceb7a0a4adf4434a953764153f3145acec3b9bc1fa316e14306a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_c627dfe0b9917df2c40d1ce9c0415280f0061e4a091c46e45b4c8bd9d431c10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c627dfe0b9917df2c40d1ce9c0415280f0061e4a091c46e45b4c8bd9d431c10d->enter($__internal_c627dfe0b9917df2c40d1ce9c0415280f0061e4a091c46e45b4c8bd9d431c10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_c627dfe0b9917df2c40d1ce9c0415280f0061e4a091c46e45b4c8bd9d431c10d->leave($__internal_c627dfe0b9917df2c40d1ce9c0415280f0061e4a091c46e45b4c8bd9d431c10d_prof);

        
        $__internal_1c5fd46d68bceb7a0a4adf4434a953764153f3145acec3b9bc1fa316e14306a2->leave($__internal_1c5fd46d68bceb7a0a4adf4434a953764153f3145acec3b9bc1fa316e14306a2_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_edade19d4b569ba56b60ab06ee45ea7a313e90d953f1a937492975306bc4a422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edade19d4b569ba56b60ab06ee45ea7a313e90d953f1a937492975306bc4a422->enter($__internal_edade19d4b569ba56b60ab06ee45ea7a313e90d953f1a937492975306bc4a422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a505c485ad89d87a00da43796619b84089563f8d313d9c76b55ef33d63406273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a505c485ad89d87a00da43796619b84089563f8d313d9c76b55ef33d63406273->enter($__internal_a505c485ad89d87a00da43796619b84089563f8d313d9c76b55ef33d63406273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a505c485ad89d87a00da43796619b84089563f8d313d9c76b55ef33d63406273->leave($__internal_a505c485ad89d87a00da43796619b84089563f8d313d9c76b55ef33d63406273_prof);

        
        $__internal_edade19d4b569ba56b60ab06ee45ea7a313e90d953f1a937492975306bc4a422->leave($__internal_edade19d4b569ba56b60ab06ee45ea7a313e90d953f1a937492975306bc4a422_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_40951f6d294a8993c68ab721215b102b0c74975e0e238e10168b29e223093916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40951f6d294a8993c68ab721215b102b0c74975e0e238e10168b29e223093916->enter($__internal_40951f6d294a8993c68ab721215b102b0c74975e0e238e10168b29e223093916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3f8bb367d4648fe9f0637a121cfe558bd4cecda2eb3034c3e21fa5b2b2fc056a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8bb367d4648fe9f0637a121cfe558bd4cecda2eb3034c3e21fa5b2b2fc056a->enter($__internal_3f8bb367d4648fe9f0637a121cfe558bd4cecda2eb3034c3e21fa5b2b2fc056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                 
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
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 142
            echo "
<tr>


<td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
 <td>
    
 ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 154
                echo " ";
                // line 155
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "
 </td> 
 <style>
 .img
 {
     width:200px;
 }
 </style>

";
            // line 172
            echo "
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</table>
</div>   
     
     ";
        // line 270
        echo "            
";
        
        $__internal_3f8bb367d4648fe9f0637a121cfe558bd4cecda2eb3034c3e21fa5b2b2fc056a->leave($__internal_3f8bb367d4648fe9f0637a121cfe558bd4cecda2eb3034c3e21fa5b2b2fc056a_prof);

        
        $__internal_40951f6d294a8993c68ab721215b102b0c74975e0e238e10168b29e223093916->leave($__internal_40951f6d294a8993c68ab721215b102b0c74975e0e238e10168b29e223093916_prof);

    }

    // line 52
    public function block_slide($context, array $blocks = array())
    {
        $__internal_854b8e5e2f1ef239df36c5d78ebc77e3269a946059869bf2be9135d9ee6a9701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854b8e5e2f1ef239df36c5d78ebc77e3269a946059869bf2be9135d9ee6a9701->enter($__internal_854b8e5e2f1ef239df36c5d78ebc77e3269a946059869bf2be9135d9ee6a9701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_e18ceb72f963156a5aca302b7b38315a342c3129e0b09e12bd56b301c80ef98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18ceb72f963156a5aca302b7b38315a342c3129e0b09e12bd56b301c80ef98d->enter($__internal_e18ceb72f963156a5aca302b7b38315a342c3129e0b09e12bd56b301c80ef98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_e18ceb72f963156a5aca302b7b38315a342c3129e0b09e12bd56b301c80ef98d->leave($__internal_e18ceb72f963156a5aca302b7b38315a342c3129e0b09e12bd56b301c80ef98d_prof);

        
        $__internal_854b8e5e2f1ef239df36c5d78ebc77e3269a946059869bf2be9135d9ee6a9701->leave($__internal_854b8e5e2f1ef239df36c5d78ebc77e3269a946059869bf2be9135d9ee6a9701_prof);

    }

    // line 85
    public function block_plus($context, array $blocks = array())
    {
        $__internal_2826924b1f0d8afd7c9217a3c4140a9e48d3e8209bc1c99c9567780df5c89865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2826924b1f0d8afd7c9217a3c4140a9e48d3e8209bc1c99c9567780df5c89865->enter($__internal_2826924b1f0d8afd7c9217a3c4140a9e48d3e8209bc1c99c9567780df5c89865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_68e746a7280e107a27de0e90fd6de3b014aeb53c50a2d02642c043e2f31b0eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e746a7280e107a27de0e90fd6de3b014aeb53c50a2d02642c043e2f31b0eed->enter($__internal_68e746a7280e107a27de0e90fd6de3b014aeb53c50a2d02642c043e2f31b0eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 86
        echo "    ";
        
        $__internal_68e746a7280e107a27de0e90fd6de3b014aeb53c50a2d02642c043e2f31b0eed->leave($__internal_68e746a7280e107a27de0e90fd6de3b014aeb53c50a2d02642c043e2f31b0eed_prof);

        
        $__internal_2826924b1f0d8afd7c9217a3c4140a9e48d3e8209bc1c99c9567780df5c89865->leave($__internal_2826924b1f0d8afd7c9217a3c4140a9e48d3e8209bc1c99c9567780df5c89865_prof);

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
        return array (  367 => 86,  358 => 85,  348 => 87,  346 => 85,  334 => 76,  330 => 75,  324 => 72,  320 => 71,  317 => 70,  313 => 68,  309 => 67,  303 => 64,  298 => 63,  290 => 53,  281 => 52,  270 => 270,  265 => 177,  255 => 172,  244 => 158,  234 => 155,  232 => 154,  228 => 153,  222 => 150,  218 => 149,  214 => 148,  210 => 147,  206 => 146,  200 => 142,  196 => 141,  141 => 88,  139 => 52,  136 => 51,  127 => 50,  108 => 40,  105 => 39,  80 => 13,  71 => 12,  53 => 3,  44 => 2,  11 => 1,);
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
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                 
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
