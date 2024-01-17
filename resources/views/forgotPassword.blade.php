<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>CoolfreshAgent | Forgot Password </title>
    <link rel="icon" href="{{ asset('assets/snowflake.ico') }}">
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
            <div class="mt-6 text-center w-full mx-auto">
                <img class="w-48 mx-auto" src="../../assets/forgotpassword_icon.png" alt="">
            </div>
            <div class="mt-2">
                <p class="text-md text-hitamcoolfresh opacity-50 font-medium">Ooops,</p>
                <h1 class="mt-1 text-[27px] font-bold w-full leading-normal">Did someone forget <br> their<span
                        class="text-coolfreshprimary"> Password</span></h1>
                <p class="text-xs font-light leading-6 opacity-50 mt-2">Gapapa kok, kamu hanya perlu memasukan
                    kembali kode agenmu untuk membantu proses pergantian password baru </p>
            </div>
            <div class="mt-6 flex flex-col">
                <label for="kodeAgen" class="text-xs text-coolfreshprimary">Kode Agen</label>
                <input id="kodeAgen" type="text" placeholder="Masukan Kode Agenmu"
                       class="px-5 focus:outline-blue-400 mt-2 rounded-md bg-inputcoolfresh border-none py-5 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
            </div>
            <button type="submit"
                    class="w-full rounded-lg block py-5 mt-8 text-center bg-btncoolfresh text-white font-bold hover:opacity-80 hover:cursor-pointer active:bg-coolfreshprimary mb-10">
                Submit
                Kode Agen
            </button>
            <div class="w-full  h-7 flex justify-center items-center">
                <div class="rounded-md h-[3px] bg-slate-950 w-2/6 "></div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
