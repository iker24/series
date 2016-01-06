<?php

/* uniSeriesBundle::layout.html.twig */
class __TwigTemplate_4b104bde8dc86f55974178b993c66b73de0cb5d48c332bc3ba94c00a48ee41df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     
     
       <div id=\"contenido\">
            ";
        // line 7
        $this->displayBlock('contenido', $context, $blocks);
        // line 13
        echo "        </div>
 
           <div id=\"menuLateral\">
            ";
        // line 16
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 19
        echo "        </div>
 
        <div id=\"pie\">
            ";
        // line 22
        $this->displayBlock('pie', $context, $blocks);
        // line 25
        echo "        </div>
 
 
 
 
 
 
 
 
 
 
 ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "                 <a href=\"";
        echo $this->env->getExtension('routing')->getPath("series");
        echo "\"> Series</a>
                  <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\"> Noticias</a>
                  
                 
                ";
    }

    // line 16
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 17
        echo "                
                ";
    }

    // line 22
    public function block_pie($context, array $blocks = array())
    {
        // line 23
        echo "                
                ";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  94 => 22,  89 => 17,  86 => 16,  78 => 9,  73 => 8,  70 => 7,  55 => 25,  53 => 22,  48 => 19,  46 => 16,  41 => 13,  39 => 7,  34 => 4,  31 => 3,);
    }
}
