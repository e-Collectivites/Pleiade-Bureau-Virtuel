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

/* themes/custom/pleiadebv/templates/layout/html.html.twig */
class __TwigTemplate_c72fe96e991d861f9499e79b5c04e87e3122a6ffaeb4c7aee90600105d23851e extends \Twig\Template
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => (((        // line 32
($context["b5_body_schema"] ?? null) == "light")) ? (" text-dark") : ((((($context["b5_body_schema"] ?? null) == "dark")) ? (" text-light") : (" ")))), 5 => (((        // line 33
($context["b5_body_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_body_bg_schema"] ?? null), 33, $this->source))) : (" ")), 6 => "d-flex flex-column h-100"];
        // line 37
        echo "
<!DOCTYPE html>
<html";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => "h-100"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
        echo "\">
  </head>
  <body";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
    ";
        // line 51
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class=\"preloader\">
      <svg
        class=\"tea lds-ripple\"
        width=\"37\"
        height=\"48\"
        viewbox=\"0 0 37 48\"
        fill=\"none\"
        xmlns=\"http://www.w3.org/2000/svg\"
      >
        <path
          d=\"M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z\"
          stroke=\"#009efb\"
          stroke-width=\"2\"
        ></path>
        <path
          d=\"M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34\"
          stroke=\"#009efb\"
          stroke-width=\"2\"
        ></path>
        <path
          id=\"teabag\"
          fill=\"#009efb\"
          fill-rule=\"evenodd\"
          clip-rule=\"evenodd\"
          d=\"M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z\"
        ></path>
        <path
          id=\"steamL\"
          d=\"M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12\"
          stroke-width=\"2\"
          stroke-linecap=\"round\"
          stroke-linejoin=\"round\"
          stroke=\"#009efb\"
        ></path>
        <path
          id=\"steamR\"
          d=\"M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13\"
          stroke=\"#009efb\"
          stroke-width=\"2\"
          stroke-linecap=\"round\"
          stroke-linejoin=\"round\"
        ></path>
      </svg>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id=\"main-wrapper\">

      ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 107, $this->source), "html", null, true);
        echo "
      ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 108, $this->source), "html", null, true);
        echo "
      ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 109, $this->source), "html", null, true);
        echo "
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
        <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class=\"customizer\">
      <a href=\"javascript:void(0)\" class=\"service-panel-toggle\"
        ><i class=\"fa fa-spin fa-cog\"></i
      ></a>
      <div class=\"customizer-body\">
        <ul class=\"nav customizer-tab\" role=\"tablist\">
          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"pills-home-tab\"
              data-bs-toggle=\"pill\"
              href=\"#pills-home\"
              role=\"tab\"
              aria-controls=\"pills-home\"
              aria-selected=\"true\"
              ><i class=\"mdi mdi-wrench fs-6\"></i
            ></a>
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              id=\"pills-profile-tab\"
              data-bs-toggle=\"pill\"
              href=\"#chat\"
              role=\"tab\"
              aria-controls=\"chat\"
              aria-selected=\"false\"
              ><i class=\"mdi mdi-message-reply fs-6\"></i
            ></a>
          </li>
          <li class=\"nav-item\">
            <a
              class=\"nav-link\"
              id=\"pills-contact-tab\"
              data-bs-toggle=\"pill\"
              href=\"#pills-contact\"
              role=\"tab\"
              aria-controls=\"pills-contact\"
              aria-selected=\"false\"
              ><i class=\"mdi mdi-star-circle fs-6\"></i
            ></a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"pills-tabContent\">
          <!-- Tab 1 -->
          <div
            class=\"tab-pane fade show active\"
            id=\"pills-home\"
            role=\"tabpanel\"
            aria-labelledby=\"pills-home-tab\"
          >
            <div class=\"p-3 border-bottom\">
              <!-- Sidebar -->
              <h5 class=\"font-weight-medium mb-2 mt-2\">Layout Settings</h5>
              <div class=\"form-check mt-3\">
                <input
                  type=\"checkbox\"
                  name=\"theme-view\"
                  class=\"form-check-input\"
                  id=\"theme-view\"
                />
                <label class=\"form-check-label\" for=\"theme-view\">
                  <span>Theme Sombre</span>
                </label>
              </div>
              <div class=\"form-check mt-2\">
                <input
                  type=\"checkbox\"
                  class=\"sidebartoggler form-check-input\"
                  name=\"collapssidebar\"
                  id=\"collapssidebar\"
                />
                <label class=\"form-check-label\" for=\"collapssidebar\">
                  <span>Barre de menu étendue</span>
                </label>
              </div>
              <div class=\"form-check mt-2\">
                <input
                  type=\"checkbox\"
                  name=\"sidebar-position\"
                  class=\"form-check-input\"
                  id=\"sidebar-position\"
                />
                <label class=\"form-check-label\" for=\"sidebar-position\">
                  <span>Barre de menu fixe</span>
                </label>
              </div>
              <div class=\"form-check mt-2\">
                <input
                  type=\"checkbox\"
                  name=\"header-position\"
                  class=\"form-check-input\"
                  id=\"header-position\"
                />
                <label class=\"form-check-label\" for=\"header-position\">
                  <span>En-tête fixe</span>
                </label>
              </div>
              <!-- <div class=\"form-check mt-2\">
                <input
                  type=\"checkbox\"
                  name=\"boxed-layout\"
                  class=\"form-check-input\"
                  id=\"boxed-layout\"
                />
                <label class=\"form-check-label\" for=\"boxed-layout\">
                  <span>Boxed Layout</span>
                </label>
              </div> -->
            </div>

          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->

          <!-- End Tab 2 -->
          <!-- Tab 3 -->

          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
  
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <js-bottom-placeholder token=\"";
        // line 243
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 243, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/pleiadebv/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 243,  146 => 109,  142 => 108,  138 => 107,  80 => 52,  77 => 51,  73 => 46,  68 => 44,  64 => 43,  60 => 42,  56 => 41,  51 => 39,  47 => 37,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/pleiadebv/templates/layout/html.html.twig", "/var/www/pleiaded9/web/themes/custom/pleiadebv/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27);
        static $filters = array("clean_class" => 29, "escape" => 39, "safe_join" => 42, "t" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
