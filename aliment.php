<?php include 'php/header.php';?>
    <section class="container">
        <?php 
        
            
        if(isset($_GET['items'])&& !empty($_GET['items'])){
                if($json['status']=='success'){
                    foreach($array as $item => $content){
                        foreach($content as $key => $valu){
                            echo'
                            <div class="aliment">
                            <div class="aliment-container">
                            <div class="item"> Nom </div>
                            <div class="item"> <p>'.$item.'</p></div>
                            <div class="item">'. "-".'</div>
                            <div class="item">Cuisson </div>
                            <div class="item"> <p>'.$valu.'</p></div>
                            <div class="item"><a href="index.php">👉 back</a></div>

                            </div>';
                        }
                    }
                
            }else{
                    echo $json['message'];
                };
        }
?>
</section>
<?php include 'php/footer.php';?>