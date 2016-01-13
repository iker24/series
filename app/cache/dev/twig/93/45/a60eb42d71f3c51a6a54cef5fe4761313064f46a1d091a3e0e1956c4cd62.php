<?php

/* uniSeriesBundle:noticias:buscarAutor.html.twig */
class __TwigTemplate_9345a60eb42d71f3c51a6a54cef5fe4761313064f46a1d091a3e0e1956c4cd62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "<br>Buscar autor:
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("noticias_responder");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"autorNoticias\" value=\"\">
    <input type=\"submit\" value=\"OK\">
</form>
    ";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle:noticias:buscarAutor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
