@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<h1>Comentários</h1>
<a href="{{ route('posts.index') }}">Home</a> | <a href="{{ route('posts.departamentos') }}">Departamentos</a><br><br>

<a href="{{ route('posts.creat') }}">ADD</a>

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="filtro">
    <button type="submit">Filtrar</button>
</form>

@foreach($posts as $post)
    <p><b>{{$post->title}}</b><p>
    <p>{{$post->content}}<p>
    <a href="{{ route('posts.edit', $post->id) }}"> Alterar </a>


    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>

    <br>
    -----------------------------------------------
@endforeach

@if(isset($filtro))
    {{ $posts->appends($filtro)->links() }}
@else
    {{ $posts->links() }}
@endif



