<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	<h2 >Контанты</h2>
	<div>
	    <h3><u>Как нас найти:</u><br/>
	    Идти туда незнаю куда, а когда придешь х....а л...о нас надешь....<br/>
	    Ну или посматреть на карту ниже... )))</h3>
	</div>

    <div id = "map" style="height: 500px; width: 100%;"> </div>
    <script>
        function initMap() {
            var pos = {lat: 50.906183 , lng: 34.766419 }
            var opt = {
                center: pos,
                zoom: 15,
            };
            var myMap = new google.maps.Map(document.getElementById("map"), opt);
            var marker = new google.maps.Marker({
                position: pos,
                map: myMap,
                title: "Моя хата дом",

            });

        }
    </script>

</article><!-- #post-<?php the_ID(); ?> -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEO9UPaEVLGrXid8MBqQ1icVF-ySdHrFY&callback=initMap" async defer> </script> 