@extends("templates.navbar")

@section('main')
    <main class="container mb-5">
        <div class="boxShadow rounded p-2 d-flex gap-4">
            <div class="img-wrapper rounded d-flex flex-column h-100 justify-content-start align-items-center gap-2 bg-dua">
                <img class="boxShadow" src="{{ url('./storage/images/'.$product->photo) }}" alt="a">
                @auth
                    @if(Auth()->user()->role == 'user')
                        @if($product->Cart)
                            <div class="bg-satu rounded p-1 mb-2 text-light d-flex">
                                <form action="{{asset('cart/minusCart')}}" method="post">
                                    @method('patch')
                                    @csrf
                                    <input type="hidden" name="product_id" value={{ $product->id }}>
                                    <button class="bg-dua rounded px-2 py-1 text-light" type="submit">
                                        <h2 class="m-0">-</h2>
                                    </button>
                                </form>
                                <h3 class="mx-3 my-auto">{{ $product->Cart->quantity }}</h3>
                                <form action="{{asset('cart/plusCart')}}" method="post">
                                    @method('patch')
                                    @csrf
                                    <input type="hidden" name="product_id" value={{ $product->id }}>
                                    <button class="bg-dua rounded px-2 py-1 text-light" type="submit">
                                        <h2 class="m-0">+</h2>
                                    </button>
                                </form>
                            </div>
                        @else
                            <form method="POST" action="/cart/addCart">
                                @csrf
                                <input type="hidden" name="quantity" value=1>
                                <input type="hidden" name="product_id" value={{ $product->id }}>

                                <button type="submit" class="d-flex flex-column align-items-center justify-content-center rounded boxShadow my-3 bg-satu text-light px-2 py-1">
                                    Add to cart
                                    <ion-icon class="fs-1" name="cart"></ion-icon>
                                </button>
                            </form>
                        @endif
                    @elseif (Auth()->user()->role == 'admin')
                        <form class="boxShadow w-25 px-2 py-1 my-3 d-flex justify-content-center rounded bg-satu" action="/edit/editProduct" method="get">
                            @csrf
                            <input type="hidden" name="id" value={{$product->id}}>
                            <button type="submit" class="bg-satu text-light d-flex align-items-center justify-content-center gap-2" >
                                Edit<ion-icon name="create"></ion-icon>
                            </button>
                        </form>
                    @endif
                @endauth
            </div>

            <div class="d-flex flex-column mt-3 me-2">
                <h4>{{ $product->name }}</h4>
                <h5>{{ $product->Category->name }}</h5>
                <h3 class="mb-2">Rp{{ $product->price }}</h3>
                <p>{{ $product->description}}</p>
            </div>
        </div>

    </main>
@endsection

<style>
    main img{
        width: 25vw;
    }

    p{
        white-space: pre-wrap;
    }

</style>
