@extends('admin.layouts.app')

@section('content')
<section class="py-8 bg-blueGray-50">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6 lg:mb-0">
                <div class="pt-12 pb-20 px-8 md:px-12 lg:px-16 bg-white rounded-3xl">
                    <h3 class="mb-8 text-xl font-heading font-medium">Bekleyen Başvurular</h3>
                    <div class="chart" data-type="radial-bar-subscriptions"></div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6 lg:mb-0">
                <div class="pt-12 pb-20 px-8 md:px-12 lg:px-16 bg-white rounded-3xl">
                    <h3 class="mb-8 text-xl font-heading font-medium">Evrak Bekleyenler</h3>
                    <div class="chart" data-type="radial-bar-payments"></div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 px-3">
                <div class="pt-12 pb-20 px-8 md:px-12 lg:px-16 bg-white rounded-3xl">
                    <h3 class="mb-8 text-xl font-heading font-medium">Tamamlananlar</h3>
                    <div class="chart" data-type="radial-bar-inventory"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-8 bg-blueGray-50">
    <div class="container px-4 mx-auto">
        <div class="p-7 pb-16 pt-12 bg-white rounded-5xl">
            <div class="flex flex-wrap px-9 mb-8 md:mb-0">
                <div class="w-full md:w-1/2">
                    <h2 class="mb-9 text-3xl font-heading font-medium">Bekleyen İşlemler</h2>
                </div>
                <div class="w-full md:w-1/2 max-w-max md:ml-auto"><a class="block py-4 px-7 w-full leading-3 text-white font-semibold tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" href="#">Dışarı Aktar</a></div>
            </div>
            <div class="px-9 mb-4">
                <div class="border-t border-gray-100"><a class="inline-block py-4 pr-20 mr-12 text-blue-500 hover:text-blue-600 font-heading font-medium border-t-2 border-blue-500" href="#">Tümü</a><a class="inline-block py-4 text-gray-300 hover:text-gray-400 font-heading font-medium" href="#">Tamamlananlar</a></div>
            </div>
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full overflow-hidden">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="flex items-center pl-9 h-20 bg-white text-left">
                                    <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><a class="inline-block mr-4 text-sm text-body text-opacity-40 font-heading font-semibold uppercase min-w-max" href="#">Numarası</a>
                                    <div>
                                        <svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.898704 3.84541C0.692525 4.05153 0.359292 4.05153 0.154634 3.84541C-0.0507836 3.6393 -0.0523052 3.30629 0.154635 3.10017L3.12787 0.154586C3.33329 -0.0515278 3.66576 -0.0515278 3.8727 0.154586L6.84594 3.10017C7.05135 3.30552 7.05135 3.6393 6.84594 3.84541C6.63976 4.05153 6.30652 4.05153 6.10187 3.84541L3.49915 1.42973L0.898704 3.84541Z" fill="#9E9FA0"></path>
                                        </svg><svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.10129 0.154586C6.30747 -0.0515286 6.64071 -0.0515286 6.84537 0.154586C7.05078 0.3607 7.0523 0.693713 6.84537 0.899827L3.87213 3.84541C3.66671 4.05153 3.33424 4.05153 3.1273 3.84541L0.154064 0.899827C-0.0513545 0.694482 -0.0513545 0.3607 0.154064 0.154586C0.360242 -0.0515286 0.693476 -0.0515286 0.898133 0.154586L3.50085 2.57027L6.10129 0.154586Z" fill="#9E9FA0"></path>
                                        </svg>
                                    </div>
                                </th>
                                <th class="p-5 h-20 bg-white">
                                    <div class="flex items-center justify-center">
                                        <a class="inline-block mr-4 text-sm text-body text-opacity-40 font-heading font-semibold uppercase min-w-max" href="#">TARİH</a>
                                        <div>
                                            <svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.898704 3.84541C0.692525 4.05153 0.359292 4.05153 0.154634 3.84541C-0.0507836 3.6393 -0.0523052 3.30629 0.154635 3.10017L3.12787 0.154586C3.33329 -0.0515278 3.66576 -0.0515278 3.8727 0.154586L6.84594 3.10017C7.05135 3.30552 7.05135 3.6393 6.84594 3.84541C6.63976 4.05153 6.30652 4.05153 6.10187 3.84541L3.49915 1.42973L0.898704 3.84541Z" fill="#9E9FA0"></path>
                                            </svg><svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.10129 0.154586C6.30747 -0.0515286 6.64071 -0.0515286 6.84537 0.154586C7.05078 0.3607 7.0523 0.693713 6.84537 0.899827L3.87213 3.84541C3.66671 4.05153 3.33424 4.05153 3.1273 3.84541L0.154064 0.899827C-0.0513545 0.694482 -0.0513545 0.3607 0.154064 0.154586C0.360242 -0.0515286 0.693476 -0.0515286 0.898133 0.154586L3.50085 2.57027L6.10129 0.154586Z" fill="#9E9FA0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </th>
                                <th class="p-5 h-20 bg-white">
                                    <div class="flex items-center justify-center">
                                        <a class="inline-block mr-4 text-sm text-body text-opacity-40 font-heading font-semibold uppercase min-w-max" href="#">E-mail</a>
                                        <div>
                                            <svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.898704 3.84541C0.692525 4.05153 0.359292 4.05153 0.154634 3.84541C-0.0507836 3.6393 -0.0523052 3.30629 0.154635 3.10017L3.12787 0.154586C3.33329 -0.0515278 3.66576 -0.0515278 3.8727 0.154586L6.84594 3.10017C7.05135 3.30552 7.05135 3.6393 6.84594 3.84541C6.63976 4.05153 6.30652 4.05153 6.10187 3.84541L3.49915 1.42973L0.898704 3.84541Z" fill="#9E9FA0"></path>
                                            </svg><svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.10129 0.154586C6.30747 -0.0515286 6.64071 -0.0515286 6.84537 0.154586C7.05078 0.3607 7.0523 0.693713 6.84537 0.899827L3.87213 3.84541C3.66671 4.05153 3.33424 4.05153 3.1273 3.84541L0.154064 0.899827C-0.0513545 0.694482 -0.0513545 0.3607 0.154064 0.154586C0.360242 -0.0515286 0.693476 -0.0515286 0.898133 0.154586L3.50085 2.57027L6.10129 0.154586Z" fill="#9E9FA0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </th>
                                <th class="p-5 h-20 bg-white">
                                    <div class="flex items-center justify-center">
                                        <a class="inline-block mr-4 text-sm text-body text-opacity-40 font-heading font-semibold uppercase min-w-max" href="#">DURUM</a>
                                        <div>
                                            <svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.898704 3.84541C0.692525 4.05153 0.359292 4.05153 0.154634 3.84541C-0.0507836 3.6393 -0.0523052 3.30629 0.154635 3.10017L3.12787 0.154586C3.33329 -0.0515278 3.66576 -0.0515278 3.8727 0.154586L6.84594 3.10017C7.05135 3.30552 7.05135 3.6393 6.84594 3.84541C6.63976 4.05153 6.30652 4.05153 6.10187 3.84541L3.49915 1.42973L0.898704 3.84541Z" fill="#9E9FA0"></path>
                                            </svg><svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.10129 0.154586C6.30747 -0.0515286 6.64071 -0.0515286 6.84537 0.154586C7.05078 0.3607 7.0523 0.693713 6.84537 0.899827L3.87213 3.84541C3.66671 4.05153 3.33424 4.05153 3.1273 3.84541L0.154064 0.899827C-0.0513545 0.694482 -0.0513545 0.3607 0.154064 0.154586C0.360242 -0.0515286 0.693476 -0.0515286 0.898133 0.154586L3.50085 2.57027L6.10129 0.154586Z" fill="#9E9FA0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </th>
                                <th class="p-5 h-20 bg-white">
                                    <div class="flex items-center justify-center">
                                        <a class="inline-block mr-4 text-sm text-body text-opacity-40 font-heading font-semibold uppercase min-w-max" href="#">Personel</a>
                                        <div>
                                            <svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.898704 3.84541C0.692525 4.05153 0.359292 4.05153 0.154634 3.84541C-0.0507836 3.6393 -0.0523052 3.30629 0.154635 3.10017L3.12787 0.154586C3.33329 -0.0515278 3.66576 -0.0515278 3.8727 0.154586L6.84594 3.10017C7.05135 3.30552 7.05135 3.6393 6.84594 3.84541C6.63976 4.05153 6.30652 4.05153 6.10187 3.84541L3.49915 1.42973L0.898704 3.84541Z" fill="#9E9FA0"></path>
                                            </svg><svg class="my-1" width="7" height="4" viewbox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.10129 0.154586C6.30747 -0.0515286 6.64071 -0.0515286 6.84537 0.154586C7.05078 0.3607 7.0523 0.693713 6.84537 0.899827L3.87213 3.84541C3.66671 4.05153 3.33424 4.05153 3.1273 3.84541L0.154064 0.899827C-0.0513545 0.694482 -0.0513545 0.3607 0.154064 0.154586C0.360242 -0.0515286 0.693476 -0.0515286 0.898133 0.154586L3.50085 2.57027L6.10129 0.154586Z" fill="#9E9FA0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-9 h-20 bg-blueGray-50 border-l border-t border-b border-gray-100 rounded-tl-5xl rounded-bl-5xl">
                                        <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><span class="text-lg font-heading font-medium">WX90013</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">08.04.2021</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">musteri@paybull.com</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="py-1 px-3 text-sm text-green-700 font-heading font-medium bg-green-200 rounded-full">Tamamlandı</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-r border-gray-100 rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">Ömer </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-9 h-20 bg-white rounded-tl-5xl rounded-bl-5xl">
                                        <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><span class="text-lg font-heading font-medium">WX90014</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">08.04.2021</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">musteri@paybull.com</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="py-1 px-3 text-sm text-green-700 font-heading font-medium bg-green-200 rounded-full">Tamamlandı</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">Elif</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-9 h-20 bg-blueGray-50 border-l border-t border-b border-gray-100 rounded-tl-5xl rounded-bl-5xl">
                                        <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><span class="text-lg font-heading font-medium">WX90015</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">08.04.2021</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">musteri@paybull.com</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="py-1 px-3 text-sm text-orange-700 font-heading font-medium bg-orange-200 rounded-full">İptal Talebi</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-r border-gray-100 rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">Ahmet</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-9 h-20 bg-white rounded-tl-5xl rounded-bl-5xl">
                                        <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><span class="text-lg font-heading font-medium">WX90016</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">08.04.2021</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">musteri@paybull.com</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <span class="py-1 px-3 text-sm text-orange-700 font-heading font-medium bg-orange-200 rounded-full">Eksik Evrak</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-white rounded-tr-5xl rounded-br-5xl">
                                        <img src="uinel-assets/elements/dashboard-tables/checkmark.svg" alt="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="flex items-center pl-9 h-20 bg-blueGray-50 border-l border-t border-b border-gray-100 rounded-tl-5xl rounded-bl-5xl">
                                        <input class="appearance-none w-6 h-6 mr-9 bg-white border-2 border-darkbluegray-50 rounded-md" type="checkbox"><span class="text-lg font-heading font-medium">WX90017</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">08.04.2021</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="text-lg text-darkBlueGray-400 font-heading">musteri@paybull.com</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-gray-100">
                                        <span class="py-1 px-3 text-sm text-green-700 font-heading font-medium bg-green-200 rounded-full">Tamamlandı</span>
                                    </div>
                                </td>
                                <td class="p-0">
                                    <div class="flex items-center justify-center p-5 h-20 text-center bg-blueGray-50 border-t border-b border-r border-gray-100 rounded-tr-5xl rounded-br-5xl">
                                        <img src="uinel-assets/elements/dashboard-tables/checkmark.svg" alt="">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="font-medium bg-white">
    <div class="md:grid md:grid-cols-2 md:items-center">
        <div class="container mx-auto max-w-xl px-4 lg:pr-0 py-24 md:py-0">

            <h2 class="font-heading text-9xl xl:text-10xl leading-tight mb-11">Başvuru Oluştur</h2>
            <h3 class="font-heading text-xl xl:text-2xl leading-10 mb-14 xl:mb-16 max-w-lg">müşteri oluşturma sihirbazını kullanarak işlem başlatabilirsiniz.</h3>
            <ul>
                <li class="flex leading-6 font-normal text-darkBlueGray-400 mb-3">
                    <img class="mr-6" src="uinel-assets/elements/newsletter/checked.svg" alt=""><span>Müşteriye Oto mail gider</span>
                </li>
                <li class="flex leading-6 font-normal text-darkBlueGray-400 mb-3">
                    <img class="mr-6" src="uinel-assets/elements/newsletter/checked.svg" alt=""><span>Evrak yükleme talebi oluşur</span>
                </li>
                <li class="flex leading-6 font-normal text-darkBlueGray-400">
                    <img class="mr-6" src="uinel-assets/elements/newsletter/checked.svg" alt=""><span>Durum ekranını görebilirsiniz</span>
                </li>
            </ul>
        </div>
        <div class="relative pt-24 pb-12 md:pb-24 px-6 2xl:pt-44 2xl:pb-52 bg-blueGray-100 rounded-b-10xl">
            <div class="relative max-w-lg mx-auto">
                <img class="absolute top-1/2 transform -translate-y-1/2" src="uinel-assets/elements/newsletter/bg-form.svg" alt="">
                <div class="bg-white rounded-3xl py-16 md:py-24 px-8 lg:px-16 m-5 relative z-10">
                    <h3 class="text-4xl leading-10 mb-2">Kullanıcı bilgileri</h3>
                    <p class="text-base text-darkBlueGray-400 leading-8 font-normal mb-10">Bu alandan müşteri ekleyebilirsiniz, mail eklediğinizde işlem otomatik başlayacaktır</p>
                    <div class="relative md:mb-12">
                        <img class="z-10 absolute top-1/2 transform -translate-y-1/2 left-8" src="uinel-assets/elements/newsletter/mail.svg" alt=""><input class="bg-blueGray-50 rounded-2xl h-16 text-darkBlueGray-400 w-full text-lg px-8 pl-16 border border-blue-500 outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="text">
                    </div>
                    <a class="block py-5 px-10 mt-3 md:mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" href="#">Müşteri Oluştur'</a>
                </div>
            </div>
            <a href="#">
                <img class="absolute w-20 transform -translate-x-1/2 xl:w-auto left-1/2 md:left-0 top-0 md:top-20 xl:top-1/2 -translate-y-1/2" src="uinel-assets/elements/newsletter/scroll-down.svg" alt=""></a>
        </div>
    </div>
</section>

<section class="py-8 bg-blueGray-50">
    <div class="container px-4 mx-auto">
        <div class="relative p-10 md:py-20 xl:px-20 bg-white overflow-hidden rounded-3xl">
            <img class="absolute -right-16 top-1/2 transform -translate-y-1/2" src="uinel-assets/images/dashboard-banners/header5.png" alt="">
            <div class="relative z-10">
                <h2 class="mb-4 text-6xl md:text-7xl font-heading font-semibold">Talep Oluştur</h2>
                <p class="mb-9 text-gray-300 font-heading font-medium">Paybull yönetimine talep oluşturabilirsiniz</p>
                <div class="sm:max-w-max"><a class="block py-5 px-7 w-full text-lg leading-3 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" href="#">Destek Talebi</a></div>
            </div>
        </div>
    </div>
</section>

<section class="py-24">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 lg:w-1/6 px-2 mb-4 lg:mb-0">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/docusign.png" alt="">
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 px-2 mb-4 lg:mb-0">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/british-business-bank.png" alt="">
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 px-2 mb-4 lg:mb-0">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/fedex.png" alt="">
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 px-2 mb-4 md:mb-0">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/starling-bank.png" alt="">
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 px-2 mb-4 md:mb-0">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/zendesk.png" alt="">
                </div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 px-2">
                <div class="flex items-center justify-center h-28 px-4 border border-gray-100 rounded-5xl">
                    <img class="h-10" src="uinel-assets/brands/aol.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection