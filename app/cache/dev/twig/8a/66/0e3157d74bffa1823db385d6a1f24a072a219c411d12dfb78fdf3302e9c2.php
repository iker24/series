<?php

/* uniSeriesBundle:categorias:show.html.twig */
class __TwigTemplate_8a660e3157d74bffa1823db385d6a1f24a072a219c411d12dfb78fdf3302e9c2 extends Twig_Template
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
        echo "<h1>categorias</h1>

   
                
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreCategorias"), "html", null, true);
        echo "</td> <br>
         <br>

       
    
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("categorias");
        echo "\">
            Volver a categorias
        </a>
    </li>
    <li>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle:categorias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  53 => 18,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}
