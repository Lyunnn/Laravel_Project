@extends('layouts.master')

@section('title')
    Experience Page
@endsection

@section('content')
    <div class="mx-8 lg:mx-28">
        <div class="mb-10">
            <div class="bg-purple-50 shadow">
                <div class="font-extrabold text-4xl lg:text-center leading-relaxed p-4"> 
                    Reflections of Industry Knowledge and Engagement
                </div>
            </div>
        </div>

        <div class="flex mt-16 mb-8">
            <div class="flex mb-2 w-full divide-x-2 divide-dotted divide-darkpurple">
                <div class="w-full lg:w-1/6 mr-16 mt-4">
                    <div class="flex">
                        <div class="border rounded-full bg-purple-600 h-4 w-4 mr-1 my-auto"></div>
                        <div class="border rounded-full bg-purple-400 h-4 w-4 mr-2 my-auto"></div>
                        <div class="font-pacifico font-bold text-xl lg:text-2xl text-center">
                            2021
                        </div>
                        <div class="border rounded-full bg-purple-400 h-4 w-4 ml-2 my-auto"></div>
                        <div class="border rounded-full bg-purple-600 h-4 w-4 ml-1 my-auto"></div>
                    </div>
                </div>
                <div class="w-full lg:w-5/6 pl-2 lg:pl-8">
                    <div class="font-semibold mb-4 mt-4">Crime Data Miner</div>
                    <div class="mb-2">
                        A data analysis and visualization tool, Crime Data Miner for desktop is in need to make data appear
                        more readable. Crime Data Miner is able to:
                    </div>
                    <div class="mb-1">
                        1. find all penalty cases for a user-selected period and report the information.
                    </div>
                    <div class="mb-1">
                        2. produce a chart showing the distribution of cases in each offence code for a user-selected period.
                    </div>
                    <div class="mb-1">
                        3. search for a user-selected period, and retrieve all cases captured by radar or camera based on offence description.
                    </div>
                    <div class="mb-1">
                        4. analyzing the cases caused by mobile phone usage.
                    </div>
                    <div class="mb-4">
                        5. sorting cases by face value, from highest to lowest.
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex mb-16">
            <div class="w-full lg:w-1/2 lg:mr-4 rounded">
                <img class="h-70 w-full mt-2" src="{{url("experiences_image/datacrimeminer-1.png")}}" alt="datacrimeminer-1">
            </div>
            <div class="w-full lg:w-1/2 lg:ml-4 rounded">
                <img class="h-70 w-full mt-2" src="{{url("experiences_image/datacrimeminer-2.png")}}" alt="datacrimeminer-2">
            </div>
        </div><hr>

        <div class="flex mt-16 mb-8">
            <div class="flex mb-2 w-full divide-x-2 divide-dotted divide-primarycolor">
                <div class="w-full lg:w-1/6 mr-16 mt-4">
                    <div class="flex">
                        <div class="border rounded-full bg-pink-600 h-4 w-4 mr-1 my-auto"></div>
                        <div class="border rounded-full bg-pink-400 h-4 w-4 mr-2 my-auto"></div>
                        <div class="font-pacifico font-bold text-xl lg:text-2xl text-center">
                            2021
                        </div>
                        <div class="border rounded-full bg-pink-400 h-4 w-4 ml-2 my-auto"></div>
                        <div class="border rounded-full bg-pink-600 h-4 w-4 ml-1 my-auto"></div>
                    </div>
                </div>
                <div class="w-full lg:w-5/6 pl-2 lg:pl-8">
                    <div class="font-semibold mb-4 mt-4">SwiftUI App</div>
                    <div class="mb-4">
                        Eateries is an app that allows users to store their favourite restaurant. It displays a list of restaurant 
                        and the details of each restaurant. The Core Data and JSON Serialization methods are adopted to 
                        keep data persistent as the data is fully editable. The location map is updated whenever the 
                        coordinates of the location change.
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex mb-16">
            <div class="w-full h-40 lg:h-66 lg:w-1/3 lg:mr-6 rounded">
                <img class="" src="{{url("experiences_image/swift-app-1.jpg")}}" alt="swift-app-1">
            </div>
            <div class="w-full h-40 lg:h-66 lg:w-1/3 lg:mr-6 rounded">
                <img class="" src="{{url("experiences_image/swift-app-2.jpg")}}" alt="swift-app-2">
            </div>
            <div class="w-full h-40 lg:h-66 lg:w-1/3 lg:ml-6 rounded">
                <img class="" src="{{url("experiences_image/swift-app-3.jpg")}}" alt="swift-app-3">
            </div>
        </div><hr>

        <div class="flex mt-16 mb-8">
            <div class="flex mb-2 w-full divide-x-2 divide-dotted divide-orange-300">
                <div class="w-full lg:w-1/6 mr-16 mt-4">
                    <div class="flex">
                        <div class="border rounded-full bg-orange-600 h-4 w-4 mr-1 my-auto"></div>
                        <div class="border rounded-full bg-orange-400 h-4 w-4 mr-2 my-auto"></div>
                        <div class="font-pacifico font-bold text-xl lg:text-2xl text-center">
                            2020
                        </div>
                        <div class="border rounded-full bg-orange-400 h-4 w-4 ml-2 my-auto"></div>
                        <div class="border rounded-full bg-orange-600 h-4 w-4 ml-1 my-auto"></div>
                    </div>
                </div>
                <div class="w-full lg:w-5/6 pl-2 lg:pl-8">
                    <div class="font-semibold mb-4 mt-4">Website Creation</div>
                    <div class="mb-4">
                        Love Stationery is a commercial website. The purpose of the creation of the website is to enable 
                        every stationery lover to easily purchase relatively cheap but good quality stationery wherever 
                        they are in Australia. It shows a list of stationery and details of each stationery. Search engine
                        function is provided to search or find for the specific stationery.
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex mb-16">
            <div class="w-full h-40 lg:h-70 lg:w-1/2 lg:mr-4 rounded">
            <img class="" src="{{url("experiences_image/web-create.png")}}" alt="web-create">
            </div>
            <div class="w-full h-40 lg:h-70 lg:w-1/2 lg:ml-4 rounded">
            <img class="" src="{{url("experiences_image/web-create-2.png")}}" alt="web-create-2">
            </div>
        </div><hr>

        <div class="lg:flex mt-16 mb-8">
            <div class="w-full p-4 lg:w-1/2 lg:p-8 bg-white shadow mb-8 lg:mr-4">
                <p class="font-semibold text-center mt-4 text-xl">Add A Skill</p><br><br>
                <form class="justify-center items-center my-auto" method="POST" action='{{url("skill")}}'>
                        {{csrf_field()}}
                        <div class="flex flex-col font-semibold">
                            <div class="mt-0">
                                
                                <label class="block pb-2">Enter A New Skill *</label>
                                <input class="rounded-xl bg-titlecolor w-full py-2 font-display focus:outline-primarycolor" type="text" name="skill_name" value="{{ old('skill_name') }}">
                                
                            </div><br><br>
                            <button class="m-auto" type="submit" value="Submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-8 w-8 fill-rose-100 stroke-rose-500 stroke-2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                            <br><br>
                        </div>
                    </form>

            </div>
            <div class="w-full lg:w-1/2 lg:p-2 bg-white shadow lg:ml-4">
                <div class="grid grid-flow-row auto-rows-max grid-cols-2 lg:grid-cols-3 w-full gap-4 p-10">
                    @foreach ($skills as $skill)
                        <div class="flex transition ease-in-out delay-50 bg-rose-100 hover:-translate-y-1 hover:scale-110 hover:bg-rose-300 duration-300 rounded">
                            <p class="p-5 m-auto">{{$skill->skill_name}}</p>   
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection