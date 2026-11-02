<script setup>
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';
</script>

<template>
    <section id="products" class="relative py-16 sm:py-24 px-4 sm:px-6 bg-surface-alt">
        <GeoShapes variant="b" />
        <div class="relative max-w-6xl mx-auto">
            <ScrollReveal>
                <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-16">Nos produits</h2>
            </ScrollReveal>

            <div class="max-w-2xl">
                <ScrollReveal :delay="150">
                    <div class="rounded-xl border border-border bg-surface-card p-8 transition-all duration-300 hover:-translate-y-1 hover:border-brand/40 hover:shadow-lg hover:shadow-brand/5">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-10 h-10 rounded-lg bg-brand-light flex items-center justify-center">
                                <svg class="w-5 h-5 text-brand-dark" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-2xl text-text-primary">Squadly</h3>
                        </div>

                        <p class="text-text-muted mb-6">
                            Application de gestion de clubs sportifs multi-sports. Planning, membres, présences, documents — tout en un.
                        </p>

                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <span class="text-xs px-3 py-1 rounded-full bg-brand-light text-brand-dark border border-brand/20 font-medium">
                                En production
                            </span>
                            <span class="text-xs text-text-muted">Laravel · Vue.js · SaaS</span>
                        </div>

                        <a
                            href="https://squadly.weboasis-lab.com"
                            target="_blank"
                            rel="noopener"
                            class="inline-flex items-center gap-2 text-brand-dark hover:text-brand transition-colors font-medium"
                        >
                            Découvrir Squadly
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                            </svg>
                        </a>
                    </div>
                </ScrollReveal>
            </div>
        </div>
    </section>
</template>
