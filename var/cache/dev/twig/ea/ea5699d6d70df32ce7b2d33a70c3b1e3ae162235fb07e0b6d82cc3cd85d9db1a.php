<?php

/* ::base.html.twig */
class __TwigTemplate_ce3c23e395dbedf98b3aba1c3f0ba6197b95b820c3d6153f7951333addcf13d4 extends Twig_Template
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
        $__internal_4d3735e7f857bf48f702877034a08df923cfb40f02cd6ed824c77a8caf1cbafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3735e7f857bf48f702877034a08df923cfb40f02cd6ed824c77a8caf1cbafb->enter($__internal_4d3735e7f857bf48f702877034a08df923cfb40f02cd6ed824c77a8caf1cbafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7e6d5e6897bc91619100d8403c07324d13778bc0658c1c19067f589f849b82ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6d5e6897bc91619100d8403c07324d13778bc0658c1c19067f589f849b82ce->enter($__internal_7e6d5e6897bc91619100d8403c07324d13778bc0658c1c19067f589f849b82ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        ";
        // line 13
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('styles', $context, $blocks);
        // line 38
        echo "    </head>
    <body>
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "    </body>
</html>




";
        
        $__internal_4d3735e7f857bf48f702877034a08df923cfb40f02cd6ed824c77a8caf1cbafb->leave($__internal_4d3735e7f857bf48f702877034a08df923cfb40f02cd6ed824c77a8caf1cbafb_prof);

        
        $__internal_7e6d5e6897bc91619100d8403c07324d13778bc0658c1c19067f589f849b82ce->leave($__internal_7e6d5e6897bc91619100d8403c07324d13778bc0658c1c19067f589f849b82ce_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bb26859eaa305755fe3254e686bbfe59c859f7baa6bb1d55eb013db30c3ff0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb26859eaa305755fe3254e686bbfe59c859f7baa6bb1d55eb013db30c3ff0c->enter($__internal_8bb26859eaa305755fe3254e686bbfe59c859f7baa6bb1d55eb013db30c3ff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54d2a95d8edb7ff0bf6444324245a1e6bb31a5d2308b6b5352c0c36cce9d9f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d2a95d8edb7ff0bf6444324245a1e6bb31a5d2308b6b5352c0c36cce9d9f0e->enter($__internal_54d2a95d8edb7ff0bf6444324245a1e6bb31a5d2308b6b5352c0c36cce9d9f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_54d2a95d8edb7ff0bf6444324245a1e6bb31a5d2308b6b5352c0c36cce9d9f0e->leave($__internal_54d2a95d8edb7ff0bf6444324245a1e6bb31a5d2308b6b5352c0c36cce9d9f0e_prof);

        
        $__internal_8bb26859eaa305755fe3254e686bbfe59c859f7baa6bb1d55eb013db30c3ff0c->leave($__internal_8bb26859eaa305755fe3254e686bbfe59c859f7baa6bb1d55eb013db30c3ff0c_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7c44fda6dddbb8ad009b9ce6dd90f73c4f6293c31b560f4b3eb7e83adcf73cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c44fda6dddbb8ad009b9ce6dd90f73c4f6293c31b560f4b3eb7e83adcf73cb6->enter($__internal_7c44fda6dddbb8ad009b9ce6dd90f73c4f6293c31b560f4b3eb7e83adcf73cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4a0c97a0ae5ed417ba6d13e94b236125265ccc19e75ae7c0d7f01ecb4c05ef6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0c97a0ae5ed417ba6d13e94b236125265ccc19e75ae7c0d7f01ecb4c05ef6b->enter($__internal_4a0c97a0ae5ed417ba6d13e94b236125265ccc19e75ae7c0d7f01ecb4c05ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_4a0c97a0ae5ed417ba6d13e94b236125265ccc19e75ae7c0d7f01ecb4c05ef6b->leave($__internal_4a0c97a0ae5ed417ba6d13e94b236125265ccc19e75ae7c0d7f01ecb4c05ef6b_prof);

        
        $__internal_7c44fda6dddbb8ad009b9ce6dd90f73c4f6293c31b560f4b3eb7e83adcf73cb6->leave($__internal_7c44fda6dddbb8ad009b9ce6dd90f73c4f6293c31b560f4b3eb7e83adcf73cb6_prof);

    }

    // line 36
    public function block_styles($context, array $blocks = array())
    {
        $__internal_66607586492baa0466cce3135a5c2df3bfde534e17317367e07eb0babc6cb482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66607586492baa0466cce3135a5c2df3bfde534e17317367e07eb0babc6cb482->enter($__internal_66607586492baa0466cce3135a5c2df3bfde534e17317367e07eb0babc6cb482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_e741915956cb65a1e31f34921e39f220a2d59fa138ae0266621ccbb1a9559a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e741915956cb65a1e31f34921e39f220a2d59fa138ae0266621ccbb1a9559a65->enter($__internal_e741915956cb65a1e31f34921e39f220a2d59fa138ae0266621ccbb1a9559a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 37
        echo "        ";
        
        $__internal_e741915956cb65a1e31f34921e39f220a2d59fa138ae0266621ccbb1a9559a65->leave($__internal_e741915956cb65a1e31f34921e39f220a2d59fa138ae0266621ccbb1a9559a65_prof);

        
        $__internal_66607586492baa0466cce3135a5c2df3bfde534e17317367e07eb0babc6cb482->leave($__internal_66607586492baa0466cce3135a5c2df3bfde534e17317367e07eb0babc6cb482_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_f673f235ff339b825d1b6397cc79dbbdd4fb0e53db987232e724320e36f58f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f673f235ff339b825d1b6397cc79dbbdd4fb0e53db987232e724320e36f58f10->enter($__internal_f673f235ff339b825d1b6397cc79dbbdd4fb0e53db987232e724320e36f58f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2987fde3edb893560d34c85a33ca5c2638459177f1681e0051ca61b6bf04752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2987fde3edb893560d34c85a33ca5c2638459177f1681e0051ca61b6bf04752b->enter($__internal_2987fde3edb893560d34c85a33ca5c2638459177f1681e0051ca61b6bf04752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        <header>
            ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "        </header>
        <div class=\"main\">
        ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "        </div>
        <footer>
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "        </footer>
        ";
        // line 97
        $this->displayBlock('javascript', $context, $blocks);
        // line 110
        echo "    ";
        
        $__internal_2987fde3edb893560d34c85a33ca5c2638459177f1681e0051ca61b6bf04752b->leave($__internal_2987fde3edb893560d34c85a33ca5c2638459177f1681e0051ca61b6bf04752b_prof);

        
        $__internal_f673f235ff339b825d1b6397cc79dbbdd4fb0e53db987232e724320e36f58f10->leave($__internal_f673f235ff339b825d1b6397cc79dbbdd4fb0e53db987232e724320e36f58f10_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_2bde348a766c8bf01e18e3cb053b59358d58786d5fa8e1e867125480e74d6213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bde348a766c8bf01e18e3cb053b59358d58786d5fa8e1e867125480e74d6213->enter($__internal_2bde348a766c8bf01e18e3cb053b59358d58786d5fa8e1e867125480e74d6213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c0c1c4ca61d426d3343821f1afd93636a650a1354011a31e59959ba6b2b82a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c1c4ca61d426d3343821f1afd93636a650a1354011a31e59959ba6b2b82a9b->enter($__internal_c0c1c4ca61d426d3343821f1afd93636a650a1354011a31e59959ba6b2b82a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
            ";
        
        $__internal_c0c1c4ca61d426d3343821f1afd93636a650a1354011a31e59959ba6b2b82a9b->leave($__internal_c0c1c4ca61d426d3343821f1afd93636a650a1354011a31e59959ba6b2b82a9b_prof);

        
        $__internal_2bde348a766c8bf01e18e3cb053b59358d58786d5fa8e1e867125480e74d6213->leave($__internal_2bde348a766c8bf01e18e3cb053b59358d58786d5fa8e1e867125480e74d6213_prof);

    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1abf8c4f299d4d18744a94b31e5a3c1d0379c446fe54f5a9518636c32e1991d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1abf8c4f299d4d18744a94b31e5a3c1d0379c446fe54f5a9518636c32e1991d->enter($__internal_f1abf8c4f299d4d18744a94b31e5a3c1d0379c446fe54f5a9518636c32e1991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c89710aa7781eb81ee6b5eca82a1aca624e9a5410f9f89a770fa6789209775aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89710aa7781eb81ee6b5eca82a1aca624e9a5410f9f89a770fa6789209775aa->enter($__internal_c89710aa7781eb81ee6b5eca82a1aca624e9a5410f9f89a770fa6789209775aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "
        ";
        
        $__internal_c89710aa7781eb81ee6b5eca82a1aca624e9a5410f9f89a770fa6789209775aa->leave($__internal_c89710aa7781eb81ee6b5eca82a1aca624e9a5410f9f89a770fa6789209775aa_prof);

        
        $__internal_f1abf8c4f299d4d18744a94b31e5a3c1d0379c446fe54f5a9518636c32e1991d->leave($__internal_f1abf8c4f299d4d18744a94b31e5a3c1d0379c446fe54f5a9518636c32e1991d_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d55d5fcf9c67af127a87ef080524669b7450cc406d7647b0e2a78ab957d143b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55d5fcf9c67af127a87ef080524669b7450cc406d7647b0e2a78ab957d143b4->enter($__internal_d55d5fcf9c67af127a87ef080524669b7450cc406d7647b0e2a78ab957d143b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d661082998d277cb324ecadec160af5fb8d5891c89fff6824e84e0917905e377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d661082998d277cb324ecadec160af5fb8d5891c89fff6824e84e0917905e377->enter($__internal_d661082998d277cb324ecadec160af5fb8d5891c89fff6824e84e0917905e377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span3\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Read more...</a></p>
                    </div>
                    ";
        // line 63
        echo "                    <div class=\"widget span4\">
                         <h4>Nos Partenaires</h4>
                        <ul class=\"flickr\">
                           <li>
                           <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/25.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/6.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/9.jpeg"), "html", null, true);
        echo "\" style=\"height:50px\">
                           </li>
                        </ul>
                    </div> 
                    <div class=\"widget span3\">
                        <h4>Contacter Nous</h4>
                        <p><i class=\"icon-map-marker\"></i> Address: Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)</p>
                        <p><i class=\"icon-phone\"></i> Phone: 77 147 33 49</p>
                        <p><i class=\"icon-user\"></i> Skype: Ak_immo</p>
                        <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@akimmo.co.uk</a></p>
                    </div>
                </div>
                <div class=\"footer-border\"></div>
                <div class=\"row\">
                    <div class=\"copyright span4\">
                        <p>Copyright 2017 Ak1/2 Immo - All rights reserved. Location by <a href=\"http://azmind.com\">AKIMMO</a>.</p>
                    </div>
                    <div class=\"social span8\">
                        <a class=\"facebook\" href=\"\"></a>
                        <a class=\"dribbble\" href=\"\"></a>
                        <a class=\"twitter\" href=\"\"></a>
                        <a class=\"pinterest\" href=\"\"></a>
                    </div>
                </div>
             </div>
            </div>
        ";
        
        $__internal_d661082998d277cb324ecadec160af5fb8d5891c89fff6824e84e0917905e377->leave($__internal_d661082998d277cb324ecadec160af5fb8d5891c89fff6824e84e0917905e377_prof);

        
        $__internal_d55d5fcf9c67af127a87ef080524669b7450cc406d7647b0e2a78ab957d143b4->leave($__internal_d55d5fcf9c67af127a87ef080524669b7450cc406d7647b0e2a78ab957d143b4_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a47b37b97df3b25ed8de755957302536ccf33bd4b5244b2add369a93bfb4001a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47b37b97df3b25ed8de755957302536ccf33bd4b5244b2add369a93bfb4001a->enter($__internal_a47b37b97df3b25ed8de755957302536ccf33bd4b5244b2add369a93bfb4001a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f4af7ad71c9c8c3606d8c5d25fea0932919e2ba44a2bcf4bac543ec61742ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4af7ad71c9c8c3606d8c5d25fea0932919e2ba44a2bcf4bac543ec61742ec42->enter($__internal_f4af7ad71c9c8c3606d8c5d25fea0932919e2ba44a2bcf4bac543ec61742ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 98
        echo "        <!-- Javascript -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f4af7ad71c9c8c3606d8c5d25fea0932919e2ba44a2bcf4bac543ec61742ec42->leave($__internal_f4af7ad71c9c8c3606d8c5d25fea0932919e2ba44a2bcf4bac543ec61742ec42_prof);

        
        $__internal_a47b37b97df3b25ed8de755957302536ccf33bd4b5244b2add369a93bfb4001a->leave($__internal_a47b37b97df3b25ed8de755957302536ccf33bd4b5244b2add369a93bfb4001a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  378 => 108,  374 => 107,  370 => 106,  366 => 105,  361 => 103,  357 => 102,  353 => 101,  349 => 100,  345 => 99,  342 => 98,  333 => 97,  296 => 69,  292 => 68,  288 => 67,  282 => 63,  274 => 53,  265 => 52,  254 => 48,  245 => 47,  234 => 43,  225 => 42,  215 => 110,  213 => 97,  210 => 96,  208 => 52,  204 => 50,  202 => 47,  198 => 45,  196 => 42,  193 => 41,  184 => 40,  174 => 37,  165 => 36,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  104 => 14,  95 => 13,  84 => 7,  75 => 6,  59 => 111,  57 => 40,  53 => 38,  50 => 36,  48 => 13,  42 => 9,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
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
            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span3\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Read more...</a></p>
                    </div>
                    {# <div class=\"widget span3\">
                        <h4>Latest Tweets</h4>
                        <div class=\"show-tweets\"></div>
                    </div> #}
                    <div class=\"widget span4\">
                         <h4>Nos Partenaires</h4>
                        <ul class=\"flickr\">
                           <li>
                           <img src=\"{{asset('assets/img/photo/25.png')}}\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"{{asset('assets/img/photo/6.png')}}\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"{{asset('assets/img/photo/9.jpeg')}}\" style=\"height:50px\">
                           </li>
                        </ul>
                    </div> 
                    <div class=\"widget span3\">
                        <h4>Contacter Nous</h4>
                        <p><i class=\"icon-map-marker\"></i> Address: Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)</p>
                        <p><i class=\"icon-phone\"></i> Phone: 77 147 33 49</p>
                        <p><i class=\"icon-user\"></i> Skype: Ak_immo</p>
                        <p><i class=\"icon-envelope-alt\"></i> Email: <a href=\"\">contact@akimmo.co.uk</a></p>
                    </div>
                </div>
                <div class=\"footer-border\"></div>
                <div class=\"row\">
                    <div class=\"copyright span4\">
                        <p>Copyright 2017 Ak1/2 Immo - All rights reserved. Location by <a href=\"http://azmind.com\">AKIMMO</a>.</p>
                    </div>
                    <div class=\"social span8\">
                        <a class=\"facebook\" href=\"\"></a>
                        <a class=\"dribbble\" href=\"\"></a>
                        <a class=\"twitter\" href=\"\"></a>
                        <a class=\"pinterest\" href=\"\"></a>
                    </div>
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
</html>




", "::base.html.twig", "/var/www/html/ak_immo/app/Resources/views/base.html.twig");
    }
}
