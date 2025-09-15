<div>
    <!-- From Uiverse.io by Voxybuns -->
    @foreach ( $tasks as $task )
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <p>{{$task->title}}</p>
                </div>
                <div class="card-back">
                    <p>@if($task->description)</p>
                        <p>{{$task->description}}</p>
                    @else
                        <p>Sem descrição</p>
                    @endif
                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE') <!-- Method delete do laravel -->
                        <button type="submit" class="delete-button-card">DELETAR</button>
                    </form>
                    
                </div>
            </div>
        </div>
    @endforeach
</div>
