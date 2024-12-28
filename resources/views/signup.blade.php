<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
        Login
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
<!--flaticon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<!-- component -->
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="relative hidden lg:block w-full md:w-1/2 xl:w-2/4 h-screen">
	<div class="fixed w-1/2 h-full bg-blue-200 rounded-2xl m-2" style="background-image: url('https://storage.googleapis.com/a1aa/image/patwKVdRn1YmGBx9jts7x1NeDPXKpLYZmfPej9x7OAfTuioPB.jpg');"></div>
    </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-10 py-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-full">


      <h1 class="text-2xl text-gray-600 font-poppins font-semibold leading-tight mt-6 pb-4 text-center">Welcome to Bookshub!!<br> Join our exciting journey by signing up </h1>

      <form class="mt-6" action="#" method="POST">

        <div>
          <label class="block text-gray-600 font-poppins text-sm">Email Address</label>
          <input type="email" name="" id="" placeholder="Enter Email Address" class="peer text-sm w-full px-2 py-4 rounded-3xl bg-white mt-2 border-4 border-gray-300 focus:ring-4 focus:ring-blue-300 focus:outline-none font-lato" autofocus autocomplete required>
        </div>

        <div class="mt-4">
            <label class="block text-gray-600 font-poppins text-sm">Department</label>
            <input type="text" name="department" id="" placeholder="Enter Department" class="peer text-sm w-full px-2 py-4 rounded-3xl bg-white mt-2 border-4 border-gray-300 focus:ring-4 focus:ring-blue-300 focus:outline-none font-lato" autofocus autocomplete required>
        </div>

        <div class="mt-4">
          <label class="block text-gray-600 font-poppins text-sm">Password</label>
          <input type="password" name="password" id="" placeholder="Enter Password" minlength="6" class="text-sm w-full px-2 py-4 rounded-3xl bg-white mt-2 border-4 border-gray-300 focus:ring-4 focus:ring-blue-300 focus:outline-none font-lato" required>
        </div>

        <div class="mt-4">
            <label class="block text-gray-600 font-poppins text-sm">Repeat Password</label>
            <input type="password" name="repeat_password" id="" placeholder="Enter Password" minlength="6" class="text-sm w-full px-2 py-4 rounded-3xl bg-white mt-2 border-4 border-gray-300 focus:ring-4 focus:ring-blue-300 focus:outline-none font-lato" required>
        </div>

        <div class="text-right mt-2">
          <a href="#" class="text-sm font-semibold text-gray-600 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full block bg-blue-600 text-sm focus:ring-4 focus:ring-blue-300 transition hover:ring-4 text-white font-semibold rounded-3xl
              px-2 py-4 mt-6">Signup</button>
      </form>

      <hr class="my-6 border-gray-300 w-full">

      <button type="button" class="w-full block bg-white hover:bg-gray-100 text-sm focus:bg-gray-100 text-gray-900 font-semibold rounded-3xl px-4 py-4 border border-gray-300">
            <div class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
            <span class="ml-4">
            Signup
            with
            Google</span>
            </div>
          </button>

      <p class="mt-8 text-center text-sm">Have an account? <a href="/login" class="text-blue-500 hover:text-blue-700 font-semibold">Login</a><a href="/alt">alt-login</a></p>


    </div>
  </div>

</section>

</html>