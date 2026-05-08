<template>
    <section id="approach" class="relative py-16 sm:py-24 px-4 sm:px-6">
        <GeoShapes variant="c" />
        <div class="relative max-w-6xl mx-auto">
            <ScrollReveal>
                <p class="text-sm font-medium text-brand uppercase tracking-wider mb-4">Notre approche</p>
                <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-6">Comment on travaille</h2>
                <p class="text-text-muted text-base sm:text-lg max-w-2xl mb-10 sm:mb-16">
                    Une stack moderne, de l'IA et une philosophie lean. On construit vite, on itère souvent, on livre du concret.
                </p>
            </ScrollReveal>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <ScrollReveal
                    v-for="(item, i) in items"
                    :key="item.title"
                    :delay="i * 100"
                >
                    <div class="rounded-xl border border-border bg-surface-card p-5 sm:p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:shadow-lg hover:shadow-brand/5 h-full">
                        <div class="w-10 h-10 rounded-lg bg-brand-light flex items-center justify-center mb-4">
                            <span class="text-lg">{{ item.emoji }}</span>
                        </div>
                        <h3 class="font-semibold text-lg text-text-primary mb-2">{{ item.title }}</h3>
                        <p class="text-text-muted text-sm">{{ item.description }}</p>
                    </div>
                </ScrollReveal>
            </div>

            <!-- Stack technique -->
            <ScrollReveal>
            <div class="rounded-xl border border-border bg-surface-card p-5 sm:p-8">
                <h3 class="font-semibold text-lg text-text-primary mb-6">Notre stack</h3>
                <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-7 gap-2 sm:gap-4">
                    <div
                        v-for="tech in stack"
                        :key="tech.name"
                        class="flex flex-col items-center gap-1.5 sm:gap-2 py-3 px-2 sm:py-4 sm:px-3 rounded-lg hover:bg-surface-alt transition-colors"
                    >
                        <img :src="tech.icon" :alt="tech.name" class="w-8 h-8 object-contain" />
                        <span class="text-xs font-medium text-text-muted">{{ tech.name }}</span>
                    </div>
                </div>
            </div>
            </ScrollReveal>
        </div>
    </section>
</template>

<script setup>
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';

const items = [
    {
        emoji: '🚀',
        title: 'Lean & rapide',
        description: 'MVP en quelques semaines, pas des mois. On valide vite, on pivote si nécessaire.',
    },
    {
        emoji: '🤖',
        title: 'AI-assisted',
        description: 'Claude, Copilot, Cursor — l\'IA accélère chaque étape, de l\'idée au déploiement.',
    },
    {
        emoji: '🔄',
        title: 'Itération continue',
        description: 'Déploiement continu, feedback terrain, amélioration permanente.',
    },
    {
        emoji: '🎨',
        title: 'Design-first',
        description: 'Chaque produit commence par l\'expérience utilisateur, pas par la technique.',
    },
    {
        emoji: '🌍',
        title: 'Pensé local',
        description: 'Adapté aux réalités du marché : connectivité, pricing, usage mobile.',
    },
    {
        emoji: '🤝',
        title: 'Open à la collaboration',
        description: 'Freelances, partenaires, investisseurs — on construit ensemble.',
    },
];

const stack = [
    { name: 'PHP', icon: '/images/stack/php.svg' },
    { name: 'JavaScript', icon: '/images/stack/javascript.svg' },
    { name: 'TypeScript', icon: '/images/stack/typescript.svg' },
    { name: 'Laravel', icon: '/images/stack/laravel.svg' },
    { name: 'Vue.js', icon: '/images/stack/vuejs.svg' },
    { name: 'React', icon: '/images/stack/react.svg' },
    { name: 'Node.js', icon: '/images/stack/nodejs.svg' },
    { name: 'WordPress', icon: '/images/stack/wordpress.svg' },
    { name: 'Tailwind', icon: '/images/stack/tailwind.svg' },
    { name: 'Inertia.js', icon: '/images/stack/inertiajs.png' },
    { name: 'MySQL', icon: '/images/stack/mysql.svg' },
    { name: 'PostgreSQL', icon: '/images/stack/postgresql.svg' },
    { name: 'Redis', icon: '/images/stack/redis.svg' },
    { name: 'Docker', icon: '/images/stack/docker.svg' },
    { name: 'Nginx', icon: '/images/stack/nginx.svg' },
    { name: 'Apache', icon: '/images/stack/apache.svg' },
    { name: 'Linux', icon: '/images/stack/linux.svg' },
    { name: 'Git', icon: '/images/stack/git.svg' },
    { name: 'GitHub', icon: '/images/stack/github.svg' },
    { name: 'Figma', icon: '/images/stack/figma.svg' },
    { name: 'Claude AI', icon: '/images/stack/claude.svg' },
];
</script>
