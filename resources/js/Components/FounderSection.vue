<script setup>
import { ref } from 'vue';
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';

const founders = [
    {
        name: 'Clairmont Rajaonarison',
        role: 'Co-fondateur, WebOasis Labs',
        photo: '/images/1714405454518.jpeg',
        quote: "J'ai grandi à Madagascar en voyant des communautés entières se débrouiller avec des outils qui n'étaient pas faits pour elles — ou pas d'outils du tout. WebOasis Labs, c'est notre réponse à ça : construire des produits simples, utiles, à des prix justes. On ne vise pas la Silicon Valley. On vise les gens autour de nous.",
    },
    {
        name: 'Tsiory Andrianarivony',
        role: 'Co-fondateur, WebOasis Labs',
        photo: 'https://ui-avatars.com/api/?name=Tsiory+Andrianarivony&size=400&background=0ea5e9&color=fff&rounded=true',
        quote: "Ce qui me motive, c'est de voir un entrepreneur local, un médecin de quartier ou une petite école rurale utiliser notre outil et gagner du temps — du vrai temps, pas des secondes. La technologie n'a de sens que si elle change concrètement la vie des gens. C'est ça, notre boussole chez WebOasis Labs.",
    },
];

const current = ref(0);
const direction = ref('right');

function goTo(index) {
    direction.value = index > current.value ? 'right' : 'left';
    current.value = index;
}

function prev() {
    goTo(current.value === 0 ? founders.length - 1 : current.value - 1);
}

function next() {
    goTo(current.value === founders.length - 1 ? 0 : current.value + 1);
}
</script>

<template>
    <section id="founder" class="relative py-16 sm:py-24 px-4 sm:px-6 bg-surface-alt overflow-hidden">
        <GeoShapes variant="a" />
        <div class="relative max-w-5xl mx-auto">
            <ScrollReveal>
                <p class="text-sm font-medium text-brand uppercase tracking-wider mb-8 sm:mb-10">Mot des co-fondateurs</p>
            </ScrollReveal>

            <!-- Slider -->
            <div class="relative">
                <Transition :name="'slide-' + direction" mode="out-in">
                    <div :key="current" class="grid md:grid-cols-5 gap-8 md:gap-12 items-center">
                        <!-- Photo -->
                        <div class="md:col-span-2 flex justify-center">
                            <img
                                :src="founders[current].photo"
                                :alt="founders[current].name"
                                class="w-48 h-48 sm:w-64 sm:h-64 md:w-full md:h-auto md:max-w-xs rounded-2xl object-cover border border-border shadow-lg"
                            />
                        </div>

                        <!-- Quote -->
                        <div class="md:col-span-3">
                            <div class="relative">
                                <svg class="absolute -top-4 -left-2 w-10 h-10 sm:w-12 sm:h-12 text-brand/10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/>
                                </svg>

                                <blockquote class="font-handwriting text-xl sm:text-2xl md:text-3xl text-text-primary leading-relaxed pl-5 sm:pl-8 border-l-2 border-brand/30">
                                    {{ founders[current].quote }}
                                </blockquote>
                            </div>

                            <div class="mt-6 sm:mt-8 flex items-center gap-4 pl-5 sm:pl-8">
                                <div>
                                    <p class="font-semibold text-text-primary">{{ founders[current].name }}</p>
                                    <p class="text-sm text-text-muted">{{ founders[current].role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </Transition>

                <!-- Navigation arrows -->
                <button
                    v-if="founders.length > 1"
                    @click="prev"
                    class="absolute -left-4 sm:-left-12 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full border border-border bg-surface text-text-muted hover:text-brand hover:border-brand transition-colors"
                    aria-label="Précédent"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button
                    v-if="founders.length > 1"
                    @click="next"
                    class="absolute -right-4 sm:-right-12 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-full border border-border bg-surface text-text-muted hover:text-brand hover:border-brand transition-colors"
                    aria-label="Suivant"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Dots -->
            <div v-if="founders.length > 1" class="flex justify-center gap-2 mt-10">
                <button
                    v-for="(_, i) in founders"
                    :key="i"
                    @click="goTo(i)"
                    class="w-2 h-2 rounded-full transition-all duration-300"
                    :class="i === current ? 'bg-brand w-6' : 'bg-border hover:bg-brand/40'"
                    :aria-label="`Slide ${i + 1}`"
                />
            </div>
        </div>
    </section>
</template>

<style scoped>
.slide-right-enter-active,
.slide-right-leave-active,
.slide-left-enter-active,
.slide-left-leave-active {
    transition: all 0.4s ease;
}

.slide-right-enter-from { opacity: 0; transform: translateX(40px); }
.slide-right-leave-to  { opacity: 0; transform: translateX(-40px); }

.slide-left-enter-from { opacity: 0; transform: translateX(-40px); }
.slide-left-leave-to  { opacity: 0; transform: translateX(40px); }
</style>
