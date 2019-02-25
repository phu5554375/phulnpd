@extends('frontend.layout.app')
@section('content')
<style>
	.tem1{ width: 18%; float: left; margin-right: 10px; }
</style>
<div id="siteContainer">
		<div class="head-r">
			<a class="hvr-wobble-vertical" href="/">
				<img width="250" src="paperoll/assets/img/logo.png"></a>
			</div>
		
		<div id="siteContent" class="isg-front-page">
		<section class="page">
			
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_1.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_2.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_3.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_4.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_5.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_6.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_7.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_8.png"></a></div>
			<div class="tem1"><a href="{{url('/editor')}}"><img src="paperoll/assets/img/Template_9.png"></a></div>
		</section>
			
	
		</div>
	
    <!-- END Site Footer -->
	</div>
@endsection