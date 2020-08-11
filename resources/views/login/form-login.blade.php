<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

<body>

<div class="container col-md-6" style="margin-top: 150px;">
    
    <div class="login">
    <form action=" {{ route('login.authenticate') }} " method="post">
        @csrf

            @if(@session('login-message'))
                <div class="alert alert-{{ @session('alert') }}" role="alert">
                    {{ @session('login-message') }}
                  </div>        
            @endif

            <div class="form-group">
                <label for="Login">E-mail</label> <br>
                <input class="form-control" name="email" type="email" placeholder="Usuário"> <br>
            </div>

            <div class="form-goup">
                <label for="senha">Senha</label> <br>
                <input class="form-control" name="password" type="password" placeholder="Senha"> <br>
            </div> 
            
            <button class="btn btn-primary col-md-12" type="submit">Entrar</button>
            
        </form>
    </div>

    </div>
</body>

</html>