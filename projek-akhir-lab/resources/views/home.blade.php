@extends("templates.navbar")

@section('main')
    <main class="container mb-5">
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

</style>
