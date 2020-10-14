@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-900 text-red-600 rounded-lg p-4 mt-4 sm:items-center sm:justify-between" >
        <div class="flex justify-center sm:justify-start sm:pt-0" >
            <img src="assets/images/restaurant_01_resized.jpg" alt="Our restaurant" class="rounded-lg" />
        </div >
    </div >

    @include('partials.slider')

    <!-- Start Menus -->
    <section class="px-10 grid grid-cols-3 gap-4" >

        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center" >

            <div class="bg-white rounded-lg mt-5" >
                <img src="assets/images/menu_01.webp" class="h-40 rounded-md" alt="Menu 1" />
            </div >

            <div class="bg-white shadow-lg rounded-lg -mt-4 w-64" >
                <div class="py-5 px-5" >
                    <span class="font-bold text-gray-800 text-lg" >Menu 1</span >
                    <div class="flex items-center justify-between" >
                        <div class="text-sm text-gray-600 font-light" > Size : Regular</div >
                        <div class="text-2xl text-red-600 font-bold" > € 8.00</div >
                    </div >
                </div >
            </div >

        </div >
        <!-- end cols -->

        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center" >

            <div class="bg-white rounded-lg mt-5" >
                <img src="assets/images/menu_02.webp" class="h-40 rounded-md" alt="Menu 2" />
            </div >

            <div class="bg-white shadow-lg rounded-lg -mt-4 w-64" >
                <div class="py-5 px-5" >
                    <span class="font-bold text-gray-800 text-lg" >Menu 2</span >
                    <div class="flex items-center justify-between" >
                        <div class="text-sm text-gray-600 font-light" > Size : Regular</div >
                        <div class="text-2xl text-red-600 font-bold" > € 8.00</div >
                    </div >
                </div >
            </div >

        </div >
        <!-- end cols -->

        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center" >

            <div class="bg-white rounded-lg mt-5" >
                <img src="assets/images/menu_03.webp" class="h-40 rounded-md" alt="Menu 3" />
            </div >

            <div class="bg-white shadow-lg rounded-lg -mt-4 w-64" >
                <div class="py-5 px-5" >
                    <span class="font-bold text-gray-800 text-lg" >Menu 3</span >
                    <div class="flex items-center justify-between" >
                        <div class="text-sm text-gray-600 font-light" > Size : Regular</div >
                        <div class="text-2xl text-red-600 font-bold" > € 8.00</div >
                    </div >
                </div >
            </div >

        </div >
        <!-- end cols -->

    </section >

@endsection
