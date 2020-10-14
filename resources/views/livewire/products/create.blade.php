<div>
    <h2>Guardar</h2>

    <div class="form-group">
        <label >nombre</label>
        <input wire:model="name" type="text"
               class="form-control" id="name">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <textarea wire:model="description" class="form-control" 
                  id="description" rows="4"></textarea>
    </div>

    <button wire:click="store" class="btn btn-primary">guardar</button>

</div>