@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-md-4">
            <h3>Show All Gift Cards:</h3>
            </div>
        </div>
        <div class="row">
<div class="col-md-6 offset-md-4">
        <a href ="{{ route('giftcards.index') }}" class="btn btn-primary">
                {{ __('Show All Gift Cards') }}
        </a>
        </div>
    </div></div>
        <hr>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-md-4">
            <h3>Print a Blank Gift Card:</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('giftcards.blank') }}">
                @csrf
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Print Blank Card') }}
                    </button>
                </div>
            </div>
        </form>
        <hr>

        <div class="row">
            <div class="col-md-6 offset-md-4">
            <h3>Or fill one out now:</h3>
            </div>
        </div>
        <hr>
        <form method="POST" action="{{ route('giftcards.blank') }}">
            @csrf

            <div class="form-group row">
                <label for="to_name" class="col-md-4 col-form-label text-md-right">{{ __('To:') }}</label>

                <div class="col-md-6">
                    <input id="to_name"
                    type="text"
                    class="form-control @error('to_name') is-invalid @enderror"
                    name="to_name"
                    value="{{ old('to_name') }}"
                    required
                    autocomplete="to_name"
                    autofocus>

                    @error('to_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="from_name" class="col-md-4 col-form-label text-md-right">{{ __('From:') }}</label>

                <div class="col-md-6">
                    <input id="from_name"
                    type="text"
                    class="form-control @error('from_name') is-invalid @enderror"
                    name="from_name"
                    value="{{ old('from_name') }}"
                    required
                    autocomplete="name">

                    @error('from_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="from_email"
                    class="col-md-4 col-form-label text-md-right">{{ __('Your E-Mail Address (optional)') }}
                </label>
                <div class="col-md-6">
                    <input id="from_email"
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="from_email"
                    value="{{ old('from_email') }}"
                    autocomplete="email">

                    @error('from_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="hours" class="col-md-4 col-form-label text-md-right">{{ __('Hours:') }}</label>

                <div class="col-md-6">
                    <select id="hours"
                    type="text"
                    class="form-control @error('hours') is-invalid @enderror"
                    name="hours"
                    value="{{ old('hours') }}"
                    required>
                        <option value="60">1 hour &mdash; $60</option>
                        <option value="90">1.5 hours &mdash; $80</option>
                        <option value="120">2 hours &mdash; $100</option>
                        <option value="180">3 hours &mdash; $150</option>
                        <option value="240">4 hours &mdash; $200</option>
                        <option value="300">5 hours &mdash; $250</option>
                        <option value="360">6 hours &mdash; $300</option>
                        <option value="420">7 hours &mdash; $350</option>
                        <option value="480">8 hours &mdash; $400</option>
                        <option value="540">9 hours &mdash; $450</option>
                        <option value="600">10 hours &mdash; $500</option>
                    </select>

                    @error('hours')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="to_email"
                    class="col-md-4 col-form-label text-md-right">{{ __('Deliver by E-Mail (optional)') }}
                </label>
                <div class="col-md-6">
                    <input id="to_email"
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="to_email"
                    value="{{ old('to_email') }}" autocomplete="to_email">

                    @error('to_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Purchase') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
