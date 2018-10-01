<?php

/* @App/Patient/Order_Meds.html.twig */
class __TwigTemplate_849bb739cc1a94bfde6035b5a4f6c5a2a3ee972c264f43d5b5224ffb9977602f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/Patient/Order_Meds.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Patient/Order_Meds.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Patient/Order_Meds.html.twig"));

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

        echo "Ajouter une ordonnance";
        
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
        echo "    <h2>Créer une commande</h2>
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
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_Order");
        echo "\" class=\"style-button-order\">Ajouter une Ordonnance</a>
    <br>
<hr>
    <h1>Les pharmacies a tunis sur la carte</h1>


    <p>
        <h5>Veillez autoriser votre localisation!</h5>

        <h5>
            clic sur un marker pour voir plus de details!
        </h5>
    </p>



    <div id=\"map\" style=\"border: 1px solid black; height: 500px\"></div>
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error \"The Geolocation service
        // failed.\", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 14, lng: 1.5},
                zoom: 12
            });
            infoWindow = new google.maps.InfoWindow;





            //pharmacy marker

            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('1','Pharmacie Azzouz','tunis, tunisia','36.836050','10.160160');


            var infowindow = new google.maps.InfoWindow({
                content: 'Pharmacie Azzouz, ' + 'lafayette, tunis'
            });

            var marker = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.836050, lng: 10.160160},
                map: map,
                title: 'azzouz!'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });


            //pharmacy marker1
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('2','Pharmacie les berges','Les Berges du Lac.','36.836470','10.238140');

            var infowindow1 = new google.maps.InfoWindow({
                content: 'Pharmacie les berges, ' + 'Les Berges du Lac'
            });

            var marker1 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.836470, lng: 10.238140},
                map: map,
                title: 'berges!'
            });
            marker1.addListener('click', function() {
                infowindow1.open(map, marker1);
            });


            //pharmacy marker2
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('3','Conseil National de l'Ordre Des Pharmaciens De Tunisie','56 Rue Ibn Charaf','36.805540','10.121180');

            var infowindow2 = new google.maps.InfoWindow({
                content: 'Conseil National de l\\'Ordre Des Pharmaciens, ' + '56 Rue Ibn Charaf'
            });

            var marker2 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.805540, lng: 10.121180},
                map: map,
                title: 'Ibn Charaf!'
            });
            marker2.addListener('click', function() {
                infowindow2.open(map, marker2);
            });


            //pharmacy marker3
            //
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('4','BSILA Ali','Avenue Louis Braille','36.832750','10.196940');

            var infowindow3 = new google.maps.InfoWindow({
                content: 'BSILA Ali, ' + 'Avenue Louis Braille'
            });

            var marker3 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.832750, lng: 10.196940},
                map: map,
                title: 'BSILA!'
            });
            marker3.addListener('click', function() {
                infowindow3.open(map, marker3);
            });



            //pharmacy marker4
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('5','PHARMACIE ALOUINI AKIL/PHARMACITY,'46 Rue Hedi Nouira, TUNIS BAB BHAR 1000','36.804360','10.184550');

            var infowindow4 = new google.maps.InfoWindow({
                content: 'ALOUINI AKIL/PHARMACITY, ' + '46 Rue Hedi Nouira, TUNIS BAB BHAR'
            });

            var marker4 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.804360, lng: 10.184550},
                map: map,
                title: 'Alouini!'
            });
            marker4.addListener('click', function() {
                infowindow4.open(map, marker4);
            });



            //pharmacy marker5
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('7','Pharmacie aaida TUNIS','8 bis rue Mongi Slim','36.8','10.1');

            var infowindow5 = new google.maps.InfoWindow({
                content: 'Pharmacie aaida TUNIS, ' + '8 bis rue Mongi Slim'
            });

            var marker5 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.8, lng: 10.1},
                map: map,
                title: 'aaida!'
            });
            marker5.addListener('click', function() {
                infowindow5.open(map, marker5);
            });




            //pharmacy marker6
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('8','Pharmacie ABID','6 Avenue de La Liberté','36.700720','10.170760');

            var infowindow6 = new google.maps.InfoWindow({
                content: 'Pharmacie ABID, ' + '6 Avenue de La Liberté'
            });

            var marker6 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.700720, lng: 10.170760},
                map: map,
                title: 'abid!'
            });
            marker6.addListener('click', function() {
                infowindow6.open(map, marker6);
            });



            //pharmacy marker7
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('10','Pharmacie FARAH Slim','Bardo tunis','36.817810','10.126920');

            var infowindow7 = new google.maps.InfoWindow({
                content: 'Pharmacie FARAH Slim, ' + 'Bardo tunis'
            });

            var marker7 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.817810, lng: 10.126920},
                map: map,
                title: 'farah!'
            });
            marker7.addListener('click', function() {
                infowindow7.open(map, marker7);
            });



            //pharmacy marker8
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('9','Pharmacie du Lac','les berges du lac','36.838160','10.308200');


            var infowindow8 = new google.maps.InfoWindow({
                content: 'Pharmacie du kram, ' + 'le kram'
            });

            var marker8 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.838160, lng: 10.308200},
                map: map,
                title: 'lac!'
            });
            marker8.addListener('click', function() {
                infowindow8.open(map, marker8);
            });


            //pharmacy marker9
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('6','Pharmacie Ouahchi Mohamed','tunis, tunisia','36.856150','10.307910');

            var infowindow9 = new google.maps.InfoWindow({
                content: 'Pharmacie Ouahchi Mohamed, ' + 'Rue pygmalion, Carthage'
            });

            var marker9 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.856150, lng: 10.307910},
                map: map,
                title: 'ouahchi!'
            });
            marker9.addListener('click', function() {
                infowindow9.open(map, marker9);
            });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var home = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: 'home!',
                        label: {
                            color: 'white',
                            fontWeight: 'bold',
                            text: 'MOI ICI'
                        },
                    });

                    infoWindow.setPosition(home);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA6qDU-Llw8jVt3jIwgLGGM30t2Da1EWX8&callback=initMap\">
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Patient/Order_Meds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 8,  80 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter une ordonnance{% endblock %}
{% block titlebody %}
    <h2>Créer une commande</h2>
{% endblock %}
{% block body %}
    <a href=\"{{ path('add_Order') }}\" class=\"style-button-order\">Ajouter une Ordonnance</a>
    <br>
<hr>
    <h1>Les pharmacies a tunis sur la carte</h1>


    <p>
        <h5>Veillez autoriser votre localisation!</h5>

        <h5>
            clic sur un marker pour voir plus de details!
        </h5>
    </p>



    <div id=\"map\" style=\"border: 1px solid black; height: 500px\"></div>
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error \"The Geolocation service
        // failed.\", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 14, lng: 1.5},
                zoom: 12
            });
            infoWindow = new google.maps.InfoWindow;





            //pharmacy marker

            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('1','Pharmacie Azzouz','tunis, tunisia','36.836050','10.160160');


            var infowindow = new google.maps.InfoWindow({
                content: 'Pharmacie Azzouz, ' + 'lafayette, tunis'
            });

            var marker = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.836050, lng: 10.160160},
                map: map,
                title: 'azzouz!'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });


            //pharmacy marker1
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('2','Pharmacie les berges','Les Berges du Lac.','36.836470','10.238140');

            var infowindow1 = new google.maps.InfoWindow({
                content: 'Pharmacie les berges, ' + 'Les Berges du Lac'
            });

            var marker1 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.836470, lng: 10.238140},
                map: map,
                title: 'berges!'
            });
            marker1.addListener('click', function() {
                infowindow1.open(map, marker1);
            });


            //pharmacy marker2
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('3','Conseil National de l'Ordre Des Pharmaciens De Tunisie','56 Rue Ibn Charaf','36.805540','10.121180');

            var infowindow2 = new google.maps.InfoWindow({
                content: 'Conseil National de l\\'Ordre Des Pharmaciens, ' + '56 Rue Ibn Charaf'
            });

            var marker2 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.805540, lng: 10.121180},
                map: map,
                title: 'Ibn Charaf!'
            });
            marker2.addListener('click', function() {
                infowindow2.open(map, marker2);
            });


            //pharmacy marker3
            //
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('4','BSILA Ali','Avenue Louis Braille','36.832750','10.196940');

            var infowindow3 = new google.maps.InfoWindow({
                content: 'BSILA Ali, ' + 'Avenue Louis Braille'
            });

            var marker3 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.832750, lng: 10.196940},
                map: map,
                title: 'BSILA!'
            });
            marker3.addListener('click', function() {
                infowindow3.open(map, marker3);
            });



            //pharmacy marker4
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('5','PHARMACIE ALOUINI AKIL/PHARMACITY,'46 Rue Hedi Nouira, TUNIS BAB BHAR 1000','36.804360','10.184550');

            var infowindow4 = new google.maps.InfoWindow({
                content: 'ALOUINI AKIL/PHARMACITY, ' + '46 Rue Hedi Nouira, TUNIS BAB BHAR'
            });

            var marker4 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.804360, lng: 10.184550},
                map: map,
                title: 'Alouini!'
            });
            marker4.addListener('click', function() {
                infowindow4.open(map, marker4);
            });



            //pharmacy marker5
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('7','Pharmacie aaida TUNIS','8 bis rue Mongi Slim','36.8','10.1');

            var infowindow5 = new google.maps.InfoWindow({
                content: 'Pharmacie aaida TUNIS, ' + '8 bis rue Mongi Slim'
            });

            var marker5 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.8, lng: 10.1},
                map: map,
                title: 'aaida!'
            });
            marker5.addListener('click', function() {
                infowindow5.open(map, marker5);
            });




            //pharmacy marker6
            //INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('8','Pharmacie ABID','6 Avenue de La Liberté','36.700720','10.170760');

            var infowindow6 = new google.maps.InfoWindow({
                content: 'Pharmacie ABID, ' + '6 Avenue de La Liberté'
            });

            var marker6 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.700720, lng: 10.170760},
                map: map,
                title: 'abid!'
            });
            marker6.addListener('click', function() {
                infowindow6.open(map, marker6);
            });



            //pharmacy marker7
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('10','Pharmacie FARAH Slim','Bardo tunis','36.817810','10.126920');

            var infowindow7 = new google.maps.InfoWindow({
                content: 'Pharmacie FARAH Slim, ' + 'Bardo tunis'
            });

            var marker7 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.817810, lng: 10.126920},
                map: map,
                title: 'farah!'
            });
            marker7.addListener('click', function() {
                infowindow7.open(map, marker7);
            });



            //pharmacy marker8
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('9','Pharmacie du Lac','les berges du lac','36.838160','10.308200');


            var infowindow8 = new google.maps.InfoWindow({
                content: 'Pharmacie du kram, ' + 'le kram'
            });

            var marker8 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.838160, lng: 10.308200},
                map: map,
                title: 'lac!'
            });
            marker8.addListener('click', function() {
                infowindow8.open(map, marker8);
            });


            //pharmacy marker9
            // INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
            // ('6','Pharmacie Ouahchi Mohamed','tunis, tunisia','36.856150','10.307910');

            var infowindow9 = new google.maps.InfoWindow({
                content: 'Pharmacie Ouahchi Mohamed, ' + 'Rue pygmalion, Carthage'
            });

            var marker9 = new google.maps.Marker({
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                position: {lat: 36.856150, lng: 10.307910},
                map: map,
                title: 'ouahchi!'
            });
            marker9.addListener('click', function() {
                infowindow9.open(map, marker9);
            });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var home = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: 'home!',
                        label: {
                            color: 'white',
                            fontWeight: 'bold',
                            text: 'MOI ICI'
                        },
                    });

                    infoWindow.setPosition(home);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA6qDU-Llw8jVt3jIwgLGGM30t2Da1EWX8&callback=initMap\">
    </script>

{% endblock %}


", "@App/Patient/Order_Meds.html.twig", "C:\\Users\\ComGeek\\Desktop\\final\\PharmaCity-master-f\\src\\AppBundle\\Resources\\views\\Patient\\Order_Meds.html.twig");
    }
}
