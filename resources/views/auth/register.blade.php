<div>
    {{auth()->id()}}
    <h1>Register</h1>

    @if($messagem = session()->get('messagem'))
        <div>{{$messagem}}</div>
    @endif

    <form action="{{route('register')}}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="Name"/>
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <div>
            <input name="email" placeholder="E-mail" value="{{old('email')}}"/>
            @error('email')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <div>
            <input name="email_confirmation" placeholder="E-mail Confirmation"/>
        </div>
        <br/>
        <div>
            <input type="password" name="password" placeholder="Senha"/>
            @error('password')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <button>Registrar</button>
    </form>
</div>
