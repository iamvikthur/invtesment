@extends('layouts.home')

@section('content')

<div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
	<div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
		<div class="container">
			<div class="row align-items-center">
				<h5>Complete Your Re-Investment</h5>
				<form method="POST" action="{{ route('invest') }}">
                    @csrf
                    <div class="col-md-8" style="margin-bottom: 20px;">
                        Investment Plan: <h6>{{ $plan->name }}</h6>
                        Profit Balance: <h6>${{ auth()->user()->profitBalance() }}</h6>
                        <label>Investment Amount (Min: ${{ $plan->min }}, Max: {{ $plan->max === "Unlimited" ? "Unlimited" : "$".$plan->max }})</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input name="amount" type="number" min="{{ $plan->min }}" max="{{ $plan->max }}" class="form-control" aria-label="Amount (in dollars)" required>
                            <span class="input-group-text">.00</span>
                            <input name="planId" type="hidden" value="{{ $plan->id }}">
                        </div>

                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Invest</button>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif

                        @if(session()->has('API_ERROR'))
                            <div class="alert alert-danger">{{ session('API_ERROR') }}</div>
                        @endif
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>

@endsection
