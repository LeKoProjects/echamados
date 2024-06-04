@extends('layouts.app')

@section('content')
            <main class="app-content">
                <div class="app-title">
                    <div>
                        <h1><i class="bi bi-table"></i> Lista de Chamados </h1>
                    </div>
                    <ul class="app-breadcrumb breadcrumb side">
                        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                        <li class="breadcrumb-item">Administração</li>
                        <li class="breadcrumb-item active"><a href="#">Chamados</a></li>
                    </ul>
                </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Setor</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($chamados as $chamado)
                                            <tr>
                                                <td>{{ $chamado->id }}</td>
                                                <td>{{ $chamado->setor }}</td>
                                                <td>{{ $chamado->descricao }}</td>
                                                <td>{{ $chamado->status }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-info me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $chamado->id }}">
                                                            Editar
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="editModal{{ $chamado->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $chamado->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $chamado->id }}">Chat</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('chamados.update', $chamado->id) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="tile">
                                                                        <div class="messanger">
                                                                            <div class="messages">
                                                                            <div class="message"><img src="https://randomuser.me/api/portraits/men/4.jpg">
                                                                                <p class="info">Hello there!<br>Good Morning</p>
                                                                            </div>
                                                                            <div class="message me"><img src="https://randomuser.me/api/portraits/men/1.jpg">
                                                                                <p class="info">Hi<br>Good Morning</p>
                                                                            </div>
                                                                            <div class="message"><img src="https://randomuser.me/api/portraits/men/4.jpg">
                                                                                <p class="info">How are you?</p>
                                                                            </div>
                                                                            <div class="message me"><img src="https://randomuser.me/api/portraits/men/1.jpg">
                                                                                <p class="info">I'm Fine.</p>
                                                                            </div>
                                                                            </div>
                                                                            <div class="sender">
                                                                            <input type="text" placeholder="Send Message">
                                                                            <button class="btn btn-primary" type="button"><i class="bi bi-send fs-5"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
@endsection
