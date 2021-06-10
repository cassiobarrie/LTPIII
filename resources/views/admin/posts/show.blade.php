@if (session('message'))
    <p>{{ session('message') }}</p>
@endif


@foreach($contacts as $contact)
    <p><b>{{$contact->titulo}}</b><p>
    <p>{{$contact->conteudo}}<p>



    <form action="{{ route('posts.destroy', $contact->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>
<br>
<a href="{{ route('posts.edita', $contact->id) }}"> Alterar </a>
<br>
-------------------------------------------
    <br>
    @endforeach

<br>
<a href="{{ route('posts.contacto') }}">voltar</a>

