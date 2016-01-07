<?php

/* uniSeriesBundle:series:buscarSeries.html.twig */
class __TwigTemplate_8496efc09fdf433321a9ad4ef3b3a32ec774e45e24919d3c5d6ad50f0dc0c043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('cuerpo', $context, $blocks);
    }

    public function block_cuerpo($context, array $blocks = array())
    {
        // line 2
        echo "  
<br>Buscar serie:
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("series_responder");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"nombreSeries\" value=\"\">
    <input type=\"submit\" value=\"OK\">
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle:series:buscarSeries.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  20 => 1,);
    }
}
