<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>CoolfreshAgent | Pengajuan Retur Page </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Alpine JS CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>

<body class="scroll-smooth font-poppins bg-backgroundabu" x-data="{ show: false }">
    <div aria-label="container hp" class="mx-auto w-[90%]">
        <div aria-label="menu and profile">
            <div class="flex flex-row justify-between items-center mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    @click="show = !show">
                    <circle cx="6.85549" cy="6.85714" r="2.85714" fill="#024D76" />
                    <circle cx="17.1412" cy="6.85714" r="2.85714" fill="#024D76" />
                    <circle cx="6.85549" cy="17.1429" r="2.85714" fill="#024D76" />
                    <circle cx="17.1412" cy="17.1429" r="2.85714" fill="#024D76" />
                </svg>
                <div>
                    <img src="../../assets/profilemenu.png" alt="" class="w-8 rounded-full">
                </div>
            </div>
            <div aria-label="Title Page List Pesanan" class="w-full mt-4">
                <img src="../../assets/coolfreshlistpesanan.png" alt="" class="w-1/2 mx-auto">
                <h1 class="mt-2 text-3xl text-center font-bold">Pengajuan Retur</h1>
                <div aria-label="breadcumb" class="w-full text-center mt-2">
                    <div aria-label="breadcumb" class="text-abutulisancoolfresh">
                        <span class="opacity-50">Home / </span>
                        <span aria-label="active menu" class="text-btncoolfresh font-bold">Pengajuan Retur</span>
                    </div>
                </div>
            </div>
        </div>
        <div aria-label="pembungkus biru"
            class="relative w-full bg-btncoolfresh z-0 rounded-t-lg mt-8 after:content-icecoolfresh after:absolute after:right-0 after:bottom-0 after:scale-110 after:z-10">
            <div class="w-11/12 mx-auto mt-8 px-5 pb-6 pt-3">
                <div class="mt-6 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-white">Nomor Transaksi</label>
                    <input id="kodeAgen" type="text" placeholder="Masukan Kode Agenmu"
                        class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-5 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
                </div>
                <div class="mt-4 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-white">Keterangan Retur</label>
                    <textarea id="kodeAgen" type="text" placeholder="Masukan Keterangan Retur"
                        class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 pt-5 pb-10 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light"></textarea>
                </div>
                <div class="mt-4 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-white">Keterangan Retur</label>
                    <input id="kodeAgen" type="file" placeholder="Masukan Kode Agenmu"
                        class="z-30 mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-12 focus:outline-blue-400
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-btncoolfresh file:text-white
                              file:opacity-100
                              hover:file:bg-violet-100">
                </div>
            </div>
        </div>
        <button aria-label="button logout"
            class="w-full mt-6 mb-24 py-4 bg-langitbirucoolfresh text-center cursor-pointer z-40 rounded-md">
            <div class="flex justify-center gap-4 items-center">
                <p class="text-white font-medium text-xs">Submit Pengajuan Retur</p>
            </div>
        </button>
    </div>
    <div aria-label="menu sidebar" class="z-[70]">
        <div aria-label="overlay background black" class="w-screen h-screen bg-black opacity-30 fixed top-0 left-0"
            x-show="show" x-transition.duration.10ms.origin.top.left></div>
        <div aria-label="sidebar menu" class="w-3/4 bg-white h-full fixed top-0 left-0 shadow-lg" x-show="show"
            x-transition.duration.700ms.opacity.origin.top.left>
            <div aria aria-label="Pembungkus menu" class="w-11/12 mx-auto">
                <div class="flex flex-row justify-between items-start mt-6 px-3">
                    <div aria-label="profile and name" class="flex flex-row gap-4">
                        <img src="../../assets/Ovalprofil.png" alt="" class="w-12 rounded-full">
                        <div class="flex flex-col">
                            <h1 class="text-coolfreshprimary font-semibold text-base">Adriansyah</h1>
                            <h3 class="text-xs opacity-70 text-coolfreshprimary">Coolfresh Agent</h3>
                        </div>
                    </div>
                    <svg @click="show = !show" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                        viewBox="0 0 27 27" fill="none">
                        <path
                            d="M13.2799 2.23511C6.9053 2.23511 1.83832 7.30209 1.83832 13.6767C1.83832 20.0513 6.9053 25.1183 13.2799 25.1183C19.6545 25.1183 24.7215 20.0513 24.7215 13.6767C24.7215 7.30209 19.6545 2.23511 13.2799 2.23511ZM17.6931 19.3975L13.2799 14.9843L8.86672 19.3975L7.55911 18.0899L11.9723 13.6767L7.55911 9.26351L8.86672 7.9559L13.2799 12.3691L17.6931 7.9559L19.0007 9.26351L14.5875 13.6767L19.0007 18.0899L17.6931 19.3975Z"
                            fill="#061373" />
                    </svg>
                </div>
                <ul aria-label="menu coolfresh" class="flex flex-col mt-14 ml-4 gap-6">
                    <li>
                        <div class="flex flex-row gap-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 17 17" fill="none">
                                <path
                                    d="M11.5498 16.0458V13.536C11.5498 12.2365 10.3619 11.183 9.06242 11.183H8.70388C7.40438 11.183 6.21648 12.2365 6.21648 13.536V16.0458C6.21648 16.2108 6.24479 16.3692 6.29681 16.5164H5.11845C3.81895 16.5164 2.76551 15.4629 2.76551 14.1634V6.96519L1.66363 7.92933C1.46803 8.10048 1.17073 8.08066 0.999589 7.88507C0.828445 7.68947 0.848265 7.39217 1.04386 7.22103L8.57326 0.632792C8.75069 0.477546 9.01561 0.477546 9.19303 0.632792L16.7224 7.22103C16.918 7.39217 16.9379 7.68947 16.7667 7.88507C16.5956 8.08066 16.2983 8.10048 16.1027 7.92933L15.0008 6.96519V14.1634C15.0008 15.4629 13.9473 16.5164 12.6479 16.5164H11.4695C11.5215 16.3692 11.5498 16.2108 11.5498 16.0458Z"
                                    fill="#024D76" />
                            </svg>
                            <p class="text-base text-hitamcoolfresh font-semibold mt-0.5">Halaman Beranda</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row gap-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <path
                                    d="M12.7596 0.851986C12.9047 0.865019 12.9682 1.04226 12.8639 1.14566L5.63507 8.37449C5.5534 8.4562 5.49493 8.55815 5.46564 8.6699L4.59679 11.9976C4.56811 12.1076 4.56869 12.2231 4.59847 12.3328C4.62825 12.4425 4.6862 12.5425 4.76656 12.6228C4.84692 12.7032 4.9469 12.7611 5.05658 12.7909C5.16626 12.8207 5.28182 12.8213 5.39179 12.7926L8.71861 11.9237C8.83044 11.8942 8.93239 11.8354 9.01402 11.7534L16.3454 4.42209C16.3683 4.39854 16.3975 4.38206 16.4295 4.37459C16.4615 4.36713 16.495 4.36899 16.526 4.37996C16.557 4.39093 16.5842 4.41054 16.6044 4.43649C16.6246 4.46243 16.6369 4.49362 16.6399 4.52635C16.9449 7.43668 16.9274 10.3718 16.5878 13.2783C16.394 14.9334 15.0638 16.2324 13.4147 16.4174C10.3943 16.7523 7.34614 16.7523 4.32571 16.4174C2.67576 16.2324 1.34555 14.9334 1.1518 13.2783C0.793598 10.2156 0.793598 7.1216 1.1518 4.05891C1.34555 2.40288 2.67576 1.10395 4.32571 0.919757C7.12733 0.609279 9.95339 0.586571 12.7596 0.851986Z"
                                    fill="#024D76" />
                                <path
                                    d="M13.9291 1.92319C13.9493 1.90296 13.9732 1.88691 13.9996 1.87596C14.026 1.86501 14.0543 1.85938 14.0829 1.85938C14.1115 1.85938 14.1398 1.86501 14.1661 1.87596C14.1925 1.88691 14.2165 1.90296 14.2367 1.92319L15.4652 3.15261C15.5058 3.19333 15.5286 3.24847 15.5286 3.30596C15.5286 3.36345 15.5058 3.4186 15.4652 3.45932L8.25986 10.6664C8.23238 10.6936 8.19822 10.7131 8.16081 10.7229L6.49783 11.1573C6.46117 11.1669 6.42265 11.1667 6.38609 11.1568C6.34953 11.1468 6.31621 11.1275 6.28942 11.1007C6.26263 11.0739 6.24332 11.0406 6.23339 11.0041C6.22346 10.9675 6.22327 10.929 6.23283 10.8923L6.66726 9.22935C6.67692 9.19189 6.69642 9.1577 6.72373 9.1303L13.9291 1.92319Z"
                                    fill="#024D76" />
                            </svg>
                            <p class="text-base text-hitamcoolfresh font-semibold mt-0.5">Edit Profil Pribadi</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row gap-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <path
                                    d="M0.903123 0.830688V2.82819H16.8831V0.830688H0.903123ZM0.903123 4.82569V16.6309C0.903123 16.7308 0.983023 16.8107 1.0829 16.8107H16.6834C16.7833 16.8107 16.8632 16.7308 16.8632 16.6309V4.82569H10.9306V6.88312H6.87566V4.82569H0.883148H0.903123Z"
                                    fill="#024D76" />
                            </svg>
                            <p class="text-base text-hitamcoolfresh font-semibold mt-0.5">List Pesanan</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row gap-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                viewBox="0 0 17 16" fill="none">
                                <path
                                    d="M7.20879 5.14532L7.65418 6.75653C8.07363 8.27434 8.28293 9.03368 8.89956 9.37875C9.5162 9.72469 10.2989 9.52059 11.8643 9.11411L13.5248 8.68168C15.0901 8.27521 15.8728 8.07197 16.2291 7.47436C16.5855 6.87588 16.3762 6.11655 15.9558 4.59874L15.5113 2.9884C15.0919 1.46972 14.8817 0.710389 14.2659 0.365315C13.6484 0.0193767 12.8657 0.223481 11.3004 0.630823L9.63987 1.06152C8.0745 1.468 7.29181 1.6721 6.93636 2.27057C6.58004 2.86818 6.78934 3.62752 7.20879 5.14532Z"
                                    fill="#024D76" />
                                <path
                                    d="M0.906662 2.13309C0.929447 2.05095 0.9682 1.9741 1.0207 1.90695C1.07321 1.8398 1.13843 1.78365 1.21265 1.74173C1.28687 1.6998 1.36862 1.67291 1.45323 1.6626C1.53785 1.65229 1.62367 1.65876 1.70578 1.68163L3.17861 2.08984C3.56895 2.19585 3.92517 2.40119 4.21254 2.68583C4.49991 2.97047 4.70863 3.32471 4.81836 3.71403L6.67865 10.4477L6.8153 10.9208C7.36686 11.1241 7.83165 11.511 8.13159 12.0166L8.39969 11.9335L16.0709 9.94006C16.1533 9.91859 16.2392 9.91358 16.3236 9.9253C16.408 9.93702 16.4893 9.96525 16.5627 10.0084C16.6362 10.0515 16.7005 10.1087 16.7519 10.1766C16.8033 10.2446 16.8408 10.322 16.8622 10.4045C16.8837 10.4869 16.8887 10.5728 16.877 10.6572C16.8653 10.7416 16.837 10.8229 16.7939 10.8963C16.7508 10.9698 16.6936 11.0341 16.6256 11.0855C16.5577 11.1369 16.4803 11.1743 16.3978 11.1958L8.75515 13.1815L8.46975 13.2697C8.46456 14.3681 7.70609 15.373 6.55844 15.6705C5.18333 16.0286 3.7693 15.2364 3.40088 13.9028C3.03245 12.5683 3.84887 11.1967 5.22398 10.8395C5.29173 10.822 5.3601 10.807 5.42895 10.7945L3.5678 4.0591C3.51769 3.88605 3.42366 3.72892 3.29484 3.60298C3.16603 3.47705 3.00681 3.38659 2.83268 3.34041L1.35898 2.93134C1.27685 2.90864 1.20001 2.86998 1.13283 2.81758C1.06565 2.76517 1.00945 2.70004 0.967448 2.62592C0.925444 2.55179 0.898456 2.47011 0.888026 2.38555C0.877597 2.30099 0.883929 2.2152 0.906662 2.13309Z"
                                    fill="#024D76" />
                            </svg>
                            <p class="text-base text-hitamcoolfresh font-semibold mt-0.5">Pengajuan Retur</p>
                        </div>
                    </li>
                </ul>
                <button aria-label="buton logout menu sidebar"
                    class="ml-4 bg-btncoolfresh py-2 px-6 rounded-lg text-white mt-52">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 17 17"
                            fill="none">
                            <path
                                d="M0.9375 16.6569V0.65686H8.9375V2.43464H2.71528V14.8791H8.9375V16.6569H0.9375ZM12.4931 13.1013L11.2708 11.8124L13.5375 9.54575H6.27083V7.76797H13.5375L11.2708 5.5013L12.4931 4.21242L16.9375 8.65686L12.4931 13.1013Z"
                                fill="white" />
                        </svg>
                        Logout
                    </div>
                </button>
            </div>
        </div>
    </div>

    @include('layouts.navigation', ['active' => 'icon-return'])
</body>

</html>
