<head>
  <meta charset="utf-8">
  <title>Gestio de Casals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/457e6ae13b.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header card-header-primary">
          <h3 class="card-title "><i class="fa-solid fa-trash"></i> ELIMINAR CASAL</h3>
        </div>
        <div class="card-body">

          <p class="card-text">

            <div class="alert alert-danger" role="alert">
              Estas seguro de eliminar este registro !
              <table class="table table-sm table-hover">
                <thead>
                  <th>Nom</th>
                  <th>Data de Inici</th>
                  <th>Data Final</th>
                  <th>Num Places</th>
                  <th>Ciutat</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $casals->nomCasal }}</td>
                    <td>{{ $casals->data_inici }}</td>
                    <td>{{ $casals->data_final }}</td>
                    <td>{{ $casals->n_places }}</td>
                    <td>{{ $ciutat->nom }}</td>
                  </tr>
                </tbody>
              </table>
              <br>
              <form action="{{ route('casals.delete-delete', $casals->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a class="btn btn-primary" href="{{ route('casals.show') }}"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</a>
                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
              </form>
            </div>
          </p>

        </div>
      </div>
    </div>
  </div>

</body>
