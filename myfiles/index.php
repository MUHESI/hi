<?php 
    require('navbar.php');
    require('admin/includes/function.php');
?>

    <!-- ********** Hero Area Start ********** -->
        <?php //include('admin/contenu_Index/hero_area.php');?>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <!-- <div class="row justify-content-center"> -->
            <div class="justify-content-center">    
                <!-- ============= Post Content Area Start ============= -->
                 <!-- <div class="col-12 col-lg-12 -->
                <div class="post-content-area mb-50">
                        
                        <!-- Catagory Area -->

                    <div class="world-catagory-area">

                        <!-- ====================================================================
                        ========================= DEBUT SECTION 'A'==============================-->
                        <div class="row">
                            <div class="col-12 col-lg-8">

                                    <!-- NOUVELLES CRSDI  -->
                                <div class="sidebar-widget-area"  style="margin:5px;">
                                    <h5 class="title">Nouvelles</h5> 
                                </div>

                                <div class="wow fadeInUpBig" data-wow-delay="0.1s"> 
                                        <?php //include('A_Tp_carousel/coura.php');?>
                                </div> 
                                <div>
                                     <div class="sidebar-widget-area"  style="margin:5px;"> 
                                            <h5 class="title" style="">CRSDI info</h5> 
                                    </div>
                                    <?php //include('admin/contenu_Index/apropos_crsdi.php');?>
                                    <?php include('admin/contenu_Index/about_crsdi.php');?>
                                </div>                            
                          
                                
                                <div> <!-- LES 3 ICONS CONSTITUENT LES LIENS-->
                                    <div class="sidebar-widget-area" id="aboutus">  
                                        <div class="sidebar-widget-area"  style="margin:5px;">
                                            <h5 class="title">Axes d'interventions</h5> 
                                         <?php include('admin/contenu_Index/3icons_lien.php');?>
                                        </div>
                                    </div>
                                </div>

                           
                                <div style="margin-top: 10px"> <!-- LE MEUNU ACTUALITE -->
                                   <?php include('menu_actualites.php');?>
                                </div>    
                                    
                                <div class="tab-content" id="myTabContent"> 
                                 <!-- AFFICHAGE DES ARTICLES D'UNE CELLULE SELECTIONNE -->                               
                                    <?php
                                     $projet_max_afficher=3;   // cette varible est utilise dans le modules suivant!!!!:
                                        // require('admin/troisIncons/paginer_projet.php');
                                        //  require('admin/projets/getProjetRecents.php');
                                        //include("admin/contenu_Index/test.php");
                                     include('admin/contenu_Index/afficher_cellules.php');
                                     ?>
                            </div>
                         
                                <div class="world-catagory-area mt-50"> <!-- LE MEUNU PROJETS EN COURS -->
                                    <?php  //include('menu_projets_en_cours.php');?>
                                </div>
                            </div>
               
                            <!-- ========== Sidebar Area ========== -->
                            <div class="col-12 col-md-8 col-lg-4">
                                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div> <!-- IMAGE DU JOUR-->
                                        <?php include('admin/contenu_Index/image_du_jour.php');?>
                                    </div>    
                                    <div> <!-- C'EST QUOI CRSDI -->
                                        <?php // include('admin/contenu_Index/apropos_crsdi.php');?>
                                    </div>  
                                    <div>
                                        <?php include('admin/contenu_Index/suivez_nous.php');?>
                                    </div>   
                                </div>
                            </div>
                        </div>
                <!-- ====================================================================
                ========================= FIN SECTION 'A'=============================-->
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Laboratoires en image</h5>
                        </div>
                        <div class="wow fadeInUpBig" data-wow-delay="0.5s">
                            <?php include('admin/swip/swiperImgLabo.org.php');?>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <?php include('admin/contenu_index/laboVideo.php');?>

                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

    <?php  require('footer.php');?>