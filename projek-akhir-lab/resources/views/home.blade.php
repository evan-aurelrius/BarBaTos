@extends("templates.navbar")

@section('main')
    <main class="container">
        {{-- <div class="d-flex justify-content-end">
            <span class="d-flex align-items-center gap-2 bg-dua px-2 py-1 rounded text-dark">
                View All
                <ion-icon name="list"></ion-icon>
            </span>
            <span class="d-flex align-items-center gap-2 bg-dua px-2 py-1 rounded text-dark">
                Category
                <ion-icon name="grid"></ion-icon>
            </span>
        </div> --}}
        @foreach ($categories as $category)
            @if($category->Product->isNotEmpty())
                @include('component.home-category')
            @endif
        @endforeach
    </main>
@endsection

<style>
    main h6,
    main p{
        margin: 0px;
        padding: 0px;
    }

    main .products{
        box-shadow: inset 25px 1px 25px -25px rgba(0,0,0,0.45), inset -25px 1px 25px -25px rgba(0,0,0,0.45);
        border: 8px solid var(--enam);
        border-top: none;
        overflow-x: scroll
    }

    ::-webkit-scrollbar {
        height: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dua);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--lima);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--empat);
    }

</style>
