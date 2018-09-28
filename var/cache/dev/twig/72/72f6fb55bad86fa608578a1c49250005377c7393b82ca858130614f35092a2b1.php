<?php

/* base.html.twig */
class __TwigTemplate_cdb1ec8b26dc1b8ad488ecf2082b63ceb3d33691b2a72bbeb1832e6d02b07f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body1' => array($this, 'block_body1'),
            'javascripts' => array($this, 'block_javascripts'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/Pharmacity.svg"), "html", null, true);
        echo "\" type=\"image/png\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>
<header class=\"header_area\">
    <div class=\"main_menu\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
                <div class=\"container\">
                <a class=\"navbar-brand logo_h\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/Pharmacity.svg"), "html", null, true);
        echo "\"  alt=\"logo\" class=\"logo-name\"></a>
                    ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#user\" aria-controls=\"user\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        ";
            // line 29
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "media", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "media", array())))) {
                // line 30
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "media", array()), "path", array())), "html", null, true);
                echo "\" class=\"picture-user\" alt=\"user\">
                        ";
            } else {
                // line 32
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/picture_user/default_picture.png"), "html", null, true);
                echo "\" class=\"picture-user\" alt=\"user\">
                        ";
            }
            // line 34
            echo "                    </button>
                    ";
        } else {
            // line 36
            echo "                    <button class=\"navbar-toggler\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"connection-inscription\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"connection-inscription\">Insciption</a>
                    </button>
                    ";
        }
        // line 41
        echo "                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                    ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                    <div class=\"collapse navbar-collapse offset visibility-menu-user-in-small-screen\" id=\"user\">
                        <ul class=\"nav navbar-nav  menu_nav ml-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_patient");
            echo "\">Fiche Médical</a></li>
                            ";
            // line 51
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 52
                echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_doctor");
                echo "\">PROFIL DOCTEUR</a></li>
                            ";
            }
            // line 54
            echo "                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
                // line 55
                echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_pharmacy");
                echo "\">PROFIL PHARMACY</a></li>
                            ";
            }
            // line 57
            echo "                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
                // line 58
                echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_pharmacy");
                echo "\">GERER VOTRE STOCK</a></li>
                            ";
            }
            // line 60
            echo "                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPPLIER")) {
                // line 61
                echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_supplier");
                echo "\">GERER VOTRE STOCK</a></li>
                            ";
            }
            // line 63
            echo "                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPPLIER")) {
                // line 64
                echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_supplier");
                echo "\">PROFIL FOURNISSEUR</a></li>
                            ";
            }
            // line 66
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_media_patient");
            echo "\">Changer l'image</a></li>
                            <li class=\"nav-item\"><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"nav-link\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>

                        </ul>
                    </div>
                    ";
        }
        // line 73
        echo "                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse col-lg-7\" id=\"navbarSupportedContent\">
                    <ul class=\"nav navbar-nav menu_nav ml-auto\">
                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                        ";
        // line 77
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 78
            echo "                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_prescription_patient");
            echo "\">Mes Consultations</a></li>
                        ";
        }
        // line 80
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 81
            echo "



                            <li class=\"nav-item submenu dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestion des ordonnances</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_prescription");
            echo "\">Ajouter une ordonnances</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_prescription_doctor");
            echo "\">Liste des Ordonnances</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 93
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
            // line 94
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_priscription_pharmacy");
            echo "\">Liste des Ordonnances</a></li>
                        ";
        }
        // line 96
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
            // line 97
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_Order_supplier");
            echo "\">Commander</a></li>
                        ";
        }
        // line 99
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPPLIER")) {
            // line 100
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_order_supplier");
            echo "\">Liste des commandes</a></li>
                        ";
        }
        // line 102
        echo "
                    </ul>
                </div>

                    ";
        // line 106
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 107
            echo "                    <div class=\"visibility-menu-user-in-big-screen\">
                        <div class=\"collapse navbar-collapse offset col-lg-3\">
                            <ul class=\"nav navbar-nav menu_nav ml-auto\">
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ";
            // line 112
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "media", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "media", array())))) {
                // line 113
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "media", array()), "path", array())), "html", null, true);
                echo "\" class=\"picture-user\" alt=\"user\">
                                        ";
            } else {
                // line 115
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/picture_user/default_picture.png"), "html", null, true);
                echo "\" class=\"picture-user\" alt=\"user\">
                                        ";
            }
            // line 117
            echo "                                    </a>
                                    <ul class=\"nav navbar-nav  menu_nav ml-auto\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_patient");
            echo "\">Fiche Médical</a></li>
                                        ";
            // line 121
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 122
                echo "                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_doctor");
                echo "\">PROFIL DOCTEUR</a></li>
                                        ";
            }
            // line 124
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
                // line 125
                echo "                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_pharmacy");
                echo "\">PROFIL PHARMACY</a></li>
                                        ";
            }
            // line 127
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PHARMACY")) {
                // line 128
                echo "                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_pharmacy");
                echo "\">GERER VOTRE STOCK</a></li>
                                        ";
            }
            // line 130
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPPLIER")) {
                // line 131
                echo "                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_supplier");
                echo "\">GERER VOTRE STOCK</a></li>
                                        ";
            }
            // line 133
            echo "                                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPPLIER")) {
                // line 134
                echo "                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_info_supplier");
                echo "\">PROFIL FOURNISSEUR</a></li>
                                        ";
            }
            // line 136
            echo "                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_media_patient");
            echo "\">Changer l'image</a></li>
                                        <li class=\"nav-item\"><a href=\"";
            // line 138
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"nav-link\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    ";
        } else {
            // line 145
            echo "                    <div class=\"visibility-menu-user-in-big-screen col-lg-3\">
                            <a href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"connection-inscription\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"connection-inscription\">Insciption</a>
                    ";
        }
        // line 149
        echo "                    </div>
            </div>
        </nav>
    </div>
</header>

<div class=\"height-body\">
<div class=\"container-fluid content-body\">

    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 159
            echo "    <div class='modal fade modal-message-flash' id='modal-infos' data-backdrop='false'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <button type='button' class='close' data-dismiss='modal'>x</button>
                    <h3 class='modal-title title-message-error' style=\"color: #551a8b\">";
            // line 164
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h3>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "    ";
        $this->displayBlock('body1', $context, $blocks);
        // line 215
        echo "</div>
</div>
<footer class=\"footer-area p_120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget ab_wd\">
                    <h6 class=\"footer_title\">A propos de nous</h6>
                    <p>
                        Nous sommes une équipe passionnée de jeunes développeurs qui tentent de trouver des solutions au système de santé en Tunisie. Nous espérons réussir avec ce projet appelé Pharmacity pour atteindre ce succès..</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget contact_wd\">
                    <h6 class=\"footer_title\">Contactez nous</h6>
                    <p>Les berges de lac 1 Tunis-Tunisie</p>
                    <a href=\"tel:01265325689746\">+216-92 421 045</a>
                    ";
        // line 233
        echo "                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 col-sm-6 offset-lg-1\">
                <div class=\"single-footer-widget\">
                    <div class=\"row footer-bottom d-flex justify-content-between align-items-center\">
                    <div class=\"footer-social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</footer>
";
        // line 254
        $this->displayBlock('javascripts', $context, $blocks);
        // line 263
        $this->displayBlock('js', $context, $blocks);
        // line 265
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PHARMACITY";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/vendors/linericon/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/responsive.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_body1($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body1"));

        // line 171
        echo "    <section class=\"home_banner_area\">
        <div class=\"banner_inner d-flex align-items-center\">
            <div class=\"overlay bg-parallax\" data-stellar-ratio=\"0.9\" data-stellar-vertical-offset=\"0\" data-background=\"\"></div>
            <div class=\"container\">
                <div class=\"banner_content text-center\">
                    <h3><div class=\"MyTitle\">CONSULTEZ VOTRE <span>PHARMACIE</span></div></h3>
                    <p style=\"color: whitesmoke;font-size: 20px\" class=\"desc_title\">Achetez vos médicaments et consultez votre médecin préféré via notre site Web.</p>
                    <a class=\"black_btn\" href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go_to_view");
        echo "\">Commencer</a>
                </div>
            </div>
        </div>
    </section>

<section class=\"feature_area p_120\">
    <div class=\"container\">
        <div class=\"main_title\">
            <h2>Qu'est-ce qui nous a rendus uniques?</h2>
            <p>Maintenant, vous pouvez obtenir des services de santé de n'importe où en ligne</p>
        </div>
        <div class=\"row feature_inner\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-user\"></i>Médecins Experts</h4>
                    <p>
                        Vous pouvez obtenir l'aide de votre médecin et recevoir vos ordonnances.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-store\"></i>Pharmacie en ligne</h4>
                    <p>Achetez vos médicaments de votre pharmacie préférée en ligne.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-map\"></i>Annuaire nationale</h4>
                    <p>Savoir quelle pharmacie ou quel médecin est le plus proche de vous et beaucoup plus d'informations
                        .</p>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 255
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/theme.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/modal-flash.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 263,  631 => 261,  627 => 260,  623 => 259,  619 => 258,  615 => 257,  611 => 256,  606 => 255,  597 => 254,  550 => 178,  541 => 171,  532 => 170,  520 => 18,  515 => 17,  513 => 16,  511 => 15,  509 => 14,  505 => 12,  501 => 11,  496 => 10,  487 => 9,  469 => 8,  458 => 265,  456 => 263,  454 => 254,  431 => 233,  412 => 215,  409 => 170,  397 => 164,  390 => 159,  386 => 158,  375 => 149,  370 => 147,  364 => 146,  361 => 145,  349 => 138,  345 => 137,  340 => 136,  334 => 134,  331 => 133,  325 => 131,  322 => 130,  316 => 128,  313 => 127,  307 => 125,  304 => 124,  298 => 122,  296 => 121,  292 => 120,  286 => 119,  282 => 117,  276 => 115,  270 => 113,  268 => 112,  261 => 107,  259 => 106,  253 => 102,  247 => 100,  244 => 99,  238 => 97,  235 => 96,  229 => 94,  226 => 93,  219 => 89,  215 => 88,  206 => 81,  203 => 80,  197 => 78,  195 => 77,  191 => 76,  186 => 73,  176 => 68,  172 => 67,  167 => 66,  161 => 64,  158 => 63,  152 => 61,  149 => 60,  143 => 58,  140 => 57,  134 => 55,  131 => 54,  125 => 52,  123 => 51,  119 => 50,  113 => 49,  109 => 47,  107 => 46,  100 => 41,  94 => 38,  88 => 37,  85 => 36,  81 => 34,  75 => 32,  69 => 30,  67 => 29,  64 => 28,  62 => 27,  56 => 26,  48 => 20,  46 => 9,  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"{{ asset('template/img/Pharmacity.svg') }}\" type=\"image/png\">
    <title>{% block title %}PHARMACITY{% endblock %}</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('template/vendors/linericon/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/font-awesome.min.css') }}\">
    {#<link rel=\"stylesheet\" href=\"{{ asset('template/vendors/owl-carousel/owl.carousel.min.css') }}\">#}
    {#<link rel=\"stylesheet\" href=\"{{ asset('template/vendors/lightbox/simpleLightbox.css') }}\">#}
    {#<link rel=\"stylesheet\" href=\"{{ asset('template/vendors/nice-select/css/nice-select.css') }}\">#}
    {#<link rel=\"stylesheet\" href=\"{{ asset('template/vendors/animate-css/animate.css') }}\">#}
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('template/css/responsive.css') }}\">
    {% endblock %}
</head>
<body>
<header class=\"header_area\">
    <div class=\"main_menu\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
                <div class=\"container\">
                <a class=\"navbar-brand logo_h\" href=\"{{ path('homepage') }}\"><img src=\"{{ asset('template/img/Pharmacity.svg') }}\"  alt=\"logo\" class=\"logo-name\"></a>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#user\" aria-controls=\"user\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        {% if app.user.media is defined and app.user.media is not null %}
                            <img src=\"{{ asset(app.user.media.path) }}\" class=\"picture-user\" alt=\"user\">
                        {% else %}
                            <img src=\"{{ asset('upload/picture_user/default_picture.png') }}\" class=\"picture-user\" alt=\"user\">
                        {% endif %}
                    </button>
                    {% else %}
                    <button class=\"navbar-toggler\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <a href=\"{{ path('fos_user_security_login') }}\" class=\"connection-inscription\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"connection-inscription\">Insciption</a>
                    </button>
                    {% endif %}
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <div class=\"collapse navbar-collapse offset visibility-menu-user-in-small-screen\" id=\"user\">
                        <ul class=\"nav navbar-nav  menu_nav ml-auto\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_profile_edit') }}\">{{ app.user.username }}</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_patient') }}\">Fiche Médical</a></li>
                            {% if is_granted('ROLE_DOCTOR') %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_doctor') }}\">PROFIL DOCTEUR</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_PHARMACY') %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_pharmacy') }}\">PROFIL PHARMACY</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_PHARMACY') %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('stock_pharmacy') }}\">GERER VOTRE STOCK</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_SUPPLIER') %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('stock_supplier') }}\">GERER VOTRE STOCK</a></li>
                            {% endif %}
                            {% if is_granted('ROLE_SUPPLIER') %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_supplier') }}\">PROFIL FOURNISSEUR</a></li>
                            {% endif %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_change_password') }}\">Changer mot de passe</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('edit_media_patient') }}\">Changer l'image</a></li>
                            <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link\" >{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li>

                        </ul>
                    </div>
                    {% endif %}
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse col-lg-7\" id=\"navbarSupportedContent\">
                    <ul class=\"nav navbar-nav menu_nav ml-auto\">
                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a></li>
                        {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('list_prescription_patient') }}\">Mes Consultations</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_DOCTOR') %}




                            <li class=\"nav-item submenu dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gestion des ordonnances</a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_prescription') }}\">Ajouter une ordonnances</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('list_prescription_doctor') }}\">Liste des Ordonnances</a></li>
                                </ul>
                            </li>
                        {% endif %}
                        {% if is_granted('ROLE_PHARMACY') %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('list_priscription_pharmacy') }}\">Liste des Ordonnances</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_PHARMACY') %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_Order_supplier') }}\">Commander</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_SUPPLIER') %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('list_order_supplier') }}\">Liste des commandes</a></li>
                        {% endif %}

                    </ul>
                </div>

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <div class=\"visibility-menu-user-in-big-screen\">
                        <div class=\"collapse navbar-collapse offset col-lg-3\">
                            <ul class=\"nav navbar-nav menu_nav ml-auto\">
                                <li class=\"nav-item submenu dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        {% if app.user.media is defined and app.user.media is not null %}
                                            <img src=\"{{ asset(app.user.media.path) }}\" class=\"picture-user\" alt=\"user\">
                                        {% else %}
                                            <img src=\"{{ asset('upload/picture_user/default_picture.png') }}\" class=\"picture-user\" alt=\"user\">
                                        {% endif %}
                                    </a>
                                    <ul class=\"nav navbar-nav  menu_nav ml-auto\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_profile_edit') }}\">{{ app.user.username }}</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_patient') }}\">Fiche Médical</a></li>
                                        {% if is_granted('ROLE_DOCTOR') %}
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_doctor') }}\">PROFIL DOCTEUR</a></li>
                                        {% endif %}
                                        {% if is_granted('ROLE_PHARMACY') %}
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_pharmacy') }}\">PROFIL PHARMACY</a></li>
                                        {% endif %}
                                        {% if is_granted('ROLE_PHARMACY') %}
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('stock_pharmacy') }}\">GERER VOTRE STOCK</a></li>
                                        {% endif %}
                                        {% if is_granted('ROLE_SUPPLIER') %}
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('stock_supplier') }}\">GERER VOTRE STOCK</a></li>
                                        {% endif %}
                                        {% if is_granted('ROLE_SUPPLIER') %}
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('add_info_supplier') }}\">PROFIL FOURNISSEUR</a></li>
                                        {% endif %}
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_change_password') }}\">Changer mot de passe</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('edit_media_patient') }}\">Changer l'image</a></li>
                                        <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link\" >{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"visibility-menu-user-in-big-screen col-lg-3\">
                            <a href=\"{{ path('fos_user_security_login') }}\" class=\"connection-inscription\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                            <a href=\"{{ path('fos_user_registration_register') }}\" class=\"connection-inscription\">Insciption</a>
                    {% endif %}
                    </div>
            </div>
        </nav>
    </div>
</header>

<div class=\"height-body\">
<div class=\"container-fluid content-body\">

    {% for flashMessage in app.session.flashbag.get('notice') %}
    <div class='modal fade modal-message-flash' id='modal-infos' data-backdrop='false'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <button type='button' class='close' data-dismiss='modal'>x</button>
                    <h3 class='modal-title title-message-error' style=\"color: #551a8b\">{{ flashMessage }}</h3>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
    {% block body1 %}
    <section class=\"home_banner_area\">
        <div class=\"banner_inner d-flex align-items-center\">
            <div class=\"overlay bg-parallax\" data-stellar-ratio=\"0.9\" data-stellar-vertical-offset=\"0\" data-background=\"\"></div>
            <div class=\"container\">
                <div class=\"banner_content text-center\">
                    <h3><div class=\"MyTitle\">CONSULTEZ VOTRE <span>PHARMACIE</span></div></h3>
                    <p style=\"color: whitesmoke;font-size: 20px\" class=\"desc_title\">Achetez vos médicaments et consultez votre médecin préféré via notre site Web.</p>
                    <a class=\"black_btn\" href=\"{{ path('go_to_view') }}\">Commencer</a>
                </div>
            </div>
        </div>
    </section>

<section class=\"feature_area p_120\">
    <div class=\"container\">
        <div class=\"main_title\">
            <h2>Qu'est-ce qui nous a rendus uniques?</h2>
            <p>Maintenant, vous pouvez obtenir des services de santé de n'importe où en ligne</p>
        </div>
        <div class=\"row feature_inner\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-user\"></i>Médecins Experts</h4>
                    <p>
                        Vous pouvez obtenir l'aide de votre médecin et recevoir vos ordonnances.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-store\"></i>Pharmacie en ligne</h4>
                    <p>Achetez vos médicaments de votre pharmacie préférée en ligne.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"feature_item\">
                    <h4><i class=\"lnr lnr-map\"></i>Annuaire nationale</h4>
                    <p>Savoir quelle pharmacie ou quel médecin est le plus proche de vous et beaucoup plus d'informations
                        .</p>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
</div>
</div>
<footer class=\"footer-area p_120\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget ab_wd\">
                    <h6 class=\"footer_title\">A propos de nous</h6>
                    <p>
                        Nous sommes une équipe passionnée de jeunes développeurs qui tentent de trouver des solutions au système de santé en Tunisie. Nous espérons réussir avec ce projet appelé Pharmacity pour atteindre ce succès..</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"single-footer-widget contact_wd\">
                    <h6 class=\"footer_title\">Contactez nous</h6>
                    <p>Les berges de lac 1 Tunis-Tunisie</p>
                    <a href=\"tel:01265325689746\">+216-92 421 045</a>
                    {#<a href=\"tel:01265325689746\">012-6532-568-9746</a>#}
                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 col-sm-6 offset-lg-1\">
                <div class=\"single-footer-widget\">
                    <div class=\"row footer-bottom d-flex justify-content-between align-items-center\">
                    <div class=\"footer-social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</footer>
{% block javascripts %}
    <script src=\"{{ asset('template/js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('template/js/popper.js') }}\"></script>
<script src=\"{{ asset('template/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('template/js/theme.js') }}\"></script>
    <script src=\"{{ asset('template/js/modal-flash.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
{% endblock %}
{% block js %}
{% endblock %}
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\app\\Resources\\views\\base.html.twig");
    }
}
