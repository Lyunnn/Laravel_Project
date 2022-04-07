@extends('layouts.app')

@section('title')
    Contact Page
@endsection

@section('content')
    <h2 class="bg-titlecolor p-2 mx-32 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Contact Me</h2>
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
                <form class="justify-center items-center my-auto" method="POST" action='{{url("contact")}}' enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="">
                        <div class="mt-0">
                            <label class="block pb-2">Enter Your Name *</label>
                            <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="contact_name" value="{{ old('contact_name') }}">
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
                    <!-- <div class="mt-0">
                        <label class="block pb-2">Enter Your Name *</label>
                        <input class="rounded-xl bg-titlecolor w-80 py-2 font-display focus:outline-primarycolor" type="text" name="contact_name" value="{{ old('contact_name') }}">
                    </div><br>
                    <hr>
                    <div class="mt-4">
                        <label class="block pb-2">Enter Your Email *</label>
                        <input class="rounded-xl bg-titlecolor w-80 py-2 font-display focus:outline-primarycolor" type="text" name="contact_email" value="{{ old('contact_email') }}">
                    </div><br>
                    <hr>
                    <div class="mt-4">
                        <label class="block pb-2">Enter Your Subject *</label>
                        <input class="rounded-xl bg-titlecolor w-80 py-2 font-display focus:outline-primarycolor" type="text" name="contact_subject" value="{{ old('contact_subject') }}">
                    </div><br>
                    <hr>
                    <div class="mt-4">
                        <label class="block pb-2">Enter Your Message *</label>
                        <input class="rounded-xl bg-titlecolor w-80 py-2 font-display focus:outline-primarycolor" type="text" name="contact_message" value="{{ old('contact_message') }}">
                    </div><br>
                    <hr><br>
                    <input class="py-2 px-16 bg-primarycolor rounded-full font-display font-bold float-right" type="submit" value="Submit"><br><br> -->
                </form>
            </div>
        </div>
    </div>
@endsection