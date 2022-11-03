@extends('layouts.default')

@section('page-content')
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h2 class="text-6xl text-center mb-6">Contact Us</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Choose a Day!</h3>
            

            <form class="text-center" action="contact" method="POST">
                @csrf
                {{ method_field('PUT') }}
              </form>
              <br>
              <form class="text-center" onSubmit="if(!confirm('Thank you for submitting, to infinity and beyond!')){return false;}">
                 <br>
                <input type="date" name="day" required pattern="\d{4}-\d{2}-\d{2}" class="text-black"/><br><br>
                <button type="submit" class="bg-pink-500 py-2 px-4 rounded hover:bg-purple-500 transition ">Submit!</button>
              </form>

    </section>    
@endsection
