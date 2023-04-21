<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import NavLink from "@/Components/NavLink.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        AppLayout,
        NavLink,
        Link,
    },

    data() {
        return {
            name: "Ramon",
        };
    },

    props: {
        products: String,
    },

    methods: {
        met: function () {
            alert("hola mundo");
        },
    },
};
</script>
<template>
    <AppLayout>
        <template #header>
            <div class="flex gap-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Products
                </h2>

                <Link
                    :href="route('products.create')"
                    :active="route().current('products.create')"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Add Product
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="flex flex-wrap gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Product Card Start-->
                <div
                    v-for="product in products"
                    class="max-w-sm rounded overflow-hidden shadow-lg"
                >
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ product.name }}
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ product.description }}
                        </p>
                    </div>
                    <div class="flex flex-wrap justify-end gap-2 p-4">
                        <Link
                            :href="route('products.show', product)"
                            :active="route().current('products.create')"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Details
                        </Link>
                        <Link
                            method="delete"
                            :href="route('products.destroy', product)"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Delete
                        </Link>
                    </div>
                </div>
                <!-- Product Card End-->
            </div>
        </div>
    </AppLayout>
</template>
