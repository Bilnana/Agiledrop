<?php

/* themes/custom/agiledrop/templates/page.html.twig */
class __TwigTemplate_35d4691c910396dbfc2a35e9415ffb589d66edc2ad73623a0b2f2331d6a2ebbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 70);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 50
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\">
      <div class=\"layout-container-grey\">
          <div class=\"container\">
              ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_block", array()), "html", null, true));
        echo "
          </div>
      </div>
        <div class=\"layout-container\">
            <div class=\"container\">
              ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
            </div>
        </div>
        <div class=\"layout-container\">
            <div class=\"banner\">
              ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
            </div>
        </div>
    </header>

    ";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 71
            echo "      <div class=\"featured-top\">
        <div class=\"featured-top__inner layout-container clearfix\">
          <div class=\"container\">
          ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 79
        echo "
    <div id=\"main-wrapper\" class=\"layout-container clearfix\">
        <div class=\"container\">
          ";
        // line 82
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 83
            echo "            <aside class=\"sidebar-first\">
              <div class=\"sidebar-section\">
                  ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
              </div>
            </aside>
          ";
        }
        // line 89
        echo "
            <section class=\"main-container\">
              <a id=\"main-content\"></a>
                ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </section>

          ";
        // line 95
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 96
            echo "            <aside class=\"sidebar-second\">
              <div class=\"sidebar-section\">
                ";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
              </div>
            </aside>
          ";
        }
        // line 102
        echo "      </div>

        ";
        // line 104
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()))) {
            // line 105
            echo "          <div class=\"featured-bottom\">
              <div class=\"layout-container-grey\">
                  <div class=\"container\">
                     ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true));
            echo "
                  </div>
              </div>
              <div class=\"layout-container\">
                  <div class=\"container\">
                      ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true));
            echo "
                  </div>
              </div>
              <div class=\"layout-container\">
                  <div class=\"container\">
                      ";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()), "html", null, true));
            echo "
                  </div>
              </div>
          </div>
        ";
        }
        // line 123
        echo "    </div>

    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 127
        if ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()))) {
            // line 128
            echo "          <div class=\"site-footer__top layout-container clearfix\">
              <div class=\"container\">
                  ";
            // line 130
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
                  ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
                  ";
            // line 132
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
                  ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
                  ";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
            echo "
              </div>
          </div>
        ";
        }
        // line 138
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_six", array())) {
            // line 139
            echo "          <div class=\"site-footer__bottom layout-container\">
            ";
            // line 140
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_six", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 143
        echo "      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/agiledrop/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 143,  207 => 140,  204 => 139,  201 => 138,  194 => 134,  190 => 133,  186 => 132,  182 => 131,  178 => 130,  174 => 128,  172 => 127,  166 => 123,  158 => 118,  150 => 113,  142 => 108,  137 => 105,  135 => 104,  131 => 102,  124 => 98,  120 => 96,  118 => 95,  112 => 92,  107 => 89,  100 => 85,  96 => 83,  94 => 82,  89 => 79,  81 => 74,  76 => 71,  74 => 70,  66 => 65,  58 => 60,  50 => 55,  43 => 50,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Copy from bartik theme.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
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
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\">
      <div class=\"layout-container-grey\">
          <div class=\"container\">
              {{ page.top_block}}
          </div>
      </div>
        <div class=\"layout-container\">
            <div class=\"container\">
              {{ page.primary_menu }}
            </div>
        </div>
        <div class=\"layout-container\">
            <div class=\"banner\">
              {{ page.header }}
            </div>
        </div>
    </header>

    {% if page.featured_top %}
      <div class=\"featured-top\">
        <div class=\"featured-top__inner layout-container clearfix\">
          <div class=\"container\">
          {{ page.featured_top }}
          </div>
        </div>
      </div>
    {% endif %}

    <div id=\"main-wrapper\" class=\"layout-container clearfix\">
        <div class=\"container\">
          {% if page.sidebar_first %}
            <aside class=\"sidebar-first\">
              <div class=\"sidebar-section\">
                  {{ page.sidebar_first }}
              </div>
            </aside>
          {% endif %}

            <section class=\"main-container\">
              <a id=\"main-content\"></a>
                {{ page.content }}
            </section>

          {% if page.sidebar_second %}
            <aside class=\"sidebar-second\">
              <div class=\"sidebar-section\">
                {{ page.sidebar_second }}
              </div>
            </aside>
          {% endif %}
      </div>

        {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
          <div class=\"featured-bottom\">
              <div class=\"layout-container-grey\">
                  <div class=\"container\">
                     {{ page.featured_bottom_first }}
                  </div>
              </div>
              <div class=\"layout-container\">
                  <div class=\"container\">
                      {{ page.featured_bottom_second }}
                  </div>
              </div>
              <div class=\"layout-container\">
                  <div class=\"container\">
                      {{ page.featured_bottom_third }}
                  </div>
              </div>
          </div>
        {% endif %}
    </div>

    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth %}
          <div class=\"site-footer__top layout-container clearfix\">
              <div class=\"container\">
                  {{ page.footer_first }}
                  {{ page.footer_second }}
                  {{ page.footer_third }}
                  {{ page.footer_fourth }}
                  {{ page.footer_fifth }}
              </div>
          </div>
        {% endif %}
        {% if page.footer_six %}
          <div class=\"site-footer__bottom layout-container\">
            {{ page.footer_six }}
          </div>
        {% endif %}
      </div>
    </footer>
  </div>
</div>
";
    }
}
