<x-app-layout>

    <h1>Crear un post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </div>
    @endif

    <br>

    <form action="{{route('posts.store')}}" method="POST">
        
        @csrf

        <label for="">
            Título:
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        <br>
        <br>

        <label for="">
            Categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        <br>
        <br>

        <label for="">
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">Crear nuevo post</button>


    </form>
</x-app-layout>