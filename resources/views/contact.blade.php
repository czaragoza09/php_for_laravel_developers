<?php require '../resources/views/layout/html_header.blade.php'; ?>

<?php require '../resources/views/layout/nav.blade.php'; ?>

<div>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-pink-900">
                Contact
            </h1>
        </div>
    </header>
    <main>
        <!--
          This example requires some changes to your config:

          ```
          // tailwind.config.js
          module.exports = {
            // ...
            plugins: [
              // ...
              require('@tailwindcss/forms'),
            ],
          }
          ```
        -->
        <div class="overflow-hidden bg-white py-16 px-6 lg:px-8 lg:py-24">
            <div class="relative mx-auto max-w-xl">
                <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                    <defs>
                        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                </svg>
                <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                    <defs>
                        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                </svg>
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
                    <p class="mt-4 text-lg leading-6 text-gray-500">Introdueix les teves dades per subscriure't i rebre les notificacions de les actualitzacions de la pàgina</p>
                </div>
                <div class="mt-12">
                    <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Noms</label>
                            <div class="mt-1">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Cognoms</label>
                            <div class="mt-1">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="company" class="block text-sm font-medium text-gray-700">Companyia</label>
                            <div class="mt-1">
                                <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-sm font-medium text-gray-700">Numero de telefón</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center">
                                    <label for="country" class="sr-only">Country</label>
                                    <select id="country" name="country" class="h-full rounded-md border-transparent bg-transparent py-0 pl-4 pr-8 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500">
                                        <option>US</option>
                                        <option>CA</option>
                                        <option>EU</option>
                                    </select>
                                </div>
                                <input type="text" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 pl-20 focus:border-indigo-500 focus:ring-indigo-500" placeholder="+34 639 58 56 25">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                    <button type="button" class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" role="switch" aria-checked="false">
                                        <span class="sr-only">Agree to policies</span>
                                        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <div class="ml-3">
                                    <p class="text-base text-gray-500">
                                        Seleccionant això estas d'acord amb les següents politiques de privacitat:

                                        <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                        Objecte: El present document té com a objectiu establir les bases legals per al tractament de les dades personals per a la subscripció al butlletí informatiu en català.

                                        Responsable del tractament: [Cinta Zaragoza Blanch].

                                        Finalitat del tractament: Les dades personals seran tractades per a la finalitat de mantenir informat als subscriptors sobre les activitats i novetats relacionades amb aquesta pàgina web.

                                        Legitimació: La base legal per al tractament de les dades és el consentiment prestat pel titular de les dades.

                                        Destinataris: Les dades no seran cedides a tercers, excepte en els casos en què existeixi una obligació legal.

                                        Drets: Els titulars de les dades tenen el dret d'accés, rectificació, supressió, oposició, limitació del tractament i portabilitat de les seves dades. També tenen dret a retirar el consentiment prestat en qualsevol moment sense que això afecti la licitud del tractament basat en el consentiment prestat abans de la seva retirada.

                                        Mesures de seguretat: S'han adoptat les mesures tècniques i organitzatives necessàries per garantir la seguretat de les dades personals i evitar la seva alteració, pèrdua, tractament o accés no autoritzat.

                                        Informació addicional: Per a qualsevol consulta o aclariment relacionat amb el tractament de les dades personals, els titulars de les dades poden contactar amb Cinta Zaragoza: cintazaragozablanch@gmail.com .

                                        Aquest document ha estat elaborat i actualitzat en data 13/02/23.
                                        <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <button type="submit" class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Let's talk <3</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>
</div>
<?php require '../resources/views/layout/footer.blade.php'; ?>
