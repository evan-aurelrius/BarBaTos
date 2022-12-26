@extends("templates.navbar")

@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="mx-auto mt-5 text-center">
            {{-- @forelse ( as )

            @empty
            @endforelse --}}
            <h3>There is no item in cart</h3>
            <ion-icon class="display-1 " name="cart"></ion-icon>
        </div>

        <div class="gap-4 position-fixed justify-content-end align-items-center d-flex bottom-0 bg-dua w-100 px-4 py-2">
            <p class="m-0 p-0">Rp.</p>
            <div class="bg-satu rounded text-light px-4 py-2">
                Purchase
            </div>
        </div>
        
    </main>
@endsection
