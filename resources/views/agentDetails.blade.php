@extends('layouts.master', ['pageTitle' => 'PropertyDetails'])

@section('contents')

	<!-- Page Title
	============================================= -->
	<section id="page-title" class="page-title-mini">

		<div class="container clearfix">
			<h1>{{ $id }}</h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/agent') }}">Agent</a></li>
				<li class="active">{{ $id }}</li>
			</ol>
		</div>

	</section><!-- #page-title end -->

    <section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<div class="nobottommargin clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_half">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="team">
						            <div class="team-image">
						              <img src="{{ asset('images/team/3.jpg') }}" alt="John Doe">
						            </div>
								</div><!-- Product Single - Gallery End -->

							</div>

							<div class="col_half col_last product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price"><ins>Agent A</ins></div><!-- Product Single - Price End -->

								<!-- Product Single - Rating
								============================================= -->
								<div class="product-rating">
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star-half-full"></i>
									<i class="icon-star-empty"></i>
								</div><!-- Product Single - Rating End -->

								<div class="clear"></div>
								<div class="line"></div>

								<!-- Product Single - Short Description
								============================================= -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
								<p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
								<ul class="iconlist">
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
										<li><a href="#tabs-1"><i class="icon-email3"></i><span class="hidden-xs"> Contact Agent</span></a></li>
										<li><a href="#tabs-2"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">

											<h3>Send Me a Message</h3>

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
										<div class="tab-content clearfix" id="tabs-2">

											<div id="reviews" class="clearfix">

												<ol class="commentlist clearfix">

													<li class="comment even thread-even depth-1" id="li-comment-1">
														<div id="comment-1" class="comment-wrap clearfix">

															<div class="comment-meta">
																<div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																</div>
															</div>

															<div class="comment-content clearfix">
																<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
																<div class="review-comment-ratings">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star-half-full"></i>
																</div>
															</div>

															<div class="clear"></div>

														</div>
													</li>

													<li class="comment even thread-even depth-1" id="li-comment-1">
														<div id="comment-1" class="comment-wrap clearfix">

															<div class="comment-meta">
																<div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
																</div>
															</div>

															<div class="comment-content clearfix">
																<div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>
																<p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
																<div class="review-comment-ratings">
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star3"></i>
																	<i class="icon-star-empty"></i>
																	<i class="icon-star-empty"></i>
																</div>
															</div>

															<div class="clear"></div>

														</div>
													</li>

												</ol>

												<!-- Modal Reviews
												============================================= -->
												<a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

												<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																<h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
															</div>
															<div class="modal-body">
																<form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

																	<div class="col_half">
																		<label for="template-reviewform-name">Name <small>*</small></label>
																		<div class="input-group">
																			<span class="input-group-addon"><i class="icon-user"></i></span>
																			<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
																		</div>
																	</div>

																	<div class="col_half col_last">
																		<label for="template-reviewform-email">Email <small>*</small></label>
																		<div class="input-group">
																			<span class="input-group-addon">@</span>
																			<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
																		</div>
																	</div>

																	<div class="clear"></div>

																	<div class="col_full col_last">
																		<label for="template-reviewform-rating">Rating</label>
																		<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
																			<option value="">-- Select One --</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																		</select>
																	</div>

																	<div class="clear"></div>

																	<div class="col_full">
																		<label for="template-reviewform-comment">Comment <small>*</small></label>
																		<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
																	</div>

																	<div class="col_full nobottommargin">
																		<button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
																	</div>

																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															</div>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div><!-- /.modal -->
												<!-- Modal Reviews End -->

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					<div class="col_full nobottommargin">

						<h4>Properties</h4>

						<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-lg="4">

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="{{ url('/propertyDetails/1') }}"><img src="{{ asset('images/property/p1.jpg') }}" alt="Property"></a>
										<div class="sale-flash">City A</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="{{ url('/propertyDetails/1') }}">Property</a></h3></div>
										<div class="product-price"><ins>$12.49</ins></div>	
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

@stop