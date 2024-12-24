<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Font Pair Guide</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-800 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold">{Finsweet}</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="/" class="hover:text-gray-300">Home</a></li>
          <li><a href="#" class="hover:text-gray-300">Blog</a></li>
          <li><a href="#" class="hover:text-gray-300">About Us</a></li>
          <li><a href="#" class="hover:text-gray-300">Contact us</a></li>
        </ul>
      </nav>
      <a href="/login" class="bg-white text-gray-800 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Subscribe</a>
    </div>
  </header>

  <!-- Content Section -->
  <section class="bg-white py-10">
    <div class="container mx-auto px-6 lg:px-20">
      <article>
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Step-by-step guide to choosing great font pairs</h1>
        <img src="https://images.unsplash.com/photo-1551836022-aadb801c60ae?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG1lZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="meet" class="w-full h-auto">
        <p class="text-gray-500 text-sm mb-4">By <a href="#" class="text-blue-600 hover:underline">Andrew Jonson</a> | Posted on 27th January 2022</p>
        
        <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>

        <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>

        <ul class="list-disc list-inside mb-6">
          <li>Non blandit massa enim nec scelerisque</li>
          <li>Neque egestas congue quisque egestas</li>
        </ul>

        <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec scelerisque. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non.</p>
      </article>

      <!-- Related Posts Section -->
      <section class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">What to read next</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Related Post Item -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWVldGluZ3xlbnwwfHwwfHx8MA%3D%3D" alt="Post Image" class="w-full">
            <div class="p-4">
              <p class="text-sm text-gray-500 mb-2">By John Doe | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>

          <!-- Related Post Item -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG1lZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="Post Image" class="w-full">
            <div class="p-4">
              <p class="text-sm text-gray-500 mb-2">By John Doe | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>

          <!-- Related Post Item -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1lZXRpbmd8ZW58MHx8MHx8fDA%3D" alt="Post Image" class="w-full">
            <div class="p-4">
              <p class="text-sm text-gray-500 mb-2">By John Doe | Aug 23, 2021</p>
              <h3 class="text-lg font-bold text-gray-800 mb-2">A UX Case Study Creating a Studious Environment for Students</h3>
              <p class="text-gray-600">Socios natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Join our Team Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto text-center px-6">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Join our team to be a part of our story</h2>
      <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <a href="#" class="bg-yellow-500 text-white px-6 py-3 rounded font-semibold hover:bg-yellow-600">Join Now</a>
    </div>
  </section>

    </div>
  </section>

  <!-- Subscribe Section -->
  <footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-xl font-bold mb-4">Subscribe to our newsletter to get latest updates and news</h2>
      <form class="flex justify-center items-center space-x-4">
        <input type="email" placeholder="Enter Your Email" class="px-4 py-2 rounded-lg text-gray-700 w-1/3">
        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded font-semibold hover:bg-yellow-600">Subscribe</button>
      </form>
      <p class="text-gray-400 mt-6">Finsweet | 118 2561 Finsweet | hello@finsweet.com | 020 7993 2905</p>
    </div>
  </footer>

</body>
</html>
