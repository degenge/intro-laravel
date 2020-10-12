<div class="flex items-center justify-between flex-wrap p-4" >

    <div class="flex items-center flex-shrink-0 text-white mr-6" >

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-16 w-16 fill-current text-red-600 mr-2" >

            <path
                d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z" />

        </svg >

        <span class="font-semibold text-xl text-red-600 tracking-tight" >DEGENHARDTS</span >

    </div >


    <ul class="flex" >
        <li class="flex-1 mr-2" >
            <a class="text-center block text-red-600 rounded py-2 px-4 hover:bg-red-800 hover:text-white"
               href="{{ route('home') }}" >Home</a >
        </li >
        <li class="flex-1 mr-2" >
            <a class="text-center block text-red-600 rounded py-2 px-4 hover:bg-red-800 hover:text-white"
               href="{{ route('reviews.show') }}" >Reviews</a >
        </li >

    </ul >

</div >
