<script setup>
import Layout from '@/Layouts/Layout.vue'
import ProductCard from '@/Components/ProductCard.vue'
import { useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
    products: {
        type: Object,
        default: null,
    },
    cart: {
        type: Object,
        default: null,
    }
})
</script>

<template>
    <Layout>
        <div class="mt-16 max-w-screen-lg w-full mx-auto px-6">
            <h1 class="tracking-wider text-2xl">E-pood</h1>
                {{cart}}
            <div class="grid grid-cols-3 gap-4 mt-12">
                <ProductCard v-for="product in products.data" :key="product" :product="product" />
            </div>
        </div>
    </Layout>
</template>
