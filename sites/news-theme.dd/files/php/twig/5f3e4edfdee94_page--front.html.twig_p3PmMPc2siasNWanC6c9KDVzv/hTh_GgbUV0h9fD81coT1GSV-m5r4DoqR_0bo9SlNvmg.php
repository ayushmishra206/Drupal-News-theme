<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/news_vision/templates/page--front.html.twig */
class __TwigTemplate_a5a503c39e3ba30bcb32fc15b87ae93c352bec4d6598becc56a831685d0220be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 90, "include" => 105];
        $filters = ["escape" => 61];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "
<div class=\"layout-container\">

  <div class=\"container-fluid fh5co_header_bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 fh5co_mediya_center\"><a href=\"#\" class=\"color_fff fh5co_mediya_setting\"><i
                    class=\"fa fa-clock-o\"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class=\"d-inline-block fh5co_trading_posotion_relative\"><a href=\"#\" class=\"treding_btn\">Trending</a>
                    <div class=\"fh5co_treding_position_absolute\"></div>
                </div>
                <a href=\"#\" class=\"color_fff fh5co_mediya_setting\">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div>
  ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_bar", [])), "html", null, true);
        echo "
  </div>


";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "

<div class=\"container-fluid bg-faded fh5co_padd_mediya padding_786\">
    <div class=\"container padding_786\">
        <nav class=\"navbar navbar-toggleable-md navbar-light \">
            <button class=\"navbar-toggler navbar-toggler-right mt-3\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"><span class=\"fa fa-bars\"></span></button>
            <a class=\"navbar-brand\" href=\"#\"><img src=\"images/logo.png\" alt=\"img\" class=\"mobile_logo_width\"/></a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                
            </div>
        </nav>
    </div>
    ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
</div>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 85
        echo "
    <div class=\"layout-content\">
      ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 89
        echo "
    ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 91
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 97
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 101
        echo "
  </main>

    <footer role=\"contentinfo\">
      ";
        // line 105
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer.html.twig"), "themes/custom/news_vision/templates/page--front.html.twig", 105)->display($context);
        // line 106
        echo "    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_vision/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 106,  146 => 105,  140 => 101,  134 => 98,  131 => 97,  129 => 96,  126 => 95,  120 => 92,  117 => 91,  115 => 90,  112 => 89,  108 => 87,  104 => 85,  96 => 79,  79 => 65,  72 => 61,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div class=\"layout-container\">

  <div class=\"container-fluid fh5co_header_bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 fh5co_mediya_center\"><a href=\"#\" class=\"color_fff fh5co_mediya_setting\"><i
                    class=\"fa fa-clock-o\"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class=\"d-inline-block fh5co_trading_posotion_relative\"><a href=\"#\" class=\"treding_btn\">Trending</a>
                    <div class=\"fh5co_treding_position_absolute\"></div>
                </div>
                <a href=\"#\" class=\"color_fff fh5co_mediya_setting\">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div>
  {{page.top_bar}}
  </div>


{{ page.header }}

<div class=\"container-fluid bg-faded fh5co_padd_mediya padding_786\">
    <div class=\"container padding_786\">
        <nav class=\"navbar navbar-toggleable-md navbar-light \">
            <button class=\"navbar-toggler navbar-toggler-right mt-3\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"><span class=\"fa fa-bars\"></span></button>
            <a class=\"navbar-brand\" href=\"#\"><img src=\"images/logo.png\" alt=\"img\" class=\"mobile_logo_width\"/></a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                
            </div>
        </nav>
    </div>
    {{ page.navigation }}
</div>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

    <footer role=\"contentinfo\">
      {% include directory ~ '/templates/footer.html.twig' %}
    </footer>
</div>{# /.layout-container #}
", "themes/custom/news_vision/templates/page--front.html.twig", "C:\\Users\\Ayush\\Sites\\devdesktop\\news-theme\\themes\\custom\\news_vision\\templates\\page--front.html.twig");
    }
}