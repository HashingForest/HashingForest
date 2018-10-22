<template>
    <span class="WordToggle">
        <template v-for="word in words">
            <transition name="word-swap">
                <span v-show="currentWord == word">{{ word }}</span>
            </transition>
        </template>
    </span>
</template>

<script>
export default {

    props: ['words', 'currentWord'],

}
</script>