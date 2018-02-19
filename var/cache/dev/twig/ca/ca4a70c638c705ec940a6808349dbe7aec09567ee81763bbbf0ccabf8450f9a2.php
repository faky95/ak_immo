<?php

/* @AKImmobilier/layout.html.twig */
class __TwigTemplate_88c7b77fb7b4d431bc00154dcd5a5cd432d473149ed2cec714710fd9d90eb789 extends Twig_Template
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
        $__internal_5e82a9d8ed56db6c1b54ea326eb67740f17e2752442c85804cdd41b41b12b08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e82a9d8ed56db6c1b54ea326eb67740f17e2752442c85804cdd41b41b12b08c->enter($__internal_5e82a9d8ed56db6c1b54ea326eb67740f17e2752442c85804cdd41b41b12b08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AKImmobilier/layout.html.twig"));

        $__internal_2fd346a769b6eefdce206b977c98e3303905d1e55f661f024af975bd01556046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd346a769b6eefdce206b977c98e3303905d1e55f661f024af975bd01556046->enter($__internal_2fd346a769b6eefdce206b977c98e3303905d1e55f661f024af975bd01556046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AKImmobilier/layout.html.twig"));

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
        // line 145
        echo "    </body>
</html>";
        
        $__internal_5e82a9d8ed56db6c1b54ea326eb67740f17e2752442c85804cdd41b41b12b08c->leave($__internal_5e82a9d8ed56db6c1b54ea326eb67740f17e2752442c85804cdd41b41b12b08c_prof);

        
        $__internal_2fd346a769b6eefdce206b977c98e3303905d1e55f661f024af975bd01556046->leave($__internal_2fd346a769b6eefdce206b977c98e3303905d1e55f661f024af975bd01556046_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dab7978cfd23c488a67603eb5f4655e24094c2a1710d2f6cb72e80269b6f8cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab7978cfd23c488a67603eb5f4655e24094c2a1710d2f6cb72e80269b6f8cd3->enter($__internal_dab7978cfd23c488a67603eb5f4655e24094c2a1710d2f6cb72e80269b6f8cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b18785d7f10ae6e9df1aa0d22608edd709de1cb42aa2735732b33691db084d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b18785d7f10ae6e9df1aa0d22608edd709de1cb42aa2735732b33691db084d1->enter($__internal_9b18785d7f10ae6e9df1aa0d22608edd709de1cb42aa2735732b33691db084d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        <title>AK1/2 IMMO</title>
        ";
        
        $__internal_9b18785d7f10ae6e9df1aa0d22608edd709de1cb42aa2735732b33691db084d1->leave($__internal_9b18785d7f10ae6e9df1aa0d22608edd709de1cb42aa2735732b33691db084d1_prof);

        
        $__internal_dab7978cfd23c488a67603eb5f4655e24094c2a1710d2f6cb72e80269b6f8cd3->leave($__internal_dab7978cfd23c488a67603eb5f4655e24094c2a1710d2f6cb72e80269b6f8cd3_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b2720ea72c7938e6581612c9f527cfcc540cdccf44d889f3645d6f6560e9d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2720ea72c7938e6581612c9f527cfcc540cdccf44d889f3645d6f6560e9d487->enter($__internal_b2720ea72c7938e6581612c9f527cfcc540cdccf44d889f3645d6f6560e9d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_11ed13a9df7ac1a300aedb2b53b281c79fca0d45591d7fbfcd736d574cb67260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ed13a9df7ac1a300aedb2b53b281c79fca0d45591d7fbfcd736d574cb67260->enter($__internal_11ed13a9df7ac1a300aedb2b53b281c79fca0d45591d7fbfcd736d574cb67260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_11ed13a9df7ac1a300aedb2b53b281c79fca0d45591d7fbfcd736d574cb67260->leave($__internal_11ed13a9df7ac1a300aedb2b53b281c79fca0d45591d7fbfcd736d574cb67260_prof);

        
        $__internal_b2720ea72c7938e6581612c9f527cfcc540cdccf44d889f3645d6f6560e9d487->leave($__internal_b2720ea72c7938e6581612c9f527cfcc540cdccf44d889f3645d6f6560e9d487_prof);

    }

    // line 35
    public function block_styles($context, array $blocks = array())
    {
        $__internal_dafbaf469b75833128cc10ce14042b232eaa10ca6c86870a730b34043eb5c774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafbaf469b75833128cc10ce14042b232eaa10ca6c86870a730b34043eb5c774->enter($__internal_dafbaf469b75833128cc10ce14042b232eaa10ca6c86870a730b34043eb5c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_158815596be7dd99c0097879975c25b305b1868775d4f1ea1758af9fa62eb938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158815596be7dd99c0097879975c25b305b1868775d4f1ea1758af9fa62eb938->enter($__internal_158815596be7dd99c0097879975c25b305b1868775d4f1ea1758af9fa62eb938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 36
        echo "        ";
        
        $__internal_158815596be7dd99c0097879975c25b305b1868775d4f1ea1758af9fa62eb938->leave($__internal_158815596be7dd99c0097879975c25b305b1868775d4f1ea1758af9fa62eb938_prof);

        
        $__internal_dafbaf469b75833128cc10ce14042b232eaa10ca6c86870a730b34043eb5c774->leave($__internal_dafbaf469b75833128cc10ce14042b232eaa10ca6c86870a730b34043eb5c774_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5a11da6f18c5d80f49acfc736c936bf6fe7ef072a118b98223611a4a5c7046c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a11da6f18c5d80f49acfc736c936bf6fe7ef072a118b98223611a4a5c7046c->enter($__internal_b5a11da6f18c5d80f49acfc736c936bf6fe7ef072a118b98223611a4a5c7046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_301a3a300232ac5aa46f5456c81d997a928d4ec31eb9d74e5359e73a55412c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301a3a300232ac5aa46f5456c81d997a928d4ec31eb9d74e5359e73a55412c1c->enter($__internal_301a3a300232ac5aa46f5456c81d997a928d4ec31eb9d74e5359e73a55412c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "        <header>
            ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "        </header>
        <div class=\"main\">
        ";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "        </div>
        <footer>
        ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "        </footer>
        ";
        // line 131
        $this->displayBlock('javascript', $context, $blocks);
        // line 144
        echo "    ";
        
        $__internal_301a3a300232ac5aa46f5456c81d997a928d4ec31eb9d74e5359e73a55412c1c->leave($__internal_301a3a300232ac5aa46f5456c81d997a928d4ec31eb9d74e5359e73a55412c1c_prof);

        
        $__internal_b5a11da6f18c5d80f49acfc736c936bf6fe7ef072a118b98223611a4a5c7046c->leave($__internal_b5a11da6f18c5d80f49acfc736c936bf6fe7ef072a118b98223611a4a5c7046c_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_183de57e56e4fd926ef4f8bddcb40aa593b57cf1c9a4a0b07eb35544c3f3abcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183de57e56e4fd926ef4f8bddcb40aa593b57cf1c9a4a0b07eb35544c3f3abcb->enter($__internal_183de57e56e4fd926ef4f8bddcb40aa593b57cf1c9a4a0b07eb35544c3f3abcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aa515c61d0b1ad6d637fd3474b92c658f4e1a6fbfe18e1fd2690e17e274cb15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa515c61d0b1ad6d637fd3474b92c658f4e1a6fbfe18e1fd2690e17e274cb15b->enter($__internal_aa515c61d0b1ad6d637fd3474b92c658f4e1a6fbfe18e1fd2690e17e274cb15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
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
        // line 68
        echo "                                    <li>
                                    <a href=\"";
        // line 69
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
        
        $__internal_aa515c61d0b1ad6d637fd3474b92c658f4e1a6fbfe18e1fd2690e17e274cb15b->leave($__internal_aa515c61d0b1ad6d637fd3474b92c658f4e1a6fbfe18e1fd2690e17e274cb15b_prof);

        
        $__internal_183de57e56e4fd926ef4f8bddcb40aa593b57cf1c9a4a0b07eb35544c3f3abcb->leave($__internal_183de57e56e4fd926ef4f8bddcb40aa593b57cf1c9a4a0b07eb35544c3f3abcb_prof);

    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        $__internal_d43c45ea19b46f25882e132d13355435999ad5e80c2aba4fc5fa74958a821ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43c45ea19b46f25882e132d13355435999ad5e80c2aba4fc5fa74958a821ec3->enter($__internal_d43c45ea19b46f25882e132d13355435999ad5e80c2aba4fc5fa74958a821ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c443218cf6d06f51c108349ee48e7cbac26dbb952d92c292e87a3bed837e9148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c443218cf6d06f51c108349ee48e7cbac26dbb952d92c292e87a3bed837e9148->enter($__internal_c443218cf6d06f51c108349ee48e7cbac26dbb952d92c292e87a3bed837e9148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 82
        echo "
        ";
        
        $__internal_c443218cf6d06f51c108349ee48e7cbac26dbb952d92c292e87a3bed837e9148->leave($__internal_c443218cf6d06f51c108349ee48e7cbac26dbb952d92c292e87a3bed837e9148_prof);

        
        $__internal_d43c45ea19b46f25882e132d13355435999ad5e80c2aba4fc5fa74958a821ec3->leave($__internal_d43c45ea19b46f25882e132d13355435999ad5e80c2aba4fc5fa74958a821ec3_prof);

    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0ad6879629e1d8a42f67e327a6a490af8a723a5067ef09146ed69628fdb1e1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad6879629e1d8a42f67e327a6a490af8a723a5067ef09146ed69628fdb1e1e6->enter($__internal_0ad6879629e1d8a42f67e327a6a490af8a723a5067ef09146ed69628fdb1e1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_043ee2af1b0adfd1e6f7c1a0637118709081abd95c49089cae515c1ee06f0fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043ee2af1b0adfd1e6f7c1a0637118709081abd95c49089cae515c1ee06f0fc8->enter($__internal_043ee2af1b0adfd1e6f7c1a0637118709081abd95c49089cae515c1ee06f0fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 87
        echo "            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span4\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Lire plus...</a></p>
                    </div>
                    ";
        // line 97
        echo "                    <div class=\"widget span4\">
                         <h4>Nos Partenaires</h4>
                        <ul class=\"flickr\">
                           <li>
                           <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/25.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/6.png"), "html", null, true);
        echo "\" style=\"height:50px\">&nbsp;&nbsp;
                           <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/photo/9.jpeg"), "html", null, true);
        echo "\" style=\"height:50px\">
                           </li>
                        </ul>
                    </div> 
                    <div class=\"widget span4\">
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
        
        $__internal_043ee2af1b0adfd1e6f7c1a0637118709081abd95c49089cae515c1ee06f0fc8->leave($__internal_043ee2af1b0adfd1e6f7c1a0637118709081abd95c49089cae515c1ee06f0fc8_prof);

        
        $__internal_0ad6879629e1d8a42f67e327a6a490af8a723a5067ef09146ed69628fdb1e1e6->leave($__internal_0ad6879629e1d8a42f67e327a6a490af8a723a5067ef09146ed69628fdb1e1e6_prof);

    }

    // line 131
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dea3b7bcdfdfae2c1f486fbf6065770adda19045050841ca2debae2be605720d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea3b7bcdfdfae2c1f486fbf6065770adda19045050841ca2debae2be605720d->enter($__internal_dea3b7bcdfdfae2c1f486fbf6065770adda19045050841ca2debae2be605720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f51f85f5f523c9afdb2b2ff62d1be227f94235bef08cb8804f024df5cdd561ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51f85f5f523c9afdb2b2ff62d1be227f94235bef08cb8804f024df5cdd561ff->enter($__internal_f51f85f5f523c9afdb2b2ff62d1be227f94235bef08cb8804f024df5cdd561ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 132
        echo "        <!-- Javascript -->
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jflickrfeed.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.map.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.quicksand.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f51f85f5f523c9afdb2b2ff62d1be227f94235bef08cb8804f024df5cdd561ff->leave($__internal_f51f85f5f523c9afdb2b2ff62d1be227f94235bef08cb8804f024df5cdd561ff_prof);

        
        $__internal_dea3b7bcdfdfae2c1f486fbf6065770adda19045050841ca2debae2be605720d->leave($__internal_dea3b7bcdfdfae2c1f486fbf6065770adda19045050841ca2debae2be605720d_prof);

    }

    public function getTemplateName()
    {
        return "@AKImmobilier/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  408 => 142,  404 => 141,  400 => 140,  396 => 139,  391 => 137,  387 => 136,  383 => 135,  379 => 134,  375 => 133,  372 => 132,  363 => 131,  326 => 103,  322 => 102,  318 => 101,  312 => 97,  304 => 87,  295 => 86,  284 => 82,  275 => 81,  256 => 69,  253 => 68,  228 => 42,  219 => 41,  209 => 144,  207 => 131,  204 => 130,  202 => 86,  198 => 84,  196 => 81,  192 => 79,  190 => 41,  187 => 40,  178 => 39,  168 => 36,  159 => 35,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  98 => 13,  89 => 12,  78 => 6,  69 => 5,  58 => 145,  56 => 39,  52 => 37,  49 => 35,  47 => 12,  41 => 8,  39 => 5,  33 => 1,);
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
        </header>
        <div class=\"main\">
        {% block main %}

        {% endblock %}
        </div>
        <footer>
        {% block footer %}
            <div class=\"container\"i_,>
                <div class=\"row\" style=\"background-color:lightgray\">
                    <div class=\"widget span4\">
                        <h4>Address</h4>
                        <p>Centre ville Rue 3 Berranger Ferraud (Dakar/Senegal)<p><a href=\"\">Lire plus...</a></p>
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
                    <div class=\"widget span4\">
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
</html>", "@AKImmobilier/layout.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/layout.html.twig");
    }
}
