<div>
    <div class="text-center col-4 mx-auto">
            <div class="form-group text-center">
                <label>Fecha</label>
                <input wire:model="request.fecha" type="date" class="form-control">
                @error('request.fecha')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

    </div>
</div>
