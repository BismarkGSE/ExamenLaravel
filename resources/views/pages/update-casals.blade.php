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
              <h3 class="card-title "><i class="fa-solid fa-pen-to-square"></i> ACTUALIZAR CASAL</h3>
            </div>
            <div class="card-body">

              <p class="card-text">

                <form route="{{ route('casals.update-put', $casals->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method("PUT")
                  <div class="mb-3">
                    <label for="">Nom Casal</label>
                    <input type="text" name="nomCasal" class="form-control" required placeholder="Nom Casal" value="{{ $casals->nomCasal }}">
                    <div class="invalid-feedback">Introdueix el Nom del Casal</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Data Inici</label>
                    <input type="date" name="data_inici" class="form-control" required placeholder="Data Inici" value="{{ $casals->data_inici }}">
                    <div class="invalid-feedback">Introdueix la data d'inici</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Data Final</label>
                    <input type="date" name="data_final" class="form-control" required placeholder="DAta Final" value="{{ $casals->data_final }}">
                    <div class="invalid-feedback">Introdueix la data final</div>
                  </div>

                  <div class="mb-3">
                    <label for="">nombre de places</label>
                    <input type="number" name="n_places" class="form-control-file form-control" required placeholder="Nombre de places" value="{{ $casals->n_places }}">
                    <div class="invalid-feedback">Introdueix el nombre de places</div>
                  </div>

                  <div class="mb-3">
                    <label for="">Categoria</label>
                    <select class="form-select" name="id_ciutat" required>
                      <option value="{{ $ciutat->id }}">{{ $ciutat->nom }}</option>
                      @foreach ( $datos as $item )
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                      @endforeach
                    </select>
                  </div>

                  <br>

                  <button class="btn btn-primary"><i class="fa-solid fa-arrow-right-to-bracket"></i> Actualizar</button>
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
