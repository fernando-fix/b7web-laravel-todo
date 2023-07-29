<x-layout page="Tarefas">

    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            Criar tarefa
        </a>
    </x-slot:btn>
   

    <section class="graph">
        <div class="graph-header">
            <h2> Progresso do dia</h2>
            <div class="graph-hr">
                <hr>
            </div>
            <div class="graph-data">
                <img src="/assets/img/icon-prev.png" alt="">
                <span>13 de Dez</span>
                <img src="/assets/img/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph-header-subtitle">
            <span>Tarefas: <strong>3/6</strong></span>
        </div>
        <div class="graph-placeholder">
            {{-- Área do gráfico --}}
        </div>
        <div class="graph-header-tasks-left">
            <img src="/assets/img/icon-info.png" alt="alerta de tarefas">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select class="list-header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        @php
            $tasks = [
                [
                    'id' => 1,
                    'done' => false,
                    'title' => 'Título 1',
                    'category' => 'Categoria 1',
                ],
                [
                    'id' => 2,
                    'done' => true,
                    'title' => 'Título 2',
                    'category' => 'Categoria 2',
                ],
                [
                    'id' => 3,
                    'done' => false,
                    'title' => 'Título 3',
                    'category' => 'Categoria 2',
                ],
            ];
        @endphp
        <div class="task-list">
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
        </div>
    </section>
</x-layout>
