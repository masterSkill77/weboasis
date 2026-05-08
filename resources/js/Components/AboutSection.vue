<template>
    <section id="about" class="py-16 sm:py-24 px-4 sm:px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-4">Qui sommes-nous ?</h2>
            <p class="text-text-muted max-w-2xl mb-16 text-lg">
                Studio indépendant fondé en 2025 à Antananarivo, Madagascar. Nous construisons des produits SaaS qui résolvent des problèmes réels pour des communautés souvent mal servies par les grandes plateformes internationales.
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div
                    v-for="value in values"
                    :key="value.title"
                    class="group rounded-xl border border-border bg-surface-card p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:shadow-lg hover:shadow-brand/5"
                >
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center mb-5 text-brand-dark">
                        <component :is="value.icon" />
                    </div>
                    <h3 class="font-semibold text-xl text-text-primary mb-2">{{ value.title }}</h3>
                    <p class="text-text-muted">{{ value.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { h } from 'vue';

const SimplicitySvg = () => h('svg', { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', 'stroke-width': '1.5', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', d: 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42' })
]);

const AccessibilitySvg = () => h('svg', { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', 'stroke-width': '1.5', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', d: 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418' })
]);

const ImpactSvg = () => h('svg', { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', 'stroke-width': '1.5', viewBox: '0 0 24 24' }, [
    h('path', { 'stroke-linecap': 'round', d: 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z' })
]);

const values = [
    {
        title: 'Simplicité',
        description: 'Des interfaces épurées que tout le monde peut utiliser.',
        icon: SimplicitySvg,
    },
    {
        title: 'Accessibilité',
        description: 'Des prix adaptés aux marchés locaux.',
        icon: AccessibilitySvg,
    },
    {
        title: 'Impact',
        description: 'Des produits qui changent le quotidien.',
        icon: ImpactSvg,
    },
];
</script>
