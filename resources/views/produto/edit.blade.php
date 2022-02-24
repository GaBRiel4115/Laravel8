<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com view</title>
</head> 
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
    
{{ Form::model($produto, array('route' => array('produto.uptade', $produto->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome:')          }}
    {{ Form::text('nome', $produto->nome)   }}
    <br>
    {{ Form::label('valor', 'Valor:') }}
    {{ Form::text('Valor', $produto->valor) }}
    <br>
    {{ Form::submit('Enviar')               }}

    {!! Form::close()                      !!}

</body>
</html>