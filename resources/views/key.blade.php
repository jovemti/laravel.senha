@extends('layouts.app')
@section('content')
    <div class="row">
        {{-- <form action="/key/generate" method="POST"> --}}

        {{ Form::open(['url' => '/key/generate']) }}
            {{ csrf_field() }}
            <div class="form-group">
                {{-- <label for="placa">Placa</label> --}}
                {{-- <input type="text" class="form-control" id="placa" aria-describedby="placa" placeholder="Placa"> --}}
                {{ Form::label('nota', 'Placa') }}
                {{ Form::text('placa', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Placa',
                ]) }}
                <?php echo $errors->first('placa'); ?>
            </div>
            <div class="form-group">
                {{-- <label for="portao">Portão</label> --}}
                {{-- <input type="text" class="form-control" id="portao" placeholder="Portão"> --}}
                {{ Form::label('nota', 'Portão') }}
                {{ Form::text('portao', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Portão',
                ]) }}
                <?php echo $errors->first('portao'); ?>
            </div>
            <div class="form-group">
                {{-- <label for="nota">Nota</label> --}}
                {{-- <input type="text" class="form-control" id="nota" placeholder="Nota"> --}}
                {{ Form::label('nfe', 'Nota') }}
                {{ Form::text('nfe', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Nota',
                ]) }}
                <?php echo $errors->first('nota'); ?>
            </div>
            <a class="btn btn-secondary" href="?reset_password=true" role="button">Resetar Senha</a>
            {{-- <button type="submit" class="btn btn-primary">Gerar senha</button> --}}
            {{ Form::submit('Gerar Senha', [
                'class' => 'btn btn-primary'
            ])}}
        {{-- </form> --}}
        {{ Form::close() }}
    </div>
@endsection
