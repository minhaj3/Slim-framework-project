<?php

/* main.twig */
class __TwigTemplate_44b89838dc6cf223c1797ad0b99609a0fb5e2bc5c3bbcc973a2387cea52e4cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "  
</head>

<body>
<!--
  <div id=\"feedback\" class=\"success\">
    <h3>Success!</h3>
    <p>You're reading all about Emerson.</p>
  </div>
-->


  <header>
    <h1>Ralph Waldo Emerson</h1>
    <nav>
      <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\" class=\"selected\">About</a>
      <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("contact"), "html", null, true);
        echo "\">Contact</a>
    </nav>
  </header>

  <div class=\"emerson\">
    <img src=\"images/emerson.jpg\" alt=\"Picture of Ralph Waldo Emerson\">
  </div>

  <main>
    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "  </main>

  <footer>
  ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "  </footer>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "  <meta charset=\"utf-8\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"Ralph Waldo Emerson\">
  <meta name=\"author\" content=\"Treehouse\">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel=\"stylesheet\" href=\"css/master.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
  <script src=\"js/global.js\"></script>
";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Ralph Waldo Emerson";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "    <p>A project from <strong><a href=\"http://teamtreehouse.com\">Treehouse</a></strong></p>
    <nav>
      <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\" class=\"selected\">About</a>
      <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("contact"), "html", null, true);
        echo "\">Contact</a>
    </nav>
  ";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  118 => 47,  114 => 45,  111 => 44,  107 => 40,  104 => 39,  87 => 7,  84 => 6,  81 => 5,  73 => 51,  71 => 44,  66 => 41,  64 => 39,  52 => 30,  48 => 29,  31 => 14,  29 => 5,  23 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* <head>*/
/* {% block head %}*/
/*   <meta charset="utf-8">*/
/*   <title>{% block title %}Ralph Waldo Emerson{% endblock title %}</title>*/
/*   <meta name="description" content="Ralph Waldo Emerson">*/
/*   <meta name="author" content="Treehouse">*/
/*   <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>*/
/*   <link rel="stylesheet" href="css/master.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*   <script src="js/global.js"></script>*/
/* {% endblock head %}  */
/* </head>*/
/* */
/* <body>*/
/* <!--*/
/*   <div id="feedback" class="success">*/
/*     <h3>Success!</h3>*/
/*     <p>You're reading all about Emerson.</p>*/
/*   </div>*/
/* -->*/
/* */
/* */
/*   <header>*/
/*     <h1>Ralph Waldo Emerson</h1>*/
/*     <nav>*/
/*       <a href="{{path_for('home')}}" class="selected">About</a>*/
/*       <a href="{{path_for('contact')}}">Contact</a>*/
/*     </nav>*/
/*   </header>*/
/* */
/*   <div class="emerson">*/
/*     <img src="images/emerson.jpg" alt="Picture of Ralph Waldo Emerson">*/
/*   </div>*/
/* */
/*   <main>*/
/*     {% block content %}*/
/*     {% endblock content %}*/
/*   </main>*/
/* */
/*   <footer>*/
/*   {% block footer %}*/
/*     <p>A project from <strong><a href="http://teamtreehouse.com">Treehouse</a></strong></p>*/
/*     <nav>*/
/*       <a href="{{path_for('home')}}" class="selected">About</a>*/
/*       <a href="{{path_for('contact')}}">Contact</a>*/
/*     </nav>*/
/*   {% endblock footer %}*/
/*   </footer>*/
/* */
/* </body>*/
/* </html>*/
/* */
