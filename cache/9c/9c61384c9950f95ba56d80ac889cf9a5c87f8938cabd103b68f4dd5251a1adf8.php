<?php

/* index.html */
class __TwigTemplate_a068b5d37be4aa24b99e2bf7db2c1059b8d067343921db68c60143dc9c3dd2c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <script src=\"js/main.js\"></script>
</head>
<body>
    <div id=\"mess\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["mess"] ?? null), "html", null, true);
        echo "</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/olivier/Nextcloud/www/cours/devapp/tp1/templates/index.html");
    }
}
