<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row max-w-4xl w-full">
        <div class="w-full md:w-1/2 p-8">
            <div class="mb-6">
                <img alt="Corals Logo" class="mb-4" height="40" src="https://storage.googleapis.com/a1aa/image/TOkbo5b5yl6oC1GQCksLguw6kFnn9zeFZ3yfwLGzPoZG3hfnA.jpg" width="100"/>
                <h2 class="text-2xl font-semibold mb-2">Create your account</h2>
                <p class="text-gray-600 mb-4">Let's get started with your 30 days free trial</p>
                <button class="w-full bg-gray-100 text-gray-700 py-2 rounded-lg flex items-center justify-center mb-4">
                    <i class="fab fa-google mr-2"></i>
                    Login with Google
                </button>
                <div class="flex items-center mb-4">
                    <hr class="flex-grow border-gray-300"/>
                    <span class="px-2 text-gray-500">or</span>
                    <hr class="flex-grow border-gray-300"/>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="name">Name</label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" placeholder="Name" type="text"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" placeholder="Email" type="email"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="password">Password</label>
                        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="password" placeholder="Password" type="password"/>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input class="form-checkbox text-blue-500" type="checkbox"/>
                            <span class="ml-2 text-gray-700">I agree to all Terms, Privacy Policy and Fees</span>
                        </label>
                    </div>
                    <button class="w-full bg-black text-white py-2 rounded-lg">Sign up</button>
                </form>
                <p class="text-gray-600 mt-4">Already have an account? <a class="text-blue-500" href="#">Log in</a></p>
            </div>
        </div>
        <div class="w-full md:w-1/2 relative">
            <img alt="Furniture Image" class="w-full h-full object-cover rounded-b-lg md:rounded-r-lg md:rounded-bl-none" height="800" src="https://storage.googleapis.com/a1aa/image/HRlKNXhgXcqbMpX83Rqytfw1clZBAfzrE08rGzwjEbbH3hfnA.jpg" width="600"/>
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center p-8">
                <h2 class="text-white text-2xl font-semibold mb-4">Click to make the most out of this idea with a free account</h2>
                <p class="text-white mb-4">Discovering the Best Furniture for Your Home</p>
                <p class="text-white mb-4">Our practice in Designing Complete Environments exceptional building elements and decor in special situations</p>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center text-white">
                        <i class="fas fa-check-circle mr-2"></i>
                        100% Guarantee
                    </div>
                    <div class="flex items-center text-white">
                        <i class="fas fa-truck mr-2"></i>
                        Free delivery London area
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>