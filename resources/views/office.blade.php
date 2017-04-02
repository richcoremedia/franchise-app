@extends('layouts.master', ['pageTitle' => 'Office'])

@section('contents')
	
	<!-- Page Title
     ============================================= -->
     <section id="page-title">

          <div class="container clearfix">
               <h1>Office</h1>
               <span>Our offices</span>
               <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Office</li>
               </ol>
          </div>

     </section><!-- #page-title end -->

     <section id="content">

          <div class="content-wrap">

               <div class="container clearfix">

                    <!-- Property
                    ============================================= -->
                    <div id="property" class="shop grid-container clearfix" data-layout="fitRows">
                         
                        @foreach ($officeLists as $office)
                   
                          	<div class="product clearfix">
                               	<div class="product-image">
                                    <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                    <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                    <div class="sale-flash">New Listing</div>                                        
                               	</div>
                               	<div class="product-desc">
                                    <div class="product-title"><h3><a href="#">{{ $office['name'] }}</a></h3></div>
                                    <div class="product-price"><ins>$12.49</ins></div>
                               	</div>
                          	</div>

                        @endforeach

                    </div><!-- #property end -->

               </div>

          </div>

     </section>

@stop