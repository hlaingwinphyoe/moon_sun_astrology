<template>
    <nav class="bg-white shadow sticky top-0">
        <div class="container mx-auto relative">
            <div class="flex justify-between items-center p-4">
                <Link href="#">
                    <img src="/Full_Black.png" class="h-10" alt="" />
                </Link>
                <button
                    class="block lg:hidden p-2 rounded active:bg-primary-100"
                    @click="showMenu"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 256 256"
                    >
                        <path
                            fill="currentColor"
                            d="M224 128a8 8 0 0 1-8 8H40a8 8 0 0 1 0-16h176a8 8 0 0 1 8 8M40 72h176a8 8 0 0 0 0-16H40a8 8 0 0 0 0 16m176 112H40a8 8 0 0 0 0 16h176a8 8 0 0 0 0-16"
                        />
                    </svg>
                </button>
                <ul
                    class="hidden lg:flex flex-col lg:flex-row items-center uppercase text-sm font-bold space-x-8"
                >
                    <li>
                        <Link href="#">Home</Link>
                    </li>
                    <li>
                        <Link href="#">Shop</Link>
                    </li>
                    <li>
                        <Link href="#">Blog</Link>
                    </li>
                    <li>
                        <Link href="#">Contact</Link>
                    </li>
                </ul>
            </div>
            <!-- mobile menu -->
            <ul v-if="show" class="absolute top-[70px] w-full bg-white shadow">
                <li class="active:bg-primary-100 p-3">
                    <Link href="#">Home</Link>
                </li>
                <li class="active:bg-primary-100 p-3">
                    <Link href="#">Shop</Link>
                </li>
                <li class="active:bg-primary-100 p-3">
                    <Link href="#">Blog</Link>
                </li>
                <li class="active:bg-primary-100 p-3">
                    <Link href="#">Contact</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import { reactive, toRefs } from "vue";

export default {
    setup() {
        const state = reactive({
            show: false,
        });

        const showMenu = () => {
            state.show = !state.show;
        };

        return {
            ...toRefs(state),
            showMenu,
        };
    },
};
</script>

<style></style>
