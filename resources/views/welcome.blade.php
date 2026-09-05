<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhemerlyn Loguibis | IT Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { darkMode: 'class', }</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .neon-text-blue { text-shadow: 0 0 10px #3B82F6, 0 0 20px #3B82F6; }
        .neon-text-purple { text-shadow: 0 0 10px #A855F7, 0 0 20px #A855F7; }
        
        /* Glassmorphism handling for both modes */
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(168, 85, 247, 0.2); }
        .dark .glass { background: rgba(17, 24, 39, 0.7); }
        
        .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
        .hover-glow:hover { box-shadow: 0 0 30px rgba(168, 85, 247, 0.3); transform: scale(1.02); transition: all 0.3s ease; }
        .skill-bar { transition: width 1.5s ease; }
        
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f3f4f6; }
        .dark ::-webkit-scrollbar-track { background: #111827; }
        ::-webkit-scrollbar-thumb { background: #A855F7; border-radius: 10px; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white font-sans antialiased selection:bg-purple-500 transition-colors duration-300">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass border-b border-purple-500/30 p-4 transition-colors duration-300">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="font-bold text-xl">
                <span class="text-blue-600 dark:text-blue-500">Jhem</span><span class="text-purple-600 dark:text-purple-500">erlyn</span>
            </div>
            <div class="flex items-center gap-4">
                <button onclick="document.documentElement.classList.toggle('dark')" class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-white transition text-xl">
                    <i class="fas fa-adjust"></i>
                </button>
                <a href="#contact" class="hidden md:block bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full text-sm transition shadow-[0_0_10px_#A855F7]">
                    <i class="fas fa-paper-plane mr-2"></i>Hire Me
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4 bg-gradient-to-br from-white via-gray-100 to-gray-200 dark:from-gray-900 dark:via-gray-800 dark:to-black transition-colors duration-300">
        <!-- Profile Photo -->
        <img src="{{ asset('images/profile/jhemerlyn.jpg') }}" 
             alt="Jhemerlyn Loguibis" 
             onerror="this.src='https://ui-avatars.com/api/?name=Jhemerlyn+Loguibis&background=A855F7&color=fff&size=150'"
             class="w-36 h-36 rounded-full border-4 border-purple-500 shadow-[0_0_25px_#A855F7] mb-6 object-cover bg-white">

        <h1 class="text-5xl md:text-7xl font-bold mb-4">
            <span class="text-blue-600 dark:text-blue-500 neon-text-blue">Jhemerlyn</span>
            <span class="text-purple-600 dark:text-purple-500 neon-text-purple">Loguibis</span>
        </h1>

        <p class="text-xl text-gray-700 dark:text-gray-300 mb-2">
            <i class="fas fa-code text-purple-600 dark:text-purple-400 mr-2"></i>Information Technology Student
        </p>

        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
            <i class="fas fa-map-marker-alt text-blue-600 dark:text-blue-400 mr-2"></i>Bangued, Abra
        </p>

        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <span class="px-4 py-1 bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-300 rounded-full text-sm border border-blue-500/30">
                <i class="fas fa-check-circle mr-1"></i>Web Design
            </span>
            <span class="px-4 py-1 bg-purple-100 dark:bg-purple-500/20 text-purple-600 dark:text-purple-300 rounded-full text-sm border border-purple-500/30">
                <i class="fas fa-check-circle mr-1"></i>Tech Support
            </span>
            <span class="px-4 py-1 bg-blue-100 dark:bg-blue-500/20 text-blue-600 dark:text-blue-300 rounded-full text-sm border border-blue-500/30">
                <i class="fas fa-check-circle mr-1"></i>Data Encoding
            </span>
        </div>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="#about" class="border-2 border-purple-500 text-purple-600 dark:text-purple-400 hover:bg-purple-500 hover:text-white px-8 py-3 rounded-full transition-all shadow-[0_0_15px_#A855F7]">
                <i class="fas fa-user mr-2"></i>About Me
            </a>
            <a href="#experience" class="border-2 border-blue-500 text-blue-600 dark:text-blue-400 hover:bg-blue-500 hover:text-white px-8 py-3 rounded-full transition-all">
                <i class="fas fa-briefcase mr-2"></i>My Experience
            </a>
        </div>
        
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 text-2xl transition">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 bg-gray-100/50 dark:bg-gray-800/50 transition-colors duration-300">
        <div class="max-w-4xl mx-auto">
            <div class="fade-in">
                <h2 class="text-4xl font-bold mb-6 text-center">
                    <span class="text-blue-600 dark:text-blue-500">About</span> <span class="text-purple-600 dark:text-purple-500">Me</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-8"></div>
            </div>

            <div class="glass rounded-2xl p-8 md:p-10 fade-in transition-colors duration-300">
                <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg leading-relaxed mb-4">
                    Hi there! I'm <span class="text-purple-600 dark:text-purple-400 font-semibold">Jhemerlyn Loguibis</span>,
                    a passionate Information Technology student from Bangued, Abra. I have always been fascinated by how technology can solve real-world problems and make everyday tasks easier and more efficient.
                </p>

                <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg leading-relaxed mb-4">
                    During my On-the-Job Training at the <span class="text-blue-600 dark:text-blue-400 font-semibold">Department of Education (DepEd)</span>, I gained valuable hands-on experience in front desk management, basic network troubleshooting, and data encoding. I also had the opportunity to assist teachers and staff with their technical concerns, which sharpened my communication and problem-solving skills.
                </p>

                <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg leading-relaxed">
                    Aside from my academic and professional pursuits, I enjoy learning new technologies, exploring web design trends, and helping local businesses with their tech needs. I believe in continuous learning and I'm always eager to take on new challenges that allow me to grow both personally and professionally.
                </p>

                <!-- Quick Info Restored -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8 pt-6 border-t border-purple-500/20">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">2+</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Years Learning IT</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">2</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">OJT Experiences</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">5+</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Projects Completed</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">3</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Certifications</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills & Experience Section -->
    <section id="experience" class="py-20 px-4 glass transition-colors duration-300">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl font-bold">
                    <span class="text-blue-600 dark:text-blue-500">My</span> <span class="text-purple-600 dark:text-purple-500">Journey</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Skills Restored -->
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-6 border-b-2 border-blue-500 inline-block pb-2">
                        <i class="fas fa-laptop-code text-blue-600 dark:text-blue-400 mr-2"></i>IT Skills
                    </h3>
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-700 dark:text-gray-300">HTML / CSS / Web Design</span>
                                <span class="text-blue-600 dark:text-blue-400 font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-400 h-2.5 rounded-full shadow-[0_0_10px_#3B82F6] skill-bar" style="width: 0%" data-width="85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-700 dark:text-gray-300">PC Troubleshooting & Setup</span>
                                <span class="text-purple-600 dark:text-purple-400 font-semibold">80%</span>
                            </div>
                            <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-400 h-2.5 rounded-full shadow-[0_0_10px_#A855F7] skill-bar" style="width: 0%" data-width="80%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-700 dark:text-gray-300">Office Apps & Data Encoding</span>
                                <span class="text-blue-600 dark:text-blue-400 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-blue-500 to-cyan-400 h-2.5 rounded-full shadow-[0_0_10px_#3B82F6] skill-bar" style="width: 0%" data-width="90%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-700 dark:text-gray-300">Basic Networking</span>
                                <span class="text-purple-600 dark:text-purple-400 font-semibold">70%</span>
                            </div>
                            <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-purple-500 to-pink-400 h-2.5 rounded-full shadow-[0_0_10px_#A855F7] skill-bar" style="width: 0%" data-width="70%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-700 dark:text-gray-300">Customer Service</span>
                                <span class="text-blue-600 dark:text-blue-400 font-semibold">88%</span>
                            </div>
                            <div class="w-full bg-gray-300 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gradient-to-r from-blue-500 to-teal-400 h-2.5 rounded-full shadow-[0_0_10px_#3B82F6] skill-bar" style="width: 0%" data-width="88%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience Timeline Restored -->
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-6 border-b-2 border-purple-500 inline-block pb-2">
                        <i class="fas fa-briefcase text-purple-600 dark:text-purple-400 mr-2"></i>Experience
                    </h3>
                    <div class="space-y-6 relative pl-6 border-l-2 border-purple-500/50">
                        <!-- Experience 1 -->
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-purple-500 rounded-full shadow-[0_0_15px_#A855F7]"></div>
                            <div class="glass rounded-xl p-5 hover-glow transition">
                                <h4 class="font-bold text-lg text-gray-900 dark:text-white">Front Desk & IT Support (OJT)</h4>
                                <p class="text-blue-600 dark:text-blue-400 text-sm">
                                    <i class="fas fa-building mr-1"></i>DepEd | Bangued
                                </p>
                                <p class="text-gray-700 dark:text-gray-400 text-sm mt-2 leading-relaxed">
                                    Managed front desk inquiries and provided administrative support. Assisted with basic network troubleshooting, software installations, and hardware maintenance.
                                </p>
                                <span class="inline-block mt-2 text-xs text-purple-600 dark:text-purple-400 border border-purple-500/30 px-3 py-1 rounded-full">
                                    <i class="far fa-calendar-alt mr-1"></i>2025
                                </span>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-blue-500 rounded-full shadow-[0_0_15px_#3B82F6]"></div>
                            <div class="glass rounded-xl p-5 hover-glow transition">
                                <h4 class="font-bold text-lg text-gray-900 dark:text-white">Freelance Tech Assistant</h4>
                                <p class="text-purple-600 dark:text-purple-400 text-sm">
                                    <i class="fas fa-store mr-1"></i>Local MSMEs | Bangued, Abra
                                </p>
                                <p class="text-gray-700 dark:text-gray-400 text-sm mt-2 leading-relaxed">
                                    Assisted local businesses with software installations, basic graphic design for marketing materials, and hardware maintenance. Provided troubleshooting support.
                                </p>
                                <span class="inline-block mt-2 text-xs text-blue-600 dark:text-blue-400 border border-blue-500/30 px-3 py-1 rounded-full">
                                    <i class="far fa-calendar-alt mr-1"></i>2024 - Present
                                </span>
                            </div>
                        </div>

                        <!-- Experience 3 -->
                        <div class="relative">
                            <div class="absolute -left-[31px] top-1 w-4 h-4 bg-green-500 rounded-full shadow-[0_0_15px_#22C55E]"></div>
                            <div class="glass rounded-xl p-5 hover-glow transition">
                                <h4 class="font-bold text-lg text-gray-900 dark:text-white">Student Assistant</h4>
                                <p class="text-blue-600 dark:text-blue-400 text-sm">
                                    <i class="fas fa-university mr-1"></i>University | Bangued
                                </p>
                                <p class="text-gray-700 dark:text-gray-400 text-sm mt-2 leading-relaxed">
                                    Assisted in the IT department by helping students with computer-related concerns, managing computer lab schedules, and maintaining equipment inventory.
                                </p>
                                <span class="inline-block mt-2 text-xs text-green-600 dark:text-green-400 border border-green-500/30 px-3 py-1 rounded-full">
                                    <i class="far fa-calendar-alt mr-1"></i>2023 - 2024
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / Footer Section Restored -->
    <footer id="contact" class="py-12 px-4 bg-gray-100 dark:bg-gray-900 border-t border-purple-500/20 transition-colors duration-300">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">
                <span class="text-blue-600 dark:text-blue-500">Let's</span> <span class="text-purple-600 dark:text-purple-500">Connect</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mb-6">I'm always open to learning opportunities and collaborations!</p>

            <div class="flex justify-center space-x-6 mb-8 text-3xl">
                <a href="https://www.facebook.com/rhellyn.loguibis" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 transition-transform hover:scale-110">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://github.com/loguibisjhemerlyn663-beep" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-purple-600 dark:hover:text-purple-400 transition-transform hover:scale-110">
                    <i class="fab fa-github"></i>
                </a>
                <a href="mailto:loguibisjhemerlyn663@gmail.com" class="text-gray-500 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-400 transition-transform hover:scale-110">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>

            <div class="flex flex-wrap justify-center gap-4 text-sm mb-8">
                <span class="text-gray-600 dark:text-gray-500">
                    <i class="fas fa-map-marker-alt text-purple-600 dark:text-purple-400 mr-1"></i>Bangued, Abra
                </span>
                <span class="text-gray-600 dark:text-gray-500">
                    <i class="fas fa-phone text-blue-600 dark:text-blue-400 mr-1"></i>+63 912 3456 789
                </span>
                <span class="text-gray-600 dark:text-gray-500">
                    <i class="fas fa-envelope text-purple-600 dark:text-purple-400 mr-1"></i>loguibisjhemerlyn663@gmail.com
                </span>
            </div>

            <div class="pt-6 border-t border-gray-300 dark:border-gray-800 text-gray-600 dark:text-gray-500 text-sm">
                &copy; 2026 <span class="text-purple-600 dark:text-purple-400">Jhemerlyn Loguibis</span>. Built with <i class="fas fa-heart text-red-500"></i> and Laravel.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        const observerOptions = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    const skillBars = entry.target.querySelectorAll('.skill-bar');
                    skillBars.forEach(bar => {
                        setTimeout(() => { bar.style.width = bar.getAttribute('data-width'); }, 300);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>
</body>
</html>