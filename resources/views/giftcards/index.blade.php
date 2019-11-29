@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-md-4">
            <h3>All teh Gift Cards</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                @foreach($cards as $card)
                {{ $card->id }} <br>
                {{ $card->expires }}
                @endforeach
            </div>
        </div>
    </div>
@endsection
