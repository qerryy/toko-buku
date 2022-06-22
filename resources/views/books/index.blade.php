<x-app-layout>

    <div class="mb-4">
        <a href="{{ route('books.create') }}" class="btn btn-warning shadow-sm">
            <i class="bi bi-plus-circle"></i>
            Tambah Buku
        </a>
    </div>

    <div class="bg-white table-responsive rounded-3 border shadow-sm">

        <table class="table table-borderless align-middle m-0">
            <thead class="table-light border-bottom border-dark">
                <tr>
                    <th scope="col" class="ps-4">#</th>
                    <th scope="col" class="px-3">Judul</th>
                    <th scope="col" class="px-3">Harga</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @forelse ($books as $book)
                    <tr>
                        <th class="ps-4">{{ $loop->iteration }}</th>
                        <td class="text-nowrap px-3">{{ $book->title }}</td>
                        <td class="text-nowrap px-3">
                            Rp. {{ number_format($book->price, 2, ',', '.') }}
                        </td>
                        <td class="w-25 px-3">
                            <div class="d-flex">
                                <a href="{{ route('books.show', $book) }}"
                                    class="btn btn-sm btn-outline-secondary me-2">
                                    Detail
                                </a>
                                <a href="{{ route('books.edit', $book) }}"
                                    class="btn btn-sm btn-outline-secondary me-2">
                                    Edit
                                </a>
                                <form action="{{ route('books.destroy', $book) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <tr class="text-center">
                        <td colspan="4" class="text-muted fw-light fst-italic">Buku masih kosong.</td>
                    </tr>

                @endforelse

            </tbody>
        </table>
    </div>

</x-app-layout>
