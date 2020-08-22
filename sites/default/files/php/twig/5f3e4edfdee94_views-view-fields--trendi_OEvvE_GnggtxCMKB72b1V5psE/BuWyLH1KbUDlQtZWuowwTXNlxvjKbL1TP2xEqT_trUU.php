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

/* themes/custom/news_vision/templates/views-view-fields--trending.html.twig */
class __TwigTemplate_fce049f02af1fbb20fc61c2072bd0b2b5c5899c7e6299b28d57c3e9d0d229b9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div class=\"fh5co_latest_trading_img_position_relative\">
      <div class=\"fh5co_latest_trading_img\">
        ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_news_image", []), "content", [])), "html", null, true);
        echo "
      </div>
      <div class=\"fh5co_latest_trading_img_position_absolute\"></div>
      <div class=\"fh5co_latest_trading_img_position_absolute_1\">
        <a class=\"text-white\">
            ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "
        </a>
        <div class=\"fh5co_latest_trading_date_and_name_color\">
            ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uid", []), "content", [])), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", []), "content", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_vision/templates/views-view-fields--trending.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  67 => 8,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"fh5co_latest_trading_img_position_relative\">
      <div class=\"fh5co_latest_trading_img\">
        {{ fields.field_news_image.content }}
      </div>
      <div class=\"fh5co_latest_trading_img_position_absolute\"></div>
      <div class=\"fh5co_latest_trading_img_position_absolute_1\">
        <a class=\"text-white\">
            {{ fields.title.content }}
        </a>
        <div class=\"fh5co_latest_trading_date_and_name_color\">
            {{ fields.uid.content }} - {{ fields.created.content }}
        </div>
      </div>
    </div>", "themes/custom/news_vision/templates/views-view-fields--trending.html.twig", "C:\\Users\\Ayush\\Sites\\devdesktop\\news-theme\\themes\\custom\\news_vision\\templates\\views-view-fields--trending.html.twig");
    }
}
