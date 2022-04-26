@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <!-- <div class="h-96 w-full mt-4">
        <img class="" src="{{url("homes_images/home-bg.jpg")}}" alt="background image">
    </div> -->
    <div class="mx-8 lg:mx-28">
        <div class="mb-20">
            <div class="font-extrabold text-4xl lg:text-center leading-relaxed"> 
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                    Hello, I'm Lin Yun
                </span><br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-violet-500 to-pink-500">
                    Welcome to my portfolio!
                </span>
            </div>
        </div>

        <div class="max-w-sm w-full lg:max-w-full lg:flex mb-20">
            <div class="h-80 lg:h-auto lg:w-80 object-center content-center flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('homes_images/self-pic.jpg')">
            </div>
            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8 mx-6">
                    <div class="text-gray-900 font-bold text-xl mb-6 mt-8">About Me</div>
                    <p class="text-gray-700 text-base">
                        In fact, I discovered that I was interested in the IT field after graduating from
                        high school. After consideration, I decided to study in a major that I am unfamiliar with. In the
                        beginning, I encountered difficulties and felt stressed. However, the assistance from friends and tutors,
                        as well as the passion for IT always motivates me. In addition, there is a sense of accomplishment that
                        makes me feel delighted every time I complete a project.<br><br>The most important thing for me now
                        is to keep learning to improve my self-worth, and successfully graduate from university. In the
                        future, I plan to seek a job and become an IT pro after years of passing.
                    </p>
                </div>
            </div>
        </div><hr>
        
        <div class="flex mt-16 mb-16">
            <div class="flex mb-2 w-full lg:w-4/6 divide-x-2 divide-dotted divide-primarycolor">
                <div class="w-full lg:w-2/5 mr-4">
                    <div class="font-bold text-xl lg:text-2xl underline decoration-rose-500">
                        My Education Background
                    </div>
                </div>
                <div class="w-full lg:w-3/5 pl-2 lg:pl-8">
                    <div class="text-semibold text-lg mb-2">Griffith University</div>
                    <div class="text-gray-700 mb-2">Bachelor of Information Technology major in Software Development</div>
                    <div class="text-gray-700 text-sm italic">Graduation Year: 2022</div>
                </div>
            </div>
            <div class="w-full lg:w-1/6 pl-2 lg:pl-10 rounded">
                <img class="" src="https://ih1.redbubble.net/image.1889401840.8760/st,small,507x507-pad,600x600,f8f8f8.jpg" alt="griffith university logo">
            </div>
        </div><hr>

        <div class="mt-16 mb-16 border border-purple-300 shadow rounded-md p-4 w-full">
            <div class="animate-pulse">
                <div class="px-6 mt-6 mb-6 font-bold text-xl lg:text-2xl text-purple-400 text-center">My Career Objectives</div>
                <div class="px-6 mb-6">
                    I'm interested in <span class="semibold underline decoration-purple-500">mobile app development, web design, and software development</span>.
                    My current idea of career planning is to work as an app developer and become an
                    IT professional that good at IT fields.<br><br>
                    To achieve this goal, I had learned JavaScript, HTML, CSS, SQL, Python, Swift, etc. 
                    which are really helpful in building mobile apps and websites. I will learn more 
                    skills in order to improve myself. In my plan, learning Ionic and Angular will 
                    assist in creating apps that are compatible with Android-based devices. 
                    Furthermore, emotional intelligence is important to be developed as it strengthens 
                    my social skills and builds good connections with people. People feel comfort while 
                    talking or doing work with me and this will make work easier to accomplish.
                </div>
            </div>
        </div>

    </div>

@endsection