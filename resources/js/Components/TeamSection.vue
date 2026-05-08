<template>
    <section id="team" class="relative py-16 sm:py-24 px-4 sm:px-6 bg-surface-alt">
        <GeoShapes variant="e" />
        <div class="relative max-w-6xl mx-auto">
            <ScrollReveal>
                <p class="text-sm font-medium text-brand uppercase tracking-wider mb-4">L'équipe</p>
                <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-6">
                    Les gens derrière les produits
                </h2>
                <p class="text-text-muted text-base sm:text-lg max-w-2xl mb-10 sm:mb-16">
                    Une équipe resserrée, complémentaire et passionnée. Chacun apporte son expertise pour construire des produits qui comptent.
                </p>
            </ScrollReveal>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <ScrollReveal
                    v-for="(member, i) in members"
                    :key="member.name"
                    :delay="i * 100"
                >
                <div class="rounded-xl border border-border bg-surface-card p-4 sm:p-6 text-center transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:shadow-lg hover:shadow-brand/5"
                >
                    <div class="w-20 h-20 mx-auto rounded-full bg-brand-light flex items-center justify-center mb-4">
                        <span class="text-brand-dark font-bold text-xl">{{ member.initials }}</span>
                    </div>
                    <h3 class="font-semibold text-text-primary mb-1">{{ member.name }}</h3>
                    <p class="text-sm text-brand font-medium mb-2">{{ member.role }}</p>
                    <p class="text-xs text-text-muted">{{ member.bio }}</p>
                </div>
                </ScrollReveal>
            </div>
        </div>
    </section>
</template>

<script setup>
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';

const members = [
    {
        name: 'Clairmont R.',
        initials: 'CR',
        role: 'Co-fondateur & Produit',
        bio: 'Vision produit, stratégie et développement.',
    },
    {
        name: 'Membre 2',
        initials: 'M2',
        role: 'Co-fondateur & Tech',
        bio: 'Architecture technique et infrastructure.',
    },
    {
        name: 'Membre 3',
        initials: 'M3',
        role: 'Développeur Full-Stack',
        bio: 'Laravel, Vue.js et intégrations.',
    },
    {
        name: 'Membre 4',
        initials: 'M4',
        role: 'Designer UI/UX',
        bio: 'Interfaces, branding et expérience utilisateur.',
    },
];
</script>
