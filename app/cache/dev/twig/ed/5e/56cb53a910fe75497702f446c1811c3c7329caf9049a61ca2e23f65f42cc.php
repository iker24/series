<?php

/* uniSeriesBundle:noticias:index.html.twig */
class __TwigTemplate_ed5e56cb53a910fe75497702f446c1811c3c7329caf9049a61ca2e23f65f42cc extends Twig_Template
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
        echo "<h1>Noticias</h1>

    
        <tbody>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 9
            echo "           
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloNoticias"), "html", null, true);
            echo "</a><br>
                
                 <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uniseries/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoNoticias")) . "")), "html", null, true);
            echo "\" width=20% height=20%/>
                 <br>
                 ";
            // line 14
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaNoticias")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaNoticias"), "Y-m-d "), "html", null, true);
            }
            echo "<br><br>
                 <p>By: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autorNoticias"), "html", null, true);
            echo "</p><br><br>
               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
               Crear una nueva noticia
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "uniSeriesBundle:noticias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  71 => 18,  62 => 15,  56 => 14,  51 => 12,  44 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
