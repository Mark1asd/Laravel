@extends('layouts.default')

@section('page-content')
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">We know where you are!</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Location</h3>
                        Using an API call I calculate and present the user their distance from the moon
                    </div>
                </div>
                
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Astronomy API</h3>
                        <p class="text-gray-200 mb-3">
                            The Astronomy API provides the location-based rise and set times for the Sun and Moon along with the current position, 
                            distance from earth, and azimuth of the Sun and the Moon for a specific date at the queried time.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Astronomy calculations</h3>
                        <p class="text-gray-200 mb-3">
                            The Astronomy calculations are much more complex than producing an accurate result from obscure formulas throwing in a few numbers. 
                            There is always a tradeoff between the accuracy and computing time. Our Astronomy API focuses more on producing an acceptable results 
                            and has an accuracy of around one minute that is good enough for applications like sunrise/sunset timers but is not sufficient for 
                            astronomical purposes.
                        </p>
                    </div>
                </div>
                
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Ways to consume the Astronomy API</h3>
                        <p class="text-gray-200 mb-3">
                            Using any Address (preferrably, city address) <br>
                            Using Location Coordinates (latitude & longitude) <br>
                            Using any IP address <br>
                            The three variations of Astronomy API take the different input sources to produce astronomical information along with 
                            location details.
                        </p>
                    </div>
                </div>
            </div>

            <br>

            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500
                transition">Go Home</a>
            </div>
        </div>
    </section>    
@endsection