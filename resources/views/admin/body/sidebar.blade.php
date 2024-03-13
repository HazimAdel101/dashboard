<aside id="logo-sidebar"
    class="fixed top-0 right-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

        <script>
            
        </script>
        <ul class="space-y-2 font-medium">
            <li class="">
                <a onclick="toggleSubMenu('user')" href="#"
                    class="flex w-full items-center justify-start p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <div class="flex justify-between items-between w-full">
                        <div class="flex">
                            <svg class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>
                            {{-- <img  class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" src="{{asset('assets/images/user.svg')}}" alt=""> --}}

                            <span class="ms-3">المستخدمين
                            </span>
                        </div>
                        <div class="flex items-center">
                            <svg id="userCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                            <svg id="userExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                style="display: none;">
                                <path
                                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="submenu" id="userSubmenu" style="display: none;">
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">المستخدمين</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">تفاصيل</a></li>
                </ul>
            </li>
            <li class="">
                <a onclick="toggleSubMenu('level')" href="#"
                    class="flex w-full items-center justify-start p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <div class="flex justify-between items-between w-full">
                        <div class="flex">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
                            </svg>
                            <span class="ms-3"> المستويات
                            </span>
                        </div>
                        <div class="flex items-center">
                            <svg id="levelCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                            <svg id="levelExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                style="display: none;">
                                <path
                                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="submenu" id="levelSubmenu" style="display: none;">
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">كل المستويات</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">إضافة</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">حذف</a></li>
                </ul>
            </li>
            <li class="">
                <a onclick="toggleSubMenu('lesson')" href="#"
                    class="flex w-full items-center justify-start p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <div class="flex justify-between items-between w-full">
                        <div class="flex">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384V352h16V480c0 17.7 14.3 32 32 32s32-14.3 32-32V192h56 64 16c17.7 0 32-14.3 32-32s-14.3-32-32-32H384V64H576V256H384V224H320v48c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48v80H243.1 177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V480c0 17.7 14.3 32 32 32s32-14.3 32-32z" />
                            </svg>
                            <span class="ms-3"> الدروس
                            </span>
                        </div>
                        <div class="flex items-center">
                            <svg id="lessonCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                            <svg id="lessonExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                style="display: none;">
                                <path
                                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="submenu" id="lessonSubmenu" style="display: none;">
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">كل الدروس</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">إضافة</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">حذف</a></li>
                </ul>
            </li>
            <li class="">
                <a onclick="toggleSubMenu('quiz')" href="#"
                    class="flex w-full items-center justify-start p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <div class="flex justify-between items-between w-full">
                        <div class="flex">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                <path
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                            </svg>
                            <span class="ms-3"> الاختبارات
                            </span>
                        </div>
                        <div class="flex items-center">
                            <svg id="quizCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                            <svg id="quizExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                style="display: none;">
                                <path
                                    d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <ul class="submenu" id="quizSubmenu" style="display: none;">
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">كل الاختبارات</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">إضافة</a></li>
                    <li><a class="ps-10 p-2  block dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                            href="#">حذف</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
