<?php

/* partials/base.html.twig */
class __TwigTemplate_65409e10f4007c895c836c137101854e3a873877231da398f1b21326684e3231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(), "method");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    ";
        // line 27
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
</head>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $context["home"] = $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array())), "method");
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
    <!-- content start -->

    ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "    <!-- content end -->


    ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "
</body>
</html>
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "<body>
";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "        <a href=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\" class=\"logo-sng\"><span class=\"logo\" style=\"background-image: url(";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo ")\"></span></a>
    ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"page-content\">
        <div class=\"wrapper\">
            ";
        // line 47
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    ";
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "    <!-- footer start -->
    <footer class=\"site-footer\">
      <a class=\"subscribe\" href=\"";
        // line 57
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> Subscribe!</span></a>
        <div class=\"inner\">
             <section class=\"copyright\">All content copyright <a href=\"mailto:";
        // line 59
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "email", array());
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array());
        echo "</a> &copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " &bull; All rights reserved.</section>
             <section class=\"poweredby\">Made with <a href=\"http://getgrav.org\"> Grav</a></section>
        </div>
    </footer>
    <!-- footer end -->
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 59,  200 => 57,  196 => 55,  193 => 54,  185 => 47,  181 => 45,  178 => 44,  168 => 39,  165 => 38,  160 => 33,  157 => 32,  150 => 67,  148 => 66,  145 => 65,  143 => 54,  138 => 51,  136 => 44,  131 => 41,  129 => 38,  126 => 37,  124 => 36,  121 => 35,  119 => 32,  113 => 30,  111 => 29,  108 => 28,  106 => 27,  99 => 23,  95 => 22,  92 => 21,  59 => 19,  55 => 18,  45 => 11,  37 => 10,  26 => 2,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>*/
/*     <meta name="description" content="{{ site.description }}" />*/
/* */
/*     <meta name="HandheldFriendly" content="True" />*/
/*     <meta name="MobileOptimized" content="320" />*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">*/
/* */
/*     {% for meta in page.metadata %}*/
/*     <meta {% if meta.name %}name="{{ meta.name }}" {% endif %}{% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}{% if meta.charset %}charset="{{ meta.charset }}" {% endif %}{% if meta.property %}property="{{ meta.property }}" {% endif %}{% if meta.content %}content="{{ meta.content }}" {% endif %}/>*/
/*     {% endfor %}*/
/* */
/*     <link rel="canonical" href="{{ page.url() }}">*/
/*     <link rel="shortcut icon" href="{{ theme_url }}/images/favicon.png">*/
/*     <link rel="stylesheet" href="http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i">*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*     {% do assets.addCss('theme://css/main.css') %}*/
/*     {% do assets.addCss('theme://css/custom.css') %}*/
/*     {# {% do assets.addCss('theme://css/print.css') %} #}*/
/*     {{ assets.css() }}*/
/* </head>*/
/* {% block body %}*/
/* <body>*/
/* {% endblock %}*/
/* */
/* {% set home = pages.find(config.system.home.alias) %}*/
/* */
/*     {% block header %}*/
/*         <a href="{{ base_url_relative }}" class="logo-sng"><span class="logo" style="background-image: url({{ base_url_relative }}{{ site.logo }})"></span></a>*/
/*     {% endblock %}*/
/* */
/*     <!-- content start -->*/
/* */
/*     {% block content %}*/
/*     <div class="page-content">*/
/*         <div class="wrapper">*/
/*             {{ content }}*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/*     <!-- content end -->*/
/* */
/* */
/*     {% block footer %}*/
/*     <!-- footer start -->*/
/*     <footer class="site-footer">*/
/*       <a class="subscribe" href="{{ base_url }}/blog.rss"> <span class="tooltip"> <i class="fa fa-rss"></i> Subscribe!</span></a>*/
/*         <div class="inner">*/
/*              <section class="copyright">All content copyright <a href="mailto:{{ site.email}}">{{ site.name }}</a> &copy; {{ "now"|date('Y') }} &bull; All rights reserved.</section>*/
/*              <section class="poweredby">Made with <a href="http://getgrav.org"> Grav</a></section>*/
/*         </div>*/
/*     </footer>*/
/*     <!-- footer end -->*/
/*     {% endblock %}*/
/* */
/* {% include 'partials/javascripts.html.twig' %}*/
/* */
/* </body>*/
/* </html>*/
/* */
