<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	@include('head')
</head>

<body class="home page-template-default page page-id-295 custom-background frontpage body_tag scheme_default blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins header_type_custom header_style_header-custom-13 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-5.4.5 vc_responsive">


	<div class="body_wrap">

		<div class="page_wrap">
		<header class="top_panel top_panel_custom top_panel_custom_13 top_panel_custom_electroserv-header-fullwidth-simple without_bg_image">
			@include('header')
			@yield('content')
			@include('footer')

		</div><!-- /.page_wrap -->

	</div><!-- /.body_wrap -->


	@include('feet')
</body>



</html>