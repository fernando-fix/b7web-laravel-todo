<x-layout>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar tarefa</h1>
        <form method="POST" action="{{ route('task.edit_action') }}">

            @csrf

            <input type="hidden" name="id" value="{{ $task->id }}">

            {{-- isDone component --}}
            @include('components.form.checkbox_input', [
                'label' => 'Tarefa realizada?',
                'name' => 'is_done',
                'checked' => $task->is_done,
            ])

            {{ $task->is_done }}

            {{-- Input do título --}}
            @include('components.form.text_input', [
                'label' => 'Título da task',
                'name' => 'title',
                'placeholder' => 'Digite o título da tarefa',
                'required' => 'required',
                'value' => $task->title,
            ])

            {{-- Input de data --}}
            @include('components.form.text_input', [
                'label' => 'Data',
                'name' => 'due_date',
                'type' => 'datetime-local',
                'required' => 'Required',
                'value' => $task->due_date,
            ])

            {{-- Input de categoria --}}
            @component('components.form.select_input', [
                'label' => 'Categoria',
                'name' => 'category_id',
                'required' => 'required',
            ])
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $task->category_id) selected @endif>
                        {{ $category->title }}
                    </option>
                @endforeach
            @endcomponent

            {{-- Description --}}
            @include('components.form.textarea_input', [
                'label' => 'Descrição',
                'name' => 'description',
                'placeholder' => 'Digite uma Descrição para a sua tarefa',
                'required' => 'required',
                'value' => $task->description,
            ])

            {{-- button --}}
            <div class="inputArea">
                @component('components.form.button', [
                    'type' => 'reset',
                    'class' => 'btn btn-secondary',
                ])
                    Limpar formulário
                @endcomponent
                @component('components.form.button', [
                    'type' => 'submit',
                    'class' => 'btn btn-primary',
                ])
                    Atualizar tarefa
                @endcomponent
            </div>
        </form>
    </section>

</x-layout>
