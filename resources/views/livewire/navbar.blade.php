<div class="max-w-full">
    <header>
        <div id="anside-menu" class="bg-white w-9/12 sm:w-4/12 min-h-lvh h-full fixed left-0 z-40 lg:hidden shadow-xl hidden justify-start flex-col items-end">
            <svg viewBox="0 0 24 24" width="32" height="62" fill="#0000" xmlns="http://www.w3.org/2000/svg" onclick="hideMenu()">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"
                          fill="#0F1729" data-darkreader-inline-fill=""
                          style="--darkreader-inline-fill: #0c1221;"></path>
                </g>
            </svg>
            <ul class="list-none lg:flex justify-center items-start flex-col self-start">
                @foreach ($navbarCategory as $category)
                    <li class="uppercase hover:underline text-black pl-8 font-roboto font-bold shadow-2xl my-1.5"> {{$category->name}}</li>
                @endforeach
            </ul>
        </div>
        <nav class="bg-custom-black flex flex-col justify-center items-center z-30">
            <div class="sm:max-w-screen-xl w-full flex sm:justify-around justify-between items-center m-auto  min-h-9 h-full ">
                <div class="flex justify-center items-center sm:p-0 sm:m-0 mx-2.5">
                    <h1 class="text-lg text-white font-bebasNeue">EM DESENVOLVIMENTO</h1>
                </div>
                <form method="POST" action={} class="lg:max-w-xl sm:max-w-sm w-full h-full hidden justify-center justify-end items-center sm:flex "> 
                    <input type="text" placeholder="O que você esta procurando?"
                    class="w-full text-center max-h-6 h-full"
                    />
                    <button type="submit">     
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            class="p-0 m-0 relative right-5 fill-black" fill="black">
                            <path class="p-0 m-0 fill-black "
                                d="M15.7824 13.833L12.6666 10.7177C12.5259 10.5771 12.3353 10.499 12.1353 10.499H11.6259C12.4884 9.39596 13.001 8.00859 13.001 6.49937C13.001 2.90909 10.0914 0 6.50048 0C2.90959 0 0 2.90909 0 6.49937C0 10.0896 2.90959 12.9987 6.50048 12.9987C8.00996 12.9987 9.39756 12.4863 10.5008 11.6239V12.1332C10.5008 12.3332 10.5789 12.5238 10.7195 12.6644L13.8354 15.7797C14.1292 16.0734 14.6042 16.0734 14.8948 15.7797L15.7793 14.8954C16.0731 14.6017 16.0731 14.1267 15.7824 13.833ZM6.50048 10.499C4.29094 10.499 2.50018 8.71165 2.50018 6.49937C2.50018 4.29021 4.28781 2.49976 6.50048 2.49976C8.71001 2.49976 10.5008 4.28708 10.5008 6.49937C10.5008 8.70852 8.71314 10.499 6.50048 10.499Z"
                            />
                        </svg>
                    </button>
                </form>
                {{--LINKS MENU --}}
                <ul class="flex justify-center items-center sm:p-0 sm:m-0 mx-2.5">
                    <li class="px-2">
                        <a href="https://www.linkedin.com/in/cavalcantecarlosgabriel/">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.3308 0.170692H2.53197C1.67058 0.170692 0.970703 0.934103 0.970703 1.87126V22.0569C0.970703 22.994 1.67058 23.7574 2.53197 23.7574H21.3308C22.1922 23.7574 22.897 22.994 22.897 22.0569V1.87126C22.897 0.934103 22.1922 0.170692 21.3308 0.170692ZM7.59753 20.3879H4.34774V9.13155H7.60242V20.3879H7.59753ZM5.97263 7.5942C4.93016 7.5942 4.08834 6.68337 4.08834 5.56721C4.08834 4.45106 4.93016 3.54023 5.97263 3.54023C7.01022 3.54023 7.85692 4.45106 7.85692 5.56721C7.85692 6.68864 7.01511 7.5942 5.97263 7.5942ZM19.7793 20.3879H16.5295V14.9124C16.5295 13.6067 16.5051 11.9272 14.841 11.9272C13.1476 11.9272 12.8882 13.3487 12.8882 14.8176V20.3879H9.63843V9.13155H12.7561V10.6689H12.8001C13.2357 9.7844 14.2978 8.85251 15.8786 8.85251C19.1675 8.85251 19.7793 11.1849 19.7793 14.2174V20.3879Z"
                                      fill="#A7A7A7"/>
                            </svg>
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.473 3.86205C21.2208 2.40905 20.4776 1.26471 19.534 0.876356C17.8237 0.170681 10.9656 0.170681 10.9656 0.170681C10.9656 0.170681 4.10757 0.170681 2.39723 0.876356C1.45365 1.26477 0.710504 2.40905 0.458275 3.86205C0 6.49571 0 11.9906 0 11.9906C0 11.9906 0 17.4855 0.458275 20.1191C0.710504 21.5721 1.45365 22.6688 2.39723 23.0571C4.10757 23.7628 10.9656 23.7628 10.9656 23.7628C10.9656 23.7628 17.8237 23.7628 19.534 23.0571C20.4776 22.6688 21.2208 21.5721 21.473 20.1191C21.9313 17.4855 21.9313 11.9906 21.9313 11.9906C21.9313 11.9906 21.9313 6.49571 21.473 3.86205ZM8.72265 16.9795V7.00165L14.4547 11.9907L8.72265 16.9795Z"
                                      fill="#A7A7A7"/>
                            </svg>
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="">
                            <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.94 14.4081C14.3374 14.4081 17.0938 11.1813 17.0938 7.20403C17.0938 3.2268 14.3374 0 10.94 0C7.54262 0 4.78625 3.2268 4.78625 7.20403C4.78625 11.1813 7.54262 14.4081 10.94 14.4081ZM16.41 16.009H14.0553C13.1066 16.5192 12.0511 16.8094 10.94 16.8094C9.82891 16.8094 8.77764 16.5192 7.82466 16.009H5.47C2.44868 16.009 0 18.8756 0 22.4125V23.213C0 24.5387 0.918789 25.6143 2.05125 25.6143H19.8287C20.9612 25.6143 21.88 24.5387 21.88 23.213V22.4125C21.88 18.8756 19.4313 16.009 16.41 16.009Z"
                                      fill="#A7A7A7"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full flex justify-center justify-end items-center sm:hidden">
                <div class="bg-custom-gray h-full w-full justify-center items-center flex m-2.5 p-1">
                    <p class="text-custom-dark-gray">O que você esta procurando?</p>
                </div>
                <svg width="19" height="19" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                     class="p-0 m-0 relative right-7 fill-black" fill="black">
                    <path class="p-0 m-0 fill-black "
                          d="M15.7824 13.833L12.6666 10.7177C12.5259 10.5771 12.3353 10.499 12.1353 10.499H11.6259C12.4884 9.39596 13.001 8.00859 13.001 6.49937C13.001 2.90909 10.0914 0 6.50048 0C2.90959 0 0 2.90909 0 6.49937C0 10.0896 2.90959 12.9987 6.50048 12.9987C8.00996 12.9987 9.39756 12.4863 10.5008 11.6239V12.1332C10.5008 12.3332 10.5789 12.5238 10.7195 12.6644L13.8354 15.7797C14.1292 16.0734 14.6042 16.0734 14.8948 15.7797L15.7793 14.8954C16.0731 14.6017 16.0731 14.1267 15.7824 13.833ZM6.50048 10.499C4.29094 10.499 2.50018 8.71165 2.50018 6.49937C2.50018 4.29021 4.28781 2.49976 6.50048 2.49976C8.71001 2.49976 10.5008 4.28708 10.5008 6.49937C10.5008 8.70852 8.71314 10.499 6.50048 10.499Z"
                    />
                </svg>
            </div>
        </nav>
        <nav class="min-h-8 h-full w-full shadow-lg flex justify-center items-center z-30">
            <div class="sm:max-w-screen-xl w-full flex lg:justify-around justify-end items-center">

                <ul class="list-none lg:flex hidden justify-center items-start   ">
                    @foreach ($navbarCategory as $category)
                        <li class="uppercase hover:underline text-black pl-8 font-roboto font-bold shadow-2xl"> {{$category->name}}</li>
                    @endforeach
                </ul>
                <div class="lg:hidden flex flex-col p-0  relative w-full m-1.5" onclick="showMenu()">
                    <div class="w-9 h-[3px] m-[3px] bg-black"></div>
                    <div class="w-9 h-[3px] m-[3px] bg-black"></div>
                    <div class="w-9 h-[3px] m-[3px] bg-black"></div>
                </div>

            </div>
        </nav>
    </header>
</div>
<script>
    const modalMenu = document.getElementById('anside-menu');

    const showMenu = () => {
        modalMenu.classList.remove('hidden');
        modalMenu.classList.add('flex');
    }

    const hideMenu = () => {
        modalMenu.classList.remove('flex');
        modalMenu.classList.add('hidden');
    }
    
</script>
