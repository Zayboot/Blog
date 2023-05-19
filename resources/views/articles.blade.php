@extends('layouts.app')
@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-center m-5">
        <a href="articles/create">
            <button type="button" class="btn btn-primary">Add Article</button>
        </a>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            @forelse($articles as $article)
            <div class="card col-6 m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->content}}</p>
                    <div class="justify-content-center gap-2 d-md-flex m-2">
                        <div>
                            <form action="{{route('articles.show',['article'=>$article])}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-secondary">show</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{route('articles.edit',['article'=>$article->id])}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-success">Edite</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{route('articles.destroy',['article'=>$article->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <p>no article existe</p>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>

@endsection