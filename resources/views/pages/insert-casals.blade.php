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
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title "><i class="fa-solid fa-arrow-right-to-bracket"></i> INSERTAR CASAL</h4>
            </div>
            <div class="card-body">
              <p class="card-text">

                <form action="" method="post" class="was-validated" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="">Nom Casal</label>
                    <input type="text" name="nomCasal" class="form-control" required placeholder="Nombre Producto">
                    <div class="invalid-feedback">Introdueix el Nom del Casal</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Data Inici</label>
                    <input type="date" name="data_inici" class="form-control" required placeholder="Data Inici">
                    <div class="invalid-feedback">Introdueix la data d'inici</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Data Final</label>
                    <input type="date" name="data_final" class="form-control" required placeholder="DAta Final">
                    <div class="invalid-feedback">Introdueix la data final</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Nombre de places</label>
                    <input type="number" name="n_places" class="form-control-file form-control" required placeholder="Nombre de Places">
                    <div class="invalid-feedback">Introdueix el nombre de places</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Ciutat</label>
                    <select class="form-select" name="id_ciutat" required>
                      <option value="" >Selecciona una opcion</option>
                      @foreach ( $datos as $item )
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                      @endforeach
                    </select>
                  </div>

                  <br>

                  <button class="btn btn-primary"><i class="fa-solid fa-arrow-right-to-bracket"></i> Agregar</button>
                  <a href="{{ route('casals.show') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-rotate-left"></i> Volver</a>

                </form>

              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
