@include('admin.includs.alerts')

<div class="form-group">
    <label for="">Nome</label>
<input type="text" name="name" value="{{ $permission->name ?? old('name') }}"  class="form-control">
</div>


<div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" id="" class="form-control" cols="10" rows="5">{{ $permission->description ?? old('description') }}</textarea>
</div>