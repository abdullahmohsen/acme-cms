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

/* C:\xampp\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_143b2173c5897365fde594fcbc2fc301ff8f532d70cc3a503ade8a52db907f45 extends \Twig\Template
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
        $tags = array("if" => 10);
        $filters = array("escape" => 3, "page" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'page'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "site_name", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample07\" aria-controls=\"navbarsExample07\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExample07\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "id", [], "any", false, false, true, 10) == "homepage")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
        </li>
        <li class=\"nav-item ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "id", [], "any", false, false, true, 13) == "about")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
        </li>
        <li class=\"nav-item ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16) == "blog")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
        </li>
        <li class=\"nav-item ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19) == "contact")) {
            echo "active";
        }
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  109 => 19,  104 => 17,  98 => 16,  93 => 14,  87 => 13,  82 => 11,  76 => 10,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">{{ this.theme.site_name }}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample07\" aria-controls=\"navbarsExample07\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExample07\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item {% if this.page.id == 'homepage' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
        </li>
        <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
        </li>
        <li class=\"nav-item {% if this.page.id == 'blog' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a>
        </li>
        <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\">
          <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}
