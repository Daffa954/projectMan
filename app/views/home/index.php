<div class="m-auto md:w-[95%] w-[98%] p-4 mt-4">
    <!-- information -->
    <div class="flex flex-wrap gap-x-10 gap-y-4">
        <div class="p-8 md:w-[20%] w-full rounded-xl bg-blue-600 shadow-xl">
            <p class="text-white text-xl">Tugas Hari ini:</p>
        </div>


        <div class="p-8 md:w-[20%] w-full rounded-xl bg-blue-600">
            <p class="text-white text-xl">Tugas selesai : </p>
        </div>

        <div class="p-8 md:w-[20%] w-full rounded-xl bg-blue-600">
            <p class="text-white text-xl">Projek selesai : </p>
        </div>

        <div class="p-8 md:w-[20%] w-full rounded-xl bg-blue-600">
            <p class="text-white text-xl">Jumlah Tim yang diikuti : </p>
        </div>

        <div class="p-8  md:w-[30%] w-full  rounded-xl bg-blue-600">
            <p class="text-white text-xl">Jumlah Tim yang dipegang : </p>
        </div>
    </div>
    <!-- information -->
    <a href="<?= BASEURL ?>/cetak.php" target="_blank">cetak</a>
    <!-- button -->
    <div class="flex mt-8">
        <div class="flex bg-green-400 p-3 rounded-xl text-md gap-3 hover:bg-green-600 ease-out duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-plus-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
            <a href="<?= BASEURL ?>/projects/create" class="">create project</a>

        </div>

    </div>
    <!-- button -->



    <div class="flex flex-wrap gap-8">
        <!-- list tugas -->
        <div class="md:w-[45%] w-full  mt-8 ">
            <p class="text-2xl font-bold text-[#070707]">List task</p>
            <div class="mt-4">
                <div class="relative overflow-x-auto ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 border-2 border-sky-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time remaining
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    deadline
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Submit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- list tugas -->

        <!-- list team -->
        <div class="md:w-[30%] w-full  mt-8 ">
            <p class="text-2xl font-bold text-[#070707]">List team</p>
            <div class="mt-4">
                <div class="relative overflow-x-auto ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 border-2 border-sky-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Apple MacBook Pro 17"
                                </th>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- list tugas -->
    </div>
    <div class="mt-6">
        <form class="max-w-md" action="" method="POST">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="keyword" name="keyword"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos..." required />
                <button type="submit" id="searchButton" name="search"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>

            </div>
        </form>

    </div>
    <div class="w-full mt-6">
        <p class="text-2xl font-bold text-[#070707]">My Project</p>

        <!-- container project -->
        <div class="grid grid-cols-1 mt-4 gap-4 md:grid md:grid-cols-4" id="container">
            <?php for ($i = 0; $i < $data['dpp']; $i++) { ?>

                <?php if ($data['projects'][$i]['name'] !== null) { ?>
                    <div class=" w-full p-2 rounded-lg border-2 border-sky-500 ">
                        <img src="<?= BASEURL ?>/img/66863230218b0.png" alt="" srcset="" class="w-full h-[240px]">
                        <p class="ml-1 mt-1 mb-1"><?= $data['projects'][$i]['name'] ?></p>
                        <a class="ml-1 mt-1 mb-1 text-slate-400"
                            href="<?= BASEURL ?>/projects/seeDetails/<?= $data['projects'][$i]['id_project'] ?>">see details</a>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
        <!-- container project -->

    </div>
    <!-- list Project -->
    <div class="w-full mt-6">
        <p class="text-2xl font-bold text-[#070707]">My Team Project</p>

        <!-- container project -->
        <div class="grid grid-cols-1 mt-4 gap-4 md:grid md:grid-cols-4" id="container">
            <?php for ($i = 0; $i < $data['dpp']; $i++) { ?>

                <?php if ($data['projects'][$i]['name'] !== null) { ?>
                    <div class=" w-full p-2 rounded-lg border-2 border-sky-500 ">
                        <img src="<?= BASEURL ?>/img/66863230218b0.png" alt="" srcset="" class="w-full h-[240px]">
                        <p class="ml-1 mt-1 mb-1"><?= $data['projects'][$i]['name'] ?></p>
                        <a class="ml-1 mt-1 mb-1 text-slate-400"
                            href="<?= BASEURL ?>/projects/seeDetails/<?= $data['projects'][$i]['id_project'] ?>">see details</a>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
        <!-- container project -->

    </div>
    <div class="mt-4">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <li>
                    <a href="<?= BASEURL ?>/home/index/<?= $data['actPage'] - 1 ?>"
                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                </li>
                <?php for ($i = 0; $i < $data['pageTotal']; $i++) { ?>
                    <li>
                        <a href="<?= BASEURL ?>/home/index/<?= $i + 1 ?>"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  "><?= $i + 1 ?></a>
                    </li>
                <?php } ?>


                <li>
                    <a href="<?= BASEURL ?>/home/index/<?= $data['actPage'] + 1 ?>"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700  ">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>