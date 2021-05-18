<?php
/*
Template Name: Where to Buy
*/
?>

<?php get_header(); ?>
<main class="mainWherePage">
    <section class="mainWherePageCover">
        <div class="container">
            <h1>Looking for Urca products near you?</h1>
            <h2>Enter your location below to find Urca at a store close to you. <br><br> Please note that not all locations will carry the full range of Urca products.</h2>
        </div>
    </section>
    <section class="storeFilters">
        <div class="container">
            <div class="storeFilter">
                <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                <select name="city" id="storeCity">
                    <option value="" selected>Select your city</option>
                </select>
            </div>
            <div class="storeFilter">
                <label><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                <select name="state" id="storeState">
                    <option value="" selected>Select your state</option>
                </select>
            </div>
        </div>
    </section>
    
    <section class="storeResults">
        <div class="container"> 
            <div class="storeList">
                <?php 
                $stores = get_field('store_list_archive');
                $handle = fopen($stores, "r"); ?>
                <ul>
                    
                    <?php

                        
                        while (($data = fgetcsv($handle)) !== FALSE) {
                            
                            //print_r($data); ?>

                            <li class="store">
                                <a href="<?php echo $data[7]; ?>" class="mapLink">
                                    <div class="storeName"><?php echo $data[0]; ?></div>
                                    <div class="storeAddress"><?php echo $data[1]; ?></div>
                                    <div class="storeCity"><?php echo $data[2]; ?></div>
                                    <div class="storeState"><?php echo $data[3]; ?></div>
                                    <div class="storeZip"><?php echo $data[4]; ?></div>
                                    <div class="storePhone">
                                        <a href="tel:<?php echo $data[5]; ?>"><?php echo $data[5]; ?></a>
                                    </div>
                                    <div class="storeSite">
                                        <a href="<?php echo $data[6]; ?>" target="_blank"><?php echo $data[6]; ?></a>
                                    </div>
                                </a>
                            </li> 

                        <?php } ?>
                </ul>
            </div>
            <div class="mapIframe">
                <iframe src="" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>	