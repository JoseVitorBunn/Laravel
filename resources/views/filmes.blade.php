<h1>Meus Filmes Favoritos</h1>

<ul>
    @foreach ($filmes as $filme)
        <li>{{ $filme }}</li>
    @endforeach
</ul>