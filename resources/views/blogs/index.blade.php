@extends('layouts.master')

@section('title')
    Blog Page
@endsection

@section('content')
    <div class="my-8">
    <p class="text-3xl font-extrabold text-center font-display bg-clip-text text-transparent bg-gradient-to-r from-buttonhover to-primarycolor">
        Blog
    </p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-1 mx-20">
        <div class="">
            @if (count($errors) > 0)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-semibold font-display">Errors!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br>
            @endif
            @if(session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                {{session()->get('error')}}
                </div><br>
            @endif
            <div class="bg-white py-10 px-20 shadow rounded-lg sm:px-10">
                <form class="justify-center items-center my-auto" method="POST" action='{{url("blog")}}' enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="font-display font-semibold">
                        <div class="mt-0">
                            <label class="block pb-2 font-display font-semibold">Your User Id</label>
                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <select class="form-select appearance-none block
                                    w-full px-3 py-2 text-base font-normal text-gray-700
                                    bg-titlecolor bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300 rounded
                                    transition ease-in-out m-0
                                    focus:text-gray-700 focus:bg-white focus:outline-primarycolor" aria-label="Default select example"
                                    name="user_id">
                                        @foreach ($users as $user)
                                            @if(Auth::user()->id == $user->id)
                                                <option value="{{$user->id}}" selected="selected">{{$user->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><br>
                        <hr>
                        <div class="mt-4">
                            <label class="block pb-2 font-display font-semibold">Enter Your Comment *</label>
                            <textarea class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" rows="3" name="blog_message" value="{{ old('blog_message') }}"></textarea>
                        </div><br>
                        <hr><br>

                        <button class="py-3 px-6 bg-buttoncolor hover:bg-buttonhover rounded-lg font-display font-bold float-right" type="submit" value="Submit">Create</button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>

        <div class="ml-10">
            @forelse($posts as $post)
            <div class="flex flex-col">
                <div class="bg-white py-10 px-10 shadow rounded-lg w-full">
                    <p>
                        @foreach($users as $user)
                            @if($post->user_id == $user->id)
                                <strong>User Name: </strong>{{$user->name}}<br>
                            @endif
                        @endforeach
                        <strong>Created at: </strong>{{$post->created_at}}<br>
                        <strong>Post Message:<br></strong>{{$post->blog_message}}<br>
                    </p>
                    @if(Auth::user()->id == $post->user_id)
                        <br>
                        <div class="flex flex-row">
                            <button class="mr-2 py-1 px-4 bg-buttoncolor hover:bg-buttonhover rounded-lg font-display font-semibold" type="submit"><a href="{{url("blog/$post->id/edit")}}">Update</a></button>
                            <form method="POST" action= '{{url("blog/$post->id")}}'>
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button class="py-1 px-4 bg-buttoncolor hover:bg-buttonhover rounded-lg font-display font-semibold" type="submit">Delete</button>             
                            </form>
                        </div>
                    @endif
                </div>
            </div><br>
            @empty
                No posts found.
            @endforelse
        </div>
    </div>
    <br>
@endsection