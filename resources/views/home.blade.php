@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Books</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Cover</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Books as $book)
                            <tr>
                                <td colspan="1"><img src="{{asset('uploads/images/' . $book->image)}}" class="img-thumbnail" width="60" height="90" />
                                </td>
                                <td colspan="1">{{$book->Title}}</td>
                                <td colspan="1">{{$book->Author}}</td>
                                <td colspan="1">{{$book->created_at}}</td>
                                <td colspan="1"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal{{$book->id}}">Info</button></td>
                            </tr>
                            <div class="modal fade bd-example-modal-lg" id="Modal{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">{{$book->Title}} written by {{$book->Author}} </h4>
                                            </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>



                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="block">
                                                    <div class="row">
                                                        <div class="span4">
                                                            <img src="{{asset('uploads/images/' . $book->image)}}" class="img-left" width="200" height="300" /></td>
                                                            <div class="content-heading">
                                                                <h4>Published: {{$book->published}}</h4>
                                                            </div>
                                                            <p>ISBN: {{$book->isbn}}</p>
                                                            <p>Page count: {{$book->Page_Count}} </p>
                                                            <p>Format: {{$book->Format}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <b> Resume:</b> {{$book->Resumes}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $Books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
