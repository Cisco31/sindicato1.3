<div class="container contenedor">
    <form class="form">
        <div class="row">
            <div class="col-6">
                <input wire:model="usuario.nombre" type="text" placeholder="Nombre" class="form-control">
                @error('usuario.nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6">
                <input wire:model="usuario.apellido" placeholder="Apellido" type="text" class="form-control ">
                @error('usuario.apellido')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div> <br>

        <div class="row">
            <div class="col-6 ">
                <input wire:model="usuario.email" placeholder="Ejemplo@hotmail.com" type="text" class="form-control"
                    placeholder="Correo: ejemplo@hotmail.com">
                @error('usuario.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6">
                <select wire:model="usuario.estado" type="button" class="form-control" name="estado"
                    placeholder="Elegir">
                    <i class="fa fa-user-alt-slash"></i>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div> <br>

        <div class="row">
            <div class="col-6">
                <input wire:model="password" type="password" placeholder="Contraseña" class="form-control">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6">
                <input wire:model="confirm_password" type="password" placeholder="Confirmar Contraseña"
                    class="form-control">
                @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> <br>

        <div class="row">
            <div class="col-6">
                <select wire:model="usuario.departamento" type="button" class="form-control" name="departamento">
                    <option>Departamento</option>
                    <option value="Tecnologias de la información">Tecnologias de la infomación</option>
                    <option value="Operaciones comerciales">Operaciones comerciales internacionales</option>
                    <option value="Mecatrónica">Mecatrónica</option>
                    <option value="Desarrollo de negocios">Desarrollo de negocios</option>
                </select>
                @error('usuario.departamento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6">
                <select wire:model="usuario.puesto" type="button" class="form-control" name="puesto" aria-placeholder="Elegir">
                    <option>Puesto</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Docente">Docente</option>
                </select>
                @error('usuario.puesto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                {{-- <select type="button" class="form-control" name="puesto" placeholder="Elegir">
                        <option value="">--Seleccionar la opcion--</option>
                        <option value="administrativo">Administrativo</option>
                        <option value="docente">Docente</option>
                    </select> --}}


            </div>
        </div> <br>


        <div class="row">
            <div class="col-4">
                <input wire:model="usuario.telefono" type="text" class="form-control"
                    placeholder="Telefono, Ejemplo: 6531506589">
                @error('usuario.telefono')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-4">
                <input wire:model="usuario.curp" type="text" class="form-control"
                    placeholder=" CURP, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-4">
                <input wire:model="usuario.rfc" type="text" class="form-control"
                    placeholder="RFC, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.rfc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div> <br>

        <div class="row">
            <div class="col-4">
                <input wire:model="usuario.ine" type="text" class="form-control" placeholder="INE(Codigo)">
                @error('usuario.ine')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-4">
                <input wire:model="usuario.fecha_ingreso" type="date" class="form-control"
                    placeholder=" Fecha de Ingreso Ejemplo: 05/05/2020">
                @error('usuario.fecha_ingreso')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-4">
                <input wire:model="usuario.fecha_afiliacion" type="date" class="form-control"
                    placeholder=" Fecha de Afiliacion Ejemplo: 20/05/2020">
                @error('usuario.fecha_afiliacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>



</div>
