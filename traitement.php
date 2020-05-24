<?php
  if(isset($_POST['btndeposer'])){
    if(isset($_POST['txtnom'])){
        //declaration d'un tableau
        $message=array();
        $message['id']=time()."".rand(1,100);
        $message['nom']=$_POST['txtnom'];
        $message['prenom']=$_POST['txtprenom'];
        $message['email']=$_POST['txtemail'];
        $message['message']=$_POST['txtmessage'];

        $js=file_get_contents('messages.json');
        $j=json_decode($js,true);
        $j[]=$message;
        $jas=json_encode($j);
        file_put_contents('messages.json',$jas);
        header("location: ./");

    }
  }


if(isset($_GET['id'])){

    $verifier=array();
    $message=file_get_contents('messages.json');
    $msg=json_decode($message,true);
    for($i=0;$i<count($msg);$i++):
      if($msg[$i]['id']!=$_GET['id']){
        $verifier[]=$msg[$i];
      }
    endfor;
    $verifye=json_encode($verifier);
    file_put_contents('messages.json',$verifye);
    header("location:messages.php");
}


?>
