@extends("templates.navbar")

@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="mx-auto mb-5 mt-1 text-center">
            @forelse ($carts as $cart)
                <div class="card mb-3" style="max-width: 1000px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src={{url('./storage/images/'.$cart->Product->photo)}} class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="text-start px-4 col-md-6 d-flex flex-column justify-content-center">
                            <h6>{{$cart->Product->name}}</h6>
                            <h5>{{$cart->Product->price}}</h5>
                        </div>
                        <div class="col-md-3 d-flex flex-column justify-content-center">
                            <div class="w-100 d-flex justify-content-center">
                                <div class="d-flex w-50 justify-content-between">
                                    <form action="{{asset('cart/minusCart')}}" method="post">
                                        @method('patch')
                                        @csrf
                                        <input type="hidden" name="product_id" value={{ $cart->Product->id }}>
                                        <button class="d-flex bg-tiga align-items-center rounded px-2 py-1" type="submit">
                                            <h5 class="m-0">-</h5>
                                        </button>
                                    </form>
                                    <h5 class="my-auto">{{ $cart->quantity }}</h5>
                                    <form action="{{asset('cart/plusCart')}}" method="post">
                                        @method('patch')
                                        @csrf
                                        <input type="hidden" name="product_id" value={{ $cart->Product->id }}>
                                        <button class="d-flex bg-tiga align-items-center rounded px-2 py-1" type="submit">
                                            <h5 class="m-0">+</h5>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h3 class="my-2">{{ $cart->quantity * $cart->Product->price }}</h3>
                            <form method="post" action="/cart/deleteCart">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="product_id" value={{$cart->Product->id}}>
                                <button class="px-2 py-1 rounded bg-empat text-light" type="submit">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <h3>There is no item in cart</h3>
                <ion-icon class="display-1 " name="cart"></ion-icon>
            @endforelse
        </div>

        <div class="gap-4 position-fixed justify-content-end align-items-center d-flex bottom-0 bg-dua w-100 px-4 py-2">
            <div class="bg-satu rounded px-4 py-2">
                <form action="/cart/purchase" method="post">
                    @csrf
                    @method('delete')
                    <button class="bg-satu text-light" type="submit">Purchase</button>
                </form>
            </div>
        </div>

    </main>
@endsection
