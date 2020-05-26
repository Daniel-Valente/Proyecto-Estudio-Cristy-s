<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-labelledby="contacto" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contacto">CONTACTAR AL ESTUDIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {!! Form::open(['route' => 'messages.store']) !!}
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre: </label> <br>
                        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Correo: </label> <br>
                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="subject">Asunto: </label> <br>
                        {!! Form::text('subject', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="subject">Número de Orden: </label> <br>
                        {!! Form::number('id', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">Mensaje: </label> <br>
                    {!! Form::textarea('content') !!}
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

