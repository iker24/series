<?php

/* ::base.html.twig */
class __TwigTemplate_e6d670d2273d6ab2d04ad3e87464cfc7435f28708e7bd9d1f2106e15b7d5b1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"barracentro naranja\">
           ";
        // line 14
        $this->displayBlock('contenido', $context, $blocks);
        // line 21
        echo "       </div>
         <div class=\"body\" >";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "         </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SeriesTop";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uniseries/css/series.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        
        ";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "         <a href=\"";
        echo $this->env->getExtension('routing')->getPath("series");
        echo "\"> Series</a>
         <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\"> Noticias</a>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("premios");
        echo "\"> Premios</a>
        
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("noticias_buscar");
        echo "\"> Buscar Autor</a>
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "        
        
        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 22,  71 => 7,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 23,  91 => 17,  62 => 5,  49 => 22,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 6,  56 => 28,  87 => 16,  46 => 21,  27 => 4,  21 => 2,  44 => 14,  25 => 3,  31 => 4,  38 => 6,  26 => 6,  24 => 1,  19 => 1,  79 => 14,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 27,  108 => 36,  101 => 32,  98 => 31,  96 => 19,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 15,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 27,  51 => 26,  48 => 8,  45 => 17,  42 => 10,  39 => 9,  36 => 10,  33 => 4,  30 => 5,);
    }
}
