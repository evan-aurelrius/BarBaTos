@extends("templates.navbar")

@section('main')
    <main class="container">
        <div class="boxShadow rounded p-2 d-flex gap-4">
            <div class="img-wrapper rounded d-flex flex-column h-100 justify-content-start align-items-center gap-2 bg-dua">
                <img class="boxShadow" src="{{ url('IMAGES/'.$product->photo) }}" alt="a">
                {{-- kalau uda login --}}
                <form method="POST" action="">
                    @csrf
                    <input type="hidden" name="id" value={{ $product->id }}>
                    <button type="submit" class="d-flex flex-column align-items-center justify-content-center rounded boxShadow my-3 bg-satu text-light px-2 py-1">
                        Add to cart
                        <ion-icon class="fs-1" name="cart"></ion-icon>
                    </button>
                </form>
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
