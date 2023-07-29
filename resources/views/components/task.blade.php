<div class="task">
    <div class="title">
        <input type="checkbox" name="" id="" @if ($data['done']) checked @endif />
        <div class="task-title">{{ $data['title'] ?? '' }}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category'] ?? '' }}</div>
    </div>
    <div class="actions">
        <a href="https://www.google.com/search?q={{ $data['id'] }}" target="_blank">
            <img src="/assets/img/icon-edit.png" alt="edit-task">
        </a>
        <a href="https://www.google.com/search?q={{ $data['id'] }}" target="_blank">
            <img src="/assets/img/icon-delete.png" alt="delete task">
        </a>
    </div>
</div>
