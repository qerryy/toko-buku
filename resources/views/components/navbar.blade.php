<div class="bg-white shadow-sm sticky-top">

    <div class="container">
        <div class="row align-items-start justify-content-center">
            <div class="col col-lg-8">

                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand" href="#">{{ config('app.name', 'TokoBuku') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('books.index') }}">Buku</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

    </div>

</div>
