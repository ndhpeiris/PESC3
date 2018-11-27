<div class="vc_row wpb_row vc_row-fluid vc_custom_1503849252701 vc_row-o-content-middle vc_row-flex sc_layouts_row sc_layouts_row_type_narrow sc_layouts_row_fixed">
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-2 vc_col-sm-offset-0 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="sc_layouts_item"><a href="#" id="sc_layouts_logo_1711744917" class="sc_layouts_logo sc_layouts_logo_default"><img
						 class="logo_image" src="wp-content/uploads/2017/07/logo.png" alt="" width="207" height="47"></a><!-- /.sc_layouts_logo -->
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-7 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="sc_layouts_item">
					<nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade hide_on_mobile" id="sc_layouts_menu_2085597887"
					 data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
						<ul id="menu-main-menu" class="sc_layouts_menu_nav">
							<li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a href="/"><span>Home</span></a></li>
							<li id="menu-item-148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-148"><a
								 href="#"><span>Features</span></a>
								<ul class="sub-menu">
									<li id="menu-item-260" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-260"><a
										 href="#"><span>About Us</span></a>
										<ul class="sub-menu">
											<li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a
												 href="{{URL::to('/')}}/our-benefits/index.html"><span>Our Benefits</span></a></li>
											<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a
												 href="{{URL::to('/')}}/our-experts/index.html"><span>Our Experts</span></a></li>
										</ul>
									</li>

									<li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a
										 href="#"><span>Gallery</span></a>
										
									</li>
								</ul>
							</li>
							@if(Auth ::user() !=null)
							<li id="menu-item-148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-148"><a
								href="#"><span>Shedule</span></a>
							   <ul class="sub-menu">
								   <li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a
										href="/residential"><span>Residential</span></a>
								   </li>
								   <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a
										href="/commercial"><span>Commercial</span></a>   
								   </li>
							   </ul>
						   </li>
						   	
							<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="{{URL::to('/')}}/commercial/index.html"><span>Reviews</span></a></li>
							@endif
							@if(Auth ::user() ==null)
							<li id="menu-item-148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-148"><a
								 href="#"><span>Signup/Login</span></a>
								<ul class="sub-menu">

									<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="/register"><span>Signup</span></a></li>
									<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="{{route('login')}}"><span>Login</span></a></li>
								</ul>
							</li>
							
							@elseif(Auth::user() !=null)
							
							<li id="menu-item-148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-148"><a
								href="#"><span>{{ Auth::user()->name }}</span></a>
							   <ul class="sub-menu">

								   
								   <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a href="{{route('login')}}"><span>YOUR PROFILE</span></a></li>
								   <li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span>LOGOUT</span></a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												
											</a>
		
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
								</li> 
							   </ul>
						   </li>

							@endif

						
				
						</ul>
					</nav><!-- /.sc_layouts_menu -->
					<div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
						<a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
							<span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-3 vc_hidden-sm vc_hidden-xs sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="sc_layouts_item">
					<div id="sc_layouts_iconed_text_661477228" class="sc_layouts_iconed_text  not_flipped ">
							<div class="wpb_wrapper">
									<div class="sc_layouts_item"><a href="#" id="sc_layouts_logo_1711744917" class="sc_layouts_logo sc_layouts_logo_default"><img
											 class="logo_image" src="{{URL::to('/')}}/wp-content/uploads/2017/07/contact.png" alt="" width="207" height="47"></a><!-- /.sc_layouts_logo -->
									</div>
								</div>
					</div><!-- /.sc_layouts_iconed_text -->
				</div>
			</div>
		</div>
	</div>
</div>


			