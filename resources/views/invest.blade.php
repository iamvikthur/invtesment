@extends('layouts.home')

@section('content')

<div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
	<div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">



		<div class="container h-100">
			<div class="row h-100 align-items-center">

				<h5>Our Investment offer</h5>

				<p>Select the investment offer by clicking on the proceed button displayed</p>

                @foreach ($plans as $plan)

				<div class="col-md-6" style="margin-bottom: 20px;">
					<div class="tab-pane card border-0 shadow-sm bg-faded-primary bg-repeat-0 bg-size-cover" style="background: url(../assets/img/account/pattern.svg) 60%, linear-gradient(30deg, #82022a 0%, #82022a 40%, #8ed2f0 100%) !important;color:#fff !important;min-height: 16rem;border-radius:1.5rem;">
						<div class="card-body">
							<div class="row">
								<a href="{{ route('investment_proceed', [$plan->id, $plan->name]) }}" class="row" style="color:#fff;text-decoration: none;">
									<div class="col-10 pb-3"><b>{{ $plan->name }}</b></div>
									<div class="col-2">
										<div id="tm-btc"><img style="width:40px;vertical-align:sub;" src="{{ asset('dash/img/usdt.png') }}"></div>
									</div>
									<div class="col-12 text-center">
										<span style="font-size:2.5rem;font-weight:800;color:#ffdd2d;">{{ $plan->percentage }}% <span style="font-size:1.5rem;color:#ffffff;">R.O.I</span></span><br><span style="font-size:1.3rem;font-weight:400;">Duration: {{ $plan->duration }}</span><br>
										<button style="border:none; padding: 7px; border-radius: 10px; background:#26A17B; color: #fff;">Proceed</button>
									</div>
									<div class="col-12 pb-3"></div>
									<div class="col-6 text-center">
										<span style="font-weight:400;">Min Invest</span>
										<div id="ti-btc"><span style="font-size:1.3rem;font-weight:800;">${{ $plan->min }}<span style="font-size:0.8rem;vertical-align:text-top;"></span></span></div>
									</div>
									<div class="col-6 text-center">
										<span style="font-weight:400;">Max Invest</span>
										<div id="tp-btc"><span style="font-size:1.3rem;font-weight:800;">{{ $plan->max === "Unlimited" ? "Unlimited" : "$".$plan->max }}<span style="font-size:0.8rem;vertical-align:text-top;"></span></span></div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
</div>

@endsection
