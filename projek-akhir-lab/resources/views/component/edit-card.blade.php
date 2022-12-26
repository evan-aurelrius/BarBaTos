<div class="card-edit-wrapper boxShadow bg-tiga rounded p-2 d-flex flex-column mb-3">
    <div class="d-flex">
        <div class="d-flex align-item-center justify-content-center bg-biru p-1 rounded">
            <img src="{{ url('/storage/images/'.$product->photo) }}" alt="{{$product->photo}}">
        </div>
        <div class="d-flex flex-column justify-content-between overflow-hidden ms-2">
            <div>
                <h6>{{ $product->name }}</h6>
                <h5>Rp.{{ $product->price }}</h5>
                <p>{{ $product->Category->name }}</p>
            </div>
            <p class="text-muted">{{ $product->description }}</p>
        </div>
    </div>
    <div class="d-flex justify-content-between px-3 py-2 mt-2 rounded bg-dua">
        <form class="boxShadow d-flex justify-content-center w-25 rounded bg-empat" action="/edit/deleteProduct" method="post">
            @method('delete')
            @csrf
            <input type="hidden" name="id" value={{$product->id}}>
            <button class="px-2 py-1 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded bg-empat" type="submit">
                Delete
                <ion-icon name="close-circle"></ion-icon>
            </button>
        </form>
        <form class="boxShadow w-25 px-2 py-1 d-flex justify-content-center rounded bg-satu" action="/edit/editProduct" method="get">
            @csrf
            <input type="hidden" name="id" value={{$product->id}}>
            <button type="submit" class="bg-satu text-light d-flex align-items-center justify-content-center gap-2" >
                Edit<ion-icon name="create"></ion-icon>
            </button>
        </form>
    </div>
</div>

<style>
    .card-edit-wrapper img{
        width: 15vh;
    }

    .card-edit-wrapper p,
    .card-edit-wrapper h6,
    .card-edit-wrapper h5{
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        padding: 0px;
        margin: 0px;
    }
</style>
