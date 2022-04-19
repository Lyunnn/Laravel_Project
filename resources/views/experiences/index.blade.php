@extends('layouts.master')

@section('title')
    Experience Page
@endsection

@section('content')
    <h2 class="p-2 mx-32 justify-center items-center text-left my-8 font-display font-semibold text-3xl">Reflections of Industry Knowledge and Engagement</h2>
    <div class="flex mb-2 mx-32 font-display bg-white shadow-md p-4">
        <div class="w-1/3 p-4">
                <div class="flex flex-col border-4 border-r-rose-500">
                    <p class="pb-2 font-semibold text-left">Production Year</p>
                    <p class="text-left">2021</p>
                </div>
        </div>
        <div class="w-2/3 p-4">
            <p class="font-semibold">Crime Data Miner</p>
            <p>A data analysis and visualization tool, Crime Data Miner for desktop is in need to make data appear
                more readable. Crime Data Miner is able to:
                <ul>
                    <li>
                        find all penalty cases for a user-selected period and report the information.
                    </li>
                    <li>
                        produce a chart showing the distribution of cases in each offence code for a user-selected period.
                    </li>
                    <li>
                        search for a user-selected period, and retrieve all cases captured by radar or camera based on offence description.
                    </li>
                    <li>
                        analyzing the cases caused by mobile phone usage.
                    </li>
                    <li>
                        sorting cases by face value, from highest to lowest.
                    </li>
                </ul>
            </p>
        </div>
    </div>
    <div class="flex mb-4 mx-32 h-48">
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/datacrimeminer-1.png")}}" alt="datacrimeminer-1">
        </div>
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/datacrimeminer-2.png")}}" alt="datacrimeminer-2">
        </div>
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/datacrimeminer-3.png")}}" alt="datacrimeminer-3">
        </div>
    </div>
    <br><br><hr class="w-96"><br>

    <div class="flex mb-2 mx-32 font-display bg-white shadow-md p-4">
        <div class="w-1/3 p-4">
                <div class="flex flex-col border-4 border-r-rose-500">
                    <p class="pb-2 font-semibold text-left">Production Year</p>
                    <p class="text-left">2020</p>
                </div>
        </div>
        <div class="w-2/3 p-4">
            <p class="font-semibold">Website Creation</p>
            <p>Love Stationery is a commercial website. The purpose of the creation of the website is to enable 
                every stationery lover to easily purchase relatively cheap but good quality stationery wherever 
                they are in Australia. It shows a list of stationery and details of each stationery. Search engine
                function is provided to search or find for the specific stationery.</p>
        </div>
    </div>
    <div class="flex mb-4 mx-32 h-48">
        <div class="w-1/2 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/design-doc.jpg")}}" alt="design-doc">
        </div>
        <div class="w-1/2 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/web-create")}}" alt="web-create">
        </div>
    </div>
    <br><br><hr class="w-96"><br>

    <div class="flex mb-2 mx-32 font-display bg-white shadow-md p-4">
        <div class="w-1/3 p-4">
                <div class="flex flex-col border-4 border-r-rose-500">
                    <p class="pb-2 font-semibold text-left">Production Year</p>
                    <p class="text-left">2021</p>
                </div>
        </div>
        <div class="w-2/3 p-4">
            <p class="font-semibold">SwiftUI App</p>
            <p>Eateries is an app that allows users to store their favourite restaurant. It displays a list of restaurant 
                and the details of each restaurant. The Core Data and JSON Serialization methods are adopted to 
                keep data persistent as the data is fully editable. The location map is updated whenever the 
                coordinates of the location change.
            </p>
        </div>
    </div>
    <div class="flex mb-4 mx-32 h-48">
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/swift-app-1.jpg")}}" alt="swift-app-1">
        </div>
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/swift-app-2")}}" alt="swift-app-2">
        </div>
        <div class="w-1/3 p-2">
            <img class="h-48 w-96 mt-2" src="{{url("experiences_image/swift-app-3")}}" alt="swift-app-3">
        </div>
    </div>
    <br><br><hr class="w-96"><br>


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