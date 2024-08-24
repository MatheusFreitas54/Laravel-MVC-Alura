<x-layout title="Séries">

    <a href="{{ route('series.create') }}" class="btn btn-primary mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}

                <span class="d-flex flex-row justify-content-between">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-info btn-sm me-2">✏️</a>

                    <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">🗑️</button>
                    </form>
                </span>

            </li>
        @endforeach
    </ul>

</x-layout>
