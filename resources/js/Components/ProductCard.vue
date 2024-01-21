<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    product: { type: Object },
});
</script>

<template>
    <Link :href="'/products/' + product.id">
        <div
            class="bg-white p-4 rounded-md shadow-md flex flex-col h-full justify-between cursor-pointer hover:shadow-lg transition"
        >
            <img
                :src="product.image"
                alt="Product Image"
                class="mb-4 w-full object-cover"
            />
            <h2 class="text-lg font-semibold">{{ product.name }}</h2>
            <p class="text-gray-600">{{ product.description }}</p>
            <div class="flex justify-between items-center mt-2">
                <p class="mt-2 text-green-600 font-bold">
                    €{{ Number(product.price).toFixed(2) }}
                </p>
            </div>
        </div>
    </Link>
</template>
