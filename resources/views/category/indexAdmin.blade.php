@extends('adminlte::page') @section('title', $viewData["title"])
@section('content_header')
<h1>Category List</h1>
@stop @section('content')
<a href="{{ route('admin.categoryCreate') }}" class="btn btn-primary mb-3"
  >Create</a
>

<table
  id="categories"
  class="table table-striped table-bordered shadow-lg mt-4"
  style="width: 100%"
>
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($viewData["categories"] as $category)
    <tr>
      <td>{{ $category->getId() }}</td>
      <td>{{ $category->getName() }}</td>
      <td>{{ $category->getDescription() }}</td>

      <td>
        <form action="{{ route ('admin.categoryDelete',$category->id)}}">
          <a
            href="{{ route ('admin.categoryEdit',$category->id)}}"
            class="btn btn-info"
          >
            Edit
          </a>
          @csrf @method('GET')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection