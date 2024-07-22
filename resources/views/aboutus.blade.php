<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgb(157, 169, 223);">
                <div class="p-6 text-gray-900">
                    <section id="me" class="me">
                        <div class="my-img">
                            <img src="{{ asset('image/aku.jpg') }}" alt="">
                        </div>
                        <div class="desk">
                            <h1>salma afifah</h1>
                            <p>2203421025</p>
                            <p>BM 4A</p>
                            <ul class="social-icon">
                                <li><a href="https://www.instagram.com/sal_afifa/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://twitter.com/lookmeay"><ion-icon name="logo-twitter"></ion-icon></a></li> 
                                <li><a href="https://www.tiktok.com/@kukischoc"><ion-icon name="logo-tiktok"></ion-icon></a></li> 
                                <li><a href="https://id.pinterest.com/salfafifah/"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                            </ul>
                        </div>
                        <div class="my-img">
                            <img src="{{ asset('image/ekabiru.jpg') }}" alt="">
                        </div>
                        <div class="desk">
                            <h1>eka safitri</h1>
                            <p>2203421036</p>
                            <p>BM 4A</p>
                            <ul class="social-icon">
                                <li><a href="https://www.instagram.com/ekaaasfitri/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://x.com/yyeayyyy?t=yrTwijaHJvSxoDFcrBbJqw&s=09"><ion-icon name="logo-twitter"></ion-icon></a></li> 
                                <li><a href="https://www.tiktok.com/@chclatzs?_t=8o0upkWx8WA&_r=1"><ion-icon name="logo-tiktok"></ion-icon></a></li> 
                                <li><a href="https://pin.it/5kcd1tuSj"><ion-icon name="logo-pinterest"></ion-icon></a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="{{ asset('css/restyle.css') }}">