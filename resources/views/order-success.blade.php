@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="panel-title">Order Received</h4></div>

                <div class="panel-body text-center">
                    <h3>THANK YOU</h3>
                    <h4>For ordering food using <a href="{{ url('/') }}"><strong><u>JUNK FOOD SEDAP</u></strong></a></h4>
                    <br>
                    <p>
                        Please wait, we will notify you once your order is verified. <br>
                    </p>
                    <br>
                </div>

                <div class="panel-footer">
                    <a href="{{ route('listOrder') }}" class="btn btn-primary pull-right">Track Order <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i></a>
                    <a href="{{ url('/home') }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
