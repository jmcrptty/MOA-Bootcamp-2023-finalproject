@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="fw-bolder">Edit Category</h1>
    <a href="{{ route('category') }}" class="btn btn-secondary mt-3">Back</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('category.update' , ['id' => request()->route('id')]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" required>
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>
@endsection
