<div>
    <h1>Login</h1>

    @if($messagem = session()->get('messagem'))
        <div>{{$messagem}}</div>
    @endif

    <form action="/login" method="post">
        @csrf

        <div>
            <input name="email" placeholder="E-mail" value="{{old('email')}}"/>
            @error('email')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <div>
            <input type="password" name="password" placeholder="Senha"/>
            @error('password')
            <span>{{$message}}</span>
            @enderror
        </div>

        <button>Logar</button>
    </form>
</div>
