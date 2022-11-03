@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">

            <?php
                
                    //$clientIP = $_SERVER['REMOTE_ADDR'];
                    //testing
                    $clientIP = '1.1.1.1';
                    $content = file_get_contents("https://api.ipgeolocation.io/astronomy?apiKey=fd689d337982497e8a9556eaad655f00&ip=$clientIP");
                    $result = json_decode($content);
                    $mi = (number_format($result->moon_distance / 1.609));
                    $location = $result->location->district;
                    echo "$location ➜ Moon";
                    
            ?>
            <br><br>
            <h2>
            <span class="text-pink-2xl sm:text-4xl">
                <?php
                    echo "$mi";    
                ?>
            </span>
            </h2>
        
        </h2>
            <h3 class="text-2xl sm:text-4xl italic">Miles to the Moon</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>

    <section>
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Before the invention of the telescope in the early 1600’s, man just knew of the Moon — a round, mysterious astronomical object that people would 
                gaze up to in the night sky. As time progressed however, astronomers discovered that the moon isn’t exactly unique to earthlings, and other planets 
                had their own moons. So exactly what is a moon?
            </p>
            <p class="mb-6">
                A moon is defined to be a celestial body that makes an orbit around a planet, including the eight major planets, dwarf planets, and minor planets. 
                A moon may also be referred to as a natural satellite, although to differentiate it from other astronomical bodies orbiting another body, e.g. a planet orbiting 
                a star, the term moon is used exclusively to make a reference to a planet’s natural satellite.
            </p>
            <a href="{{ route('about') }}" class='bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 
            transition'>Learn more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What can you learn?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Moon</h3>
                        <p class="text-gray-200 mb-3">
                            The Moon is Earth’s constant companion, the first skywatching target pointed out to us as children. 
                            We watch its face change as the month progresses, and see patterns and pictures in its geological features.
                        </p>
                        <a href="{{ url('https://moon.nasa.gov/moon-observation/viewing-guide/') }}" target="bg-pink-500 text-center py-2
                        px-4 rounded hover:bg-purple-500 transition">Learn Now!</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Stars</h3>
                        <p class="text-gray-200 mb-3">
                            Stars are huge celestial bodies made mostly of hydrogen and helium that produce light and heat from the churning nuclear forges inside their cores. 
                            Aside from our sun, the dots of light we see in the sky are all light-years from Earth. They are the building blocks of galaxies, of which there are 
                            billions in the universe.
                        </p>
                        <a href="{{ url('https://science.nasa.gov/astrophysics/focus-areas/how-do-stars-form-and-evolve') }}" target="bg-pink-500 text-center py-2
                        px-4 rounded hover:bg-purple-500 transition">Learn Now!</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb6">Where to learn?</h3>
            <h3 class="text-xl mb-6">Learn about Moon and Stars on YouTube!</h3>
            <div class="-mx-2 sm:flex">
                <a href="{{ url('https://www.youtube.com/watch?v=o-4sq8Bqv50') }}" target="_blank" rel="noopener noreferrer"
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3
                sm:mb-0">
                    <span class="mr-2">🌑</span> Learn <strong>Moon</strong> on YouTube!
                </a>
                <a href="{{ url('https://www.youtube.com/watch?v=tJV_XTDtKgM') }}" target="_blank" rel="noopener noreferrer"
                class="block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2">
                    <span class="mr-2">⭐</span> Learn <strong>Stars</strong> on YouTube!
                </a>
            </div>
        </div>
    </section>

@endsection