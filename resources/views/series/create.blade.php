<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="d-flex flex-column justify-content-between mb-3">
            <label for="" class="form-label pr-5">Nome:</label>
            <input type="text"  id='nome' name='nome' class="form-control ml-3">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>


</x-layout>
