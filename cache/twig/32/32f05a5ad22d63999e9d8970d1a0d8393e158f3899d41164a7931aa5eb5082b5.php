<?php

/* contact.twig */
class __TwigTemplate_0ef69fe54f777b95986bd763017ffd648d1a6537a7b3bc283c03c377861bdc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.twig", "contact.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <strong>Contact</strong>
    <h2>Ralph Waldo Emerson</h2>

    <p>Unfortately, Ralph Waldo Emerson has been deceased for over 100 years so he's not particularly expediant at replying to email but you can make an attempt below. However, if you require face to gravestone contact you can visit his remains at:</p>
    <address>
      <h4>Sleepy Hollow Cemetery</h4>
      <p>34 Bedford Street<br>
      Concord, MA 01742, United States<br>
    <a href=\"https://www.google.com/maps/place/Sleepy+Hollow+Cemetery/@42.464126,-71.343098,15z/data=!4m2!3m1!1s0x0:0x9c41d0f83df689a6?sa=X&ei=ZCgLVZb5Io_hoASc7oHwCQ&ved=0CH0Q_BIwCw\">Google Map</a></p>
    </address>

    <form action=\"\" method=\"POST\">
      <fieldset>
        <input type=\"text\" placeholder=\"Full Name\">
        <input type=\"email\" placeholder=\"Email Address\">
        <textarea placeholder=\"Your message...\"></textarea>
      </fieldset>
      <input type=\"submit\" class=\"button\">
    </form>
  ";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'main.twig' %}*/
/* */
/*   {% block content %}*/
/*     <strong>Contact</strong>*/
/*     <h2>Ralph Waldo Emerson</h2>*/
/* */
/*     <p>Unfortately, Ralph Waldo Emerson has been deceased for over 100 years so he's not particularly expediant at replying to email but you can make an attempt below. However, if you require face to gravestone contact you can visit his remains at:</p>*/
/*     <address>*/
/*       <h4>Sleepy Hollow Cemetery</h4>*/
/*       <p>34 Bedford Street<br>*/
/*       Concord, MA 01742, United States<br>*/
/*     <a href="https://www.google.com/maps/place/Sleepy+Hollow+Cemetery/@42.464126,-71.343098,15z/data=!4m2!3m1!1s0x0:0x9c41d0f83df689a6?sa=X&ei=ZCgLVZb5Io_hoASc7oHwCQ&ved=0CH0Q_BIwCw">Google Map</a></p>*/
/*     </address>*/
/* */
/*     <form action="" method="POST">*/
/*       <fieldset>*/
/*         <input type="text" placeholder="Full Name">*/
/*         <input type="email" placeholder="Email Address">*/
/*         <textarea placeholder="Your message..."></textarea>*/
/*       </fieldset>*/
/*       <input type="submit" class="button">*/
/*     </form>*/
/*   {% endblock content %}*/
