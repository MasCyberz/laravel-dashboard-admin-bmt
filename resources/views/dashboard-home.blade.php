<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Dashboard Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#E0E0E0]">
    <div class="fixed inset-y-0 left-0 w-[375px] h-full bg-white shadow-md rounded-[20px] justify-center ml-5 mt-5">
        <div class="p-6 flex items-center pb-4">
            <a href="" class="flex items-center">
                <img src="{{ Vite::asset('resources/images/profile.png') }}" alt=""
                    class="h-[65px] w-[65px] object-cover  rounded-full mr-3">
                <div>
                    <p>Admin</p>
                    <h3 class="font-bold text-xl text-[#003974] -translate-y-2">Dimas Ganteng</h3>
                </div>
            </a>

        </div>
        <div class=" flex items-center justify-center">
            <div class="border-b-2 border-b-blue-700 w-80"></div>
        </div>
        <ul class="p-6">
            <li class="">
                <a href="" class="flext items-center bg-red-400 py-2 w-full">
                    <i class="ri-home-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="ri-user-line"></i>
                    <span>Data Pengguna</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="ri-arrow-left-right-fill"></i>
                    <span>Riwayat Transaksi</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="ri-account-box-line"></i>
                    <span>Data Teller</span>
                </a>
            </li>
        </ul>

    </div>

</body>

</html>
