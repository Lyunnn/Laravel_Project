@extends('layouts.master')

@section('title')
    Skills Page
@endsection

@section('content')
    <h2 class="bg-titlecolor p-2 mx-32 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Create a New Skill</h2>

    <div class="col-md-7">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-10 px-20 shadow rounded-lg sm:px-10">
                <form class="justify-center items-center my-auto" method="POST" action='{{url("skill")}}' enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mt-0">
                        <label class="block pb-2">Enter New Skill *</label>
                        <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="contact_name" value="{{ old('contact_name') }}">
                    </div><br>
                    <button class="py-3 px-12 bg-buttoncolor hover:bg-buttonhover rounded-full font-display font-bold float-right" type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <span class="flex h-3 w-3">
  <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
  <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
</span>

@endsection