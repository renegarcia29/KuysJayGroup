<x-layout title="Rene Biography">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="{{ asset('img/ispsc.png') }}" type="image/x-icon" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap');

    :root {
      --secondary: #212153cc;
      --accent: #ff006e;
    }

    body {
      font-family: 'Raleway', sans-serif;
      line-height: 1.6;
      color: #1a1a2e;
      background-color: #000;
    }

    h1, h2, h3 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
    }

    .hero-gradient {
      background: linear-gradient(135deg, #000, var(--secondary));
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: -30px;
      top: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: var(--accent);
      border: 3px solid white;
      z-index: 1;
    }

    .timeline::before {
      content: '';
      position: absolute;
      left: -20px;
      top: 0;
      width: 2px;
      height: 100%;
      background: var(--accent);
    }

    .hover-grow {
      transition: transform 0.3s ease;
    }

    .hover-grow:hover {
      transform: scale(1.05);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade {
      animation: fadeIn 1s ease forwards;
    }
  </style>
</head>
<body class="antialiased">

  <!-- Navigation -->
  <nav class="fixed w-full bg-white shadow-lg z-50">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
      <div class="text-2xl font-bold text-indigo-600">MY<span class="text-pink-600">BIOGRAPHY</span></div>
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-800 hover:text-pink-600">Home</a>
        <a href="#about" class="text-gray-800 hover:text-pink-600">About Me</a>
        <a href="#journey" class="text-gray-800 hover:text-pink-600">My Journey</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-gradient min-h-screen flex items-center justify-center text-white pt-20">
    <div class="container mx-auto px-6 py-16 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-10 md:mb-0 animate-fade">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Hello, I'm <span class="text-cyan-300"><br>Jaypee Pagaduan</span></h1>
        <p class="text-xl mb-8">This is my journey through life and everything in between.</p>
        <a href="#about" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-300">Discover More</a>
      </div>
      <div class="md:w-1/2 flex justify-center animate-fade">
        <div class="relative rounded-full overflow-hidden border-4 border-white shadow-2xl w-64 h-64 md:w-80 md:h-80">
          <img src="{{ asset('pictures/kuys.png') }}" />
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">About <span class="text-indigo-600">Me</span></h2>
      <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 animate-fade">
          <h3 class="text-2xl font-bold mb-4">Who Am I?</h3>
          <p class="mb-6">I'm Rene Garcia, 21 years old, living in Jardin Tagudin Ilocos Sur, pursuing a Bachelor of Science in Information Technology (BSIT).</p>
          <div class="bg-gray-100 p-6 rounded-lg mb-6">
            <div class="flex items-center mb-4">
              <div class="w-4 h-4 bg-indigo-600 rounded-full mr-3"></div>
              <h4 class="font-bold">Motto</h4>
            </div>
            <p>"As long as I live there are infinite chances"</p>
          </div>
          <div class="flex flex-wrap gap-4">
            <div class="bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full">Creative</div>
            <div class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full">Determined</div>
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-full">Adaptable</div>
            <div class="bg-green-100 text-red-800 px-4 py-2 rounded-full">Competitive</div>
          </div>
        </div>
        <div class="md:w-1/2 animate-fade">
          <h3 class="text-2xl font-bold mb-4">Personal Details</h3>
          <div class="space-y-4">
            <div><span class="font-bold mr-2">Name:</span>Rene Garcia</div>
            <div><span class="font-bold mr-2">Age:</span>21 years old</div>
            <div><span class="font-bold mr-2">Location:</span>Gabur, Tagudin, Ilocos Sur</div>
          </div>
          <div class="mt-8">
            <h4 class="font-bold mb-4">My Interests</h4>
            <div class="grid grid-cols-3 gap-4">
              <div class="flex flex-col items-center">
                <div class="bg-indigo-100 p-4 rounded-full mb-2"><img src="{{ asset('pictures/edit.png') }}" /></div>
                <span>Video Editing</span>
              </div>
              <div class="flex flex-col items-center">
                <div class="bg-pink-100 p-4 rounded-full mb-2"><img src="{{ asset('pictures/sports.png') }}" /></div>
                <span>Sports</span>
              </div>
              <div class="flex flex-col items-center">
                <div class="bg-green-100 p-4 rounded-full mb-2"><img src="{{ asset('pictures/manga.png') }}" /></div>
                <span>Reading</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Journey Timeline -->
  <section id="journey" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">My <span class="text-pink-600">Journey</span></h2>
      <div class="relative timeline">
        <!-- Timeline Items -->
        <div class="relative pl-10 pb-10 timeline-item">
          <div class="bg-white p-6 rounded-lg shadow-lg hover-grow">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold text-indigo-600">Early Beginnings</h3>
              <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">2002 - 2008</span>
            </div>
            <p class="mb-4">I was Born and raised in Tagudin Ilocos Sur, my early years were filled with joy and full of fantasies, in my early years i wanted to be an adult immediately but that was a fool of me, in my early years i love to play outside to play with some kids and also adults to the point that i forget to go home and my mom used to spank my ass for my sttubornest, i also like to go out to play in the Computer shop in the days, to the point that all my money was spent there but i didn't regret it, i will always think that those years were fun and unforgetable.</p>
            <div class="flex overflow-x-auto gap-8 pb-2">
              <img src="{{ asset('pictures/jardin.png') }}" class="rounded-lg" />
              <img src="{{ asset('pictures/arc.png') }}" class="rounded-lg" />

            </div>
          </div>
        </div>

        <div class="relative pl-10 pb-10 timeline-item">
          <div class="bg-white p-6 rounded-lg shadow-lg hover-grow">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold text-indigo-600">Education Years</h3>
              <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">2009 - Present</span>
            </div>
            <p class="mb-4">I Attended Cabugbugan Elementary School in Taguidn Ilocos Sur where i studied my elementary days and graduated elementary (2009 - 2015), I also Attended Tagduin National High School (TNHS) where I studied TVL Home Economics (2019 - 2022). This period was crucial for developing my skills in cooking, then I Attended Ilocos Sur Polytechnic State College in Tagudin Ilocos sure where i study BSIT and still ongoing (2023 - Present)</p>
            <div class="flex overflow-x-auto gap-8 pb-2">
                <img src="{{ asset('pictures/ls.png') }}" class="rounded-lg" />
                <img src="{{ asset('pictures/tn.png') }}" class="rounded-lg" />
                <img src="{{ asset('pictures/is.png') }}" class="rounded-lg" />
            </div>
          </div>
        </div>

        <div class="relative pl-10 timeline-item">
          <div class="bg-white p-6 rounded-lg shadow-lg hover-grow">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold text-indigo-600">Current Chapter</h3>
              <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">2023 - Present</span>
            </div>
            <p class="mb-4">Today, I’m focused on studying BSIT, hoping that all this hard work will pay off.</p>
            <div class="flex overflow-x-auto gap-8 pb-2">
              <img src="{{ asset('pictures/it.jpg') }}" class="rounded-lg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-indigo-900 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0">
          <div class="text-2xl font-bold mb-2">MY<span class="text-pink-400">STORY</span></div>
          <p class="text-indigo-300">A journey through life and everything in between.</p>
        </div>
        <div class="flex space-x-6">
          <a href="#home" class="hover:text-pink-400">Home</a>
          <a href="#about" class="hover:text-pink-400">About</a>
          <a href="#journey" class="hover:text-pink-400">Journey</a>
        </div>
      </div>
      <div class="border-t border-indigo-800 mt-12 pt-8 text-center text-indigo-400">
        <p>© 2025. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>
</x-layout>
