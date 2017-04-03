@extends('layouts.master', ['pageTitle' => 'Franchise App'])

@section('contents')
	<section id="slider" class="slider-parallax full-screen">
		<div class="slider-parallax-inner">

			<div class="full-screen" style="background: url('images/appshowcase/1.jpg'); background-size: cover;">
				<div class="container clearfix">

					<div class="vertical-middle no-fade">
						
						<div class="col-md-12 dark fright nobottommargin" data-animate="fadeIn">

							<h3>Property <span>Search</span></h3>

							<form class="clearfix" method="POST" id="basic_search_form" name="basic_search_form">

								<div class="col_one_third">
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

								<div class="col_one_third col_last">
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

								<div class="clear"></div>

								<div class="col_one_third">
									<label for="url">Property ID</label>
									<input type="text" name="prop_id" id="prop_id" size="22" tabindex="3" class="sm-form-control" />
								</div>

								<div class="col_one_third">
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

								<div class="col_one_third col_last" style="margin-top:35px;">									
									<input id="showing_today" class="checkbox-style" name="showing_today" type="checkbox" tabindex="5">
									<label for="showing_today" class="checkbox-style-3-label">7 Days Properties</label>
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

	<section id="content">
		<div class="content-wrap" style="padding-top: 0px;">			

			<div class="section notopmargin nobottommargin clearfix">
				<div class="container clearfix">

					<div class="col_half nobottommargin topmargin-lg">

						<img src="images/property/agent-like.png" alt="Image" class="center-block">

					</div>

					<div class="col_half nobottommargin topmargin-lg col_last">

						<div class="heading-block topmargin-lg">
							<h2>Buy</h2>
							<span>Looking for a property to buy? We can help you out.</span>
						</div>

						<p>No more headache on scrolling for a countless number of properties. Our expert team will help you on searching the best possible property based on your preferences.</p>

						<a href="{{ url('buy') }}" class="button button-border button-rounded button-large button-dark noleftmargin">See more</a>

					</div>

				</div>
			</div>

			<div class="section notopmargin nobottommargin clearfix">

				<div class="hidden-sm hidden-xs" style="position: absolute;top: 0;left: -10%;width: 100%;height: 100%;background: transparent url('images/property/agent-shake.png') bottom right no-repeat;"></div>

				<div class="container clearfix" style="z-index: 1;">

					<div class="col-md-6 nobottommargin">

						<div class="heading-block topmargin-sm">
							<h2>Sell</h2>
							<span>Want to sell your property but don't know where to go? Our vast experience in real estate market can help you out.</span>
						</div>

						<p>Selling a property is not an easy task. You will need to find the correct buyer that are willing to buy your property.</p>

						<p>Leave everything to us, and in no time your property will be reached around the country.</p>

						<a href="{{ url('/sell') }}" class="button button-border button-rounded button-large button-dark noleftmargin">See more</a>

					</div>

				</div>

			</div>

			<div class="section notopmargin nobottommargin clearfix">
				<div class="container clearfix">

					<div class="col_half nobottommargin topmargin-lg">

						<img src="images/property/agent-key.png" alt="Image" class="center-block">

					</div>

					<div class="col_half nobottommargin topmargin-lg col_last">

						<div class="heading-block topmargin-lg">
							<h2>Rent</h2>
							<span>Want to rent a property? Look no more, we are here to help.</span>
						</div>

						<p>Whether it is for a short or long period of time rental, we will assist you to find the best property that suits your preference.</p>

						<a href="{{ url('rent') }}" class="button button-border button-rounded button-large button-dark noleftmargin">See more</a>

					</div>

				</div>
			</div>

			<div class="section dark notopmargin" style="padding-top: 60px;">
				<div class="container clearfix">

					<div class="col_one_third nobottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<i class="icon-bolt"></i>
							</div>
							<h3>Fast & Responsive</h3>
							<p>Our agents will reply back to you as fast as possible.</p>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-bar-chart"></i></a>
							</div>
							<h3>Vast Database</h3>
							<p>Our database contains data from over the country.</p>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-beaker"></i></a>
							</div>
							<h3>Marketing formula</h3>
							<p>We have created a powerful marketing formula for advertising our properties.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="container clearfix">

				<div class="heading-block center">
					<h3>Request For An Assessment Visit</h3>
					<span>Our agent will get back to you as soon as possible to get more information about your property.</span>
				</div>

				<div class="subscribe-widget">
					<div class="widget-subscribe-form-result"></div>
					<form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
						<div class="input-group input-group-lg divcenter" style="max-width:600px;">
							<span class="input-group-addon"><i class="icon-email2"></i></span>
							<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Email Now</button>
							</span>
						</div>
					</form>
				</div>

			</div>

		</div>
	</section>
@stop