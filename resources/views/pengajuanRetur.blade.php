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

<form method="POST" enctype="multipart/form-data" action={{ url('create-return') }}>
    @csrf
    <div aria-label="container hp" class="mx-auto w-[90%]">
        <div aria-label="menu and profile">
            <div class="flex flex-row justify-between items-center mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     @click="show = !show">
                    <circle cx="6.85549" cy="6.85714" r="2.85714" fill="#024D76"/>
                    <circle cx="17.1412" cy="6.85714" r="2.85714" fill="#024D76"/>
                    <circle cx="6.85549" cy="17.1429" r="2.85714" fill="#024D76"/>
                    <circle cx="17.1412" cy="17.1429" r="2.85714" fill="#024D76"/>
                </svg>
                <div>
                    <img src={{ Auth::user()->avatar_url }} alt="" class="w-8 rounded-full">
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
                    <input name="code" id="kodeAgen" type="text" placeholder="Masukan Nomor Transaksi"
                           value="{{ old('code') }}" required
                           class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-5 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">
                    @error('code')
                    <p class="text-red-500 text-xs italic">{{ $errors->first('code') }}</p>
                    @enderror
                </div>
                <div class="mt-4 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-white">Keterangan Retur</label>
                    <textarea name="description" id="kodeAgen" type="text" placeholder="Masukan Keterangan Retur"
                              required
                              class="mt-2 rounded-md bg-inputcoolfresh border-none px-5 pt-5 pb-10 focus:outline-blue-400 placeholder:text-slate-300 placeholder:text-sm placeholder:font-light">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs italic">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <div class="mt-4 flex flex-col">
                    <label for="kodeAgen" class="text-xs text-white">Bukti Pengajuan Retur</label>
                    <input name="image" id="kodeAgen" type="file" placeholder="Masukan Kode Agenmu" required
                           class="z-30 mt-2 rounded-md bg-inputcoolfresh border-none px-5 py-12 focus:outline-blue-400
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-btncoolfresh file:text-white
                              file:opacity-100
                              hover:file:bg-violet-100">
                    @error('image')
                    <p class="text-red-500 text-xs italic">{{ $errors->first('image') }}</p>
                    @enderror
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
</form>

@include('layouts.sidebar')

@include('layouts.navigation', ['active' => 'icon-return'])
</body>

</html>
