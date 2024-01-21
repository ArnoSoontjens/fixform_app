<script setup>
import ConditionalAuthLayout from "@/Components/ConditionalAuthLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";

const { props } = usePage();

console.log("Props overview cart:", props);
</script>

<template>
    <Head title="Shopping Cart" />
    <ConditionalAuthLayout :user="props.auth.user" header="All products">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>

            <div v-if="props.cart.length === 0" class="text-gray-600 mb-4">
                Your cart is empty.
            </div>

            <div v-else>
                <div
                    v-for="product in props.cart.products"
                    :key="product.id"
                    class="mb-4 w-full md:w-96"
                >
                    <div class="flex">
                        <div class="w-1/3">
                            <img
                                :src="product.image"
                                alt="Product Image"
                                class="w-full h-24 object-cover"
                            />
                        </div>

                        <div class="w-2/3 p-4 bg-white rounded-md shadow-md">
                            <h3 class="text-lg font-semibold mb-2">
                                {{ product.name }}
                            </h3>
                            <p class="text-gray-600 mb-2">
                                {{ product.description }}
                            </p>
                            <p class="text-green-600 font-bold">
                                ${{ Number(product.price).toFixed(2) }}
                            </p>

                            <button
                                @click="removeFromCart(product.id)"
                                class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md"
                            >
                                Remove from Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ConditionalAuthLayout>
</template>
