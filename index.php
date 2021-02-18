<?php include 'php/header.php';?>
    <div class="container">
        <section class="continer-content"id="continer">
            <div class="continer-content__logo"><img src="img/logo-1.png" alt=""></div>
            <h1  class="continer-content__text">Vapeur Douce</h1>
            <div class="continer-content__form">
                <form action="index.php" method="get" >
                    <input  class="form-search"type="text" name="aliment" placeholder="  Search aliment" >
                    <input class="form-btn" type="submit" value="Search" >
                </form>
            </div>
        </section>  
        <section class="container container__result">
        <?php 
        if(isset($_GET['aliment'])&& !empty($_GET['aliment'])){        
            if($json['status']=='success'){
                echo '<div class="container__result"><br><br>';
                $data = $array['vapeur'];
                foreach($data as $method => $details){
                    echo'
                    <div class="aliment">
                    <div class="aliment-container">
                    <div class="item"> Nom </div>
                    <div class="item"> <p>'.$array['nom'].'</p></div>
                    <div class="item">'. "-".'</div>
                    <div class="item">Cuisson </div>
                    <div class="item"> <p>'.$details.'</p></div>
                    <div class="item"><a href="aliment.php?items=all">all 🍲 </a></div>
                    </div>';
                }
                echo '</div>';
                }else{
                    echo $json['message'];
                }
            };       
?>
</section>
<?php include 'php/footer.php';?>  
