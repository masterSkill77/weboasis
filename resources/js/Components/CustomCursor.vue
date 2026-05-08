<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const x = ref(0);
const y = ref(0);
const trailX = ref(0);
const trailY = ref(0);
const hovering = ref(false);
const clicking = ref(false);
const visible = ref(false);

let raf;

function onMove(e) {
    x.value = e.clientX;
    y.value = e.clientY;
    if (!visible.value) visible.value = true;
}

function onEnterLink() { hovering.value = true; }
function onLeaveLink() { hovering.value = false; }
function onDown() { clicking.value = true; }
function onUp() { clicking.value = false; }
function onLeave() { visible.value = false; }
function onEnter() { visible.value = true; }

function animate() {
    trailX.value += (x.value - trailX.value) * 0.15;
    trailY.value += (y.value - trailY.value) * 0.15;
    raf = requestAnimationFrame(animate);
}

function bindLinks() {
    document.querySelectorAll('a, button, [role="button"], input, textarea, select, label').forEach(el => {
        el.addEventListener('mouseenter', onEnterLink);
        el.addEventListener('mouseleave', onLeaveLink);
    });
}

let observer;

onMounted(() => {
    window.addEventListener('mousemove', onMove);
    window.addEventListener('mousedown', onDown);
    window.addEventListener('mouseup', onUp);
    document.addEventListener('mouseleave', onLeave);
    document.addEventListener('mouseenter', onEnter);
    animate();
    bindLinks();

    observer = new MutationObserver(() => bindLinks());
    observer.observe(document.body, { childList: true, subtree: true });
});

onUnmounted(() => {
    window.removeEventListener('mousemove', onMove);
    window.removeEventListener('mousedown', onDown);
    window.removeEventListener('mouseup', onUp);
    document.removeEventListener('mouseleave', onLeave);
    document.removeEventListener('mouseenter', onEnter);
    cancelAnimationFrame(raf);
    if (observer) observer.disconnect();
});
</script>

<template>
    <!-- Dot -->
    <div
        class="fixed top-0 left-0 z-[9999] pointer-events-none mix-blend-difference transition-transform duration-75"
        :class="{ 'opacity-0': !visible }"
        :style="{ transform: `translate(${x - 4}px, ${y - 4}px)` }"
    >
        <div
            class="rounded-full bg-brand transition-all duration-200"
            :class="clicking ? 'w-2 h-2' : 'w-2.5 h-2.5'"
        ></div>
    </div>

    <!-- Trail ring -->
    <div
        class="fixed top-0 left-0 z-[9998] pointer-events-none transition-opacity duration-300"
        :class="{ 'opacity-0': !visible }"
        :style="{ transform: `translate(${trailX - (hovering ? 24 : 16)}px, ${trailY - (hovering ? 24 : 16)}px)` }"
    >
        <div
            class="rounded-full border transition-all duration-300"
            :class="hovering
                ? 'w-12 h-12 border-brand/60 bg-brand/5'
                : clicking
                    ? 'w-6 h-6 border-brand/30'
                    : 'w-8 h-8 border-brand/30'"
        ></div>
    </div>
</template>
