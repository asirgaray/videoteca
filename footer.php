<!--ELEMENTO DIV PIE DE PAGINA ----------------------------------NO HE CONSEGUIDO HACER BOTTOM 0 AUTO-->
<div id="footer">
 	<footer class="footer">

			<div class="footer-derecha">
                <p class="footer-company-about">
					<h4 style=
                        "   font-family:'Delius Unicase', Arial,         Helvetica, sans-serif;
                            color: rgb(253, 253, 253);
                            text-align: left;
                            font-size:17px;
                            margin-top: 31px;
                            ">
                        Sobre esta web:</h4>
					<p style="font-family:'Open+Sans',Arial; color: rgb(253, 253, 253); ">La finalidad de esta web es que los usuarios creen videotecas.</p>
				
				<div style="margin-right:89px;">
				<a href="https://twitter.com/?lang=es"><img style="width:36px;" src="iconos/twitter.ico"></a>
                <a href="https://es-es.facebook.com/"><img style="width:36px;" src="iconos/facebook.ico"></a>
                <a style="position: absolute; top: 85px; right: 250px;" href="manual.pdf" title="manual de usuario"><img style="width:36px;" src="iconos/manual.png"></a>
                </div>

			</div>

		<center><a href="particulas.html"><img id="alien" src="iconos/Alien.png"></a></center>
				
    
                <p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="http://cv.nebunix.es">Acerca de</a>
					·
					<a href="http://cv.nebunix.es">Contacto</a>
				</p>

				<p>Rubén &copy; 2018</p>

<audio controls>
  <source src="audio.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
 
    </footer>

			
<!--FIN ELEMENTO DIV PIE DE PAGINA-->
    
        <!--Botón autoscroll top-->
<div id='IrAlCielo'>
<a href='#'><span/></a>
</div>
<script type='text/javascript'>
jQuery.noConflict();
jQuery(document).ready(function() {
jQuery("#IrAlCielo").hide();
jQuery(function () {
jQuery(window).scroll(function () {
if (jQuery(this).scrollTop() > 200) {
jQuery('#IrAlCielo').fadeIn();
} else {
jQuery('#IrAlCielo').fadeOut();
}
});
jQuery('#IrAlCielo a').click(function () {
jQuery('body,html').animate({
scrollTop: 0
}, 800);
return false;
});
});

});
    
    

</script>
<!--Fin botón autoscroll top-->