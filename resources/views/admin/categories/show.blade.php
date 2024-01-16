@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show Categories</h1>

    <div class="col-12 col-md-12 text-center g-2">
        <button class="btn btn-success"><a href="{{route('admin.projects.edit', $category)}}">Edit</a></button>
        <div class="">
            <h2 class="fs-4">
                {{ $category->name }}
            </h2>
            <ul>
                @foreach($category->projects as $project)
                <li>
                    - {{$project->title}}
                </li>
                @endforeach

            </ul>
            <a class="btn btn-primary" href="{{route('admin.categories.show', $category)}}">Show more</a>
        </div>
        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection