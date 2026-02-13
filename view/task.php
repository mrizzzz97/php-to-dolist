<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Agenda</title>
    <!-- Tailwind -->   
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black flex justify-center">
    <div class="bg-white w-[400px] mt-12 p-4 rounded shadow shadow-slate-300 text-center">
        <p class="text-2xl font-semibold capitalize ">my agenda</p>
        <form action="" method="POST">
            <div class="mt-4 flex gap-2">
                <input type="text" name="body" class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400 flex-grow" placeholder="Ketik Disini...." required>
                <button type="submit" name="submit" class="px-5 py-2 bg-green-400 rounded capitalize text-white hover:bg-transparent border border-green-400 hover:text-green-400 transition duration-200">Submit</button>
            </div>
        </form>
        <ul class="space-y-3 mt-4" >
            <?php if (!empty($task)): ?>
                <?php foreach($task as $task) : ?>
                    <li class="bg-gray-100 p-3 flex items-center text-left gap-4 rounded justify-between ">
                        <span><?= $task['body'] ?> </span>
                        <a href="?delete=<?= $task['id'] ?>?" class="bg-red-400 px-3 py-2 rounded text-white hover:bg-red-700 ">Delete</a>
                    </li>
                <?php endforeach?>
            <?php else :?>
                <li class="bg-gray-100 p-3 text-center rounded">
                    <span>Belum ada data agenda</span>
                </li>

            <?php endif ?>

        </ul>
    </div>
        
</body>
</html>