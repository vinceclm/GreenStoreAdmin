@extends('web.layout')
@section('content')

<section class="wishlist-content my-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3">
				<div class="heading">
						<h2>
								@lang('website.My Account')
						</h2>
						<hr>
					</div>

				<ul class="list-group">
						<li class="list-group-item">
								<a class="nav-link" href="{{ URL::to('/profile')}}">
										<i class="fas fa-user"></i>
									@lang('website.Profile')
								</a>
						</li>
						<li class="list-group-item">
								<a class="nav-link" href="{{ URL::to('/wishlist')}}">
										<i class="fas fa-heart"></i>
								 @lang('website.Wishlist')
								</a>
						</li>
						<li class="list-group-item">
								<a class="nav-link" href="{{ URL::to('/orders')}}">
										<i class="fas fa-shopping-cart"></i>
									@lang('website.Orders')
								</a>
						</li>
						<li class="list-group-item">
								<a class="nav-link" href="{{ URL::to('/shipping-address')}}">
										<i class="fas fa-map-marker-alt"></i>
								 @lang('website.Shipping Address')
								</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="{{ URL::to('/coopmembership')}}">
								<i class="fas fa-shield-check"></i>
								@lang('Coop Membership')
							</a>
						</li>
						<li class="list-group-item">
								<a class="nav-link" href="{{ URL::to('/logout')}}">
										<i class="fas fa-power-off"></i>
									@lang('website.Logout')
								</a>
						</li>
					</ul>

			</div>
			<div class="col-12 col-lg-9 ">
					<div class="heading">
							<h2>
									@lang('website.Coop Membership')
							</h2>
							<hr >
						</div>

	<!-- ............the end..... -->
			</div>
		</div>
	</div>
</section>
@endsection