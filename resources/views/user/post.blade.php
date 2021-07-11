@extends('user/app')

@section('bg-img', Storage::disk('local')->url($slug->image))
@section('title', $slug->title )
@section('subtitle', $slug->subtitle )

@section('main-content')
<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                   <div class="col-md-10 col-lg-8 col-xl-7">
                   <div class="row">
                   <div class="col-sm-5">
                    <small>Cretaed At {{$slug->created_at->diffForHumans() }}</small>     
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">           
                    @foreach($slug->categories as $category)
                    <small class="pull-right">
                        {{ $category->name }}
                    </small>
                    @endforeach
                    </div>
                    </div>
                        {!! htmlspecialchars_decode($slug->body)  !!}

                        <h6>Tags:</h6>
                        @foreach($slug->tags as $tag)
                        <small style="margin-right:20px; border: 1px solid; border-radius:5px; padding:5px;">
                            {{ $tag->name }}
                        </small>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
@endsection