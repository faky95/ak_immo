<?php

/* ::base.html.twig */
class __TwigTemplate_de3ef053f5e4f46384fd132374af2848f44da5745704ef2abbaa9b5ec00ab5d1 extends Twig_Template
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
        $__internal_8d30f7a382fe0d90c50a97bd5dd7cf992f1026524f21f1b71a0dea923aa4638b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d30f7a382fe0d90c50a97bd5dd7cf992f1026524f21f1b71a0dea923aa4638b->enter($__internal_8d30f7a382fe0d90c50a97bd5dd7cf992f1026524f21f1b71a0dea923aa4638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_64101b72a71cfcc29e4024a9f76f4caa70e70e80f60c7e40bd9e632b9a2f96a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64101b72a71cfcc29e4024a9f76f4caa70e70e80f60c7e40bd9e632b9a2f96a7->enter($__internal_64101b72a71cfcc29e4024a9f76f4caa70e70e80f60c7e40bd9e632b9a2f96a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8d30f7a382fe0d90c50a97bd5dd7cf992f1026524f21f1b71a0dea923aa4638b->leave($__internal_8d30f7a382fe0d90c50a97bd5dd7cf992f1026524f21f1b71a0dea923aa4638b_prof);

        
        $__internal_64101b72a71cfcc29e4024a9f76f4caa70e70e80f60c7e40bd9e632b9a2f96a7->leave($__internal_64101b72a71cfcc29e4024a9f76f4caa70e70e80f60c7e40bd9e632b9a2f96a7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e25808ca4e1e07d28acb778c36eed389f45d641e88008432d39ca9fb6fe9b2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25808ca4e1e07d28acb778c36eed389f45d641e88008432d39ca9fb6fe9b2c6->enter($__internal_e25808ca4e1e07d28acb778c36eed389f45d641e88008432d39ca9fb6fe9b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_410170e932cb9e4f31d890fcd1c7f4ff16609d67a3e73f0c39e1cb7dd32700b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410170e932cb9e4f31d890fcd1c7f4ff16609d67a3e73f0c39e1cb7dd32700b1->enter($__internal_410170e932cb9e4f31d890fcd1c7f4ff16609d67a3e73f0c39e1cb7dd32700b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_410170e932cb9e4f31d890fcd1c7f4ff16609d67a3e73f0c39e1cb7dd32700b1->leave($__internal_410170e932cb9e4f31d890fcd1c7f4ff16609d67a3e73f0c39e1cb7dd32700b1_prof);

        
        $__internal_e25808ca4e1e07d28acb778c36eed389f45d641e88008432d39ca9fb6fe9b2c6->leave($__internal_e25808ca4e1e07d28acb778c36eed389f45d641e88008432d39ca9fb6fe9b2c6_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_746d7c55a6fba508cae178812d102385f7410780472ac384b4ad13dc6bb56a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746d7c55a6fba508cae178812d102385f7410780472ac384b4ad13dc6bb56a9a->enter($__internal_746d7c55a6fba508cae178812d102385f7410780472ac384b4ad13dc6bb56a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cff0d27acb7ee9b7d68672155d4c0e27af09d02446982cb13b4234b901765770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff0d27acb7ee9b7d68672155d4c0e27af09d02446982cb13b4234b901765770->enter($__internal_cff0d27acb7ee9b7d68672155d4c0e27af09d02446982cb13b4234b901765770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_cff0d27acb7ee9b7d68672155d4c0e27af09d02446982cb13b4234b901765770->leave($__internal_cff0d27acb7ee9b7d68672155d4c0e27af09d02446982cb13b4234b901765770_prof);

        
        $__internal_746d7c55a6fba508cae178812d102385f7410780472ac384b4ad13dc6bb56a9a->leave($__internal_746d7c55a6fba508cae178812d102385f7410780472ac384b4ad13dc6bb56a9a_prof);

    }

    // line 36
    public function block_styles($context, array $blocks = array())
    {
        $__internal_6980b6b5ae89fb9d60d11fe3e62a94cbe3d5ebe8c06b716a0e23537bc9f546a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6980b6b5ae89fb9d60d11fe3e62a94cbe3d5ebe8c06b716a0e23537bc9f546a0->enter($__internal_6980b6b5ae89fb9d60d11fe3e62a94cbe3d5ebe8c06b716a0e23537bc9f546a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_ffe4b7ae8d69c48644491766d6d076ed790b42f52c1c97cf123807fb134ff8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe4b7ae8d69c48644491766d6d076ed790b42f52c1c97cf123807fb134ff8ed->enter($__internal_ffe4b7ae8d69c48644491766d6d076ed790b42f52c1c97cf123807fb134ff8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 37
        echo "        ";
        
        $__internal_ffe4b7ae8d69c48644491766d6d076ed790b42f52c1c97cf123807fb134ff8ed->leave($__internal_ffe4b7ae8d69c48644491766d6d076ed790b42f52c1c97cf123807fb134ff8ed_prof);

        
        $__internal_6980b6b5ae89fb9d60d11fe3e62a94cbe3d5ebe8c06b716a0e23537bc9f546a0->leave($__internal_6980b6b5ae89fb9d60d11fe3e62a94cbe3d5ebe8c06b716a0e23537bc9f546a0_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_058464c993fb1b98a0f12cc7a6a5d7b270c1762cf8fdd431254c107088aad406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058464c993fb1b98a0f12cc7a6a5d7b270c1762cf8fdd431254c107088aad406->enter($__internal_058464c993fb1b98a0f12cc7a6a5d7b270c1762cf8fdd431254c107088aad406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bd1549c38b2062b726bf5fe44b8903dfa824f06d1898b15bf67bcda2ddb4f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd1549c38b2062b726bf5fe44b8903dfa824f06d1898b15bf67bcda2ddb4f52->enter($__internal_4bd1549c38b2062b726bf5fe44b8903dfa824f06d1898b15bf67bcda2ddb4f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4bd1549c38b2062b726bf5fe44b8903dfa824f06d1898b15bf67bcda2ddb4f52->leave($__internal_4bd1549c38b2062b726bf5fe44b8903dfa824f06d1898b15bf67bcda2ddb4f52_prof);

        
        $__internal_058464c993fb1b98a0f12cc7a6a5d7b270c1762cf8fdd431254c107088aad406->leave($__internal_058464c993fb1b98a0f12cc7a6a5d7b270c1762cf8fdd431254c107088aad406_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_974c36596dfd97db4919552ff3b1c2c4ec29d556626300993cc7cf5338ba7e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974c36596dfd97db4919552ff3b1c2c4ec29d556626300993cc7cf5338ba7e07->enter($__internal_974c36596dfd97db4919552ff3b1c2c4ec29d556626300993cc7cf5338ba7e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ae89f9b65957d3d40223a96f21ad187135597aa3c6ef391f01d823b7a555ff03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae89f9b65957d3d40223a96f21ad187135597aa3c6ef391f01d823b7a555ff03->enter($__internal_ae89f9b65957d3d40223a96f21ad187135597aa3c6ef391f01d823b7a555ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
            ";
        
        $__internal_ae89f9b65957d3d40223a96f21ad187135597aa3c6ef391f01d823b7a555ff03->leave($__internal_ae89f9b65957d3d40223a96f21ad187135597aa3c6ef391f01d823b7a555ff03_prof);

        
        $__internal_974c36596dfd97db4919552ff3b1c2c4ec29d556626300993cc7cf5338ba7e07->leave($__internal_974c36596dfd97db4919552ff3b1c2c4ec29d556626300993cc7cf5338ba7e07_prof);

    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        $__internal_89fda60c4c06191daa8721d2df707882a7007b738ae6867bf090cbfd3228801f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fda60c4c06191daa8721d2df707882a7007b738ae6867bf090cbfd3228801f->enter($__internal_89fda60c4c06191daa8721d2df707882a7007b738ae6867bf090cbfd3228801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ef4133a1ac357a872519bef2a2d3ad459c943cf53504f3fd30cc3c3ae286ae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4133a1ac357a872519bef2a2d3ad459c943cf53504f3fd30cc3c3ae286ae93->enter($__internal_ef4133a1ac357a872519bef2a2d3ad459c943cf53504f3fd30cc3c3ae286ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "
        ";
        
        $__internal_ef4133a1ac357a872519bef2a2d3ad459c943cf53504f3fd30cc3c3ae286ae93->leave($__internal_ef4133a1ac357a872519bef2a2d3ad459c943cf53504f3fd30cc3c3ae286ae93_prof);

        
        $__internal_89fda60c4c06191daa8721d2df707882a7007b738ae6867bf090cbfd3228801f->leave($__internal_89fda60c4c06191daa8721d2df707882a7007b738ae6867bf090cbfd3228801f_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c024fa70c30e836f79ae46b73567717e4167223517a8682fdf71fa46040bc033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c024fa70c30e836f79ae46b73567717e4167223517a8682fdf71fa46040bc033->enter($__internal_c024fa70c30e836f79ae46b73567717e4167223517a8682fdf71fa46040bc033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2230699761c2ba3a2e1d3f52226cfa98a548094d316007d31c6bc2169b2183df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2230699761c2ba3a2e1d3f52226cfa98a548094d316007d31c6bc2169b2183df->enter($__internal_2230699761c2ba3a2e1d3f52226cfa98a548094d316007d31c6bc2169b2183df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_2230699761c2ba3a2e1d3f52226cfa98a548094d316007d31c6bc2169b2183df->leave($__internal_2230699761c2ba3a2e1d3f52226cfa98a548094d316007d31c6bc2169b2183df_prof);

        
        $__internal_c024fa70c30e836f79ae46b73567717e4167223517a8682fdf71fa46040bc033->leave($__internal_c024fa70c30e836f79ae46b73567717e4167223517a8682fdf71fa46040bc033_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_735877b7ca550a2816d18a39720ec21b26eeae17b663c795340aa3dbe0d7545a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735877b7ca550a2816d18a39720ec21b26eeae17b663c795340aa3dbe0d7545a->enter($__internal_735877b7ca550a2816d18a39720ec21b26eeae17b663c795340aa3dbe0d7545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3f2acf54117a19afb9728a0b7161e417ffe2dbd9d2a387217c9e6e5fbd7f5c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2acf54117a19afb9728a0b7161e417ffe2dbd9d2a387217c9e6e5fbd7f5c96->enter($__internal_3f2acf54117a19afb9728a0b7161e417ffe2dbd9d2a387217c9e6e5fbd7f5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_3f2acf54117a19afb9728a0b7161e417ffe2dbd9d2a387217c9e6e5fbd7f5c96->leave($__internal_3f2acf54117a19afb9728a0b7161e417ffe2dbd9d2a387217c9e6e5fbd7f5c96_prof);

        
        $__internal_735877b7ca550a2816d18a39720ec21b26eeae17b663c795340aa3dbe0d7545a->leave($__internal_735877b7ca550a2816d18a39720ec21b26eeae17b663c795340aa3dbe0d7545a_prof);

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
