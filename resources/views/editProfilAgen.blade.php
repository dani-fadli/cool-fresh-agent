<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>CoolfreshAgent | Edit Profil Agen </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Alpine JS CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
</head>
<body class="scroll-smooth font-poppins bg-white">
      <div aria-label="container hp" class="mx-auto w-full overflow-auto h-fit mb-24">
            <div aria-label="Bar Edit Profil Atas" class="w-full bg-btncoolfresh relative py-4 px-4">
                  <div class="flex justify-between items-center">
                        <div class="flex flex-row gap-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 18L6 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18 6L5.99994 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <p class="text-white font-semibold">Edit Profil</p>
                        </div>
                        <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M7 14L11.9497 18.9498L21.8492 9.05029" stroke="white" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </div>
                  </div>
            </div>
            <div class="relative mt-8 w-fit mx-auto">
                  <img class="rounded-full mx-auto" src="../../assets/Ovalprofil.png" alt="">
                  <img src="../../assets/icontambahprofil.png" alt="" class="w-12 absolute right-2 bottom-0">
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Nama</label>
                  <input id="kodeAgen" type="text" placeholder="Masukan Namamu" class="px-5 focus:outline-blue-400 mt-2 rounded-md bg-inputcoolfresh border-none py-5 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Nomor Telepon</label>
                  <input id="kodeAgen" type="text" placeholder="Masukan Namamu" class="px-5 focus:outline-blue-400 mt-2 rounded-md bg-inputcoolfresh border-none py-5 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Nama Perusahaan</label>
                  <input id="kodeAgen" type="text" placeholder="Masukan Namamu" class="px-5 focus:outline-blue-400 mt-2 rounded-md bg-inputcoolfresh border-none py-5 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Email</label>
                  <input id="kodeAgen" type="text" placeholder="Masukan Namamu" class="px-5 focus:outline-blue-400 mt-2 rounded-md bg-inputcoolfresh border-none py-5 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Alamat Perusahaan</label>
                  <textarea id="kodeAgen" type="text" placeholder="Masukan Keterangan Retur" class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 pt-5 pb-10 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light"></textarea>
            </div>
            <div class="mt-6 flex flex-col w-5/6 mx-auto">
                  <label for="kodeAgen" class="text-xs text-hitamcoolfresh font-semibold">Upload Gambar Profil</label>
                  <input id="kodeAgen" type="file" placeholder="Masukan Kode Agenmu" class="z-30 mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-12 focus:outline-blue-400
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-btncoolfresh file:text-white
                  file:opacity-100
                  hover:file:bg-violet-100">
            </div>
      </div>
      @include('layouts.navigation', ['active' => 'icon-profile'])
</body>
</html>
