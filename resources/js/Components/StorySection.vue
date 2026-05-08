<template>
    <section id="story" class="relative py-16 sm:py-24 px-4 sm:px-6">
        <GeoShapes variant="d" />
        <div class="relative max-w-4xl mx-auto">
            <ScrollReveal>
                <p class="text-sm font-medium text-brand uppercase tracking-wider mb-4">Notre histoire</p>
                <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-8">
                    Parti d'un constat simple
                </h2>
            </ScrollReveal>

            <div class="space-y-5 sm:space-y-6 text-text-muted text-base sm:text-lg leading-relaxed">
                <ScrollReveal :delay="100">
                    <p>
                        En 2026, depuis Antananarivo, on a fait un constat : les outils SaaS qui existent sont pensés pour San Francisco, Paris ou Londres. Pas pour Antananarivo, Dakar ou Abidjan. Trop chers, trop complexes, trop déconnectés des réalités locales.
                    </p>
                </ScrollReveal>
                <ScrollReveal :delay="200">
                    <p>
                        <span class="text-text-primary font-medium">WebOasis Labs</span> est né de cette frustration. L'idée est simple : construire des produits digitaux qui résolvent de vrais problèmes, pour des communautés qui en ont vraiment besoin — à des prix qui ont du sens.
                    </p>
                </ScrollReveal>
                <ScrollReveal :delay="300">
                    <p>
                        On a commencé par ce qu'on connaissait. Le sport amateur à Madagascar manquait cruellement d'outils de gestion. Des clubs qui gèrent encore leurs membres sur papier ou par WhatsApp. C'est comme ça que <span class="text-text-primary font-medium">Squadly</span> est né — notre premier produit, déjà en production.
                    </p>
                </ScrollReveal>
                <ScrollReveal :delay="400">
                    <p>
                        On ne cherche pas à tout révolutionner. On veut juste construire des outils <span class="text-text-primary font-medium">simples, utiles et accessibles</span>. Un produit à la fois, en restant proches du terrain.
                    </p>
                </ScrollReveal>
            </div>

            <!-- Timeline -->
            <div class="mt-12 sm:mt-16 grid sm:grid-cols-3 gap-6 sm:gap-8">
                <ScrollReveal v-for="(milestone, i) in milestones" :key="milestone.date" :delay="i * 150">
                    <div class="relative pl-5 sm:pl-6 border-l-2 border-brand/20">
                        <div class="absolute -left-[5px] top-1 w-2 h-2 rounded-full bg-brand"></div>
                        <p class="text-sm font-medium text-brand mb-1">{{ milestone.date }}</p>
                        <p class="font-semibold text-text-primary mb-1">{{ milestone.title }}</p>
                        <p class="text-sm text-text-muted">{{ milestone.description }}</p>
                    </div>
                </ScrollReveal>
            </div>
        </div>
    </section>
</template>

<script setup>
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';

const milestones = [
    {
        date: 'Début 2026',
        title: 'Création du studio',
        description: 'WebOasis Labs est co-fondé à Antananarivo avec une vision claire : des produits SaaS pour les marchés francophones.',
    },
    {
        date: 'Mi-2026',
        title: 'Lancement de Squadly',
        description: 'Notre première app de gestion de clubs sportifs entre en production. Les premiers clubs s\'inscrivent.',
    },
    {
        date: 'En cours',
        title: 'Croissance & itération',
        description: 'On améliore Squadly, on écoute les retours terrain et on prépare la suite.',
    },
];
</script>
