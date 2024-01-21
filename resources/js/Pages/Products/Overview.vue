<script setup>
import ProductCard from "@/Components/ProductCard.vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";

const products = ref([]);

products.value = usePage().props.products;

console.log("Products", products);
</script>

<template>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">All Products</h1>
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
</template>

<script>
export default {
    components: {
        ProductCard,
    },
    setup() {
        const products = ref([]);

        const fetchProducts = async () => {
            const response = await this.$inertia.get("/products");
            products.value = response.data;
        };

        onMounted(fetchProducts);

        return {
            products,
        };
    },
};
</script>
