<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire</title>
    <link rel="stylesheet" href="dist/output.css">
    <script src="js/script.js" defer></script>
</head>
<body class='grid place-items-center h-screen'>
    <form method="post" class=' md:w-3/5 sm:w-4/5 shadow-sm shadow-black p-4 rounded-md w-4/5 bg-slate-800' onsubmit="submitDetails(event, this);">
        <div class="text-white font-extrabold uppercase text-5xl text-center mb-8">itanong kay mang bentong</div>
        <div id="details-form">
            <div class="flex justify-between mb-2">
                <label class='font-semibold capitalize text-lg text-white'>firsname:</label>
                <input id="firstname" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none w-3/5 rounded-sm' type="text" required autocomplete="off">
            </div>
            <div class="flex justify-between mb-2">
                <label class='font-semibold capitalize text-lg text-white'>lastname:</label>
                <input id="lastname" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none w-3/5 rounded-sm' type="text" required autocomplete="off">
            </div>
            <div class="flex justify-between mb-2">
                <label class='font-semibold capitalize text-lg text-white'>email:</label>
                <input id="email" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none w-3/5 rounded-sm' type="email" required autocomplete="off">
            </div>
            <div class="flex justify-between mb-2">
                <label class='font-semibold capitalize text-lg text-white'>subject:</label>
                <input id="subject" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none w-3/5 rounded-sm' type="text" required autocomplete="off">
            </div>
            <div class="flex justify-between mb-2">
                <label class='font-semibold capitalize text-lg text-white'>message:</label>
                <textarea id="message" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none resize-none w-3/5 rounded-sm' cols="30" rows="5"></textarea>
            </div>
            <div class="mt-8 flex items-center justify-between">
                <div>
                    <input class="bg-white font-extrabold uppercase py-2 w-28 rounded-sm hover:cursor-pointer" type="reset" value="Clear">
                    <input class="bg-white font-extrabold uppercase py-2 w-28 rounded-sm hover:cursor-pointer" type="submit" value="Submit">
                </div>
                <div id="loading" class="w-8 h-8 bg-slate-800 ml-4 rounded-full relative overflow-hidden hidden">
                    <div class="absolute w-3/5 h-full top-0 left-1/2 -translate-x-1/2 bg-yellow-400 animate-slow-spin origin-center"></div>
                    <div class="absolute w-4/5 h-4/5 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-slate-800 rounded-full"></div>
                </div>
            </div>
        </div>
        <div id="otp-form" class="hidden">
            <div class="flex justify-between mb-2">
                <label class='font-semibold uppercase text-lg text-white'>otp:</label>
                <input id="otp" class='sm:w-1/2 shadow-lg shadow-black pl-2 outline-none w-3/5 rounded-sm' type="text" autocomplete="off">
            </div>
            <div class="mt-8 flex items-center justify-between">
                <input class="bg-white font-extrabold uppercase py-2 w-28 rounded-sm hover:cursor-pointer" type="submit" value="Submit">
                <div id="count" class=" text-white font-extrabold sm:text-2xl text-sm"></div>
                <div id="loading2" class="w-8 h-8 bg-slate-800 ml-4 rounded-full relative overflow-hidden hidden">
                    <div class="absolute w-3/5 h-full top-0 left-1/2 -translate-x-1/2 bg-yellow-400 animate-slow-spin origin-center"></div>
                    <div class="absolute w-4/5 h-4/5 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-slate-800 rounded-full"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>