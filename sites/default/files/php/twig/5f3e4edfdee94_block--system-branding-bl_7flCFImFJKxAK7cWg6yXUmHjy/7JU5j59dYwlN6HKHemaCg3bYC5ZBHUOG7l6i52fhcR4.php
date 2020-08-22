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

/* themes/custom/news_vision/templates/block--system-branding-block.html.twig */
class __TwigTemplate_44c274b7cd83455c747bf17aac1afd87e8b7cffad559bb4aa89d354b8fcafe10 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 22, "t" => 22];
        $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/news_vision/templates/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "      <div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <a href=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" rel=\"home\">
              <img src=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" class=\"fh5co_logo_width\"/>
            </a>
            <div class=\"col-12 col-md-9 align-self-center fh5co_mediya_right\">
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-search\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a href=\"https://twitter.com/fh5co\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a href=\"https://fb.com/fh5co\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div></a>
                </div>
                <div class=\"d-inline-block text-center dd_position_relative \">
                    <select class=\"form-control fh5co_text_select_option\">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 55
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</a>
  ";
        }
        // line 57
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_vision/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  119 => 55,  116 => 54,  79 => 22,  75 => 21,  70 => 18,  67 => 17,  64 => 16,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
  {% if site_logo %}
      <div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <a href=\"{{ path('<front>') }}\" rel=\"home\">
              <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" class=\"fh5co_logo_width\"/>
            </a>
            <div class=\"col-12 col-md-9 align-self-center fh5co_mediya_right\">
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-search\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a href=\"https://twitter.com/fh5co\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div></a>
                </div>
                <div class=\"text-center d-inline-block\">
                    <a href=\"https://fb.com/fh5co\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div></a>
                </div>
                <div class=\"d-inline-block text-center dd_position_relative \">
                    <select class=\"form-control fh5co_text_select_option\">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
  {% endif %}
  {% if site_name %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
  {% endif %}
  {{ site_slogan }}

{% endblock %}
", "themes/custom/news_vision/templates/block--system-branding-block.html.twig", "C:\\Users\\Ayush\\Sites\\devdesktop\\news-theme\\themes\\custom\\news_vision\\templates\\block--system-branding-block.html.twig");
    }
}
