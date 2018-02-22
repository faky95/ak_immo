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
        $__internal_ec623a1d240e3f5f5383e1a75fbdba7d22f9f19aac6d21857fca52667bb411ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec623a1d240e3f5f5383e1a75fbdba7d22f9f19aac6d21857fca52667bb411ab->enter($__internal_ec623a1d240e3f5f5383e1a75fbdba7d22f9f19aac6d21857fca52667bb411ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_811ed00b3e1093fcf1fdd415dd34c96388d160b15e00ed9cfa6cc91ac7b42cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811ed00b3e1093fcf1fdd415dd34c96388d160b15e00ed9cfa6cc91ac7b42cbf->enter($__internal_811ed00b3e1093fcf1fdd415dd34c96388d160b15e00ed9cfa6cc91ac7b42cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 37
        echo "        ";
        $this->displayBlock('styles', $context, $blocks);
        // line 39
        echo "    </head>
    <body>
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "    </body>
</html>




";
        
        $__internal_ec623a1d240e3f5f5383e1a75fbdba7d22f9f19aac6d21857fca52667bb411ab->leave($__internal_ec623a1d240e3f5f5383e1a75fbdba7d22f9f19aac6d21857fca52667bb411ab_prof);

        
        $__internal_811ed00b3e1093fcf1fdd415dd34c96388d160b15e00ed9cfa6cc91ac7b42cbf->leave($__internal_811ed00b3e1093fcf1fdd415dd34c96388d160b15e00ed9cfa6cc91ac7b42cbf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_91f3c8bbe8939316dc97a13bf28b7574e068e3a0be7dfffd65ed2e273a4cc16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f3c8bbe8939316dc97a13bf28b7574e068e3a0be7dfffd65ed2e273a4cc16d->enter($__internal_91f3c8bbe8939316dc97a13bf28b7574e068e3a0be7dfffd65ed2e273a4cc16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54f667b01631f2edded62c4fdddd111ed34b82622383fc2296a412bb053088c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f667b01631f2edded62c4fdddd111ed34b82622383fc2296a412bb053088c1->enter($__internal_54f667b01631f2edded62c4fdddd111ed34b82622383fc2296a412bb053088c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_54f667b01631f2edded62c4fdddd111ed34b82622383fc2296a412bb053088c1->leave($__internal_54f667b01631f2edded62c4fdddd111ed34b82622383fc2296a412bb053088c1_prof);

        
        $__internal_91f3c8bbe8939316dc97a13bf28b7574e068e3a0be7dfffd65ed2e273a4cc16d->leave($__internal_91f3c8bbe8939316dc97a13bf28b7574e068e3a0be7dfffd65ed2e273a4cc16d_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2201aac5fae06d9c1021d03c46fee3673e53ca8157ff16f825d78517deb25aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2201aac5fae06d9c1021d03c46fee3673e53ca8157ff16f825d78517deb25aee->enter($__internal_2201aac5fae06d9c1021d03c46fee3673e53ca8157ff16f825d78517deb25aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4f1a37280d9194ea892330220647d23a759fce0a139b7e48f431410456dc4bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1a37280d9194ea892330220647d23a759fce0a139b7e48f431410456dc4bb2->enter($__internal_4f1a37280d9194ea892330220647d23a759fce0a139b7e48f431410456dc4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "        <!-- CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flexslider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_4f1a37280d9194ea892330220647d23a759fce0a139b7e48f431410456dc4bb2->leave($__internal_4f1a37280d9194ea892330220647d23a759fce0a139b7e48f431410456dc4bb2_prof);

        
        $__internal_2201aac5fae06d9c1021d03c46fee3673e53ca8157ff16f825d78517deb25aee->leave($__internal_2201aac5fae06d9c1021d03c46fee3673e53ca8157ff16f825d78517deb25aee_prof);

    }

    // line 37
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d97f875ac611fc031e3f598e502a9dcb169c6705fe8573c62334e777765694d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97f875ac611fc031e3f598e502a9dcb169c6705fe8573c62334e777765694d3->enter($__internal_d97f875ac611fc031e3f598e502a9dcb169c6705fe8573c62334e777765694d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_47c5193c7406fd1110a2a9e9dc27535f35cbdec73764f0564d9ff47294e29f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c5193c7406fd1110a2a9e9dc27535f35cbdec73764f0564d9ff47294e29f87->enter($__internal_47c5193c7406fd1110a2a9e9dc27535f35cbdec73764f0564d9ff47294e29f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 38
        echo "        ";
        
        $__internal_47c5193c7406fd1110a2a9e9dc27535f35cbdec73764f0564d9ff47294e29f87->leave($__internal_47c5193c7406fd1110a2a9e9dc27535f35cbdec73764f0564d9ff47294e29f87_prof);

        
        $__internal_d97f875ac611fc031e3f598e502a9dcb169c6705fe8573c62334e777765694d3->leave($__internal_d97f875ac611fc031e3f598e502a9dcb169c6705fe8573c62334e777765694d3_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7738d434932ea39502738a6def02bdee386bcd169cfefd90ace0fc5f1fcba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7738d434932ea39502738a6def02bdee386bcd169cfefd90ace0fc5f1fcba2->enter($__internal_9c7738d434932ea39502738a6def02bdee386bcd169cfefd90ace0fc5f1fcba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73cd2a8fc6b5a9fc0a774febbebd5959cab81dee2fff80bb290cac75787f0b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cd2a8fc6b5a9fc0a774febbebd5959cab81dee2fff80bb290cac75787f0b1d->enter($__internal_73cd2a8fc6b5a9fc0a774febbebd5959cab81dee2fff80bb290cac75787f0b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <header>
            ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "        </header>
        <div class=\"main\">
        ";
        // line 48
        $this->displayBlock('main', $context, $blocks);
        // line 51
        echo "        </div>
        <footer>
        ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "        </footer>
        ";
        // line 98
        $this->displayBlock('javascript', $context, $blocks);
        // line 112
        echo "    ";
        
        $__internal_73cd2a8fc6b5a9fc0a774febbebd5959cab81dee2fff80bb290cac75787f0b1d->leave($__internal_73cd2a8fc6b5a9fc0a774febbebd5959cab81dee2fff80bb290cac75787f0b1d_prof);

        
        $__internal_9c7738d434932ea39502738a6def02bdee386bcd169cfefd90ace0fc5f1fcba2->leave($__internal_9c7738d434932ea39502738a6def02bdee386bcd169cfefd90ace0fc5f1fcba2_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_325f1a02c4c23daa5ea82ce3c8680a2e6c8221dc22bcae6c3ed5bb224cef7db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325f1a02c4c23daa5ea82ce3c8680a2e6c8221dc22bcae6c3ed5bb224cef7db2->enter($__internal_325f1a02c4c23daa5ea82ce3c8680a2e6c8221dc22bcae6c3ed5bb224cef7db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5c44f515568cef1d4fe2a840bb79f334817587ad8f9578555279b8e6517cc9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c44f515568cef1d4fe2a840bb79f334817587ad8f9578555279b8e6517cc9d5->enter($__internal_5c44f515568cef1d4fe2a840bb79f334817587ad8f9578555279b8e6517cc9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
            ";
        
        $__internal_5c44f515568cef1d4fe2a840bb79f334817587ad8f9578555279b8e6517cc9d5->leave($__internal_5c44f515568cef1d4fe2a840bb79f334817587ad8f9578555279b8e6517cc9d5_prof);

        
        $__internal_325f1a02c4c23daa5ea82ce3c8680a2e6c8221dc22bcae6c3ed5bb224cef7db2->leave($__internal_325f1a02c4c23daa5ea82ce3c8680a2e6c8221dc22bcae6c3ed5bb224cef7db2_prof);

    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a86b4f1d65d9eea8910424e78dd0dab105c56a4dd390500a003f2343bffdab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a86b4f1d65d9eea8910424e78dd0dab105c56a4dd390500a003f2343bffdab6->enter($__internal_6a86b4f1d65d9eea8910424e78dd0dab105c56a4dd390500a003f2343bffdab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5bf37ae1c732689ba9304f8c8e87ef60d26a2a83e10e424cd217afbf17ecafad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf37ae1c732689ba9304f8c8e87ef60d26a2a83e10e424cd217afbf17ecafad->enter($__internal_5bf37ae1c732689ba9304f8c8e87ef60d26a2a83e10e424cd217afbf17ecafad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 49
        echo "
        ";
        
        $__internal_5bf37ae1c732689ba9304f8c8e87ef60d26a2a83e10e424cd217afbf17ecafad->leave($__internal_5bf37ae1c732689ba9304f8c8e87ef60d26a2a83e10e424cd217afbf17ecafad_prof);

        
        $__internal_6a86b4f1d65d9eea8910424e78dd0dab105c56a4dd390500a003f2343bffdab6->leave($__internal_6a86b4f1d65d9eea8910424e78dd0dab105c56a4dd390500a003f2343bffdab6_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c1366203ef7ec245d59f5c0be5656d21a49d2a04d3aacf2d6b027957e3362eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1366203ef7ec245d59f5c0be5656d21a49d2a04d3aacf2d6b027957e3362eec->enter($__internal_c1366203ef7ec245d59f5c0be5656d21a49d2a04d3aacf2d6b027957e3362eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_de4ec6d232a9b32d82ace8452cb2acdfc8d16f5b0f4c7d5298dca2dc7a305b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4ec6d232a9b32d82ace8452cb2acdfc8d16f5b0f4c7d5298dca2dc7a305b05->enter($__internal_de4ec6d232a9b32d82ace8452cb2acdfc8d16f5b0f4c7d5298dca2dc7a305b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span3\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Read more...</a></p>
                    </div>
                    ";
        // line 64
        echo "                    <div class=\"widget span4\">
                         <h4>Nos Partenaires</h4>
                        <ul class=\"flickr\">
                           <li>
                           <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/25.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/6.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 70
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
        
        $__internal_de4ec6d232a9b32d82ace8452cb2acdfc8d16f5b0f4c7d5298dca2dc7a305b05->leave($__internal_de4ec6d232a9b32d82ace8452cb2acdfc8d16f5b0f4c7d5298dca2dc7a305b05_prof);

        
        $__internal_c1366203ef7ec245d59f5c0be5656d21a49d2a04d3aacf2d6b027957e3362eec->leave($__internal_c1366203ef7ec245d59f5c0be5656d21a49d2a04d3aacf2d6b027957e3362eec_prof);

    }

    // line 98
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_20bf386d10e50f62a5277a5f83954f04ce65b8e8760667574a44924ad94c889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bf386d10e50f62a5277a5f83954f04ce65b8e8760667574a44924ad94c889d->enter($__internal_20bf386d10e50f62a5277a5f83954f04ce65b8e8760667574a44924ad94c889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_7caf7c32e331cdbea1097ab510fbfb29429b4db093d7460aaba9490210039cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caf7c32e331cdbea1097ab510fbfb29429b4db093d7460aaba9490210039cad->enter($__internal_7caf7c32e331cdbea1097ab510fbfb29429b4db093d7460aaba9490210039cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 99
        echo "        <!-- Javascript -->
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7caf7c32e331cdbea1097ab510fbfb29429b4db093d7460aaba9490210039cad->leave($__internal_7caf7c32e331cdbea1097ab510fbfb29429b4db093d7460aaba9490210039cad_prof);

        
        $__internal_20bf386d10e50f62a5277a5f83954f04ce65b8e8760667574a44924ad94c889d->leave($__internal_20bf386d10e50f62a5277a5f83954f04ce65b8e8760667574a44924ad94c889d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  380 => 110,  376 => 109,  372 => 108,  368 => 107,  363 => 105,  359 => 104,  355 => 103,  351 => 102,  347 => 101,  343 => 99,  334 => 98,  297 => 70,  293 => 69,  289 => 68,  283 => 64,  275 => 54,  266 => 53,  255 => 49,  246 => 48,  235 => 44,  226 => 43,  216 => 112,  214 => 98,  211 => 97,  209 => 53,  205 => 51,  203 => 48,  199 => 46,  197 => 43,  194 => 42,  185 => 41,  175 => 38,  166 => 37,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  104 => 14,  95 => 13,  84 => 7,  75 => 6,  59 => 113,  57 => 41,  53 => 39,  50 => 37,  48 => 13,  42 => 9,  40 => 6,  33 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
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
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
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
