	
	<script  src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

	<div class="content">
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="#">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Menu</span>
							<span class="sdt_descr">Les cartes</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">A boire</a>
						<a href="#">A Manger</a>
						<a href="#">Tapas</a>					
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Evenements</span>
							<span class="sdt_descr">Que se passe-t-il ?</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="#">Concerts</a>
							<a href="#">Mardi Paella</a>
							<a href="#">Calendrier</a>
							<a href="#">Autres</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Localisation</span>
							<span class="sdt_descr">Comment nous <br> rejoindre ?</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Photos</span>
							<span class="sdt_descr">L'ambiance</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Horaires</span>
							<span class="sdt_descr">Quand venir au <br> Toroloco ?</span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Semaine</a>
						<a href="#">Week-End</a>
						<a href="#">Vacances</a>					
					</div>
				</li>
				<li>
					<a href="#">
						<img src="images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Contact</span>
							<span class="sdt_descr">Appelez-nous !</span>

						</span>
					</a>
					<div class="sdt_box">
						<a href="#">Réservation</a>
						<a href="#">Renseignements</a>
						
					</div>
				</li>
			</ul>
		
		</div>

	 <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
    </body>
</html>