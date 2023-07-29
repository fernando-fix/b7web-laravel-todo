<div class="task">
    <div class="title">
        <input type="checkbox" name="" id="" @if ($data['is_done']) checked @endif />
        <div class="task-title">{{ $data['title'] ?? '' }}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category']->title ?? '' }}</div>
    </div>
    <div class="actions">
        <a href="{{ route('task.edit', ['id' => $data['id']]) }}">
            <img src="/assets/img/icon-edit.png" alt="edit-task">
        </a>
        <a href="{{ route('task.delete', ['id' => $data['id']]) }}">
            <img src="/assets/img/icon-delete.png" alt="delete task">
        </a>
    </div>
</div>
