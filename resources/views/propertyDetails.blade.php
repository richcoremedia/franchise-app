@extends('layouts.master', ['pageTitle' => 'PropertyDetails'])

@section('contents')

	<!-- Page Title
	============================================= -->
	<section id="page-title" class="page-title-mini">

		<div class="container clearfix">
			<h1>{{ $id }}</h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/property') }}">Property</a></li>
				<li class="active">{{ $id }}</li>
			</ol>
		</div>

	</section><!-- #page-title end -->

    <section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<div class="postcontent nobottommargin clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_half">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
												<div class="slide" data-thumb="{{ asset('images/property/p1.jpg') }}"><a href="{{ asset('images/property/p1.jpg') }}" title="Property" data-lightbox="gallery-item"><img src="{{ asset('images/property/p1.jpg') }}" alt="Property"></a></div>
												<div class="slide" data-thumb="{{ asset('images/property/p1.jpg') }}"><a href="{{ asset('images/property/p1.jpg') }}" title="Property" data-lightbox="gallery-item"><img src="{{ asset('images/property/p1.jpg') }}" alt="Property"></a></div>
											</div>
										</div>
									</div>
									<div class="sale-flash">Sale!</div>
								</div><!-- Product Single - Gallery End -->

							</div>

							<div class="col_half col_last product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price"><ins>$24.99</ins></div><!-- Product Single - Price End -->

								<div class="clear"></div>
								<div class="line"></div>

								<!-- Agent Details
								============================================= -->
								<h3>Agent Details</h3>
								<div class="row">
									<div class="col-md-4">
										<img src="{{ asset('images/team/3.jpg') }}" alt="John Doe" style="max-width: 120px;">
									</div>
									<div class="col-md-8">
										<h4><a href="{{ url('/agentDetails/1') }}">John Doe</a></h4>
										<span>CEO</span><br>
										<span>1234567890</span><br>
										<span>abc@abc.com</span>	
									</div>
								</div>

								<div class="clear"></div>
								<div class="line"></div>

								<h3>Property Quick Details</h3>

								<!-- Product Single - Short Description
								============================================= -->								
								<ul class="iconlist">
									<li><i class="icon-caret-right"></i> 123 ABC Road, 12345 City</li>
									<li><i class="icon-caret-right"></i> 1100sq ft</li>
									<li><i class="icon-caret-right"></i> 2 rooms</li>
									<li><i class="icon-caret-right"></i> 2 bedrooms</li>
								</ul><!-- Product Single - Short Description End -->

								<!-- Product Single - Share
								============================================= -->
								<div class="si-share noborder clearfix">
									<span>Share:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div><!-- Product Single - Share End -->

							</div>

							<div class="col_full nobottommargin">

								<div class="tabs clearfix nobottommargin" id="tab-1">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a></li>
										<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Additional Information</span></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
										</div>
										<div class="tab-content clearfix" id="tabs-2">

											<table class="table table-striped table-bordered">
												<tbody>
													<tr>
														<td>Size</td>
														<td>1100 sq ft</td>
													</tr>
													<tr>
														<td>Room</td>
														<td>2</td>
													</tr>
													<tr>
														<td>Bedoom</td>
														<td>2</td>
													</tr>													
												</tbody>
											</table>

										</div>

									</div>

								</div>

								<div class="line"></div>

								<div class="col_full nobottommargin">

									<h3>Property Enquiry</h3>

									<div class="contact-widget">

										<div class="contact-form-result"></div>

										<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

											<div class="form-process"></div>

											<div class="col_one_third">
												<label for="template-contactform-name">Name <small>*</small></label>
												<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
											</div>

											<div class="col_one_third">
												<label for="template-contactform-email">Email <small>*</small></label>
												<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
											</div>

											<div class="col_one_third col_last">
												<label for="template-contactform-phone">Phone</label>
												<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
											</div>

											<div class="clear"></div>

											<div class="col_two_third">
												<label for="template-contactform-subject">Subject <small>*</small></label>
												<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
											</div>

											<div class="col_one_third col_last">
												<label for="template-contactform-service">Services</label>
												<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
													<option value="">-- Select One --</option>
													<option value="Wordpress">Wordpress</option>
													<option value="PHP / MySQL">PHP / MySQL</option>
													<option value="HTML5 / CSS3">HTML5 / CSS3</option>
													<option value="Graphic Design">Graphic Design</option>
												</select>
											</div>

											<div class="clear"></div>

											<div class="col_full">
												<label for="template-contactform-message">Message <small>*</small></label>
												<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
											</div>

											<div class="col_full hidden">
												<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
											</div>

											<div class="col_full">

												<script src="https://www.google.com/recaptcha/api.js" async defer></script>
												<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

											</div>

											<div class="col_full">
												<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
											</div>

										</form>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					<div class="col_full nobottommargin">

						<h4>Nearby Properties</h4>

						<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-lg="4">

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="{{ asset('images/property/p1.jpg') }}" alt="Property"></a>
										<div class="sale-flash">City A</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="#">Property</a></h3></div>
										<div class="product-price"><ins>$12.49</ins></div>	
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

				<div class="sidebar nobottommargin col_last clearfix">
					<div class="sidebar-widgets-wrap">

						<div class="widget widget_links clearfix">

							<h4>Quick Search</h4>
							<form class="clearfix" method="POST" id="basic_search_form" name="basic_search_form">

								<div class="col_full">
									<label for="author">Property Type</label>
									<select id="prop_type" name="prop_type" class="sm-form-control" tabindex="1">
                                        <option value="">Choose Type</option>    
                                        <option value="kerrostalo">Kerrostalo</option>      
                                        <option value="paritalo">Paritalo</option>
                                        <option value="rivitalo">Rivitalo</option>    
                                        <option value="omakotitalo">Omakotitalo</option> 
                                        <option value="erillistalo">Erillistalo</option>    
                                        <option value="puutalo-osake">Puutalo-osake</option>
                                        <option value="luhtitalo">Luhtitalo</option>
                                    </select>
								</div>

								<div class="col_full">
									<label for="author">City</label>
									<select id="prop_city" name="prop_city" class="sm-form-control" tabindex="2">
                                        <option value="">All Finland</option>
                                        <option value="Espoo">Espoo</option>                   
                                        <option value="Helsinki">Helsinki</option>
                                        <option value="Hyvinkaa">Hyvinkää</option>
                                        <option value="Hameenlinna">Hämeenlinna</option>
                                        <option value="Jyvaskyla">Jyväskylä</option>
                                        <option value="Kokkola">Kokkola</option>
                                        <option value="Lahti">Lahti</option>
                                        <option value="Mikkeli">Mikkeli</option>
                                        <option value="Mäntsälä">Mäntsälä</option>
                                        <option value="Pori">Pori</option>
                                        <option value="Rauma">Rauma</option>
                                        <option value="Riihimäki">Riihimäki</option>
                                        <option value="Rovaniemi">Rovaniemi</option>                      
                                        <option value="Seinajoki">Seinäjoki</option>
                                        <option value="Tampere">Tampere</option>
                                        <option value="Vaasa">Vaasa</option>
                                        <option value="Vantaa">Vantaa</option>
                                    </select>
								</div>

								<div class="col_full">
									<label for="url">Property ID</label>
									<input type="text" name="prop_id" id="prop_id" size="22" tabindex="3" class="sm-form-control" />
								</div>

								<div class="col_full">
									<label for="author">Looking For?</label>
									<select id="prop_group" name="prop_group" class="sm-form-control" tabindex="4">
                                        <option value="">Choose Group</option>                                 
                                        <option value="asunnot">Myyntiasunnot</option>      
                                        <option value="uudiskohteet">Uudiskohteet</option>
                                        <option value="toimitilat">Toimitilat</option>    
                                        <option value="lomakohteet">Vapaa-ajan asunnot</option>
                                        <option value="tontit">Tontit</option> 
                                        <option value="vuokra-asunnot">Vuokra-asunnot</option> 
                                        <option value="maa- ja metsätilat">Maa- ja metsätilat</option> 
                                        <option value="autotallit ja muut">Muut</option>
                                    </select>
								</div>								

								<div class="col_full nobottommargin">
									<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Search</button>
								</div>

							</form>

						</div>

					</div>
				</div>

			</div>

		</div>

	</section>

@stop