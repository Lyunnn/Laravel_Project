@extends('layouts.master')

@section('title')
    Blog Page
@endsection

@section('content')
    <div class="mx-8 lg:mx-28">
        <div class="mb-8">
            <div class="font-extrabold text-4xl text-center leading-relaxed">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                <!-- <span class=""> -->
                Blog
                </span>
            </div>
            <div class="font-extrabold text-2xl text-center leading-relaxed text-gray-500">
                <span class="">
                    Bounce your ideas with others
                </span>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <img class="object-cover w-full h-48" src="https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjk4M2JhdGNoMi0xNi14LmpwZw.jpg?s=bsDW-Y2_wQ7mMs6tCBwg-zzqoPMfFT1JXjOujxUrU0E" alt="watercolor background"/>
            <div class="absolute top-0 left-0 p-6">
            <h4 class="mb-3 text-xl font-semibold">This is the title</h4>
            <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing elit. Praesen tium, quibusdam facere quo laborum maiores sequi nam tenetur laud.</p>
            </div>
        </div>
    
        <div class="flex flex-wrap mt-10">
            <div class="w-full md:w-1/2 mb-8 lg:mb-4 lg:pr-4">
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
                    <div class="bg-white py-10 px-10 shadow rounded-lg lg:px-10">
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

                                <button class="py-3 px-6 bg-buttoncolor hover:bg-buttonhover rounded-lg font-display font-bold float-right" type="submit" value="Submit">Submit</button>
                                <br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 mb-4 lg:pl-4">
                <div class="">
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

        </div>
    </div>
@endsection