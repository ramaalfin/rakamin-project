<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">
    <nav class="bg-slate-700 px-6 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center">
                <img src="{{ '/assets/img/logo.png' }}" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="mega-menu-full" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mega-menu-full" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mega-menu-full"
                class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col text-sm p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <button id="mega-menu-full-cloud-button" data-collapse-toggle="mega-menu-full-cloud"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Cloud Hosting
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-server-button" data-collapse-toggle="mega-menu-full-server"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Server
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-internet-button" data-collapse-toggle="mega-menu-full-internet"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Internet Access
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-domain-button" data-collapse-toggle="mega-menu-full-domain"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Domain
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-email-button" data-collapse-toggle="mega-menu-full-email"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Email Suite
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-services-button" data-collapse-toggle="mega-menu-full-services"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Services
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <button id="mega-menu-full-customer-button" data-collapse-toggle="mega-menu-full-customer"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded md:w-auto md:hover:bg-transparent md:border-0 md:p-0">Customer Care
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0">Promo</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-cloud"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Value Cloud Hosting</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Harga ekonomis dengan performa optimal. Cocok untuk website sederhana seperti blog.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Wordpress Hosting</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk kinerja WordPress yang optimal.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Unlimited Hosting</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Hosting dengan Unlimited resource yang dapat diandalkan.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">High Performance Bisnis</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Productivity starts here! Untuk website profesional perusahaan, e-commerce, startup bisnis, serta website e-learning.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">High Performance Enterprise</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Hosting dengan dedicated resource. Tanpa gangguan & batasan. More productivity, less drama.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Private Label cPanel Reseller</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Bergabung jadi Reseller sekarang dan mulai Bisnis Sukses bersama Qwords.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-server"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Cloud VPS KVM SSD PROMO</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">KVM Ultrafast dengan Easy Install Control Panel & dukungan OS terbaru</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Server Sekolah CBT/Moodle PROMO</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Server untuk kebutuhan e-learning, ujian sekolah, administrasi, dan PPDB online</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Fleksibel VPS</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Teknologi KVM. Bayar hanya saat layanan aktif & digunakan saja. Mulai Rp 200/jam, PAY AS YOU GROWTH</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Dedicated Server</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Multiple Internet Connection, Fiber Optic mulai 1Gbps dan 10Gbps, Monitoring 24/7 by NOC</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Colocation Server</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">99 % Uptime Server, UPS Backup, On-Site & OffSite Monitoring</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Leased To Owned Dedicated Server</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Sekarang sewa, Nanti jadi hak milik Anda!.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-internet"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">BroadBand Home</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Internet untuk kebutuhan rumah/personal dengan koneksi stabil tanpa buffering hingga 1Gbps. Kuota Unlimited.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Broadband Business</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Jalankan bisnis bisa lebih fokus dengan jaringan internet cepat, koneksi stabil, dan aman.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Broadband Wireless</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Internet dengan teknologi wireless super cepat, bebas FUP untuk kebutuhan rumah & bisnis.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Check Coverage Area Broadband</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Mau pasang internet? Cek jangkauan internet Broadband Qwords di area rumah Anda.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-domain"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Daftar Domain</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Miliki ekstensi Domain terbaik untuk identitas website & bisnis di internet</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Domain Premium .id</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Domain premium berkualitas untuk website identitas Indonesia</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Domain Backorder</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Kesempatan rebut Domain berkualitas yang tidak diperbarui pemiliknya</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Domain Privacy Protection</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Lindungi data pribadi & rahasia Anda dari publik</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Sewa Domain</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Solusi dapatkan Domain Premium tanpa bayar biaya penuh</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Jual Beli & Lelang Domain</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Untung berlipat dari jual Domain & Kesempatan dapat Domain cantik berkualitas dari sistem lelang</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Domain Negotiator/Domain Broker</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Broker Domain pribadi siap negosiasikan harga terbaik untuk Domain impian Anda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Private Label Domain Reseller</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Qwords menyediakan paket Reseller Domain .ID, domain .com dan lainnya</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-email"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Titan Email</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Tampil profesional dan bangun kepercayaan untuk bisnis Anda dengan email domain khusus dari Titan.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">EC Collaboration Suite</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Layanan email premium dari Qwords dengan 25GB storage dan kapasitas penyimpanan hingga 1000 akun.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Microsoft 365</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Paket layanan produk dari Microsoft untuk meningkatkan produktivitas kerja perusahaan Anda.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Google Workspace</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Layanan yang menyediakan beberapa versi produk Google yang dapat disesuaikan dengan Nama Domain pelanggan.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Mailtogo</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Kegiatan promosi, campaign, diskon, penawaran produk, hingga membership bisa Anda wujudkan dengan mudah melalui email marketing</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-services"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-3 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">SSL</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Secure Sockets Layer. Mengamankan data & komunikasi antara komputer & server.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Web Design</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Wujudkan Website Impian Anda dengan mudah.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Manage The Box Server</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Manage Service untuk mengatur Server Anda di Qwords.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Digital Signature</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Cukup dengan Digital Signature untuk menandatangani semua dokumen online anda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Diego VPN</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Bebas berekspresi dengan Private Network yang aman, super cepat, dan easy to use.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Licenses</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Lisensi software yang bermanfaat bagi bisnis online anda.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Offline Backup</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Backup offline dari server anda.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Extended Support</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Bantuan ekstra mengatur akun Hosting menggunakan Cpanel.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Advanced Backup</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Advanced Backup untuk data Anda. Berbasis Acronis</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Flexi Main Domain</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Ubah nama Domain utama pada Hosting/Server Anda di Qwords.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Qwords Data Protection</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Melindungi data Anda secara optimal dari serangan virus, hacking, dan penghapusan file tanpa izin, Didukung Acronis</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Hosting Insurance</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Amankan akun Anda dari Downtime Network dengan layanan asuransi dari Qwords</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Qwords Link-Q</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">FREE! Satu halaman berisi semua tautan penting mulai dari media sosial hinggga link e-commerce Anda.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">WhatsApp Link Generator</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Ubah nomor WA Bisnis menjadi link! Aktifkan click to chat dan mulai komunikasi dengan pelanggan.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-customer"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-3 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Pembayaran</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Informasi lengkap seputar cara bayar, konfirmasi bayar dan faktur pajak.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Bantuan 24 Jam via Support Ticket Response Cepat</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Tim Support kami akan membantu menyelesaikan masalah secara solutif & respon cepat, 24/7</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Knowledge Base</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Panduan yang lengkap, informasi mengenai Hosting, website, dll.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">FAQ</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Temukan jawaban dari pertanyaan yang paling sering diajukan di sini.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Blog</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Temukan tips & artikel menarik seputar Hosting, Domain, website, dan internet di sini.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Kontak</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Butuh informasi lebih lanjut? Kunjungi outlet kami atau hubungi melalui call center, live chat, dan media sosial.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Qwords Rewards</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Kumpulkan poin untuk setiap aktivitas di portal Qwords, lalu gunakan poin untuk berbelanja!</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Afiliasi</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Dapatkan Penghasilan Tambahan secara Online dengan mengikuti program Afiliasi Qwords</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Network Tools</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Gunakan network tools gratis yang Anda butuhkan untuk mengecek jaringan dan informasi nama domain</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="relative w-full overflow-hidden">
        <div class="min-h-screen flex dark:from-gray-900 bg-gradient-to-b from-white to-green-50">
            <div class="container m-auto px-6 py-20 md:pb-0 md:pt-40 md:px-12 lg:py-0 lg:px-10">
                <div class="flex flex-wrap gap-12">
                    <div class="lg:w-6/12 lg:pt-32 lg:pb-20">
                        <div class="space-y-8 mt-8 lg:-mr-24 xl:-mr-0">
                            <h1 class="text-4xl text-gray-800 dark:text-white font-bold md:text-5xl lg:leading-tight">
                                Uncompromised Versatility –When it Matters the Most.</h1>
                            <p class="text-lg text-gray-600 dark:text-gray-300">Quod rerum dolor ab harum facere quo
                                nihil labore necessitatibus tempora?</p>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="button" title="Start buying"
                                    class="w-full py-3 px-6 rounded-xl text-center transition bg-green-600 hover:bg-green-700 active:bg-green-800 focus:bg-green-500 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Book Demo
                                    </span>
                                </button>
                                <button type="button" title="Start buying"
                                    class="w-full py-3 px-6 rounded-xl text-center transition dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                    <div class="flex justify-center">
                                        <span class="block text-green-700 dark:text-green-400 font-semibold">
                                            Our showreel
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 pt-8 border-t border-gray-300 dark:border-gray-700">
                            <h6 class="text-lg text-green-800 dark:text-green-400 font-semibold">Trusted by</h6>
                            <div class="mt-6 flex gap-6">
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/grabyo.png" width="50" height="20"
                                        alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/lifegroups.png" width="50" height="20"
                                        alt="logo partener">
                                </div>
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/lilly.png" width="50" height="20"
                                        alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale"
                                        src="images/clients/microsoft.png" width="50" height="20"
                                        alt="logo partener">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="hidden bottom-0 md:-right-32 md:block md:w-full md:ml-auto lg:absolute lg:-right-32 lg:w-[60%] xl:-right-48">
                        <img src="images/horse1.png" class="ml-48 lg:ml-0" alt="gril on an horse" loading="lazy"
                            width="1053" height="772">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    window.addEventListener('load', function () {
        document.getElementById('mega-menu-full-cloud').classList.add('hidden');
        document.getElementById('mega-menu-full-server').classList.add('hidden');
        document.getElementById('mega-menu-full-internet').classList.add('hidden');
        document.getElementById('mega-menu-full-domain').classList.add('hidden');
        document.getElementById('mega-menu-full-email').classList.add('hidden');
        document.getElementById('mega-menu-full-services').classList.add('hidden');
        document.getElementById('mega-menu-full-customer').classList.add('hidden');
    });
</script>

</html>
