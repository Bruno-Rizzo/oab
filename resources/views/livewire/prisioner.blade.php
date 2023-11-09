<div>

    <div class="row mb-3">
        <p>
            <strong style="font-size: 16px">Interno(s)</strong>
            <button type="button" wire:click="increment" class="btn btn-sm btn-info ms-4">
                <i class="ri-play-list-add-line"></i>
            </button>
        </p>
    </div>

    @for ($i=0;$i<=$count;$i++)

    <div class="row mb-3 mt-2">

        <label class="col-sm-2 col-form-label">Nome do Interno</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="prisioner[]" value="{{ old('prisioner') }}">
            @error('prisioner')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-sm-2">
            <button type="button" wire:click="decrement" class="btn btn-sm btn-danger ms-2 mt-1">
                <i class=" ri-indeterminate-circle-line"></i>
            </button>
        </div>

    </div>

    @endfor

</div>
