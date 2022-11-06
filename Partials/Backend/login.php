<!DOCTYPE html>
<html lang="en">
<?php
     use Firebase\Auth\Token\Exception\InvalidToken;
     include '../includes/dbconfig.php';
    ?>
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Backend</title>
</head>
<body>
    <div class="w-full min-h-screen bg-slate-900 p-32">
        <div class="bg-slate-100 rounded-lg shadow-lg shadow-slate-100/50">
            
            <div class="flex p-10">
                <div class=" m-auto">
                    <img class="h-72" src="../assets/backend.gif"/>
                </div>
                <div class="w-1/2">
                <div class=" text-3xl py-5 text-center font-bold">Login</div>
                    <form method="POST" class="w-full">
                        <div class="flex gap-10 mb-5">
                            <label class="my-auto" for="email">Email:</label>
                            <input name="email" class="w-full border-2 rounded-lg h-10" type="text"/>
                        </div>
                        <div class="flex gap-3 mb-10">
                            <label class="my-auto" for="password">Password:</label>
                            <input name="password" class="w-full border-2 rounded-lg h-10" type="password"/>
                        </div>
                        <div class="w-fit m-auto">
                            <button name="login" class="my-auto bg-slate-900 text-white py-2 px-10 hover:bg-transparent hover:border-slate-900 hover:border-2 hover:text-slate-900">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    $auth =$firebase->createAuth();
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        try{
            $signInResult = $auth->signInWithEmailAndPassword($email,$password);
            $token = $signInResult->idToken();

            try{
                $verIdToken = $auth->verifyIdToken($token);
                // disregards
                $uid = $verIdToken->claims()->get('sub');

                $_SESSION['uid']=$uid;
                $_SESSION['token']=$token;

                header('Location: dashboard.php');
                echo "SUCCESS";
                exit();

            }catch(InvalidToken $e){
                echo '<script>alert("The token is invalid!")</script>';
            }catch(\InvalidArgumentException $e){
                echo '<script>alert("The token could not be parsed!")</script>';
            }
        }catch(Exception $e){
            echo '<script>alert("Invalid Email and/or Password!")</script>';
        }
    }
    ?>
</body>
</html>