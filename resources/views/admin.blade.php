@extends('layouts.app')
@section('content')
<form style="padding-top:10px;" method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="Book_title" name="Book_title" placeholder="Book title" required value="{{ old('Book_title') }}">
        </div>
        <div class="form-group col-md-6">
            <input type="date" style="background: lightgrey; color: black;" name="Publish_Date" class="form-control" id="PublishDate" placeholder="Publish Date" required value="{{ old('Publish_Date') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="Author" name="Author" placeholder="Author" required>
        </div>
        <div class="form-group col-md-6">
            <select style="background: lightgrey; color: black;" id="Format" name="Format" class="form-control" required>
                <option selected>Select Format</option>
                <option>A3</option>
                <option>A4</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 ">
            <input type="text" class="form-control" id="PageCount" name="PageCount" placeholder="Page Count" required>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="ISBN" required value="{{ old('ISBN') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12 ">
            <textarea class="form-group col-md-12" style="background: lightgrey; color: black;" rows=3 id="resume" placeholder="Resume" name="Resume"></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <img src="/images/cover.png" class="img-fluid float-left" alt="example placeholder">
            <div class="btn btn-mdb-color btn-rounded float-left">
                <input type="file" name="Cover" />
            </div>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-success float-right" style="background-color: rgb(151, 224, 41);">Submit</button>
        </div>
    </div>
    @if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</form>
@endsection
