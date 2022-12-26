@extends("templates.navbar")
@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="p-0 bg-tiga d-flex flex-column align-items-center justify-content-center my-2 rounded w-100">
            <div class="w-100 d-flex justify-content-between align-items-center bg-enam py-2 px-4 rounded-top">
                <h6>{{ $Products->first()->Category->name }}</h6>
            </div>
            <div class="bg-abu row row-cols-5 w-100 px-2 rounded-bottom">
                @foreach ($Products as $product)
                <div class="col p-2">
                    <div id="card" class="card-home-wrapper boxShadow rounded p-2 d-flex flex-column bg-dua m-auto">
                        @include('component.home-card')
                    </div>
                </div>
                @endforeach
            </div>
            {{ $Products->render(); }}
        </div>
    </main>
@endsection

<style>
    h3{
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
</style>
