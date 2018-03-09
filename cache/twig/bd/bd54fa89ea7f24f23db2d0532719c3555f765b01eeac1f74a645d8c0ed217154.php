<?php

/* post.twig */
class __TwigTemplate_ae3715b0875ad29e898c2c3154be6259e66277e066434640579af45fc5633f32 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Slim</h1>
<div>a microframework for PHP</div>

";
        // line 12
        if (($context["flash"] ?? null)) {
            // line 13
            echo "<div style=\"margin:30px auto;\">
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["flash"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 15
                echo "        <p>";
                echo twig_escape_filter($this->env, $context["f"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</div>
";
        }
        // line 19
        echo "
<div style=\"margin-top: 30px\">
    ";
        // line 21
        if (($context["post"] ?? null)) {
            // line 22
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "        <p>";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 25,  72 => 23,  67 => 22,  65 => 21,  61 => 19,  57 => 17,  48 => 15,  44 => 14,  41 => 13,  39 => 12,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Slim 3</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='{{ base_url() }}/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Slim</h1>
<div>a microframework for PHP</div>

{% if flash %}
<div style=\"margin:30px auto;\">
    {% for f in flash %}
        <p>{{ f }}</p>
    {% endfor %}
</div>
{% endif %}

<div style=\"margin-top: 30px\">
    {% if post %}
         {% for p in post %}
        <p>{{ p }}</p>
    {% endfor %}
    {% endif %}
</div>
</body>
</html>
", "post.twig", "/home/stovar/rentaByke/templates/post.twig");
    }
}
