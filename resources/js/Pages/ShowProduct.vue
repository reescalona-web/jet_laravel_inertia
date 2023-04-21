<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        AppLayout,
        Link
    },

    props: {
        product: Object,
    },
};
</script>

<template>
    <AppLayout>
        <div class="py-12">
            <div class="flex flex-wrap gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Product Card Start-->
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            {{ product.name }}
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ product.description }}
                        </p>
                        <p class="text-gray-700 text-base">
                            Price: {{ product.price }}
                        </p>
                    </div>
                    <div class="flex flex-wrap justify-end gap-2 p-4">
                        <Link
                            :href="route('products.edit', product)"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Edit
                        </Link>
                    </div>
                </div>
                <!-- Product Card End-->
            </div>
        </div>
    </AppLayout>
</template>
