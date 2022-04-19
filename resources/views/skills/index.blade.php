@extends('layouts.master')

@section('title')
    Skills Page
@endsection

@section('content')
    <div class="grid grid-cols-2 grid-rows-2">
        <div class="flex bg-titlecolor shadow mt-8 ml-32">
            <h2 class="m-auto justify-center items-center font-display font-semibold text-3xl">Technical Skills</h2>
        </div>
    
        <div class="bg-white shadow mt-8 mr-32 pb-8">
            <!-- <div class="mx-20 sm:px-5"> -->
                @foreach ($skills as $skill)
                    @if ($skill->skill_category == 'technical')
                        <p class="mx-20 sm:mx-10 pt-10 font-display font-semibold text-xl">{{$skill->skill_name}}</p>
                        <p class="mx-20 sm:mx-10 pt-4">{{$skill->skill_desc}}</p>
                        <p class="mx-20 sm:mx-10">{{$skill->course_studied}}</p>
                    @endif   
                @endforeach
            <!-- </div> -->
        </div>
        <div class="bg-white shadow ml-32 sm:w-fit">
            <div class="grid grid-flow-row auto-rows-max sm:grid-cols-2 lg:grid-cols-4 w-full mx-4">
                @foreach ($skills as $skill)
                    @if ($skill->skill_category == 'programming')
                        <button class="transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 p-5 m-4 sm:w-fit">{{$skill->skill_name}}</button>
                    @endif   
                @endforeach
                <button class="transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 p-5 m-4 sm:w-fit">PHP</button>
            </div>
        </div>
        <div class="flex bg-titlecolor mr-32">
            <h2 class="m-auto justify-center items-center font-display font-semibold text-3xl">Programming Skills</h2>
        </div>
    </div>


    
    <div class="flex md:flex-row sm:flex-col">
        <div class="flex flex-col w-1/2">
        <h2 class="bg-titlecolor p-2 ml-20 mr-10 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Technical Skills</h2>
        <div class="bg-white shadow ml-20 mr-10">
            <!-- <div class="mx-20 sm:px-5"> -->
                @foreach ($skills as $skill)
                    @if ($skill->skill_category == 'technical')
                        <p class="mx-20 sm:mx-10 pt-10 font-display font-semibold text-xl">{{$skill->skill_name}}</p>
                        <p class="mx-20 sm:mx-10 pt-4">{{$skill->skill_desc}}</p>
                        <p class="mx-20 sm:mx-10 pb-10">{{$skill->course_studied}}</p>
                    @endif   
                @endforeach
            <!-- </div> -->
    </div>
        </div>
        
        <div class="flex flex-col w-1/2">
    <h2 class="bg-titlecolor p-2 ml-10 mr-20 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Programming Skills</h2>
    <div class="bg-white shadow ml-10 mr-20 sm:w-fit">
        <div class="grid grid-flow-row auto-rows-max sm:grid-cols-2 lg:grid-cols-4 w-full px-10 py-6 sm:w-fit sm:gap-8">
            @foreach ($skills as $skill)
                @if ($skill->skill_category == 'programming')
                    <button class="transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 p-5 m-4 sm:w-fit">{{$skill->skill_name}}</button>
                @endif   
            @endforeach
            <button class="transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 p-5 m-4 sm:w-fit">PHP</button>
        </div>
    </div>
    </div>
    </div>
    </div><br><br><br>

    


    <span class="flex h-3 w-3">
  <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
  <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
</span>

<svg class="animate-bounce h-6 w-6 flex-none fill-rose-100 stroke-rose-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
@endsection