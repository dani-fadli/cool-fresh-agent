<!-- <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>CoolfreshAgent | Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Alpine JS CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>

<body class="scroll-smooth font-poppins">
    <div class="w-full h-screen bg-loginpattern bg-no-repeat relative bg-[center_top_-25rem]">
        <div class="">
            <img src="../../assets/coolfreshlogo.png" class="absolute left-6 top-10" alt="">
        </div>
        <div class="w-full absolute top-32 bg-white bottom-0 rounded-t-3xl shadow-lg overflow-auto">
            <div aria-label="pembungkus putih" class="px-8">
                <div class="mt-10">
                    <p class="text-md text-hitamcoolfresh opacity-50 font-medium">Hello,</p>
                    <h1 class="mt-1 text-3xl font-bold w-full leading-normal">Welcome Back! <br> To <span
                            class="text-coolfreshprimary">Coolfresh</span></h1>
                </div>
                <div class="mt-6 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-coolfreshprimary">Kode Agen</label>
                    <input id="kodeAgen" type="text" placeholder="Masukan Kode Agenmu"
                        class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-5 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
                </div>
                <div class="mt-6 flex flex-col relative" x-data="{ isVisible: false }">
                    <label for="password" class="text-xs text-coolfreshprimary">Password</label>
                    <div aria-label="Input Password With Eye Icon" class="flex w-full">
                        <input id="password" type="text" placeholder="Masukan Passwordmu"
                            class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-5 w-full focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password'">
                        <button class="-ml-10 mt-1.5 " @click="$dispatch('visibility'); isVisible = !isVisible;">
                            <div x-show="isVisible">
                                <svg class="w-6 h-6 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <div x-show="!isVisible">
                                <svg class="w-6 h-6 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <p class="text-coolfreshprimary text-xs font-semibold">Password strength</p>
                    <p class="text-red-500 text-xs font-semibold">*Weak</p>
                </div>
                <div class="mt-3 w-full">
                    <progress id="file" value="52" max="100"
                        class="h-2 !rounded-lg w-full bg-red-600"></progress>
                </div>
                <button type="submit"
                    class="w-full rounded-lg block py-5 mt-10 text-center bg-btncoolfresh text-white font-bold hover:opacity-80 hover:cursor-pointer active:bg-coolfreshprimary">Sign
                    In</button>
                <div class="mt-10 mb-6 flex justify-between">
                    <div class="flex gap-2 ">
                        <input type="checkbox" name="" id="">
                        <p class="text-textcoolfresh2 text-sm font-semibold">Ingat saya?</p>
                    </div>
                    <a href="#" class="text-sm text-textcoolfresh2 font-semibold underline">Lupa Password?</a>
                </div>
                <div class="w-full  h-7 flex justify-center items-center">
                    <div class="rounded-md h-[3px] bg-slate-950 w-2/6 "></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->
