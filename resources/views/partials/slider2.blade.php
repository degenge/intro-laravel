<div class="min-h-screen p-16 bg-gray-100 flex items-center justify-center" >


    <section
        :aria-labelledby="title.toLowerCase().replace(' ', '-')"
        class="flex flex-col items-center justify-center w-full max-w-lg"
        @keydown.arrow-right="state.usedKeyboard = true;updateCurrent(nextSlide)"
        @keydown.arrow-left="state.usedKeyboard = true;updateCurrent(previousSlide)"
        @keydown.window.tab="state.usedKeyboard = true"
        x-data="testimonialSlideshow(slides)"
        x-title="Quotes Slideshow"
        x-init="setup()" >
        <div
            :id="title.toLowerCase().replace(' ', '-')"
            class="sr-only" x-text="title" >
        </div >
        <div
            tabindex="1"
            class="relative w-full overflow-hidden mb-6 bg-gray-300"
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
                                class="text-2xl font-extrabold italic mb-4 text-gray-800 leading-tight"
                                x-html="slide.content" >
                            </p >
                            <footer >—<cite x-html="slide.author" ></cite ></footer >
                        </blockquote >
                    </div >
                </div >
            </template >
            <div
                x-cloak
                class="w-full bg-gray-200" >
                <div
                    class="bg-indigo-500 h-2 w-0"
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
                    class=" text-white inline-flex items-center justify-center bg-gray-600 hover:bg-indigo-500 w-4 h-4 p-0 mb-2 rounded-full"
                    style="text-indent:-9999px"
                    :class="{
					'bg-indigo-500' : state.currentSlide == index,
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
