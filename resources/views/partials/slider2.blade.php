<div class="flex justify-center bg-gray-900 text-red-600 rounded-lg p-4 mt-4 sm:items-center sm:justify-between" >

    <section class="flex flex-col items-center justify-center w-full rounded-lg"
             :aria-labelledby="title.toLowerCase().replace(' ', '-')"
             @keydown.arrow-right="state.usedKeyboard = true;updateCurrent(nextSlide)"
             @keydown.arrow-left="state.usedKeyboard = true;updateCurrent(previousSlide)"
             @keydown.window.tab="state.usedKeyboard = true"
             x-data="testimonialSlideshow({{$reviews}})"
             x-title="Quotes Slideshow"
             x-init="setup()" >

        <div
            :id="title.toLowerCase().replace(' ', '-')"
            class="sr-only" x-text="title" >
        </div >

        <div
            tabindex="1"
            class="relative w-full overflow-hidden mb-6 "
            :class="{'focus:outline-none' : !state.usedKeyboard}" >
            <template x-for="(slide, index) in slides" :key="slide.id" >
                <div :aria-hidden="(state.order[state.currentSlide] != slide.id).toString()" >
                    <div
                        x-show="state.order[state.currentSlide] == slide.id"
                        class="w-full text-center p-16"
                        :x-ref="slide.id"
                        :x-transition:enter="transitions('enter')"
                        :x-transition:enter-start="transitions('enter-start')"
                        :x-transition:enter-end="transitions('enter-end')"
                        :x-transition:leave="transitions('leave')"
                        :x-transition:leave-start="transitions('leave-start')"
                        :x-transition:leave-end="transitions('leave-end')"
                    >
                        <blockquote >
                            <p
                                class="text-xl font-extrabold italic mb-2 text-red-800 leading-tight"
                                x-html="slide.comment" >
                            </p >
                            <footer class="text-white">— <cite x-html="slide.name_first + ' ' + slide.name_last" ></cite ></footer >
                            <div class="stars" x-html="slide.rate"  ></div >
                        </blockquote >
                    </div >
                </div >
            </template >

            <div x-cloak class="w-full bg-white" >
                <div
                    class="bg-red-800 h-2 w-0"
                    :class="{'progress': !state.moving}"
                    :style="`animation-duration:${attributes.timer}ms;`" >
                </div >
            </div >

        </div >

        <div
            aria-live="polite"
            aria-atomic="true"
            class="sr-only"
            x-text="'Slide ' + (state.currentSlide + 1) + ' of ' + slides.length" >
        </div >

        <div >
            <template x-for="(slide, index) in Array.from({ length: slides.length })" :key="index" >
                <button
                    class=" text-white inline-flex items-center justify-center bg-white hover:bg-red-800 w-4 h-4 p-0 mb-2 rounded-full"
                    style="text-indent:-9999px"
                    :class="{
					'bg-red-800' : state.currentSlide == index,
					'focus:outline-none' : !state.usedKeyboard,
				}"
                    @click="stopAutoplay();updateCurrent(index)"
                    x-text="index + 1" >
                </button >
            </template >
        </div >

    </section >

</div >

<!-- Dev tools -->
<div
    id="alpine-devtools"
    x-data="devtools()"
    x-show="alpines.length"
    x-init="start()" >
</div >
