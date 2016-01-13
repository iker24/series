<?php

/* uniSeriesBundle:premios:index.html.twig */
class __TwigTemplate_6e7b1d79e33bfceb8e612175348f420daf0a9b65805f5a0b2aaaece52baf25f3 extends Twig_Template
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
        echo "<h1>Premios de las series</h1>

    
        
            
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "            
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("premios_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrePremios"), "html", null, true);
            echo "</a><br>
               <br>
                
               <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uniseries/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoPremios")) . "")), "html", null, true);
            echo "\" width=40% height=40%/><br>
                
               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        
    

        <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("premios_new");
        echo "\">
                Crear nuevo Premio
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle:premios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  63 => 18,  53 => 14,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
