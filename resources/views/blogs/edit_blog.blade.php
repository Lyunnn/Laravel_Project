@extends('layouts.master')

@section('title')
    Edit Post Page
@endsection

@section('content')
    <h2 class="p-2 mx-auto justify-center items-center text-center my-8 font-display font-semibold text-3xl">Edit Post</h2>
    <div class="flex flex-col">
        <div class="items-center mx-auto">
        @if (count($errors) > 0)
            <div class="bg-red-100 border border-red-400 text-red-700 px-20 py-3 rounded relative" role="alert">
                <p class="font-semibold font-display">Errors!</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br>
        @endif
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-10 px-20 shadow rounded-lg sm:px-10">
                <form class="justify-center items-center my-auto" method="POST" action='{{url("blog/$post->id")}}'>
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
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
                            <textarea class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" rows="3" name="blog_message" value="{{$post->blog_message}}" value="{{ old('blog_message') }}"></textarea>
                        </div><br>
                        <hr><br>

                        <button class="py-3 px-6 bg-buttoncolor hover:bg-buttonhover rounded-lg font-display font-bold float-right" type="submit" value="Submit">Confirm</button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection