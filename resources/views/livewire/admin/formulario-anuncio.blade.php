<div>
    <div class="container cont-anuncio">
        <div class="row">
            <div class="col">

                <div class="form-group">
                    <input wire:model="anuncio.titulo" class="form-control" id="comment"
                        placeholder="Titulo del anuncio" name="text">
                    @error('anuncio.titulo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br>
                    <textarea wire:model="anuncio.contenido" placeholder="Especificaciones del anuncio"></textarea> <br>
                    @error('anuncio.contenido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label for="">Subir imagen</label>
                        <input wire:model="url_img" type="file" class="form-control-img" name="file"><i
                            class="fa-file-image-o"></i>
                        @error('url_img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @if ($url_img != null)
                            <img class="border-radius: 25px; mx-auto d-block "
                                style="border-radius: 25px; width: 290px; height: 250px;"
                                src="{{ $url_img->temporaryUrl() }}" alt="">
                        @endif
                    </div>
                </div><br>

                <div class="row align-items-center">
                    <div class="col-sm">
                        <div class="form-group">
                            <a href="{{ route('admin.anuncios') }}" type="button"
                                class="float-left btn btn-dark">Registros</a>
                            <button wire:loading.attr="disabled" wire:target="url_img"
                                class="float-right btn btn-success"><i class="fa fa-save"></i>
                                Publicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
