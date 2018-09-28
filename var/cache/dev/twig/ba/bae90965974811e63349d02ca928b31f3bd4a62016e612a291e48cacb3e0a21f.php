<?php

/* @App/Supplier/stock_supplier.html.twig */
class __TwigTemplate_aef7ae7e911bfb91f42359ee26c5e38caaecf68453c3cb00172d5e68743ae65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Supplier/stock_supplier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebody' => array($this, 'block_titlebody'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Supplier/stock_supplier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Supplier/stock_supplier.html.twig"));

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

        echo "Ajouter des médicaments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_titlebody($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlebody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlebody"));

        // line 5
        echo "    <h2>My stock</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        // line 9
        echo "    ";
        if (($this->getAttribute(($context["stock"] ?? null), 0, array(), "array", true, true) &&  !(null === $this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), 0, array(), "array")))) {
            // line 10
            echo "
    <h1>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), 0, array(), "array"), "suppliers", array()), "nameSociety", array()), "html", null, true);
            echo "</h1>
    ";
            // line 13
            echo "    <table class=\"table table-light table-bordered table-striped\">
        <tr>
            <th style=\"text-align: center\">Designation</th>
            <th style=\"text-align: center\">Description</th>
            <th style=\"text-align: center\">Fabricant</th>
            <th style=\"text-align: center\">Prix</th>
            <th style=\"text-align: center\">Quantité</th>
            <th style=\"text-align: center\" width=\"10%\">Mettre à jour</th>
        </tr>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stock"] ?? $this->getContext($context, "stock")));
            foreach ($context['_seq'] as $context["_key"] => $context["supplierStock"]) {
                // line 23
                echo "            <tr>
                <td width=\"15%\" style=\"text-align: center\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supplierStock"], "medications", array()), "name", array()), "html", null, true);
                echo "</td>
                <td width=\"30%\" >";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supplierStock"], "medications", array()), "description", array()), "html", null, true);
                echo "</td>
                <td width=\"10%\" style=\"text-align: center\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["supplierStock"], "medications", array()), "manufacturer", array()), "html", null, true);
                echo "</td>
                <td style=\"text-align: center\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["supplierStock"], "price", array()), "html", null, true);
                echo " DT</td>
                <td style=\"text-align: center\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["supplierStock"], "quantity", array()), "html", null, true);
                echo "   paquets</td>


                <td style=\"text-align: center\">
                    <div>
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_supplier_update", array("StockID" => $this->getAttribute($context["supplierStock"], "id", array()), "SupplierID" => $this->getAttribute($this->getAttribute($context["supplierStock"], "suppliers", array()), "id", array()), "MedicationID" => $this->getAttribute($this->getAttribute($context["supplierStock"], "medications", array()), "id", array()))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplierStock'], $context['_parent'], $context['loop']);
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
        echo "    ";
        // line 62
        echo "    <br>
    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_supplier_add", array("SupplierID" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"style-button-order\">Ajouter des médicaments</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Supplier/stock_supplier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  183 => 62,  181 => 61,  177 => 59,  173 => 57,  143 => 33,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  116 => 23,  112 => 22,  101 => 13,  97 => 11,  94 => 10,  91 => 9,  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter des médicaments{% endblock %}
{% block titlebody %}
    <h2>My stock</h2>
{% endblock %}
{% block body %}
    {#{{ dump(stock) }}#}
    {% if stock[0] is defined and stock[0] is  not null %}

    <h1>{{ stock[0].suppliers.nameSociety}}</h1>
    {#<h2>{{ stock[0].suppliers.openingTime}}</h2>#}
    <table class=\"table table-light table-bordered table-striped\">
        <tr>
            <th style=\"text-align: center\">Designation</th>
            <th style=\"text-align: center\">Description</th>
            <th style=\"text-align: center\">Fabricant</th>
            <th style=\"text-align: center\">Prix</th>
            <th style=\"text-align: center\">Quantité</th>
            <th style=\"text-align: center\" width=\"10%\">Mettre à jour</th>
        </tr>
        {% for supplierStock in stock %}
            <tr>
                <td width=\"15%\" style=\"text-align: center\">{{ supplierStock.medications.name}}</td>
                <td width=\"30%\" >{{ supplierStock.medications.description}}</td>
                <td width=\"10%\" style=\"text-align: center\">{{ supplierStock.medications.manufacturer}}</td>
                <td style=\"text-align: center\">{{ supplierStock.price}} DT</td>
                <td style=\"text-align: center\">{{ supplierStock.quantity }}   paquets</td>


                <td style=\"text-align: center\">
                    <div>
                        <a href=\"{{ path('stock_supplier_update',{'StockID':supplierStock.id,'SupplierID':supplierStock.suppliers.id,'MedicationID':supplierStock.medications.id}) }}\"><p class=\"lnr lnr-redo\" style=\"font-weight:bold;color: #1c7430;font-size: 20px;text-align: center\"></p></a>
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
    {#{{ dump(stock[0]) }}#}
    <br>
    <a href=\"{{ path('stock_supplier_add',{'SupplierID':id}) }}\" class=\"style-button-order\">Ajouter des médicaments</a>
{% endblock %}
", "@App/Supplier/stock_supplier.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Supplier\\stock_supplier.html.twig");
    }
}
