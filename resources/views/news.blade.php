@extends('layouts.master', ['pageTitle' => 'News &amp; Tips'])

@section('contents')

	<!-- Page Title
	============================================= -->
	<section id="page-title" class="page-title-mini">

		<div class="container clearfix">
			<h1>News &amp; Tips</h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">News &amp; Tips</li>
			</ol>
		</div>

	</section><!-- #page-title end -->

	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Posts
				============================================= -->
				<div id="posts">

					<div class="entry clearfix">
						<div class="entry-image">
							<a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/full/17.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 10th February 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
							<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
							<li><a href="#"><i class="icon-camera-retro"></i></a></li>
						</ul>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
							<a href="blog-single.html"class="more-link">Read More</a>
						</div>
					</div>

				   <div class="entry clearfix">
						<div class="entry-image">
							<iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 16th February 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
							<li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19 Comments</a></li>
							<li><a href="#"><i class="icon-film"></i></a></li>
						</ul>
						<div class="entry-content">
							<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis placeat quo unde reprehenderit eum facilis vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, reprehenderit!</p>
							<a href="blog-single-full.html"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image">
							<div class="fslider" data-arrows="false" data-lightbox="gallery">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/full/10.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/full/20.jpg" alt="Standard Post with Gallery"></a></div>
										<div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/full/21.jpg" alt="Standard Post with Gallery"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 24th February 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
							<li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
							<li><a href="#"><i class="icon-picture"></i></a></li>
						</ul>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident deserunt. Saepe!</p>
							<a href="blog-single-small.html"class="more-link">Read More</a>
						</div>
					</div>

					<div class="entry clearfix">
						<div class="entry-image clearfix">
							<div class="portfolio-single-image masonry-thumbs col-6" data-big="3" data-lightbox="gallery">
								<a href="images/blog/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/2.jpg" alt=""></a>
								<a href="images/blog/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/3.jpg" alt=""></a>
								<a href="images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-1.jpg" alt=""></a>
								<a href="images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-2.jpg" alt=""></a>
								<a href="images/blog/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12.jpg" alt=""></a>
								<a href="images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12-1.jpg" alt=""></a>
								<a href="images/blog/full/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/13.jpg" alt=""></a>
								<a href="images/blog/full/18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/18.jpg" alt=""></a>
								<a href="images/blog/full/19.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/19.jpg" alt=""></a>
							</div>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 3rd March 2014</li>
							<li><a href="#"><i class="icon-user"></i> admin</a></li>
							<li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
							<li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
							<li><a href="#"><i class="icon-picture"></i></a></li>
						</ul>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident deserunt. Saepe!</p>
							<a href="blog-single-thumbs.html"class="more-link">Read More</a>
						</div>
					</div>

				</div><!-- #posts end -->

				<!-- Pagination
				============================================= -->
				<ul class="pager nomargin">
					<li class="previous"><a href="#">&larr; Older</a></li>
					<li class="next"><a href="#">Newer &rarr;</a></li>
				</ul><!-- .pager end -->

			</div>

		</div>

	</section>
@stop