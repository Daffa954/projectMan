<div class="w-1/2 m-auto mt-4">
    <h1 class="mb-4 text-3xl font-bold">Create Project</h1>
    <form class="bg-blue-200 p-4" method="post">
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Project name</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="nama project" required />
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Project description</label>
            <input type="text" id="description" name="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="nama project" required />
        </div>

        <div class="mb-5">
            <label for="start" class="block mb-2 text-sm font-medium text-gray-900">Start date</label>
            <input type="datetime-local" id="start" name="start"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="nama project" required />
        </div>
        <div class="mb-5">
            <label for="end" class="block mb-2 text-sm font-medium text-gray-900">end date</label>
            <input type="datetime-local" id="end" name="end"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="nama project" required />
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="submit">Submit</button>
    </form>
</div>

<button type="button" onclick="Swal.fire('judul', 'halo','success')">klik</button> <!-- Corrected Swal.fire method -->

