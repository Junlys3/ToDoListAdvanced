<div>
    @foreach ( $tasks as $task )
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <p>{{$task->title}}</p>
                </div>
                <div class="card-back">
                    @if ($task->status)
                        <p>Essa tarefa tá ativa!</p>
                    @else
                        <p>Essa tarefa NÃO tá ativa!</p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
