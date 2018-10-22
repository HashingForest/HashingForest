<template>
    <div class="Section__wrap">
        <h3 class="Section__title">
            Every rig we build is made special<br>
            for your unique <word-toggle :words="words" :current-word="currentSlide.word"></word-toggle>
        </h3>

        <template v-for="slide in slides">
            <transition name="paragraph-swap" mode="out-in">
                <p class="Section__paragraph" v-if="currentSlide == slide">{{ slide.paragraph }}</p>
            </transition>
        </template>

    </transition>

        <button @click="nextSlide" class="Button --primary">Toggle</button>
    </div>

</template>
<script>

import WordToggle from './WordToggle';
export default {

    /**
     * Registered Components
     */
    components: {
        'word-toggle': WordToggle,
    },

    /**
     * Passed properties.
     */
    props: [
        // Number in milliseconds between slides.
        'slideDelay',

        // Array of objects each containing a "word", 'paragraph', and 'img' property
        'slides'
    ],

    /**
     * Component State
     */
    data() { return {

        /**
         * Holds the interval that runs and toggles the slider.
         */
        interval: null,

        /**
         * The index of the current slide.
         */
        currentSlideIndex: 0,

    }},

    /**
     * Runs when the components is mounted and ready.
     */
    mounted() {
        // Set up the slider to toggle at the passed interval.
        // this.interval = setInterval(this.nextSlide, this.slideDelay);
    },

    /**
     * Runs right before the component is destroyed
     */
    beforeDestry() {

    },

    /**
     * Computed Properties on the instance
     */
    computed: {

        /**
         * Returns an array of all of the words of each of the slides.
         */
        words() {
            let collectedWords = [];

            // Loop over each of the slides and set its word to the collected words array.
            this.slides.forEach( slide => {
                collectedWords.push(slide.word);
            });

            return collectedWords;
        },

        /**
         * Helper for returning the slide that is at the current slide index.
         */
        currentSlide() {
            return this.slides[this.currentSlideIndex];
        },

    },

    /**
     * Methods available on the instance.
     */
    methods: {

        /**
         * Increments the current slide index to the next slide or the
         * first slide if we are on the final slide in the array.
         */
        nextSlide() {

            // Total number of slides.
            let totalSlides = this.slides.length;

            // Are we on the last slide?
            if (totalSlides <= this.currentSlideIndex + 1) {
                // Then set the index to zero.
                this.currentSlideIndex = 0;
            } else {
                this.currentSlideIndex++;
            }
        },

    },

};
</script>