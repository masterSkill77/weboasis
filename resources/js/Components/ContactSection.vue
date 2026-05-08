<script setup>
import ScrollReveal from './ScrollReveal.vue';
import GeoShapes from './GeoShapes.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const page = usePage();
const successMessage = computed(() => page.props.flash?.success);

function submit() {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
}
</script>

<template>
    <section id="contact" class="relative py-16 sm:py-24 px-4 sm:px-6 bg-surface-alt">
        <GeoShapes variant="a" />
        <div class="relative max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 md:gap-16">
                <!-- Left: info -->
                <ScrollReveal direction="left">
                <div>
                    <h2 class="font-bold text-3xl sm:text-4xl text-text-primary tracking-tight mb-4">Travaillons ensemble</h2>
                    <p class="text-text-muted text-lg mb-10">
                        Vous avez un projet, une idée, une opportunité ? On est à l'écoute.
                    </p>

                    <div class="space-y-6">
                        <div>
                            <p class="text-sm text-text-muted mb-1">Email</p>
                            <a href="mailto:hello@weboasislabs.com" class="text-brand-dark hover:text-brand transition-colors font-medium">
                                hello@weboasislabs.com
                            </a>
                        </div>

                        <div class="flex gap-4">
                            <!-- GitHub -->
                            <a href="https://github.com/WebOasisLabs" target="_blank" rel="noopener" class="w-10 h-10 rounded-lg border border-border flex items-center justify-center text-text-muted hover:text-brand-dark hover:border-brand/40 transition-colors" aria-label="GitHub">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                </svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="https://linkedin.com/company/weboasis-labs" target="_blank" rel="noopener" class="w-10 h-10 rounded-lg border border-border flex items-center justify-center text-text-muted hover:text-brand-dark hover:border-brand/40 transition-colors" aria-label="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                </ScrollReveal>

                <!-- Right: form -->
                <ScrollReveal direction="right" :delay="200">
                <div>
                    <div
                        v-if="successMessage"
                        class="mb-6 p-4 rounded-lg bg-brand-light border border-brand/20 text-brand-dark text-sm"
                    >
                        {{ successMessage }}
                    </div>

                    <form @submit.prevent="submit" class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm text-text-muted mb-2">Nom</label>
                            <input
                                id="name"
                                v-model="form.name"
                                type="text"
                                required
                                class="w-full bg-surface-card border border-border rounded-lg px-4 py-3 text-text-primary placeholder-text-muted/50 focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand/20 transition-colors"
                                placeholder="Votre nom"
                            >
                            <p v-if="form.errors.name" class="mt-1 text-sm text-red-600">{{ form.errors.name }}</p>
                        </div>

                        <div>
                            <label for="email" class="block text-sm text-text-muted mb-2">Email</label>
                            <input
                                id="email"
                                v-model="form.email"
                                type="email"
                                required
                                class="w-full bg-surface-card border border-border rounded-lg px-4 py-3 text-text-primary placeholder-text-muted/50 focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand/20 transition-colors"
                                placeholder="votre@email.com"
                            >
                            <p v-if="form.errors.email" class="mt-1 text-sm text-red-600">{{ form.errors.email }}</p>
                        </div>

                        <div>
                            <label for="message" class="block text-sm text-text-muted mb-2">Message</label>
                            <textarea
                                id="message"
                                v-model="form.message"
                                required
                                rows="5"
                                class="w-full bg-surface-card border border-border rounded-lg px-4 py-3 text-text-primary placeholder-text-muted/50 focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand/20 transition-colors resize-none"
                                placeholder="Décrivez votre projet ou votre idée..."
                            ></textarea>
                            <p v-if="form.errors.message" class="mt-1 text-sm text-red-600">{{ form.errors.message }}</p>
                        </div>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="inline-flex items-center gap-2 bg-brand text-white px-7 py-3 rounded-lg hover:bg-brand-dark transition-colors font-medium disabled:opacity-50"
                        >
                            <span v-if="form.processing">Envoi en cours...</span>
                            <template v-else>
                                Envoyer
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </template>
                        </button>
                    </form>
                </div>
                </ScrollReveal>
            </div>
        </div>
    </section>
</template>
