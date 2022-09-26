<template>
    <div class="relative slide hero mb-12">
        <div class="carousel-indicators lg:flex xs:hidden absolute -right-1/3 inset-y-2/4 flex bg-yellow-100 h-24 w-full justify-center items-center">
            <ol class="z-50 flex w-4/12 justify-center">
                <li v-for="(img, i) in images" :key="i" class="w-4 h-0.5 bg-white tab tab-bordered cursor-pointer mx-2"></li>
            </ol>
        </div>
        <div class="carousel-inner relative overflow-hidden w-full">
            <div v-for="(img, i) in images" :id="`slide-${i}`" :key="i" :class="`${active === i ? 'active' : 'left-full'}`" class="carousel-item inset-0 relative w-full transform transition-all duration-500 ease-in-out">
                <img class="block w-full" :src="img" alt="First slide" />
            </div>
        </div>
        <div class="slide-content text-white text-center absolute inset-y-2/4 block justify-center items-center">
            <h1 class="text-3xl mb-5">هذا النص الكبير مجرد مثال</h1>
            <p class="text-sm">
            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
            </p>
            <button class="align-middle mt-4  text-center p-2 font-medium leading-3 whitespace-no-wrap bg-transperent text-white w-32 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-none">
                <i class="fa fa-long-arrow-left mr-2" aria-hidden="true"></i> {{ $t('Discover Now') }} 
            </button>
        </div>
        <div class="bg-overlay"></div>
    </div>
</template>

<script scoped>
export default {
    name: "Hero",
    data: () => ({
        images: [
            "/images/site/hero-1.png",
            "/images/site/hero-2.png"
        ],
        active: 0
    }),
    mounted() {
        let i = 0;
        setInterval(() => {
            if (i > this.images.length - 1) {
                i = 0;
            }
            this.active = i;
            i++;
        }, 10000);
    }
}
</script>