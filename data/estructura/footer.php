

<?



	if(isset($_POST['web3'])){

		$web3 = $_POST['web3'];

	}



	if(isset($_POST['mail3'])){

		$mail3 = $_POST['mail3'];

	}



	if ($mail3 == '' && $web3 == 'http://') {



		$email_new=saneaVar(strtolower($_POST['email_new']));

		$telefono_new=saneaVar(strtolower($_POST['telefono_new']));



//		echo 'Email:'.$email_new.'<br>';

//		echo 'Telefono:'.$telefono_new.'<br>';



		if (!empty($email_new) OR !empty($telefono_new)){ 			

	

			//MARKETING

			$fecha_new=date('d/m/y H:m');

			$sql_new=@mysql_query("SELECT * FROM clientes_marketing WHERE email='".$email_new."' OR telefono='".$telefono_new."'");

			$rows_new=@mysql_num_rows($sql_new);



			if($rows_new==0){



				$insert_query_new=@mysql_query("INSERT INTO `clientes_marketing` (`fecha`, `email`, `telefono`) VALUES ('".$fecha_new."','".$email_new."','".$telefono_new."');");



			}



			header('location:home/?thankyou');

			

		}

	}



	

 

 ?>



<div id="footer">



    <div class="m1">




<!-- 
		<div class="b5">

            

            <? if (isset($_GET['thankyou'])){?>

				

				<p class="gracias">



					<i class="fa fa-smile-o"></i>

	            	Gracias por suscribirte



	            	<script type="text/javascript">

	            		//newsletter 

						$('body,html').stop(true,true).animate({				

							scrollTop: $('#footer').offset().top

						},1000);

	            	</script>



            	</p>



            <? } else {?>



            	<p>



	            	<i class="fa fa-envelope"></i>            

	            	Ofertas exclusivas en tu email

	            	<small>Ingresá tu Email o WhatsApp</small>



            	</p>

            

            <? } ?>

            

            

            <form id="new" name="new" method="post" autocomplete="off">



				<div style="display:none;">

					<input type="text" id="mail3" name="mail3" />

					<input type="text" id="web3" name="web3" value="http://" />

				</div>



	            <input type="email" name="email_new" id="email_new" placeholder="E-mail">

	            <input type="tel" name="telefono_new" id="telefono_new" placeholder="WhatsApp">



	            <button type="button">¡Quiero recibirlas!</button>



            </form>

			

			<script type="text/javascript">

				

				$('#new button').click(function(){



					var email = $('#email_new').val();

					var telefono = $('#telefono_new').val();



					if (email.length>0 || telefono.length>0){



						if (email.length>0 && telefono.length>0){



							var RegExPattern = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;   

							if ((email.match(RegExPattern)) && (email!='')) { 



								$('#email_new').removeClass('input-error'); 



							} else {



							    $('#email_new').addClass('input-error').attr('placeholder','*E-mail incorrecto').val(''); 

								focus();

								return 0;



						    } 

						



							var RegExPattern = /^\d+/;   

							if ((telefono.match(RegExPattern)) && (telefono!='')) {   



								$('#telefono_new').removeClass('input-error');



							} else {   

							

								$('#telefono_new').addClass('input-error').attr('placeholder','*WhatsApp incorrecto').val(''); 

								focus();

								return 0;

						    } 



						}						





						if (email.length>0 && telefono.length==0){



							var RegExPattern = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;   

							if ((email.match(RegExPattern)) && (email!='')) { 



								$('#email_new').removeClass('input-error'); 



							} else {



							    $('#email_new').addClass('input-error').attr('placeholder','*E-mail incorrecto').val('');  

								focus();

								return 0;



						    } 



						}



						if (email.length==0 && telefono.length>0){



							var RegExPattern = /^\d+/;   

							if ((telefono.match(RegExPattern)) && (telefono!='')) {   



								$('#telefono_new').removeClass('input-error');



							} else {   

							

								$('#telefono_new').addClass('input-error').attr('placeholder','*WhatsApp incorrecto').val('');  

								focus();

								return 0;

						    } 



						}



						$('#new').submit(); 





					} else {



						$('#email_new').addClass('input-error').attr('placeholder','*E-mail');

						$('#telefono_new').addClass('input-error').attr('placeholder','*WhatsApp'); 



					}



					



					

				});					



			</script>



    

            

    

        	<div class="clear"></div>

        </div> -->





		<div class="b1">

            

			<ul>



                <!-- <li><a href="home">Home</a></li> -->

                <!--li><a href="aparts">Aparts</a></li-->

                <li><a href="servicios">Servicios</a></li>

                <!-- <li><a href="<? echo $google_como_llegar;?>" target="_blank">Cómo llegar</a></li> -->

                <!-- <li><a href="contacto">Contacto</a></li> -->

                <li><a href="<? echo $reserva_online;?>">Reserva online</a></li>
                <li>
                    <div>
                        <img src="https://www.ahtra.com.ar/cabecera-aht/logo_aht_2018.png" style="width:40px; height:40px" alt="AHTRA - Asociación de Hoteles de Turismo de la República Argentina">
                    </div>
                </li>


           </ul>



        <div class="clear"></div>

        </div>





		<div class="b3">

            

			<ul>



                <? if (!empty($direccion_web)){?><li><a href="<? echo $google_como_llegar;?>"><i class="fa fa-location-arrow"></i> <? echo $direccion_web;?></a></li><? } ?>

                <? if (!empty($telefono_web)){?><li><i class="fa fa-phone"></i>  <? echo $telefono_web;?></li><? } ?>

                <? if (!empty($whatsapp_web)){?><li><a href="javascript:;" class="whatsapp"><i class="fa fa-whatsapp"></i>  <? echo $whatsapp_web;?></a></li><? } ?>

                <? if (!empty($email_web)){?><li><a href="contacto"><i class="fa fa-envelope-o"></i>  <? echo $email_web;?></a></li><? } ?>
					


           </ul>



        <div class="clear"></div>

        </div>







		<div class="b2">





            <? if (strlen($facebook_web)>0){?><li><a href="https://www.facebook.com/DestinarCarilo" target="_blank"><i class="fa fa-facebook"></i></a></li><? } ?>

            <? if (strlen($instagram_web)>0){?><li><a href="https://www.instagram.com/apart_destinar" target="_blank"><i class="fa fa-instagram"></i></a></li><? } ?>

            <? if (strlen($youtube_web)>0){?><li><a href="<? echo $youtube_web;?>" target="_blank"><i class="fa fa-youtube"></i></a></li><? } ?>

            <? if (strlen($twitter_web)>0){?><li><a href="<? echo $twitter_web;?>" target="_blank"><i class="fa fa-twitter"></i></a></li><? } ?>

              

        <div class="clear"></div>

        </div>

<p><img src="imagenes/iconos/no-smoking.png" style="width: 26px" alt="no-smoking"> Prohibido fumar en el interior  de las habitaciones y cabañas</p>
				<p><img src="imagenes/iconos/dog.png" style="width: 26px" alt="no-smoking"> No se aceptan mascotas en el hotel</p> 






		

            



    <div class="clear"></div>

    </div>




	<div class="m2">

        

        <div class="b1">Copyright &copy; <? echo date('Y');?> <? echo $footer_web;?>. Todos los derechos reservados. Seonet <a href="https://www.seonet.com.ar/agencia-marketing-digital.php">agencia de marketing</a></div>
        

        <div class="b2"><!--a href="http://www.pcsignos.com.ar" target="_blank" title="posicionamiento web seo"></a--></div>

    <div class="clear"></div>

    </div>



<div class="clear"></div>

</div>







</body>

</html>



<script type="text/javascript" src="js/slides.js?v=<? echo $version;?>"></script>

<script type="text/javascript" src="js/fancybox.js?v=<? echo $version;?>"></script>

<script type="text/javascript" src="js/datepicker.js?v=<? echo $version;?>"></script>





<script type="text/javascript">



$(document).ready(function() {





	$('.btn-newsletter').click(function(){



		var email = $('#email_new').val();



		$('.d1').hide();

		

		if (email.length==0){ 

		    

		   $('.d1').show();

		   focus();

		   return 0;



		} else {



			var RegExPattern = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;   

			if ((email.match(RegExPattern)) && (email!='')) {   

			} else {

			    $('.d1').show();

				focus();

				return 0;

		   }    

		}

		



	   $('#new').submit(); 



	});	

	

    //Fancybox

    $(".fancybox").fancybox({



        padding : 0,

        animation :'elastic',

        helpers: {

            overlay: {

                locked: false

            }

        }



    });





    $(".various").fancybox({

    	padding		: 30,

		maxWidth	: 480,

		maxHeight	: 320,

		fitToView	: false,

		width		: '70%',

		height		: '70%',

		autoSize	: false,

		closeClick	: false,

		openEffect	: 'none',

		closeEffect	: 'none'

	});



	//desk

	if ($(window).width() > 1024) {	



		$(".content2-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:true,

			item:3,

			auto: true,

			pause: 5000,

		});



				 

		$(".content3-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:true,

			item:1,	

		});	



		$(".content4-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:true,

			item:1,	

		});



		$(".content6-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:true,

			item:3,

		});



		$(".content7-slider").lightSlider({

			loop:true,

			keyPress:true,

			pager: true,

            controls:false,

			item:3,

	

		});		



		$(".content8-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:true,

			item:4,



	

		});		





		$(".telefono").attr("href","javascript:;");



		

	} else {





		$(".content1-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:2,	

		});



		$(".content2-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:1.5,	

		});



		$(".content3-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:1,	

		});	



		$(".content4-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:1,	

		});		

		

		$(".content5-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:1.5,	

		});	



		$(".content6-slider").lightSlider({

			loop:true,

			keyPress:true,

			controls:false,

			item:1.5,	

		});





        $(".content7-slider").lightSlider({

            

            loop:true,

            keyPress:true,

            pager: false,

            controls:false,

            item:1.5,

    

        });



        $(".content8-slider").lightSlider({

            

            loop:true,

			keyPress:true,

			controls:true,

            item:1,

    

        });	        		



	}



	//google

    $('.whatsapp').click(function () {



        location.href="https://api.whatsapp.com/send?phone=<? echo $whatsapp_movil_web;?>";



          var callback = function () {

            if (typeof(url) != 'undefined') {

              window.location = url;

            }

          };



          gtag('event', 'conversion', {

              'send_to': '<? echo $conversion_evento_whatsapp;?>',

              'event_callback': callback

          });



        

    }); 



    $('.telefono').click(function () {



    	location.href="<? echo $movil_web;?>";





         var callback = function () {

            if (typeof(url) != 'undefined') {

              window.location = url;

            }

          };



          gtag('event', 'conversion', {

              'send_to': '<? echo $conversion_evento_telefono;?>',

              'event_callback': callback

          });



        

    });	



	//nav

	!function(t){function e(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n]);return t}function n(t,e){for(var n=0;n<t.length;n++){var i=t[n];e(i)}}function i(t){this.options=e({},this.options),e(this.options,t),this._init()}i.prototype._init=function(){this.body=document.body,this.mask=document.querySelector("#c-mask"),this.menu=document.querySelector("#menuBox"),this.closeBtn=this.menu.querySelector(".navClose"),this._initEvents()},i.prototype._initEvents=function(){this.closeBtn.addEventListener("click",function(t){t.preventDefault(),this.close()}.bind(this)),this.mask.addEventListener("click",function(t){t.preventDefault(),this.close()}.bind(this))},i.prototype.open=function(){this.menu.classList.add("active"),this.mask.classList.add("active"),this.disableMenuOpeners()},i.prototype.close=function(){this.menu.classList.remove("active"),this.mask.classList.remove("active"),this.enableMenuOpeners()},i.prototype.disableMenuOpeners=function(){n(this.menuOpeners,function(t){t.disabled=!0})},i.prototype.enableMenuOpeners=function(){n(this.menuOpeners,function(t){t.disabled=!1})},t.Menu=i}(window); var slideRight = new Menu({}); var slideRightBtn=document.querySelector("#nav");slideRightBtn.addEventListener("click",function(e){e.preventDefault,slideRight.open()});





});

	

	

	

</script>







