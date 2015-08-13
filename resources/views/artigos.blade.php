<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Artigos</title>
</head>
<body>
    <h1>Artigos</h1>
    <hr>
    @foreach($artigos as $artigo)
        <h2><a href='{{action('ArtigosController@show',[$artigo->id])}}'>
            {{$artigo->titulo}}
        </a></h2>
        <article>{{$artigo->conteudo}}</article>
    @endforeach
</body>
</html>