<x-layout>
    <!--x-slot:heading>
        home
    </x-slot:heading-->

    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

  <!--==========================MAIN SECTION ==================================-->

    <div class="bg-gradient-to-r from-blue-100 to-pink-100 py-20 " id="home" style="">

    <!-- Main Section -->
    <div class="container mx-auto mt-8 px-2 py-16 md:px-16 md:py-2">
        <div class="flex flex-col md:flex-row items-center gap-6">
            <!-- Text Section -->
            <div class="text-center md:text-left md:w-1/2 space-y-6 px-2 md:px-8">
                <h1 class="text-3xl md:text-4xl font-bold font-poppins text-gray-800">
                    Share and Download materials for free
                </h1>
                <p class="text-lg text-gray-600 font-lato">
                    Download materials from our rich community of contributors or be a contributor by uploading yours.
                    <a href="#" class="text-blue-500">Upload and Share</a>
                    with other student in UNIMAID.
                </p>
                <!-- CTA BUTTONS -->
                <div class="mt-8 flex gap-4">
                    <a href="login.html"><button class="bg-blue-600 text-white py-3 px-6 rounded-2xl font-poppins font-bold hover:bg-transparent ring-2 hover:ring-4 hover:text-blue-600">
                        Get Started
                    </button></a>
                    <button class="bg-transparent py-3 px-6 rounded-2xl text-blue-600 font-bold  font-poppins border-2 border-blue-200 hover:border-blue-600">
                        Browse
                    </button>
                </div>
            </div>

            <!-- Image Section -->
            <div id="hero" class=" md:w-2/5 h-full relative">
                <img src="{{ asset('storage/images/hero-image.png')}}" alt="student reading" class="w-full h-full z-50">
            </div>
        </div>
    </div>
</div>

<!--==========================MATERIALS SECTION ==================================-->

<div id="materials" class="container flex flex-col gap-3 mx-auto p-6 pt-8 md:p-28">

    <!-- Filter categories -->
    <div class="container mx-auto">
        <h1 class="text-2xl sm:text-3xl text-blue-600 font-bold mb-4 text-center font-poppins">Materials</h1>
        <div class="mb-4 text-center">
            <span class="text-base sm:text-lg font-lato">Filter by category</span>
        </div>
        <div class="flex flex-wrap gap-2 mb-4 justify-center">
            <button class="bg-blue-600 text-white px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">All</button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Popular </button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Latest </button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Gsts </button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Chems </button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Phys</button>
            <button class="border border-blue-600 text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-full font-poppins">Others</button>
        </div>
    </div>

    <div class="container mx-auto py-8 main-book-container">
        <div class="space-x-0 book-container grid grid-cols-2 md:grid md:grid-cols-4 md:gap-2 md:gap-y-4" style="">
         <!-- Book 1 -->
            <div class="text-center py-2 px-0 md:p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain drop-shadow-2xl" src="https://storage.googleapis.com/a1aa/image/Tg8YAkTHsyYKEp62JrauNB4Joe8RHGMEpyZzfbhvijfWSDOnA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>

            <!-- Book 2 -->
                   <div class="text-center p-2 md:p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/Lg7oefcyadt7XEyPU7MemUCiPqG0ONcum4W7bf738ulhkGcOB.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>


            <!-- Book 3 -->
            <div class="text-center p-2 md:p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/Lg7oefcyadt7XEyPU7MemUCiPqG0ONcum4W7bf738ulhkGcOB.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 5 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 6 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 7 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 8 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 9 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>
            <!-- Book 10 -->
            <div class="text-center p-4 rounded-2xl relative book">
                <img alt="Cover of Fahrenheit 451 by Ray Bradbury" class="rounded-2xl w-26 h-42 md:w-36 md:h-52 mx-auto contain" src="https://storage.googleapis.com/a1aa/image/m2SRtqEXxdKGEB5fgWYFpsjT2Cw16xdOEsMl7I5d1QBl0gzJA.jpg" width="100" style="aspect-ratio: 1/1.6;"/>
                <h3 class="mt-2 text-sm font-semibold font-poppins">Fahrenheit 451</h3>
                <p class="text-xs text-gray-600 font-lato">Ray Bradbury</p>
                <div class="download-but" style="">
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">download</span></button>
                    <button class="rounded-full w-10 h-10 bg-blue-300 flex justify-center items-center my-1"><span class="material-symbols-outlined">visibility</span></button>
                </div>
            </div>

       </div>

    <!-- Pagination -->   
    <div class="flex items-center justify-center space-x-2 mt-20">
        <button class="px-4 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
            &laquo; Previous
        </button>
        <button class="px-4 py-2 text-white bg-blue-600 border border-blue-600 rounded-md">
            1
        </button>
        <button class="px-4 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
            2
        </button>
        <button class="px-4 py-2 text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
            Next &raquo;
        </button>
    </div>

</div>

<!--==========================ABOUT US ==================================-->

<div id="about" class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="text-3xl font-semibold text-blue-600 font-poppins">About Us</h2>
      <p class="mt-6 text-pretty text-lg/8 font-semibold font-lato tracking-tight text-gray-700 sm:text-3xl lg:text-balance">Transforming How You Access Educational Resources</p>
      <p class="mt-6 text-lg/8 text-gray-600 font-lato">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
        <div class="relative pl-16">
          <dt class="text-base/7 font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-blue-600">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
              </svg>
            </div>
            Search and Download with no account 
          </dt>
          <dd class="mt-2 text-base/7 text-gray-600 font-lato">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base/7 font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-blue-600">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
            </div>
            Create Acount for Free
          </dt>
          <dd class="mt-2 text-base/7 text-gray-600 font-lato">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base/7 font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-blue-600">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
              </svg>
            </div>
            Upload and Download file with previlages
          </dt>
          <dd class="mt-2 text-base/7 text-gray-600 font-lato">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base/7 font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-blue-600">
              <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
              </svg>
            </div>
            Save document on account for free
          </dt>
          <dd class="mt-2 text-base/7 text-gray-600 font-lato">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
        </div>
      </dl>
    </div>
  </div>
</div>


<!--form>
  <label class="block">
    <span class="block text-sm font-medium text-slate-700">Email</span>
    <input type="email" class="peer">
    <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
      Please provide a valid email address.
    </p>
  </label>
</form-->

<!--==========================ABOUT SERVICES SECTION ==================================-->    

<section class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 to-pink-100 rounded-2xl">
    <div class="glassmorphic p-8 max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-8">
            <div class="col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="glassmorphic p-6 rounded-xl shadow-lg flex flex-col items-center">
                    <div class="flex items-center mb-4">
                        <div class="bg-white p-2 rounded-2xl shadow-md">
                            <img alt="3D upload icon" class="w-8 h-8" src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png"/>
                        </div>
                        <h3 class="text-xl font-semibold text-black font-poppins ml-3">Upload Books</h3>
                    </div>
                    <div class="text-center">
                        <p class="text-black text-base font-lato">Easily upload your books to our platform and share them with the world.</p>
                    </div>
                </div>
                <div class="glassmorphic p-6 rounded-xl shadow-lg flex flex-col items-center">
                    <div class="flex items-center mb-4">
                        <div class="bg-white p-2 rounded-2xl shadow-md">
                            <img alt="3D search icon" class="w-8 h-8" src="https://cdn-icons-png.flaticon.com/512/622/622669.png"/>
                        </div>
                        <h3 class="text-xl font-semibold text-black font-poppins ml-3">Search Books</h3>
                    </div>
                    <div class="text-center">
                        <p class="text-black text-base font-lato">Find books by title, author, or genre with our advanced search options.</p>
                    </div>
                </div>
                <div class="glassmorphic p-6 rounded-xl shadow-lg flex flex-col items-center">
                    <div class="flex items-center mb-4">
                        <div class="bg-white p-2 rounded-2xl shadow-md">
                            <img alt="3D read icon" class="w-8 h-8" src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"/>
                        </div>
                        <h3 class="text-xl font-semibold text-black font-poppins ml-3">Read Online</h3>
                    </div>
                    <div class="text-center">
                        <p class="text-black text-base font-lato">Access a wide range of books and read them online from any device.</p>
                    </div>
                </div>
                <div class="glassmorphic p-6 rounded-xl shadow-lg flex flex-col items-center">
                    <div class="flex items-center mb-4">
                        <div class="bg-white p-2 rounded-2xl shadow-md">
                            <img alt="3D discussion icon" class="w-8 h-8 opacity-75" src="https://storage.googleapis.com/a1aa/image/1iAY0VXSLLpWGd7eSRVAZgvESEtcFfmYNjEc84HPqqdyzg1TA.jpg"/>
                        </div>
                        <h3 class="text-xl font-semibold text-black font-poppins ml-3">Join Discussions</h3>
                    </div>
                    <div class="text-center">
                        <p class="text-black text-base font-lato">Participate in book discussions and connect with other readers.</p>
                    </div>
                </div>
            </div>
            <div class="glassmorphic p-6 rounded-xl shadow-lg flex flex-col justify-between mt-8 md:mt-0">
                <div>
                    <span class="text-red-500 font-semibold font-poppins">Our Services</span>
                    <h2 class="text-2xl line-4 font-bold mt-2 font-poppins">We Provide Various Educational Services.</h2>
                    <p class="text-gray-600 text-base mt-4 font-lato">Explore our platform to upload, search, read, and discuss books. Enhance your learning experience with our comprehensive services.</p>
                </div>
                <div class="mt-6">
                    <a href="#" class="bg-blue-600 py-3 px-6 rounded-2xl text-white font-bold  font-poppins ring-2 hover:ring-4 hover:border-blue-600">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>


<!--==========================CTA 2 SECTION ==================================-->

<div class="p-2 mt-10 md:mt-0">
<div class="neumorphic p-0 flex flex-col md:flex-row items-center mx-auto">
    <div class="md:w-1/2 mb-8 md:mb-0">
      <h1 class="text-3xl md:text-4xl font-bold font-poppins text-gray-800 mb-4">
        Discover, Learn, and 
        <br/>
        Share with Ease today.
      </h1>
      <p class="text-lg text-gray-700 mb-6 font-lato">
        A powerful set of features to enhance your productivity. Make tasks simpler and more efficient.
      </p>
      <div class="flex space-x-4">
        <button class="neumorphic-button text-white font-semibold font-poppins py-2 px-4 rounded-2xl bg-blue-600 ring-2 hover:ring-4">
          Get started
        </button>
        <button class="bg-transparent py-3 px-6 rounded-2xl text-blue-600 font-bold  font-poppins border-2 border-blue-200 hover:border-blue-600">
                        Learn More
        </button>
      </div>
    </div>
    <!-- CTA 2 image-->
    <div class="md:w-1/2">
      <img alt="Illustration of two people discussing a document" class="w-full h-auto" height="400" src="1.png" width="400"/>
    </div>
  </div>
</div>



<!--==========================TESTIMONIALS SECTION ==================================-->


  <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row items-center mt-8">
   <div class="w-full md:w-1/2 mb-8 md:mb-0">
    <h1 class="text-2xl font-semibold font-poppins text-gray-800 mb-4 text-center">
     What Our Customers Says
    </h1>
    <img src="{{ assets('storage/images/rating.png')}}" class="size-80">
   
   </div>
   <div class="w-full md:w-1/2">
    <div class="space-y-4">
     <div class="flex items-center p-4 shadow-md rounded-lg ring-4 ring-blue-100">
      <img alt="Portrait of Mehwish" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/mceNT2pXeQvSQkLMBVjzR4oLeOvMbCAkhqulSaZlfa9KZFnPB.jpg" width="50"/>
      <div>
       <h2 class="text-lg font-semibold font-poppins text-gray-600">
        John doe
       </h2>
       <p class="text-gray-500 font-lato">
        This platform is awesome,it helped me with books on physics while i was planning on starting at SPACEX
       </p>
      </div>
     </div>
     <div class="flex items-center p-4 shadow-md rounded-lg ring-4 ring-red-100 relative right-8 md:right-10">
      <img alt="Portrait of Elizabeth Jeff" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/oEGLxAKqRAIqOJXS6pzopyFDOo19hLKoOEYiq0MSfFdHr48JA.jpg" width="50"/>
      <div>
       <h2 class="text-lg font-semibold font-poppins text-gray-600">
        Ben bells
       </h2>
       <p class="text-gray-500 font-lato">
        I recommend this platform for upcomming enterpreneurs and educationist it is infinte for learning resources
       </p>
      </div>
     </div>
     <div class="flex items-center p-4 shadow-md rounded-lg ring-4 ring-green-100">
      <img alt="Portrait of Emily Thomas" class="w-12 h-12 rounded-full mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/ViHLVjfqmvUqekgmKku5X90J8YeKMSgSQ06BqFYyo0eAZFnPB.jpg" width="50"/>
      <div>
       <h2 class="text-lg font-semibold font-poppins text-gray-600">
        Jeff G.
       </h2>
       <p class="text-gray-500 font-lato">
        <span class="font-poppins font-bold text-blue-600 text-2xl">"</span>Took some books here and sold it on amazon and i made a lot of $$$$$.<span class="font-poppins font-bold text-blue-600 text-2xl">"</span>
       </p>
      </div>
     </div>
    </div>
   </div>
  </div>

<!--==========================BLOG SECTION ==================================-->


<div id="blog" class="bg-white py-24 sm:py-32">
  <div class="mx-auto px-0 md:px-6">
    <div class="mx-auto lg:mx-0 text-center">
      <h2 class="text-pretty text-2xl font-semibold tracking-tight text-blue-600 sm:text-3xl font-poppins">From the blog</h2>
      <p class="mt-2 text-lg text-gray-600 font-lato">Learn how to improve your skills with our expert advice.</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

      <!--blog 1 -->
      <article class="relative flex max-w-xl flex-col items-start justify-between rounded-2xl p-0 md:p-4 hover:bg-gray-50">
        <!--blog 1 image -->
        <div class="rounded-2xl w-full h-44 md:h-40">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                class="inset-0 h-full w-full object-cover rounded-2xl"
            />
        </div>

        <div class="absolute top-1/3 left-6 w-4/5 flex justify-between bg-gray-600 rounded-2xl pr-2">
            <a href="#" class="z-10 rounded-full bg-gray-50 px-3 py-1.5 text-xs font-poppins font-bold text-gray-600 hover:bg-gray-100">Study Tips</a>
            <div class="flex items-center gap-x-4 text-xs font-poppins">
                <time datetime="2020-03-16" class="text-white flex gap-2"> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/icon-calendar.svg"> Dec 16, 2024</time>
            </div>
        </div>
        <!--blog 1 content -->
        <div class="group relative mt-3">
          <h3 class="text-sm font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="#">
            <h3 class="font-poppins">How to study for exams</h3>
            </a>
          </h3>
          <p class="mt-3 line-clamp-3 text-sm/6 text-gray-600 font-lato">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <div class="relative mt-3 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-14 w-14 md:size-8 rounded-full bg-gray-50">
          <div class="text-sm/4">
            <p class="font-semibold text-gray-900 font-lato">
              <a href="#">
                <span class="absolute inset-0"></span>
                Jabez Lalai
              </a>
            </p>
            <p class="text-gray-600 font-lato">CO-Founder/Developer</p>
          </div>
        </div>
      </article>

      <!--blog 2 -->

      <article class="relative flex max-w-xl flex-col items-start justify-between rounded-2xl p-0 md:p-4 hover:bg-gray-50">
        <!--blog 2 image-->
        <div class="rounded-2xl w-full h-44 md:h-40">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="inset-0 h-full w-full object-cover rounded-2xl"
            />
        </div>
        <div class="absolute top-1/3 left-6 w-4/5 flex justify-between bg-gray-600 rounded-2xl pr-2">
            <a href="#" class="z-10 rounded-full bg-gray-50 px-3 py-1.5 text-xs font-poppins font-bold text-gray-600 hover:bg-gray-100">Programming</a>
            <div class="flex items-center gap-x-4 text-xs font-poppins">
                <time datetime="2020-03-16" class="text-white flex gap-2"> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/icon-calendar.svg"> Dec 16, 2024</time>
            </div>
        </div>
        <!-- blog 2 content -->
        <div class="group relative mt-3">
          <h3 class="text-sm font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="#">
            <h3 class="font-poppins">Programming For beginners: A step to be ahead</h3>
            </a>
          </h3>
          <p class="mt-3 line-clamp-3 text-sm/6 text-gray-600 font-lato">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <div class="relative mt-3 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-14 w-14 md:size-8 rounded-full bg-gray-50">
          <div class="text-sm/4">
            <p class="font-semibold text-gray-900 font-lato">
              <a href="#">
                <span class="absolute inset-0"></span>
                John Doe
              </a>
            </p>
            <p class="text-gray-600 font-lato">Co-Founder/Marketer</p>
          </div>
        </div>
      </article>

      <!--blog 3 -->
      <article class="relative flex max-w-xl flex-col items-start justify-between rounded-2xl p-4 md:p-4 hover:bg-gray-50">
        <!--blog 3 image -->
        <div class="rounded-2xl w-full h-44 md:h-40">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
              class="inset-0 h-full w-full object-cover rounded-2xl"
            />
        </div>
        <div class="absolute top-1/3 left-6 w-4/5 flex justify-between bg-gray-600 rounded-2xl pr-2">
            <a href="#" class="z-10 rounded-full bg-gray-50 px-3 py-1.5 text-xs font-poppins font-bold text-gray-600 hover:bg-gray-100">Marketing</a>
            <div class="flex items-center gap-x-4 text-xs font-poppins">
                <time datetime="2020-03-16" class="text-white flex gap-2"> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/icon-calendar.svg"> Dec 16, 2024</time>
            </div>
        </div>
        <!--blog 3 content -->
        <div class="group relative mt-3">
          <h3 class="text-sm font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="#">
            <h3 class="font-poppins">How to Improve your marketing skills in 30 days?</h3>
            </a>
          </h3>
          <p class="mt-3 line-clamp-3 text-sm/6 text-gray-600 font-lato">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <div class="relative mt-3 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-14 w-14 md:size-8 rounded-full bg-gray-50">
          <div class="text-sm/4">
            <p class="font-semibold text-gray-900 font-lato">
              <a href="#">
                <span class="absolute inset-0"></span>
                Ben Bells
              </a>
            </p>
            <p class="text-gray-600 font-lato">Marketer</p>
          </div>
        </div>
      </article>


      <!-- More posts... -->
    </div>
  </div>
</div>
</div>

<!--==========================FOOTER ==================================-->

<footer class="px-16 border border-t border-gray-200">
  <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="text-blue-600 text-2xl font-poppins font-bold">
            Bookshub
        </div>

        <p class="mt-4 max-w-xs text-gray-500 font-lato">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
          molestias.
        </p>

        <ul class="mt-8 flex gap-6">
          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Facebook</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Instagram</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Twitter</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">GitHub</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="#"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:opacity-75"
            >
              <span class="sr-only">Dribbble</span>

              <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
        <div>
          <p class="font-medium text-gray-900 font-poppins">Services</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> materials </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Vtu </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> E-books </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Joint Discussion </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Storage </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="font-medium text-gray-900 font-poppins">Company</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> About </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Meet the Team </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Accounts Review </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="font-medium text-gray-900 font-poppins">Helpful Links</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Contact </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> FAQs </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Live Chat </a>
            </li>
          </ul>
        </div>

        <div>
          <p class="font-medium text-gray-900 font-poppins">Legal</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Accessibility </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Privacy & Policy </a>
            </li>

            <li>
              <a href="#" class="text-gray-700 transition hover:underline font-lato"> Complaints </a>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <p class="text-xs text-gray-500 text-center font-lato">&copy; 2024. Bookshub. All rights reserved. <br>Made by <a href="\" class="text-blue-600"> Jabeez</a> &hearts;</p>
    
  </div>
</footer>

<!--==========================CONTACT FORM (Popup) ==========================-->

<div id="contact-form" class="w-full h-full fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[rgba(0,0,0,0.1)] z-50">
<div  class=" bg-white p-6 rounded shadow-lg w-full top-1/4 md:w-1/3 transform md:translate-x-3/4 md:translate-y-1/4">
    <button id="close-btn" class="text-gray-700 hover:text-red-600 font-bold text-xl absolute top-2 right-2" onclick="closeForm()">X</button>
    <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
<form action="" method="post" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-600">Name:</label>
            <input type="text" id="name" name="name" required
                   class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
            <input type="email" id="email" name="email" required
                   class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-gray-600">Message:</label>
            <textarea id="message" name="message" rows="4" required
                      class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit
        </button>
      </form>
</div>
</div>


<!--Popup Message buttton  -->
<button id="open-popup-btn">
    <i id="popup-icon" class="fas fa-comment"></i>
</button>


</x-layout>
