<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik:wght@400;500&family=Ubuntu:wght@500&display=swap">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img class="sidebar-logo" src="assets/img/laravel-logo.svg" alt="logo">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar tarefa
                </a>
            </nav>
            <main>
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
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">Título da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/img/icon-edit.png" alt="edit-task">
                                </a>
                                <a href="#">
                                    <img src="/assets/img/icon-delete.png" alt="delete task">
                                </a>
                            </div>
                        </div>
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">Título da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/img/icon-edit.png" alt="edit-task">
                                </a>
                                <a href="#">
                                    <img src="/assets/img/icon-delete.png" alt="delete task">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
