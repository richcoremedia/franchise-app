@if (Auth::user())

	<!-- Page Sub Menu
	============================================= -->
	<div id="page-menu">

		<div id="page-menu-wrap">

			<div class="container clearfix">

				<div class="menu-title">Welcome <span>{{ Auth::user()->name }}</span></div>

				<nav>
					<ul>
						<li class="current"><a href="#"><div>Gallery</div></a></li>
						<li><a href="#"><div>Features</div></a></li>
						<li><a href="#"><div>Models</div></a>
							<ul>
								<li><a href="#"><div>Small Size</div></a></li>
								<li><a href="#"><div>Normal Size</div></a></li>
								<li><a href="#"><div>Large Size</div></a></li>
							</ul>
						</li>
						<li><a href="#"><div>Reviews</div></a>
							<ul>
								<li><a href="#"><div>Expert Reviews</div></a></li>
								<li><a href="#"><div>User Reviews</div></a></li>
							</ul>
						</li>
						<li><a href="#"><div>Compare</div></a></li>
						<li><a href="#"><div>Build</div></a></li>
						<li><a href="#"><div>Order</div></a></li>
					</ul>
				</nav>

			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

			</div>

		</div>

	</div><!-- #page-menu end -->

@endif