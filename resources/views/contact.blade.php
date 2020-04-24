<!DOCTYPE html>
<html>
<head>
    <title>ContactMe</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Contact me</h1>
    <hr/>
    @if(empty($nome))
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input
                type="text"
                name="nome"
                class="form-control @error('nome') is-invalid @enderror"
                placeholder="Nome"
                value="{{old('nome')}}"
            >
            @error('nome')
            <div class="invalid-feedback">{{$errors->first('nome')}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Email"
                value="{{old('email')}}"
            >
            @error('email')
            <div class="invalid-feedback">{{$errors->first('email')}}</div>
            @enderror
            Escola Superior de Tecnologia de Viseu
            Desenvolvimento para a Web
        </div>
        <div class="form-group">
            <textarea
                name="mensagem"
                class="form-control @error('mensagem') is-invalid @enderror"
                placeholder="Digite sua mensagem"
            >{{old('mensagem')}}</textarea>
            @error('mensagem')
            <div class="invalid-feedback">{{$errors->first('mensagem')}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @else
        <div class="alert alert-success" role="alert">
            Thanks for leaving a message! I'll followup ASAP.
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$nome}}</h5>
                <p class="card-text">{{$mensagem}}</p>
            </div>
            <div class="card-footer">{{$email}}</div>
        </div>
    @endif
</div>
</body>
</html>
