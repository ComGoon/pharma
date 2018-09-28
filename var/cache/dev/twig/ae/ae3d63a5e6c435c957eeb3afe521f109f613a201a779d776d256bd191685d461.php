<?php

/* @App/Pharmacy/stock_pharmacy.html.twig */
class __TwigTemplate_791f8378efe9c4d394d4606d0d5dcb28bdcbb40209a3eec041bb1c04d3412065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Pharmacy/stock_pharmacy.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pharmacy/stock_pharmacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pharmacy/stock_pharmacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stock";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "
    ";
        // line 8
        if (($this->getAttribute(($context["stock"] ?? null), 0, array(), "array", true, true) &&  !(null === $this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), 0, array(), "array")))) {
            // line 9
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), 0, array(), "array"), "pharmacies", array()), "namePharmacy", array()), "html", null, true);
            echo "</h1>
        <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), 0, array(), "array"), "pharmacies", array()), "openingTime", array()), "html", null, true);
            echo "</h2>
    <table class=\"table table-light table-bordered table-striped\">
    <tr>
        <th style=\"text-align: center\">Designation</th>
        <th style=\"text-align: center\">Description</th>
        <th style=\"text-align: center\">Fabricant</th>
        <th style=\"text-align: center\">Prix</th>
        <th style=\"text-align: center\">Quantité</th>
        <th style=\"text-align: center\" width=\"10%\">Mettre à jour</th>
    </tr>
        ";
            // line 21
            echo "        ";
            // line 22
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stock"] ?? $this->getContext($context, "stock")));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacyStock"]) {
                // line 23
                echo "        <tr>
            <td width=\"15%\" style=\"text-align: center\"\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pharmacyStock"], "medications", array()), "name", array()), "html", null, true);
                echo "</td>
            <td width=\"30%\" >";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pharmacyStock"], "medications", array()), "description", array()), "html", null, true);
                echo "</td>
            <td width=\"10%\" style=\"text-align: center\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pharmacyStock"], "medications", array()), "manufacturer", array()), "html", null, true);
                echo "</td>
            <td style=\"text-align: center\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacyStock"], "price", array()), "html", null, true);
                echo " DT</td>
            <td style=\"text-align: center\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["pharmacyStock"], "quantity", array()), "html", null, true);
                echo "   paquets</td>


        <td style=\"text-align: center\">
        <div>
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_pharmacy_update", array("StockID" => $this->getAttribute($context["pharmacyStock"], "id", array()), "PharmacyID" => $this->getAttribute($this->getAttribute($context["pharmacyStock"], "pharmacies", array()), "id", array()), "MedicationID" => $this->getAttribute($this->getAttribute($context["pharmacyStock"], "medications", array()), "id", array()))), "html", null, true);
                echo "\"><p class=\"lnr lnr-redo\" style=\"font-weight:bold;color: #1c7430;font-size: 20px;text-align: center\"></p></a>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Mettre à jour</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            ...
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div></td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pharmacyStock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    </table>
    ";
        } else {
            // line 59
            echo "        <h2>Pas de medicaments dans votre stock</h2>
    ";
        }
        // line 61
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_pharmacy_add", array("PharmacyID" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\">add</a>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Pharmacy/stock_pharmacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  161 => 59,  157 => 57,  127 => 33,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  95 => 22,  93 => 21,  80 => 10,  75 => 9,  73 => 8,  70 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/layout.html.twig' %}

{% block title %}Stock{% endblock %}

{% block body %}
    {#{{ dump(stock) }}#}

    {% if stock[0] is defined and stock[0] is  not null %}
        <h1>{{ stock[0].pharmacies.namePharmacy}}</h1>
        <h2>{{ stock[0].pharmacies.openingTime}}</h2>
    <table class=\"table table-light table-bordered table-striped\">
    <tr>
        <th style=\"text-align: center\">Designation</th>
        <th style=\"text-align: center\">Description</th>
        <th style=\"text-align: center\">Fabricant</th>
        <th style=\"text-align: center\">Prix</th>
        <th style=\"text-align: center\">Quantité</th>
        <th style=\"text-align: center\" width=\"10%\">Mettre à jour</th>
    </tr>
        {#{{ dump(stock) }}#}
        {#{{ dump(stock[0]) }}#}
    {% for pharmacyStock in stock %}
        <tr>
            <td width=\"15%\" style=\"text-align: center\"\">{{ pharmacyStock.medications.name}}</td>
            <td width=\"30%\" >{{ pharmacyStock.medications.description}}</td>
            <td width=\"10%\" style=\"text-align: center\">{{ pharmacyStock.medications.manufacturer}}</td>
            <td style=\"text-align: center\">{{ pharmacyStock.price}} DT</td>
            <td style=\"text-align: center\">{{ pharmacyStock.quantity }}   paquets</td>


        <td style=\"text-align: center\">
        <div>
            <a href=\"{{ path('stock_pharmacy_update',{'StockID':pharmacyStock.id,'PharmacyID':pharmacyStock.pharmacies.id,'MedicationID':pharmacyStock.medications.id}) }}\"><p class=\"lnr lnr-redo\" style=\"font-weight:bold;color: #1c7430;font-size: 20px;text-align: center\"></p></a>
            <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Mettre à jour</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            ...
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div></td>
        </tr>
    {% endfor %}
    </table>
    {% else %}
        <h2>Pas de medicaments dans votre stock</h2>
    {% endif %}
        <a href=\"{{ path('stock_pharmacy_add',{'PharmacyID':id}) }}\">add</a>

    {#{{ dump(stock[0]) }}#}
{% endblock %}
", "@App/Pharmacy/stock_pharmacy.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Pharmacy\\stock_pharmacy.html.twig");
    }
}
