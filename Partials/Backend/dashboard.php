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
    <title>Dashboard</title>
</head>
<body>
    <div class="w-full min-h-screen bg-slate-900 p-16">
        <div class="w-full h-fit bg-slate-100 rounded-lg shadow-lg shadow-slate-100/50">
            <div class="text-2xl font-bold text-center py-10">Upload Project</div>
            <div class="w-5/12 m-auto p-10">
                <form method="POST" enctype="multipart/form-data">
                <div class="flex w-full gap-10 mb-5">
                        <label class="my-auto" for="title">Profile:</label>
                        <input name="file" class="w-full border-2 rounded-lg " type="file" required/>
                    </div>
                    <div class="flex w-full gap-14 mb-5">
                        <label class="my-auto" for="title">Title:</label>
                        <input name="title" class="w-full border-2 rounded-lg h-10" type="text" required/>
                    </div>
                    <div class="flex w-full gap-2 mb-5">
                        <label class="my-auto" for="link">Description:</label>
                        <textarea class="w-full rounded-lg border-2" name="description" id="" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="flex w-full gap-14 mb-5">
                        <label class="my-auto" for="link">Link:</label>
                        <input name="link" class="w-full border-2 rounded-lg h-10" type="text" required/>
                    </div>
                    <div class="w-fit m-auto">
                            <button name="submit" class="my-auto rounded-lg bg-slate-900 text-white py-2 px-10 hover:bg-transparent hover:border-slate-900 hover:border-2 hover:text-slate-900">Upload</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php


if(isset($_POST['submit'])){
    session_start();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $storage = $firebase->createStorage();
    $storageClient = $storage->getStorageClient();
    $defaultBucket = $storage->getBucket();

    $idFile = $_FILES['file']['tmp_name'];
    $defaultBucket->upload(
        file_get_contents($idFile),
        [
            'name' => "Projects/" . $_FILES['file']['name']
        ]
    );

    try{
        $database->getReference('projects/'.time())->set([
            'profile'=>$_FILES['file']['name'],
            'title'=>$title,
            'description'=>$description,
            'link'=>$link,
        ]);
    }
    catch(Exception $e){
        echo 'Not Uploaded '.$e;
    }
}
?>
</html>