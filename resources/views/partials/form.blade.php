<form action="{{ route('reviews.store') }}" method="POST" class="py-3" >
    @csrf

    <div class="flex flex-wrap -mx-3 mb-1" >

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" >
            <label for="name_first" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >First
                Name</label >
            <input type="text" id="name_first" name="name_first"
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php echo (empty($nameFirstError)) ? 'border-gray-200 focus:border-gray-500' : 'border-red-500'; ?>" >

        </div >

        <div class="w-full md:w-1/2 px-3" >
            <label for="name_last" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Last
                Name</label >
            <input type="text" id="name_last" name="name_last"
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white <?php echo (empty($nameLastError)) ? 'border-gray-200 focus:border-gray-500' : 'border-red-500'; ?>" >

        </div >

    </div >

    <div class="flex flex-wrap -mx-3 mb-1" >

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" >
            <div class="range-slider" >
                <label for="rate"
                       class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Rating</label >
                <input id="rate" name="rate" class="range-slider__range" type="range" value="5" min="1.0" max="5.0"
                       step="0.5" >
                <span id="rate_value" class="range-slider__value" >5</span >
            </div >
        </div >

        <div class="w-full md:w-1/2 px-3" >
            <label for="comment" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                Comment </label >
            <textarea id="comment" name="comment" rows="4" cols="50"
                      class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" ></textarea >
        </div >

    </div >

    <div class="flex flex-wrap -mx-3 mb-1 justify-center" >
        <button type="submit"
                class="text-center block rounded py-2 px-4 hover:bg-red-800 hover:text-white bg-red-800 text-white" >
            Post comment
        </button >
    </div >
</form >

<script >

    let slider = document.getElementById("rate");
    slider.onchange = function (event) {
        let output = document.getElementById("rate_value");
        output.innerHTML = slider.value;
    }

</script >
