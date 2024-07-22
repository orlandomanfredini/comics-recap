@extends('layouts.app')
@section('content')
<section>
   <div class="container">
   <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Comic Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comic Price</label>
            <input type="number" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Comic genre</label>
            <input type="tetx" name="genre" class="form-control" id="genre">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Comic company</label>
            <input type="number" name="company" class="form-control" id="company">
        </div>

        <button class="btn btn-primary">CREA</button>
    </form>
   </div>
</section>
@endsection