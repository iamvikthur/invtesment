@extends('layouts.home')

@section('content')

<div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
	<div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
		<div class="container">
			<div class="row align-items-center">
				<h5>Deposit Funds Intro Your Wallet</h5>
                @if(session()->has('INSUFFICIENT_FUNDS'))
                    <div class="alert alert-danger">{{ session('INSUFFICIENT_FUNDS') }}</div>
                @endif
				<form method="POST" action="{{ route('deposit') }}">
                    @csrf
                    <div class="col-md-8" style="margin-bottom: 20px;">
                        <label>Input Amount</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input name="amount" type="number" class="form-control" aria-label="Amount (in dollars)" required>
                            <span class="input-group-text">.00</span>
                        </div>
                        <label>Select Currency</label>
                        <div class="input-group mb-3">
                            <select name="currency" class="form-control" required>
                                @foreach ($currencies as $currency)
                                <option value="{{ $currency->id }}">{{ $currency->name }} ({{ $currency->symbol }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Deposit</button>
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
