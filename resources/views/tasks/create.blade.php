<x-layout>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar tarefa</h1>
        <form action="" method="">

            {{-- Input do título --}}
            @include('components.form.text_input', [
                'label' => 'Título da task',
                'name' => 'title',
                'placeholder' => 'Digite o título da tarefa',
                'required' => 'required',
            ])

            {{-- Input de data --}}
            @include('components.form.text_input', [
                'label' => 'Data',
                'name' => 'due_date',
                'type' => 'date',
                'required' => 'Required',
            ])

            {{-- Input de categoria --}}
            @component('components.form.select_input', [
                'label' => 'Categoria',
                'name' => 'category',
                'required' => 'required',
            ])
                <option value="1">Algum valor muito legal</option>
            @endcomponent

            {{-- Description --}}
            @include('components.form.textarea_input', [
                'label' => 'Descrição',
                'name' => 'description',
                'placeholder' => 'Digite uma Descrição para a sua tarefa',
                'required' => 'required',
            ])

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
                    Criar tarefa
                @endcomponent
            </div>
        </form>
    </section>

</x-layout>
