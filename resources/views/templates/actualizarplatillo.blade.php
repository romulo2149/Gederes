    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-15 -->
        <div class="bloc l-bloc" id="bloc-15">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-rd">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="mg-clear">Actualizar Platillo</h3>
                        </div>
                    <form action="{{route('actualizado')}}" method="post" id="form_18266" novalidate>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }} 
                       <div class="form-group">
                                <label>Nombre del Platillo a modificar<br></label>
                                @include('templates/showPlatillo', ['platillos'=>$platillos])
                            </div>                                            
                            <div class="form-group"><label>Descripción<br></label><input type="text" name="descripcion" class="form-control" id="descripcion" required /></div>
                            <div class="form-group"><label>Precio</label><input type="text" name="precio" class="form-control " id="precio" required /></div>
                            <div class="form-group"><label>Imagen<br></label><input type="text" name="imagen" class="form-control" id="imagen" required /></div>
                            <div class="form-group"><label>Tipo<br></label><input type="text" name="tipo" class="form-control" id="tipo" required /></div>
                            <div class="form-group"><label>Ingredientes<br></label></div>
                            <div class="form-group">
                                     @include ('templates/ingredientOption', ['ingredientes'=>$ingredientes])
                            </div>
                            <div class="panel-footer text-center"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Actualizar</button></div>
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- bloc-15 END -->
      
