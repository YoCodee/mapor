@extends('layout.main')

@include('partials.navbar')

@section('content')

<style>
    .images {
    background: rgba(0, 0, 0, 0.6) url("./images/fotoutama.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: darken;
  }
</style>

<div class="images">
    <div class="smk1 p-20 lg:p-36" style="margin: auto">
        <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white" >
          Data <span>Berita</span>
        </h1>
        <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
          Anyone who as never made a mistake has never tried anything new
        </p>
      </div>
</div>

<div class="mt-5 px-4 mb-5">
    <a href="/" class=" text-orange-500 no-underline mt-5 text-xl hover:underline hover:text-blue-200 fa-solid fa-arrow-left fa-xl">
        <i class="mb-4 flex items-center my-auto ml-8">Back</i>
    </a>


    <table class="table mt-5">
        <thead>
            <tr>
                <th>No</th>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
            <form action="/delete/{{ $item['slug'] }}" method="POST">
                @csrf
                @method('DELETE')
                <tr class="hover">
                    <th>{{ $index + 1 }}</th>
                    <td>{{ $item['title'] }}</td>
                    <td class="flex flex-row gap-2">
                        <a href="/edit/{{ $item['slug'] }}" class="btn btn-primary btn-xs lg:btn-sm">Edit</a>
                        <a href="/editfile/{{ $item['slug'] }}" class="btn btn-info btn-xs lg:btn-sm">Edit File</a>
                        <button type="submit" class="btn btn-error btn-xs lg:btn-sm">Delete</button>
                    </td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
