<?php

/* base.html.twig */
class __TwigTemplate_7c6369e83c3063607aa6a7818b9ad7ff8dbc19bfe080d9edcb72747c7acf10f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'cover' => array($this, 'block_cover'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
      crossorigin=\"anonymous\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">
    <!-- Animate -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    <!-- Jquery -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "  </head>

  <body>
  <span id=\"top\"></span>
  ";
        // line 26
        $this->displayBlock('navbar', $context, $blocks);
        // line 82
        echo "

    <main role=\"main\">
    
      ";
        // line 86
        $this->displayBlock('cover', $context, $blocks);
        // line 87
        echo "
        <div class=\"container-fluid px-0\" id=\"content\">
            ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "        </div>

    </main>

    <footer class=\"text-muted\" id=\"footer\">
      <div class=\"container text-center\">
        <p>&copy; 2018 Global Market -
          <a href=\"#top\"><i class=\"fas text-dark fa-arrow-circle-up\"></i></a>
        </p>
      </div>
    </footer>



<!-- ================================================== -->

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js\" integrity=\"sha256-crfkMD0BL2TtiwpbIlXF/SVmGSvOtgbMM8GBkibVKyc=\"
  crossorigin=\"anonymous\"></script>
<!-- WoW -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script>new WOW().init();</script>


<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrolling.js"), "html", null, true);
        echo "\"></script>

<script>
\$('#search-btn').click(function(){
  \$('#searchI').toggle(200);
});

\$('a.dropdown-toggle, .dropdown-menu a').on('touchstart', function(e) {
  e.stopPropagation();
});

</script>

";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "General Market | Project 3";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 27
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark bg-dark py-0\">
        <a class=\"navbar-brand\" href=\"/\"><i class=\"fas fa-expand\"></i></a>

        <div class=\"ml-auto pr-2  order-sm-1 order-md-4\">
        ";
        // line 31
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 39
        echo "
        ";
        // line 45
        echo "
        </div>

        <button class=\"navbar-toggler order-sm-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars\" aria-controls=\"navbars\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbars\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/\">Home
                <span class=\"sr-only\">(current)</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact\">Contact</a>
            </li>
            <li class=\"nav-item dropdown\">
                <button class=\"nav-link drop-btn dropdown-toggle\" id=\"dropdown-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">Categories</button>
                <div class=\"dropdown-menu mb-2\" aria-labelledby=\"dropdown-btn\">
                    <a class=\"dropdown-item py-0\" href=\"#\">Example</a>
                </div>
            </li>
        </ul>
        </div>

        <div class=\"search-container  order-sm-3\">
            <form class=\"form-inline my-2 justify-content-center my-md-0\">
                <input class=\"form-control py-0\" style=\"display: none;\" id=\"searchI\" type=\"text\" placeholder=\"Search\">
                <a class=\"nav-link fa-lg py-2 pl-2\" id=\"search-btn\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </form>
        </div>
    </nav>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 32
        echo "
            ";
        // line 34
        echo "                <a href=\"#\" class=\"nav-link\">
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo " <i class=\"fas fa-sign-in-alt\"></i> 
                </a>
            ";
        // line 38
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_cover($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cover"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 130,  295 => 89,  278 => 86,  268 => 38,  263 => 35,  260 => 34,  257 => 32,  248 => 31,  202 => 45,  199 => 39,  197 => 31,  191 => 27,  182 => 26,  165 => 21,  147 => 9,  134 => 131,  132 => 130,  116 => 117,  87 => 90,  85 => 89,  81 => 87,  79 => 86,  73 => 82,  71 => 26,  65 => 22,  63 => 21,  59 => 20,  45 => 9,  41 => 8,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
    <title>{% block title %}General Market | Project 3{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\"
      crossorigin=\"anonymous\">
    <link href=\"https://use.fontawesome.com/releases/v5.0.8/css/all.css\" rel=\"stylesheet\">
    <!-- Animate -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    <!-- Jquery -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
  </head>

  <body>
  <span id=\"top\"></span>
  {% block navbar %}
    <nav class=\"navbar navbar-expand-md navbar-dark bg-dark py-0\">
        <a class=\"navbar-brand\" href=\"/\"><i class=\"fas fa-expand\"></i></a>

        <div class=\"ml-auto pr-2  order-sm-1 order-md-4\">
        {% block header_navigation_links %}

            {# {% if is_granted('ROLE_ADMIN') %} #}
                <a href=\"#\" class=\"nav-link\">
                    {{ 'Login'|trans }} <i class=\"fas fa-sign-in-alt\"></i> 
                </a>
            {# {% endif %} #}
        {% endblock %}

        {# {% if app.user %}
            <a href=\"#\" class=\"nav-link\">
                 {{ 'Logout'|trans }} <i class=\"fas fa-sign-out-alt\"></i>
            </a>
        {% endif %} #}

        </div>

        <button class=\"navbar-toggler order-sm-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars\" aria-controls=\"navbars\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbars\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/\">Home
                <span class=\"sr-only\">(current)</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact\">Contact</a>
            </li>
            <li class=\"nav-item dropdown\">
                <button class=\"nav-link drop-btn dropdown-toggle\" id=\"dropdown-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">Categories</button>
                <div class=\"dropdown-menu mb-2\" aria-labelledby=\"dropdown-btn\">
                    <a class=\"dropdown-item py-0\" href=\"#\">Example</a>
                </div>
            </li>
        </ul>
        </div>

        <div class=\"search-container  order-sm-3\">
            <form class=\"form-inline my-2 justify-content-center my-md-0\">
                <input class=\"form-control py-0\" style=\"display: none;\" id=\"searchI\" type=\"text\" placeholder=\"Search\">
                <a class=\"nav-link fa-lg py-2 pl-2\" id=\"search-btn\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </form>
        </div>
    </nav>
  {% endblock %}


    <main role=\"main\">
    
      {% block cover %}{% endblock %}

        <div class=\"container-fluid px-0\" id=\"content\">
            {% block body %}{% endblock %}
        </div>

    </main>

    <footer class=\"text-muted\" id=\"footer\">
      <div class=\"container text-center\">
        <p>&copy; 2018 Global Market -
          <a href=\"#top\"><i class=\"fas text-dark fa-arrow-circle-up\"></i></a>
        </p>
      </div>
    </footer>



<!-- ================================================== -->

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js\" integrity=\"sha256-crfkMD0BL2TtiwpbIlXF/SVmGSvOtgbMM8GBkibVKyc=\"
  crossorigin=\"anonymous\"></script>
<!-- WoW -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script>new WOW().init();</script>


<script src=\"{{ asset('js/scrolling.js') }}\"></script>

<script>
\$('#search-btn').click(function(){
  \$('#searchI').toggle(200);
});

\$('a.dropdown-toggle, .dropdown-menu a').on('touchstart', function(e) {
  e.stopPropagation();
});

</script>

{% block javascripts %}{% endblock %}

  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Project3\\app\\Resources\\views\\base.html.twig");
    }
}
