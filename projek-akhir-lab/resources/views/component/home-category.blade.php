<div class="p-0 bg-tiga d-flex flex-column align-items-center justify-content-center my-2 rounded">
    <div class="w-100 d-flex justify-content-between align-items-center bg-enam py-2 px-4 rounded-top">
        <h6>{{ $category->name }}</h6>
        <a href="{{ 'viewAll/' . $category->id }}">
            <p class="text-lima">View All</p>
        </a>
    </div>
    <div class="products bg-abu d-flex w-100 gap-2 py-2 px-3 align-item-center rounded-bottom">
        @foreach ($category->Product as $product)
            <div class="card-home-wrapper boxShadow rounded p-2 d-flex flex-column bg-dua">
                @include('component.home-card')
            </div>
        @endforeach
    </div>
</div>
