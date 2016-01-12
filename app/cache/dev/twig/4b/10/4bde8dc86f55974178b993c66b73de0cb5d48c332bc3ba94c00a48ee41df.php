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
        // line 15
        echo "        </div>
 
           <div id=\"menuLateral\">
            ";
        // line 18
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 21
        echo "        </div>
 
        <div id=\"pie\">
            ";
        // line 24
        $this->displayBlock('pie', $context, $blocks);
        // line 27
        echo "        </div>
 
 
 
 
 
 
 
 
 
 
 ";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "                  
                 
                  
                 
                
                 
              ";
    }

    // line 18
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 19
        echo "                
                ";
    }

    // line 24
    public function block_pie($context, array $blocks = array())
    {
        // line 25
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
        return array (  94 => 25,  91 => 24,  86 => 19,  83 => 18,  73 => 8,  70 => 7,  55 => 27,  48 => 21,  41 => 15,  34 => 4,  87 => 32,  80 => 27,  63 => 18,  58 => 16,  53 => 24,  46 => 18,  43 => 11,  39 => 7,  31 => 3,  28 => 3,);
    }
}
