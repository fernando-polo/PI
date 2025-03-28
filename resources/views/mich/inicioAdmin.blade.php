<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <section class="py-24 px-4 lg:px-16">
    <div class="container mx-auto px-[12px] md:px-24 xl:px-12 max-w-[1300px] nanum2">
        <h1 class="text-center text-5xl pb-12" style="color: black;">Administrador MedCLINIC</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-28 lg:gap-y-16">
            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <a href="/" class="block">
                    <div class="h-28">
                        <div
                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-orange-400 rounded-xl justify-items-center align-middle">
                            <img src="{{asset('/imageneMich/ima2.webp')}}"
                                class="w-36 h-36  mt-6 m-auto" alt="Automotive" title="Automotive" loading="lazy"
                                width="200" height="200">
                        </div>
                    </div>
                    <div class="p-6   z-10 w-full   ">
                        <p
                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                            USUARIOS
                        </p>
                    </div>
                </a>
            </div>

            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <a href="/" class="block">
                    <div class="h-28">
                        <div
                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-orange-400 rounded-xl justify-items-center align-middle">
                            <img src="{{asset('/imageneMich/admedico.png')}}"
                                class="w-36 h-36  mt-6 m-auto" alt="Toys and Baby Products"
                                title="Toys and Baby Products" loading="lazy" width="200" height="200">
                        </div>
                    </div>
                    <div class="p-6   z-10 w-full   ">
                        <p
                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                            MEDICOS
                        </p>
                    </div>
                </a>
            </div>

            <div class="relative group h-48 flex   flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <a href="/" class="block">
                    <div class="h-28">
                        <div
                            class="absolute -top-20 lg:top-[-10%] left-[5%] z-40  group-hover:top-[-40%] group-hover:opacity-[0.9]   duration-300 w-[90%] h-48 bg-orange-400 rounded-xl justify-items-center align-middle">
                            <img src="{{asset('/imageneMich/estudios.png')}}"
                                class="w-36 h-36  mt-6 m-auto" alt="Medical" title="Medical" loading="lazy" width="200"
                                height="200">
                        </div>
                    </div>
                    <div class="p-6   z-10 w-full   ">
                        <p
                            class="mb-2 inline-block text-tg text-center w-full  text-xl  font-sans  font-semibold leading-snug tracking-normal   antialiased">
                            ESTUDIOS
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
</body>
</html>