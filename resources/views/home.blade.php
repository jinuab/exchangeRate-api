@section('content')

<div class="container bg-light p-5 rounded">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-10">Welcome to {{ config('app.name') }}</h1>
            <p></p>
            <br>
            <form class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-2">
                <label>Download Exchange API for EUR</label>
                <button class="form-control form-control-dark">Download</button>
            </form>
        </div>
    </div>
</div>

@endsection
