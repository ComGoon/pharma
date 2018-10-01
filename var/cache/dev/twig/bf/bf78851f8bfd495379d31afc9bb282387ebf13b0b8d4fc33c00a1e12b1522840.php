<?php

/* @App/Prescription/list_prescription_medication_patient.html.twig */
class __TwigTemplate_a5f97af5dc6d3cbecce86489248fd36073c0f740638d47a2bdf7cf6ca570aa29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_medication_patient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/list_prescription_medication_patient.html.twig"));

        // line 3
        echo "
";
        // line 5
        echo "    ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        // line 14
        echo "            ";
        // line 15
        echo "                ";
        // line 16
        echo "                    ";
        // line 17
        echo "                ";
        // line 18
        echo "                    ";
        // line 19
        echo "                ";
        // line 20
        echo "            ";
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "        ";
        // line 26
        echo "            ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "            ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "
    ";
        // line 35
        echo "
<div class=\"container\">
    <table class=\"table \">
        <thead>
        <tr>
        <th>Médicament</th>
        <th>Quantité</th>
        </tr>
        </thead>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["prescriptionMedication"]);
        foreach ($context['_seq'] as $context["_key"] => $context["prescriptionMedication"]) {
            // line 45
            echo "            <tbody>
            <tr>
            <td>
            ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescriptionMedication"], "medication", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["prescriptionMedication"], "quantity", array()), "html", null, true);
            echo "
            </td>
            </tr>
            </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescriptionMedication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Prescription/list_prescription_medication_patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  110 => 50,  105 => 48,  100 => 45,  96 => 44,  85 => 35,  82 => 32,  80 => 31,  78 => 30,  76 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  66 => 24,  64 => 23,  62 => 22,  60 => 21,  58 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  25 => 3,);
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
{#{% block title %}Confirmation ordonance{% endblock %}#}

{#{% block body %}#}
    {#<table class=\"table table-bordered table-striped table-condensed\">#}
        {#<thead>#}
        {#<tr>#}
            {#<th>Médicament</th>#}
            {#<th>Quantité</th>#}
        {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for prescriptionMedication in prescriptionMedication %}#}
            {#<tr>#}
                {#<td>#}
                    {#{{ prescriptionMedication.medication.name }}</td>#}
                {#<td>#}
                    {#{{ prescriptionMedication.quantity }}#}
                {#</td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}
    {#{% for prescriptionMedication in prescriptionMedication %}#}
        {#{% if loop.first %}#}
            {#{% if prescriptionMedication.prescription.status == \"Non confirmé\" %}#}
        {#<h3><a style=\"margin-left: 50px;\" href=\"{{ path('add_pharmacy_to_prescription',{ id:prescriptionMedication.prescription.id }) }}\">Choisir une pharmacie</a></h3>#}
        {#{% else %}#}
            {#<h3>Confirmé</h3>#}
        {#{% endif %}#}
        {#{% endif %}#}

    {#{% endfor %}#}
{#{% endblock %}#}

<div class=\"container\">
    <table class=\"table \">
        <thead>
        <tr>
        <th>Médicament</th>
        <th>Quantité</th>
        </tr>
        </thead>
        {% for prescriptionMedication in prescriptionMedication %}
            <tbody>
            <tr>
            <td>
            {{ prescriptionMedication.medication.name }}</td>
            <td>
            {{ prescriptionMedication.quantity }}
            </td>
            </tr>
            </tbody>
        {% endfor %}
    </table>
</div>
", "@App/Prescription/list_prescription_medication_patient.html.twig", "C:\\Users\\ComGeek\\Desktop\\final\\PharmaCity-master-f\\src\\AppBundle\\Resources\\views\\Prescription\\list_prescription_medication_patient.html.twig");
    }
}
