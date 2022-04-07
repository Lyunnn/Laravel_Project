@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')
    <img class="h-96 w-screen mt-4 sm:w-screen" src="{{url("homes_images/home-bg.jpg")}}" alt="background image">
    <h3 class="text-center my-8 font-display font-semibold text-2xl">About Me</h3>
    <div class="bg-gray-100 mx-32 sm:max-w-fit">
        <p class="mx-20 pt-10 pb-10">Nunc eu magna ac massa finibus blandit. Nulla laoreet fermentum lorem, ut sagittis ante.
            Vestibulum molestie ipsum ac ligula tempor faucibus. Fusce id nulla rhoncus, malesuada erat ac, ornare dolor.
            Ut fringilla nibh vitae mauris ultricies convallis. Fusce in orci finibus, sodales enim eu, tristique sem.
            Suspendisse vulputate nibh erat, et rutrum turpis ullamcorper vel. Sed arcu ipsum, finibus in consectetur et, venenatis eu leo. Curabitur in venenatis dolor, vitae lobortis leo.
            In in diam metus. Nunc volutpat nisl nulla, id tempor urna convallis ac. Etiam at lacus malesuada, cursus nunc quis, mollis sapien.
            Nam id turpis id velit sollicitudin dictum.</p>
    </div>


@endsection