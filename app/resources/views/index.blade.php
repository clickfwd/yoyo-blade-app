<html>

    <head>

        <title>Yoyo Blade Demo App</title>

        @yoyo_scripts

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css" rel="stylesheet">
      
    </head>
        
    <body class="bg-gray-100 p-12">
        
        <h1 class="text-5xl font-bold text-gray-500 my-6 tracking-wider">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">yoyo</span> <span class="text-gray-300 mx-2">|</span> <span class="text-gray-800">blade</span> app
        </h1>
        
        <div class="mt-16">

            <x-counter-alpine-event />
                    
            @foreach([
                'upload' => [],
                'nesting-parent' => [],
                'wishlist-counter' => [
                    'attributes' => ['id' => 'wishlist-counter']
                ],
                'live-search' => [],
                'load-more' => [],
                'pagination' => [],
                'dynamic-content' => [],
                'polling' => [],
                'form' => [],
            ] as $component => $options)
            
                <div class="bg-white p-6 my-4">
                    
                @yoyo($component, $options['variables'] ?? [], $options['attributes'] ?? [])

                </div>    
            
            @endforeach    

        </div>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js"></script>

    </body>

</html>