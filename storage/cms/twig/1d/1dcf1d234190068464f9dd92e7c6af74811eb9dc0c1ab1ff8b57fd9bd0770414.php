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

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_9034f9a208699b9998f255a6727896805420d479f6e9cc0c3dba2857234f680e extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<h1>Contact Us</h1>
<form>
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\" style=\"margin-bottom: 25px\">
            <label>Name</label>
            <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"col-md-6 mb-3\" style=\"margin-bottom: 25px\">
            <label>Email</label>
            <input type=\"email\" class=\"form-control\">
        </div>
    </div>
    <div class=\"mb-5\" style=\"margin-bottom: 25px\">
        <label>Message</label>
        <textarea class=\"form-control\" row=\"5\" column=\"5\"></textarea>
    </div>
    <button class=\"btn btn-primary mt-5\" type=\"submit\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contact Us</h1>
<form>
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\" style=\"margin-bottom: 25px\">
            <label>Name</label>
            <input type=\"text\" class=\"form-control\">
        </div>
        <div class=\"col-md-6 mb-3\" style=\"margin-bottom: 25px\">
            <label>Email</label>
            <input type=\"email\" class=\"form-control\">
        </div>
    </div>
    <div class=\"mb-5\" style=\"margin-bottom: 25px\">
        <label>Message</label>
        <textarea class=\"form-control\" row=\"5\" column=\"5\"></textarea>
    </div>
    <button class=\"btn btn-primary mt-5\" type=\"submit\">Submit</button>
</form>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
