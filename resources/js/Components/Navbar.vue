<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const scrolled = ref(false);
const mobileOpen = ref(false);

function onScroll() {
    scrolled.value = window.scrollY > 50;
}

onMounted(() => window.addEventListener('scroll', onScroll));
onUnmounted(() => window.removeEventListener('scroll', onScroll));

const links = [
    { label: 'Notre histoire', href: '#story' },
    { label: 'Produits', href: '#products' },
    { label: 'Approche', href: '#approach' },
    { label: 'Contact', href: '#contact' },
];
</script>

<template>
    <nav
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
        :class="scrolled ? 'bg-surface/95 backdrop-blur-md border-b border-border' : 'bg-transparent'"
    >
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="/images/weboasis-labs-light.svg" alt="WebOasis Labs" class="h-8" />
            </a>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-8">
                <a
                    v-for="link in links"
                    :key="link.href"
                    :href="link.href"
                    class="text-sm text-text-muted hover:text-brand-dark transition-colors"
                >
                    {{ link.label }}
                </a>
                <a
                    href="#contact"
                    class="text-sm bg-brand text-white px-5 py-2 rounded-lg hover:bg-brand-dark transition-colors"
                >
                    Nous contacter
                </a>
            </div>

            <!-- Mobile hamburger -->
            <button
                class="md:hidden text-text-muted hover:text-text-primary"
                @click="mobileOpen = !mobileOpen"
                aria-label="Menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path v-if="!mobileOpen" stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/>
                    <path v-else stroke-linecap="round" d="M6 6l12 12M6 18L18 6"/>
                </svg>
            </button>
        </div>

        <!-- Mobile menu -->
        <div
            v-if="mobileOpen"
            class="md:hidden bg-surface/95 backdrop-blur-md border-t border-border px-6 pb-4"
        >
            <a
                v-for="link in links"
                :key="link.href"
                :href="link.href"
                class="block py-3 text-text-muted hover:text-brand-dark transition-colors"
                @click="mobileOpen = false"
            >
                {{ link.label }}
            </a>
            <a
                href="#contact"
                class="block mt-2 text-center bg-brand text-white px-5 py-2 rounded-lg"
                @click="mobileOpen = false"
            >
                Nous contacter
            </a>
        </div>
    </nav>
</template>
