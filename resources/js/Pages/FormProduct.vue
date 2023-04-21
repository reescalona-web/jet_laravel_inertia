<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import NavLink from "@/Components/NavLink.vue";

export default {
    components: {
        AppLayout,
        NavLink,
    },

    data() {
        return {
            form: {
                name: null,
                description: null,
                price: null,
            },
        };
    },

    methods: {
        submit: function () {
            this.$inertia.post(route("products.store"), this.form);
        },
    },
};
</script>

<template>
    <AppLayout>
        <div class="py-12">
            <div class="flex flex-wrap gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full max-w-lg">
                    <form
                        @submit.prevent="submit"
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                    >
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="name"
                            >
                                Name
                            </label>
                            <input
                                v-model="form.name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name"
                                type="text"
                                placeholder="Name"
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="description"
                            >
                                Description
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="description"
                                v-model="form.description"
                                type="text"
                                placeholder="Description"
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-bold mb-2"
                                for="price"
                            >
                                Price
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="price"
                                v-model="form.price"
                                type="number"
                                placeholder="Price"
                            />
                        </div>
                        <div class="flex items-center justify-between">
                            <NavLink
                                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                :href="route('products.index')"
                            >
                                Cancelar
                            </NavLink>
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
