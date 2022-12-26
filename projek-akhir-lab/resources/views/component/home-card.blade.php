<div class="text-center rounded">
    <img src="{{ url('./storage/images/'.$product->photo) }}" alt="{{$product->photo}}">
</div>
<div class="d-flex flex-column justify-content-between overflow-hidden mt-3 mx-2">
    <h5 style={{'width: 30vw;'}}>{{ $product->name }}</h5>
    <h6 class="mb-2">Rp.{{ $product->price }}</h6>
</div>
<div class="d-flex justify-content-between">
    <a href={{asset('detail/'. $product->id) }}>
        <button class="px-2 py-1 rounded boxShadow bg-satu text-tiga">Detail</button>
    </a>
</div>

<style>
    .card-home-wrapper{
        background-color: white;
        max-width: 27vh;
    }

    .card-home-wrapper img{
        height: 24vh;
        width: 24vh;
    }

    .card-home-wrapper p,
    .card-home-wrapper h6,
    .card-home-wrapper h5{
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        padding: 0px;
        margin: 0px;
    }
</style>
