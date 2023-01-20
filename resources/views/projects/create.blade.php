@extends('layouts.app')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">

            <form action=" {{ route('admin.projects.store') }} " method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ? name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name"
                        class="form-control bg-dark text-light @error('name')
                    is-invalid  @enderror"
                        id="name" placeholder="inserire il nome del progetto" value=" {{old('name')}} ">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? cover_image --}}
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Image</label>
                    <input onchange="showImage(event)" type="file" name="cover_image"
                        class="form-control bg-dark text-light @error('cover_image')
                    is-invalid  @enderror"
                        id="cover_image" placeholder="inserire l'url dell'immagine" value=" {{old('cover_image')}} ">
                    <div class="invalid-feedback" >
                        @error('cover_image')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <img width="300" id="preview_image" src="  " alt="" class="my-2">
                    </div>
                </div>

                {{-- ? client_name --}}
                <div class="mb-3">
                    <label for="client_name" class="form-label">client_name</label>
                    <input type="text" name="client_name"
                        class="form-control bg-dark text-light @error('client_name')
                    is-invalid  @enderror"
                        id="client_name" placeholder="inserire il client_name " value=" {{old('client_name')}} ">
                    <div class="invalid-feedback">
                        @error('client_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? summary --}}
                <div class="mb-3">
                    <label for="summary" class="form-label">summary</label>
                    <input type="text" name="summary"
                        class="form-control bg-dark text-light @error('summary')
                    is-invalid  @enderror"
                        id="summary" placeholder="inserire il summary " value=" {{old('summary')}} ">
                    <div class="invalid-feedback">
                        @error('summary')
                            {{ $message }}
                        @enderror
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">Create</button>

            </form>

        </div>
    </div>

    <script>
        function showImage(event) {
            const tagImage = document.getElementById('preview_image');
            tagImage.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

@endsection
