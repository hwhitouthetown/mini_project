<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bc57ece9d746c5284967224354cffc0fbe2d60d8a5e96b0a09f0d0dbc51c8c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fa685185b954d5eba30321f31bcc51e82b492a1638990d52d1046a1db1ef4c8 = $this->env->getExtension("native_profiler");
        $__internal_4fa685185b954d5eba30321f31bcc51e82b492a1638990d52d1046a1db1ef4c8->enter($__internal_4fa685185b954d5eba30321f31bcc51e82b492a1638990d52d1046a1db1ef4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4fa685185b954d5eba30321f31bcc51e82b492a1638990d52d1046a1db1ef4c8->leave($__internal_4fa685185b954d5eba30321f31bcc51e82b492a1638990d52d1046a1db1ef4c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
