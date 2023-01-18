@extends('layouts.app')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">

            <form action=" {{ route('admin.projects.update', $project) }} " method="POST">
                @csrf
                @method('PUT')

                {{-- ? name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name"
                        class="form-control bg-dark text-light @error('name')
                    is-invalid  @enderror"
                        id="name" placeholder="inserire il nome del progetto" value=" {{old('name', $project->name)}} ">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? cover_image --}}
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Image</label>
                    <input type="text" name="cover_image"
                        class="form-control bg-dark text-light @error('cover_image')
                    is-invalid  @enderror"
                        id="cover_image" placeholder="inserire l'url dell'immagine" value=" {{old('cover_image',$project->cover_image)}} ">
                    <div class="invalid-feedback" >
                        @error('cover_image')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? client_name --}}
                <div class="mb-3">
                    <label for="client_name" class="form-label">client_name</label>
                    <input type="text" name="client_name"
                        class="form-control bg-dark text-light @error('client_name')
                    is-invalid  @enderror"
                        id="client_name" placeholder="inserire il client_name " value=" {{old('client_name', $project->client_name)}} ">
                    <div class="invalid-feedback">
                        @error('client_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Series --}}
                <div class="mb-3">
                    <label for="summary" class="form-label">summary</label>
                    <input type="text" name="summary"
                        class="form-control bg-dark text-light @error('summary')
                    is-invalid  @enderror"
                        id="summary" placeholder="inserire il summary " value=" {{old('summary', $project->summary)}} ">
                    <div class="invalid-feedback">
                        @error('summary')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>

            </form>

        </div>
    </div>
@endsection
