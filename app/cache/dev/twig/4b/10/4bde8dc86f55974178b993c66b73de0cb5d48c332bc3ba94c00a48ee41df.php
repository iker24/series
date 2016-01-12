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
        return array (  70 => 7,  58 => 16,  53 => 24,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 22,  71 => 7,  67 => 15,  63 => 18,  59 => 14,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 23,  91 => 24,  62 => 5,  49 => 14,  94 => 25,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 28,  87 => 32,  46 => 18,  27 => 4,  21 => 2,  44 => 14,  25 => 3,  31 => 3,  38 => 6,  26 => 6,  24 => 1,  19 => 1,  79 => 14,  72 => 16,  69 => 25,  47 => 12,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 27,  108 => 36,  101 => 32,  98 => 31,  96 => 19,  83 => 18,  74 => 14,  66 => 24,  55 => 27,  52 => 21,  50 => 10,  43 => 11,  41 => 15,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 19,  82 => 15,  80 => 27,  73 => 8,  64 => 14,  60 => 6,  57 => 11,  54 => 27,  51 => 13,  48 => 21,  45 => 17,  42 => 10,  39 => 7,  36 => 10,  33 => 4,  30 => 5,);
    }
}
