<?php get_header(); ?>

  <div class="col-8">
  <div class="nombre">
  	<h1>Bettsy Carolina García Arias</h1>
  	<small>R.U.T  N°:  25.565.376-8 | +56 9 64415036 |
 	   caro1985garcia@gmail.com</small>
  </div>

  <hr>

  
<?php
 $arg = array(
  'post_type'    => 'proyecto',
  'posts_per_page' => 6
  );
  $get_arg = new WP_Query( $arg );
  while ( $get_arg->have_posts() ) {
  $get_arg->the_post();?>
              
   <?php the_title() ?>
                 
                 
   <?php the_content() ?>
                    
                  
   <?php } wp_reset_postdata();?>
          
          

    <hr>

    <div class="experiencia">
    	<h1><a href="#experiencias">Experiencia</a></h1>
    	
    		<div class="trabajo"><h2>Servimaster Chile Ltda</h2>   
            <h5>Jefe de local | Amunátegui 268 Santiago Centro |
            Octubre  2016 – Mayo 2018</h5>
            <ul>
             <li> • Atención al público</li>
             <li> • Apertura y cierre de caja</li>
             <li> • Facturación electrónica</li>
             <li> • Control de Inventario</li>
             <li> • Solicitud de pedidos</li>
             </ul></div>

    		<div class="trabajo"><h2>Diario De Frente - Venezuela</h2>
            <h5>Periodista | Enero 2010  - Febrero 2016 </h5>
             <ul>
             <li> • Búsqueda y redacción de información</li>
             <li> •	Redacción de trabajos especiales</li>
             </ul></div>

    		<div class="trabajo"><h2>Dirección Regional del Ministerio del Ambiente - Venezuela</h2>
				      <h5> Asesora experta en comunicación | Febrero 2011 – Diciembre 2014 </h5>
				      <ul>
				      <li> •	Redacción de informaciones institucionales </li>
				      <li> •	Relaciones estratégicas con medios regionales </li>
				      <li> •	Elaboración de informes técnicos </li>
				      </ul></div>
    </div>

     <hr>

     <div class="educacion">
     	<h1><a href="#educacion">Educación</a></h1>
     	<ul>
     		<li>Universidad del Zulia – Estado Zulia Venezuela
            Mayo 2009  Licenciada en Comunicación Social, mención Periodismo Impreso
        </li>
     		<li>Academia Desafío Latam – Programa Mujeres Programadoras
            Actualmente  Desarrollo Web Front -End
        </li>
        <li>Corporación Cultural Quilicura -  Quilicura
             Diciembre 2017   Taller de Narrativa
        </li>
       <li>	Iab.spain - Online
            Junio 2017 Curso Básico de Marketing Digital
       </li>
     	</ul>
     </div>

      <hr>


      <div class="habilidades">
      	<h1><a href="#habilidades">Habilidades</a></h1>
<ul>
	<li> HTML5 y CSS3 </li>
	<li> Bootstrap 4</li>
	<li> JavaScript – Jquery </li>
	<li> Wordpress</li>
	<li> Uso Git y GitHub</li>
	<li> Uso de sistema empresarial Softland</li>
	<li> Trabajo en equipo</li>
	<li> Adaptación</li>
	<li> Creatividad</li>
</ul>

      </div>

       <hr>

       <div class="contacto"> 
       	<h1><a href="#contacto">Contacto</a></h1>
           <?php echo do_shortcode('[contact-form-7 id="19" title="Formulario de contacto 1"]') ?>
       </div>

       </div>
</div>
</div>

<?php get_footer(); ?>

    
