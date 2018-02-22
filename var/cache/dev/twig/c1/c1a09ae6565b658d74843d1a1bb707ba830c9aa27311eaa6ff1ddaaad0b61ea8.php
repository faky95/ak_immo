<?php

/* AKImmobilierBundle:Front:layout.html.twig */
class __TwigTemplate_e8404157c7e2b871cc2afdf113fa97ba29c5d7b537cb2c6ece0e0ec4c017e35b extends Twig_Template
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
        $__internal_e11af468082b7a0c31bd55aad1c5e53949f41ca8dfa4b1f8a783ed50c94c4ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11af468082b7a0c31bd55aad1c5e53949f41ca8dfa4b1f8a783ed50c94c4ab2->enter($__internal_e11af468082b7a0c31bd55aad1c5e53949f41ca8dfa4b1f8a783ed50c94c4ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $__internal_e7e6c7fde40159bc66e612c28763f40f9b1ea23bf288b852a14fcc80b5947d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e6c7fde40159bc66e612c28763f40f9b1ea23bf288b852a14fcc80b5947d54->enter($__internal_e7e6c7fde40159bc66e612c28763f40f9b1ea23bf288b852a14fcc80b5947d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11af468082b7a0c31bd55aad1c5e53949f41ca8dfa4b1f8a783ed50c94c4ab2->leave($__internal_e11af468082b7a0c31bd55aad1c5e53949f41ca8dfa4b1f8a783ed50c94c4ab2_prof);

        
        $__internal_e7e6c7fde40159bc66e612c28763f40f9b1ea23bf288b852a14fcc80b5947d54->leave($__internal_e7e6c7fde40159bc66e612c28763f40f9b1ea23bf288b852a14fcc80b5947d54_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_27f402abf266584a315c1894310edb2fa06157b57f1f86dcbd026f9cff42aaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f402abf266584a315c1894310edb2fa06157b57f1f86dcbd026f9cff42aaa7->enter($__internal_27f402abf266584a315c1894310edb2fa06157b57f1f86dcbd026f9cff42aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_9f8684048d886e1aac24706119de128b665c35df969c03d9e283f8aef5cab308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8684048d886e1aac24706119de128b665c35df969c03d9e283f8aef5cab308->enter($__internal_9f8684048d886e1aac24706119de128b665c35df969c03d9e283f8aef5cab308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_9f8684048d886e1aac24706119de128b665c35df969c03d9e283f8aef5cab308->leave($__internal_9f8684048d886e1aac24706119de128b665c35df969c03d9e283f8aef5cab308_prof);

        
        $__internal_27f402abf266584a315c1894310edb2fa06157b57f1f86dcbd026f9cff42aaa7->leave($__internal_27f402abf266584a315c1894310edb2fa06157b57f1f86dcbd026f9cff42aaa7_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_b9f9f5f71750f8fe9c3eb628b29a079eebc373cee97bdc94647332f63fe739af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f9f5f71750f8fe9c3eb628b29a079eebc373cee97bdc94647332f63fe739af->enter($__internal_b9f9f5f71750f8fe9c3eb628b29a079eebc373cee97bdc94647332f63fe739af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f5fd279203ad76cdb9ca981ecbf7dc6597d9cf59107e0924c2d5012ed259218f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fd279203ad76cdb9ca981ecbf7dc6597d9cf59107e0924c2d5012ed259218f->enter($__internal_f5fd279203ad76cdb9ca981ecbf7dc6597d9cf59107e0924c2d5012ed259218f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_f5fd279203ad76cdb9ca981ecbf7dc6597d9cf59107e0924c2d5012ed259218f->leave($__internal_f5fd279203ad76cdb9ca981ecbf7dc6597d9cf59107e0924c2d5012ed259218f_prof);

        
        $__internal_b9f9f5f71750f8fe9c3eb628b29a079eebc373cee97bdc94647332f63fe739af->leave($__internal_b9f9f5f71750f8fe9c3eb628b29a079eebc373cee97bdc94647332f63fe739af_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_7683d56192b601b585d6e12b39d291569c9fa2cc898230d4b82b68cf8fa46c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7683d56192b601b585d6e12b39d291569c9fa2cc898230d4b82b68cf8fa46c64->enter($__internal_7683d56192b601b585d6e12b39d291569c9fa2cc898230d4b82b68cf8fa46c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f483f8dc6da242315bc35ab0b4de6272b8a76080d3c368698ce514db081c8c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f483f8dc6da242315bc35ab0b4de6272b8a76080d3c368698ce514db081c8c06->enter($__internal_f483f8dc6da242315bc35ab0b4de6272b8a76080d3c368698ce514db081c8c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_f483f8dc6da242315bc35ab0b4de6272b8a76080d3c368698ce514db081c8c06->leave($__internal_f483f8dc6da242315bc35ab0b4de6272b8a76080d3c368698ce514db081c8c06_prof);

        
        $__internal_7683d56192b601b585d6e12b39d291569c9fa2cc898230d4b82b68cf8fa46c64->leave($__internal_7683d56192b601b585d6e12b39d291569c9fa2cc898230d4b82b68cf8fa46c64_prof);

    }

    // line 52
    public function block_slide($context, array $blocks = array())
    {
        $__internal_523560731204ace79fc8a989fdbc88cf1b92669c1446e64c5abf43116d5d9f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523560731204ace79fc8a989fdbc88cf1b92669c1446e64c5abf43116d5d9f70->enter($__internal_523560731204ace79fc8a989fdbc88cf1b92669c1446e64c5abf43116d5d9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_4c3fbe436cefa8f32f867088f5046644cd301ec9dabb080e3a156a209cfc7c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3fbe436cefa8f32f867088f5046644cd301ec9dabb080e3a156a209cfc7c4a->enter($__internal_4c3fbe436cefa8f32f867088f5046644cd301ec9dabb080e3a156a209cfc7c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_4c3fbe436cefa8f32f867088f5046644cd301ec9dabb080e3a156a209cfc7c4a->leave($__internal_4c3fbe436cefa8f32f867088f5046644cd301ec9dabb080e3a156a209cfc7c4a_prof);

        
        $__internal_523560731204ace79fc8a989fdbc88cf1b92669c1446e64c5abf43116d5d9f70->leave($__internal_523560731204ace79fc8a989fdbc88cf1b92669c1446e64c5abf43116d5d9f70_prof);

    }

    // line 85
    public function block_plus($context, array $blocks = array())
    {
        $__internal_b4ad5934c2992ef13fdea2dbe3a72f74aa6d2646daa84d1c02912f905abe6a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ad5934c2992ef13fdea2dbe3a72f74aa6d2646daa84d1c02912f905abe6a2c->enter($__internal_b4ad5934c2992ef13fdea2dbe3a72f74aa6d2646daa84d1c02912f905abe6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_b36ce87e7f8fbd05b9b35e199151551925f4969ead179ea7f669f166b1f35de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36ce87e7f8fbd05b9b35e199151551925f4969ead179ea7f669f166b1f35de7->enter($__internal_b36ce87e7f8fbd05b9b35e199151551925f4969ead179ea7f669f166b1f35de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 86
        echo "    ";
        
        $__internal_b36ce87e7f8fbd05b9b35e199151551925f4969ead179ea7f669f166b1f35de7->leave($__internal_b36ce87e7f8fbd05b9b35e199151551925f4969ead179ea7f669f166b1f35de7_prof);

        
        $__internal_b4ad5934c2992ef13fdea2dbe3a72f74aa6d2646daa84d1c02912f905abe6a2c->leave($__internal_b4ad5934c2992ef13fdea2dbe3a72f74aa6d2646daa84d1c02912f905abe6a2c_prof);

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
