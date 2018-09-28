<?php

/* @App/Prescription/list_prescription_doctor.html.twig */
class __TwigTemplate_ffe952f3e25146c10135732159451bbf3c6d6bc90284cc5f99fa3515569e456b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 169
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Prescription/list_prescription_doctor.html.twig", 169);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_doctor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_doctor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 170
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 171
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 172
        echo "    ";
        $this->displayBlock('modal', $context, $blocks);
        // line 189
        echo "    <div class=\"container list-container\">
        <h2>Liste des ordonances</h2>
        <nav class=\"navbar filter\">
            <form class=\"form-inline\">
                <input class=\"form-control mr-sm-2 search-bar\" type=\"search\" placeholder=\"Chercher une ordonnance\" aria-label=\"Search\">
            </form>
        </nav>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">Reference</th>
                <th scope=\"col\">Patient</th>
                <th scope=\"col\">Pharmacie</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\">Status</th>
                <th scope=\"col\">Action</th>
            </tr>
            </thead>
            ";
        // line 207
        if (($context["prescription"] ?? $this->getContext($context, "prescription"))) {
            // line 208
            echo "                <tbody>
                ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["prescription"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
                // line 210
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "reference", array()), "html", null, true);
                echo "</th>
                        <th>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "name", array()), "html", null, true);
                echo "</th>
                        ";
                // line 213
                if (($this->getAttribute($context["prescription"], "pharmacy", array(), "any", true, true) &&  !(null === $this->getAttribute($context["prescription"], "pharmacy", array())))) {
                    // line 214
                    echo "                            <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                    echo "</th>
                        ";
                } else {
                    // line 216
                    echo "                            <th>Non choisie</th>
                        ";
                }
                // line 218
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prescription"], "dateAdd", array()), "d/m/Y"), "html", null, true);
                echo "</th>
                        <th>
                            ";
                // line 220
                if (($this->getAttribute($context["prescription"], "status", array()) == "Non confirmée")) {
                    // line 221
                    echo "                                <span class=\"badge badge-dark\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 222
$context["prescription"], "status", array()) == "Annulée")) {
                    // line 223
                    echo "                                <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 224
$context["prescription"], "status", array()) == "en attente")) {
                    // line 225
                    echo "                                <span class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 226
$context["prescription"], "status", array()) == "Confirmée")) {
                    // line 227
                    echo "                                <span class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 229
                echo "                        </th>
                        <th><a href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_priscription_medication_doctor", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\">Visualiser l'ordonnance</a></th>
                        <th><a href=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_prescription", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\" class=\" show-prescription\">Supprimé l'ordonnance</a></th>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                </tbody>
            ";
        } else {
            // line 236
            echo "                <h4>Aucune ordonnance n'a été trouvée</h4>
            ";
        }
        // line 238
        echo "        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste ordonnance docteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 173
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

    // line 241
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 242
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
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_search_query");
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
            \$('body').on('click', '.show-prescription', function(e) {
                e.preventDefault();
                \$('#modal-title').html(\"Fiche de l'ordonnance\");
                var url = \$(this).attr('href');
                \$.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    success: function (data) {
                        \$('.modal-body').html(data);
                    }
                });
                setTimeout(function(){
                    \$('#prescription').modal('show');
                }, 700);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Prescription/list_prescription_doctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 249,  244 => 242,  235 => 241,  210 => 173,  201 => 172,  183 => 171,  171 => 238,  167 => 236,  163 => 234,  154 => 231,  150 => 230,  147 => 229,  141 => 227,  139 => 226,  134 => 225,  132 => 224,  127 => 223,  125 => 222,  120 => 221,  118 => 220,  112 => 218,  108 => 216,  102 => 214,  100 => 213,  94 => 212,  90 => 211,  87 => 210,  83 => 209,  80 => 208,  78 => 207,  58 => 189,  55 => 172,  52 => 171,  43 => 170,  11 => 169,);
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
            {#<th>Patient</th>#}
            {#<th>Pharmacie</th>#}
            {#<th>Détaillé</th>#}
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
                    {#{{ prescription.patient.user.name }} {{ prescription.patient.user.firstName }}#}
                {#</td>#}
                {#<td>#}
                    {#{% if  prescription.pharmacy.namePharmacy  is defined and  prescription.pharmacy.namePharmacy is not null %}#}
                        {#{{ prescription.pharmacy.namePharmacy }}#}
                    {#{% endif %}#}
                {#</td>#}
                {#<td>#}
                    {#<a href=\"{{ path('list_priscription_medication_doctor',{ id:prescription.id}) }}\">détaille</a>#}
                {#</td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}
{#{% endblock %}#}




{#{% extends '@App/layout.html.twig' %}#}

{#{% block body %}#}
    {#{% if prescription  is empty %}#}
        {#<h4>Aucune ordonnance n'a été trouvée</h4>#}
    {#{% else %}#}
    {#{% block modal %}#}
        {#<!-- Modal -->#}
        {#<div class=\"modal fade\" id=\"prescription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">#}
            {#<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">#}
                {#<div class=\"modal-content\">#}
                    {#<div class=\"modal-header\">#}
                        {#<h5 class=\"modal-title\" id=\"modal-title\">Modal title</h5>#}
                        {#<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">#}
                            {#<span aria-hidden=\"true\">&times;</span>#}
                        {#</button>#}
                    {#</div>#}
                    {#<div class=\"modal-body\">#}

                    {#</div>#}
                    {#<div class=\"modal-footer\">#}
                        {#<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#{% endblock %}#}





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
                        {#<th><a href=\"{{ path('my_list_prescription_medicacation',{ id:prescription.id}) }}\" class=\" show-prescription\" data-toggle=\"modal\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>#}
                        {#<th><a href=\"{{ path('delete_prescription',{ id:prescription.id}) }}\" class=\" show-prescription\">Supprimé l'ordonnance</a></th>#}
                    {#</tr>#}
                    {#</tbody>#}
                {#{% endfor %}#}
            {#{% endif %}#}
        {#</table>#}
    {#</div>#}

{#{% endblock %}#}

{#{% block js %}#}
    {#{{ parent() }}#}
    {#<script type=\"text/javascript\">#}
        {#\$(document).ready(function () {#}
            {#\$('.show-prescription').click(function () {#}
                {#\$('#modal-title').html(\"Fiche de l'ordonnance\");#}

                {#var url = \$(this).attr('href');#}

                {#\$.ajax({#}
                    {#type: 'get',#}
                    {#url: url,#}
                    {#success: function (data) {#}
                        {#\$('.modal-body').html(data);#}
                    {#}#}
                {#});#}

            {#});#}
        {#});#}
    {#</script>#}
{#{% endblock %}#}



{% extends '@App/layout.html.twig' %}
{% block body %}
    {% block title %}Liste ordonnance docteur{% endblock %}
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
        </nav>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">Reference</th>
                <th scope=\"col\">Patient</th>
                <th scope=\"col\">Pharmacie</th>
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
                            <th>Non choisie</th>
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
                        <th><a href=\"{{ path('list_priscription_medication_doctor',{ id:prescription.id}) }}\">Visualiser l'ordonnance</a></th>
                        <th><a href=\"{{ path('delete_prescription',{ id:prescription.id}) }}\" class=\" show-prescription\">Supprimé l'ordonnance</a></th>
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
                        url: '{{ path('doctor_search_query') }}',
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
            \$('body').on('click', '.show-prescription', function(e) {
                e.preventDefault();
                \$('#modal-title').html(\"Fiche de l'ordonnance\");
                var url = \$(this).attr('href');
                \$.ajax({
                    type: 'get',
                    url: url,
                    cache: false,
                    success: function (data) {
                        \$('.modal-body').html(data);
                    }
                });
                setTimeout(function(){
                    \$('#prescription').modal('show');
                }, 700);
            });
        });
    </script>
{% endblock %}", "@App/Prescription/list_prescription_doctor.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Prescription\\list_prescription_doctor.html.twig");
    }
}
