<?php

/* @App/Prescription/list_prescription_pharmacy.html.twig */
class __TwigTemplate_f8ff4ce61181acf45102a582b9d96b26b6ea8c4ec9b5c39e053a3adc6a9d30d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Prescription/list_prescription_pharmacy.html.twig", 126);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_pharmacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_pharmacy.html.twig"));

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
                <th scope=\"col\">Patient</th>
                <th scope=\"col\">Pharmacie</th>
                <th scope=\"col\">Docteur</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Action</th>
            </tr>
            </thead>
            ";
        // line 176
        if (($context["prescription"] ?? $this->getContext($context, "prescription"))) {
            // line 177
            echo "                <tbody>
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["prescription"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
                // line 179
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "reference", array()), "html", null, true);
                echo "</th>
                        <th>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "name", array()), "html", null, true);
                echo "</th>
                        ";
                // line 182
                if (($this->getAttribute($context["prescription"], "pharmacy", array(), "any", true, true) &&  !(null === $this->getAttribute($context["prescription"], "pharmacy", array())))) {
                    // line 183
                    echo "                            <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                    echo "</th>
                        ";
                } else {
                    // line 185
                    echo "                            <th>choisir une pharmacie</th>
                        ";
                }
                // line 187
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($context["prescription"], "doctor", array(), "any", false, true), "user", array(), "any", true, true)) {
                    // line 188
                    echo "                        <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "name", array()), "html", null, true);
                    echo "</th>
                            ";
                } else {
                    // line 190
                    echo "                            <th>Pas de docteur</th>
                        ";
                }
                // line 192
                echo "
                        <th>";
                // line 193
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prescription"], "dateAdd", array()), "d/m/Y"), "html", null, true);
                echo "</th>
                        <th>
                            ";
                // line 195
                if (($this->getAttribute($context["prescription"], "status", array()) == "Non confirmée")) {
                    // line 196
                    echo "                                <span class=\"badge badge-dark\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 197
$context["prescription"], "status", array()) == "Annulée")) {
                    // line 198
                    echo "                                <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 199
$context["prescription"], "status", array()) == "en attente")) {
                    // line 200
                    echo "                                <span class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 201
$context["prescription"], "status", array()) == "Confirmée")) {
                    // line 202
                    echo "                                <span class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 204
                echo "                        </th>
                        <th><a href=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_priscription_medication_pharmacy", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\">Visualiser l'ordonnance</a></th>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                </tbody>
            ";
        } else {
            // line 210
            echo "                <h4>Aucune ordonnance n'a été trouvée</h4>
            ";
        }
        // line 212
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

    // line 215
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 216
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
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pharmacy_search_query");
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
        return "@App/Prescription/list_prescription_pharmacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 223,  252 => 216,  243 => 215,  218 => 129,  209 => 128,  197 => 212,  193 => 210,  189 => 208,  180 => 205,  177 => 204,  171 => 202,  169 => 201,  164 => 200,  162 => 199,  157 => 198,  155 => 197,  150 => 196,  148 => 195,  143 => 193,  140 => 192,  136 => 190,  128 => 188,  125 => 187,  121 => 185,  115 => 183,  113 => 182,  107 => 181,  103 => 180,  100 => 179,  96 => 178,  93 => 177,  91 => 176,  72 => 160,  67 => 159,  54 => 145,  51 => 128,  42 => 127,  11 => 126,);
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
                <th scope=\"col\">Patient</th>
                <th scope=\"col\">Pharmacie</th>
                <th scope=\"col\">Docteur</th>
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
                        <th>{{ prescription.patient.user.firstName }} {{ prescription.patient.user.name }}</th>
                        {% if  prescription.pharmacy  is defined and  prescription.pharmacy is not null %}
                            <th>{{ prescription.pharmacy.namePharmacy }}</th>
                        {% else %}
                            <th>choisir une pharmacie</th>
                        {% endif %}
                        {% if prescription.doctor.user is defined %}
                        <th>{{ prescription.doctor.user }} {{ prescription.doctor.user.name }}</th>
                            {% else %}
                            <th>Pas de docteur</th>
                        {% endif %}

                        <th>{{ prescription.dateAdd|date(\"d/m/Y\")  }}</th>
                        <th>
                            {% if prescription.status == \"Non confirmée\" %}
                                <span class=\"badge badge-dark\">{{ prescription.status }}</span>
                            {% elseif prescription.status == \"Annulée\" %}
                                <span class=\"badge badge-danger\">{{ prescription.status }}</span>
                            {% elseif prescription.status == \"en attente\" %}
                                <span class=\"badge badge-warning\">{{ prescription.status }}</span>
                            {% elseif prescription.status == \"Confirmée\" %}
                                <span class=\"badge badge-success\">{{ prescription.status }}</span>
                            {% endif %}
                        </th>
                        <th><a href=\"{{ path('list_priscription_medication_pharmacy',{ id:prescription.id}) }}\">Visualiser l'ordonnance</a></th>
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
                        url: '{{ path('pharmacy_search_query') }}',
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
{% endblock %}", "@App/Prescription/list_prescription_pharmacy.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Prescription\\list_prescription_pharmacy.html.twig");
    }
}