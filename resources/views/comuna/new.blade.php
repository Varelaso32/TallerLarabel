<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-primary mb-4">Add Comuna</h1>

            <form method="POST" action="{{ route('comunas.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Code</label>
                    <input type="text" class="form-control" id="id" name="Id" disabled>
                    <div id="idHelp" class="form-text">Commune code</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Commune</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Comuna name.">
                </div>

                <div class="mb-3">
                    <label for="municipality" class="form-label">Municipality</label>
                    <select class="form-select" id="municipality" name="code" required>
                        <option selected disabled value="">Choose one...</option>
                        @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('comunas.index') }}" class="btn btn-warning">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>