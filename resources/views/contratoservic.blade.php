@extends ('layout')
@section ('content')

<form class="row g-3" method="POST" action="{{route('envia-banco-servico')}}">
@csrf
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tipo</label>
    <input type="text" name="nome" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Caminhao</label>
    <input type="text" name="email" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Local de Saída</label>
    <input type="text" name="fone" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Local de Chegada</label>
    <input type="text" name="fone" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection