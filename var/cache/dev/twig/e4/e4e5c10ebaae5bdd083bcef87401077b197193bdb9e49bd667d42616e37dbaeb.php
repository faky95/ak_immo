<?php

/* ::layout.html.twig */
class __TwigTemplate_12653917b1c6b145bb3ef58218243f498660f07b891cfcaaaf97129726f179ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_395a848482554a80be33350d5a55c634cca572fc9667337e45d152a0a030c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395a848482554a80be33350d5a55c634cca572fc9667337e45d152a0a030c0a9->enter($__internal_395a848482554a80be33350d5a55c634cca572fc9667337e45d152a0a030c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_65230da5d9a581b3a49de09b7e2152f14b17ec00e407b9348298ba62dfec1be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65230da5d9a581b3a49de09b7e2152f14b17ec00e407b9348298ba62dfec1be0->enter($__internal_65230da5d9a581b3a49de09b7e2152f14b17ec00e407b9348298ba62dfec1be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('styles', $context, $blocks);
        // line 37
        echo "    </head>
    <body>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "    </body>
</html>";
        
        $__internal_395a848482554a80be33350d5a55c634cca572fc9667337e45d152a0a030c0a9->leave($__internal_395a848482554a80be33350d5a55c634cca572fc9667337e45d152a0a030c0a9_prof);

        
        $__internal_65230da5d9a581b3a49de09b7e2152f14b17ec00e407b9348298ba62dfec1be0->leave($__internal_65230da5d9a581b3a49de09b7e2152f14b17ec00e407b9348298ba62dfec1be0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1e8e995aa2551bd1673a0fa7df9ff0b1a2dfd7a82288f0b404ef09bf2a2d241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e8e995aa2551bd1673a0fa7df9ff0b1a2dfd7a82288f0b404ef09bf2a2d241->enter($__internal_a1e8e995aa2551bd1673a0fa7df9ff0b1a2dfd7a82288f0b404ef09bf2a2d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a6b5a94b7b24f45db2646a854018c3dec207dd6bfd7abe6b161278d156deb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6b5a94b7b24f45db2646a854018c3dec207dd6bfd7abe6b161278d156deb42->enter($__internal_6a6b5a94b7b24f45db2646a854018c3dec207dd6bfd7abe6b161278d156deb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_6a6b5a94b7b24f45db2646a854018c3dec207dd6bfd7abe6b161278d156deb42->leave($__internal_6a6b5a94b7b24f45db2646a854018c3dec207dd6bfd7abe6b161278d156deb42_prof);

        
        $__internal_a1e8e995aa2551bd1673a0fa7df9ff0b1a2dfd7a82288f0b404ef09bf2a2d241->leave($__internal_a1e8e995aa2551bd1673a0fa7df9ff0b1a2dfd7a82288f0b404ef09bf2a2d241_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4dd572c8207cad85f32288c168c23cd225daa8007e275bcde920b9e1f8b3c4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd572c8207cad85f32288c168c23cd225daa8007e275bcde920b9e1f8b3c4bb->enter($__internal_4dd572c8207cad85f32288c168c23cd225daa8007e275bcde920b9e1f8b3c4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8bace3d6ee1873c8cc42650b44353845f7736c597b151946beca390ec3ceb175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bace3d6ee1873c8cc42650b44353845f7736c597b151946beca390ec3ceb175->enter($__internal_8bace3d6ee1873c8cc42650b44353845f7736c597b151946beca390ec3ceb175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_8bace3d6ee1873c8cc42650b44353845f7736c597b151946beca390ec3ceb175->leave($__internal_8bace3d6ee1873c8cc42650b44353845f7736c597b151946beca390ec3ceb175_prof);

        
        $__internal_4dd572c8207cad85f32288c168c23cd225daa8007e275bcde920b9e1f8b3c4bb->leave($__internal_4dd572c8207cad85f32288c168c23cd225daa8007e275bcde920b9e1f8b3c4bb_prof);

    }

    // line 35
    public function block_styles($context, array $blocks = array())
    {
        $__internal_30148a6010aa2e87763e8114dd71e562afd40fe4385df3f7e6281e6adf91bf17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30148a6010aa2e87763e8114dd71e562afd40fe4385df3f7e6281e6adf91bf17->enter($__internal_30148a6010aa2e87763e8114dd71e562afd40fe4385df3f7e6281e6adf91bf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_663a713380228585c5fb94d9b589c29a33e15ddf30e891af976100fa1f90e6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663a713380228585c5fb94d9b589c29a33e15ddf30e891af976100fa1f90e6f9->enter($__internal_663a713380228585c5fb94d9b589c29a33e15ddf30e891af976100fa1f90e6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 36
        echo "        ";
        
        $__internal_663a713380228585c5fb94d9b589c29a33e15ddf30e891af976100fa1f90e6f9->leave($__internal_663a713380228585c5fb94d9b589c29a33e15ddf30e891af976100fa1f90e6f9_prof);

        
        $__internal_30148a6010aa2e87763e8114dd71e562afd40fe4385df3f7e6281e6adf91bf17->leave($__internal_30148a6010aa2e87763e8114dd71e562afd40fe4385df3f7e6281e6adf91bf17_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_1acf4340e3938e118df9e68bd724b151c4bc530369e476bdab11251c354bc7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acf4340e3938e118df9e68bd724b151c4bc530369e476bdab11251c354bc7f4->enter($__internal_1acf4340e3938e118df9e68bd724b151c4bc530369e476bdab11251c354bc7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2427b4ec31fa002dcb35d63773b3ff1edfb821dac9e9790733ee22624149b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2427b4ec31fa002dcb35d63773b3ff1edfb821dac9e9790733ee22624149b46->enter($__internal_a2427b4ec31fa002dcb35d63773b3ff1edfb821dac9e9790733ee22624149b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "        <header>
            ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "        </header>
        <div class=\"main\">
        ";
        // line 46
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "        </div>
        <footer>
        ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "        </footer>
        ";
        // line 90
        $this->displayBlock('javascript', $context, $blocks);
        // line 103
        echo "    ";
        
        $__internal_a2427b4ec31fa002dcb35d63773b3ff1edfb821dac9e9790733ee22624149b46->leave($__internal_a2427b4ec31fa002dcb35d63773b3ff1edfb821dac9e9790733ee22624149b46_prof);

        
        $__internal_1acf4340e3938e118df9e68bd724b151c4bc530369e476bdab11251c354bc7f4->leave($__internal_1acf4340e3938e118df9e68bd724b151c4bc530369e476bdab11251c354bc7f4_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_22ed4234a76172f7ec450fd56f493fe9019850b8f8130d07424513148393a406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ed4234a76172f7ec450fd56f493fe9019850b8f8130d07424513148393a406->enter($__internal_22ed4234a76172f7ec450fd56f493fe9019850b8f8130d07424513148393a406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a7f115d327737d6db6175ae8ad9f37f9f530d6c44abe13b69a6f0c2ae404701b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f115d327737d6db6175ae8ad9f37f9f530d6c44abe13b69a6f0c2ae404701b->enter($__internal_a7f115d327737d6db6175ae8ad9f37f9f530d6c44abe13b69a6f0c2ae404701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "
            ";
        
        $__internal_a7f115d327737d6db6175ae8ad9f37f9f530d6c44abe13b69a6f0c2ae404701b->leave($__internal_a7f115d327737d6db6175ae8ad9f37f9f530d6c44abe13b69a6f0c2ae404701b_prof);

        
        $__internal_22ed4234a76172f7ec450fd56f493fe9019850b8f8130d07424513148393a406->leave($__internal_22ed4234a76172f7ec450fd56f493fe9019850b8f8130d07424513148393a406_prof);

    }

    // line 46
    public function block_main($context, array $blocks = array())
    {
        $__internal_00cdd3d41ed0f1626f3888ffe51a007d21d4d8269d7c318c88cdcdd79076ee00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cdd3d41ed0f1626f3888ffe51a007d21d4d8269d7c318c88cdcdd79076ee00->enter($__internal_00cdd3d41ed0f1626f3888ffe51a007d21d4d8269d7c318c88cdcdd79076ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ba2f14b055d6f87e8f25f996917c17f85082b2bc9564784d36a94ca6f4705026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2f14b055d6f87e8f25f996917c17f85082b2bc9564784d36a94ca6f4705026->enter($__internal_ba2f14b055d6f87e8f25f996917c17f85082b2bc9564784d36a94ca6f4705026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 47
        echo "
        ";
        
        $__internal_ba2f14b055d6f87e8f25f996917c17f85082b2bc9564784d36a94ca6f4705026->leave($__internal_ba2f14b055d6f87e8f25f996917c17f85082b2bc9564784d36a94ca6f4705026_prof);

        
        $__internal_00cdd3d41ed0f1626f3888ffe51a007d21d4d8269d7c318c88cdcdd79076ee00->leave($__internal_00cdd3d41ed0f1626f3888ffe51a007d21d4d8269d7c318c88cdcdd79076ee00_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d251e94628faefb464292ccfafe2c965d53376a05a28248936ce8fce5c1ef714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d251e94628faefb464292ccfafe2c965d53376a05a28248936ce8fce5c1ef714->enter($__internal_d251e94628faefb464292ccfafe2c965d53376a05a28248936ce8fce5c1ef714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5d03e222ae098b44917a57208dbb2856cb6de9b03119324b1c2e8e635811f4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d03e222ae098b44917a57208dbb2856cb6de9b03119324b1c2e8e635811f4ba->enter($__internal_5d03e222ae098b44917a57208dbb2856cb6de9b03119324b1c2e8e635811f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"widget span3\">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <p><a href=\"\">Read more...</a></p>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Latest Tweets</h4>
                        <div class=\"show-tweets\"></div>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Flickr Photos</h4>
                        <ul class=\"flickr-feed\"></ul>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Contact Us</h4>
                        <p><i class=\"icon-map-marker\"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                        <p><i class=\"icon-phone\"></i> Phone: 0039 333 12 68 347</p>
                        <p><i class=\"icon-user\"></i> Skype: Andia_Agency</p>
                        <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@andia.co.uk</a></p>
                    </div>
                </div>
                <div class=\"footer-border\"></div>
                <div class=\"row\">
                    <div class=\"copyright span4\">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href=\"http://azmind.com\">Azmind</a>.</p>
                    </div>
                    <div class=\"social span8\">
                        <a class=\"facebook\" href=\"\"></a>
                        <a class=\"dribbble\" href=\"\"></a>
                        <a class=\"twitter\" href=\"\"></a>
                        <a class=\"pinterest\" href=\"\"></a>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_5d03e222ae098b44917a57208dbb2856cb6de9b03119324b1c2e8e635811f4ba->leave($__internal_5d03e222ae098b44917a57208dbb2856cb6de9b03119324b1c2e8e635811f4ba_prof);

        
        $__internal_d251e94628faefb464292ccfafe2c965d53376a05a28248936ce8fce5c1ef714->leave($__internal_d251e94628faefb464292ccfafe2c965d53376a05a28248936ce8fce5c1ef714_prof);

    }

    // line 90
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_faa2efaa28f664ecdbb70209a1ceaae01fe00928531a858f32c5e36ca134abf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa2efaa28f664ecdbb70209a1ceaae01fe00928531a858f32c5e36ca134abf8->enter($__internal_faa2efaa28f664ecdbb70209a1ceaae01fe00928531a858f32c5e36ca134abf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6646b60f480aa2d0988f50bcda9360685804e201035ad28e89911b914b0185f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6646b60f480aa2d0988f50bcda9360685804e201035ad28e89911b914b0185f8->enter($__internal_6646b60f480aa2d0988f50bcda9360685804e201035ad28e89911b914b0185f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 91
        echo "        <!-- Javascript -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6646b60f480aa2d0988f50bcda9360685804e201035ad28e89911b914b0185f8->leave($__internal_6646b60f480aa2d0988f50bcda9360685804e201035ad28e89911b914b0185f8_prof);

        
        $__internal_faa2efaa28f664ecdbb70209a1ceaae01fe00928531a858f32c5e36ca134abf8->leave($__internal_faa2efaa28f664ecdbb70209a1ceaae01fe00928531a858f32c5e36ca134abf8_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  359 => 101,  355 => 100,  351 => 99,  347 => 98,  342 => 96,  338 => 95,  334 => 94,  330 => 93,  326 => 92,  323 => 91,  314 => 90,  268 => 52,  259 => 51,  248 => 47,  239 => 46,  228 => 42,  219 => 41,  209 => 103,  207 => 90,  204 => 89,  202 => 51,  198 => 49,  196 => 46,  192 => 44,  190 => 41,  187 => 40,  178 => 39,  168 => 36,  159 => 35,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  98 => 13,  89 => 12,  78 => 6,  69 => 5,  58 => 104,  56 => 39,  52 => 37,  49 => 35,  47 => 12,  41 => 8,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        {% block title %}
        <title>AK1/2 IMMO</title>
        {% endblock %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        {% block stylesheet %}
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/prettyPhoto/css/prettyPhoto.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/flexslider.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/font-awesome.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"{{asset('assets/ico/favicon.ico')}}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}\">
        {% endblock %}
        {% block styles %}
        {% endblock %}
    </head>
    <body>
    {% block body %}
        <header>
            {% block header %}

            {% endblock %}
        </header>
        <div class=\"main\">
        {% block main %}

        {% endblock %}
        </div>
        <footer>
        {% block footer %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"widget span3\">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <p><a href=\"\">Read more...</a></p>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Latest Tweets</h4>
                        <div class=\"show-tweets\"></div>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Flickr Photos</h4>
                        <ul class=\"flickr-feed\"></ul>
                    </div>
                    <div class=\"widget span3\">
                        <h4>Contact Us</h4>
                        <p><i class=\"icon-map-marker\"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                        <p><i class=\"icon-phone\"></i> Phone: 0039 333 12 68 347</p>
                        <p><i class=\"icon-user\"></i> Skype: Andia_Agency</p>
                        <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@andia.co.uk</a></p>
                    </div>
                </div>
                <div class=\"footer-border\"></div>
                <div class=\"row\">
                    <div class=\"copyright span4\">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href=\"http://azmind.com\">Azmind</a>.</p>
                    </div>
                    <div class=\"social span8\">
                        <a class=\"facebook\" href=\"\"></a>
                        <a class=\"dribbble\" href=\"\"></a>
                        <a class=\"twitter\" href=\"\"></a>
                        <a class=\"pinterest\" href=\"\"></a>
                    </div>
                </div>
            </div>
        {% endblock %}
        </footer>
        {% block javascript %}
        <!-- Javascript -->
        <script src=\"{{asset('assets/js/jquery-1.8.2.min.js')}}\"></script>
        <script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.flexslider.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.tweet.js')}}\"></script>
        <script src=\"{{asset('assets/js/jflickrfeed.js')}}\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"{{asset('assets/js/jquery.ui.map.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.quicksand.js')}}\"></script>
        <script src=\"{{asset('assets/prettyPhoto/js/jquery.prettyPhoto.js')}}\"></script>
        <script src=\"{{asset('assets/js/scripts.js')}}\"></script>
        {% endblock %}
    {% endblock %}
    </body>
</html>", "::layout.html.twig", "/var/www/html/ak_immo/app/Resources/views/layout.html.twig");
    }
}
