<script setup>
import { ref, onMounted } from 'vue';

const visible = ref(true);
const fadeOut = ref(false);

onMounted(() => {
    // draw (2s) + pause (0.5s) + undraw bounce (1.5s) + pause (0.3s) + fade out
    setTimeout(() => {
        fadeOut.value = true;
        setTimeout(() => {
            visible.value = false;
        }, 800);
    }, 2800);
});
</script>

<template>
    <div
        v-if="visible"
        class="fixed inset-0 z-100 flex items-center justify-center bg-surface transition-opacity duration-800"
        :class="fadeOut ? 'opacity-0' : 'opacity-100'"
    >
        <div class="flex flex-col items-center gap-6">
            <div class="relative">
                <svg
                    width="64"
                    height="64"
                    viewBox="0 0 64 64"
                    fill="none"
                >
                    <rect width="64" height="64" rx="16" fill="#060e0a"/>
                    <path
                        d="M14 18 C14 18 19 48 23 48 C27 48 30 34 32 34 C34 34 37 48 41 48 C45 48 50 18 50 18"
                        fill="none"
                        stroke="#1D9E75"
                        stroke-width="3.2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="animate-draw-path"
                    />
                    <circle
                        cx="50"
                        cy="18"
                        r="4.5"
                        fill="#1D9E75"
                        class="animate-dot-pop"
                    />
                </svg>
            </div>
        </div>
    </div>
</template>

<style>
@keyframes draw-bounce {
    /* Draw forward */
    0% {
        stroke-dashoffset: 120;
        opacity: 0;
    }
    10% {
        opacity: 1;
    }
    45% {
        stroke-dashoffset: 0;
        opacity: 1;
    }
    /* Pause */
    55% {
        stroke-dashoffset: 0;
        opacity: 1;
    }
    /* Undraw back */
    90% {
        stroke-dashoffset: -120;
        opacity: 1;
    }
    100% {
        stroke-dashoffset: -120;
        opacity: 0;
    }
}

@keyframes dot-bounce {
    0%, 35% {
        transform: scale(0);
        opacity: 0;
    }
    45% {
        transform: scale(1.3);
        opacity: 1;
    }
    50% {
        transform: scale(1);
        opacity: 1;
    }
    /* Stay */
    55% {
        transform: scale(1);
        opacity: 1;
    }
    /* Shrink back */
    70% {
        transform: scale(1.2);
        opacity: 1;
    }
    85% {
        transform: scale(0);
        opacity: 0;
    }
    100% {
        transform: scale(0);
        opacity: 0;
    }
}

.animate-draw-path {
    stroke-dasharray: 120;
    stroke-dashoffset: 120;
    animation: draw-bounce 2.4s ease-in-out forwards;
}

.animate-dot-pop {
    transform-origin: 50px 18px;
    animation: dot-bounce 2.4s ease-in-out forwards;
}
</style>
