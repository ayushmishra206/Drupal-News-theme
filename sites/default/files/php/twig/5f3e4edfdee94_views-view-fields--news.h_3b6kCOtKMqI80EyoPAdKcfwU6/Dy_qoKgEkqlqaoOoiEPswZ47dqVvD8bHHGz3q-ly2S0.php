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

/* themes/custom/news_vision/templates/views-view-fields--news.html.twig */
class __TwigTemplate_a608a69b24b7a896a4246ef364f5fdba9b30ca9d7a9a11cc8720e8920586a305 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
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
        echo "<div class=\"row pb-4\">
  <div class=\"col-md-5\">
    <div class=\"fh5co_hover_news_img\">
      <div class=\"fh5co_news_img\">
        ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_news_image", []), "content", [])), "html", null, true);
        echo "
      </div>
      <div></div>
    </div>
  </div>
  <div class=\"col-md-7\">
    <a class=\"fh5co_magna py-2\">
        ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "
    </a>
    <br>
    <a class=\"fh5co_mini_time py-3\">
      ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uid", []), "content", [])), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", []), "content", [])), "html", null, true);
        echo "
    </a>
    <br>
    <div class=\"fh5co_consectetur\">
        ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", []), "content", [])), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_vision/templates/views-view-fields--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  78 => 16,  71 => 12,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row pb-4\">
  <div class=\"col-md-5\">
    <div class=\"fh5co_hover_news_img\">
      <div class=\"fh5co_news_img\">
        {{ fields.field_news_image.content }}
      </div>
      <div></div>
    </div>
  </div>
  <div class=\"col-md-7\">
    <a class=\"fh5co_magna py-2\">
        {{ fields.title.content }}
    </a>
    <br>
    <a class=\"fh5co_mini_time py-3\">
      {{ fields.uid.content }} - {{ fields.created.content }}
    </a>
    <br>
    <div class=\"fh5co_consectetur\">
        {{ fields.body.content }}
    </div>
  </div>
</div>
", "themes/custom/news_vision/templates/views-view-fields--news.html.twig", "C:\\Users\\Ayush\\Sites\\devdesktop\\news-theme\\themes\\custom\\news_vision\\templates\\views-view-fields--news.html.twig");
    }
}
