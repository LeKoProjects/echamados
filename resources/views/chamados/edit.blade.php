@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Chamado</h1>
    <form action="{{ route('chamados.update', $chamado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Setor</label>
            <input type="text" class="form-control" id="setor" name="setor" value="{{ $chamado->setor }}" readonly>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $chamado->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Aberto" {{ $chamado->status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
                <option value="Fechado" {{ $chamado->status == 'Fechado' ? 'selected' : '' }}>Fechado</option>
                <option value="Em Andamento" {{ $chamado->status == 'Em Andamento' ? 'selected' : '' }}>Em Andamento</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
