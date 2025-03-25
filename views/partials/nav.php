    <!-- Navigation Bar -->
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">My Website <?= isset($page) ? " - {$page}" : ''  ?></a>
            <div class="flex items-center space-x-4">
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:underline <?= urlIs('/') ? 'text-yellow-300' : '';  ?> ">Home</a></li>
                    <li><a href="/notes" class="hover:underline <?= urlIs('/notes') ? 'text-yellow-300' : '';  ?>">Notes</a></li>
                    <li><a href="/about" class="hover:underline <?= urlIs('/about') ? 'text-yellow-300' : '';  ?>">About</a></li>
                    <li><a href="/contacts" class="hover:underline <?= urlIs('/contacts') ? 'text-yellow-300' : '';  ?>">Contact</a></li>
                </ul>
                <div id="authLinks" class="flex space-x-4">
                    <a href="#" class="bg-white text-blue-500 px-4 py-2 rounded-lg hover:bg-gray-200">Login</a>
                    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Register</a>
                </div>
            </div>
        </div>
    </nav>