<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowing Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        input[type="text"] {
            box-shadow: 0 0 10px #719ece;
            transition: box-shadow 0.3s;
        }
        input[type="text"]:focus {
            box-shadow: 0 0 20px #719ece;
        }
    </style>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 text-5xl hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    WELCOME
                </button>
            </div>
        </form>
    </div>
</body>
</html>
