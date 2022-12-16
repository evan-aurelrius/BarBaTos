@extends("templates.navbar")
@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="p-0 bg-tiga d-flex flex-column align-items-center justify-content-center my-2 rounded">
            <div class="w-100 d-flex justify-content-between align-items-center bg-enam py-2 px-4 rounded-top">
                <h6>{{ $Category->name }}</h6>
                <p class="text-lima">View All</p>
            </div>
            <div class="products bg-abu d-flex w-100 gap-2 py-2 px-3 align-item-center rounded-bottom">
                @foreach ($Products as $product)
                    @if($product->Category->id == $Category->id)
                        @include('component.home-card')
                    @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection

<style>
    h3{
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
</style>
