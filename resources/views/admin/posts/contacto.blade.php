@extends('layouts.master')
@section('title', 'Contatos')
@section('content')

    <div class="conteiner">
        <div class="rows">
            <div class="mx-5" style="width: 500px;">
            <h1>Contato</h1>

@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

            <div class="mb-3">
            <form action="{{ route('posts.addcontact') }}" method="post">
  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="text" class="form-control" name="titulo" id="titulo" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label" >Mensagem</label>
  <textarea class="form-control" name="conteudo" id="conteudo" rows="6" placeholder="digite sua mensagem aqui."></textarea>
  <br>
  <button type="submit">Enviar</button>
  <br><br><br>

</div>

</form>
<a href="{{ route('posts.show') }}">Visualizar mensagens</a>
            </div>
        </div>
    </div>

@endsection
