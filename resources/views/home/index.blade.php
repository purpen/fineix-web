@extends('home.base')

@section('title', '首页')
@section('content')
    @parent
	<section class="swiper-container banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover" style="background-image: url( {{ url('images/img1.png') }} )">
            	<div class="box">
            		<h1>About TAIHUONIAO</h1>
            		<p>As China's leading incubator for technology and aesthetic products and the global sales company,  TAIHOUNIAO takes the leader place to upgrade the quality and innovation for “Made In China”. By establishing global sales network and a mature domestic sales network in China, TAIHUONIAO is helping Chinese outstanding and mature technology products step out to the world while also helping the world's best products come into China. We are sincerely looking forward to good business partners to join us and share the big cake of the booming and upgrading market and make win-win development.</p>
            	</div>
            </div>
            <div class="swiper-slide bg-cover" style="background-image: url( {{ url('images/img2.png') }} )">
            	<div class="box2">
            		<h1>YI 4K ACTION CAMERA</h1>
            		<p>
            			<span>The Best Action Camera Ever. Period. </span><br>
            			Ambarella A9SE75 CPU | AUO 2.19 touch screen | 2 hour 4K/30fps recoding<br>
						5GHz Wi-Fi | EIS | LDC | Manual IQ parameters | 9 shooting modes | auto low light
            		</p>
            	</div>
            </div>
            <div class="swiper-slide bg-cover" style="background-image: url( {{ url('images/img3.png') }} )">
            	<div class="box3">
            		<h1>Boosting the Uma Bike into the Korea is the critical step of Globalization by TAIHUONIAO</h1>
            	</div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
    </section>
    <section class="product">
    	<h3 class="title ct">PRODUCT</h3>
    	<div class="slide-btn">
    		<div class="swiper-container column">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>YI ACTION CAMERA /4K </h2>
		            		<p>The Best Action Camera Ever. Period.</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy7.png') }}" align="absmiddle">
		            	<div class="content">
                        	<h2>UMA C1 </h2>
		            		<p>The First Ebike Designed For Young Generation</p>
                        </div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy2.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>YI Home Camera /1080p  </h2>
		            		<p>Arrival of Computer Vision Technology from Seeing to Thinking</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy8.png') }}" align="absmiddle">
                        <div class="content">
                        	<h2>UMA mini</h2>
		            		<p>The First Ebike Designed For Young Generation</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy3.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>YI Smart Dash Camera</h2>
		            		<p>Drive smarter, drive safer.</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy9.png') }}" align="absmiddle">
                        <div class="content">
                            <h2>Wowtation 1S/1F/1P </h2>
		            		<p>Never so exquisite like this one.</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy4.png') }}" align="absmiddle">
                        <div class="content">
                        	<h2>Misfit Shine 2</h2>
		            		<p>Fitness Tracker & Sleep Monitor</p>
		            	</div>
		            </div> 
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy10.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>AutoBot Car Cradles & Mounts</h2>
		            		<p>including all iPhones and most Android phones with 6 inch or smaller screen</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy5.png') }}" align="absmiddle">
                        <div class="content">
                            <h2>Misfit Ray</h2>
		            		<p>Fitness + Sleep Tracker with Sport Band</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy11.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>DJI PHANTOM 4</h2>
		            		<p>Visionary Intelligence Elevated Imagination</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy6.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>AutoBot Eye</h2>
		            		<p>Redefine the Dash camera</p>
		            	</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/xy12.png') }}" align="absmiddle">
		            	<div class="content">
		            		<h2>Goluk T1</h2>
		            		<p>Smart Dashboard Camera</p>
		            	</div>
		            </div>
		        </div>
	    	</div>
	    	<div class="swiper-pagination pag-btn"></div>
	    	<div class="swiper-button-next next-btn"></div>
	        <div class="swiper-button-prev prev-btn"></div>
    	</div>
    </section>
    <section class="partner">
    	<h3 class="title ct">OUR PARTNERS</h3>
    	<img src="{{ url('images/partners.png') }}" align="absmiddle" width="100%">
    </section> 
    <section class="news">
    	<h3 class="title ct">NEWS</h3>
    	<div class="slide-btn">
    		<div class="swiper-container nrow">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<img src="{{ url('images/new1.png') }}" align="absmiddle">
						<div class="content">
							<h2>May 26, 2016, together with Yunzao Technology, TAIHUONIAO had made the products launch press event in Soul Korea, announcing the Uma Bike Model C1 entered the the Korea market as the initial product.  As the exclusive partner with Yunzao Technology in Korea, TAIHUONIAO will deepen the globalization with Yunzao hand in hand during the coming cooperation.</h2>
							<p>05/26/2016</p>
						</div>
		            </div>
		            <div class="swiper-slide">
						<img src="{{ url('images/new2.png') }}" align="absmiddle">
						<div class="content">
							<h2>CES ASIA is the International Consumer Electronics Show in China which held by the United States CEA.  During the exhibition in 2015 —2016, TAIHUONIAO has showed its nearly 50 intelligent hardware in the CES ASIA  in two consecutive years.</h2>
							<p>05/11/2016</p>
						</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/new3.png') }}" align="absmiddle">
						<div class="content">
							<h2>2016, Taihuoniao with Taiwan Designers’ Center, the Taiwan authority's cultural and creative agency, held a strategic signing ceremony in Taiwan Fair site.</h2>
							<p>04/23/2016</p>
						</div>
		            </div>
		            <div class="swiper-slide">
		            	<img src="{{ url('images/new4.png') }}" align="absmiddle">
						<div class="content">
							<h2>CES International Consumer Electronics Show in USA is the world's largest and most widely affected consumer electronics Exhibition. In January 2016, TAIHOUNIAO showed its intelligent hardware products in the US CES Sands Hall. </h2>
							<p>01/06/2016</p>
						</div>
		            </div>
		        </div>
		    </div>
		    <div class="swiper-pagination nrow-pag-btn"></div>
	    	<div class="swiper-button-next nrow-next-btn"></div>
	        <div class="swiper-button-prev nrow-prev-btn"></div>
		</div>
    </section>
    <section class="contact">
    	<h3 class="title ct">CONTACT US</h3>
    	<div class="col-8">
    		<p>Phone:<br>
    		+86 10 8459 9384<br>
    		Mail:<br>
			sales@taihuoniao.com<br>
			Address:<br>
			218, Building No.9, 751, No.4 Jiuxianqiao Road, 
			Chaoyang District, Beijing
			</p>
    	</div>
    	<div class="col-8">
    		<div class="btnhref">
    			<a href="https://www.facebook.com/fineix.china" class="facebook" target="_blank"></a>
    			<a href="https://twitter.com/Taihuoniao" class="twitter" target="_blank"></a>
    			<a href="https://www.instagram.com/fineixchina" class="instagram" target="_blank"></a>
    		</div>
    		{{--
    		<img src="{{ url('images/facebook.png') }}">
    		<img src="{{ url('images/twitter.png') }}">
    		<img src="{{ url('images/instagram.png') }}">
    		--}}
    	</div>
    </section>
@endsection

