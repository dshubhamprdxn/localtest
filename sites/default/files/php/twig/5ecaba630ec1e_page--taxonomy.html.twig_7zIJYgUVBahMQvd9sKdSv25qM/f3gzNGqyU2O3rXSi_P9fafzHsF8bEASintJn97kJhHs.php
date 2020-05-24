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

/* themes/custom/mytheme/templates/page/page--taxonomy.html.twig */
class __TwigTemplate_94366c40805368a729c90640c49d300855fd23e53a9ab06567c2c25c439a337b extends \Twig\Template
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

        ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 21
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 25
        echo "
        <div class=\"content col-lg-";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_articles_block_1", [])), "html", null, true);
        echo "
          ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_videos_block_1", [])), "html", null, true);
        echo "
          ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_infographics_block_1", [])), "html", null, true);
        echo "
          ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__industry_case_studies_block_1", [])), "html", null, true);
        echo "
          ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "content", []), "views_block__sponser_logo_block_1", [])), "html", null, true);
        echo "
        </div>
        
        ";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 35
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 39
        echo "    </div>
  </section>


  ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 44
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 56
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container wrapper\">
        ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 62
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page/page--taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  172 => 58,  168 => 56,  166 => 55,  163 => 54,  154 => 48,  148 => 44,  146 => 43,  140 => 39,  134 => 36,  131 => 35,  129 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  101 => 26,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  81 => 16,  74 => 12,  70 => 10,  68 => 9,  61 => 5,  55 => 1,);
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

        {% if page.sidebar_first %}
          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endif %}

        <div class=\"content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12\">
          {{ page.content.views_block__industry_articles_block_1 }}
          {{ page.content.views_block__industry_videos_block_1 }}
          {{ page.content.views_block__industry_infographics_block_1 }}
          {{ page.content.views_block__industry_case_studies_block_1 }}
          {{ page.content.views_block__sponser_logo_block_1 }}
        </div>
        
        {% if page.sidebar_second %}
          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endif %}
    </div>
  </section>


  {% if page.panel_first_1 %}
    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {{ page.panel_first_1 }}
          </div>
        </div>
      </div>
    </section>
  {% endif %}

  {% if page.footer %}
    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container wrapper\">
        {{ page.footer }}
      </div>
    </footer>
  {% endif %}

</div>
", "themes/custom/mytheme/templates/page/page--taxonomy.html.twig", "C:\\xampp\\htdocs\\shubham\\Drupal_8\\drupal-test2\\themes\\custom\\mytheme\\templates\\page\\page--taxonomy.html.twig");
    }
}
