@extends('frontend.layout.app')
@section('content')
{{--  <div class="popup-facebook" id="face-pop">
          
          <div class="content-face">
            <h3 class="title-face">Đăng nhập facebook để có trải nghiệm tốt hơn</h3>
           <a  class="login-btn" href="redirect/facebook"><i class="fab fa-facebook-f"></i> Login</a>
          </div>
         
        </div> --}}
        <style type="text/css">
        	.text-lc{  display: flex;margin: 0 auto }
        </style>
	<div id="siteContainer">
		
		<div id="siteContent" class="isg-front-page">
		<div id="root">
			<div class="app container-fluid">
				<div class="row wrapper">
					<div id="config-panel" class="config-panel">
						<div class="config-panel-inner">
							<h3>Your Roll</h3>
							
							<span class="panel-close">
								<span aria-hidden="true" class="fa fa-times"></span></span>
								
									<div class="voucher"><a>
										<i class="far fa-envelope"></i> Điền email của bạn</a>
											<div style="display: block;">
										<input type="email" id="email_txt" placeholder="Email" value="">
								</div>
							</div>
							<br>
							
						</div>
						<span>
							<button onclick="shareFB()" class="order-btn"> <span aria-hidden="true" class="fa fa-shopping-basket"></span>Print</button>
						</span>
					</div>
					<div id="album-panel" class="album-panel">
						<a href="{{url('/')}}" class="hvr-wobble-vertical">
						<img width="200" height="53" src="{{url('paperoll/assets/img/logo.png')}}" alt="Social Roll">
					</a>
					<div class="album-panel-inner">
						<h3><span>Albums</span></h3>
						<span class="album-panel-close">
							<span aria-hidden="true" class="fa fa-times"></span></span>
							<div class="btn-album-create">
								<a>
								 <span aria-hidden="true" class="fa fa-plus"></span>
								  <span>Add album</span></a></div>

								  <div class="action-button-album">
								  
								  		<a class="login-fb-btn hint--top" aria-label="Import Facebook albums" href="https://paperoll.io/auth/facebook">
								  			<i class="fab fa-facebook"></i> Facebook</a><a class="login-computer-btn hint--top" aria-label="Create album and upload photos">
								  				<i class="fas fa-cloud-upload-alt"></i> <span>Computer</span></a>
								  			</div>
								  			<div>
								  				<ul class="album-list-scroll">
								  					<li class="album-item">
								  						<div class="album-drag-content">
				
						<form id="form-upload" action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">

      					{{ csrf_field() }}

      						<input type="file" id="uploadFile" name="images[]" multiple />

      					<input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>

  						</form>
  						

						</div>
						@if(@$images)
						<button class="btn-danger btn" id="send-loi-chuc">Gửi lời chúc</button>
						@endif
											</li></ul>
                                        
											</div>
								  </div></div>
	<div id="scroll" class="roll-wrapper">
								  	
								  		<h2 class="roll-title">Roll preview</h2>

		@switch($id)
    @case(1)
     <div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_1.png')}});
		background-size: cover;">

        @break

    @case(2)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_2.png')}});
		background-size: cover;">

     @break
     @case(3)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_3.png')}});
		background-size: cover;">

     @break
     @case(4)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_4.png')}});
		background-size: cover;">

     @break
     @case(5)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_5.png')}});
		background-size: cover;">

     @break
     @case(6)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_6.png')}});
		background-size: cover;">

     @break
     @case(7)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_7.png')}});
		background-size: cover;">

     @break
     @case(8)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_8.png')}});
		background-size: cover;">

     @break
     @case(9)
<div class="roll" id="roll" style="background:url({{asset('paperoll/assets/img/Template_9.png')}});
		background-size: cover;">

     @break

    @default
        <div class="roll" id="roll" style="background:#fff">
@endswitch
		<div>
				 
					<div class="thumbnail" style="margin-top: 269px;">
													
                  <textarea name="message" id="congratu" rows="3" cols="35" placeholder="Nhập lời chúc"></textarea>
						<div id="image_preview">
							@if(session()->has('images'))

							    @foreach (session()->get('images') as $item)

									<img src="{{asset('images').'/'.$item}}" alt="">
                                <label>Lời chúc: </label> <input  type='text' name='loichuc' >
							  	@endforeach
							@endif
						  	
						</div>
					</div>
				</div>
			</div>
			

	</div>
<div>
</div>
</div>
 </div>
		</div>
	
    <!-- END Site Footer -->
	</div>
	<script type="text/javascript">

$(document).ready(function (e) {
 $("#uploadFile").change(function(){
 	var $fileUpload = $("input[type='file']");
    if (parseInt($fileUpload.get(0).files.length)>5){
    	$("#uploadFile").val(null);
    	alert("Tối đa bạn chỉ chọn được 5 hình ảnh");

    } else {
    	$('#image_preview').html("");

	    var total_file=document.getElementById("uploadFile").files.length;
	    for(var i=0;i<total_file;i++)

	    {
		
	$('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>")
	.append("<label>Lời chúc: </label> <input  type='text' name='loichuc[]' >")
;

    $("[name='images[]']").prop("required", true);


	    }

    }

   

  });
	 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
	var taskArray=[];
    $('#send-loi-chuc').click(function (e) {
    	
			taskArray=[];

        	$("input[name='loichuc']").each(function() {
   			taskArray.push($(this).val());
			});
			taskArray.push($('#congratu').val());
        	e.preventDefault();
        	
                	   $.ajax({
                            type: "POST",
                            url: "{{ route('loichuc') }}",
                            data: {
								"loichuc" : taskArray,
							},
                            success: function (result) {
								alert("Lời chúc đã gửi thành công");
                            },
                            dataType: "json",
                        });
                    }
        )
});
</script>
<script>
	function shareFB() {
        event.preventDefault();
       

        $.ajaxSetup({cache: true});
        $.getScript('//connect.facebook.net/en_US/sdk.js', function () {
            FB.init({
                appId: '742001872626851', //replace with your app ID
                version: 'v2.3'
            });
            FB.ui({
                    method: 'share',
                    title: 'Lucki.win',
                    description: 'Lucki.win',
                    href: 'https://tet.lucki.win',
                },
                function (response) {
                    if (response && !response.error_code) {
                        var emailAddr = $("#email_txt").val();
                        $.ajax({
                            type: "POST",
                            url: "{{url('sendemail')}}",
                            data: {
								"email" : emailAddr,

							},
                            success: function (result) {
								if(result.err){
									alert('lỗi');
								}else{
									alert(result.msg);	
								}
                            },
                            dataType: "json",
                        });
                    }
                });
        });




    
    };
</script>
@endsection