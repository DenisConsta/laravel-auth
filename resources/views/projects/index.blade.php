@extends('layouts.app')

@section('content')

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Client</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td> {{ $project->id }} </td>
                    <td> {{ $project->name }} </td>
                    <td> {{ $project->client_name }} </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    {{$projects->links()}}

@endsection
