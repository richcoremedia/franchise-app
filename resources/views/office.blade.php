@extends('layouts.master', ['pageTitle' => 'Office'])

@section('contents')
	
	<!-- Page Title
     ============================================= -->
     <section id="page-title" class="page-title-mini">

          <div class="container clearfix">
               <h1>Office</h1>
               <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
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
                               	<div class="product-desc">
                                    <div class="product-title"><h3><a href="{{ url('/agent') }}">{{ $office['name'] }}</a></h3></div>
                                    <div class="product-price"><ins>{{ $office['city'] }}</ins></div>
                               	</div>
                          	</div>

                        @endforeach

                    </div><!-- #property end -->

               </div>

          </div>

     </section>

@stop