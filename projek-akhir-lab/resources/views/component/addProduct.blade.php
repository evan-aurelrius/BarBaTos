<div class="boxShadow w-50 h-100 bg-dua p-2 rounded">
    <form enctype="multipart/form-data" action="/edit/createProduct" method="POST">
        @csrf
        <div class="d-flex flex-column rounded mb-2">
            <label for="name">Name</label>
            <input class="border-3 border-bottom px-2 py-1 rounded" type="text" name="name" id="name">
        </div>
        <div class="d-flex flex-column rounded my-2">
            <label for="category">Category</label>
            <select class="border-3 border-bottom px-2 py-1 rounded" name="category" id="category">
                <option value="none" selected disabled>Choose Category</option>
                @foreach ($options as $option)
                    <option value="{{ $loop->index+1 }}">{{ $option->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex flex-column rounded my-2">
            <label for="description">Description</label>
            <textArea rows="6" class="border-3 border-bottom px-2 py-1 rounded" name="description" id="description"></textArea>
        </div>
        <div class="d-flex w-100 flex-column rounded my-2">
            <label for="price">Price</label>
            <div class="d-flex align-items-center bg-satu rounded">
                <span class="rounded py-1 px-2 text-tiga">Rp</span>
                <input class="w-100 border-3 border-bottom px-2 py-1 rounded" type="number" name="price" id="price">
            </div>
        </div>
        <div class="d-flex flex-column rounded my-2">
            <label for="photo">Photo</label>
            <input type="file" class="border-3 border-bottom px-2 py-1 rounded bg-light" name="photo" id="photo">
        </div>
        <div class="d-flex justify-content-end mt-4 mb-2">
            <button type="submit" class="d-flex align-items-center justify-content-center gap-2 shadow px-4 w-50 py-2 rounded text-light bg-satu text-light">
                Add <ion-icon name="add-circle"></ion-icon>
            </button>
        </div>
    </form>
</div>
