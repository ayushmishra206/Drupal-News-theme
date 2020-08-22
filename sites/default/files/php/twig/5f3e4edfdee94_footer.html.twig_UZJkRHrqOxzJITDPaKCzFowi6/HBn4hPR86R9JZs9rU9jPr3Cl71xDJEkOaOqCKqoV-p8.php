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

/* themes/custom/news_vision/templates/footer.html.twig */
class __TwigTemplate_2de9cdd153c3f54b4f09ee2bf3688845acce68c7253feb19f48eb38272942b04 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 16];
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
        echo "<footer>
  <div class=\"container-fluid fh5co_footer_right_reserved\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-md-6 py-4 Reserved\">
          © Copyright 2020, All rights reserved. Design with Drupal.
        </div>
        <div class=\"col-12 col-md-6 spdp_right py-4\">
          <a href=\"#\" class=\"footer_last_part_menu\">Home</a>
          <a href=\"Contact_us.html\" class=\"footer_last_part_menu\">About</a>
          <a href=\"Contact_us.html\" class=\"footer_last_part_menu\">Contact</a>
          <a href=\"blog.html\" class=\"footer_last_part_menu\">Latest News</a>
        </div>
      </div>
    </div>
      ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/news_vision/templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <div class=\"container-fluid fh5co_footer_right_reserved\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-md-6 py-4 Reserved\">
          © Copyright 2020, All rights reserved. Design with Drupal.
        </div>
        <div class=\"col-12 col-md-6 spdp_right py-4\">
          <a href=\"#\" class=\"footer_last_part_menu\">Home</a>
          <a href=\"Contact_us.html\" class=\"footer_last_part_menu\">About</a>
          <a href=\"Contact_us.html\" class=\"footer_last_part_menu\">Contact</a>
          <a href=\"blog.html\" class=\"footer_last_part_menu\">Latest News</a>
        </div>
      </div>
    </div>
      {{ page.footer }}
  </div>
</footer>", "themes/custom/news_vision/templates/footer.html.twig", "C:\\Users\\Ayush\\Sites\\devdesktop\\news-theme\\themes\\custom\\news_vision\\templates\\footer.html.twig");
    }
}
