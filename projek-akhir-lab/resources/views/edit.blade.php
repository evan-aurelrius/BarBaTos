@extends("templates.navbar")
@section('main')
    <main class="container gap-4 d-flex justify-content-between">
        <div class="w-50">
            @foreach ($products as $product)
                @include('component.edit-card',['products' => $products])
            @endforeach
        </div>
        @include('component.addProduct')
        {{-- @include('component.editProduct') --}}
    </main>
@endsection

