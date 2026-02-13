<div>
    <h1>Profile</h1>

    <form action="{{route('profile')}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <input name="name" placeholder="Nome" value="{{old('name', $user->name)}}"/>
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>
        <br/>

        <div>
            <textarea name="description" placeholder="Breve Resumo">{{old('description', $user->description)}}</textarea>
            @error('description')
            <span>{{$message}}</span>
            @enderror
        </div>

        <br/>

        <div>
            <span>biolinks.com.br/</span>
            <input name="handler" placeholder="@seulink" value="{{old('handler', $user->handler)}}"/>
            @error('handler')
            <span>{{$message}}</span>
            @enderror
        </div>

        <br/>

        <a href="{{route("dashboard")}}">Cancelar</a>
        <button>Update</button>
    </form>
</div>
