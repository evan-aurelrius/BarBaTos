<div class="card-home-wrapper boxShadow rounded p-2 d-flex flex-column">
    <div class="img-wrapper rounded">
        <img src="{{ url('./storage/images/'.$product->photo) }}" alt="{{$product->photo}}">
    </div>
    <div class="d-flex flex-column justify-content-between overflow-hidden mt-3 mx-2">
        <h5>{{ $product->name }}</h5>
        <h6 class="mb-2">Rp.{{ $product->price }}</h6>
    </div>
    <div class="d-flex justify-content-between">
        <a href="detail/{{ $product->id }}">
            <button class="px-2 py-1 rounded boxShadow bg-satu text-tiga">Detail</button>
        </a>
    </div>
</div>

<style>
    .card-home-wrapper{
        background-color: white;
        width: 28vh;
    }
    .card-home-wrapper .img-wrapper{
        text-align: center
    }

    .card-home-wrapper img{
        height: 25vh;
        width: 25vh;
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
