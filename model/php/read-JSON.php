<?php
    $messageError = array();
    $json = null;
    $folder = 'json-files/';

    /* DATA */
        $filename = ( isset($_FILES['file']['name']) ? $_FILES['file']['name'] : "" );
    /* END DATA */

    if($filename) {
        /* TEST */
            $imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
            if($imageFileType != "json") {
                array_push($messageError, "Le format du fichier est incorrect. (Autorisés: .json)");
            }

            if( empty($messageError) ) {                  
                $filename = basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);

                $str = file_get_contents($folder.$filename);
                $json = json_decode($str, true);

                unlink($folder.$filename);

                $json = array("codeError" => 0, "contentJson" => $json);
            }
        /* END TEST */
    }

    if($json == null)
        $json = array("codeError" => 1, "messageError" => $messageError);


    /* RETURN JSON */        
        echo json_encode($json);
    /* END RETURN JSON */
?>