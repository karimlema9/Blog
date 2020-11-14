@extends('dashboard.master')

@section('content')

    <a class="btn btn-success mt-3 mb-3 float-right" href="{{ route('post.create') }}">
        Crear
    </a>

    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Titulo</td>
            <td>Posteado</td>
            <td>Creacion</td>
            <td>Actualizacion</td>
            <td>Acciones</td>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->created_at->format('d-M-Y') }}</td>
                <td>{{ $post->updated_at->format('d-M-Y') }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('post.show',  $post->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('post.edit',  $post->id) }}">Editar</a>
                    <form action="{{ route('post.destroy',  $post->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection
