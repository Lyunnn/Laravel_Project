@extends('layouts.master')

@section('title')
    Experience Page
@endsection

@section('content')
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

    <h2 class="bg-titlecolor p-2 mx-32 justify-center items-center text-center my-8 font-display font-semibold text-3xl">Reflections of Industry Knowledge and Engagement</h2>
    @forelse ($experiences as $experience)
    <div class="bg-white shadow mx-32">        
        <div class="flex flex-row">
                @foreach ($images as $image)
                    @if ($image->exp_proj_id == $experience->id)
                        <img class="h-60 w-2/5 clear-right ml-20 pt-10 pb-10 pr-6" src="{{url($image->image)}}" alt="assignment image">
                    @endif
                @endforeach
                <div class="w-3/5 mr-20 pt-10 pb-10 clear-left">
                    
                        <p class="font-display font-semibold text-xl">{{$experience->proj_name}}</p>
                        <p class="pt-4">Year: {{$experience->proj_year}}</p>
                    
                </div>
        </div>    
    </div><br><br><hr class="mx-32"><br>
    @empty
        No experience.
    @endforelse
@endsection