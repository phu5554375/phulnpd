@extends('frontend.layout.app')

@section('content')
   
    <div id="siteContainer">

        <header id="siteHeader" class="site-header" style="background-image: url('paperoll/assets/img/cover-roll.jpg'); background-size: cover; background-position: center;">
            <div class="main-nav">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-siteHeaderMenuCollapse" aria-expanded="false"><i class="ion-navicon-round"></i></button>
          <h1 class="navbar-brand">
            <a href="{{url('/')}}" style="background-image: url(' {{url('paperoll/assets/img/logo.png')}}');    
    "></a></h1>
                </div>
                
              </div>
            </div>
                    <section class="hello">
                        <article>
                            <h1>
                            Lưu trữ những kỷ niệm, những khoảng khắc đáng nhớ cùng PrintGo
                            </h1>
                            <a class="start button button--flat" href="#sec1"><i class="fa fa-mouse-pointer"></i> Chọn mẫu ngay</a>
                        </article>
                        <aside>
                            <div class="roll"></div>
                        </aside>
                    </section>
            
        </header>
        <div id="siteContent" class="isg-front-page">
            <section class="highlights" data-background="#aadaca">
                <article>
                     <h2>PrintGo tặng tất cả chị em phụ nữ 1 Album Mini nhân dịp 8-3</h2>
        <ul>
            <li>
                <img src="paperoll/stock/icons/create-roll.svg" width="200" alt="Create your roll using you social photos."><br><span>Chọn mẫu thiết kế</span>
            </li>
        <li>
            <img src="paperoll/stock/icons/print-roll.svg" width="200" alt="We print it on a concrete roll paper, up to 8 meters !"><br>
            <span>Chọn 5 bức ảnh đẹp để in</span>
        </li>
        <li>
            <img src="paperoll/stock/icons/shipping-roll.svg" width="200" alt="We ship the roll."><br><span>Nhập thông tin cá nhân để in</span>
        </li>
            </ul>
    </article>
            </section>

    <section class="pictures" id="sec1" data-background="#faf5eb">
        <article>
            <h2>Chọn khung hình cho Album của bạn nhé</h2>
            
            

            <div class="container">

            <div class="col-md-4 tem1">
                <a href="{{url('/editor/1')}}"><img src="paperoll/assets/img/111.png"></a>
            </div>

            <div class="col-md-4 tem1">
                <a href="{{url('/editor/2')}}"><img src="paperoll/assets/img/222.png">
                </a>
            </div>
            <div class="col-md-4 tem1"><a href="{{url('/editor/3')}}"><img src="paperoll/assets/img/333.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/4')}}"><img src="paperoll/assets/img/444.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/5')}}"><img src="paperoll/assets/img/555.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/6')}}"><img src="paperoll/assets/img/666.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/7')}}"><img src="paperoll/assets/img/777.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/8')}}"><img src="paperoll/assets/img/888.png"></a></div>

            <div class="col-md-4 tem1"><a href="{{url('/editor/9')}}"><img src="paperoll/assets/img/999.png"></a></div>

        </div>
               
                    </article>
                </section>
                <section class="newsletter">
                    <article><h4>Get Paperoll product news</h4>
                        <form id="newsletter" method="post"><input id="email" required="" type="email" placeholder="Email"><input type="submit" value="Subscribe"></form>
                    </article>
                </section>
                <footer>
                    <nav>
                        <a class="link" href="{{url('/fqa')}}">FAQ</a>
                        <a class="link" href="{{url('/terms')}}">Terms</a>
                        <a class="link" href="{{url('/contact')}}">Contact</a>
                        <a class="link" href="{{url('/policy')}}">Policy</a>
                        <a class="social" href="">
                            <i class="fab fa-instagram"></i></a>
                        <a class="social" href="">
                            <i class="fab fa-facebook"></i></a>
                            <a class="social" href=""><i class="fab fa-twitter-square"></i></a>
                        </nav></footer>
        </div>
    
    <!-- END Site Footer -->
    </div>
<script>
    $(document).ready(function() {
  $("a[href*='#']:not([href='#])").click(function() {
    let target = $(this).attr("href");
    $('html,body').stop().animate({
      scrollTop: $(target).offset().top
    }, 1000);
    event.preventDefault();
  });
});
</script>
    @endsection
  

