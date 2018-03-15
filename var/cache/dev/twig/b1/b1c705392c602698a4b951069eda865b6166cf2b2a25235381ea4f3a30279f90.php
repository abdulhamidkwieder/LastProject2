<?php

/* default/index.html.twig */
class __TwigTemplate_fd1bfcef95d9accaf95bfdf443d79b3ccc275e24e14d86b7180b2b2192b14f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cover' => array($this, 'block_cover'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .cover {background: url('../img/cover.jpg');}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_cover($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cover"));

        // line 9
        echo "    ";
        $this->loadTemplate("default/index.html.twig", "default/index.html.twig", 9, "1134436676")->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    ";
        // line 15
        echo "    <div class=\"px-sm-0 px-md-5 d-flex justify-content-center flex-wrap\">
        <div class=\"animated wow fadeInLeft col-sm-12 text-center col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-credit-card\"></i>
        We have an entire team dedicated to protect you and every item you sell.
        </div>
        <div class=\"animated wow fadeInUp col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-tv\"></i>
        Whether it's building awareness of your business or a new product.
        </div>
        <div class=\"animated wow fadeInRight col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 far fa-handshake\"></i>
        When your item sells, we make the payment process easy for you and the buyer.
        </div>";
        // line 28
        echo "    </div>

    <hr class=\" w-100\">

    ";
        // line 33
        echo "
    <div class=\"my-3 d-flex w-100 register-fp container px-0 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"col-sm-12 col-md-5 animated wow fadeInLeft mb-4\">
            <h3 class=\"text-danger font-weight-bold\">RAPID SEARCH</h3>
            <h5>Find you bidding, find your needs.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Register Now!</a>
            
        </div>
        <div class=\"col-sm-12 col-md-5 animated wow fadeInRight\">
            <img class=\"my-2\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fp-reg.png"), "html", null, true);
        echo "\" alt=\"Register\">
        </div>
    </div> ";
        // line 45
        echo "
    ";
        // line 47
        echo "    <div class=\"text-center mt-3 px-0 w-100 deal-fp bg-white py-5 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"animated px-3 wow fadeInLeft\">
            <img class=\"my-2\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/deal.png"), "html", null, true);
        echo "\" alt=\"Register\">
        </div>
        <div class=\"animated px-3 wow fadeInRight mb-4\">
            <h3 class=\"text-danger font-weight-bold\">MAKE A DEAL</h3>
            <h5>Get the best offers.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Browse</a>
            
        </div>

    </div>";
        // line 59
        echo "
    ";
        // line 61
        echo "    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.584727827908!2d16.35831225038552!3d48.19535217912609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07868cf3cfb5%3A0x3c6daa2cfecbc65c!2sKettenbr%C3%BCckengasse%2C+Wien!5e0!3m2!1sen!2sat!4v1521025399300\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    <div class=\"social fa-2x text-center bg-dark py-3\">
        <a href=\"#\"><i class=\"fab text-white fa-facebook\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-linkedin\"></i></a>
    </div>
    ";
        // line 69
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "
<script>
\$('#confirm').on('show.bs.modal', function(e) {
    \$(this).find('#confirm-btn').attr({
        'href': \$(e.relatedTarget).data('href')
    });
     \$(this).find('#modal-ename').html(\$(e.relatedTarget).data('name'));
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  184 => 73,  175 => 72,  164 => 69,  155 => 61,  152 => 59,  140 => 49,  136 => 47,  133 => 45,  128 => 42,  117 => 33,  111 => 28,  97 => 15,  94 => 13,  85 => 12,  74 => 9,  65 => 8,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <style>
        .cover {background: url('../img/cover.jpg');}
    </style>
{% endblock %}

{% block cover %}
    {% embed \"default/cover.html.twig\" %}{% endembed %}
{% endblock %}

{% block body %}

    {# Three columns  #}
    <div class=\"px-sm-0 px-md-5 d-flex justify-content-center flex-wrap\">
        <div class=\"animated wow fadeInLeft col-sm-12 text-center col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-credit-card\"></i>
        We have an entire team dedicated to protect you and every item you sell.
        </div>
        <div class=\"animated wow fadeInUp col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-tv\"></i>
        Whether it's building awareness of your business or a new product.
        </div>
        <div class=\"animated wow fadeInRight col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 far fa-handshake\"></i>
        When your item sells, we make the payment process easy for you and the buyer.
        </div>{# Three columns end  #}
    </div>

    <hr class=\" w-100\">

    {# Register offer #}

    <div class=\"my-3 d-flex w-100 register-fp container px-0 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"col-sm-12 col-md-5 animated wow fadeInLeft mb-4\">
            <h3 class=\"text-danger font-weight-bold\">RAPID SEARCH</h3>
            <h5>Find you bidding, find your needs.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Register Now!</a>
            
        </div>
        <div class=\"col-sm-12 col-md-5 animated wow fadeInRight\">
            <img class=\"my-2\" src=\"{{ asset('img/fp-reg.png') }}\" alt=\"Register\">
        </div>
    </div> {# Register offer end #}

    {# Deal #}
    <div class=\"text-center mt-3 px-0 w-100 deal-fp bg-white py-5 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"animated px-3 wow fadeInLeft\">
            <img class=\"my-2\" src=\"{{ asset('img/deal.png') }}\" alt=\"Register\">
        </div>
        <div class=\"animated px-3 wow fadeInRight mb-4\">
            <h3 class=\"text-danger font-weight-bold\">MAKE A DEAL</h3>
            <h5>Get the best offers.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Browse</a>
            
        </div>

    </div>{# Deal end #}

    {# Contact #}
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.584727827908!2d16.35831225038552!3d48.19535217912609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07868cf3cfb5%3A0x3c6daa2cfecbc65c!2sKettenbr%C3%BCckengasse%2C+Wien!5e0!3m2!1sen!2sat!4v1521025399300\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    <div class=\"social fa-2x text-center bg-dark py-3\">
        <a href=\"#\"><i class=\"fab text-white fa-facebook\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-linkedin\"></i></a>
    </div>
    {# Contact end #}

{% endblock %}

{% block javascripts %}

<script>
\$('#confirm').on('show.bs.modal', function(e) {
    \$(this).find('#confirm-btn').attr({
        'href': \$(e.relatedTarget).data('href')
    });
     \$(this).find('#modal-ename').html(\$(e.relatedTarget).data('name'));
});
</script>
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\Project3\\app\\Resources\\views\\default\\index.html.twig");
    }
}


/* default/index.html.twig */
class __TwigTemplate_fd1bfcef95d9accaf95bfdf443d79b3ccc275e24e14d86b7180b2b2192b14f60_1134436676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("default/cover.html.twig", "default/index.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/cover.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  321 => 9,  184 => 73,  175 => 72,  164 => 69,  155 => 61,  152 => 59,  140 => 49,  136 => 47,  133 => 45,  128 => 42,  117 => 33,  111 => 28,  97 => 15,  94 => 13,  85 => 12,  74 => 9,  65 => 8,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <style>
        .cover {background: url('../img/cover.jpg');}
    </style>
{% endblock %}

{% block cover %}
    {% embed \"default/cover.html.twig\" %}{% endembed %}
{% endblock %}

{% block body %}

    {# Three columns  #}
    <div class=\"px-sm-0 px-md-5 d-flex justify-content-center flex-wrap\">
        <div class=\"animated wow fadeInLeft col-sm-12 text-center col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-credit-card\"></i>
        We have an entire team dedicated to protect you and every item you sell.
        </div>
        <div class=\"animated wow fadeInUp col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 fas fa-tv\"></i>
        Whether it's building awareness of your business or a new product.
        </div>
        <div class=\"animated wow fadeInRight col-sm-12 text-center  col-md-6 col-lg-4 p-4\">
        <i class=\"w-100 text-danger text-center fa-2x mb-3 far fa-handshake\"></i>
        When your item sells, we make the payment process easy for you and the buyer.
        </div>{# Three columns end  #}
    </div>

    <hr class=\" w-100\">

    {# Register offer #}

    <div class=\"my-3 d-flex w-100 register-fp container px-0 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"col-sm-12 col-md-5 animated wow fadeInLeft mb-4\">
            <h3 class=\"text-danger font-weight-bold\">RAPID SEARCH</h3>
            <h5>Find you bidding, find your needs.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Register Now!</a>
            
        </div>
        <div class=\"col-sm-12 col-md-5 animated wow fadeInRight\">
            <img class=\"my-2\" src=\"{{ asset('img/fp-reg.png') }}\" alt=\"Register\">
        </div>
    </div> {# Register offer end #}

    {# Deal #}
    <div class=\"text-center mt-3 px-0 w-100 deal-fp bg-white py-5 d-flex justify-content-center flex-wrap align-items-center\">
        <div class=\"animated px-3 wow fadeInLeft\">
            <img class=\"my-2\" src=\"{{ asset('img/deal.png') }}\" alt=\"Register\">
        </div>
        <div class=\"animated px-3 wow fadeInRight mb-4\">
            <h3 class=\"text-danger font-weight-bold\">MAKE A DEAL</h3>
            <h5>Get the best offers.</h5>
            <a class=\"btn btn-danger\" href=\"#\">Browse</a>
            
        </div>

    </div>{# Deal end #}

    {# Contact #}
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.584727827908!2d16.35831225038552!3d48.19535217912609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07868cf3cfb5%3A0x3c6daa2cfecbc65c!2sKettenbr%C3%BCckengasse%2C+Wien!5e0!3m2!1sen!2sat!4v1521025399300\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
    <div class=\"social fa-2x text-center bg-dark py-3\">
        <a href=\"#\"><i class=\"fab text-white fa-facebook\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab text-white fa-linkedin\"></i></a>
    </div>
    {# Contact end #}

{% endblock %}

{% block javascripts %}

<script>
\$('#confirm').on('show.bs.modal', function(e) {
    \$(this).find('#confirm-btn').attr({
        'href': \$(e.relatedTarget).data('href')
    });
     \$(this).find('#modal-ename').html(\$(e.relatedTarget).data('name'));
});
</script>
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\Project3\\app\\Resources\\views\\default\\index.html.twig");
    }
}
