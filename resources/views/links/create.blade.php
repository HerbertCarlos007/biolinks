<div>
    <h1>Criar um Link</h1>

    @if($messagem = session()->get('messagem'))
        <div>{{$messagem}}</div>
    @endif

    <form action="{{route('links.create')}}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="Name"/>
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <div>
            <input name="link" placeholder="Link"/>
            @error('link')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <button>Salvar</button>
    </form>
</div>
