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

/* themes/custom/pleiadebv/templates/layout/page.html.twig */
class __TwigTemplate_640d91dd70cb2e599dc7f01b662b2282c5e99b2d876bf3960f547ce126a930d5 extends \Twig\Template
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
      ";
        // line 48
        $this->loadTemplate("@pleiadebv/templates/layout/header.html.twig", "themes/custom/pleiadebv/templates/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "      <!-- ============================================================== -->
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
              <h3 class=\"page-title\">TEST--  ";
        // line 503
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 503, $this->source), "html", null, true);
        echo "</h3>
              <div class=\"d-flex align-items-center\">
                ";
        // line 506
        echo "
      ";
        // line 507
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
        echo "

                ";
        // line 510
        echo "              </div>
            </div>
            <div
              class=\"
                col-md-7
                justify-content-end
                align-self-center
                d-none d-md-flex
              \"
            >

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
";
        // line 532
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 532), 532, $this->source), "html", null, true);
        echo "
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
        // line 594
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/pleiadebv/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 594,  538 => 532,  515 => 510,  510 => 507,  507 => 506,  502 => 503,  46 => 49,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/pleiadebv/templates/layout/page.html.twig", "/var/www/pleiaded9/web/themes/custom/pleiadebv/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48);
        static $filters = array("escape" => 503);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
