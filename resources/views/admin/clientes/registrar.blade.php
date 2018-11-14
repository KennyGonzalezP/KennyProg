@extends('admin.layout')

@section ('content')

	<form>
		
		<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="admin.">
                    <fieldset>
                        <legend class="text-center header">Registro de Cliente</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                            <div class="col-md-7">
                                <input id="lname" name="name" type="number" placeholder="Cedula" class="form-control" maxlength="8" required="required" >
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="email" name="email" type="text" placeholder="Direccion de Email" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-7">
                                <input id="phone" name="telefono" type="text" placeholder="Telefono de contacto" class="form-control" required="required">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                               </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

	</form>
@stop