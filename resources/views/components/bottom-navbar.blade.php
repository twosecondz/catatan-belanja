<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <style>
        @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .hover\:w-full:hover {
            width: 100%;
        }

        .group:hover .group-hover\:w-full {
            width: 100%;
        }

        .group:hover .group-hover\:inline-block {
            display: inline-block;
        }

        .group:hover .group-hover\:flex-grow {
            flex-grow: 1;
        }
    </style>

    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center px-5 pt-5 pb-24">
        <div class="w-full max-w-md mx-auto">

            <div class="mx-auto fixed bottom-0 px-7 justify-center bg-white shadow-lg rounded-2xl">
                <div class="flex">
                    <div class="flex-1 group">
                        <a href="#"
                            class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500">
                            <span class="block px-1 pt-1 pb-1">
                                <i class="far fa-home text-2xl pt-1 mb-1 block"></i>
                                <span class="block text-xs pb-2">Home</span>
                                <span class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"></span>
                            </span>
                        </a>
                    </div>
                    <div class="flex-1 group">
                        <a href="#"
                            class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500">
                            <span class="block px-1 pt-1 pb-1">
                                <i class="far fa-compass text-2xl pt-1 mb-1 block"></i>
                                <span class="block text-xs pb-2">Explore</span>
                                <span class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"></span>
                            </span>
                        </a>
                    </div>
                    <div class="flex-1 group">
                        <a href="#"
                            class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500">
                            <span class="block px-1 pt-1 pb-1">
                                <i class="far fa-search text-2xl pt-1 mb-1 block"></i>
                                <span class="block text-xs pb-2">Search</span>
                                <span class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"></span>
                            </span>
                        </a>
                    </div>
                    <div class="flex-1 group">
                        <a href="#"
                            class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500">
                            <span class="block px-1 pt-1 pb-1">
                                <i class="far fa-cog text-2xl pt-1 mb-1 block"></i>
                                <span class="block text-xs pb-2">Settings</span>
                                <span class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
