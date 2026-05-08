<script setup>
import { ref, onMounted } from 'vue';

const visible = ref(false);
onMounted(() => {
    requestAnimationFrame(() => { visible.value = true; });
});
</script>

<template>
    <section
        id="hero"
        class="relative min-h-screen flex items-center justify-center overflow-hidden"
    >
        <!-- Animated grid background -->
        <div class="absolute inset-0 hero-grid"></div>

        <!-- Floating orbs -->
        <div class="absolute top-1/4 left-1/4 w-72 h-72 rounded-full bg-brand/5 blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 rounded-full bg-brand-light/30 blur-3xl animate-float-medium"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] rounded-full bg-brand/3 blur-3xl animate-pulse-slow"></div>

        <!-- Moving particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
            <div class="particle particle-6"></div>
            <div class="particle particle-7"></div>
            <div class="particle particle-8"></div>
            <div class="particle particle-9"></div>
            <div class="particle particle-10"></div>
            <div class="particle particle-11"></div>
            <div class="particle particle-12"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center"
        >
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-light border border-brand/20 text-brand-dark text-sm font-medium mb-8 transition-all duration-700 delay-300"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
            >
                <span class="w-2 h-2 rounded-full bg-brand animate-pulse"></span>
                Votre partenaire produit SaaS
            </div>

            <h1
                class="font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-text-primary leading-[1.1] tracking-tight mb-6 transition-all duration-1000 delay-500"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            >
                On construit des produits<br>
                <span class="text-brand">qui comptent.</span>
            </h1>

            <p
                class="text-lg sm:text-xl text-text-muted max-w-2xl mx-auto mb-10 transition-all duration-1000 delay-700"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            >
                Des outils simples, accessibles et pensés pour les marchés francophones et africains. Pas des copies — des solutions qui partent du terrain.
            </p>

            <div
                class="flex flex-col sm:flex-row gap-4 justify-center transition-all duration-1000 delay-900"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            >
                <a
                    href="#products"
                    class="inline-flex items-center justify-center gap-2 bg-brand text-white px-7 py-3.5 rounded-lg hover:bg-brand-dark hover:shadow-lg hover:shadow-brand/20 transition-all font-medium text-base"
                >
                    Découvrir nos produits
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a
                    href="#contact"
                    class="inline-flex items-center justify-center gap-2 border border-border text-text-primary px-7 py-3.5 rounded-lg hover:border-brand hover:text-brand transition-all font-medium text-base"
                >
                    Nous contacter
                </a>
            </div>

            <!-- Stats -->
            <div
                class="mt-12 sm:mt-16 pt-8 sm:pt-10 border-t border-border flex justify-center gap-8 sm:gap-20 transition-all duration-1000 delay-1100"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            >
                <div>
                    <p class="text-2xl sm:text-3xl font-bold text-text-primary">1</p>
                    <p class="text-sm text-text-muted mt-1">Produit en prod</p>
                </div>
                <div>
                    <p class="text-2xl sm:text-3xl font-bold text-text-primary">2026</p>
                    <p class="text-sm text-text-muted mt-1">Année de lancement</p>
                </div>
                <div>
                    <p class="text-2xl sm:text-3xl font-bold text-brand">100%</p>
                    <p class="text-sm text-text-muted mt-1">Bootstrapped</p>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
/* Animated grid */
.hero-grid {
    background-image:
        linear-gradient(rgba(29,158,117,0.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(29,158,117,0.06) 1px, transparent 1px);
    background-size: 40px 40px;
    animation: grid-drift 20s linear infinite;
}

@keyframes grid-drift {
    0% { background-position: 0 0; }
    100% { background-position: 40px 40px; }
}

/* Floating orbs */
@keyframes float-slow {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -20px) scale(1.05); }
    66% { transform: translate(-20px, 15px) scale(0.95); }
}

@keyframes float-medium {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(-25px, 20px) scale(1.08); }
    50% { transform: translate(15px, -30px) scale(0.95); }
    75% { transform: translate(20px, 10px) scale(1.02); }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; transform: translate(-50%, -50%) scale(1); }
    50% { opacity: 0.5; transform: translate(-50%, -50%) scale(1.1); }
}

.animate-float-slow {
    animation: float-slow 15s ease-in-out infinite;
}

.animate-float-medium {
    animation: float-medium 12s ease-in-out infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}

/* Particles */
.particle {
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(29, 158, 117, 0.4);
    box-shadow: 0 0 6px rgba(29, 158, 117, 0.3);
}

@keyframes drift-up {
    0% { transform: translateY(100vh) translateX(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-20px) translateX(40px); opacity: 0; }
}

@keyframes drift-up-left {
    0% { transform: translateY(100vh) translateX(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-20px) translateX(-35px); opacity: 0; }
}

.particle-1 {
    left: 5%;
    width: 10px; height: 10px;
    animation: drift-up 13s ease-in infinite;
}
.particle-2 {
    left: 15%;
    width: 6px; height: 6px;
    animation: drift-up-left 17s ease-in infinite 2s;
}
.particle-3 {
    left: 25%;
    width: 12px; height: 12px;
    animation: drift-up 15s ease-in infinite 5s;
}
.particle-4 {
    left: 35%;
    width: 7px; height: 7px;
    animation: drift-up-left 19s ease-in infinite 1s;
}
.particle-5 {
    left: 45%;
    width: 9px; height: 9px;
    animation: drift-up 14s ease-in infinite 7s;
}
.particle-6 {
    left: 55%;
    width: 11px; height: 11px;
    animation: drift-up-left 16s ease-in infinite 4s;
}
.particle-7 {
    left: 65%;
    width: 6px; height: 6px;
    animation: drift-up 18s ease-in infinite 3s;
}
.particle-8 {
    left: 72%;
    width: 10px; height: 10px;
    animation: drift-up-left 14s ease-in infinite 6s;
}
.particle-9 {
    left: 80%;
    width: 8px; height: 8px;
    animation: drift-up 20s ease-in infinite 1.5s;
}
.particle-10 {
    left: 88%;
    width: 13px; height: 13px;
    animation: drift-up-left 15s ease-in infinite 8s;
}
.particle-11 {
    left: 50%;
    width: 7px; height: 7px;
    animation: drift-up 12s ease-in infinite 9s;
}
.particle-12 {
    left: 95%;
    width: 9px; height: 9px;
    animation: drift-up-left 17s ease-in infinite 0.5s;
}
</style>
