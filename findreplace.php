<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;


    }

    .horizontal-text {
        writing-mode: horizontal-tb;
        text-orientation: mixed;
        font-family: 'Arial', sans-serif;
        color: #333;
        font-size: 20px;
        letter-spacing: 5px;
        text-align: center;
        text-transform: uppercase;
        padding-left: 30px;
    }

    form {
        background: #fff;
        padding: 2em;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        align-items: center;
    }

    label,
    textarea,
    input[type="text"],
    input[type="submit"] {
        display: block;
        width: 100%;
        margin-bottom: 1em;
    }

    label {
        margin-bottom: .5em;
        color: #333;
    }

    input[type="text"],
    textarea {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: .5em;
        font-size: 1em;
    }

    input[type="submit"] {
        background-color: crimson;
        color: white;
        border: none;
        padding: .8em;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1em;
    }

    input[type="submit"]:hover {
        background: black;
    }
</style>

<body>
    <!-- Header  -->
    <h1 class="horizontal-text">How to replace Latters in php</h1>

    <form method="POST">

        <label for="">Find: </label> <input type="text" name="find" value="<?php if (isset($_POST['find'])) {
                                                                                echo $_POST['find'];
                                                                            } ?>">
        <label for="">Replace: </label> <input type="text" name="replace" value="<?php if (isset($_POST['replace'])) {
                                                                                        echo $_POST['replace'];
                                                                                    } ?>">
        <br>
        <br>
        <textarea name="mainField" id="" cols="30" rows="10"><?php if (isset($_POST['mainField'])) {
                                                                    echo $_POST['mainField'];
                                                                } ?></textarea>
        <br>
        <input type="submit" value="Go!">
    </form>

    <!-- MY Method -->
    <?php
    if (isset($_POST['mainField'])) {
        $counta = 0;
        $mainString  = $_POST['mainField'];
        $find  = $_POST['find'];
        $replace  = $_POST['replace'];
        for ($i = 0; $i < strlen($mainString); $i++) {
            if ($mainString[$i] == $find) {
                echo $replace . "<hr> ";
            } else {
                echo $mainString[$i] . "<hr> ";
            }
        }
    }
    ?>
    <!-- sir method -->
    <!-- <?php
            // if(isset($_POST['mainField'])){
            //     $counta=0;
            //     $mainString  = $_POST['mainField'];
            //     $find  = $_POST['find'];
            //     $replace  = $_POST['replace'];
            //     for($i=0; $i<strlen($mainString);$i++){
            //         if($mainString[$i]==$find){
            //             echo $replace;
            //         }else{
            //             echo $mainString[$i];
            //         }
            //     }
            // }
            ?> -->

</body>

</html>