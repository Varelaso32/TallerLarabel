<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Comunas</title>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Lista de Comunas</h1>
            <a href="{{ route('comunas.create') }}" class="btn btn-success">Agregar nueva comuna</a>
        </div>

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Comuna</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comunas as $comuna)
                    <tr>
                        <th scope="row">{{ $comuna->comu_codi }}</th>
                        <td>{{ $comuna->comu_nomb }}</td>
                        <td>{{ $comuna->muni_nomb }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}" class="btn btn-info btn-sm">Editar</a>

                                <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method="POST" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>