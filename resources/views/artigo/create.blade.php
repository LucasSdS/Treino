@extends('app')

@section('conteudo')
    <form method="post" action="">

        {!! csrf_field() !!}

                <!-- Título do artigo -->
        <div class="form-group">
            <label for="title">Título: </label>
            <input type="text" name="title" id="title" class="form-control" />
        </div>

        <!-- Conteúdo do artigo -->
        <div class="form-group">
            <label for="body">Conteúdo: </label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>

        <!-- Agendamento de publicação do artigo -->
        <div class="form-group">
            <label for="published_at">Publicar em:</label>
            <input type="date" name="published_at" id="published_at" class="form-control" />
        </div>

        <!-- Submit -->
        <div class="form-group">
            <input type="submit" value="Adicionar Artigo" class="btn btn-primary form-control" />
        </div>

    </form>

    <!-- http://dontpad.com/ejcm/controller-for-real/create -->
@endsection