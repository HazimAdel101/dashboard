<aside id="logo-sidebar"
    class="fixed top-0 right-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">

        <script></script>
        <ul class="space-y-2 font-medium">
            <li class="">
                <a onclick="toggleSubMenu('user')" href="#"
                    class="flex w-full items-center justify-start p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <div class="flex justify-between items-between w-full">
                        <div class="flex">
                            <img class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/user.svg') }}" alt="">
                            <span class="ms-3">المستخدمين
                            </span>
                        </div>
                        <div class="flex items-center">
                            <img id="userCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-down.svg') }}" alt="">

                            <img style="display: none;" id="userExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-up.svg') }}" alt="">

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
                            <img class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/level.svg') }}" alt="">

                            <span class="ms-3"> المستويات
                            </span>
                        </div>
                        <div class="flex items-center">

                            <img id="levelCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-down.svg') }}" alt="">

                            <img style="display: none;" id="levelExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-up.svg') }}" alt="">

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
                            <img class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/lesson.svg') }}" alt="">
                            <span class="ms-3"> الدروس
                            </span>
                        </div>
                        <div class="flex items-center">
                            <img id="lessonCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-down.svg') }}" alt="">

                            <img style="display: none;" id="lessonExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-up.svg') }}" alt="">

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
                            <img class="w-5 h-5  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/quiz.svg') }}" alt="">

                            <span class="ms-3"> الاختبارات
                            </span>
                        </div>
                        <div class="flex items-center">
                            <img id="quizCollapsedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-down.svg') }}" alt="">

                            <img style="display: none;" id="quizExpandedIcon"
                                class="w-4 h-4 inline-block text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                src="{{ asset('assets/images/arrow-up.svg') }}" alt="">

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
