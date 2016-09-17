<?php

/* default/index.html.twig */
class __TwigTemplate_019dd45071a4f3d254279cfd8093b2aa0f52b1666233475c8a2cd5095af65145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce79686e0cd968aecbe332b150be566c9dd9e8176ed804b83c95deeb9845d5f3 = $this->env->getExtension("native_profiler");
        $__internal_ce79686e0cd968aecbe332b150be566c9dd9e8176ed804b83c95deeb9845d5f3->enter($__internal_ce79686e0cd968aecbe332b150be566c9dd9e8176ed804b83c95deeb9845d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce79686e0cd968aecbe332b150be566c9dd9e8176ed804b83c95deeb9845d5f3->leave($__internal_ce79686e0cd968aecbe332b150be566c9dd9e8176ed804b83c95deeb9845d5f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bed6ca7236a93a2fc87ce139ee9b37c3ec4dda6bbe84331db4c3c01ab98676f7 = $this->env->getExtension("native_profiler");
        $__internal_bed6ca7236a93a2fc87ce139ee9b37c3ec4dda6bbe84331db4c3c01ab98676f7->enter($__internal_bed6ca7236a93a2fc87ce139ee9b37c3ec4dda6bbe84331db4c3c01ab98676f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"file-tree\" class=\"col-xs-3\">
  <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentFolder"]) ? $context["currentFolder"] : $this->getContext($context, "currentFolder")), "name", array()), "html", null, true);
        echo "</h4>
  ";
        // line 6
        if (($this->getAttribute((isset($context["currentFolder"]) ? $context["currentFolder"] : null), "idParent", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["currentFolder"]) ? $context["currentFolder"] : $this->getContext($context, "currentFolder")), "idParent", array())))) {
            // line 7
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file_explorer", array("page" => $this->getAttribute($this->getAttribute((isset($context["currentFolder"]) ? $context["currentFolder"] : $this->getContext($context, "currentFolder")), "idParent", array()), "id", array()))), "html", null, true);
            echo "\">Retourner au répertoire racine</a>
  ";
        }
        // line 9
        echo "  <ul class=\"subFolders\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subFolders"]) ? $context["subFolders"] : $this->getContext($context, "subFolders")));
        foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
            // line 11
            echo "          <li  class=\"subFolder\" ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("file_explorer", array("page" => $this->getAttribute($context["subFolder"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subFolder"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
  <ul class=\"img-indicators\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "        <li data-target=\"#carousel\" class=\"img-indicator\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\"><img src=\"/mini_project/web/images/original/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\"></li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
</div>
<div id=\"carousel\" class=\"carousel slide col-xs-9\" data-ride=\"carousel\">
  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 23
            echo "    <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "active";
            }
            echo "\">
      <img src=\"/mini_project/web/images/original/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"...\">
      <div class=\"carousel-caption\">
        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "
      </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </div>

  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
        
        $__internal_bed6ca7236a93a2fc87ce139ee9b37c3ec4dda6bbe84331db4c3c01ab98676f7->leave($__internal_bed6ca7236a93a2fc87ce139ee9b37c3ec4dda6bbe84331db4c3c01ab98676f7_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5527e6003cf71ffccd1a136808f2f3095acc2ef557727c5be7c5d6c9392f604 = $this->env->getExtension("native_profiler");
        $__internal_b5527e6003cf71ffccd1a136808f2f3095acc2ef557727c5be7c5d6c9392f604->enter($__internal_b5527e6003cf71ffccd1a136808f2f3095acc2ef557727c5be7c5d6c9392f604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "<script>
\$('.carousel').carousel()
</script>
";
        
        $__internal_b5527e6003cf71ffccd1a136808f2f3095acc2ef557727c5be7c5d6c9392f604->leave($__internal_b5527e6003cf71ffccd1a136808f2f3095acc2ef557727c5be7c5d6c9392f604_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 43,  185 => 42,  167 => 30,  149 => 26,  144 => 24,  137 => 23,  120 => 22,  114 => 18,  95 => 16,  78 => 15,  74 => 13,  63 => 11,  59 => 10,  56 => 9,  50 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="file-tree" class="col-xs-3">*/
/*   <h4>{{currentFolder.name}}</h4>*/
/*   {%if currentFolder.idParent is defined and currentFolder.idParent is not null%}*/
/*     <a href="{{ path('file_explorer', {'page': currentFolder.idParent.id}) }}">Retourner au répertoire racine</a>*/
/*   {%endif%}*/
/*   <ul class="subFolders">*/
/*     {% for subFolder in subFolders %}*/
/*           <li  class="subFolder" ><a href="{{ path('file_explorer', {'page': subFolder.id}) }}">{{subFolder.name}}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <ul class="img-indicators">*/
/*   {% for image in images %}*/
/*         <li data-target="#carousel" class="img-indicator" data-slide-to="{{loop.index0}}"><img src="/mini_project/web/images/original/{{image.path}}"></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* </div>*/
/* <div id="carousel" class="carousel slide col-xs-9" data-ride="carousel">*/
/*   <div class="carousel-inner" role="listbox">*/
/*     {% for image in images %}*/
/*     <div class="item {%if loop.index0 == 0%}active{%endif%}">*/
/*       <img src="/mini_project/web/images/original/{{image.path}}" alt="...">*/
/*       <div class="carousel-caption">*/
/*         {{image.title}}*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('.carousel').carousel()*/
/* </script>*/
/* {% endblock %}*/
/* */
