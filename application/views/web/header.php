<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shop | eCommerce</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="<?= base_url(); ?>public/site.webmanifest">
      <link rel="shortcut icon" type="image/x-icon" href="https://preview.colorlib.com/theme/furn/assets/img/favicon.ico"> 

      <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/bundle.min.css" />
      <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/style.css">

      <link rel="stylesheet" href="<?= base_url(); ?>public/assets/vendor/featuredimagezoomer/multizoom.css" type="text/css" />

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

      <script type="text/javascript" src="<?= base_url(); ?>public/assets/vendor/featuredimagezoomer/multizoom.js"></script>
      
<script type="text/javascript">

jQuery(document).ready(function($){

   $('#image1').addimagezoom({ // single image zoom
      zoomrange: [3, 10],
      magnifiersize: [300,300],
      magnifierpos: 'right',
      cursorshade: true,
      largeimage: 'hayden.jpg' //<-- No comma after last option!
   })


   $('#image2').addimagezoom() // single image zoom with default options
   
   $('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
      descArea: '#description', // description selector (optional - but required if descriptions are used) - new
      speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
      descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
      imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
      magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
      zoomrange: [3, 10],
      magnifiersize: [250,250],
      magnifierpos: 'right',
      cursorshadecolor: '#fdffd5',
      cursorshade: true //<-- No comma after last option!
   });
   
   $('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
      descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
      disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
            //^-- No comma after last option!   
   });
   
})

</script>
   </head>
   <body>
      <!--div id="preloader-active">
         <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text">
                  <img src="data:image/webp;base64,UklGRjABAABXRUJQVlA4TCMBAAAvTAATEMdAJm2T+j8meTYIJmkc+//kMQNp22Rc6P2rqIGAZa6B/uUuwiQQuO0HjgiQDXYBl2AREGDU23p9fU4wAgBg2bYVNXrH9CE+G57C/KeKwaw8qq+PiP5PAJ9aaef/Jjlup2c5xlysMTowtvWZgRUBfJxCCGFuhkn9F+Z8vV7ndpTajtHM0kuOPkzqE2hxJrRAjnSryAzahBE4X+CQmyA95XEVB0k17ZKkqnMWDz7/zuRY5ro1xo0U49sZm5elJsBSKHiBpa7LfkzEDoQ6bq7kAVUHMFd3jlUhcMlephgH0Lp0oPeyec91MoI5eZzApLaQwKX3YQn6felA50QU1l0ygpd85LxPghtZYNyXDg6SahKRUWtmnQtZVN/O5/80n1cA" alt="">
               </div>
            </div>
         </div>
      </div-->

      <?php $this->load->view('web/navbar'); ?>