<?php

/* @App/Prescription/list_prescription_patient.html.twig */
class __TwigTemplate_dcf2d7e5d32872395e12bf01f25453ab022f3e3f85f5cb8e3c2ae83a605618ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 163
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Prescription/list_prescription_patient.html.twig", 163);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_patient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_patient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 165
        echo "    ";
        $this->displayBlock('modal', $context, $blocks);
        // line 185
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
                    <a class=\"dropdown-item\" href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "canceled"));
        echo "\">Annulée</a>
                    ";
        // line 198
        echo "                    <a class=\"dropdown-item\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "delivred"));
        echo "\">En attente</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "pending"));
        echo "\">Non Confirmée</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_prescriptions_by_status", array("status" => "success"));
        echo "\">Confirmée</a>
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
        // line 216
        if (($context["prescription"] ?? $this->getContext($context, "prescription"))) {
            // line 217
            echo "                <tbody>
                ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["prescription"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
                // line 219
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "reference", array()), "html", null, true);
                echo "</th>
                        <th>";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "name", array()), "html", null, true);
                echo "</th>


                            ";
                // line 224
                if (($this->getAttribute($context["prescription"], "status", array()) == "Non confirmée")) {
                    // line 225
                    echo "                                <th><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_pharmacy_to_prescription", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                    echo "\" class=\"\" >Choisir une pharmacie</a></th>
                            ";
                } elseif (($this->getAttribute(                // line 226
$context["prescription"], "status", array()) == "Annulée")) {
                    // line 227
                    echo "                                <th><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_pharmacy_to_prescription", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                    echo "\" class=\"\" >Choisir une pharmacie</a></th>
                            ";
                } elseif (($this->getAttribute(                // line 228
$context["prescription"], "status", array()) == "en attente")) {
                    // line 229
                    echo "
                                ";
                    // line 230
                    if (($this->getAttribute($context["prescription"], "pharmacy", array(), "any", true, true) &&  !(null === $this->getAttribute($context["prescription"], "pharmacy", array())))) {
                        // line 231
                        echo "                                <th>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                        echo "</th>

                                ";
                    }
                    // line 234
                    echo "                            ";
                } elseif (($this->getAttribute($context["prescription"], "status", array()) == "Confirmée")) {
                    // line 235
                    echo "                                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                    echo "</th>
                            ";
                }
                // line 237
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($context["prescription"], "doctor", array(), "any", false, true), "user", array(), "any", true, true)) {
                    // line 238
                    echo "                        <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "name", array()), "html", null, true);
                    echo "</th>
                            ";
                } else {
                    // line 240
                    echo "                            <th>Commande</th>
                        ";
                }
                // line 242
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prescription"], "dateAdd", array()), "d/m/Y"), "html", null, true);
                echo "</th>
                        <th>
                            ";
                // line 244
                if (($this->getAttribute($context["prescription"], "status", array()) == "Non confirmée")) {
                    // line 245
                    echo "                                <span class=\"badge badge-dark\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 246
$context["prescription"], "status", array()) == "Annulée")) {
                    // line 247
                    echo "                                <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 248
$context["prescription"], "status", array()) == "en attente")) {
                    // line 249
                    echo "                                <span class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                } elseif (($this->getAttribute(                // line 250
$context["prescription"], "status", array()) == "Confirmée")) {
                    // line 251
                    echo "                                <span class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 253
                echo "                        </th>
                        <th><a href=\"";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_list_prescription_medicacation", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\" class=\" show-prescription\" data-toggle=\"modal\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                </tbody>
            ";
        } else {
            // line 259
            echo "                <h4>Aucune ordonnance n'a été trouvée</h4>
            ";
        }
        // line 261
        echo "        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 166
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
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 265
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
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_search_query");
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
        return "@App/Prescription/list_prescription_patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 272,  288 => 265,  279 => 264,  251 => 166,  242 => 165,  230 => 261,  226 => 259,  222 => 257,  213 => 254,  210 => 253,  204 => 251,  202 => 250,  197 => 249,  195 => 248,  190 => 247,  188 => 246,  183 => 245,  181 => 244,  175 => 242,  171 => 240,  163 => 238,  160 => 237,  154 => 235,  151 => 234,  144 => 231,  142 => 230,  139 => 229,  137 => 228,  132 => 227,  130 => 226,  125 => 225,  123 => 224,  115 => 221,  111 => 220,  108 => 219,  104 => 218,  101 => 217,  99 => 216,  80 => 200,  76 => 199,  71 => 198,  67 => 196,  54 => 185,  51 => 165,  42 => 164,  11 => 163,);
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
            {#<th>Médecin</th>#}
            {#<th>Détaille</th>#}
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
                    {#{{ prescription.doctor.user.name }} {{ prescription.doctor.user.firstName }}#}
                {#</td>#}
                {#<td>#}
                    {#<a href=\"{{ path('my_list_prescription_medicacation',{ id:prescription.id}) }}\">Détaillé</a>#}
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
                            {#<th><a href=\"{{ path('add_pharmacy_to_prescription',{ id:prescription.id}) }}\" class=\"\" >Choisir une pharmacie</a></th>#}
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
                        {#<th><a href=\"{{ path('my_list_prescription_medicacation',{ id:prescription.id}) }}\" class=\" show-prescription\" data-toggle=\"modal\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>#}

                    {#</tr>#}
                    {#</tbody>#}
                {#{% endfor %}#}
            {#{% endif %}#}
        {#</table>#}
    {#</div>#}

{#{% endblock %}#}

{#{% block javascripts %}#}
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
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
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
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'canceled'}) }}\">Annulée</a>
                    {#<a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'ongoing'}) }}\">En cours de traitement</a>#}
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'delivred'}) }}\">En attente</a>
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'pending'}) }}\">Non Confirmée</a>
                    <a class=\"dropdown-item\" href=\"{{ path('patient_prescriptions_by_status', {'status': 'success'}) }}\">Confirmée</a>
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


                            {% if prescription.status == \"Non confirmée\" %}
                                <th><a href=\"{{ path('add_pharmacy_to_prescription',{ id:prescription.id}) }}\" class=\"\" >Choisir une pharmacie</a></th>
                            {% elseif prescription.status == \"Annulée\" %}
                                <th><a href=\"{{ path('add_pharmacy_to_prescription',{ id:prescription.id}) }}\" class=\"\" >Choisir une pharmacie</a></th>
                            {% elseif prescription.status == \"en attente\" %}

                                {% if prescription.pharmacy is defined and prescription.pharmacy is not null %}
                                <th>{{ prescription.pharmacy.namePharmacy }}</th>

                                {% endif %}
                            {% elseif prescription.status == \"Confirmée\" %}
                                <th>{{ prescription.pharmacy.namePharmacy }}</th>
                            {% endif %}
                        {% if prescription.doctor.user is defined %}
                        <th>{{ prescription.doctor.user }} {{ prescription.doctor.user.name }}</th>
                            {% else %}
                            <th>Commande</th>
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
                        <th><a href=\"{{ path('my_list_prescription_medicacation',{ id:prescription.id}) }}\" class=\" show-prescription\" data-toggle=\"modal\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>
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
                        url: '{{ path('patient_search_query') }}',
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
{% endblock %}




", "@App/Prescription/list_prescription_patient.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Prescription\\list_prescription_patient.html.twig");
    }
}
