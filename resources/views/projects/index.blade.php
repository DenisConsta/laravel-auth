@extends('layouts.app')

@section('content')

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Client</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td> {{ $project->id }} </td>
                    <td> {{ $project->name }} </td>
                    <td> {{ $project->client_name }} </td>
                    <td>
                        <div class="btns">
                            <a href=" {{ route('admin.projects.show', $project) }} " title="show" class="btn btn-primary"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a href=" {{ route('admin.projects.edit', $project) }} " title="edit" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>


                            <form class="d-inline" action=" {{ route('admin.projects.destroy', $project) }} " method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare {{ $project->name }} ')">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" title="delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    {{$projects->links()}}

@endsection
