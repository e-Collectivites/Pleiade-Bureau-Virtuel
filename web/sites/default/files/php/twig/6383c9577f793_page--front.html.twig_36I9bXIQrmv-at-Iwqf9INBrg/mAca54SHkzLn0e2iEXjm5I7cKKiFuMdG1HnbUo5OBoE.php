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

/* themes/custom/pleiadebv/templates/layout/page--front.html.twig */
class __TwigTemplate_cff91db7b63e15c05b28810166753c6cbeaa67e4dd32e110ac4e61fb42cbd79b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
          <div class=\"navbar-header\">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class=\"nav-toggler waves-effect waves-light d-block d-md-none\"
              href=\"javascript:void(0)\"
              ><i class=\"ti-menu ti-close\"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class=\"navbar-brand\" href=\"https://pleiadedev.ecollectivites.fr/test\">
              <!-- Logo icon -->
              <b class=\"logo-icon\">
                <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-icon.png\"
                  alt=\"homepage\"
                  class=\"dark-logo\"
                />
                <!-- Light Logo icon -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-light-icon.png\"
                  alt=\"homepage\"
                  class=\"light-logo\"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class=\"logo-text\">
                <!-- dark Logo text -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-text.png\"
                  alt=\"homepage\"
                  class=\"dark-logo\"
                />
                <!-- Light Logo text -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-light-text.png\"
                  class=\"light-logo\"
                  alt=\"homepage\"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class=\"topbartoggler d-block d-md-none waves-effect waves-light\"
              href=\"javascript:void(0)\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\"
              aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
              ><i class=\"ti-more\"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav me-auto\">
              <li class=\"nav-item d-none d-md-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"icon-arrow-left-circle\"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav\">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <!-- <li class=\"nav-item search-box d-none d-md-block\">
                <form class=\"app-search mt-3 me-2\">
                  <input
                    type=\"text\"
                    class=\"form-control rounded-pill border-0\"
                    placeholder=\"Search for...\"
                  />
                  <a class=\"srh-btn\"
                    ><i
                      data-feather=\"search\"
                      class=\"feather-sm fill-white mt-n1\"
                    ></i
                  ></a>
                </form>
              </li> -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle waves-effect waves-dark\"
                  href=\"#\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                  <img
                    src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/users/rl.jpg\"
                    alt=\"user\"
                    width=\"30\"
                    class=\"profile-pic rounded-circle\"
                  />
                </a>
                <div
                  class=\"
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  \"
                >
                  <div
                    class=\"
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-info
                      text-white
                      mb-2
                    \"
                  >
                    <div class=\"\">
                      <img
                        src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/users/rl.jpg\"
                        alt=\"user\"
                        class=\"rounded-circle\"
                        width=\"60\"
                      />
                    </div>
                    <div class=\"ms-2\">
                      <h4 class=\"mb-0 text-white\">Romain Leclerc</h4>
                      <p class=\"mb-0\">romain.leclerc@ecollectivites.fr</p>
                    </div>
                  </div>
                  <a class=\"dropdown-item\" href=\"#\"
                    ><i
                      data-feather=\"user\"
                      class=\"feather-sm text-info me-1 ms-1\"
                    ></i>
                    Mon compte</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\"
                    ><i
                      data-feather=\"settings\"
                      class=\"feather-sm text-warning me-1 ms-1\"
                    ></i>
                    Gérer mon compte</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"/user/logout\"
                    ><i
                      data-feather=\"log-out\"
                      class=\"feather-sm text-danger me-1 ms-1\"
                    ></i>
                    Déconnexion</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <div class=\"pl-4 p-2\">
                    <a href=\"#\" class=\"btn d-block w-100 btn-info rounded-pill\"
                      >Voir mon compte</a
                    >
                  </div>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Language  -->
              <!-- ============================================================== -->
              <li class=\"nav-item dropdown\">
                <a
                  class=\"
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  \"
                  href=\"/user/logout\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out feather-sm text-danger me-1 ms-1\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
              Déconnexion    
              </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->





      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class=\"left-sidebar\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
          <!-- Sidebar navigation-->
          <nav class=\"sidebar-nav\">
            <ul id=\"sidebarnav\">
              <!-- User Profile-->
              <li>
                <!-- User profile -->
                <div
                  class=\"user-profile text-center position-relative pt-4 mt-1\"
                >
                  <!-- User profile image -->
                  <div class=\"profile-img m-auto\">
                    <img
                      src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/users/rl.jpg\"
                      alt=\"user\"
                      class=\"w-100 rounded-circle\"
                    />
                  </div>
                  <!-- User profile text-->
                  <div class=\"profile-text py-1\">
                    <a
                      href=\"#\"
                      class=\"dropdown-toggle link u-dropdown\"
                      data-bs-toggle=\"dropdown\"
                      role=\"button\"
                      aria-haspopup=\"true\"
                      aria-expanded=\"true\"
                      >Romain Leclerc <span class=\"caret\"></span>
                    </a>
                    <div class=\"dropdown-menu animated flipInY\">
                      <a class=\"dropdown-item\" href=\"/user\">
                        <i
                          data-feather=\"user\"
                          class=\"feather-sm text-info me-1 ms-1\"
                        ></i>
                        Mon compte
                      </a>

                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"/user/edit\">
                        <i
                          data-feather=\"settings\"
                          class=\"feather-sm text-warning me-1 ms-1\"
                        ></i>
                        Gérer mon compte
                      </a>
                      <div class=\"dropdown-divider\"></div>
                      <a
                        class=\"dropdown-item\"
                        href=\"/user/logout\"
                      >
                        <i
                          data-feather=\"log-out\"
                          class=\"feather-sm text-danger me-1 ms-1\"
                        ></i>
                        Déconnexion
                      </a>
                      <div class=\"dropdown-divider\"></div>
                      <div class=\"ps-4 p-2\">
                        <button
                          type=\"button\"
                          class=\"btn d-block w-100 btn-info rounded-pill\"
                        >
                          Voir mon compte
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End User profile text-->
              </li>
              <!-- User Profile-->
              <!-- <li class=\"nav-small-cap\">
                <i class=\"mdi mdi-dots-horizontal\"></i>
                <span class=\"hide-menu\">Personal</span>
              </li> -->
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark mt-3\"
                  href=\"https://pleiadedev.ecollectivites.fr/\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"home\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\"
                    >Bureau
                    </span
                  ></a
                >
              </li>


              <li class=\"nav-devider\"></li>
              <li class=\"nav-small-cap\">
                <i class=\"mdi mdi-dots-horizontal\"></i>
                <span class=\"hide-menu\">Télétransmission</span>
              </li>

              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"award\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Actes </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email\"></i
                      ><span class=\"hide-menu\"> Créer un acte </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Voir tous les actes </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-secure\"></i
                      ><span class=\"hide-menu\"> Accéder au service </span></a
                    >
                  </li>
                </ul>
              </li>

              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"edit-3\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Doc. à faire signer </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email\"></i
                      ><span class=\"hide-menu\"> Créer un document </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Voir tous les documents </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-secure\"></i
                      ><span class=\"hide-menu\"> Accéder au service </span></a
                    >
                  </li>
                </ul>
              </li>


              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"users\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Convocations </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email\"></i
                      ><span class=\"hide-menu\"> Créer une convocation </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Voir toutes les convocations </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Annuaires & groupes </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-secure\"></i
                      ><span class=\"hide-menu\"> Accéder au service </span></a
                    >
                  </li>
                </ul>
              </li>
              
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"book-open\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Hélios </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email\"></i
                      ><span class=\"hide-menu\"> Créer un flux </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Voir tous les flux </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"#\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-secure\"></i
                      ><span class=\"hide-menu\"> Accéder au service </span></a
                    >
                  </li>
                </ul>
              </li>              

              <!-- <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-chats.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"message-circle\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Chat Apps</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-calendar.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"calendar\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Calender</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-taskboard.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"layout\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Taskboard</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-notes.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"book\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Notes</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-todo.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"check-circle\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Todo</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-invoice.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"file-text\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Invoice</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/app-contacts.html\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"phone\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Contact</span></a
                >
              </li>

              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"mail\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Inbox </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/inbox-email.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email\"></i
                      ><span class=\"hide-menu\"> Email </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/inbox-email-detail.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-alert\"></i
                      ><span class=\"hide-menu\"> Email Detail </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/inbox-email-compose.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-email-secure\"></i
                      ><span class=\"hide-menu\"> Email Compose </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link has-arrow waves-effect waves-dark\"
                  href=\"javascript:void(0)\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"bookmark\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Ticket </span></a
                >
                <ul aria-expanded=\"false\" class=\"collapse first-level\">
                  <li class=\"sidebar-item\">
                    <a href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/ticket-list.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-book-multiple\"></i
                      ><span class=\"hide-menu\"> Ticket List </span></a
                    >
                  </li>
                  <li class=\"sidebar-item\">
                    <a href=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/html/minisidebar/ticket-detail.html\" class=\"sidebar-link\"
                      ><i class=\"mdi mdi-book-plus\"></i
                      ><span class=\"hide-menu\"> Ticket Detail </span></a
                    >
                  </li>
                </ul>
              </li> -->
              <li class=\"nav-devider\"></li>
              <li class=\"nav-small-cap\">
                <i class=\"mdi mdi-dots-horizontal\"></i>
                <span class=\"hide-menu\">Documents</span>
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://gedapptest.ecollectivites.fr\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"folder\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">GED</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"https://transfert.ecollectivites.fr\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"share\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Partage de fichiers</span></a
                >
              </li>


              <li class=\"nav-devider\"></li>
              <li class=\"nav-small-cap\">
                <i class=\"mdi mdi-dots-horizontal\"></i>
                <span class=\"hide-menu\">Extra</span>
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"#\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"edit-3\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Documentation</span></a
                >
              </li>
              <li class=\"sidebar-item\">
                <a
                  class=\"sidebar-link waves-effect waves-dark sidebar-link\"
                  href=\"/user/logout\"
                  aria-expanded=\"false\"
                  ><i data-feather=\"log-out\" class=\"feather-icon\"></i
                  ><span class=\"hide-menu\">Déconnexion</span></a
                >
              </li>

            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class=\"sidebar-footer\">
          <!-- item-->
          <a
            href=\"#\"
            class=\"link\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"top\"
            title=\"Settings\"
            ><i class=\"ti-settings\"></i
          ></a>
          <!-- item-->
          <a
            href=\"#\"
            class=\"link\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"top\"
            title=\"Email\"
            ><i class=\"mdi mdi-gmail\"></i
          ></a>
          <!-- item-->
          <a
            href=\"#\"
            class=\"link\"
            data-bs-toggle=\"tooltip\"
            data-bs-placement=\"top\"
            title=\"Logout\"
            ><i class=\"mdi mdi-power\"></i
          ></a>
        </div>
        <!-- End Bottom points-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class=\"page-wrapper\">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb\">
          <div class=\"row\">
            <div class=\"col-md-5 align-self-center\">
              <h3 class=\"page-title\">Bureau</h3>
              <div class=\"d-flex align-items-center\">
                <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
                    <!-- <li class=\"breadcrumb-item active\" aria-current=\"page\">
                      Dashboard
                    </li> -->
                  </ol>
                </nav>
              </div>
            </div>
            <div
              class=\"
                col-md-7
                justify-content-end
                align-self-center
                d-none d-md-flex
              \"
            >
              <div class=\"d-flex\">
                <div class=\"dropdown me-2\">
                  <button
                    class=\"btn btn-secondary dropdown-toggle\"
                    type=\"button\"
                    id=\"dropdownMenuButton\"
                    data-bs-toggle=\"dropdown\"
                    data-bs-target=\"#droptest\"
                    aria-expanded=\"false\"
                  >
                    e-Collectivtés
                  </button>
                  <ul
                    class=\"dropdown-menu\"
                    aria-labelledby=\"dropdownMenuButton\"
                    id=\"droptest\"
                  >
                    <li><a class=\"dropdown-item\" href=\"#\">e-Collectivtés RH</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Formation</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Collectivité Démo</a></li>
                  </ul>
                </div>
                <!-- <button class=\"btn btn-success\">
                  <i data-feather=\"plus\" class=\"fill-white feather-sm\"></i>
                  Create
                </button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">

          <!-- Row -->
          <div class=\"row\">
            <div class=\"col-lg-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Messages récents</h4>
                  <div class=\"message-box scrollable\" style=\"height: 476px\">
                    <div class=\"message-widget message-scroll\">
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/1.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle online\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Jean Dupont
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >Lorem Ipsum is simply dummy text of the printing
                              and type setting industry. Lorem Ipsum has
                              been.</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:30 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/2.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle busy\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Sonia France
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >RDV ce soir</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:10 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <span
                            class=\"
                              round
                              bg-info
                              d-inline-block
                              text-white text-center
                              rounded-circle
                            \"
                            >A</span
                          >
                          <span
                            class=\"profile-status rounded-circle away\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Charlotte Doiron
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >Simply dummy text of the printing and typesetting
                              industry.</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:08 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/4.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle offline\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Jean Dupont
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >Demandez à l'admin !</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:02 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/1.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle online\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Jean Dupont
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >Bienvenue au SI</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:30 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/2.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle busy\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Dorian Marchand
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >RDV sur le parking</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:10 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a
                        href=\"#\"
                        class=\"d-flex align-items-center border-bottom p-3\"
                      >
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/3.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle away\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Annie Moreau
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >Bien reçu !</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:08 AM</span
                          >
                        </div>
                      </a>
                      <!-- Message -->
                      <a href=\"#\" class=\"d-flex align-items-center p-3\">
                        <div
                          class=\"
                            user-img
                            position-relative
                            d-inline-block
                            mr-0 mr-md-3
                          \"
                        >
                          <img
                            src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/4.jpg\"
                            alt=\"user\"
                            class=\"rounded-circle w-100\"
                          />
                          <span
                            class=\"profile-status rounded-circle offline\"
                          ></span>
                        </div>
                        <div
                          class=\"
                            w-85
                            d-md-flex
                            align-items-center
                            v-middle
                            ps-3
                          \"
                        >
                          <div class=\"w-85\">
                            <h5 class=\"mb-0 mt-1 font-weight-medium\">
                              Jean Dupont
                            </h5>
                            <span
                              class=\"
                                fs-3
                                text-nowrap
                                d-block
                                text-truncate
                                mail-desc
                                text-muted
                                fw-normal
                              \"
                              >On cherche un admin!</span
                            >
                          </div>
                          <span class=\"fs-2 text-nowrap ms-auto time fw-normal\"
                            >9:02</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex align-items-center\">
                    <h4 class=\"card-title\">Liste de tâches</h4>
                    <div class=\"ms-auto\">
                      <button
                        class=\"btn btn-sm btn-rounded btn-success\"
                        data-bs-toggle=\"modal\"
                        data-bs-target=\"#myModal\"
                      >
                        Ajouter une tâche
                      </button>
                    </div>
                  </div>
                  <!-- .modal for add task -->
                  <div
                    class=\"modal fade\"
                    id=\"myModal\"
                    tabindex=\"-1\"
                    role=\"dialog\"
                    aria-hidden=\"true\"
                  >
                    <div class=\"modal-dialog\" role=\"document\">
                      <div class=\"modal-content\">
                        <div class=\"modal-header d-flex align-items-center\">
                          <h4 class=\"modal-title\">Ajouter une tâche</h4>
                          <button
                            type=\"button\"
                            class=\"btn-close\"
                            data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"
                          ></button>
                        </div>
                        <div class=\"modal-body\">
                          <form>
                            <div class=\"mb-3\">
                              <label>Name</label>
                              <input
                                type=\"text\"
                                class=\"form-control\"
                                placeholder=\"Enter Your Name\"
                              />
                            </div>
                            <div class=\"mb-3\">
                              <label>Email address</label>
                              <input
                                type=\"email\"
                                class=\"form-control\"
                                placeholder=\"Enter email\"
                              />
                            </div>
                          </form>
                        </div>
                        <div class=\"modal-footer\">
                          <button
                            type=\"button\"
                            class=\"btn btn-secondary\"
                            data-bs-dismiss=\"modal\"
                          >
                            Close
                          </button>
                          <button
                            type=\"button\"
                            class=\"btn btn-success\"
                            data-bs-dismiss=\"modal\"
                          >
                            Submit
                          </button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <!-- ============================================================== -->
                  <!-- To do list widgets -->
                  <!-- ============================================================== -->
                  <div
                    class=\"to-do-widget mt-3 scrollable\"
                    style=\"height: 444px\"
                  >
                    <ul
                      class=\"list-task todo-list list-group mb-0\"
                      data-role=\"tasklist\"
                    >
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-info
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputSchedule\"
                            name=\"inputCheckboxesSchedule\"
                          />
                          <label
                            for=\"inputSchedule\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Organiser réunion avec</span>
                          </label>
                        </div>
                        <ul class=\"assignedto list-inline m-0 ps-4 ms-3 mt-2\">
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/1.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Steave\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/2.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Jessica\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/3.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Priyanka\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/4.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Selina\"
                            />
                          </li>
                        </ul>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-danger
                            ps-1
                            d-flex
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputCall\"
                            name=\"inputCheckboxesCall\"
                          />
                          <label
                            for=\"inputCall\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Envoyer le rapport d'activités à</span>
                            <span class=\"badge bg-light-danger text-danger\"
                              >Aujourd'hui</span
                            >
                          </label>
                        </div>
                        <ul class=\"assignedto list-inline m-0 ps-4 ms-3 mt-2\">
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/3.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Priyanka\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/4.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Selina\"
                            />
                          </li>
                        </ul>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-primary
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputBook\"
                            name=\"inputCheckboxesBook\"
                          />
                          <label
                            for=\"inputBook\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Réserver l'hôtel pour Déclic</span>
                          </label>
                        </div>
                        <div
                          class=\"
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          \"
                        >
                          26 oct 2022
                        </div>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-warning
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputForward\"
                            name=\"inputCheckboxesForward\"
                          />
                          <label
                            for=\"inputForward\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Mettre à jour Github</span>
                            <span class=\"badge bg-light-warning text-warning\"
                              >2 semaines</span
                            >
                          </label>
                        </div>
                        <div
                          class=\"
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          \"
                        >
                          26 oct 2022
                        </div>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-primary
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputRecieve\"
                            name=\"inputCheckboxesRecieve\"
                          />
                          <label
                            for=\"inputRecieve\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Commander bloc IPs </span>
                          </label>
                        </div>
                        <div
                          class=\"
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          \"
                        >
                          26 oct 2022
                        </div>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-info
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputpayment\"
                            name=\"inputCheckboxespayment\"
                          />
                          <label
                            for=\"inputpayment\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Send payment today</span>
                          </label>
                        </div>
                        <div
                          class=\"
                            item-date
                            fs-2
                            ps-4
                            ms-3
                            text-muted
                            d-inline-block
                          \"
                        >
                          26 jun 2021
                        </div>
                      </li>
                      <li
                        class=\"list-group-item border-0 mb-0 py-3 pe-3 ps-0\"
                        data-role=\"task\"
                      >
                        <div
                          class=\"
                            form-check
                            border-start border-2 border-success
                            ps-1
                          \"
                        >
                          <input
                            type=\"checkbox\"
                            class=\"form-check-input ms-2\"
                            id=\"inputForward2\"
                            name=\"inputCheckboxesd\"
                          />
                          <label
                            for=\"inputForward2\"
                            class=\"form-check-label ps-2 fw-normal\"
                          >
                            <span>Important tasks</span>
                            <span class=\"badge bg-light-success text-success\"
                              >2 weeks</span
                            >
                          </label>
                        </div>
                        <ul class=\"assignedto list-inline m-0 ps-4 ms-3 mt-2\">
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/1.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Assign to Steave\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/2.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Assign to Jessica\"
                            />
                          </li>
                          <li class=\"list-inline-item\">
                            <img
                              class=\"rounded-circle\"
                              src=\"https://demos.wrappixel.com/premium-admin-templates/bootstrap/monster-bootstrap/package/assets/images/users/4.jpg\"
                              alt=\"user\"
                              data-bs-toggle=\"tooltip\"
                              data-bs-placement=\"top\"
                              title=\"\"
                              data-original-title=\"Assign to Selina\"
                            />
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Row -->
          <!-- Row -->
          <div class=\"row\">
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <i data-feather=\"award\" class=\"feather-icon text-success\"></i> Actes</h4>
                  <div class=\"row\">
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          18
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En cours</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          1
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">Réponse Préf.</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          0
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En erreur</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <i data-feather=\"edit-3\" class=\"feather-icon text-info\"></i> Doc. à faire signer</h4>
                  <div class=\"row\">
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          3
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En attente</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          13
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">Signés</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          0
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">Refusés</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <i data-feather=\"users\" class=\"feather-icon text-purple\"></i> Convocations</h4>
                  <div class=\"row\">
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          0
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En cours</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          0
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En attente</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          13
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">Reçues</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <i data-feather=\"book-open\" class=\"feather-icon text-danger\"></i> Hélios</h4>
                  <div class=\"row\">
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          3
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En cours</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          1
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">En erreur</h6>
                      </div>
                    </div>
                    <div class=\"col-sm\">
                      <div class=\"text-center\">
                        <h2 class=\"fw-light mb-0 mt-2\">
                          11
                        </h2>
                        <h6 class=\"card-subtitle mt-1\">Acquittés</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->
          <!-- Row -->

          <!-- Row -->
          <!-- Row -->

          <!-- Row -->
          <!-- Row -->
 
          <!-- Row -->
          <!-- Row -->

          <!-- Row -->
          <!-- Row -->

          <!-- Row -->
          <!-- Row -->

          <!-- Row -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class=\"footer\">

      <!-- <strong></strong><br>
      <strong>e-Collectivités</strong>
    </div>
    <div>
      65, Rue Kepler - CS 60239<br>
      85006 La Roche-sur-Yon Cedex
    </div>
    <div>
      Tél. : 02 53 33 01 40<br>
      
    </div>
    <div>
      https://ecollectivites.fr<br>
      e-mail : contact@ecollectivites.fr -->
      <img src=\"https://ecollectivites.fr/sites/default/files/logo_ecollectivites_bleu.png\" style=\"width: 12%; height: auto; text-align: center;\">
    

        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
 
";
        // line 1892
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/pleiadebv/templates/layout/page--front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1863 => 1892,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/pleiadebv/templates/layout/page--front.html.twig", "/var/www/pleiaded9/web/themes/custom/pleiadebv/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
