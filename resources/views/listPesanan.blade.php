<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>CoolfreshAgent | List Pesanan Page </title>
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
                <circle cx="6.85549" cy="6.85714" r="2.85714" fill="#024D76"/>
                <circle cx="17.1412" cy="6.85714" r="2.85714" fill="#024D76"/>
                <circle cx="6.85549" cy="17.1429" r="2.85714" fill="#024D76"/>
                <circle cx="17.1412" cy="17.1429" r="2.85714" fill="#024D76"/>
            </svg>
            <div>
                <img src={{ asset('assets/ProfilAgent/' . (Auth::user()->avatar_url ?? 'dummy.png')) }} alt=""
                     class="w-14 rounded-full"
                     alt="">
            </div>
        </div>
        <div aria-label="Title Page List Pesanan" class="w-full mt-4">
            <img src="../../assets/coolfreshlistpesanan.png" alt="" class="w-1/2 mx-auto">
            <h1 class="mt-2 text-3xl text-center font-bold">List Pesanan</h1>
            <div aria-label="breadcumb" class="w-full text-center mt-2">
                <div aria-label="breadcumb" class="text-abutulisancoolfresh">
                    <span class="opacity-50">Home / </span>
                    <span aria-label="active menu" class="text-btncoolfresh font-bold">List Pesanan</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div aria-label="pembungkus biru"
     class="w-full -z-10 bg-btncoolfresh rounded-t-lg absolute top-48 mt-10 pb-24 overflow-y-auto overflow-x-hidden h-screen before:content-icecoolfresh before:absolute before:right-0 before:bottom-0 before:scale-150 after:-z-20">
    <div class="w-11/12 mx-auto mt-8">
        @foreach($orders as $data)
            <div aria-label="card list pesanan" class="flex flex-col w-full h-1/6 bg-white rounded-lg px-8 py-4 mb-3">
                <div class="flex flex-row gap-4 items-center">
                    <img src="{{ $data->products->first()->image_url }}" class="w-14" alt="">
                    <div class="flex flex-col">
                        <p class="text-xs font-semibold text-hitamcoolfresh">{{ $data->code}}
                            @switch($data->status->slug)
                                @case('pesanan-dibuat')
                                    <span
                                        class="bg-blue-100 text-blue-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-50 dark:text-blue-500 border border-blue-400">{{ $data->status->name }}</span>
                                    @break
                                @case('pesanan-diproses')
                                    <span
                                        class="bg-green-100 text-green-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-50 dark:text-green-500 border border-green-400">{{ $data->status->name }}</span>
                                    @break
                                @case('pesanan-dikirim')
                                    <span
                                        class="bg-purple-100 text-purple-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-purple-50 dark:text-purple-500 border border-purple-400">{{ $data->status->name }}</span>
                                    @break
                                @case('retur-diajukan')
                                    <span
                                        class="bg-yellow-100 text-yellow-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-50 dark:text-yellow-500 border border-yellow-400">{{ $data->status->name }}</span>
                                    @break
                                @case('pengajuan-retur-ditolak')
                                    <span
                                        class="bg-red-100 text-red-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-50 dark:text-red-500 border border-red-400">{{ $data->status->name }}</span>
                                    @break
                                @case('retur-diproses')
                                    <span
                                        class="bg-orange-100 text-orange-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-orange-50 dark:text-orange-500 border border-orange-400">{{ $data->status->name }}</span>
                                    @break
                                @case('retur-dikirim')
                                    <span
                                        class="bg-pink-100 text-pink-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-pink-50 dark:text-pink-500 border border-pink-400">{{ $data->status->name }}</span>
                                    @break
                                @case('pesanan-selesai')
                                    <span
                                        class="bg-teal-100 text-teal-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-teal-50 dark:text-teal-500 border border-teal-400">{{ $data->status->name }}</span>
                                    @break
                                @case('pesanan-dibatalkan')
                                    <span
                                        class="bg-gray-100 text-gray-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-50 dark:text-gray-500 border border-gray-400">{{ $data->status->name }}</span>
                                    @break
                            @endswitch
                        </p>
                        <h3 class="text-lg font-bold text-btncoolfresh">{{ $data->products->first()->name}}</h3>
                        <p class="text-[0.6rem]">Tanggal pemesanan: {{ $data->created_at }}</p>
                    </div>
                </div>
                <a href="{{ url('detail-order', $data->id) }}">
                    <button type="button"
                            class="bg-langitbirucoolfresh mt-4 ml-1 mr-1 py-4 px-4 rounded-full text-white font-bold z-40">
                        Lihat Detail Pesanan
                    </button>
                </a>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.sidebar')

@include('layouts.navigation', ['active' => 'icon-order'])
</body>

</html>
