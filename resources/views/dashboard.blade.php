<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgb(157, 169, 223)">
                <div class="p-6 text-gray-900" style="color: #ffffff;font-size: 30px">
                    {{ __("You're logged in!") }}
                </div>
                <div class="map-container">
                    <div class="mapBg"></div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.719099997164!2d106.8236706!3d-6.3707762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sJakarta%20State%20Polytechnic!5e0!3m2!1sen!2sid!4v1715444661121!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contactMethod">
                    <div class="method">
                        <i class="fa-solid fa-location-dot contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Location</h1>
                            <p class="para">Politeknik Negeri Jakarta</p>
                        </article>
                    </div>
    
                    <div class="method">
                        <i class="fa-solid fa-envelope contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Email</h1>
                            <p class="para">Email: sushisho@gmail.com</p>
                        </article>
                    </div>
    
                    <div class="method">
                        <i class="fa-solid fa-phone contactIcon"></i>
                        <article class="text">
                            <h1 class="sub-heading">Phone</h1>
                            <p class="para">0987654321</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="{{ asset('css/restyle.css') }}">