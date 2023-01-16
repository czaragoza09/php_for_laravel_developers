<?php require '../resources/views/layout/html_header.blade.php'; ?>

<?php require '../resources/views/layout/nav.blade.php'; ?>

<div>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-pink-900">
                About
            </h1>
        </div>
    </header>
    <main>
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                    <div class="space-y-5 sm:space-y-4">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Meet our team</h2>
                        <p  class="text-xl text-blue-600 md:text-green-600"><b>Hazlo o no lo hagas pero no lo intentes </b></p>
                        <p class="text-xl text-gray-500">Go with the flow</p>
                    </div>
                    <div class="lg:col-span-2">
                        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                            <li>
                                <div class="flex items-center space-x-4 lg:space-x-6">
                                    <img class="h-56 w-56 rounded-full lg:h-30 lg:w-30" src="http://drive.google.com/uc?export=view&id=15HRR69C1XgbI2vgvjwi1wnxFdUsj6M1a" alt="">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Cinta Zaragoza</h3>
                                        <p class="text-indigo-600">Un intento de algo :)</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center space-x-4 lg:space-x-6">
                                    <img class="h-56 w-56 rounded-full lg:h-50 lg:w-50" src="http://drive.google.com/uc?export=view&id=1SmrPoO0oMHBIFuzRZzsJnlKsGjOJ5In7" alt="">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Michi Zaragoza</h3>
                                        <p class="text-indigo-600">Jefe del departament de michis developers</p>
                                    </div>
                                </div>
                            </li>

                            <!-- More people... -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<?php require '../resources/views/layout/footer.blade.php'; ?>
