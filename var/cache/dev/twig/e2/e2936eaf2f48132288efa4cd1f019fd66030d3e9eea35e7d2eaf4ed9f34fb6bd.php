<?php

/* @App/Order/list_prescription_pharmacy.html.twig */
class __TwigTemplate_1574752d85fdcadac9b55d3e30ba0b30903e72d7aeed4d77cb614dcc6c28ed77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Order/list_prescription_pharmacy.html.twig", 126);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Order/list_prescription_pharmacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Order/list_prescription_pharmacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "    ";
        $this->displayBlock('modal', $context, $blocks);
        // line 145
        echo "    <div class=\"container list-container\">
        <h2>Liste des ordonances</h2>
        <nav class=\"navbar filter\">
            <form class=\"form-inline\">
                <input class=\"form-control mr-sm-2 search-bar\" type=\"search\" placeholder=\"Chercher une ordonnance\" aria-label=\"Search\">
            </form>
            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Status
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    ";
        // line 159
        echo "                    <a class=\"dropdown-item\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "pending"));
        echo "\">Non Confirmé</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "success"));
        echo "\">Confirmé</a>
                </div>
            </div>
        </nav>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">Reference</th>
                <th scope=\"col\">Pharmacie</th>
                <th scope=\"col\">Fournisseur</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Action</th>
            </tr>
            </thead>
            ";
        // line 175
        if (($context["prescription"] ?? $this->getContext($context, "prescription"))) {
            // line 176
            echo "                <tbody>
                ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["prescription"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
                // line 178
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "reference", array()), "html", null, true);
                echo "</th>
                        <th>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                echo " </th>
                            <th>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "supplier", array()), "nameSociety", array()), "html", null, true);
                echo "</th>


                        <th>";
                // line 184
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prescription"], "dateAdd", array()), "d/m/Y H:i:s"), "html", null, true);
                echo "</th>
                        <th>
                            ";
                // line 186
                if (($this->getAttribute($context["prescription"], "status", array()) == "Annulée")) {
                    // line 187
                    echo "                                <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 188
$context["prescription"], "status", array()) == "en attente")) {
                    // line 189
                    echo "                                <span class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 190
$context["prescription"], "status", array()) == "Confirmée")) {
                    // line 191
                    echo "                                <span class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 193
                echo "                        </th>
                        <th><a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_order_medication_supplier", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\">Visualiser l'ordonnance</a></th>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                </tbody>
            ";
        } else {
            // line 199
            echo "                <h4>Aucune ordonnance n'a été trouvée</h4>
            ";
        }
        // line 201
        echo "        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 129
        echo "        <!-- Modal -->
        <div class=\"modal fade\" id=\"prescription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.search-bar').keyup(function () {
                let term = \$(this).val();
                if(term != \"\") {
                    \$.ajax({
                        url: '";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supplier_search_query");
        echo "',
                        method: \"GET\",
                        data: {term:term},
                        cache: false,
                    }).done( function(response) {
                        //console.log(response);
                        \$(\".table-striped tbody\").replaceWith(response);
                    }).fail(function(jxh,textmsg,errorThrown){
                        console.log(textmsg);
                        console.log(errorThrown);
                    });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Order/list_prescription_pharmacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 212,  218 => 205,  209 => 204,  184 => 129,  175 => 128,  163 => 201,  159 => 199,  155 => 197,  146 => 194,  143 => 193,  137 => 191,  135 => 190,  130 => 189,  128 => 188,  123 => 187,  121 => 186,  116 => 184,  110 => 181,  106 => 180,  102 => 179,  99 => 178,  95 => 177,  92 => 176,  90 => 175,  72 => 160,  67 => 159,  54 => 145,  51 => 128,  42 => 127,  11 => 126,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends '@App/layout.html.twig' %}#}
{#{% block title %}AJOUT ORDONONCE{% endblock %}#}

{#{% block body %}#}
    {#<table class=\"table table-bordered table-striped table-condensed\">#}
        {#<thead>#}
        {#<tr>#}
            {#<th>Réference</th>#}
            {#<th>Date d'ajout</th>#}
            {#<th>Status</th>#}
            {#<th>Voir List des Médicament</th>#}
        {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for prescription in prescription %}#}
            {#<tr>#}
                {#<td>{{ prescription.reference }}</td>#}
                {#<td>#}
                    {#{{ prescription.dateAdd|date('Y-m-d H:i:s') }}#}
                {#</td>#}
                {#<td>#}
                    {#{{ prescription.status }}#}
                {#</td>#}
                {#<td>#}
                    {#<a href=\"{{ path('list_priscription_medication_pharmacy',{ id:prescription.id}) }}\">voir</a>#}
                {#</td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}
{#{% endblock %}#}


















{#{% extends '@App/layout.html.twig' %}#}

{#{% block body %}#}
     {#{% if prescription  is empty  %}#}
        {#<h4>Aucune ordonnance n'a été trouvée</h4>#}
    {#{% else %}#}

    {#<div class=\"container list-container\">#}

        {#<h2>Liste des ordonances</h2>#}
        {#<nav class=\"navbar filter\">#}
            {#<form class=\"form-inline\">#}
                {#<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Chercher une ordonnance\" aria-label=\"Search\">#}
            {#</form>#}
            {#<div class=\"dropdown\">#}
                {#<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
                    {#Status#}
                {#</button>#}
                {#<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">#}
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'canceled'}) }}\">Annulée</a>#}
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'ongoing'}) }}\">En cours de traitement</a>#}
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'delivred'}) }}\">Livrée</a>#}
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'pending'}) }}\">Non Confirmé</a>#}
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'success'}) }}\">Confirmé</a>#}
                {#</div>#}
            {#</div>#}
        {#</nav>#}


        {#<table class=\"table table-striped\">#}
            {#<thead>#}
            {#<tr>#}
                {#<th scope=\"col\">Reference</th>#}
                {#<th scope=\"col\">Patient</th>#}
                {#<th scope=\"col\">Pharmacie</th>#}
                {#<th scope=\"col\">Docteur</th>#}
                {#<th scope=\"col\">Date d'ajout</th>#}
                {#<th scope=\"col\">Status</th>#}
                {#<th scope=\"col\">Action</th>#}
            {#</tr>#}
            {#</thead>#}
                {#{% for prescription in prescription %}#}
                    {#<tbody>#}
                    {#<tr>#}
                        {#<th scope=\"row\">{{ prescription.reference }}</th>#}
                        {#<th>{{ prescription.patient.user.firstName }} {{ prescription.patient.user.name }}</th>#}
                        {#{% if  prescription.pharmacy  is defined and  prescription.pharmacy is not null %}#}
                            {#<th>{{ prescription.pharmacy.namePharmacy }}</th>#}
                        {#{% else %}#}
                            {#<th>choisir une pharmacie</th>#}
                        {#{% endif %}#}
                        {#<th>{{ prescription.doctor.user }} {{ prescription.doctor.user.name }}</th>#}
                        {#<th>{{ prescription.dateAdd|date(\"d/m/Y\")  }}</th>#}
                        {#<th>#}
                            {#{% if prescription.status == \"Non confirmé\" %}#}
                                {#<span class=\"badge badge-warning\">{{ prescription.status }}</span>#}
                            {#{% elseif prescription.status == \"Annulée\" %}#}
                                {#<span class=\"badge badge-danger\">{{ prescription.status }}</span>#}
                            {#{% elseif prescription.status == \"Livrée\" %}#}
                                {#<span class=\"badge badge-primary\">{{ prescription.status }}</span>#}
                            {#{% elseif prescription.status == \"Confirmé\" %}#}
                                {#<span class=\"badge badge-success\">{{ prescription.status }}</span>#}
                            {#{% endif %}#}
                        {#</th>#}
                        {#<th><a href=\"{{ path('list_priscription_medication_pharmacy',{ id:prescription.id}) }}\" class=\"show-prescription\">Visualiser l'ordonnance</a></th>#}
                    {#</tr>#}
                    {#</tbody>#}
                {#{% endfor %}#}
            {#{% endif %}#}
        {#</table>#}
    {#</div>#}
{#{% endblock %}#}




{% extends '@App/layout.html.twig' %}
{% block body %}
    {% block modal %}
        <!-- Modal -->
        <div class=\"modal fade\" id=\"prescription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
    <div class=\"container list-container\">
        <h2>Liste des ordonances</h2>
        <nav class=\"navbar filter\">
            <form class=\"form-inline\">
                <input class=\"form-control mr-sm-2 search-bar\" type=\"search\" placeholder=\"Chercher une ordonnance\" aria-label=\"Search\">
            </form>
            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Status
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'canceled'}) }}\">Annulée</a>
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'ongoing'}) }}\">En cours de traitement</a>
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'delivred'}) }}\">Livrée</a>#}
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'pending'}) }}\">Non Confirmé</a>
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'success'}) }}\">Confirmé</a>
                </div>
            </div>
        </nav>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">Reference</th>
                <th scope=\"col\">Pharmacie</th>
                <th scope=\"col\">Fournisseur</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Action</th>
            </tr>
            </thead>
            {% if prescription %}
                <tbody>
                {% for prescription in prescription %}
                    <tr>
                        <th scope=\"row\">{{ prescription.reference }}</th>
                        <th>{{ prescription.pharmacy.namePharmacy }} </th>
                            <th>{{ prescription.supplier.nameSociety }}</th>


                        <th>{{ prescription.dateAdd|date(\"d/m/Y H:i:s\")   }}</th>
                        <th>
                            {% if prescription.status == \"Annulée\" %}
                                <span class=\"badge badge-danger\">{{ prescription.status }}</span>
                            {% elseif prescription.status == \"en attente\" %}
                                <span class=\"badge badge-warning\">{{ prescription.status }}</span>
                            {% elseif prescription.status == \"Confirmée\" %}
                                <span class=\"badge badge-success\">{{ prescription.status }}</span>
                            {% endif %}
                        </th>
                        <th><a href=\"{{ path('list_order_medication_supplier',{ id:prescription.id}) }}\">Visualiser l'ordonnance</a></th>
                    </tr>
                {% endfor %}
                </tbody>
            {% else %}
                <h4>Aucune ordonnance n'a été trouvée</h4>
            {% endif %}
        </table>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.search-bar').keyup(function () {
                let term = \$(this).val();
                if(term != \"\") {
                    \$.ajax({
                        url: '{{ path('supplier_search_query') }}',
                        method: \"GET\",
                        data: {term:term},
                        cache: false,
                    }).done( function(response) {
                        //console.log(response);
                        \$(\".table-striped tbody\").replaceWith(response);
                    }).fail(function(jxh,textmsg,errorThrown){
                        console.log(textmsg);
                        console.log(errorThrown);
                    });
                }
            });
        });
    </script>
{% endblock %}", "@App/Order/list_prescription_pharmacy.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Order\\list_prescription_pharmacy.html.twig");
    }
}
