<div>
    <h1>Editar um Link :: {{$link->id}}</h1>

    @if($messagem = session()->get('messagem'))
        <div>{{$messagem}}</div>
    @endif

    <form action="{{route('links.edit', $link)}}" method="post">
        @csrf
        @method('put')

        <div>
            <input name="name" placeholder="Name" value="{{old('name', $link->name)}}"/>
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>
        <div>
            <input name="link" placeholder="Link" value="{{old('link', $link->link)}}"/>
            @error('link')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>

        <a href="{{route('dashboard')}}">Cancelar</a>
        <button>Salvar</button>
    </form>
</div>
