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
        $__internal_4725c7002ba86b11a9120c6c6702da95d59aca729c85d5267be48a1794022d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4725c7002ba86b11a9120c6c6702da95d59aca729c85d5267be48a1794022d0f->enter($__internal_4725c7002ba86b11a9120c6c6702da95d59aca729c85d5267be48a1794022d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $__internal_9ce0c21bfb749867259785c30184e44e4a0286d82a7d9d99353d89b6413c40ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce0c21bfb749867259785c30184e44e4a0286d82a7d9d99353d89b6413c40ca->enter($__internal_9ce0c21bfb749867259785c30184e44e4a0286d82a7d9d99353d89b6413c40ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4725c7002ba86b11a9120c6c6702da95d59aca729c85d5267be48a1794022d0f->leave($__internal_4725c7002ba86b11a9120c6c6702da95d59aca729c85d5267be48a1794022d0f_prof);

        
        $__internal_9ce0c21bfb749867259785c30184e44e4a0286d82a7d9d99353d89b6413c40ca->leave($__internal_9ce0c21bfb749867259785c30184e44e4a0286d82a7d9d99353d89b6413c40ca_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_02cc2a8a04b6f6397c3dd0030b5a371e19ac2ba0b80b7d36796ac98641bc601c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cc2a8a04b6f6397c3dd0030b5a371e19ac2ba0b80b7d36796ac98641bc601c->enter($__internal_02cc2a8a04b6f6397c3dd0030b5a371e19ac2ba0b80b7d36796ac98641bc601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_0ab8a414fa882971b671d7d0c1f747bc16b379bae5ed37dc555590d996ab39ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab8a414fa882971b671d7d0c1f747bc16b379bae5ed37dc555590d996ab39ae->enter($__internal_0ab8a414fa882971b671d7d0c1f747bc16b379bae5ed37dc555590d996ab39ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        echo "    <style>
        .slogan{
            font-size: 20px;
            position: relative;
            top: 30px;
            right: 250px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .container {
            padding: 2px 16px;
        }
        .img
        {
            width:200px;
        }
        li{
            list-style: none;
        }
    </style>
";
        
        $__internal_0ab8a414fa882971b671d7d0c1f747bc16b379bae5ed37dc555590d996ab39ae->leave($__internal_0ab8a414fa882971b671d7d0c1f747bc16b379bae5ed37dc555590d996ab39ae_prof);

        
        $__internal_02cc2a8a04b6f6397c3dd0030b5a371e19ac2ba0b80b7d36796ac98641bc601c->leave($__internal_02cc2a8a04b6f6397c3dd0030b5a371e19ac2ba0b80b7d36796ac98641bc601c_prof);

    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        $__internal_67fe02d3018c6fdeb4cb0110ce5566759e77c31451f5d9bd4635bbf50fb255f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fe02d3018c6fdeb4cb0110ce5566759e77c31451f5d9bd4635bbf50fb255f9->enter($__internal_67fe02d3018c6fdeb4cb0110ce5566759e77c31451f5d9bd4635bbf50fb255f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_39b7125bbaa9810682009c60de06e98246582da5d47fcba7708e8d480116db9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b7125bbaa9810682009c60de06e98246582da5d47fcba7708e8d480116db9c->enter($__internal_39b7125bbaa9810682009c60de06e98246582da5d47fcba7708e8d480116db9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 38
        echo "    <!-- Slider -->
    ";
        // line 39
        $this->displayBlock('slide', $context, $blocks);
        // line 74
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
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchBien");
        echo "\" > 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                    <select>
                        <option value=\"\" > Choisir la localite </option>
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 98
            echo "                            <option value=\"\" name=\"localite\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "nomlocalite", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                        
                    </select>
                </div>
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                    <select>
                        <option value=\"\"> Choisir le Type Bien </option>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 107
            echo "                            <option value=\"\" name=\"typebien\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                    </select>
                </div>  
                <div class=\"col-lg-3\" style=\"margin-left:30px;\">
                     <input name=\"prixlocation\"class=\"form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"prix\">
                </div>
                <div class=\"col-lg-3 bg-primary\"style=\"margin-left:30px;\">
                    <input name=\"search\"value=\"SEARCH\"  style=\"width:100px; height:30px; margin-bottom:12px\" type=\"submit\">
                  
                </div>
            </div>
       
            </form>
            
          </div>
    ";
        // line 123
        $this->displayBlock('plus', $context, $blocks);
        // line 125
        echo "    <div class=\"col-lg-12\">
        <ul style=\"display: flex;\">
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 128
            echo "            <div class=\"card text-white bg-primary\">
              <img class=\"card-img-top\" src=\"holder.js/100px180/\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 135
                echo "                        <li>
                        <img src=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</li>
                    <li>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</li>
                    <li>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</li>
                </ul>
                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\"><button><span class=\"violet\">RESERVER</span></button></a>
            </li>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        </ul>
    </div> 
    <div class=\"col-lg-12\">
        <ul style=\"display: flex;\">
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 153
            echo "            <div class=\"card text-white bg-primary\">
              <img class=\"card-img-top\" src=\"holder.js/100px180/\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                    ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 160
                echo "                        <li>
                        <img src=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</li>
                    <li>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</li>
                    <li>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</li>
                </ul>
                <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\"><button><span class=\"violet\">RESERVER</span></button></a>
            </li>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "        </ul>
    </div> 
";
        // line 190
        echo " ";
        // line 191
        echo " ";
        echo "   
 

";
        // line 194
        echo " 
";
        // line 206
        echo "   
     ";
        // line 297
        echo "            
";
        
        $__internal_39b7125bbaa9810682009c60de06e98246582da5d47fcba7708e8d480116db9c->leave($__internal_39b7125bbaa9810682009c60de06e98246582da5d47fcba7708e8d480116db9c_prof);

        
        $__internal_67fe02d3018c6fdeb4cb0110ce5566759e77c31451f5d9bd4635bbf50fb255f9->leave($__internal_67fe02d3018c6fdeb4cb0110ce5566759e77c31451f5d9bd4635bbf50fb255f9_prof);

    }

    // line 39
    public function block_slide($context, array $blocks = array())
    {
        $__internal_71343dd3bd8e96e1cb1794db4daeaa86d1f19e0bd7acd9bf1438cf2ea674fe95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71343dd3bd8e96e1cb1794db4daeaa86d1f19e0bd7acd9bf1438cf2ea674fe95->enter($__internal_71343dd3bd8e96e1cb1794db4daeaa86d1f19e0bd7acd9bf1438cf2ea674fe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_162cf78ebb9a4189eaac0faafe9e1d6d72064d004512536a9764dff177254cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162cf78ebb9a4189eaac0faafe9e1d6d72064d004512536a9764dff177254cd8->enter($__internal_162cf78ebb9a4189eaac0faafe9e1d6d72064d004512536a9764dff177254cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 40
        echo "    <div class=\"slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span10 offset1\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            ";
        // line 50
        echo "                             <li data-thumb=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/maison.jpg"), "html", null, true);
        echo "\" style=\"height:0px\">
                                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/maison.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                <p class=\"flex-caption\">Maison meublée avec 2 chambres ,une cuisine, un salon, un bureau, une piscine et un jardin en Rez de chaussée.Quatre chambre avec salle de bain un salon de the, deux toilettes publiques.</p>
                            </li>
                            <li data-thumb=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/02.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/02.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                ";
        // line 57
        echo "                            </li>
                            <li data-thumb=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/03.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/03.jpg"), "html", null, true);
        echo "\" style=\"height:550px\">
                                <p class=\"flex-caption\">Studio avec une chambreavec salle de bain , un salon, une cuisine.</p>
                            </li>
                            <li data-thumb=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/07.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 63
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
        
        $__internal_162cf78ebb9a4189eaac0faafe9e1d6d72064d004512536a9764dff177254cd8->leave($__internal_162cf78ebb9a4189eaac0faafe9e1d6d72064d004512536a9764dff177254cd8_prof);

        
        $__internal_71343dd3bd8e96e1cb1794db4daeaa86d1f19e0bd7acd9bf1438cf2ea674fe95->leave($__internal_71343dd3bd8e96e1cb1794db4daeaa86d1f19e0bd7acd9bf1438cf2ea674fe95_prof);

    }

    // line 123
    public function block_plus($context, array $blocks = array())
    {
        $__internal_309ad1f80745fa685883ee4350969528a3ad79943734b84485f98cc4268fc9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309ad1f80745fa685883ee4350969528a3ad79943734b84485f98cc4268fc9d0->enter($__internal_309ad1f80745fa685883ee4350969528a3ad79943734b84485f98cc4268fc9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_a48c73eba1391df00d7c38288f9e21ca5169fde4ecc905a2bba8842f4cdcd070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48c73eba1391df00d7c38288f9e21ca5169fde4ecc905a2bba8842f4cdcd070->enter($__internal_a48c73eba1391df00d7c38288f9e21ca5169fde4ecc905a2bba8842f4cdcd070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 124
        echo "    ";
        
        $__internal_a48c73eba1391df00d7c38288f9e21ca5169fde4ecc905a2bba8842f4cdcd070->leave($__internal_a48c73eba1391df00d7c38288f9e21ca5169fde4ecc905a2bba8842f4cdcd070_prof);

        
        $__internal_309ad1f80745fa685883ee4350969528a3ad79943734b84485f98cc4268fc9d0->leave($__internal_309ad1f80745fa685883ee4350969528a3ad79943734b84485f98cc4268fc9d0_prof);

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
        return array (  417 => 124,  408 => 123,  387 => 63,  383 => 62,  377 => 59,  373 => 58,  370 => 57,  366 => 55,  362 => 54,  356 => 51,  351 => 50,  343 => 40,  334 => 39,  323 => 297,  320 => 206,  317 => 194,  311 => 191,  309 => 190,  305 => 173,  294 => 168,  289 => 166,  285 => 165,  280 => 164,  271 => 161,  268 => 160,  264 => 159,  256 => 153,  252 => 152,  246 => 148,  235 => 143,  230 => 141,  226 => 140,  221 => 139,  212 => 136,  209 => 135,  205 => 134,  197 => 128,  193 => 127,  189 => 125,  187 => 123,  171 => 109,  162 => 107,  158 => 106,  150 => 100,  141 => 98,  137 => 97,  129 => 92,  109 => 74,  107 => 39,  104 => 38,  95 => 37,  52 => 3,  43 => 2,  11 => 1,);
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
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .container {
            padding: 2px 16px;
        }
        .img
        {
            width:200px;
        }
        li{
            list-style: none;
        }
    </style>
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
            <form method=\"post\" action=\"{{path('searchBien')}}\" > 
            <div class=\"row\" style=\"display:flex;margin-left:200px\">
                <div class=\"col-lg-3\">
                    <select>
                        <option value=\"\" > Choisir la localite </option>
                        {% for localite in localites %}
                            <option value=\"\" name=\"localite\"> {{localite.nomlocalite}} </option>
                        {% endfor %}
                        
                    </select>
                </div>
                <div class=\"col-lg-3 \"style=\"margin-left:30px;\">
                    <select>
                        <option value=\"\"> Choisir le Type Bien </option>
                        {% for type in types %}
                            <option value=\"\" name=\"typebien\"> {{type.libelle}} </option>
                        {% endfor %}
                    </select>
                </div>  
                <div class=\"col-lg-3\" style=\"margin-left:30px;\">
                     <input name=\"prixlocation\"class=\"form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15\" type=\"text\" placeholder=\"prix\">
                </div>
                <div class=\"col-lg-3 bg-primary\"style=\"margin-left:30px;\">
                    <input name=\"search\"value=\"SEARCH\"  style=\"width:100px; height:30px; margin-bottom:12px\" type=\"submit\">
                  
                </div>
            </div>
       
            </form>
            
          </div>
    {% block plus %}
    {% endblock %}
    <div class=\"col-lg-12\">
        <ul style=\"display: flex;\">
        {% for bien in biens %}
            <div class=\"card text-white bg-primary\">
              <img class=\"card-img-top\" src=\"holder.js/100px180/\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                    {% for image in bien.images %}
                        <li>
                        <img src=\"{{asset('assets/img/photo/'~image.image)}}\"class=\"img\">
                        </li>
                    {% endfor %}
                    <li>{{bien.typebien}}</li>
                    <li>{{bien.nombien}}</li>
                    <li>{{bien.prixlocation }}</li>
                </ul>
                <a href=\"{{path('reserver', {'id':bien.id})}}\"><button><span class=\"violet\">RESERVER</span></button></a>
            </li>
            </div>
            </div>
        {% endfor %}
        </ul>
    </div> 
    <div class=\"col-lg-12\">
        <ul style=\"display: flex;\">
        {% for bien in biens %}
            <div class=\"card text-white bg-primary\">
              <img class=\"card-img-top\" src=\"holder.js/100px180/\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                    {% for image in bien.images %}
                        <li>
                        <img src=\"{{asset('assets/img/photo/'~image.image)}}\"class=\"img\">
                        </li>
                    {% endfor %}
                    <li>{{bien.typebien}}</li>
                    <li>{{bien.nombien}}</li>
                    <li>{{bien.prixlocation }}</li>
                </ul>
                <a href=\"{{path('reserver', {'id':bien.id})}}\"><button><span class=\"violet\">RESERVER</span></button></a>
            </li>
            </div>
            </div>
        {% endfor %}
        </ul>
    </div> 
{# <thead>
<tr>
<th>nom</th>
<th>prix</th>
<th>description</th>
<th>localite</th>
<th>typebien</th>
<th>Image</th>
</tr>
</thead> #}
{# <tbody> #}
{# <tr> #}
{# <li>{{bien.description}}</li>
<li>{{bien.localite}}</li> #}
{# <li>{{bien.typebien}}</li> #}
 {# <td> #}
 {# </tbody> #}   
 

{#  </td> #} 
{#  <style>
 .img
 {
     width:200px;
 }
 </style>
 #}
{# {% if bien.etat == false %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">libre</a> </td>
{% else %}
<td> <a href=\"{{path('etat',{'id':bien.id})}}\">occupé</a> </td>
{% endif %} #}   
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
