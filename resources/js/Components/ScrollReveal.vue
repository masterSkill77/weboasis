<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
    delay: { type: Number, default: 0 },
    direction: { type: String, default: 'up' }, // up, left, right, none
});

const el = ref(null);
const visible = ref(false);

onMounted(() => {
    const observer = new IntersectionObserver(
        ([entry]) => {
            if (entry.isIntersecting) {
                visible.value = true;
                observer.unobserve(entry.target);
            }
        },
        { threshold: 0.15 }
    );
    if (el.value) observer.observe(el.value);
});

const translateClass = {
    up: 'translate-y-10',
    left: 'translate-x-10',
    right: '-translate-x-10',
    none: '',
};
</script>

<template>
    <div
        ref="el"
        class="transition-all duration-700 ease-out"
        :style="{ transitionDelay: `${delay}ms` }"
        :class="visible
            ? 'opacity-100 translate-y-0 translate-x-0'
            : `opacity-0 ${translateClass[direction]}`"
    >
        <slot />
    </div>
</template>
