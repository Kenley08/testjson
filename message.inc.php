<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
      <!-- <form action="#" method="post" > -->
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Les messages</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $message=file_get_contents('messages.json');
                    $msg=json_decode($message,true);
                    for($i=0;$i<count($msg);$i++):
                  ?>

                          <tr>

                          <td>
                              <?php echo $msg[$i]['nom'];?>
                        </td>
                        <td>
                        <?php echo $msg[$i]['prenom'];?>
                        </td>

                        <td>
                          <?php echo $msg[$i]['email'];?>

                        </td>

                        <td>  <?php echo $msg[$i]['message'];?></td>
                        <td>
                          <!--  -->

                           <a href="traitement.php?id=<?php echo $msg[$i]['id']?>"><input type="submit" name="btndelete" value="Delete"/> </a>
                        </td>
                    </tr>
                  <?php endfor;?>
                </tbody>
            </table>
          <!-- </form> -->

        </div>
