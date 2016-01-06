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
        // line 20
        echo "       </div>
         <div class=\"body\" >";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "         </div>
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
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
        // line 18
        echo $this->env->getExtension('routing')->getPath("categorias");
        echo "\"> Categorias</a>
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "        
        
        ";
    }

    // line 26
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
        return array (  110 => 26,  104 => 22,  101 => 21,  95 => 18,  91 => 17,  87 => 16,  82 => 15,  79 => 14,  71 => 7,  68 => 6,  62 => 5,  56 => 27,  54 => 26,  51 => 25,  49 => 21,  46 => 20,  44 => 14,  36 => 10,  34 => 6,  30 => 5,  24 => 1,);
    }
}
