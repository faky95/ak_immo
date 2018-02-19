<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
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
        $__internal_f52464c39e1071a75799ddc22b428975f15efffc32037e359f9b6a7f0cad4884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52464c39e1071a75799ddc22b428975f15efffc32037e359f9b6a7f0cad4884->enter($__internal_f52464c39e1071a75799ddc22b428975f15efffc32037e359f9b6a7f0cad4884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6374432f1fdccaab19f017d547091b14ff448e42c73b758ea9c08b3710401a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6374432f1fdccaab19f017d547091b14ff448e42c73b758ea9c08b3710401a05->enter($__internal_6374432f1fdccaab19f017d547091b14ff448e42c73b758ea9c08b3710401a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 110
        echo "    </body>
</html>";
        
        $__internal_f52464c39e1071a75799ddc22b428975f15efffc32037e359f9b6a7f0cad4884->leave($__internal_f52464c39e1071a75799ddc22b428975f15efffc32037e359f9b6a7f0cad4884_prof);

        
        $__internal_6374432f1fdccaab19f017d547091b14ff448e42c73b758ea9c08b3710401a05->leave($__internal_6374432f1fdccaab19f017d547091b14ff448e42c73b758ea9c08b3710401a05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e27e8413fc99943014de7fa2f30bf7f49e3549f347b9dc0b45466855db5bae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27e8413fc99943014de7fa2f30bf7f49e3549f347b9dc0b45466855db5bae2a->enter($__internal_e27e8413fc99943014de7fa2f30bf7f49e3549f347b9dc0b45466855db5bae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9708a7ea2634d4acacd05f8b2c1010c8ba8c7e697d0f6b560e8e12d21160cc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9708a7ea2634d4acacd05f8b2c1010c8ba8c7e697d0f6b560e8e12d21160cc3a->enter($__internal_9708a7ea2634d4acacd05f8b2c1010c8ba8c7e697d0f6b560e8e12d21160cc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_9708a7ea2634d4acacd05f8b2c1010c8ba8c7e697d0f6b560e8e12d21160cc3a->leave($__internal_9708a7ea2634d4acacd05f8b2c1010c8ba8c7e697d0f6b560e8e12d21160cc3a_prof);

        
        $__internal_e27e8413fc99943014de7fa2f30bf7f49e3549f347b9dc0b45466855db5bae2a->leave($__internal_e27e8413fc99943014de7fa2f30bf7f49e3549f347b9dc0b45466855db5bae2a_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fb19af63035b9ac6458b5c026b2bfd99bd36118a417519758e6daa276572b15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb19af63035b9ac6458b5c026b2bfd99bd36118a417519758e6daa276572b15d->enter($__internal_fb19af63035b9ac6458b5c026b2bfd99bd36118a417519758e6daa276572b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4abab900c15d925f1312e68b2f7d5e1fee66cd2e4dfee93da1b6b1e046d7f8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abab900c15d925f1312e68b2f7d5e1fee66cd2e4dfee93da1b6b1e046d7f8ca->enter($__internal_4abab900c15d925f1312e68b2f7d5e1fee66cd2e4dfee93da1b6b1e046d7f8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_4abab900c15d925f1312e68b2f7d5e1fee66cd2e4dfee93da1b6b1e046d7f8ca->leave($__internal_4abab900c15d925f1312e68b2f7d5e1fee66cd2e4dfee93da1b6b1e046d7f8ca_prof);

        
        $__internal_fb19af63035b9ac6458b5c026b2bfd99bd36118a417519758e6daa276572b15d->leave($__internal_fb19af63035b9ac6458b5c026b2bfd99bd36118a417519758e6daa276572b15d_prof);

    }

    // line 35
    public function block_styles($context, array $blocks = array())
    {
        $__internal_009dd40325c33929aca85d046f470201c891e76575cc7042440737f18134b3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009dd40325c33929aca85d046f470201c891e76575cc7042440737f18134b3a6->enter($__internal_009dd40325c33929aca85d046f470201c891e76575cc7042440737f18134b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_2d42ce946a0d4d1d09b1828823a320d6316d86cf73f8060c3ae20460b0100d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d42ce946a0d4d1d09b1828823a320d6316d86cf73f8060c3ae20460b0100d25->enter($__internal_2d42ce946a0d4d1d09b1828823a320d6316d86cf73f8060c3ae20460b0100d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 36
        echo "        ";
        
        $__internal_2d42ce946a0d4d1d09b1828823a320d6316d86cf73f8060c3ae20460b0100d25->leave($__internal_2d42ce946a0d4d1d09b1828823a320d6316d86cf73f8060c3ae20460b0100d25_prof);

        
        $__internal_009dd40325c33929aca85d046f470201c891e76575cc7042440737f18134b3a6->leave($__internal_009dd40325c33929aca85d046f470201c891e76575cc7042440737f18134b3a6_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ae1d770a711554d013e7107d5e6f144ce25df3b496207a07d3aebb66361795d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae1d770a711554d013e7107d5e6f144ce25df3b496207a07d3aebb66361795d->enter($__internal_6ae1d770a711554d013e7107d5e6f144ce25df3b496207a07d3aebb66361795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b26b29b3eb02a414b8dbac03b3a5f2c122ee76d611f92385216b855f144471a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b26b29b3eb02a414b8dbac03b3a5f2c122ee76d611f92385216b855f144471a->enter($__internal_4b26b29b3eb02a414b8dbac03b3a5f2c122ee76d611f92385216b855f144471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 95
        echo "        </footer>
        ";
        // line 96
        $this->displayBlock('javascript', $context, $blocks);
        // line 109
        echo "    ";
        
        $__internal_4b26b29b3eb02a414b8dbac03b3a5f2c122ee76d611f92385216b855f144471a->leave($__internal_4b26b29b3eb02a414b8dbac03b3a5f2c122ee76d611f92385216b855f144471a_prof);

        
        $__internal_6ae1d770a711554d013e7107d5e6f144ce25df3b496207a07d3aebb66361795d->leave($__internal_6ae1d770a711554d013e7107d5e6f144ce25df3b496207a07d3aebb66361795d_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_f912083de90ffcd79783ab9750fd315c21ce63cc358de7fe5486a7ec4c355f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f912083de90ffcd79783ab9750fd315c21ce63cc358de7fe5486a7ec4c355f42->enter($__internal_f912083de90ffcd79783ab9750fd315c21ce63cc358de7fe5486a7ec4c355f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8b034544b1aef3bd88cd33f464a738eb8eb37f98d89fac7647842e27c1d272fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b034544b1aef3bd88cd33f464a738eb8eb37f98d89fac7647842e27c1d272fe->enter($__internal_8b034544b1aef3bd88cd33f464a738eb8eb37f98d89fac7647842e27c1d272fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "
            ";
        
        $__internal_8b034544b1aef3bd88cd33f464a738eb8eb37f98d89fac7647842e27c1d272fe->leave($__internal_8b034544b1aef3bd88cd33f464a738eb8eb37f98d89fac7647842e27c1d272fe_prof);

        
        $__internal_f912083de90ffcd79783ab9750fd315c21ce63cc358de7fe5486a7ec4c355f42->leave($__internal_f912083de90ffcd79783ab9750fd315c21ce63cc358de7fe5486a7ec4c355f42_prof);

    }

    // line 46
    public function block_main($context, array $blocks = array())
    {
        $__internal_46b26da751c26c8c274130f6f0a8a078a709184941e48d4669d1704692d65850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b26da751c26c8c274130f6f0a8a078a709184941e48d4669d1704692d65850->enter($__internal_46b26da751c26c8c274130f6f0a8a078a709184941e48d4669d1704692d65850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0da00a9949502a0ecd00c378b17c23e65ccea5711825f6fc9d4efe0eaa1d8319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da00a9949502a0ecd00c378b17c23e65ccea5711825f6fc9d4efe0eaa1d8319->enter($__internal_0da00a9949502a0ecd00c378b17c23e65ccea5711825f6fc9d4efe0eaa1d8319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 47
        echo "
        ";
        
        $__internal_0da00a9949502a0ecd00c378b17c23e65ccea5711825f6fc9d4efe0eaa1d8319->leave($__internal_0da00a9949502a0ecd00c378b17c23e65ccea5711825f6fc9d4efe0eaa1d8319_prof);

        
        $__internal_46b26da751c26c8c274130f6f0a8a078a709184941e48d4669d1704692d65850->leave($__internal_46b26da751c26c8c274130f6f0a8a078a709184941e48d4669d1704692d65850_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_74ec8c98917dc1fe25e9ab0fcd2bd4d823a53cffd6427f6bb5f683fc02bbb41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ec8c98917dc1fe25e9ab0fcd2bd4d823a53cffd6427f6bb5f683fc02bbb41f->enter($__internal_74ec8c98917dc1fe25e9ab0fcd2bd4d823a53cffd6427f6bb5f683fc02bbb41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_abe14d7f0cc27b5ea97659f4a45717a2d998a713965aaf8292a14ee7ae4b322a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe14d7f0cc27b5ea97659f4a45717a2d998a713965aaf8292a14ee7ae4b322a->enter($__internal_abe14d7f0cc27b5ea97659f4a45717a2d998a713965aaf8292a14ee7ae4b322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span3\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Read more...</a></p>
                    </div>
                    ";
        // line 62
        echo "                    <div class=\"widget span4\">
                         <h4>Nos Partenaires</h4>
                        <ul class=\"flickr\">
                           <li>
                           <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/25.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/6.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 68
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
        
        $__internal_abe14d7f0cc27b5ea97659f4a45717a2d998a713965aaf8292a14ee7ae4b322a->leave($__internal_abe14d7f0cc27b5ea97659f4a45717a2d998a713965aaf8292a14ee7ae4b322a_prof);

        
        $__internal_74ec8c98917dc1fe25e9ab0fcd2bd4d823a53cffd6427f6bb5f683fc02bbb41f->leave($__internal_74ec8c98917dc1fe25e9ab0fcd2bd4d823a53cffd6427f6bb5f683fc02bbb41f_prof);

    }

    // line 96
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8df124821921922c0d4a00735ece2cc2206fe99f5456cbcc77354279defeb236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df124821921922c0d4a00735ece2cc2206fe99f5456cbcc77354279defeb236->enter($__internal_8df124821921922c0d4a00735ece2cc2206fe99f5456cbcc77354279defeb236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_8adee3c9cbd9b7dea5f5e4ca0543164ab3805f518baf4fe0247e5526874a55fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adee3c9cbd9b7dea5f5e4ca0543164ab3805f518baf4fe0247e5526874a55fc->enter($__internal_8adee3c9cbd9b7dea5f5e4ca0543164ab3805f518baf4fe0247e5526874a55fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 97
        echo "        <!-- Javascript -->
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8adee3c9cbd9b7dea5f5e4ca0543164ab3805f518baf4fe0247e5526874a55fc->leave($__internal_8adee3c9cbd9b7dea5f5e4ca0543164ab3805f518baf4fe0247e5526874a55fc_prof);

        
        $__internal_8df124821921922c0d4a00735ece2cc2206fe99f5456cbcc77354279defeb236->leave($__internal_8df124821921922c0d4a00735ece2cc2206fe99f5456cbcc77354279defeb236_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  372 => 107,  368 => 106,  364 => 105,  360 => 104,  355 => 102,  351 => 101,  347 => 100,  343 => 99,  339 => 98,  336 => 97,  327 => 96,  290 => 68,  286 => 67,  282 => 66,  276 => 62,  268 => 52,  259 => 51,  248 => 47,  239 => 46,  228 => 42,  219 => 41,  209 => 109,  207 => 96,  204 => 95,  202 => 51,  198 => 49,  196 => 46,  192 => 44,  190 => 41,  187 => 40,  178 => 39,  168 => 36,  159 => 35,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  98 => 13,  89 => 12,  78 => 6,  69 => 5,  58 => 110,  56 => 39,  52 => 37,  49 => 35,  47 => 12,  41 => 8,  39 => 5,  33 => 1,);
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
</html>", "::base.html.twig", "/var/www/html/ak_immo/app/Resources/views/base.html.twig");
    }
}
