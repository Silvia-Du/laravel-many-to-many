@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="my-5">Tutti i tuoi tag</h1>

    @if (session('prodotto cancellato'))
    <div class="debug p-3 mb-3 rounded-3">
        <p class="mb-0">{{ session('prodotto cancellato') }}</p>
    </div>
    @endif

    <table class="table">
        <thead class="table-light text-left">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <a type="button" class="btn btn-info" href="">View more</a>
                    <a type="button" class="btn btn-primary" href="">edit</a>

                    <form class="d-inline"
                    action="{{ route('admin.posts.destroy', $tag) }}"
                    onsubmit="return confirm('Confermi l\'eliminazione di{{ $tag->name }}?')"
                    method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
    {{-- MAIN BOTTOM CATEGORY SELECTION --}}

@endsection
