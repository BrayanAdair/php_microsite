<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Instrucciones de Promts </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Overlay</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Selecciona un agente</h4>
                    <p class="card-description"> Selecciona un agente entrenado <code>Para agregar más entrenamiento</code>. </p>
                    <div class="form-group">
                        <select class="form-select form-select-sm" id="agenteSelect">
                            <option>Agente de entrenamiento pre temporada</option>
                            <option>Agente de entrenamiento post temporada</option>
                            <option>Agente de entrenamiento Básico</option>
                            <option>Agente de entrenamiento Avanzado</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Prompt</h4>
                    <p class="card-description"> Escribe un prompt de entrenamiento con overlay </p>
                    <div class="form-group">
                        <textarea id="promptInput" class="form-control" rows="3" placeholder="Escribe el prompt"></textarea>
                    </div>
                    <button id="probarButton" class="btn btn-primary me-2">Probar</button>
                    <button id="guardarButton" class="btn btn-success me-2">Guardar</button>
                    <button id="borrarButton" class="btn btn-dark">Borrar</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Resultado</h4>
                    <p class="card-description"> Visualiza el prompt en vivo </p>
                    <div id="resultadoPrompt">
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
