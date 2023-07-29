<x-layout page="Tarefas">

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
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

        <div class="task-list">

            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach

        </div>

    </section>
</x-layout>
