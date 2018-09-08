@extends('layouts.master')
@section('slider')








<div class="slider-container light rev_slider_wrapper">
	<div id="revolutionSlider" class="slider rev_slider" >
		<ul>

			<li>

				<img src="{{asset('uploads/home.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">


			</li>
			<li>

				<img src="{{asset('uploads/home2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">


			</li>
			
			
		</ul>
	</div>
</div>







@endsection
@section('content')



<div class="container">
	<div class="row text-right">
		<div class="col">
			<h1>
				الكلمة الترحيبية
			</h1>
			<h1>
				مرحبا بزوارنا الكرام في موقع دار العثمان
			</h1>
		</div>
	</div>
</div>

<div class="container" style="background-color: lightgoldenrodyellow;">
	<div class="row text-right">
		<div class="col">
			<p class="lead">
				المنبثقة من ثلث المرحوم عبدالله عبداللطيف العثمان، والتي تعنى بخدمة المجتمع الكويتي بكافة أطيافه، وتحمل شعارها
				“وللخير دار”. فهي دار لأسرة آل عثمان بكافة أفرعها، وهي دار تشع بالخير في الكويت وخارجها من خلال متابعة المشاريع
				الخيرية التي يقوم بها ثلث المرحوم عبدالله عبداللطيف العثمان، هذا الإنسان الخيِّر الذي جادت بالخير يداه، وامتد
				إحسانه بعد وفاته من خلال وصيته التي لازالت تفيض بالخير إلى يومنا هذا.في هذا الموقع ستجد معلومات كافية عن عائلة
				العثمان وعن المرحوم عبدالله عبداللطيف العثمان، كما يحتوي الموقع على الخدمات المقدمة لأسرة آل عثمان، والخدمات
				المجتمعية سواء المحاضرات العامة أو خدمة حجز القاعات، وغيرها من أخبار دار العثمان.فمرحباً بكم، ويسعدنا تواصلكم
				معنا.ولمعرفة المزيد عن أسرة آل عثمان وأرشيفها التاريخي والخيري يرجى زيارة موقع

				<a href="http://www.adnanalothman.com/">المهندس عدنان عبدالله العثمان</a>
			</p>
		</div>
	</div>

</div>




@endsection