<script setup>
import ConditionalAuthLayout from "@/Components/ConditionalAuthLayout.vue";
import ProductCard from "@/Components/ProductCard.vue";
import { Head, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
});

const products = ref([]);
const cart = ref(null);

const { props } = usePage();

products.value = props.products;
cart.value = props.cart;
</script>

<template>
    <Head title="All products" />
    <ConditionalAuthLayout :user="props.auth.user" header="All products">
        <div class="max-w-7xl mx-auto">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
                        >
                            <ProductCard
                                v-for="product in products"
                                :key="product.id"
                                :product="product"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ConditionalAuthLayout>
</template>
