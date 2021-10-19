<h1> CRUD TAREAS </h1>
<br>
Mostrar listado de tareas 
<table>
<br><br>
    <a href="{{ url('/tarea/create') }}">
        Registrar Tarea
    </a>
<br><br>
    <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Cuerpo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $tareas as $tarea)
        <tr>
            <td>{{ $tarea->id}}</td>
            <td>{{ $tarea->titulo}}</td>
            <td>{{ $tarea->cuerpo}}</td>
            <td>
            <a href="{{ url('/tarea/'.$tarea->id.'/edit') }}">
                Editar
            </a>

            <form action="{{ url('/tarea/'.$tarea->id) }}" method="post">
            @csrf
            {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value=Borrar>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

