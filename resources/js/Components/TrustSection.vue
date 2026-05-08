<template>
    <section id="trust" class="py-24 px-6 bg-surface-alt">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-sm font-medium text-brand uppercase tracking-wider mb-4">Ils nous font confiance</p>
            <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-6">
                Des clubs et organisations nous utilisent déjà
            </h2>
            <p class="text-text-muted text-lg max-w-xl mx-auto mb-16">
                Squadly accompagne des clubs sportifs au quotidien. Voici quelques-uns de nos partenaires.
            </p>

            <!-- Placeholder logos -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                <div
                    v-for="i in 5"
                    :key="i"
                    class="h-20 rounded-xl border border-border bg-surface-card flex items-center justify-center"
                >
                    <div class="flex items-center gap-2 text-text-muted/40">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 0h.008v.008h-.008V7.5z"/>
                        </svg>
                        <span class="text-sm font-medium">Logo {{ i }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
