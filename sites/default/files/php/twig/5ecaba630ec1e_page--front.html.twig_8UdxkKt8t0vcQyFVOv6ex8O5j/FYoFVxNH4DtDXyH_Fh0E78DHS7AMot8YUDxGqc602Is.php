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

/* themes/custom/mytheme/templates/page/page--front.html.twig */
class __TwigTemplate_722146caf2da23b7808efcd3e5d1d851c8d738cf144cee88a6b6ad464e23cf12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container wrapper\">
    ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </div>
</header>

  ";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 10
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
      <div class=\"container wrapper\">
        ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "\t\t\t\t\t\t
      </div>
    </nav>
  ";
        }
        // line 16
        echo "
  <section id=\"main\" class=\"main\" role=\"main\">
    <div class=\"container wrapper\">
        <div class=\"content col-lg-";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_articles_block_1", [])), "html", null, true);
        echo "
          ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_videos_block_1", [])), "html", null, true);
        echo "
          ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_infographics_block_1", [])), "html", null, true);
        echo "
          ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_case_studies_block_1", [])), "html", null, true);
        echo "
          ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__sponser_logo_block_1", [])), "html", null, true);
        echo "
        </div>
    </div>
  </section>

  ";
        // line 29
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 30
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 36
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  122 => 32,  118 => 30,  116 => 29,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  86 => 19,  81 => 16,  74 => 12,  70 => 10,  68 => 9,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container wrapper\">
    {{ page.header }}
  </div>
</header>

  {% if page.main_menu %}
    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
      <div class=\"container wrapper\">
        {{ page.main_menu }}\t\t\t\t\t\t
      </div>
    </nav>
  {% endif %}

  <section id=\"main\" class=\"main\" role=\"main\">
    <div class=\"container wrapper\">
        <div class=\"content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12\">
          {{ page.content.views_block__industry_articles_block_1 }}
          {{ page.content.views_block__industry_videos_block_1 }}
          {{ page.content.views_block__industry_infographics_block_1 }}
          {{ page.content.views_block__industry_case_studies_block_1 }}
          {{ page.content.views_block__sponser_logo_block_1 }}
        </div>
    </div>
  </section>

  {% if page.footer %}
    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        {{ page.footer }}
      </div>
    </footer>
  {% endif %}

</div>
", "themes/custom/mytheme/templates/page/page--front.html.twig", "C:\\xampp\\htdocs\\shubham\\Drupal_8\\drupal-test2\\themes\\custom\\mytheme\\templates\\page\\page--front.html.twig");
    }
}
