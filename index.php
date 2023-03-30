<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[800px] h-[350px] p-4 rounded-[20px] seccion">
        <header class="flex justify-center items-center">
            <h1 class="font-bold text-4xl pt-6 mb-8 text-slate-600 uppercase">Enviar Cash :v</h1>
        </header>
        <div class="formulario flex justify-center items-center">
            <form action="acc/transaccion.php" method="post">
                <div class="flex justify-center items-start">
                    <div class="flex flex-col justify-center mr-12 items-start">
                        <div class="text-2xl font-medium p-2 text-slate-200 subtitle">
                            <h3 class="uppercase">Cuenta de Envio</h3>
                        </div>
                        <div class="id_acc mb-4">
                            <input name="id_cuentaA" type="number" placeholder="Ingrese el id de la cuenta" class="ease-out duration-300 focus:outline-none focus:ring-2 focus:ring-slate-300 bg-black/20 text-white placeholder-white/60 p-3 w-[302px] rounded-full">
                        </div>
                        <div class="cash_acc mb-4 items-center flex">
                            <input name="monto" type="number" placeholder="Ingrese el monto" class="ease-out duration-300 focus:outline-none focus:ring-2 focus:ring-slate-300 bg-black/20 text-white placeholder-white/60 p-3 w-[260px] rounded-l-full"><span class="px-4 py-3 bg-black/30 rounded-r-full text-white">$</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-end">
                        <div class="text-2xl font-medium p-2 text-slate-200 subtitle">
                            <h3 class="uppercase">Destintario</h3>
                        </div>
                        <div class="id_accD mb-4">
                            <input name="id_cuentaB" type="number" placeholder="Ingrese el id de la cuenta" class="ease-out duration-300 focus:outline-none focus:ring-2 focus:ring-slate-300 bg-black/20 text-white placeholder-white/60 p-3 w-[300px] rounded-full">
                        </div>
                        <div class="btn_Enviar mb-4">
                            <button type="submit" name="submit" class="bg-slate-700 ease-out duration-200 text-slate-50 py-3 px-24 hover:bg-slate-800 rounded-full">Enviar Dinero</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="js/tailwind-3.2.7.js"></script>
</body>

</html>