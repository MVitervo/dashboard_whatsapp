<link rel="stylesheet" href="/public/css/output.css">


<!DOCTYPE html>
<html lang="es" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContaFácil | Aprende Contabilidad</title>

    <!-- Tailwind compilado -->
    <link rel="stylesheet" href="/public/css/output.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar-link.active {
            background: #F0E9FF;
            color: #8052D1;
            font-weight: 700;
        }

        .dark .sidebar-link.active {
            background: #40305F;
            color: #C9ABFF;
        }

        .topic-card {
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .topic-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(50, 30, 80, .10);
        }

        .dark .topic-card:hover {
            box-shadow: 0 12px 25px rgba(0, 0, 0, .20);
        }
    </style>
</head>

<body class="bg-[#FFF9F0] text-[#302344]
             dark:bg-[#17152B] dark:text-white
             transition-colors duration-300">

    <div class="min-h-screen flex">

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64
               bg-white dark:bg-[#211E38]
               border-r border-purple-100 dark:border-[#39334E]
               flex flex-col
               -translate-x-full lg:translate-x-0
               transition-transform duration-300">

            <!-- LOGO -->
            <div class="h-20 px-6 flex items-center gap-3
                    border-b border-purple-100 dark:border-[#39334E]">

                <div class="w-11 h-11 rounded-xl bg-violet-500
                        flex items-center justify-center text-2xl">
                    🧮
                </div>

                <div>
                    <h1 class="text-xl font-extrabold tracking-tight">
                        ContaFácil
                    </h1>

                    <p class="text-[10px] text-purple-400 font-bold tracking-widest">
                        APRENDE Y CRECE
                    </p>
                </div>

                <button id="closeSidebar"
                    class="lg:hidden ml-auto text-slate-400">
                    ✕
                </button>
            </div>

            <!-- NAVEGACIÓN -->
            <nav class="flex-1 p-4 overflow-y-auto">

                <p class="text-[10px] font-bold tracking-widest
                      text-slate-400 mb-4 px-3">
                    MENÚ PRINCIPAL
                </p>

                <div class="space-y-1">

                    <a href="#" class="sidebar-link active flex items-center gap-3
                                    p-3 rounded-xl text-sm">
                        <span>🏠</span> Inicio
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>📚</span> Conceptos básicos
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>💰</span> El mundo del dinero
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>🧮</span> Cuentas contables
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>📊</span> Gráficas y balances
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>📝</span> Ejemplos prácticos
                    </a>

                    <a href="#" class="sidebar-link flex items-center gap-3
                                    p-3 rounded-xl text-sm
                                    hover:bg-purple-50 dark:hover:bg-[#302B48]">
                        <span>🏆</span> Mis retos
                    </a>

                </div>

                <!-- BLOQUE INFORMATIVO -->
                <div class="mt-8 p-4 rounded-2xl bg-[#FFF1D6]
                        dark:bg-[#39304A]">

                    <div class="text-3xl mb-2">🏆</div>

                    <h3 class="font-bold text-sm text-[#77521B]
                           dark:text-yellow-300">
                        ¡Tú puedes lograrlo!
                    </h3>

                    <p class="text-xs text-[#98733B] dark:text-slate-300 mt-2">
                        Cada concepto que aprendes te acerca a dominar
                        la contabilidad.
                    </p>

                </div>

            </nav>

            <!-- CONFIGURACIÓN -->
            <div class="p-4 border-t border-purple-100 dark:border-[#39334E]">

                <a href="#"
                    class="flex items-center gap-3 p-3 rounded-xl
                       text-sm hover:bg-purple-50 dark:hover:bg-[#302B48]">
                    ⚙️ Configuración
                </a>

            </div>

        </aside>

        <!-- OVERLAY MÓVIL -->
        <div id="sidebarOverlay"
            class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden">
        </div>

        <!-- CONTENIDO -->
        <main class="flex-1 min-w-0 lg:ml-64">

            <!-- HEADER -->
            <header class="h-20 px-5 md:px-8 flex items-center
                       justify-between bg-white dark:bg-[#211E38]
                       border-b border-purple-100 dark:border-[#39334E]
                       sticky top-0 z-20">

                <div class="flex items-center gap-3">

                    <button id="openSidebar"
                        class="lg:hidden text-2xl">
                        ☰
                    </button>

                    <div>
                        <h2 class="font-bold text-lg">
                            Mi escritorio
                        </h2>

                        <p class="text-xs text-slate-400">
                            ¡Bienvenido a tu aventura contable!
                        </p>
                    </div>

                </div>

                <div class="flex items-center gap-3">

                    <!-- CAMBIAR TEMA -->
                    <button id="themeToggle"
                        class="w-10 h-10 rounded-xl bg-purple-50
                           dark:bg-[#39334E] flex items-center
                           justify-center hover:scale-105 transition">

                        <span id="themeIcon">🌙</span>

                    </button>

                    <!-- PERFIL -->
                    <div class="w-10 h-10 rounded-full bg-[#FFE5B4]
                            flex items-center justify-center text-xl">
                        👨🏻‍🎓
                    </div>

                </div>

            </header>

            <!-- CONTENIDO PRINCIPAL -->
            <section class="p-5 md:p-8 max-w-[1500px] mx-auto space-y-8">

                <!-- BIENVENIDA -->
                <section class="grid grid-cols-1 xl:grid-cols-5 gap-5">

                    <div class="xl:col-span-3 bg-[#EDE3FF]
                            dark:bg-[#302747] rounded-3xl p-6 md:p-8
                            flex flex-col justify-center">

                        <span class="text-xs font-bold text-violet-600
                                 dark:text-violet-300 tracking-wider">
                            ✨ TU AVENTURA CONTABLE COMIENZA AQUÍ
                        </span>

                        <h1 class="text-3xl md:text-4xl font-extrabold
                               text-[#38264F] dark:text-white mt-4
                               leading-tight">

                            ¡Hola, futuro experto en contabilidad!

                        </h1>

                        <p class="text-sm text-[#756187] dark:text-slate-300
                              mt-4 max-w-xl leading-relaxed">

                            Descubre cómo funciona el mundo del dinero,
                            aprende a entender las cuentas y desarrolla
                            nuevas habilidades paso a paso.

                        </p>

                        <div class="mt-6">

                            <a href="#conceptos"
                                class="inline-flex items-center gap-2
                                   bg-violet-600 hover:bg-violet-700
                                   text-white px-6 py-3 rounded-xl
                                   font-bold text-sm transition">

                                Comenzar a aprender
                                <span>→</span>

                            </a>

                        </div>

                    </div>

                    <!-- ILUSTRACIÓN -->
                    <div class="xl:col-span-2 bg-[#FFF0D3]
                            dark:bg-[#39304A] rounded-3xl
                            min-h-64 flex flex-col items-center
                            justify-center p-6 relative overflow-hidden">

                        <div class="absolute w-40 h-40 bg-yellow-300/30
                                rounded-full blur-2xl"></div>

                        <div class="relative text-center">

                            <div class="text-7xl md:text-8xl mb-3">
                                🧮
                            </div>

                            <div class="flex justify-center gap-3 text-4xl">
                                💰 🪙 📊
                            </div>

                            <p class="font-bold text-[#79561D]
                                  dark:text-yellow-300 mt-4">
                                ¡Los números cuentan historias!
                            </p>

                        </div>

                    </div>

                </section>

                <!-- CONCEPTOS -->
                <section id="conceptos">

                    <div class="flex items-center justify-between mb-5">

                        <div>
                            <h2 class="text-xl font-extrabold">
                                Explora el mundo contable 📚
                            </h2>

                            <p class="text-sm text-slate-500
                                  dark:text-slate-400 mt-1">
                                Comienza con los conceptos esenciales.
                            </p>
                        </div>

                        <a href="#"
                            class="text-violet-600 dark:text-violet-300
                               text-xs font-bold hidden sm:block">
                            Ver todos →
                        </a>

                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2
                            xl:grid-cols-4 gap-4">

                        <!-- ACTIVO -->
                        <article class="topic-card bg-[#DFF8EF]
                                    dark:bg-[#203C36]
                                    rounded-2xl p-5">

                            <div class="text-4xl mb-4">💰</div>

                            <h3 class="font-extrabold text-lg
                                   text-[#245E49] dark:text-green-300">
                                Activo
                            </h3>

                            <p class="text-sm text-[#527C6C]
                                  dark:text-slate-300 mt-2">
                                Todo lo que una empresa posee
                                o tiene derecho a recibir.
                            </p>

                            <a href="#"
                                class="inline-block mt-5 text-sm
                                   font-bold text-[#20845D]
                                   dark:text-green-300">
                                Aprender más →
                            </a>

                        </article>

                        <!-- PASIVO -->
                        <article class="topic-card bg-[#FFE5E8]
                                    dark:bg-[#472A39]
                                    rounded-2xl p-5">

                            <div class="text-4xl mb-4">🧾</div>

                            <h3 class="font-extrabold text-lg
                                   text-[#87404C] dark:text-pink-300">
                                Pasivo
                            </h3>

                            <p class="text-sm text-[#996570]
                                  dark:text-slate-300 mt-2">
                                Las deudas y obligaciones
                                que tiene una empresa.
                            </p>

                            <a href="#"
                                class="inline-block mt-5 text-sm
                                   font-bold text-[#D45B70]
                                   dark:text-pink-300">
                                Aprender más →
                            </a>

                        </article>

                        <!-- CAPITAL -->
                        <article class="topic-card bg-[#FFF0D3]
                                    dark:bg-[#473B29]
                                    rounded-2xl p-5">

                            <div class="text-4xl mb-4">🪙</div>

                            <h3 class="font-extrabold text-lg
                                   text-[#79561D] dark:text-yellow-300">
                                Capital
                            </h3>

                            <p class="text-sm text-[#987B49]
                                  dark:text-slate-300 mt-2">
                                Los recursos propios que pertenecen
                                a los propietarios.
                            </p>

                            <a href="#"
                                class="inline-block mt-5 text-sm
                                   font-bold text-[#C18720]
                                   dark:text-yellow-300">
                                Aprender más →
                            </a>

                        </article>

                        <!-- BALANCE -->
                        <article class="topic-card bg-[#E1F1FF]
                                    dark:bg-[#253B50]
                                    rounded-2xl p-5">

                            <div class="text-4xl mb-4">📊</div>

                            <h3 class="font-extrabold text-lg
                                   text-[#315C87] dark:text-blue-300">
                                Balance general
                            </h3>

                            <p class="text-sm text-[#617F9E]
                                  dark:text-slate-300 mt-2">
                                Conoce la situación financiera
                                de una entidad.
                            </p>

                            <a href="#"
                                class="inline-block mt-5 text-sm
                                   font-bold text-[#397EC2]
                                   dark:text-blue-300">
                                Aprender más →
                            </a>

                        </article>

                    </div>

                </section>

                <!-- APRENDIZAJE Y EJEMPLO -->
                <section class="grid grid-cols-1 xl:grid-cols-3 gap-5">

                    <!-- PROGRESO -->
                    <div class="xl:col-span-1 bg-white dark:bg-[#211E38]
                            border border-purple-100 dark:border-[#39334E]
                            rounded-2xl p-6">

                        <div class="flex justify-between items-center">

                            <h3 class="font-extrabold">
                                Mi aprendizaje
                            </h3>

                            <span class="bg-yellow-100 text-yellow-700
                                     dark:bg-yellow-500/20 dark:text-yellow-300
                                     px-3 py-1 rounded-full text-xs font-bold">
                                Nivel 1
                            </span>

                        </div>

                        <div class="text-5xl mt-6">🚀</div>

                        <h4 class="font-bold mt-4">
                            ¡Vas por buen camino!
                        </h4>

                        <p class="text-sm text-slate-500
                              dark:text-slate-400 mt-2">
                            Continúa explorando los fundamentos
                            de la contabilidad.
                        </p>

                        <div class="flex justify-between text-xs mt-6 mb-2">

                            <span class="text-slate-500">
                                Progreso general
                            </span>

                            <span class="font-bold text-violet-600">
                                60%
                            </span>

                        </div>

                        <div class="w-full h-3 rounded-full
                                bg-purple-100 dark:bg-[#39334E] overflow-hidden">

                            <div class="h-full bg-violet-500 rounded-full"
                                style="width: 60%">
                            </div>

                        </div>

                    </div>

                    <!-- EJEMPLO PRÁCTICO -->
                    <div class="xl:col-span-2 bg-white dark:bg-[#211E38]
                            border border-purple-100 dark:border-[#39334E]
                            rounded-2xl p-6">

                        <div class="flex justify-between items-center">

                            <h3 class="font-extrabold">
                                Contabilidad en la vida real 💡
                            </h3>

                            <span class="text-xs text-orange-500 font-bold">
                                EJEMPLO
                            </span>

                        </div>

                        <p class="text-sm text-slate-500
                              dark:text-slate-400 mt-3">
                            Imagina que tienes una pequeña tienda.
                            Estos son algunos de sus recursos:
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">

                            <div class="bg-green-50 dark:bg-[#203C36]
                                    rounded-xl p-4">

                                <p class="text-xs text-green-700
                                      dark:text-green-300 font-bold">
                                    ACTIVO
                                </p>

                                <h4 class="text-2xl font-extrabold
                                       text-green-700 dark:text-green-300 mt-2">
                                    $50,000
                                </h4>

                                <p class="text-xs text-green-700
                                      dark:text-slate-300 mt-2">
                                    Dinero disponible en caja.
                                </p>

                            </div>

                            <div class="bg-red-50 dark:bg-[#472A39]
                                    rounded-xl p-4">

                                <p class="text-xs text-red-600
                                      dark:text-pink-300 font-bold">
                                    PASIVO
                                </p>

                                <h4 class="text-2xl font-extrabold
                                       text-red-600 dark:text-pink-300 mt-2">
                                    $20,000
                                </h4>

                                <p class="text-xs text-red-600
                                      dark:text-slate-300 mt-2">
                                    Deuda con un proveedor.
                                </p>

                            </div>

                        </div>

                        <div class="mt-5 flex items-center justify-between
                                border-t border-slate-100
                                dark:border-[#39334E] pt-5">

                            <div>
                                <p class="text-xs text-slate-500">
                                    CAPITAL CONTABLE
                                </p>

                                <h4 class="text-2xl font-extrabold
                                       text-violet-600 dark:text-violet-300">
                                    $30,000
                                </h4>
                            </div>

                            <div class="text-4xl">🧮</div>

                        </div>

                    </div>

                </section>

                <!-- FOOTER -->
                <footer class="text-center py-6">

                    <p class="text-xs text-slate-400">
                        ContaFácil © 2026 · Aprende a contar,
                        comprender y crecer. 🪙
                    </p>

                </footer>

            </section>

        </main>

    </div>

    <!-- JAVASCRIPT -->
    <script>
        // TEMA CLARO / OSCURO

        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');

        function setTheme(theme) {

            document.documentElement.classList.toggle(
                'dark',
                theme === 'dark'
            );

            themeIcon.textContent =
                theme === 'dark' ? '☀️' : '🌙';

            localStorage.setItem('contafacil-theme', theme);

        }

        const savedTheme = localStorage.getItem('contafacil-theme');

        setTheme(savedTheme || 'light');

        themeToggle.addEventListener('click', () => {

            const isDark = document.documentElement.classList.contains('dark');

            setTheme(isDark ? 'light' : 'dark');

        });


        // SIDEBAR RESPONSIVE

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        const openSidebar = document.getElementById('openSidebar');
        const closeSidebar = document.getElementById('closeSidebar');

        function toggleSidebar(show) {

            sidebar.classList.toggle('-translate-x-full', !show);

            overlay.classList.toggle('hidden', !show);

        }

        openSidebar.addEventListener('click', () => {
            toggleSidebar(true);
        });

        closeSidebar.addEventListener('click', () => {
            toggleSidebar(false);
        });

        overlay.addEventListener('click', () => {
            toggleSidebar(false);
        });
    </script>

</body>

</html>