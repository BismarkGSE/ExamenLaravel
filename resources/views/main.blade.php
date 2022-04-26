<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>Gestio de Casals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/457e6ae13b.js" crossorigin="anonymous"></script>
  </head>

  <body>

    @include('header.header')

    <div class="">
      <h2>Gestió de Casals</h2>
      <a href="{{ route('casals.insert') }}" class="btn btn-primary"><i class="fa-regular fa-square-plus"></i> Agregar nueva categoria</a>
    </div>
    <div class="row">
      <div class="col-sm-12">
        @if ( $mensaje = Session::get('success') )
          <div class="alert alert-success" role="alert">
            {{ $mensaje }}
          </div>
        @endif
        @if ( $mensaje = Session::get('error') )
          <div class="alert alert-danger" role="alert">
            {{ $mensaje }}
          </div>
        @endif
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>Nom</th>
            <th>Data de Inici</th>
            <th>Data Final</th>
            <th>Num Places</th>
            <th>Ciutat</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>
          <tbody>
            @foreach ( $datos as $item )
              <tr>
                <td>{{ $item->nomCasal }}</td>
                <td>{{ $item->data_inici }}</td>
                <td>{{ $item->data_final }}</td>
                <td>{{ $item->n_places }}</td>
                <td>{{ $item->nom }}</td>
                <td>
                  <form action="{{ route('casals.update', $item->id) }}" method="get">
                    <button class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></i></button>
                  </form>
                </td>
                <td>
                  <form action="{{ route('casals.delete', $item->id) }}" method="get">
                    <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </body>

  @include('footer.footer')

</html>
