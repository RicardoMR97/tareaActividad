Formulario de actualiación de tarea
<form action="{{ url('/tarea/'.$tarea->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
    <br>
    <label for="titulo"> Titulo </label>
    <input type="text" name="titulo" value="{{$tarea->titulo}}" id="titulo">
    <br>
    <label for="cuerpo"> Cuerpo </label>
    <input type="text" name="cuerpo" value="{{$tarea->cuerpo}}" id="cuerpo">
    <br>
    <input type="submit" value="Enviar">
    <br>
  
</form>
