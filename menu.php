
    <?php include("link-css-boot.php"); 
 print " <div class='container-fluid transparencia'>
        <div class='row'>
            <div class='col-sm-12 paddin-0'>

                <nav class='navbar navbar-expand-lg navbar-light sticky-top'>
                    <a class='navbar-brand' href='index.php'><img src='images/ecom-store-logo-mobile.png' alt='imagem-logo-clube-das-armas'></a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>

                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav mr-auto letra-ul-a'>
                            <li class='nav-item active'>
                                <a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='shop.php'>Loja</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='checkout.php'>Minha Conta</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='cart.php'>Carrinho</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='contact.php'>Contato</a>
                            </li>

                        </ul>
                        <form class='form-inline my-2 my-lg-0 p-2' >
                            <input class='form-control mr-sm-2' type='search' placeholder='Procurar' aria-label='Search' required>
                            <button class='btn navbar-btn btn-primary my-2 my-sm-0' type='submit'>Procurar</button>
                        </form>
                        <a href='carrinho.php' class='btn navbar-btn btn-primary right'>
                            <!-- btn navbar-btn btn-primary right begin -->
                            <i class='fa fa-shopping-cart'></i>

                            <span>4 Itens No Carrinho</span>


                        </a><!-- btn navbar-btn btn-primary right finish -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
 ";
 ?>