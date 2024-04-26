<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CREOPLE EDU</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets2/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
       
        <link href="<?php echo base_url()?>css/styles.css" rel="stylesheet">
        <style>
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Menggunakan 100% tinggi viewport untuk center vertikal */
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        margin: 10px;
      }

        

    
</style>

    </head>
    <body>
      <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">CREOPLE EDU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Info</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Kursus</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        
                        <li><a class="dropdown-item" href="<?php echo base_url('kategori/softskill') ?>">SoftSkill</a></li
                        >
                        <li><a class="dropdown-item" href="<?php echo base_url('kategori/desain') ?>">Desain</a></li
                        >
                        <li><a class="dropdown-item" href="<?php echo base_url('kategori/marketing') ?>">Marketing</a></li
                        >
                        <li><a class="dropdown-item" href="<?php echo base_url('kategori/microsoft_office') ?>">Microsoft Office</a></li
                        >
                        <li><a class="dropdown-item" href="<?php echo base_url('kategori/programming') ?>">Programming</a></li
                        >

                    </ul>
                </li>
            </ul>
            <div class="navbar-text">
                <?php if($this->session->userdata('username')){ ?>
                    <span>Selamat Datang <?php echo $this->session->userdata('username')?></span>
                    <a class="btn btn-outline-dark ms-2" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                <?php } else { ?>
                    <a class="btn btn-outline-dark" href="<?php echo base_url('auth/login'); ?>">Login</a>
                <?php } ?>
            </div>
            <form class="d-flex ms-3"> <!-- Menambahkan margin kiri (ms-3) pada form -->
            <button class="btn btn-outline-dark" type="submit">
                <i class="bi-cart-fill me-1"></i>
               
                <?php 
                                $keranjang =  $this->cart->total_items( ). 'items'
                                ?>

                                <?php  echo  anchor('dashboard/detail_keranjang',$keranjang) ?>
            </button>
        </form>
        </div>
    </div>
</nav>
<!-- ... (bagian-bagian selanjutnya) ... -->