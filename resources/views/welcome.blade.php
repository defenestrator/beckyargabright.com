@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div>
                    <div class="content">
                        <div class="links" style="margin-bottom:24px;">
                            <a href="{{ route('giftcards.create') }}">Gift Cards</a>
                        </div>
                        <div class="title m-b-md">
                            <div style="margin-top:12px; padding-top:12px;"><img style="width:50%;" title="Becky Argabright, Boise Idaho Massage Therapy" alt="Becky Argabright, Boise Idaho Massage Therapy" src="/images/becky-logo.png"></div>
                            <div>Boise's Best Massage</div>
                            <div>Becky Argabright - CMT</div>
                        </div>
                        <div class="address" style="margin-bottom:20px;">
                            <a href="#address">1412 W. Washington St.<br>Boise, ID 83702</a><br><a href="tel:12083715719">1 (208) 371-5719</a>
                        </div>
                        <div class="links" style="margin-bottom:24px;">
                            <a href="deep_tissue">Deep Tissue</a>
                            <a href="cbd">CBD Treatment</a>
                            <a href="hot_stones">Hot Stones</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
