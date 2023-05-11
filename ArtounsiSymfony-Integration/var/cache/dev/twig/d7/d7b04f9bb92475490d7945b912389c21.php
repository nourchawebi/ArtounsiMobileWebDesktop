<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/studiodashboard.html.twig */
class __TwigTemplate_fb2e5e575b7202599d12807f574ef98f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/studiodashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/studiodashboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">



    <!-- Google Fonts -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
        // line 21
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "    <!-- Template Main CSS File -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ARTounsi.png"), "html", null, true);
        echo "\" width=\"50\" height=\"300\" alt=\"\">
                <span class=\"d-none d-lg-block\">ArTounsi</span>

            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                        <li class=\"dropdown-header\">
                            You have 4 new notifications
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-exclamation-circle text-warning\"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-x-circle text-danger\"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-check-circle text-success\"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                        <li class=\"dropdown-header\">
                            You have 3 new messages
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "avatar", [], "any", false, false, false, 217))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "name", [], "any", false, false, false, 219), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "lastName", [], "any", false, false, false, 219), "html", null, true);
        echo "</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h6>";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "name", [], "any", false, false, false, 224), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "lastName", [], "any", false, false, false, 224), "html", null, true);
        echo "</h6>
                            <span>";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), "type", [], "any", false, false, false, 225), "html", null, true);
        echo "</span>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                <i class=\"bi bi-person\"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                <i class=\"bi bi-gear\"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                <i class=\"bi bi-question-circle\"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
        echo "\">
                                <i class=\"bi bi-box-arrow-right\"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>

    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
            ";
        // line 279
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 279, $this->source); })()), "type", [], "any", false, false, false, 279) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 279, $this->source); })()), "type", [], "any", false, false, false, 279) == "Studio"))) {
            // line 280
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
            // line 281
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                        <i class=\"bi bi-briefcase\"></i>
                        <span>mes offres</span>
                    </a>
                </li>
            ";
        }
        // line 287
        echo "            <!-- End Profile Page Nav -->
            ";
        // line 288
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 288, $this->source); })()), "type", [], "any", false, false, false, 288) == "Admin")) {
            // line 289
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
            // line 290
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>gros mots</span>
                    </a>
                </li>
            ";
        }
        // line 296
        echo "            <!-- End F.A.Q Page Nav -->
            ";
        // line 297
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 297, $this->source); })()), "type", [], "any", false, false, false, 297) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 297, $this->source); })()), "type", [], "any", false, false, false, 297) == "Artist"))) {
            // line 298
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
            // line 299
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                        <i class=\"bi bi-briefcase\"></i>
                        <span>Mes demandes</span>
                    </a>
                </li>
            ";
        }
        // line 305
        echo "
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Nouveau Produit</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Challenge</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Tutoriel</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Explore</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Shop</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 338
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Bans</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 350, $this->source); })()), "id_user", [], "any", false, false, false, 350)]), "html", null, true);
        echo "\">
                    <i class=\"bi bi-person-badge\"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>


    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                  
                                    <div id=\"reportsChart\"></div>
                              
                                    <script>
                                        document.addEventListener(\"DOMContentLoaded\", () => {
                                            new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                
                                                fill: {
                                                    type: \"gradient\",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                   
                                   
                                </div>

                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">#</th>
                                                <th scope=\"col\">Customer</th>
                                                <th scope=\"col\">Product</th>
                                                <th scope=\"col\">Price</th>
                                                <th scope=\"col\">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                                <td>\$64</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                                <td>\$47</td>
                                                <td><span class=\"badge bg-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                                <td>\$147</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                                <td>\$67</td>
                                                <td><span class=\"badge bg-danger\">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                                <td>\$165</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">Preview</th>
                                                <th scope=\"col\">Product</th>
                                                <th scope=\"col\">Price</th>
                                                <th scope=\"col\">Sold</th>
                                                <th scope=\"col\">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                                                <td>\$64</td>
                                                <td class=\"fw-bold\">124</td>
                                                <td>\$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                                                <td>\$46</td>
                                                <td class=\"fw-bold\">98</td>
                                                <td>\$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                                                <td>\$59</td>
                                                <td class=\"fw-bold\">74</td>
                                                <td>\$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                                                <td>\$32</td>
                                                <td class=\"fw-bold\">63</td>
                                                <td>\$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                                                <td>\$79</td>
                                                <td class=\"fw-bold\">41</td>
                                                <td>\$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class=\"col-lg-4\">

                    <!-- Recent Activity -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                            <div class=\"activity\">

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div>
                                <!-- End activity item-->

                            </div>

                        </div>
                    </div>
                    <!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                            <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            }, {
                                                name: 'Administration',
                                                max: 16000
                                            }, {
                                                name: 'Information Technology',
                                                max: 30000
                                            }, {
                                                name: 'Customer Support',
                                                max: 38000
                                            }, {
                                                name: 'Development',
                                                max: 52000
                                            }, {
                                                name: 'Marketing',
                                                max: 25000
                                            }]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            }, {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                            <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            }, {
                                                value: 735,
                                                name: 'Direct'
                                            }, {
                                                value: 580,
                                                name: 'Email'
                                            }, {
                                                value: 484,
                                                name: 'Union Ads'
                                            }, {
                                                value: 300,
                                                name: 'Video Ads'
                                            }]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                            <div class=\"news\">
                                <div class=\"post-item clearfix\">
                                    <img src=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"";
        // line 988
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"";
        // line 994
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"";
        // line 1000
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"";
        // line 1006
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                </div>

                            </div>
                            <!-- End sidebar recent posts-->

                        </div>
                    </div>
                    <!-- End News & Updates -->

                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 ";
        // line 1043
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1057
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 22
        echo "    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1043
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1044
        echo "    <!-- Vendor JS') }} Files -->
    <script src=\"";
        // line 1045
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/js"), "html", null, true);
        echo "/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"";
        // line 1047
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/chart.js"), "html", null, true);
        echo "/chart.umd.js') }}\"></script>
    <script src=\"";
        // line 1048
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1049
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1050
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS') }} File -->
    <script src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/studiodashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1308 => 1055,  1302 => 1052,  1298 => 1051,  1294 => 1050,  1290 => 1049,  1286 => 1048,  1282 => 1047,  1278 => 1046,  1274 => 1045,  1271 => 1044,  1261 => 1043,  1249 => 29,  1245 => 28,  1241 => 27,  1237 => 26,  1233 => 25,  1229 => 24,  1225 => 23,  1222 => 22,  1212 => 21,  1200 => 1057,  1198 => 1043,  1158 => 1006,  1149 => 1000,  1140 => 994,  1131 => 988,  1122 => 982,  855 => 718,  843 => 709,  831 => 700,  819 => 691,  807 => 682,  472 => 350,  463 => 344,  454 => 338,  445 => 332,  436 => 326,  426 => 319,  417 => 313,  408 => 307,  404 => 305,  395 => 299,  392 => 298,  390 => 297,  387 => 296,  378 => 290,  375 => 289,  373 => 288,  370 => 287,  361 => 281,  358 => 280,  356 => 279,  336 => 262,  296 => 225,  290 => 224,  280 => 219,  275 => 217,  105 => 50,  84 => 32,  81 => 31,  79 => 21,  75 => 20,  71 => 19,  63 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{asset('assets2/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">



    <!-- Google Fonts -->
    <link href=\"{{asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">
 {% block stylesheet %}
    <!-- Vendor CSS Files -->
    <link href=\"{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">
 {% endblock %}
    <!-- Template Main CSS File -->
    <link href=\"{{asset('assets2/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                <img src=\"{{ asset('assets/img/ARTounsi.png') }}\" width=\"50\" height=\"300\" alt=\"\">
                <span class=\"d-none d-lg-block\">ArTounsi</span>

            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                        <li class=\"dropdown-header\">
                            You have 4 new notifications
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-exclamation-circle text-warning\"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-x-circle text-danger\"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-check-circle text-success\"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                        <li class=\"dropdown-header\">
                            You have 3 new messages
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\" class=\"rounded-circle\">

                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.name }} {{ user.lastName }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h6>{{ user.name }}.{{ user.lastName }}</h6>
                            <span>{{ user.type }}</span>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                <i class=\"bi bi-person\"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                <i class=\"bi bi-gear\"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                <i class=\"bi bi-question-circle\"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_allusers_logout') }}\">
                                <i class=\"bi bi-box-arrow-right\"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>

    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
            {% if(user.type=='Admin' or user.type=='Studio') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                        <i class=\"bi bi-briefcase\"></i>
                        <span>mes offres</span>
                    </a>
                </li>
            {% endif %}
            <!-- End Profile Page Nav -->
            {% if(user.type=='Admin') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                        <i class=\"bi bi-person\"></i>
                        <span>gros mots</span>
                    </a>
                </li>
            {% endif %}
            <!-- End F.A.Q Page Nav -->
            {% if(user.type=='Admin' or user.type=='Artist') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                        <i class=\"bi bi-briefcase\"></i>
                        <span>Mes demandes</span>
                    </a>
                </li>
            {% endif %}

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_produits_back_new') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Nouveau Produit</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_challenge_index_back') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Challenge</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_tutoriel_index_back') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Tutoriel</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_dashboard_home_page') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Explore</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_produits_back') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Shop</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_index') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_ban_index') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Bans</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_edit',{'id_user': user.id_user}) }}\">
                    <i class=\"bi bi-person-badge\"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>


    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                  
                                    <div id=\"reportsChart\"></div>
                              
                                    <script>
                                        document.addEventListener(\"DOMContentLoaded\", () => {
                                            new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                
                                                fill: {
                                                    type: \"gradient\",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                   
                                   
                                </div>

                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">#</th>
                                                <th scope=\"col\">Customer</th>
                                                <th scope=\"col\">Product</th>
                                                <th scope=\"col\">Price</th>
                                                <th scope=\"col\">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                                <td>\$64</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                                <td>\$47</td>
                                                <td><span class=\"badge bg-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                                <td>\$147</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                                <td>\$67</td>
                                                <td><span class=\"badge bg-danger\">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                                <td>\$165</td>
                                                <td><span class=\"badge bg-success\">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">Preview</th>
                                                <th scope=\"col\">Product</th>
                                                <th scope=\"col\">Price</th>
                                                <th scope=\"col\">Sold</th>
                                                <th scope=\"col\">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"{{asset('assets2/img/product-1.jpg') }}\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                                                <td>\$64</td>
                                                <td class=\"fw-bold\">124</td>
                                                <td>\$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"{{asset('assets2/img/product-2.jpg') }}\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                                                <td>\$46</td>
                                                <td class=\"fw-bold\">98</td>
                                                <td>\$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"{{asset('assets2/img/product-3.jpg') }}\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                                                <td>\$59</td>
                                                <td class=\"fw-bold\">74</td>
                                                <td>\$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"{{asset('assets2/img/product-4.jpg') }}\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                                                <td>\$32</td>
                                                <td class=\"fw-bold\">63</td>
                                                <td>\$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">
                                                    <a href=\"#\"><img src=\"{{asset('assets2/img/product-5.jpg') }}\" alt=\"\"></a>
                                                </th>
                                                <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                                                <td>\$79</td>
                                                <td class=\"fw-bold\">41</td>
                                                <td>\$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class=\"col-lg-4\">

                    <!-- Recent Activity -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                            <div class=\"activity\">

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div>
                                <!-- End activity item-->

                            </div>

                        </div>
                    </div>
                    <!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                            <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            }, {
                                                name: 'Administration',
                                                max: 16000
                                            }, {
                                                name: 'Information Technology',
                                                max: 30000
                                            }, {
                                                name: 'Customer Support',
                                                max: 38000
                                            }, {
                                                name: 'Development',
                                                max: 52000
                                            }, {
                                                name: 'Marketing',
                                                max: 25000
                                            }]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            }, {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                            <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            }, {
                                                value: 735,
                                                name: 'Direct'
                                            }, {
                                                value: 580,
                                                name: 'Email'
                                            }, {
                                                value: 484,
                                                name: 'Union Ads'
                                            }, {
                                                value: 300,
                                                name: 'Video Ads'
                                            }]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>
                    <!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                            <div class=\"news\">
                                <div class=\"post-item clearfix\">
                                    <img src=\"{{asset('assets2/img/news-1.jpg')}}\" alt=\"\">
                                    <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"{{asset('assets2/img/news-2.jpg')}}\" alt=\"\">
                                    <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"{{asset('assets2/img/news-3.jpg')}}\" alt=\"\">
                                    <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"{{asset('assets2/img/news-4.jpg')}}\" alt=\"\">
                                    <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"{{asset('assets2/img/news-5.jpg')}}\" alt=\"\">
                                    <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                </div>

                            </div>
                            <!-- End sidebar recent posts-->

                        </div>
                    </div>
                    <!-- End News & Updates -->

                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 {% block javascripts %}
    <!-- Vendor JS') }} Files -->
    <script src=\"{{asset('assets2/vendor/apexcharts/apexcharts.min.js')}}\"></script>
    <script src=\"{{asset('assets2/vendor/bootstrap/js') }}/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/chart.js') }}/chart.umd.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/quill/quill.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/simple-datatables/simple-datatables.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/tinymce/tinymce.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS') }} File -->
    <script src=\"{{asset('assets2/js/main.js') }}\"></script>
{% endblock %}
</body>

</html>", "dashboard/studiodashboard.html.twig", "C:\\Users\\achref\\Documents\\finalEsprit\\ArtounsiSymfony-Integration\\templates\\dashboard\\studiodashboard.html.twig");
    }
}
