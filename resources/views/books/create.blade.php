<x-app-layout>

    <div class="mb-4">
        <h3>
            <i class="bi bi-chevron-double-right"></i>
            Tambah Buku
        </h3>
    </div>

    <div class="bg-white p-4 rounded-3 border overflow-hidden shadow-sm">

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    value="{{ old('title') }}" required>
                @error('title')
                    <small class="text-danger fst-italic text-small">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author"
                    value="{{ old('author') }}" required>
                @error('author')
                    <small class="text-danger fst-italic text-small">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher"
                    id="publisher" value="{{ old('publisher') }}" required>
                @error('publisher')
                    <small class="text-danger fst-italic text-small">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-currency-dollar"></i>
                    </span>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                        id="price" value="{{ old('price') }}" required>
                </div>
                @error('price')
                    <small class="text-danger fst-italic text-small">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Jumlah</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-clipboard-data"></i>
                    </span>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock"
                        id="stock" value="{{ old('stock') }}" required>
                </div>
                @error('stock')
                    <small class="text-danger fst-italic text-small">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-lg-5">
                <label for="description" class="form-label">
                    Description
                </label>
                <textarea name="description" class="form-control" id="description"
                    rows="3">{{ old('description') }}</textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
        </form>

    </div>

</x-app-layout>
