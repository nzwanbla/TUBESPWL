@vite('public/css/navbar.css')
@vite('public/js/navbar.js')

<header style="background-color: rgb(29, 11, 103)">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <!-- Back Button -->
            <button id="backButton" onclick="history.back()" class="text-sm font-semibold leading-6 text-gray-300 mr-4 pr-20"><span aria-hidden="true">←</span>Back</button>
            
            <a href="{{ route('headline.show') }}">
                <h1 class="text-xl font-semibold text-gray-300">Website Berita</h1>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobileMenuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <div class="relative">
                <button id="collapseButton" type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-300" aria-expanded="false">
                </button>
            </div>
            <a href="{{ url('/#latest') }} " class=" text-sm font-semibold leading-6 text-gray-300">Latest News</a>
            <a href="{{ url('/#International') }}" class="text-sm font-semibold leading-6 text-gray-300">International</a>
            <a href="{{ url('/#sport') }}" class="text-sm font-semibold leading-6 text-gray-300">Sports</a>

            <a href="{{ route('search.show') }}" class="text-sm font-semibold leading-6 text-gray-300">Search</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end ">
            <div class="relative inline-block text-left mr-4"> 
                @if (auth()->user()->id !== 1)
                    <button type="button" class="flex items-center text-sm font-semibold leading-6 text-gray-300" id="messageDropdownButton" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Pesan 
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-xl bg-white ring-1 ring-black ring-opacity-5 hidden z-10" id="messageDropdown" role="menu" aria-orientation="vertical" aria-labelledby="messageDropdownButton">
                        <div class="p-4 max-h-64 overflow-y-auto">
                            {{-- Pesan akan dimuat di sini --}}
                        </div>
                        <form id="message-form" class="p-4 flex items-center gap-2">
                            <input type="text" class="w-full p-2 border rounded-l-md text-sm" id="message" placeholder="Tulis pesan ke Admin">
                            <button type="submit" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-r-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @else
                <button type="button" class="flex items-center text-base font-semibold leading-7 text-gray-300" id="adminMessageDropdownButton" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
    Pesan 
</button>
<div class="flex origin-top-right absolute right-0 mt-2 w-96 rounded-md shadow-xl bg-white ring-1 ring-black ring-opacity-5 hidden z-10" id="adminMessageDropdown">
    <div class="w-1/3 bg-gray-100 border-r border-gray-200 p-4 overflow-y-auto" id="userList">

    </div>
    <div class="w-2/3 p-4"> 
    <div class="max-h-60 overflow-y-auto" id="adminChatContainer"> 
        </div>
        <form id="adminMessage-form" class="p-2 flex items-center gap-2">
            <input type="hidden" id="selectedUserId" name="selectedUserId">
            <input type="text" class="w-full p-2 border rounded-l-md text-base" id="adminMessage" placeholder="Tulis pesan...">
            <button type="submit" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-r-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>
    </div>
</div>                @endif
            </div>
            @if (auth()->user()->id == 1)
                <button type="submit"> 
                    <a href="{{ route('usermanagement') }}" class="text-sm font-semibold leading-6 text-gray-300 mr-4">User Management<span aria-hidden="true">→</span></a>
                </button>
            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-semibold leading-6 text-gray-300">Logout<span aria-hidden="true">→</span></type>
            </form>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="hidden lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Sports</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button id="closeMobileMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">

                <a href="{{ url('/#latest') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Latest News</a>
                <a href="{{ url('/#International') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">International</a>
                <a href="{{ url('/#sport') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sports</a>

                <a href="{{ route('search.show') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Search</a>
                </div>
                <div class="py-6">
                <a href="{{ route('dashboard') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            const messageDropdownButton = document.getElementById('messageDropdownButton');
            const messageDropdown = document.getElementById('messageDropdown');
            const adminMessageDropdownButton = document.getElementById('adminMessageDropdownButton');
            const adminMessageDropdown = document.getElementById('adminMessageDropdown');
            const chatContainer = $('.max-h-64'); 
            const adminChatContainer = $('#adminChatContainer');
            const userList = $('#userList'); 

            function fetchMessages() {
                $.ajax({
                    url: '{{ route('chats.fetch') }}',
                    method: 'POST', 
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        chatContainer.empty(); 

                        data.forEach(message => {
                            const messageElement = $('<div>').addClass('flex mb-2')
                                                            .addClass(message.is_admin === 1 ? 'justify-start' : 'justify-end');

                            const messageBubble = $('<div>').addClass('rounded-lg p-2 text-sm')
                                                            .addClass(message.is_admin === 1 ? 'bg-gray-200' : 'bg-blue-500 text-white')
                                                            .html(`
                                                                <p class="font-semibold text-xs mb-1">${message.is_admin === 1 ? 'Admin' : '{{ auth()->user()->name }}'}</p>
                                                                <p>${message.message}</p>
                                                                <p class="text-right text-xs ${message.sender === 'admin' ? 'text-gray-500' : 'text-gray-300'}">${formatTimestamp(message.created_at)}</p>
                                                            `);

                            messageElement.append(messageBubble);
                            chatContainer.append(messageElement);
                            scrollToBottom();
                        });
                    },
                    error: function(error) {
                        console.error('Error fetching messages:', error);
                    }
                });
            }

            if (messageDropdownButton) {
                messageDropdownButton.addEventListener('click', () => {
                    messageDropdown.classList.toggle('hidden');
                    fetchMessages();
                    scrollToBottom();
                });
            }

            if (adminMessageDropdownButton) {
                adminMessageDropdownButton.addEventListener('click', () => {
                    adminMessageDropdown.classList.toggle('hidden');
                    loadUsers();
                    fetchAdminMessages();
                    scrollToBottom(adminChatContainer);
                });
            }

            $('#message-form').submit(function(event) {
                event.preventDefault();

                const messageInput = $('#message');
                const message = messageInput.val().trim();

                if (message !== '') {
                    $.ajax({
                        url: '{{ route('chats.send') }}',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            _token: '{{ csrf_token() }}',
                            message: message
                        },
                        success: function(response) {
                            messageInput.val('');
                            fetchMessages(); 
                        },
                        error: function(error) {
                            console.error('Error sending message:', error);
                        }
                    });
                }
            });

            $('#adminMessage-form').submit(function(event) {
                event.preventDefault();

                const messageInput = $('#adminMessage');
                const message = messageInput.val().trim();
                const userId = $('#selectedUserId').val();

                if (message !== '' && userId !== '') { 
                    $.ajax({
                        url: '{{ route('chats.sendadmin') }}', 
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            _token: '{{ csrf_token() }}',
                            message: message,
                            user_id: userId 
                        },
                        success: function(response) {
                            messageInput.val('');
                            fetchAdminMessages(userId); 
                        },
                        error: function(error) {
                            console.error('Error sending admin message:', error);
                        }
                    });
                }
            });


            function fetchAdminMessages(userId = null) {
                $.ajax({
                    url: '{{ route('chats.fetchadmin') }}',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        user_id: userId 
                    },
                    success: function(data) {
            $('#adminChatContainer').empty();

            data.forEach(message => {
                const messageElement = $('<div>').addClass('flex mb-2')
                                                .addClass(message.is_admin === 1 ? 'justify-end' : 'justify-start'); 

                const messageBubble = $('<div>').addClass('rounded-lg p-2 text-sm')
                                                .addClass(message.is_admin === 1 ? 'bg-blue-500 text-white' : 'bg-gray-200') 
                                                .html(`
                                                    <p class="font-semibold text-xs mb-1">${message.is_admin === 1 ? 'Admin' : message.sender.name}</p> 
                                                    <p>${message.message}</p>
                                                    <p class="text-right text-xs ${message.is_admin === 1  ? 'text-gray-300' : 'text-gray-500'}">${formatTimestamp(message.created_at)}</p>
                                                `);

                messageElement.append(messageBubble);
                $('#adminChatContainer').append(messageElement);
                scrollToBottom(adminChatContainer);

            });

                    },
                    error: function(error) {
                        console.error('Error fetching admin messages:', error);
                    }
                });
            }

  function loadUsers() {
                $.ajax({
                    url: '{{ route('chats.users') }}', 
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(users) {
            $('#userList').empty();

            users.forEach(user => {
                const userItem = $('<div>')
                    .addClass('p-2 cursor-pointer hover:bg-gray-200')
                    .attr('data-user-id', user.id)
                    .text(user.name); 
                    userItem.on('click', function() { 
                                const userId = $(this).data('user-id');
                                $('#selectedUserId').val(userId); 
                                fetchAdminMessages(userId); // 
                            });
                $('#userList').append(userItem);
            });
                    },
                    error: function(error) {
                        console.error('Error loading users:', error);
                    }
                });
            }
            
        function formatTimestamp(timestamp) {
            var date = new Date(timestamp);
            return date.toLocaleDateString() + ', ' + date.toLocaleTimeString();
        }

        function scrollToBottom(container = chatContainer) { 
                container.scrollTop(container[0].scrollHeight);
            }

            setInterval(fetchMessages, 5000); 

        });

        

    </script>

</header>