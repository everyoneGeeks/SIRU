<template>
    <header class="header-color text-white">
        <div class="container mx-auto items-center flex">
            <div>
                <img id="logo" src="/images/site/LogoPNG2x.png" alt="Logo" title="Logo" />
            </div>

            <button id="toggle" class="xl:hidden mr-auto ml-5" @click="ToggleMenuRes">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <nav id="nav" class="fixed top-9 bottom-0 -left-full w-52 xl:w-auto xl:static transition-all md:mr-8 xl:overflow-visible xs:overflow-scroll  justify-between">
                <ul class="xl:flex">
                    <li class="mx-2">
                        <a class="block p-3" href="#">{{ $t('Home') }}</a>
                    </li>
                    <li class=" mx-2 dropdown-wrapper">
                        <a class="block p-3" href="#" @click="toggleMenu('menu1')">{{ $t('Heritage') }}</a>
                        <div id="menu1" class="menu xl:absolute hidden flex flex-col bg-white drop-shadow-md">
                            <a class="px-5 py-3 hover:hover_effect border-b border-gray-200" href="#">data</a>
                        </div>
                    </li>
                    <li class=" mx-2 dropdown-wrapper">
                        <a class="block p-3" href="#" @click="toggleMenu('menu2')">{{ $t('Geology') }}</a>
                        <div id="menu2" class="menu xl:absolute hidden flex flex-col bg-white drop-shadow-md">
                            <a class="px-5 py-3 hover:hover_effect border-b border-gray-200" href="#">data2</a>
                        </div>
                    </li>
                    <li class=" mx-2 dropdown-wrapper">
                        <a class="block p-3" href="#" @click="toggleMenu('menu3')">{{ $t('History') }}</a>
                        <div id="menu3" class="menu xl:absolute hidden flex flex-col bg-white drop-shadow-md">
                            <a class="px-5 py-3 hover:hover_effect border-b border-gray-200" href="#">data3</a>
                        </div>
                    </li>
                    <li class=" mx-2 dropdown-wrapper">
                        <a class="block p-3" href="#" @click="toggleMenu('menu4')">{{ $t('Arts') }}</a>
                        <div id="menu4" class="menu xl:absolute hidden flex flex-col bg-white drop-shadow-md">
                            <a class="px-5 py-3 hover:hover_effect border-b border-gray-200" href="#">data4</a>
                        </div>
                    </li>
                    <li class="mx-2">
                        <a class="block p-3" href="#">{{ $t('About Us') }}</a>
                    </li>
                    <li class="mx-2">
                        <a class="block p-3" href="#">{{ $t('Contact Us') }}</a>
                    </li>
                    <li class="side-buttons">
                        <ul class="xl:flex">
                            <li class="mx-2">
                                <a class="block p-3" href="#">{{ $t('Prices') }}</a>
                            </li>
                            <li class="mx-2">
                                <a class="block p-3" href="#">{{ $t('Lang') }}</a>
                            </li>
                            <li class="mx-2">
                                <button class="block align-middle mt-2  text-center p-2 font-medium leading-3 whitespace-no-wrap bg-white text-reg_color w-32 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-none">
                                    {{ $t('Login') }}
                                </button>
                            </li>
                            <li class="mx-2">
                                <button class="block align-middle mt-2  text-center p-2 font-medium leading-3 whitespace-no-wrap bg-reg_color text-white w-32 border border-reg_color rounded-md shadow-sm focus:outline-none focus:shadow-none">
                                    {{ $t('Register') }}
                                </button>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </div>
    </header>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: "Header" ,
    components: {
        Link
    },
    mounted() {
        document.addEventListener('click', this.onClick);
    },
    methods: {
        ToggleMenuRes() {
            document.getElementById("nav").classList.toggle("-left-full")
            document.getElementById("nav").classList.toggle("left-0")
        },
        toggleMenu(id) {
            var menu = document.getElementById(id);
            
            var allMenu = document.getElementsByClassName('menu');
            for (let index = 0; index < allMenu.length; index++) {
                var currID = allMenu[index].getAttribute('id');
                if(currID != id){
                    allMenu[index].classList.add('hidden');
                    console.log(allMenu[index]);
                }
            }
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        },
        onClick(event) {
            var allMenu = document.getElementsByClassName('menu');
            var dropdownWrapper = document.getElementsByClassName('dropdown-wrapper');
            for (let index = 0; index < dropdownWrapper.length; index++) {
                if (!dropdownWrapper[index].contains(event.target) && !allMenu[index].classList.contains('hidden')) {
                    allMenu[index].classList.add('hidden');
                }
            }
        }
    },
}
</script>

<style scoped>

</style>
