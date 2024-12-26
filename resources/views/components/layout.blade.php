<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading }}</title>
    <link rel="icon" type="icon-x" href="{{ asset('storage/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.1/lottie.min.js"></script>
    <style>
        *{
            scroll-behavior: smooth;
        }
        .nav-bg{
            background: red;
        }

        /* Amoeba Animation */
        #hero:before {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: pink;
            border-radius: 50%;
            opacity: 0.5;
            z-index: 1;
            animation: morph 8s infinite ease-in-out;
            //filter: blur(20px);
        }
        #hero:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            width: 150px;
            height: 150px;
            background: dodgerblue;
            border-radius: 50%;
            opacity: 0.5;
            z-index: 1;
            animation: morph-after 8s infinite ease-in-out;
            //filter: blur(20px);
        }

        /* Animation Keyframes */
        @keyframes morph {
            0% {
                border-radius: 50% 50% 50% 50%;
            }
            25% {
                border-radius: 50% 30% 50% 70%;
            }
            50% {
                border-radius: 30% 50% 70% 50%;
                                background: red;
            }
            75% {
                border-radius: 50% 70% 30% 50%;
            }
            100% {
                border-radius: 50% 50% 50% 50%;
                                background: blue;
            }
        }
         @keyframes morph-after {
            0% {
                border-radius: 50% 50% 50% 50%;
            }
            25% {
                border-radius: 50% 30% 50% 70%;
            }
            50% {
                border-radius: 30% 50% 70% 50%;
                background: orange;
            }
            75% {
                border-radius: 50% 70% 30% 50%;
            }
            100% {
                border-radius: 50% 50% 50% 50%;
                background: blue;
            }
        }



        .bubble {
            position: absolute;
            bottom: -100px;
            background: red;
            border-radius: 50%;
            opacity: 0.8;
            animation: rise 10s infinite ease-in-out;
        }

        /* Animation Keyframes */
        @keyframes rise {
            0% {
                transform: translateY(0) scale(0.5);
                opacity: 0.7;
            }
            100% {
                transform: translateY(-1000px) scale(1);
                opacity: 0;
            }
        }

        /* Random Sizes and Positions for Bubbles */
        .bubble:nth-child(1) {
            width: 50px;
            height: 50px;
            left: 10%;
            animation-duration: 12s;
        }
        .bubble:nth-child(2) {
            width: 100px;
            height: 100px;
            left: 40%;
            background: dodgerblue;
            animation-duration: 15s;
        }
        .bubble:nth-child(3) {
            width: 30px;
            height: 30px;
            left: 70%;
            background: pink;
            animation-duration: 10s;
        }
        .bubble:nth-child(4) {
            width: 120px;
            height: 120px;
            left: 80%;
            animation-duration: 18s;
            background: blue;
        }
        .bubble:nth-child(5) {
            width: 80px;
            height: 80px;
            left: 25%;
            background: orange;
            animation-duration: 14s;
        }
        @media screen and (max-width: 768px){
            #hero:before,
            #hero:after{
                width: 100px;
                height: 100px;
                margin-top: 5%;
            }
            .bubble:nth-child(4) {

                width: 50px;
                height: 50px;
            }
        }
        .book {
            transition: box-shadow 0.2s ease-in-out;
        }
        .book:hover{
            box-shadow: 0 0 0 4px #93c5fd;
        }
        .download-but{
            display: none;
            flex-direction: column;
            position: absolute;
            left: 90%;
            top: 30%;
            transition: 2s ease;
        }
        .book:hover .download-but{
            display: initial;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        .font-lato {
            font-family: 'Lato', sans-serif;
        }
        .glassmorphic {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
.glassmorphism {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
   #contact-form {
            display: none;
        }

        #powered-by {
            position: fixed;
            bottom: 10px;
            right: 10px;
            color: #666;
            font-size: 12px;
            z-index: 1000;
        }

        #open-popup-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #open-popup-btn i {
            font-size: 24px;
        }
       

    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Nav-->
    <nav id="nav" class="w-full bg-transparent py-4 fixed top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-blue-600">
                <a href="#" class="flex items-center gap-4"><img src="{{ asset('storage/images/logo.png')}}" class="w-6 h-6 rounded-full"> <span class="invisible md:visible">Bookshub</span></a>
            </div>

            <!-- Nav Links -->
            <div class="hidden md:flex space-x-6 text-gray-700 font-semibold">
                <a href="#home" class="hover:text-blue-600 font-poppins text-lg">Home</a>
                <a href="#materials" class="hover:text-blue-600 font-poppins text-lg">Materials</a>
                <a href="#about" class="hover:text-blue-600 font-poppins text-lg">About</a>
                <a href="#blog" class="hover:text-blue-600 font-poppins text-lg">Blogs</a>
                <a href="#contact-but" class="hover:text-blue-600 font-poppins text-lg">Contact</a>
            </div>

            <!-- Signup Button -->
            <div class="hidden md:block">
                <input type="search" name="search" id="search" class="mx-4 rounded-3xl ring-4 ring-blue-100 focus:ring-4 focus:ring-blue-300 outline-none px-6 py-2 bg-white" placeholder="e.g gst 111">

                <button class="bg-blue-600 text-white py-2 px-6 rounded-2xl font-poppins font-bold hover:bg-transparent ring-2 hover:ring-4 hover:text-blue-600">
                        Signup
                    </button>
            </div>

<input type="search" name="search" id="search1" class="visible md:hidden relative right-8 rounded-3xl ring-4 ring-blue-100 focus:ring-4 focus:ring-blue-300 outline-none px-2 py-1 bg-white" placeholder="e.g gst 111">


<!-------search drop down start------->
<div id="overlay" class="fixed w-full h-full bg-[rgba(0,0,0,0.5)] top-0 left-0 hidden">

    <div id="search-bar" class=" absolute top-[12%] left-0 md:left-[32%] bg-white shadow-lg rounded-lg w-full max-w-md hidden">
   <div class="p-4 border-b border-gray-200">
    <div class="relative">
     <input class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Search documentation" type="text"/>
     <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
     </i>
    </div>
   </div>
   <div class="p-4">
    <h2 class="text-gray-500 text-sm mb-2">
     Recent
    </h2>
    <ul>
     <li class="mb-2">
      <a class="p-3 bg-blue-600 text-white rounded-lg flex justify-between items-center" href="#">
       <span>
        Chem 201
       </span>
       <i class="fas fa-chevron-right">
       </i>
      </a>
     </li>
     <li class="mb-2">
      <a class="p-3 bg-gray-100 text-gray-800 rounded-lg flex justify-between items-center" href="#">
       <span>
        Gst 122
       </span>
       <i class="fas fa-chevron-right">
       </i>
      </a>
     </li>
     <li class="mb-2">
      <a class="p-3 bg-gray-100 text-gray-800 rounded-lg flex justify-between items-center" href="#">
       <span>
        Mth 211
       </span>
       <span class="text-gray-500 text-sm">
        science
       </span>
       <i class="fas fa-chevron-right">
       </i>
      </a>
     </li>
     <li>
      <a class="p-3 bg-gray-100 text-gray-800 rounded-lg flex justify-between items-center" href="#">
       <span>
        Bio 102
       </span>
       <span class="text-gray-500 text-sm">
        science
       </span>
       <i class="fas fa-chevron-right">
       </i>
      </a>
     </li>
    </ul>
   </div>
   <div class="p-4 border-t border-gray-200 text-right">
   
   </div>
  </div>
 </div>
<!-------search drop down end------->




            <!-- Mobile Menu Icon -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-toggle">
                    <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Materials</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">About</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Blogs</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Contact</a>
        </div>
    </nav>
    
{{ $slut }}

<div id="animation"></div>
<script>
  var animation = bodymovin.loadAnimation({
    container: document.getElementById('animation'), // HTML element
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'path-to-your-lottie-file.json' // Replace with your downloaded file
  });
</script>

    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });


$(window).on("scroll", function() {
    console.log("Scrolled: " + $(window).scrollTop()); // Log the scroll position to the console
    if ($(window).scrollTop() > 100) {
        $("#nav").addClass("bg-white shadow-lg");
        $("#search").addClass("ring-2 ring-blue-200");

        //console.log("Background added");
    } else {
        $("#nav").removeClass("bg-white shadow-lg");
        $("#search").removeClass("ring-2 ring-blue-200");
        //console.log("Background removed");
    }
});

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script>
    const openPopupBtn = document.getElementById('open-popup-btn');
    const contactForm = document.getElementById('contact-form');
    const popupIcon = document.getElementById('popup-icon');

    openPopupBtn.addEventListener('click', function () {
        if (contactForm.style.display === 'block') {
            contactForm.style.display = 'none';
            popupIcon.classList.remove('fa-comment');
            popupIcon.classList.add('fa-comment-alt');
        } else {
            contactForm.style.display = 'block';
            popupIcon.classList.remove('fa-comment-alt');
            popupIcon.classList.add('fa-comment');
        }
    });

    function closeForm() {
        contactForm.style.display = 'none';
        popupIcon.classList.remove('fa-comment');
        popupIcon.classList.add('fa-comment-alt');
    }

    contactForm.addEventListener('click', function (e) {
        if (e.target === this) {
            closeForm();
        }
    });

   


        const searchButton = document.getElementById('search');
        const searchButton2 = document.getElementById('search1');
const overlay = document.getElementById('overlay');
const searchBar = document.getElementById('search-bar');
const submitSearch = document.getElementById('submit-search');

// Open the search form with overlay
searchButton.addEventListener('click', () => {
    overlay.classList.remove('hidden');
    searchBar.classList.remove('hidden');
});
searchButton2.addEventListener('click', () => {
    overlay.classList.remove('hidden');
    searchBar.classList.remove('hidden');
});


// Close the search form when clicking outside the form or submitting a search
overlay.addEventListener('click', (event) => {
    // Ensure the click is on the overlay, not the form
    if (event.target === overlay) {
        overlay.classList.add('hidden');
    }
});

// Close the search form when a search is submitted
//submitSearch.addEventListener('click', () => {
//    overlay.classList.add('hidden');
//    console.log(`Search query: ${searchBar.value}`); // Perform the search functionality
//});

// Optional: Close the search form with the `Escape` key
document.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        overlay.classList.add('hidden');
    }
});

</script>
</body>
</html>


