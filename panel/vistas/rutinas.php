<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Crea una Rutinas </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Panel</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Rutinas</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Las rutinas que contendran ejercicios se crean desde aqui:</h4>
                    <p class="card-description"> Vista del usuario </p>
                    <form class="forms-sample" action="./controladores/CRUD_Rutinas.php" method="POST" enctype="multipart/form-data">
                    
                      <div class="form-group">
                        <label for="exampleInputEmail3">Titulo</label>
                        <input type="text" class="form-control" name="titulo" Required placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" Required placeholder="">
                      </div>
         
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Duración</label>
                                <input type="number" name="duracion" class="form-control" Required placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label>Elige la miniatura</label>
                              <input type="file" name="img[]" class="file-upload-default" style="display: none;">
                              <div class="input-group col-xs-12 d-flex align-items-center">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Sube una imagen">
                                  <span class="input-group-append ms-2">
                                      <button class="file-upload-browse btn btn-primary" type="button">Elegir</button>
                                  </span>
                              </div>
                          </div>
                      </div>
                    </div>

               
                      <button type="submit" class="btn btn-success me-2">Guardar</button>
                      <button class="btn btn-dark">Cancelar</button>
                    </form>
                  </div>
                </div>
              </div>
          
            </div>
          </div>