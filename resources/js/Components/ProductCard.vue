<script setup>
const props = defineProps({
    product: { type: Object },
});

console.log("PRODUCT", props.product);
</script>

<template>
    <div class="bg-white p-4 rounded-md shadow-md">
        <img
            :src="product.image"
            alt="Product Image"
            class="mb-4 w-full h-32 object-cover"
        />
        <h2 class="text-lg font-semibold">{{ product.name }}</h2>
        <p class="text-gray-600">{{ product.description }}</p>
        <p class="mt-2 text-green-600 font-bold">
            ${{ Number(product.price).toFixed(2) }}
        </p>
    </div>
</template>
