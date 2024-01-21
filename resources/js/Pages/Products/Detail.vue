<script setup>
import ConditionalAuthLayout from "@/Components/ConditionalAuthLayout.vue";
import { Head, router, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const user = ref(null);
const { props } = usePage();

const product = props.product;
user.value = props.auth.user;

const addToCart = () => {
    router.post(`/cart/add/${product.id}`);
};
</script>

<template>
    <Head title="{{ product.name }}" />
    <ConditionalAuthLayout :user="user" :header="product.name">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="min-h-screen flex items-center justify-center bg-gray-100 bg-white"
                    >
                        <div
                            class="flex flex-col w-full max-w-screen-xl md:flex-row"
                        >
                            <div class="w-full md:w-1/2 px-4 md:px-16">
                                <img
                                    :src="product.image"
                                    alt="Product Image"
                                    class="w-full h-full object-cover"
                                />
                            </div>

                            <div class="p-8 w-full md:w-1/2">
                                <h2 class="text-2xl font-semibold mb-2">
                                    {{ product.name }}
                                </h2>
                                <p class="text-gray-600 mb-4">
                                    {{ product.description }}
                                </p>
                                <p class="text-green-600 font-bold">
                                    €{{ Number(product.price).toFixed(2) }}
                                </p>

                                <!-- Add to Cart Button -->
                                <button
                                    @click="addToCart"
                                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md"
                                >
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ConditionalAuthLayout>
</template>
