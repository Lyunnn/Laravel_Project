@extends('layouts.master')

@section('title')
    Blog Page
@endsection

@section('content')
    <div class="grid grid-cols-2 md:grid-cols-1">
        <div>
            <div class="bg-white py-10 px-20 shadow rounded-lg sm:px-10">
                <form class="justify-center items-center my-auto" method="POST" action='{{url("blog")}}' enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="">
                        <div class="mt-0">
                            <label class="block pb-2">Enter Your Name *</label>
                            <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="user_id" value="{{Auth::user()->id}}">
                        </div><br>
                        <hr>
                        <div class="mt-4">
                            <label class="block pb-2">Enter Your Email *</label>
                            <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="contact_email" value="{{ old('contact_email') }}">
                        </div><br>
                        <hr>
                        <div class="mt-4">
                            <label class="block pb-2">Enter Your Subject *</label>
                            <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="contact_subject" value="{{ old('contact_subject') }}">
                        </div><br>
                        <hr>
                        <div class="mt-4">
                            <label class="block pb-2">Enter Your Message *</label>
                            <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="contact_message" value="{{ old('contact_message') }}">
                        </div><br>
                        <hr><br>

                        <button class="py-3 px-12 bg-buttoncolor hover:bg-buttonhover rounded-full font-display font-bold float-right" type="submit" value="Submit">Submit</button>

                        <br><br>
                    </div>
                </form>
            </div>
        </div>
        <div>
            a
        </div>
    </div>
    @forelse($reviews_pag as $post)
        <div class="p-3 mb-4 bg-light rounded-3">
            <div class="container-fluid">
                <p>
                    @foreach($users as $user)
                        @if($review->user_id == $user->id)
                            <strong>User Name: </strong>{{$user->name}}<br>
                        @endif
                    @endforeach
                    <strong>Created at: </strong>{{$post->created_at}}<br>
                    <strong>Post Message:<br></strong>{{$post->review_content}}<br>
                </p>
                                @if(Auth::user()->id == $review->user_id || Auth::user()->user_type == 'Moderator')
                                    <div class="d-flex">
                                        <button class="btn btn-primary btn-md me-2" type="submit"><a href="{{url("review/$review->id/edit")}}" style="color: white">Update</a></button>
                                        <form method="POST" action= '{{url("review/$review->id")}}'>
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }} {{-- HTML does not support delete method so generate a hidden field to do the delete action --}}
                                            <input class="form-control" type="submit" value="Delete">               
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @empty
                    No reviews found.
                @endforelse
                <br>
                {{ $reviews_pag->links() }}
            </div>
    <div class="bg-white shadow ml-32 my-8 sm:w-fit">
        <div class="grid grid-flow-row auto-rows-max sm:grid-cols-2 lg:grid-cols-4 w-full gap-4 p-10">
            @foreach ($skills as $skill)
                <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                    <p class="p-5 m-auto">{{$skill->skill_name}}</p>   
                </div>
            @endforeach
        </div>
        <div class="flex pb-4">
            <button class="m-auto"><a href="{{url("skill/create")}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-8 w-8 fill-rose-100 stroke-rose-500 stroke-2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg></a>
            </button>
        </div>
    </div>
@endsection