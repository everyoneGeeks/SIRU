<template>
    <footer class="text-white">
        <div class="overlay">
            <div class="container mx-auto items-center pt-11">
                <div class="grid md:grid-cols-4 md:gap-4 sm:gap-2 sm:grid-cols-2">
                    <div class="mb-5">
                        <h3 class="mb-6 text-sm text-white uppercase">{{ $t('The Most Prominent Categories') }}</h3>
                        <ul>
                            <li class="mb-1">
                                <a href="#"  class="text-white text-sm hover:underline ">{{ $t('Heritage') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('Geology') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('History') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('Arts') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-6 text-sm text-white uppercase">{{ $t('Help') }}</h3>
                        <ul>
                            <li class="mb-1">
                                <a href="#"  class="text-white text-sm hover:underline ">{{ $t('Privacy Policy') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('Terms and Conditions') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('Common Questions') }}</a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">{{ $t('Contact and support') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-6 text-sm text-white uppercase">{{ $t('Connect With Us') }}</h3>
                        <ul>
                            <li class="mb-1">
                                <a href="#"  class="text-white text-sm hover:underline ">
                                    <i class="fa fa-envelope mx-2" aria-hidden="true"></i> Support@siru.com
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white text-sm hover:underline ">
                                    <i class="fa fa-phone mx-2" aria-hidden="true"></i> 966111222333444
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-6 text-sm text-white uppercase">{{ $t('Follow Us Via') }}</h3>
                        <ul>
                            <li class="mb-4">
                                <p class="text-sm">{{ $t('Stay In Touch') }}</p>
                            </li>
                            <li class="mb-1">
                                <a href="#" class="text-white mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-footer-copy text-white text-sm text-center py-3">
                {{ $t('Copy Right') }} &copy;
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
