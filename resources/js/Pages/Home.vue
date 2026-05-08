<script setup>
import { Head } from '@inertiajs/vue3';
import CustomCursor from '../Components/CustomCursor.vue';
import LoadingScreen from '../Components/LoadingScreen.vue';
import Navbar from '../Components/Navbar.vue';
import HeroSection from '../Components/HeroSection.vue';
import FounderSection from '../Components/FounderSection.vue';
import StorySection from '../Components/StorySection.vue';
import ProductsSection from '../Components/ProductsSection.vue';
import ApproachSection from '../Components/ApproachSection.vue';
import TeamSection from '../Components/TeamSection.vue';
import TrustSection from '../Components/TrustSection.vue';
import ContactSection from '../Components/ContactSection.vue';
import FooterComponent from '../Components/Footer.vue';

defineProps({
    meta: Object,
});
</script>

<template>
    <Head>
        <title>{{ meta?.title ?? 'WebOasis Labs — Building products that matter' }}</title>
        <meta name="description" :content="meta?.description ?? 'Studio produit SaaS basé à Madagascar.'" />
    </Head>

    <CustomCursor />
    <LoadingScreen />
    <Navbar />
    <main>
        <HeroSection />
        <FounderSection />
        <StorySection />
        <ProductsSection />
        <ApproachSection />
        <TeamSection />
        <!-- <TrustSection /> -->
        <ContactSection />
    </main>
    <FooterComponent />
</template>
