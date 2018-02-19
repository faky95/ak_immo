<?php

/* AKImmobilierBundle:Front:base.html.twig */
class __TwigTemplate_d9dc4ded0f484a8486383be8055cc415b5b8c57782aabf88c90387c2b1e6e9d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:base.html.twig", 1);
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
        $__internal_7f2126b2fb7927cf3181569b6384c179dd534e0f531c412bff54fa93d8c6853b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2126b2fb7927cf3181569b6384c179dd534e0f531c412bff54fa93d8c6853b->enter($__internal_7f2126b2fb7927cf3181569b6384c179dd534e0f531c412bff54fa93d8c6853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:base.html.twig"));

        $__internal_34fa2827b0e2bcd32d5474d9b4290c12fcfabed0834a1cb40e5993db17c92f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fa2827b0e2bcd32d5474d9b4290c12fcfabed0834a1cb40e5993db17c92f97->enter($__internal_34fa2827b0e2bcd32d5474d9b4290c12fcfabed0834a1cb40e5993db17c92f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2126b2fb7927cf3181569b6384c179dd534e0f531c412bff54fa93d8c6853b->leave($__internal_7f2126b2fb7927cf3181569b6384c179dd534e0f531c412bff54fa93d8c6853b_prof);

        
        $__internal_34fa2827b0e2bcd32d5474d9b4290c12fcfabed0834a1cb40e5993db17c92f97->leave($__internal_34fa2827b0e2bcd32d5474d9b4290c12fcfabed0834a1cb40e5993db17c92f97_prof);

    }

    // line 2
    public function block_styles($context, array $blocks = array())
    {
        $__internal_8ea11609c752cff6f3470d600ce79b6456c8565d6dfb7b977d6925d1cccbea56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea11609c752cff6f3470d600ce79b6456c8565d6dfb7b977d6925d1cccbea56->enter($__internal_8ea11609c752cff6f3470d600ce79b6456c8565d6dfb7b977d6925d1cccbea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_a878d5db66e765086d56abae6dc3d576831cf69dd68e7e22dfd9087faea2b7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a878d5db66e765086d56abae6dc3d576831cf69dd68e7e22dfd9087faea2b7c8->enter($__internal_a878d5db66e765086d56abae6dc3d576831cf69dd68e7e22dfd9087faea2b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_a878d5db66e765086d56abae6dc3d576831cf69dd68e7e22dfd9087faea2b7c8->leave($__internal_a878d5db66e765086d56abae6dc3d576831cf69dd68e7e22dfd9087faea2b7c8_prof);

        
        $__internal_8ea11609c752cff6f3470d600ce79b6456c8565d6dfb7b977d6925d1cccbea56->leave($__internal_8ea11609c752cff6f3470d600ce79b6456c8565d6dfb7b977d6925d1cccbea56_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_d94481f13a2fb469e67adb50ad2b7ffd2d285cbab14f7b867f2c25e02f8b8a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94481f13a2fb469e67adb50ad2b7ffd2d285cbab14f7b867f2c25e02f8b8a90->enter($__internal_d94481f13a2fb469e67adb50ad2b7ffd2d285cbab14f7b867f2c25e02f8b8a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dc6f0c4bbb3d4f6965988048d61163bd7562bf0b4e21f15fb97399df1a575dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6f0c4bbb3d4f6965988048d61163bd7562bf0b4e21f15fb97399df1a575dd2->enter($__internal_dc6f0c4bbb3d4f6965988048d61163bd7562bf0b4e21f15fb97399df1a575dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                    <a href=\"";
        // line 34
        echo "\"><i class=\"icon-camera\"></i><br />Portfolio</a>
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
        
        $__internal_dc6f0c4bbb3d4f6965988048d61163bd7562bf0b4e21f15fb97399df1a575dd2->leave($__internal_dc6f0c4bbb3d4f6965988048d61163bd7562bf0b4e21f15fb97399df1a575dd2_prof);

        
        $__internal_d94481f13a2fb469e67adb50ad2b7ffd2d285cbab14f7b867f2c25e02f8b8a90->leave($__internal_d94481f13a2fb469e67adb50ad2b7ffd2d285cbab14f7b867f2c25e02f8b8a90_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_8d867335072c6df121970d0c4fd4898af2d3114f3d167b41496895f47434c711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d867335072c6df121970d0c4fd4898af2d3114f3d167b41496895f47434c711->enter($__internal_8d867335072c6df121970d0c4fd4898af2d3114f3d167b41496895f47434c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2d3f93527375f4070be99f86fed86993689c90b2f0718718491027a7ea3731b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3f93527375f4070be99f86fed86993689c90b2f0718718491027a7ea3731b1->enter($__internal_2d3f93527375f4070be99f86fed86993689c90b2f0718718491027a7ea3731b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "    <!-- Slider -->
    ";
        // line 52
        $this->displayBlock('slide', $context, $blocks);
        // line 84
        echo "
    <!-- Site Description -->
    <div class=\"presentation container\">
        <h2>AVEC <span class=\"violet\">AK1/2 IMMO</span>, trouver votre futur logement.</h2>
        <p>Votre maison on la vois comme vous.</p>
    </div>

    <!-- Services -->
    <div class=\"what-we-do container\">
        <div class=\"row\">
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-eye-open\"></i>
                </div>
                <h4>Beautiful Websites</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("services.html"), "html", null, true);
        echo "\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-table\"></i>
                </div>
                <h4>Responsive Layout</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("services.html"), "html", null, true);
        echo "\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-magic\"></i>
                </div>
                <h4>Awesome Logos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("services.html"), "html", null, true);
        echo "\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-print\"></i>
                </div>
                <h4>High Res Prints</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("services.html"), "html", null, true);
        echo "\">Read more</a>
            </div>
        </div>
    </div>

    <!-- Latest Work -->
    <div class=\"portfolio container\">
        <div class=\"portfolio-title\">
            <h3>Our Latest Work</h3>
        </div>
        <div class=\"row\">
            <div class=\"work span3\">
                <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Lorem Website</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work1.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Ipsum Logo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work2.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Dolor Prints</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work3.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <h4>Sit Amet Website</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio/work4.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("portfolio.html"), "html", null, true);
        echo "\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class=\"testimonials container\">
        <div class=\"testimonials-title\">
            <h3>Testimonials</h3>
        </div>
        <div class=\"row\">
            <div class=\"testimonial-list span12\">
                <div class=\"tabbable tabs-below\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"A\">
                            <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testimonials/1.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur...\"<br /><span class=\"violet\">Lorem Ipsum, dolor.co.uk</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"B\">
                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testimonials/2.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                            <p>\"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat...\"<br /><span class=\"violet\">Minim Veniam, nostrud.com</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"C\">
                            <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testimonials/3.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur...\"<br /><span class=\"violet\">Lorem Ipsum, dolor.co.uk</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"D\">
                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/testimonials/1.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"\">
                            <p>\"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat...\"<br /><span class=\"violet\">Minim Veniam, nostrud.com</span></p>
                        </div>
                    </div>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#A\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#B\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#C\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#D\" data-toggle=\"tab\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2d3f93527375f4070be99f86fed86993689c90b2f0718718491027a7ea3731b1->leave($__internal_2d3f93527375f4070be99f86fed86993689c90b2f0718718491027a7ea3731b1_prof);

        
        $__internal_8d867335072c6df121970d0c4fd4898af2d3114f3d167b41496895f47434c711->leave($__internal_8d867335072c6df121970d0c4fd4898af2d3114f3d167b41496895f47434c711_prof);

    }

    // line 52
    public function block_slide($context, array $blocks = array())
    {
        $__internal_d211ab9c0bec6cbd3e4f26b3f7942dd6db1f0f4e9123ff3ded36f1ec6a75b2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d211ab9c0bec6cbd3e4f26b3f7942dd6db1f0f4e9123ff3ded36f1ec6a75b2f0->enter($__internal_d211ab9c0bec6cbd3e4f26b3f7942dd6db1f0f4e9123ff3ded36f1ec6a75b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_cc310b716b0f124c4f7060eb89ea4b4ef6f8342477c998e0262676df190336d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc310b716b0f124c4f7060eb89ea4b4ef6f8342477c998e0262676df190336d6->enter($__internal_cc310b716b0f124c4f7060eb89ea4b4ef6f8342477c998e0262676df190336d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 53
        echo "    <div class=\"slider\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span10 offset1\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            <li data-thumb=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/1.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/1.jpg"), "html", null, true);
        echo "\">
                                <p class=\"flex-caption\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li data-thumb=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/2.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/2.jpg"), "html", null, true);
        echo "\">
                                <p class=\"flex-caption\">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </li>
                            <li data-thumb=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/5.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/5.jpg"), "html", null, true);
        echo "\">
                                <p class=\"flex-caption\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li data-thumb=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/6.jpg"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/6.jpg"), "html", null, true);
        echo "\">
                                <p class=\"flex-caption\">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 81
        $this->displayBlock('plus', $context, $blocks);
        // line 83
        echo "    ";
        
        $__internal_cc310b716b0f124c4f7060eb89ea4b4ef6f8342477c998e0262676df190336d6->leave($__internal_cc310b716b0f124c4f7060eb89ea4b4ef6f8342477c998e0262676df190336d6_prof);

        
        $__internal_d211ab9c0bec6cbd3e4f26b3f7942dd6db1f0f4e9123ff3ded36f1ec6a75b2f0->leave($__internal_d211ab9c0bec6cbd3e4f26b3f7942dd6db1f0f4e9123ff3ded36f1ec6a75b2f0_prof);

    }

    // line 81
    public function block_plus($context, array $blocks = array())
    {
        $__internal_48ceffbf436dd8e2bae373fec8cc81f90e1d6b4b19b1eb452b0be216c5ba7b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ceffbf436dd8e2bae373fec8cc81f90e1d6b4b19b1eb452b0be216c5ba7b9d->enter($__internal_48ceffbf436dd8e2bae373fec8cc81f90e1d6b4b19b1eb452b0be216c5ba7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        $__internal_c3a9416f9007671093f3b69d8b57237752f7040d0457020a24442b601381d107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a9416f9007671093f3b69d8b57237752f7040d0457020a24442b601381d107->enter($__internal_c3a9416f9007671093f3b69d8b57237752f7040d0457020a24442b601381d107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "plus"));

        // line 82
        echo "    ";
        
        $__internal_c3a9416f9007671093f3b69d8b57237752f7040d0457020a24442b601381d107->leave($__internal_c3a9416f9007671093f3b69d8b57237752f7040d0457020a24442b601381d107_prof);

        
        $__internal_48ceffbf436dd8e2bae373fec8cc81f90e1d6b4b19b1eb452b0be216c5ba7b9d->leave($__internal_48ceffbf436dd8e2bae373fec8cc81f90e1d6b4b19b1eb452b0be216c5ba7b9d_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 82,  414 => 81,  404 => 83,  402 => 81,  390 => 72,  386 => 71,  380 => 68,  376 => 67,  370 => 64,  366 => 63,  360 => 60,  356 => 59,  348 => 53,  339 => 52,  314 => 196,  307 => 192,  300 => 188,  293 => 184,  274 => 168,  270 => 167,  263 => 163,  256 => 159,  252 => 158,  245 => 154,  238 => 150,  234 => 149,  227 => 145,  220 => 141,  216 => 140,  209 => 136,  194 => 124,  183 => 116,  172 => 108,  161 => 100,  143 => 84,  141 => 52,  138 => 51,  129 => 50,  110 => 40,  107 => 39,  103 => 34,  80 => 13,  71 => 12,  53 => 3,  44 => 2,  11 => 1,);
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
                                    <a href=\"{# {{path('portfolio')}} #}\"><i class=\"icon-camera\"></i><br />Portfolio</a>
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
                            <li data-thumb=\"{{asset('assets/img/slider/1.jpg')}}\">
                                <img src=\"{{asset('assets/img/slider/1.jpg')}}\">
                                <p class=\"flex-caption\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li data-thumb=\"{{asset('assets/img/slider/2.jpg')}}\">
                                <img src=\"{{asset('assets/img/slider/2.jpg')}}\">
                                <p class=\"flex-caption\">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </li>
                            <li data-thumb=\"{{asset('assets/img/slider/5.jpg')}}\">
                                <img src=\"{{asset('assets/img/slider/5.jpg')}}\">
                                <p class=\"flex-caption\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                            </li>
                            <li data-thumb=\"{{asset('assets/img/slider/6.jpg')}}\">
                                <img src=\"{{asset('assets/img/slider/6.jpg')}}\">
                                <p class=\"flex-caption\">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
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
    </div>

    <!-- Services -->
    <div class=\"what-we-do container\">
        <div class=\"row\">
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-eye-open\"></i>
                </div>
                <h4>Beautiful Websites</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"{{asset('services.html')}}\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-table\"></i>
                </div>
                <h4>Responsive Layout</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"{{asset('services.html')}}\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-magic\"></i>
                </div>
                <h4>Awesome Logos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"{{asset('services.html')}}\">Read more</a>
            </div>
            <div class=\"service span3\">
                <div class=\"icon-awesome\">
                    <i class=\"icon-print\"></i>
                </div>
                <h4>High Res Prints</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                <a href=\"{{asset('services.html')}}\">Read more</a>
            </div>
        </div>
    </div>

    <!-- Latest Work -->
    <div class=\"portfolio container\">
        <div class=\"portfolio-title\">
            <h3>Our Latest Work</h3>
        </div>
        <div class=\"row\">
            <div class=\"work span3\">
                <img src=\"{{asset('assets/img/portfolio/work1.jpg')}}\" alt=\"\">
                <h4>Lorem Website</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"{{asset('assets/img/portfolio/work1.jpg')}}\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"{{asset('portfolio.html')}}\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"{{asset('assets/img/portfolio/work2.jpg')}}\" alt=\"\">
                <h4>Ipsum Logo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"{{asset('assets/img/portfolio/work2.jpg')}}\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"{{asset('portfolio.html')}}\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"{{asset('assets/img/portfolio/work3.jpg')}}\" alt=\"\">
                <h4>Dolor Prints</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"{{asset('assets/img/portfolio/work3.jpg')}}\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"{{asset('portfolio.html')}}\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
            <div class=\"work span3\">
                <img src=\"{{asset('assets/img/portfolio/work4.jpg')}}\" alt=\"\">
                <h4>Sit Amet Website</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                <div class=\"icon-awesome\">
                    <a href=\"{{asset('assets/img/portfolio/work4.jpg')}}\" rel=\"prettyPhoto\"><i class=\"icon-search\"></i></a>
                    <a href=\"{{asset('portfolio.html')}}\"><i class=\"icon-link\"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class=\"testimonials container\">
        <div class=\"testimonials-title\">
            <h3>Testimonials</h3>
        </div>
        <div class=\"row\">
            <div class=\"testimonial-list span12\">
                <div class=\"tabbable tabs-below\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"A\">
                            <img src=\"{{asset('assets/img/testimonials/1.jpg')}}\" title=\"\" alt=\"\">
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur...\"<br /><span class=\"violet\">Lorem Ipsum, dolor.co.uk</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"B\">
                            <img src=\"{{asset('assets/img/testimonials/2.jpg')}}\" title=\"\" alt=\"\">
                            <p>\"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat...\"<br /><span class=\"violet\">Minim Veniam, nostrud.com</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"C\">
                            <img src=\"{{asset('assets/img/testimonials/3.jpg')}}\" title=\"\" alt=\"\">
                            <p>\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur...\"<br /><span class=\"violet\">Lorem Ipsum, dolor.co.uk</span></p>
                        </div>
                        <div class=\"tab-pane\" id=\"D\">
                            <img src=\"{{asset('assets/img/testimonials/1.jpg')}}\" title=\"\" alt=\"\">
                            <p>\"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat...\"<br /><span class=\"violet\">Minim Veniam, nostrud.com</span></p>
                        </div>
                    </div>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#A\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#B\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#C\" data-toggle=\"tab\"></a></li>
                        <li class=\"\"><a href=\"#D\" data-toggle=\"tab\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "AKImmobilierBundle:Front:base.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/base.html.twig");
    }
}
