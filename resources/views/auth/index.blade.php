<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Featured Post</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-800 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold">{Finsweet}</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#" class="hover:text-gray-300">Home</a></li>
          <li><a href="#" class="hover:text-gray-300">Blog</a></li>
          <li><a href="#" class="hover:text-gray-300">About Us</a></li>
          <li><a href="#" class="hover:text-gray-300">Contact us</a></li>
        </ul>
      </nav>
      <a href="#" class="bg-white text-gray-800 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Subscribe</a>
    </div>
  </header>

  <!-- Featured Post Section -->
  <section class="bg-gray-100 py-10">
    <div class="container mx-auto flex flex-col lg:flex-row items-center px-6 lg:px-20">
      <!-- Text Content -->
      <div class="lg:w-2/3">
        <h2 class="text-sm font-bold text-gray-500 uppercase mb-2">Featured Post</h2>
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Step-by-step guide to choosing great font pairs</h1>
        <p class="text-gray-500 text-sm mb-4">
          By <a href="#" class="text-blue-600 hover:underline">John Doe</a> | May 23, 2022
        </p>
        <p class="text-gray-600 mb-6">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident.
        </p>
        <a href="#" class="bg-yellow-500 text-white px-6 py-3 rounded font-semibold hover:bg-yellow-600">
          Read More >
        </a>
      </div>
      <!-- Image Content -->
      <div class="lg:w-1/3 mt-6 lg:mt-0 lg:ml-10">
        <img src="https://via.placeholder.com/400x300" alt="Office" class="rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  <!-- All Posts Section -->
<section class="py-10 bg-white">
  <div class="container mx-auto px-6 lg:px-20">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">All posts</h2>
    
    <div class="space-y-8">
      <!-- Post Item 1 -->
      <div class="flex flex-col lg:flex-row items-start">
        <!-- Post Image -->
        <div class="lg:w-1/4">
          <img src="https://via.placeholder.com/150" alt="Post Title 1" class="rounded-lg shadow-lg w-full">
        </div>
        <!-- Post Content -->
        <div class="lg:w-3/4 lg:ml-6 mt-4 lg:mt-0">
          <p class="text-sm font-semibold text-purple-600 uppercase">Category 1</p>
          <h3 class="text-xl font-bold text-gray-800 mt-2">Post Title 1</h3>
          <p class="text-gray-600 mt-2">This is an excerpt from Post Title 1. It gives a brief overview of the post content.</p>
        </div>
      </div>

      <!-- Post Item 2 -->
      <div class="flex flex-col lg:flex-row items-start">
        <!-- Post Image -->
        <div class="lg:w-1/4">
          <img src="https://via.placeholder.com/150" alt="Post Title 2" class="rounded-lg shadow-lg w-full">
        </div>
        <!-- Post Content -->
        <div class="lg:w-3/4 lg:ml-6 mt-4 lg:mt-0">
          <p class="text-sm font-semibold text-purple-600 uppercase">Category 2</p>
          <h3 class="text-xl font-bold text-gray-800 mt-2">Post Title 2</h3>
          <p class="text-gray-600 mt-2">This is an excerpt from Post Title 2. It gives a brief overview of the post content.</p>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row items-start">
        <!-- Post Image -->
        <div class="lg:w-1/4">
          <img src="https://via.placeholder.com/150" alt="Post Title 2" class="rounded-lg shadow-lg w-full">
        </div>
        <!-- Post Content -->
        <div class="lg:w-3/4 lg:ml-6 mt-4 lg:mt-0">
          <p class="text-sm font-semibold text-purple-600 uppercase">Category 2</p>
          <h3 class="text-xl font-bold text-gray-800 mt-2">Post Title 2</h3>
          <p class="text-gray-600 mt-2">This is an excerpt from Post Title 2. It gives a brief overview of the post content.</p>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row items-start">
        <!-- Post Image -->
        <div class="lg:w-1/4">
          <img src="https://via.placeholder.com/150" alt="Post Title 2" class="rounded-lg shadow-lg w-full">
        </div>
        <!-- Post Content -->
        <div class="lg:w-3/4 lg:ml-6 mt-4 lg:mt-0">
          <p class="text-sm font-semibold text-purple-600 uppercase">Category 2</p>
          <h3 class="text-xl font-bold text-gray-800 mt-2">Post Title 2</h3>
          <p class="text-gray-600 mt-2">This is an excerpt from Post Title 2. It gives a brief overview of the post content.</p>
        </div>
      </div>
      <!-- Add more posts here as needed -->
    </div>
  </div>

  <!-- All Categories Section -->
  <section class="py-10 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">All Categories</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 border rounded-lg text-center shadow-md">
          <h3 class="text-xl font-bold text-gray-800">Business</h3>
          <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-yellow-500 p-6 border rounded-lg text-center shadow-md text-white">
          <h3 class="text-xl font-bold">Startup</h3>
          <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 border rounded-lg text-center shadow-md">
          <h3 class="text-xl font-bold text-gray-800">Economy</h3>
          <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 border rounded-lg text-center shadow-md">
          <h3 class="text-xl font-bold text-gray-800">Technology</h3>
          <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call-to-Action Section -->
  <section class="bg-gray-100 py-10 text-center">
    <div class="container mx-auto px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-gray-800">Join our team to be a part of our story</h2>
      <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <a href="#" class="mt-6 inline-block bg-yellow-500 text-white px-6 py-3 rounded font-semibold hover:bg-yellow-600">Join Now</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <h1 class="text-2xl font-bold mb-6 lg:mb-0">{Finsweet}</h1>
        <nav class="flex space-x-6">
          <a href="#" class="hover:text-gray-400">Home</a>
          <a href="#" class="hover:text-gray-400">Blog</a>
          <a href="#" class="hover:text-gray-400">About us</a>
          <a href="#" class="hover:text-gray-400">Contact us</a>
          <a href="#" class="hover:text-gray-400">Privacy Policy</a>
        </nav>
      </div>
      <div class="mt-10 text-center lg:text-left">
        <p class="text-gray-400">Subscribe to our newsletter to get the latest updates and news</p>
        <div class="flex flex-col lg:flex-row mt-4 items-center">
          <input type="email" placeholder="Enter Your Email" class="p-3 rounded-lg w-full lg:w-auto lg:flex-1 border-0">
          <button class="bg-yellow-500 text-white px-6 py-3 rounded-lg font-semibold mt-4 lg:mt-0 lg:ml-4">Subscribe</button>
        </div>
        <p class="text-gray-400 mt-6">Finstreet 118 2561 Fintown<br>Email: help@finsweet.com | Phone: 020 7993 2905</p>
      </div>
    </div>
  </footer>

</body>
</html>
