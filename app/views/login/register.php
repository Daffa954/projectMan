<div class="w-[100vw] h-[100vh] flex justify-center	 items-center	 bg-gray-500">
  <form class="w-[40%]  bg-blue-200  p-4 rounded-lg" enctype="multipart/form-data" method="post">
    <h1 class="text-4xl font-bold mb-6">Register</h1>
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm text-xl text-gray-900 dark:text-white">Your Name</label>
      <input type="text" id="name"
        class="shadow-sm bg-gray-50 text-xl border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required name="name" />
    </div>
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm text-xl text-gray-900 dark:text-white">Your email</label>
      <input type="email" id="email"
        class="shadow-sm bg-gray-50 text-xl border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required name="email" />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 text-sm text-xl text-gray-900 dark:text-white">Your password</label>
      <input type="password" id="password"
        class="shadow-sm text-xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required name="password" />
    </div>
    <div class="mb-5">
      <label for="photo" class="block mb-2 text-sm text-xl text-gray-900 dark:text-white">Your photo</label>
      <input type="file" id="photo"
        class="shadow-sm text-xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
         name="photo" />
    </div>
    
    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-xl rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
      name="submit">Login</button>
  </form>

</div>