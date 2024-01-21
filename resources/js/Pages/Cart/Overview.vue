<script setup>
import ConditionalAuthLayout from "@/Components/ConditionalAuthLayout.vue";
import { Head, router, usePage } from "@inertiajs/vue3";

const { props } = usePage();

const removeFromCart = (id) => {
    router.delete(`/cart/remove/${id}`, {
        onSuccess: () => {
            router.visit("/cart");
        },
    });
};
</script>

<template>
    <Head title="Shopping Cart" />
    <ConditionalAuthLayout :user="props.auth.user" header="My shopping cart">
        <div class="max-w-7xl mx-auto">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div
                            v-if="props.cart.products.length === 0"
                            class="text-gray-600 mb-4 w-full"
                        >
                            <div class="p-4 bg-white rounded-md shadow-md">
                                Your cart is empty.
                            </div>
                        </div>

                        <div v-else>
                            <div
                                v-for="product in props.cart.products"
                                :key="product.id"
                                class="mb-4 w-full"
                            >
                                <div class="p-4 bg-white rounded-md shadow-md">
                                    <div class="flex">
                                        <div class="w-1/3 p-4">
                                            <img
                                                :src="product.image"
                                                alt="Product Image"
                                                class="object-cover"
                                            />
                                        </div>
                                        <div class="w-2/3">
                                            <h3
                                                class="text-lg font-semibold mb-2"
                                            >
                                                {{ product.name }}
                                            </h3>
                                            <p class="text-gray-600 mb-2">
                                                {{ product.description }}
                                            </p>
                                            <p class="text-green-600 font-bold">
                                                ${{
                                                    Number(
                                                        product.price
                                                    ).toFixed(2)
                                                }}
                                            </p>

                                            <button
                                                @click="
                                                    removeFromCart(product.id)
                                                "
                                                class="mt-2 bg-red-500 text-white px-4 py-2 rounded-md"
                                            >
                                                Remove from Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ConditionalAuthLayout>
</template>
