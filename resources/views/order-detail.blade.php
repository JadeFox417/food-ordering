<div class="row">
    <div class="col-md-5">
        <img class="img-responsive" src="{{ asset('assets/pictures/menu/'.$order->menu->pict) }}" >
    </div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-5">
                <strong>Menu</strong>
            </div>
            <div class="col-md-7">
                : {{ $order->menu->name }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <strong>Total Order</strong>
            </div>
            <div class="col-md-7">
                : {{ $order->qty }} Serving/s
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <strong>Total Payment</strong>
            </div>
            <div class="col-md-7">
                : Rp. {{ number_format($order->total,0,',','.') }},-
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <strong>Order Date</strong>
            </div>
            <div class="col-md-7">
                : {{ date('d M Y', strtotime($order->order_for)) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <strong>Time</strong>
            </div>
            <div class="col-md-7">
                : {{ date('h:i A', strtotime($order->order_for)) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <strong>Delivery</strong>
            </div>
            <div class="col-md-7">
                : 
                @if ($order->delivery == 1)
                <label class="label label-success"> Yes </label>
                @else 
                <label class="label label-danger"> Self-Collection </label>
                @endif
            </div>
        </div>
        @if ($order->delivery == 1)
        <div class="row">
            <div class="col-md-5">
                <strong>Delivery Target</strong>
            </div>
            <div class="col-md-7">
                : {{ $order->to_addr }}
            </div>
        </div>
        @endif
    </div>
</div>