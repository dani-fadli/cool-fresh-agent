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
      <div aria-label="menu bawah" class="w-full fixed bottom-0 py-6 bg-white shadow-lg z-50">
            <div class="flex flex-row justify-evenly gap-10 items-center">
                  <div aria-label="icon-home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                              <path d="M13.96 19.8871V16.7248C13.96 15.0874 12.4633 13.7601 10.8259 13.7601H10.3741C8.73678 13.7601 7.24002 15.0874 7.24002 16.7248V19.8871C7.24002 20.095 7.27569 20.2946 7.34124 20.4801H5.85649C4.21913 20.4801 2.89179 19.1527 2.89179 17.5154V8.4456L1.50342 9.66042C1.25697 9.87606 0.882377 9.85109 0.666735 9.60464C0.451093 9.35819 0.476066 8.98359 0.722514 8.76795L10.2096 0.466776C10.4331 0.271166 10.7669 0.271166 10.9905 0.466776L20.4775 8.76795C20.724 8.98359 20.7489 9.35819 20.5333 9.60464C20.3177 9.85109 19.9431 9.87606 19.6966 9.66042L18.3082 8.4456V17.5154C18.3082 19.1527 16.9809 20.4801 15.3435 20.4801H13.8588C13.9244 20.2946 13.96 20.095 13.96 19.8871Z" fill="#B2B9C2"/>
                        </svg>
                  </div>
                  <div aria-label="icon-home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                              <path d="M15.7288 0.897716C15.9102 0.914007 15.9894 1.13556 15.8591 1.26481L6.82308 10.3008C6.721 10.403 6.64791 10.5304 6.61129 10.6701L5.52523 14.8297C5.48938 14.9672 5.4901 15.1116 5.52733 15.2487C5.56455 15.3858 5.63699 15.5108 5.73744 15.6113C5.83789 15.7117 5.96287 15.7842 6.09997 15.8214C6.23707 15.8586 6.38152 15.8593 6.51898 15.8235L10.6775 14.7374C10.8173 14.7004 10.9447 14.627 11.0468 14.5245L20.211 5.36035C20.2396 5.33091 20.2761 5.31031 20.3162 5.30097C20.3562 5.29164 20.398 5.29397 20.4368 5.30768C20.4755 5.32139 20.5095 5.34591 20.5347 5.37834C20.56 5.41078 20.5754 5.44976 20.5791 5.49067C20.9604 9.12858 20.9386 12.7975 20.514 16.4306C20.2718 18.4995 18.609 20.1232 16.5477 20.3545C12.7721 20.7731 8.96191 20.7731 5.18638 20.3545C3.12395 20.1232 1.46119 18.4995 1.21899 16.4306C0.77124 12.6022 0.77124 8.73473 1.21899 4.90637C1.46119 2.83634 3.12395 1.21267 5.18638 0.982429C8.68841 0.594332 12.221 0.565947 15.7288 0.897716Z" fill="#B2B9C2"/>
                              <path d="M17.1907 2.23651C17.2159 2.21122 17.2458 2.19116 17.2788 2.17747C17.3118 2.16378 17.3472 2.15674 17.3829 2.15674C17.4186 2.15674 17.454 2.16378 17.487 2.17747C17.5199 2.19116 17.5499 2.21122 17.5751 2.23651L19.1108 3.77328C19.1615 3.82418 19.19 3.89311 19.19 3.96497C19.19 4.03684 19.1615 4.10577 19.1108 4.15666L10.1041 13.1656C10.0698 13.1996 10.027 13.2239 9.98028 13.2361L7.90156 13.7792C7.85574 13.7911 7.80759 13.7909 7.76189 13.7785C7.71619 13.7661 7.67453 13.7419 7.64105 13.7084C7.60756 13.675 7.58342 13.6333 7.57101 13.5876C7.5586 13.5419 7.55836 13.4937 7.57031 13.4479L8.11334 11.3692C8.12543 11.3224 8.1498 11.2796 8.18394 11.2454L17.1907 2.23651Z" fill="#B2B9C2"/>
                        </svg>
                  </div>
                  <div aria-label="icon-home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <path d="M0.019975 0V1.9975H16V0H0.019975ZM0.019975 3.99501V15.8002C0.019975 15.9001 0.0998752 15.98 0.19975 15.98H15.8003C15.9001 15.98 15.98 15.9001 15.98 15.8002V3.99501H10.0474V6.05243H5.99251V3.99501H0H0.019975Z" fill="#024D76"/>
                        </svg>
                  </div>
                  <div aria-label="icon-home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                              <path d="M7.20882 5.14545L7.65421 6.75666C8.07366 8.27446 8.28296 9.0338 8.89959 9.37887C9.51623 9.72481 10.2989 9.52071 11.8643 9.11423L13.5248 8.68181C15.0902 8.27533 15.8729 8.07209 16.2292 7.47448C16.5855 6.87601 16.3762 6.11667 15.9559 4.59886L15.5113 2.98852C15.0919 1.46985 14.8817 0.710511 14.266 0.365438C13.6485 0.0194988 12.8658 0.223603 11.3004 0.630945L9.6399 1.06164C8.07453 1.46812 7.29184 1.67222 6.93639 2.2707C6.58007 2.8683 6.78937 3.62764 7.20882 5.14545Z" fill="#B2B9C2"/>
                              <path d="M0.906692 2.13321C0.929478 2.05107 0.96823 1.97423 1.02073 1.90707C1.07324 1.83992 1.13846 1.78378 1.21268 1.74185C1.2869 1.69992 1.36865 1.67303 1.45326 1.66272C1.53788 1.65241 1.6237 1.65888 1.70581 1.68176L3.17864 2.08996C3.56898 2.19598 3.9252 2.40131 4.21257 2.68595C4.49994 2.9706 4.70866 3.32484 4.81839 3.71415L6.67868 10.4478L6.81533 10.9209C7.36689 11.1242 7.83168 11.5111 8.13162 12.0167L8.39972 11.9337L16.0709 9.94018C16.1534 9.91871 16.2392 9.9137 16.3236 9.92542C16.408 9.93714 16.4893 9.96537 16.5628 10.0085C16.6363 10.0516 16.7005 10.1088 16.7519 10.1768C16.8033 10.2447 16.8408 10.3221 16.8623 10.4046C16.8837 10.4871 16.8887 10.5729 16.877 10.6573C16.8653 10.7417 16.8371 10.823 16.7939 10.8965C16.7508 10.9699 16.6936 11.0342 16.6257 11.0856C16.5577 11.137 16.4803 11.1745 16.3978 11.1959L8.75518 13.1816L8.46978 13.2698C8.46459 14.3682 7.70612 15.3731 6.55847 15.6707C5.18336 16.0287 3.76933 15.2365 3.40091 13.9029C3.03249 12.5684 3.8489 11.1968 5.22401 10.8396C5.29176 10.8222 5.36013 10.8072 5.42898 10.7946L3.56783 4.05922C3.51772 3.88618 3.42369 3.72904 3.29487 3.60311C3.16606 3.47717 3.00684 3.38671 2.83271 3.34053L1.35901 2.93146C1.27688 2.90876 1.20004 2.87011 1.13286 2.8177C1.06568 2.76529 1.00948 2.70017 0.967478 2.62604C0.925475 2.55191 0.898487 2.47023 0.888057 2.38567C0.877627 2.30111 0.883959 2.21532 0.906692 2.13321Z" fill="#B2B9C2"/>
                            </svg>
                  </div>
            </div>
      </div>
</body> 
</html>
