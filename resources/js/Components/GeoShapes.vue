<script setup>
defineProps({
    variant: { type: String, default: 'a' }, // a, b, c, d, e
});
</script>

<template>
    <!-- Variant A: Cube + ring (sections claires) -->
    <div v-if="variant === 'a'" class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- 3D Cube top-right -->
        <svg class="absolute -top-10 -right-16 w-96 h-96 sm:w-[28rem] sm:h-[28rem] sm:w-96 sm:h-96 opacity-[0.12] animate-spin-very-slow" viewBox="0 0 200 200">
            <polygon points="100,20 170,60 170,140 100,180 30,140 30,60" fill="none" stroke="#1D9E75" stroke-width="2"/>
            <line x1="100" y1="20" x2="100" y2="180" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="30" y1="60" x2="170" y2="140" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="170" y1="60" x2="30" y2="140" stroke="#1D9E75" stroke-width="1.2"/>
        </svg>
        <!-- Ring bottom-left -->
        <svg class="absolute -bottom-20 -left-20 w-96 h-96 sm:w-[28rem] sm:h-[28rem] opacity-[0.10] animate-float-geo" viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="80" fill="none" stroke="#1D9E75" stroke-width="1.5"/>
            <circle cx="100" cy="100" r="60" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <circle cx="100" cy="100" r="40" fill="none" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
    </div>

    <!-- Variant B: Isometric grid + triangle (sections alt) -->
    <div v-if="variant === 'b'" class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- 3D Triangle top-left -->
        <svg class="absolute -top-8 -left-12 w-80 h-80 sm:w-[26rem] sm:h-[26rem] opacity-[0.12] animate-float-geo-reverse" viewBox="0 0 200 200">
            <polygon points="100,10 190,170 10,170" fill="none" stroke="#1D9E75" stroke-width="1.8"/>
            <polygon points="100,50 160,150 40,150" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <polygon points="100,90 130,130 70,130" fill="none" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
        <!-- 3D Diamond bottom-right -->
        <svg class="absolute -bottom-16 -right-10 w-72 h-72 sm:w-80 sm:h-80 opacity-[0.12] animate-spin-very-slow-reverse" viewBox="0 0 200 200">
            <polygon points="100,10 190,100 100,190 10,100" fill="none" stroke="#1D9E75" stroke-width="1.8"/>
            <polygon points="100,40 160,100 100,160 40,100" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="100" y1="10" x2="100" y2="190" stroke="#1D9E75" stroke-width="0.8"/>
            <line x1="10" y1="100" x2="190" y2="100" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
    </div>

    <!-- Variant C: Hexagon grid + dots -->
    <div v-if="variant === 'c'" class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Hexagon top-right -->
        <svg class="absolute top-10 -right-20 w-80 h-80 sm:w-[26rem] sm:h-[26rem] opacity-[0.12] animate-float-geo" viewBox="0 0 200 200">
            <polygon points="100,10 173,47 173,122 100,160 27,122 27,47" fill="none" stroke="#1D9E75" stroke-width="1.8"/>
            <polygon points="100,35 150,57 150,112 100,135 50,112 50,57" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <polygon points="100,60 125,72 125,98 100,110 75,98 75,72" fill="none" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
        <!-- Cross bottom-left -->
        <svg class="absolute -bottom-10 -left-10 w-64 h-64 sm:w-72 sm:h-72 opacity-[0.10] animate-spin-very-slow" viewBox="0 0 200 200">
            <line x1="20" y1="100" x2="180" y2="100" stroke="#1D9E75" stroke-width="1.8"/>
            <line x1="100" y1="20" x2="100" y2="180" stroke="#1D9E75" stroke-width="1.8"/>
            <line x1="40" y1="40" x2="160" y2="160" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="160" y1="40" x2="40" y2="160" stroke="#1D9E75" stroke-width="1.2"/>
            <circle cx="100" cy="100" r="50" fill="none" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
    </div>

    <!-- Variant D: 3D Cube wireframe + sphere -->
    <div v-if="variant === 'd'" class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- 3D wireframe cube -->
        <svg class="absolute top-20 -right-16 w-72 h-72 sm:w-96 sm:h-96 opacity-[0.12] animate-spin-very-slow" viewBox="0 0 200 200">
            <!-- Front face -->
            <rect x="50" y="50" width="80" height="80" fill="none" stroke="#1D9E75" stroke-width="1.5"/>
            <!-- Back face -->
            <rect x="70" y="30" width="80" height="80" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <!-- Connecting lines -->
            <line x1="50" y1="50" x2="70" y2="30" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="130" y1="50" x2="150" y2="30" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="50" y1="130" x2="70" y2="110" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="130" y1="130" x2="150" y2="110" stroke="#1D9E75" stroke-width="1.2"/>
        </svg>
        <!-- Sphere wireframe bottom-left -->
        <svg class="absolute -bottom-16 -left-16 w-96 h-96 sm:w-[28rem] sm:h-[28rem] sm:w-96 sm:h-96 opacity-[0.10] animate-float-geo-reverse" viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="70" fill="none" stroke="#1D9E75" stroke-width="1.5"/>
            <ellipse cx="100" cy="100" rx="70" ry="25" fill="none" stroke="#1D9E75" stroke-width="1"/>
            <ellipse cx="100" cy="100" rx="25" ry="70" fill="none" stroke="#1D9E75" stroke-width="1"/>
            <ellipse cx="100" cy="100" rx="50" ry="70" fill="none" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
    </div>

    <!-- Variant E: Torus + pentagon -->
    <div v-if="variant === 'e'" class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Torus-like shape top-left -->
        <svg class="absolute -top-12 -left-16 w-96 h-96 sm:w-[28rem] sm:h-[28rem] sm:w-96 sm:h-96 opacity-[0.12] animate-float-geo" viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="70" fill="none" stroke="#1D9E75" stroke-width="1.5"/>
            <ellipse cx="100" cy="100" rx="70" ry="30" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <ellipse cx="100" cy="100" rx="70" ry="30" fill="none" stroke="#1D9E75" stroke-width="1" transform="rotate(60 100 100)"/>
            <ellipse cx="100" cy="100" rx="70" ry="30" fill="none" stroke="#1D9E75" stroke-width="0.8" transform="rotate(120 100 100)"/>
        </svg>
        <!-- Pentagon bottom-right -->
        <svg class="absolute -bottom-8 -right-12 w-64 h-64 sm:w-80 sm:h-80 opacity-[0.12] animate-spin-very-slow-reverse" viewBox="0 0 200 200">
            <polygon points="100,15 185,75 152,170 48,170 15,75" fill="none" stroke="#1D9E75" stroke-width="1.5"/>
            <polygon points="100,45 155,85 135,150 65,150 45,85" fill="none" stroke="#1D9E75" stroke-width="1.2"/>
            <line x1="100" y1="15" x2="100" y2="170" stroke="#1D9E75" stroke-width="0.8"/>
            <line x1="15" y1="75" x2="152" y2="170" stroke="#1D9E75" stroke-width="0.8"/>
            <line x1="185" y1="75" x2="48" y2="170" stroke="#1D9E75" stroke-width="0.8"/>
        </svg>
    </div>
</template>

<style>
@keyframes spin-very-slow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes spin-very-slow-reverse {
    from { transform: rotate(360deg); }
    to { transform: rotate(0deg); }
}

@keyframes float-geo {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-15px) scale(1.03); }
}

@keyframes float-geo-reverse {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(15px) scale(0.97); }
}

.animate-spin-very-slow {
    animation: spin-very-slow 60s linear infinite;
}

.animate-spin-very-slow-reverse {
    animation: spin-very-slow-reverse 50s linear infinite;
}

.animate-float-geo {
    animation: float-geo 10s ease-in-out infinite;
}

.animate-float-geo-reverse {
    animation: float-geo-reverse 12s ease-in-out infinite;
}
</style>
