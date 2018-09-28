<?php

/* @App/Order/list_prescription_medication_pharmacy.html.twig */
class __TwigTemplate_6508d7c490790370ee7c8cfaf79b5b825fa40ddead355fc7a320a0379b4235b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 96
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Order/list_prescription_medication_pharmacy.html.twig", 96);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Order/list_prescription_medication_pharmacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Order/list_prescription_medication_pharmacy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Confirmation ordonance";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "    <div class=\"col-lg-6 offset-5-lg\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["prescriptionMedication"]);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["prescriptionMedication"]) {
            // line 102
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 103
                echo "                <p class=\"text-right button-confirmation\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cancel_order", array("id" => $this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "id", array()))), "html", null, true);
                echo "\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Supprimer la  demande </a></p>
            ";
            }
            // line 105
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescriptionMedication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        <h2 class=\"message-confirm\"></h2>
        <table class=\"table table-bordered table-striped table-condensed\">
            <thead>
            <tr>
                <th>Médicament</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["prescriptionMedication"]);
        foreach ($context['_seq'] as $context["_key"] => $context["prescriptionMedication"]) {
            // line 117
            echo "                <tr>
                    <td>
                        ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescriptionMedication"], "medication", array()), "name", array()), "html", null, true);
            echo "  </td>
                    <td>
                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["prescriptionMedication"], "quantity", array()), "html", null, true);
            echo "
                    </td>
                    <td style=\"width: 400px\">
                        <div class=\"current-price\">
                            ";
            // line 125
            if (($this->getAttribute($context["prescriptionMedication"], "price", array(), "any", true, true) &&  !(null === $this->getAttribute($context["prescriptionMedication"], "price", array())))) {
                // line 126
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescriptionMedication"], "price", array()), "html", null, true);
                echo " DT
                            ";
            }
            // line 128
            echo "                        </div>
                        ";
            // line 129
            if (($this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "status", array()) == "en attente")) {
                // line 130
                echo "                            <div class=\"update-price\">
                                <h4 >modifier</h4>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control price\" id=\"email\" placeholder=\"Enter le prix\" name=\"price\">
                                    <input type=\"hidden\" value=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescriptionMedication"], "id", array()), "html", null, true);
                echo "\" class=\"id\">
                                    <input type=\"button\" value=\"Envoyer\" class=\"send-price btn-sm btn btn-info\">
                                </div>
                            </div>
                        ";
            }
            // line 139
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "status", array()) == "Annulée")) {
                // line 140
                echo "                            <div class=\"update-price\">
                                <h4 >modifier</h4>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control price\" id=\"email\" placeholder=\"Enter le prix\" name=\"price\" style=\"width: 120px; height: 25px;\">
                                    <input type=\"hidden\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["prescriptionMedication"], "id", array()), "html", null, true);
                echo "\" class=\"id\">
                                    <input type=\"button\" value=\"Envoyer\" class=\"send-price btn-sm btn btn-info\">
                                </div>
                            </div>
                        ";
            }
            // line 149
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescriptionMedication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "            </tbody>
        </table>
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["prescriptionMedication"]);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["prescriptionMedication"]) {
            // line 155
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "status", array()) == "en attente")) {
                // line 156
                echo "                ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 157
                    echo "                    <input type=\"hidden\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "id", array()), "html", null, true);
                    echo "\" class=\"id-prescription\">
                    <p class=\"text-right button-confirmation\"><button type=\"button\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Confirmer</button></p>
                ";
                }
                // line 160
                echo "            ";
            }
            // line 161
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescriptionMedication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["prescriptionMedication"]);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["prescriptionMedication"]) {
            // line 163
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "status", array()) == "Annulée")) {
                // line 164
                echo "                ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 165
                    echo "                    <input type=\"hidden\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prescriptionMedication"], "supplierOrder", array()), "id", array()), "html", null, true);
                    echo "\" class=\"id-prescription\">
                    <p class=\"text-right button-confirmation\"><button type=\"button\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Confirmer</button></p>
                ";
                }
                // line 168
                echo "            ";
            }
            // line 169
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescriptionMedication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 173
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function ()
            {
                for (var i=0;i<\$('.price').length;i++) {
                    \$(\".send-price\").eq(i).click(function(){
                        x = \$(this);
                        \$.ajax({
                            type:\"GET\",
                            url:Routing.generate('set_price_order_medication_supplier', {id:\$(this).prev().val(),price:\$(this).prev().prev().val() }),
                            async: true,
                            success:function (data) {
                                //console.log(x.parent())
                                x.parent().parent().prev().text(data.price+\" DT\");
                            }
                        })
                    });
                }
                \$(\".confirmation-prescription\").click(function(){
                    x = \$(this);
                    \$.ajax({
                        type:\"GET\",
                        url:Routing.generate('confirmation_order_medication_supplier', {id:\$(this).parent().prev().val() }),
                        async: true,
                        success:function (data) {
                            if (data.status == \"Prix vide !\"){
                                x.prepend(\"<strong style='color: red'>\"+status+\"</strong>\")
                            }
                            if (data.status == \"Confirmé\")
                                \$('.update-price').remove();
                            \$('.button-confirmation').remove();
                            \$('.message-confirm').text(data.status);
                        }
                    })
                });
            });
        </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Order/list_prescription_medication_pharmacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 173,  306 => 172,  295 => 170,  281 => 169,  278 => 168,  271 => 165,  268 => 164,  265 => 163,  247 => 162,  233 => 161,  230 => 160,  223 => 157,  220 => 156,  217 => 155,  200 => 154,  196 => 152,  188 => 149,  180 => 144,  174 => 140,  171 => 139,  163 => 134,  157 => 130,  155 => 129,  152 => 128,  146 => 126,  144 => 125,  137 => 121,  132 => 119,  128 => 117,  124 => 116,  112 => 106,  98 => 105,  92 => 103,  89 => 102,  72 => 101,  69 => 100,  60 => 99,  42 => 97,  11 => 96,);
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

    {#<h2 class=\"message-confirm\"></h2>#}
    {#<table class=\"table table-bordered table-striped table-condensed\">#}
        {#<thead>#}
        {#<tr>#}
            {#<th>Médicament</th>#}
            {#<th>Quantité</th>#}
            {#<th>Prix</th>#}
        {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for prescriptionMedication in prescriptionMedication %}#}
            {#<tr>#}
                {#<td>#}
                    {#{{ prescriptionMedication.medication.name }}  </td>#}
                {#<td>#}
                    {#{{ prescriptionMedication.quantity }}#}
                {#</td>#}
                {#<td style=\"width: 400px\">#}
                    {#<div class=\"current-price\">#}
                    {#{% if  prescriptionMedication.price  is defined and  prescriptionMedication.price is not null %}#}
                        {#{{ prescriptionMedication.price }} DT#}
                    {#{% endif %}#}
                    {#</div>#}
                    {#{% if prescriptionMedication.prescription.status == \"Non confirmé\" %}#}
                        {#<div class=\"update-price\">#}
                            {#<h4 >modifier</h4>#}
                            {#<div class=\"form-group\">#}
                                {#<input type=\"text\" class=\"form-control price\" id=\"email\" placeholder=\"Enter le prix\" name=\"price\">#}
                                {#<input type=\"hidden\" value=\"{{ prescriptionMedication.id }}\" class=\"id\">#}
                                {#<input type=\"button\" value=\"Envoyer\" class=\"send-price btn-sm btn btn-info\">#}
                            {#</div>#}
                        {#</div>#}
                    {#{% endif %}#}
                {#</td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}
    {#{% for prescriptionMedication in prescriptionMedication %}#}
        {#{% if prescriptionMedication.prescription.status == \"Non confirmé\" %}#}
        {#{% if loop.first %}#}
            {#<input type=\"hidden\" value=\"{{ prescriptionMedication.prescription.id }}\" class=\"id-prescription\">#}
            {#<p class=\"text-right button-confirmation\"><button type=\"button\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Confirmé</button></p>#}
        {#{% endif %}#}


       {#{% endif %}#}
    {#{% endfor %}#}
{#{% endblock %}#}
{#{% block js %}#}
    {#<script type=\"text/javascript\">#}
        {#\$(document).ready(function ()#}
        {#{#}
            {#for (var i=0;i<\$('.price').length;i++) {#}
                {#\$(\".send-price\").eq(i).click(function(){#}
                    {#x = \$(this);#}
                    {#\$.ajax({#}
                        {#type:\"GET\",#}
                        {#url:Routing.generate('set_price_priscription_medication_pharmacy', {id:\$(this).prev().val(),price:\$(this).prev().prev().val() }),#}
                        {#async: true,#}
                        {#success:function (data) {#}
                            {#//console.log(x.parent())#}
                            {#x.parent().parent().prev().text(data.price+\" DT\");#}
                        {#}#}
                    {#})#}
                {#});#}
            {#}#}
            {#\$(\".confirmation-prescription\").click(function(){#}
                {#x = \$(this);#}
                {#\$.ajax({#}
                    {#type:\"GET\",#}
                    {#url:Routing.generate('confirmation_priscription_medication_pharmacy', {id:\$(this).parent().prev().val() }),#}
                    {#async: true,#}
                    {#success:function (data) {#}
                        {#if (data.status == \"Prix vide !\"){#}
                            {#x.prepend(\"<strong style='color: red'>\"+status+\"</strong>\")#}
                        {#}#}
                        {#if (data.status == \"Confirmé\")#}
                        {#\$('.update-price').remove();#}
                        {#\$('.button-confirmation').remove();#}
                        {#\$('.message-confirm').text(data.status);#}
                    {#}#}
                {#})#}
            {#});#}


        {#});#}
    {#</script>#}
{#{% endblock %}#}

{% extends '@App/layout.html.twig' %}
{% block title %}Confirmation ordonance{% endblock %}

{% block body %}
    <div class=\"col-lg-6 offset-5-lg\">
        {% for prescriptionMedication in prescriptionMedication %}
            {% if loop.first %}
                <p class=\"text-right button-confirmation\"><a href=\"{{ path('cancel_order',{ id:prescriptionMedication.supplierOrder.id}) }}\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Supprimer la  demande </a></p>
            {% endif %}
        {% endfor %}
        <h2 class=\"message-confirm\"></h2>
        <table class=\"table table-bordered table-striped table-condensed\">
            <thead>
            <tr>
                <th>Médicament</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
            {% for prescriptionMedication in prescriptionMedication %}
                <tr>
                    <td>
                        {{ prescriptionMedication.medication.name }}  </td>
                    <td>
                        {{ prescriptionMedication.quantity }}
                    </td>
                    <td style=\"width: 400px\">
                        <div class=\"current-price\">
                            {% if  prescriptionMedication.price  is defined and  prescriptionMedication.price is not null %}
                                {{ prescriptionMedication.price }} DT
                            {% endif %}
                        </div>
                        {% if prescriptionMedication.supplierOrder.status == \"en attente\" %}
                            <div class=\"update-price\">
                                <h4 >modifier</h4>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control price\" id=\"email\" placeholder=\"Enter le prix\" name=\"price\">
                                    <input type=\"hidden\" value=\"{{ prescriptionMedication.id }}\" class=\"id\">
                                    <input type=\"button\" value=\"Envoyer\" class=\"send-price btn-sm btn btn-info\">
                                </div>
                            </div>
                        {% endif %}
                        {% if prescriptionMedication.supplierOrder.status == \"Annulée\" %}
                            <div class=\"update-price\">
                                <h4 >modifier</h4>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control price\" id=\"email\" placeholder=\"Enter le prix\" name=\"price\" style=\"width: 120px; height: 25px;\">
                                    <input type=\"hidden\" value=\"{{ prescriptionMedication.id }}\" class=\"id\">
                                    <input type=\"button\" value=\"Envoyer\" class=\"send-price btn-sm btn btn-info\">
                                </div>
                            </div>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% for prescriptionMedication in prescriptionMedication %}
            {% if prescriptionMedication.supplierOrder.status == \"en attente\" %}
                {% if loop.first %}
                    <input type=\"hidden\" value=\"{{ prescriptionMedication.supplierOrder.id }}\" class=\"id-prescription\">
                    <p class=\"text-right button-confirmation\"><button type=\"button\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Confirmer</button></p>
                {% endif %}
            {% endif %}
        {% endfor %}
        {% for prescriptionMedication in prescriptionMedication %}
            {% if prescriptionMedication.supplierOrder.status == \"Annulée\" %}
                {% if loop.first %}
                    <input type=\"hidden\" value=\"{{ prescriptionMedication.supplierOrder.id }}\" class=\"id-prescription\">
                    <p class=\"text-right button-confirmation\"><button type=\"button\" style=\"margin-right:90px\" class=\"btn btn-success btn-lg confirmation-prescription\">Confirmer</button></p>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
    {% endblock %}
    {% block js %}
        <script type=\"text/javascript\">
            \$(document).ready(function ()
            {
                for (var i=0;i<\$('.price').length;i++) {
                    \$(\".send-price\").eq(i).click(function(){
                        x = \$(this);
                        \$.ajax({
                            type:\"GET\",
                            url:Routing.generate('set_price_order_medication_supplier', {id:\$(this).prev().val(),price:\$(this).prev().prev().val() }),
                            async: true,
                            success:function (data) {
                                //console.log(x.parent())
                                x.parent().parent().prev().text(data.price+\" DT\");
                            }
                        })
                    });
                }
                \$(\".confirmation-prescription\").click(function(){
                    x = \$(this);
                    \$.ajax({
                        type:\"GET\",
                        url:Routing.generate('confirmation_order_medication_supplier', {id:\$(this).parent().prev().val() }),
                        async: true,
                        success:function (data) {
                            if (data.status == \"Prix vide !\"){
                                x.prepend(\"<strong style='color: red'>\"+status+\"</strong>\")
                            }
                            if (data.status == \"Confirmé\")
                                \$('.update-price').remove();
                            \$('.button-confirmation').remove();
                            \$('.message-confirm').text(data.status);
                        }
                    })
                });
            });
        </script>

{% endblock %}
", "@App/Order/list_prescription_medication_pharmacy.html.twig", "C:\\wamp64\\www\\PharmaCity-master-1\\src\\AppBundle\\Resources\\views\\Order\\list_prescription_medication_pharmacy.html.twig");
    }
}
