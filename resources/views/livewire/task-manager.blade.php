<div>
    <form class="form-tasks" method="POST" wire:submit.prevent="store">
        @csrf
        <label for="title">Título da tarefa</label>
        <input type="text" name="title" id="title" wire:model="title">

        <label for="description">Descrição da tarefa</label>
        <input type="text" name="description" id="description" wire:model="description">

        <!-- From Uiverse.io by Voxybuns --> 
        <button type="submit">
        <span class="button_top"> Criar Tarefa </span>
        </button>

    </form>
</div>
