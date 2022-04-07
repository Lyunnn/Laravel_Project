@extends('layouts.app')

@section('title')
    Experience Page
@endsection

@section('content')
    <div class="bg-white shadow ml-32 my-8 sm:w-fit">
        <div class="grid grid-flow-row auto-rows-max sm:grid-cols-2 lg:grid-cols-4 w-full gap-4 p-10">
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">HTML</button>
            </div>
        </div>
    </div>

    <div class="bg-white shadow ml-32 my-8 sm:w-fit">
        <div class="grid grid-flow-row auto-rows-max sm:grid-cols-2 lg:grid-cols-4 w-full gap-4 p-10">
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">HTML</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">CSS</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">PHP</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">JavaScript</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">Python</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">Laravel</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">Swift</button>
            </div>
            <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 ">
                <button class="p-5 m-auto">C</button>
            </div>
        </div>
    </div>

    <h2 class="bg-titlecolor p-2 mx-32 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Reflections of Industry Knowledge and Engagement</h2>
    <div class="bg-white shadow mx-32">        
        <div class="flex flex-row">
            <img class="h-96 w-2/5 clear-right ml-20 pt-10 pb-10 pr-6" src="{{url("homes_images/samoyed.jpg")}}" alt="assignment image">
            <div class="w-3/5 mr-20 pt-10 pb-10 clear-left">
                <p class="font-display font-semibold text-xl">Website Creation</p>
                <p class="pt-4">Nunc eu magna ac massa finibus blandit. Nulla laoreet fermentum lorem, ut sagittis ante.
                    Vestibulum molestie ipsum ac ligula tempor faucibus. Fusce id nulla rhoncus, malesuada erat ac, ornare dolor.
                    Ut fringilla nibh vitae mauris ultricies convallis. Fusce in orci finibus, sodales enim eu, tristique sem.
                    Suspendisse vulputate nibh erat, et rutrum turpis ullamcorper vel. Sed arcu ipsum, finibus in consectetur et, venenatis eu leo. Curabitur in venenatis dolor, vitae lobortis leo.
                    In in diam metus. Nunc volutpat nisl nulla, id tempor urna convallis ac. Etiam at lacus malesuada, cursus nunc quis, mollis sapien.
                    Nam id turpis id velit sollicitudin dictum.</p>
            </div>
        </div>    
    </div><br><br><hr class="mx-32"><br>

    <h2 class="bg-titlecolor p-2 mx-32 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Extra-curricular Experiences, Interests, and Activities</h2>
    <div class="bg-white shadow mx-32">        
        <div class="flex flex-row">
            <img class="h-96 w-2/5 clear-right ml-20 pt-10 pb-10 pr-6" src="{{url("homes_images/samoyed.jpg")}}" alt="assignment image">
            <div class="w-3/5 mr-20 pt-10 pb-10 clear-left">
                <p class="font-display font-semibold text-xl">Griffith Hackathon</p>
                <p class="pt-4">Nunc eu magna ac massa finibus blandit. Nulla laoreet fermentum lorem, ut sagittis ante.
                    Vestibulum molestie ipsum ac ligula tempor faucibus. Fusce id nulla rhoncus, malesuada erat ac, ornare dolor.
                    Ut fringilla nibh vitae mauris ultricies convallis. Fusce in orci finibus, sodales enim eu, tristique sem.
                    Suspendisse vulputate nibh erat, et rutrum turpis ullamcorper vel. Sed arcu ipsum, finibus in consectetur et, venenatis eu leo. Curabitur in venenatis dolor, vitae lobortis leo.
                    In in diam metus. Nunc volutpat nisl nulla, id tempor urna convallis ac. Etiam at lacus malesuada, cursus nunc quis, mollis sapien.
                    Nam id turpis id velit sollicitudin dictum.</p>
            </div>
        </div>    
    </div><br><br>
@endsection