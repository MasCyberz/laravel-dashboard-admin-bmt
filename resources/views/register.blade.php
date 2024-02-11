<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Registrasi Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="sm:overflow-auto xl:overflow-hidden">
    <div class="grid sm:grid-cols-1 xl:grid-cols-2">
        <div class="h-screen relative ">
            <div class=" absolute flex justify-center items-center h-full w-full">
                <img class="" src="{{ Vite::asset('resources/images/logo_bmt.png') }}" alt=""
                    class="w-screen" style="" width="40%">
            </div>
            <img src="{{ Vite::asset('resources/images/Login_side.png') }}" alt="" class="bg-cover">
        </div>
        <div class="h-screen font-inter flex flex-col justify-center bg-white">
            <div class="p-20">
                <h1 class="font-bold text-3xl">Daftar akun Admin</h1>
                <p class="text-xl mt-2">Isi form untuk menyelesaikan pendaftaran</p>

                <div class="mt-5">
                    <form action="">
                        <div>
                            <label for="" class="text-lg">Nama Admin</label>
                            <div>
                                <input type="text"
                                    class="py-2 px-3 w-full rounded-md mt-3 text-black border-0 ring-2 ring-black focus border-black outline-none focus:outline-none focus:ring-2 " placeholder="masukkan nama admin">
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="text-lg">Password</label>
                            <div>
                                <input type="password"
                                    class="py-2 px-3 w-full rounded-md mt-3 text-black border-0 ring-2 ring-black focus border-black outline-none focus:outline-none focus:ring-2" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="text-lg">Konfirmasi Password</label>
                            <div>
                                <input type="password"
                                    class="py-2 px-3 w-full rounded-md mt-3 text-black border-0 ring-2 ring-black focus border-black outline-none focus:outline-none focus:ring-2" placeholder="Kembali masukkan password">
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="">
                                <span class="" class="text-lg">Foto Admin (Berukuran 3x4)</span>
                                <div>
                                    <input type="file"
                                        class="py-2 px-3 w-full rounded-md mt-3 text-black border-0 ring-2 ring-black focus border-black outline-none focus:outline-none focus:ring-2" placeholder="Pilih file">
                                </div>
                            </label>
                        </div>
                    </form>
                    <button class="mt-12 bg-blue-500 py-3 w-full rounded-lg font-bold text-xl text-white" type="submit">Daftar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
