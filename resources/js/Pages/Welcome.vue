<template>
    <SiteLayout>
        <main class="h-screen flex items-center justify-center">
            <div class="">
                <!-- <div class="flex items-center justify-center">
                    <h6
                        class="mb-8 border border-gray-500 rounded-3xl px-7 uppercase text-xs font-bold py-2.5 w-fit"
                    >
                        Business Startup
                    </h6>
                </div> -->
                <div
                    class="text-3xl lg:text-8xl max-w-5xl text-center relative"
                    style="font-family: 'sora'"
                >
                    Guided
                    <img
                        src="/imgs/1.jpg"
                        class="h-8 w-16 lg:h-20 lg:w-40 -top-1 lg:-top-0 rounded-t-full absolute inline-block"
                        alt=""
                    />
                    <span class="ml-20 lg:ml-[180px]">by the Stars </span>
                    <span
                        class="italic font-thin"
                        style="font-family: 'Ibarra Real Nova'"
                        >Revealed</span
                    >
                    by the Cards Tarot.
                </div>
            </div>
        </main>
    </SiteLayout>
</template>

<script>
import SiteLayout from "@/Layouts/SiteLayout.vue";
export default {
    components: { SiteLayout },
};
</script>

<style></style>
