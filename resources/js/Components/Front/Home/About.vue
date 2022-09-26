<template>
    <section class="about">
            <div class="container mx-auto items-center pt-11">
                <div class="grid md:grid-cols-2 md:gap-2 sm:gap-1 sm:grid-cols-1">
                    <div class="mb-5 relative">
                        <div class="card bg-base-100 shadow-2xl">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h4 class="text-reg_color">
                                        <i class="w-4 h-0.5 bg-reg_color tab tab-bordered cursor-pointer mx-2"></i> {{ $t('About.Welcome') }}
                                    </h4>
                                    <h1 class="card-title about mb-2">
                                        هذا النص الكبير مجرد مثال
                                    </h1>
                                    <p class="text-base">
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                    </p>
                                </div>
                                <div class="message flex">
                                    <div class="border-2 rounded-md border-color py-1 px-4 w-28 h-14 mx-4">
                                        <img src="/images/site/message.svg" class="" alt="Message" title="Message" />
                                    </div>
                                    <div>
                                        <h1 class="mb-2 text-xl">
                                            {{ $t('About.Message') }}
                                        </h1>
                                        <p class="text-sm">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                    </div>
                                </div>
                                <div class="message flex">
                                    <div class="border-2 rounded-md border-color py-1 px-4 w-28 h-14 mx-4">
                                        <img src="/images/site/vission.svg" class="" alt="Vission" title="Vission" />
                                    </div>
                                    <div>
                                        <h1 class="mb-2 text-xl">
                                            {{ $t('About.Vission') }}
                                        </h1>
                                        <p class="text-sm">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="relative">
                            <img src="/images/site/about2.png" class="" alt="About Section" title="About Section" />
                            <img src="/images/site/LogoPNG2x.png" class="absolute inset-y-1/3 inset-x-1/4	w-2/4" alt="About Section" title="About Section" />
                        </div>
                    </div>
                </div>
            </div>
    </section>
</template>

<script>
export default {
    name: "About"
}
</script>

<style scoped>

</style>
