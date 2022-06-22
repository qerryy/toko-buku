<x-app-layout>

    <div class="mb-4">
        <h3>
            <i class="bi bi-chevron-double-right"></i>
            Detail Buku
        </h3>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title fs-3">{{ $book->title }}</h5>
            <p class="card-text text-muted">{{ $book->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <span class="col-4 col-lg-2">Author</span>
                    <span class="col-1">:</span>
                    <span class="col-4 col-lg-3">{{ $book->author }}</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col-4 col-lg-2">Publisher</span>
                    <span class="col-1">:</span>
                    <span class="col-4 col-lg-3">{{ $book->publisher }}</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col-4 col-lg-2">Harga</span>
                    <span class="col-1">:</span>
                    <span class="col-4 col-lg-3">{{ $book->price }}</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col-4 col-lg-2">Stock</span>
                    <span class="col-1">:</span>
                    <span class="col-4 col-lg-3">{{ $book->stock }}</span>
                </div>
            </li>
        </ul>
    </div>

</x-app-layout>
