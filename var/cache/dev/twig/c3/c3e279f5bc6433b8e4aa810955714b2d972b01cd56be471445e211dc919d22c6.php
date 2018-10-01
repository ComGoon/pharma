<?php

/* @App/Prescription/search.html.twig */
class __TwigTemplate_34af950d424d5671cc189de9beca008343751d018ad16e554d7187edd3a8b6be extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Prescription/search.html.twig"));

        // line 1
        echo "<tbody>
";
        // line 2
        if (($context["prescriptions"] ?? $this->getContext($context, "prescriptions"))) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prescriptions"] ?? $this->getContext($context, "prescriptions")));
            foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
                // line 4
                echo "        <tr>
            <th scope=\"row\">";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "reference", array()), "html", null, true);
                echo "</th>
            <th>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "patient", array()), "user", array()), "name", array()), "html", null, true);
                echo "</th>
            ";
                // line 7
                if (($this->getAttribute($context["prescription"], "pharmacy", array(), "any", true, true) &&  !(null === $this->getAttribute($context["prescription"], "pharmacy", array())))) {
                    // line 8
                    echo "                <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "pharmacy", array()), "namePharmacy", array()), "html", null, true);
                    echo "</th>
            ";
                } else {
                    // line 10
                    echo "                <th>choisir une pharmacie</th>
            ";
                }
                // line 12
                echo "            <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prescription"], "doctor", array()), "user", array()), "name", array()), "html", null, true);
                echo "</th>
            <th>";
                // line 13
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prescription"], "dateAdd", array()), "d/m/Y"), "html", null, true);
                echo "</th>
            <th>
                ";
                // line 15
                if (($this->getAttribute($context["prescription"], "status", array()) == "Non confirmé")) {
                    // line 16
                    echo "                    <span class=\"badge badge-warning\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 17
$context["prescription"], "status", array()) == "Annulée")) {
                    // line 18
                    echo "                    <span class=\"badge badge-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 19
$context["prescription"], "status", array()) == "Livrée")) {
                    // line 20
                    echo "                    <span class=\"badge badge-primary\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 21
$context["prescription"], "status", array()) == "Confirmé")) {
                    // line 22
                    echo "                    <span class=\"badge badge-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["prescription"], "status", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 24
                echo "            </th>
            <th><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_priscription_medication_doctor", array("id" => $this->getAttribute($context["prescription"], "id", array()))), "html", null, true);
                echo "\" class=\"show-prescription\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 29
            echo "    <tr><th colspan=\"8\">Aucune ordonnance n'a été trouvée</th></tr>
";
        }
        // line 31
        echo "</tbody>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Prescription/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  114 => 29,  104 => 25,  101 => 24,  95 => 22,  93 => 21,  88 => 20,  86 => 19,  81 => 18,  79 => 17,  74 => 16,  72 => 15,  67 => 13,  60 => 12,  56 => 10,  50 => 8,  48 => 7,  42 => 6,  38 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tbody>
{% if prescriptions %}
    {% for prescription in prescriptions %}
        <tr>
            <th scope=\"row\">{{ prescription.reference }}</th>
            <th>{{ prescription.patient.user.firstName }} {{ prescription.patient.user.name }}</th>
            {% if  prescription.pharmacy  is defined and  prescription.pharmacy is not null %}
                <th>{{ prescription.pharmacy.namePharmacy }}</th>
            {% else %}
                <th>choisir une pharmacie</th>
            {% endif %}
            <th>{{ prescription.doctor.user }} {{ prescription.doctor.user.name }}</th>
            <th>{{ prescription.dateAdd|date(\"d/m/Y\")  }}</th>
            <th>
                {% if prescription.status == \"Non confirmé\" %}
                    <span class=\"badge badge-warning\">{{ prescription.status }}</span>
                {% elseif prescription.status == \"Annulée\" %}
                    <span class=\"badge badge-danger\">{{ prescription.status }}</span>
                {% elseif prescription.status == \"Livrée\" %}
                    <span class=\"badge badge-primary\">{{ prescription.status }}</span>
                {% elseif prescription.status == \"Confirmé\" %}
                    <span class=\"badge badge-success\">{{ prescription.status }}</span>
                {% endif %}
            </th>
            <th><a href=\"{{ path('list_priscription_medication_doctor',{ id:prescription.id}) }}\" class=\"show-prescription\" data-target=\"#prescription\">Visualiser l'ordonnance</a></th>
        </tr>
    {% endfor %}
{% else %}
    <tr><th colspan=\"8\">Aucune ordonnance n'a été trouvée</th></tr>
{% endif %}
</tbody>", "@App/Prescription/search.html.twig", "C:\\Users\\ComGeek\\Desktop\\final\\PharmaCity-master-f\\src\\AppBundle\\Resources\\views\\Prescription\\search.html.twig");
    }
}
