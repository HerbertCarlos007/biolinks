<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf


        <input name="email" placeholder="E-mail" value="{{old('email')}}"/>
        <input type="password" name="password" placeholder="Senha"/>

        <button>Logar</button>
    </form>
</div>
