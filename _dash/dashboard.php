<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="194x194" href="assets/icons/favicon-194x194.png">
    <link rel="mask-icon" href="assets/icons/safari-pinned-tab.svg" color="#0c5647">

    <link rel="manifest" href="manifest.json">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#b19859">

    <link rel="stylesheet" href="assets/css/cssd.css">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/15f55d277b.js" crossorigin="anonymous"></script>
    <title>DS-BackOffice</title>
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

 <!----------------- Start NAVBAR ------------------>
    <nav>
        <a class="navbar-brand" href="#" onclick="return false;"><span>XPTO</span>AF<i class="bars fa-solid fa-bars" onclick="bars()"></i></a>
        <ul class="ulp">
            <li><a href="index.php" aria-label="Logout"><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i></a></li>
        </ul>
        <ul class="uls" id="uls">
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Dashboard1');bars();" aria-label="Dashboard">Dashboard</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Revisao1');bars();" aria-label="Revisão">Revisão</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Insercao1');bars();" aria-label="Revisão">I. Ficha Cliente</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Insercao2');bars();" aria-label="Revisão">I. Apólices</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Insercao3');bars();" aria-label="Revisão">I. Créditos</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('BD1');bars();" aria-label="Revisão">B. Ficha Cliente</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('BD2');bars();" aria-label="Revisão">B. Utilidade</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('BD3');bars();" aria-label="Revisão">B. Tabelação</a></li>
            <li class="sidebar-item"><a href="#" class="" onclick="sidemenu('Report1');bars();" aria-label="Revisão">Report</a></li>
            <li><a href="index.php" aria-label="Logout" onclick="bars();">Logout</a></li>
        </ul>
    </nav>
 <!----------------- END NAVBAR ------------------>

 <!----------------- START SIDEBAR ------------------>
    <div class="sidebar">
        <div class="sidebar-profile">
            <img src="assets/img/test.webp" alt="">
            <div class="usertittle"><mark>&nbsp; Gaspar &nbsp;</mark></div>
            <div class="usertittle2"><span class="indicator"></span>ONLINE</div>
        </div>

        <ul class="sidebar-menu">
            <li class="sidebar-item"><a href="#" id="Dashboard" class="active" onclick="sidemenu('Dashboard1')" aria-label="Dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="sidebar-item"><a href="#" id="Revisao" class="" onclick="sidemenu('Revisao1')" aria-label="Revisão"><i class="fa-solid fa-triangle-exclamation"></i>Revisão</a></li>
            <li class="sidebar-item"><a href="#" id="Insercao" onclick="collapse('collapseIN'); return false;" aria-label="Base de Dados"><i class="fa-solid fa-download"></i>Inserção BD<span data-toggle="collapse" href="#sub-item-1" class="pull-right"><em class="fa fa-plus"></em></span></a>
                <ul id="collapseIN" class="collapse">
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('Insercao1'); collapse('collapseIN')" aria-label="Ficha Cliente"><i class="fa-solid fa-address-card"></i>Ficha Cliente</a></li>
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('Insercao2'); collapse('collapseIN')" aria-label="Utilidade"><i class="fa-solid fa-shield-heart"></i>Apólices</a></li>
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('Insercao3'); collapse('collapseIN')" aria-label="Tabelação"><i class="fa-solid fa-hand-holding-dollar"></i>Créditos</a></li>
                </ul>
            </li>
            <li class="sidebar-item"><a href="#" id="BD" onclick="collapse('collapseBD'); return false;" aria-label="Base de Dados"><i class="fa-solid fa-database"></i>Base de Dados<span data-toggle="collapse" href="#sub-item-1" class="pull-right"><em class="fa fa-plus"></em></span></a>
                <ul id="collapseBD" class="collapse">
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('BD1'); collapse('collapseBD')" aria-label="Ficha Cliente"><i class="fa-solid fa-address-card"></i>Ficha Cliente</a></li>
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('BD2'); collapse('collapseBD')" aria-label="Utilidade"><i class="fa-solid fa-folder-open"></i>Utilidade</a></li>
                    <li><a class="sidebar-item2" href="#" class="" onclick="sidemenu('BD3'); collapse('collapseBD')" aria-label="Tabelação"><i class="fa-solid fa-server"></i>Tabelação</a></li>
                </ul>
            </li>
            <li class="sidebar-item"><a href="#" id="Report" class="" onclick="sidemenu('Report1')" aria-label="Report"><i class="fa-solid fa-bug"></i>Report</a></li>  
            <li class="sidebar-item"><a href="index.php" aria-label="Logout"><i class="fa fa-power-off"></i>Logout</a></li>
        </ul>   
    </div>
 <!----------------- END SIDEBAR ------------------>









 <!--  BOX DIVISON  -->










 
    <div id="Dashboard1" class="BOX block">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Dashboard</i></a></li>
            </ol>
        </div>
        <div class="divison100">
            <div class="divison25 no-padding">
                <div class="panel-widget shadow">
                    <div class="border-right">
                        <div class="widget-icon color-blue"><i class="fa-solid fa-user-group fa-2x"></i></div>
                        <div class="widget-indicator">126</div>
                        <div class="widget-text">Clientes</div>
                    </div> 
                </div>
            </div>
            <div class="divison25 no-padding">
                <div class="panel-widget shadow-down">
                    <div class="border-right">
                        <div class="widget-icon color-green"><i class="fa-solid fa-shield-heart fa-2x"></i></div>
                        <div class="widget-indicator">386</div>
                        <div class="widget-text">Seguros</div>
                    </div>
                </div>
            </div>
            <div class="divison25 no-padding">
            <div class="panel-widget shadow-down">
                    <div class="border-right">
                        <div class="widget-icon color-orange"><i class="fa-solid fa-hand-holding-dollar fa-2x"></i></div>
                        <div class="widget-indicator">193</div>
                        <div class="widget-text">Créditos</div>
                    </div>
                </div>
            </div>
            <div class="divison25 no-padding">
                <div class="panel-widget shadow-down">
                    <div class="">
                        <div class="widget-icon color-red"><i class="fa-solid fa-database fa-2x"></i></div>
                        <div class="widget-indicator">382</div>
                        <div class="widget-text">Registos</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divison50">
            <div class="panel">
                <div class="panel-head panel-info">Updates</div>
                <div class="panel-bottom">
                    <h5><i class="fa-solid fa-thumbtack"></i> Base de Dados - Novo!</h5>
                    <p class="text-justify">
                        Epaa, Base de Dados?!
                        <br><br>
                        Imagina lá... Agora tens uma secção de "Base de Dados".
                        <br>
                        Lá podes encontrar<mark> "Ficha Cliente" </mark>onde podes verificar as informações de um Cliente ou não. 
                    </p>
                </div>
                <div class="panel-bottom">
                    <h5><i class="fa-solid fa-thumbtack"></i> Dashboard - Novo!</i></h5>
                    <p class="text-justify">
                        Professional?, wow... uma Dashboard!
                        <br><br>
                        Resumindo, é<mark> tudo que está a ver agora </mark>nesta página :)) 
                    </p>
                </div>
                <div class="panel-bottom">
                    <h5><i class="fa-solid fa-thumbtack"></i> Back-end?</h5>
                    <p class="text-justify">
                        <mark>"One small step for man, one giant leap for mankind"</mark>
                        <br><br>
                        Um grande passo para a nossa organização enquanto profissinais!
                        <br>
                    </p>
                </div>
            </div>
        </div>	
        <div class="divison25">
            <div class="panel">
                <div class="panel-head panel-info">Avisos Seguros</div>
                <div class="panel-bottom text-center">
                    <h5><i class="fa-solid fa-circle-check"></i> Sem Avisos!</h5>
                </div>
            </div> 
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head panel-info">Avisos Créditos</div>
                <div class="panel-bottom text-center">
                    <h5><i class="fa-solid fa-circle-check"></i> Sem Avisos!</h5>
                </div>
            </div> 
        </div>
        <div class="divison50">
            <div class="panel">
                <div class="panel-head"><i class="fa-solid fa-arrow-down"></i> Frase Inspiradora <i class="fa-solid fa-arrow-down"></i></div>
                <div class="panel-bottom text-justify">
                    <p>O modo como você reúne, administra e usa a informação determina se vencerá ou perderá.</p>
                    <br>
                    <p>Bill Gates <i class="fa-solid fa-circle-check"></i></p>
                </div>
            </div>
        </div>
    </div>







 <!--  BOX DIVISON  -->










    <div id="Revisao1" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Revisão</i></a></li>
            </ol>
        </div>
        <div class="divison50">
            <div class="panel">
                <div class="panel-head panel-info">
                    Apolices
                </div>
                <div class="panel-bottom">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIF</th>
                                <th>Ramo</th>
                                <th>Apólice</th>
                                <th>Data C.</th>
                                <th>Data R.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>616465464</td>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1'); ficha('616465464')"></td>
                            </tr>
                            <tr>
                                <td>616465464</td>
                                <td>Multirriscos</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1'); ficha('616465464')"></td>
                            </tr>
                            <tr>
                                <td>616465464</td>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1'); ficha('616465464')"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="divison50">
            <div class="panel">
                <div class="panel-head panel-info">
                    Apolices
                </div>
                <div class="panel-bottom">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIF</th>
                                <th>Ramo</th>
                                <th>Apólice</th>
                                <th>Data C.</th>
                                <th>Data R.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>616465464</td>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1');ficha('616465464')"></td>
                            </tr>
                            <tr>
                                <td>616465464</td>
                                <td>Multirriscos</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1');ficha('616465464')"></td>
                            </tr>
                            <tr>
                                <td>616465464</td>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                                <td><input type="button" value="Ficha" onclick="sidemenu('BD1');ficha('616465464')"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
       






 <!--  BOX DIVISON  -->









    <div id="Insercao1" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Inserção BD / Ficha Cliente</i></a></li>
            </ol>
        </div>
        <div class="divison25">
            <div class="panel">
                    <div class="panel-head">
                        <h5><i class="fa-solid fa-folder-plus"></i> Inserção Ficha Cliente</h5>
                    </div>
                </div>
            </div>
            <div class="divison100">
                <div class="panel">
                    <div class="panel-bottom">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Primeiro Nome :<br> <input type="text" value=""></td>
                                    <td>Segundo Nome :<br> <input type="text" value=""></td>
                                    <td>Data Nascimento :<br> <input type="text" value=""></td>
                                </tr>
                                <tr>
                                    <td>Contacto :<br> <input type="text" value=""></td>
                                    <td>Email :<br> <input type="text" value=""></td>
                                    <td>Morada :<br> <input type="text" value=""></td>
                                </tr>
                                <tr>
                                    <td>NIF :<br> <input type="text" value=""></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <input type="button" value="Verificar NIF" style="margin-top:15px;">
                    </div>
                </div>
            </div>
            <div class="divison100">
                <div class="panel">
                    <div class="panel-bottom">
                        <h5>Observações</h5>
                        <textarea name="" id="" rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="divison25">
                <div class="panel">
                    <div class="panel-head">
                        <div class="input-nav">
                            <div class="inputs">
                                <input type="button" value="Inserir" aria-label="Inserir">
                            </div>
                            <div class="inputs">
                                <input type="button" value="Cancelar" aria-label="Cancelar" class="back-red">
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
    </div>

    <div id="Insercao2" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Inserção BD / Inserção Apólice</i></a></li>
            </ol>
        </div>
    <div class="divison25">
            <div class="panel">
                <div class="panel-head"><h5><i class="fa-solid fa-folder-plus"></i> Inserção Apólice</h5></div>
            </div>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-bottom">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>NIF Cliente :<br> <input type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Ramo :<br> <input type="text" value=""></td>
                                <td>Apólice :<br> <input type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Data Contratação :<br> <input type="text" value=""></td>
                                <td>Data Revisão :<br> <input type="text" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="button" value="Verificar apolice" style="margin-top:15px;">
                </div>
            </div>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head">
                    <div class="input-nav">
                        <div class="inputs">
                            <input type="button" value="Inserir" aria-label="Inserir">
                        </div>
                        <div class="inputs">
                            <input type="button" value="Cancelar" aria-label="Cancelar" class="back-red">
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <div id="Insercao3" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Inserção BD / Inserção Crédito</i></a></li>
            </ol>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head"><h5><i class="fa-solid fa-folder-plus"></i> Inserção Crédito</h5></div>
            </div>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-bottom">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>NIF Cliente :<br> <input type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Ramo :<br> <input type="text" value=""></td>
                                <td>Apólice :<br> <input type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>Data Contratação :<br> <input type="text" value=""></td>
                                <td>Data Revisão :<br> <input type="text" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head">
                    <div class="input-nav">
                        <div class="inputs">
                            <input type="button" value="Inserir" aria-label="Inserir">
                        </div>
                        <div class="inputs">
                            <input type="button" value="Cancelar" aria-label="Cancelar" class="back-red">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




 <!--  BOX DIVISON  -->










    <div id="BD1" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Base de Dados / Ficha Cliente</i></a></li>
            </ol>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-head">
                    <div class="input-nav">
                        <div class="inputs">
                            <input id="searchF" type="text" class="input-text" placeholder="Search" value="" aria-label="Search">
                        </div>
                        <div class="">
                            <input type="button" class="input-button" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-bottom text-center flex-column">
                    <div class="border-bottom flex-column">
                        <img class="img-client" src="assets/img/test.webp" alt="">
                    </div>
                    <div style="margin-top: 10px;">
                        <h5>Gaspar</h5>
                        <p>da Vida Pereira</p>
                        <br>
                        <h5><mark>&nbsp;CLIENTE&nbsp;</mark></h5>
                    </div>
                    <input type="button" value="Editar" onclick="editaFC();">
                    <input class="input-danger" type="button" value="Eliminar">
                    <input id="EditaFC" type="button" value="Aplicar" class="editaN" onclick="editaFC();">
                </div>
            </div>
            <div class="panel" style="margin-top: 15px;">
                <div class="panel-bottom">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td class="tablecell">1</td>
                                <td class="tablenone"><input type="text" value="1"></td>
                            </tr>
                            <tr>
                                <td>NIF</td>
                                <td class="tablecell">58528455128</td>
                                <td class="tablenone"><input type="text" value="58528455128"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel" style="margin-top: 15px;">
                <div class="panel-head"><h5><i class="fa-solid fa-circle-check"></i> CONTACTADO!</h5></div>
            </div>
        </div>
        <div class="divison75">
            <div class="panel">
                <div class="panel-bottom" style="text-align:left;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Data Nascimento</td>
                                <td class="tablecell">27/03/2003</td>
                                <td class="tablenone"><input type="text" value="27/03/2003"></td>
                            </tr>
                            <tr>
                                <td>Contacto</td>
                                <td class="tablecell">935946575</td>
                                <td class="tablenone"><input type="text" value="27/03/2003"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="tablecell">Melcior.gaspar@reis.com</td>
                                <td class="tablenone"><input type="text" value="27/03/2003"></td>
                            </tr>
                            <tr>
                                <td>Morada</td>
                                <td class="tablecell">Algures no Deserto</td>
                                <td class="tablenone"><input type="text" value="27/03/2003"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel" style="margin-top: 15px;">
                <div class="panel-bottom">
                    <h5>Observações</h5>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at auctor eros, non porttitor arcu. Ut placerat mi a imperdiet pretium. Vestibulum at molestie risus. Sed in ante tempor, interdum sem ut, volutpat ipsum. Nullam iaculis, leo quis rutrum consequat, elit neque suscipit tortor, in accumsan risus odio eu elit. Morbi lobortis leo sit amet enim lobortis gravida. Donec bibendum, dui sit amet pretium vehicula, turpis dui ornare sem, vitae volutpat lorem ligula a nisi. Nulla tempor rutrum enim, nec condimentum libero ullamcorper id.
                    </p>
                </div>
            </div>
            <div class="client-rest" style="padding-right: 3px;">
                <div class="panel">
                    <div class="panel-head panel-info">
                        Apólices
                    </div>
                    <div class="panel-bottom">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ramo</th>
                                <th>Apólice</th>
                                <th>Data C.</th>
                                <th>Data R.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                            <tr>
                                <td>Multirriscos</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                            <tr>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="client-rest" style="padding-left: 3px;">
                <div class="panel">
                    <div class="panel-head panel-info">
                        Créditos
                    </div>
                    <div class="panel-bottom">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ramo</th>
                                <th>Apólice</th>
                                <th>Data C.</th>
                                <th>Data R.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                            <tr>
                                <td>Multirriscos</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                            <tr>
                                <td>Vida Crédito</td>
                                <td>April - 5845115</td>
                                <td>2024/04/02</td>
                                <td>2025/04/02</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="divison100" id="client-restE" style="display: none;">
            <div class="divison50">
                <div class="panel" style="margin-top: 10px;">
                    <div class="panel-head panel-info">
                        April - 5845115
                    </div>
                    <div class="panel-bottom" style="text-align:left;">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Ramo</td>
                                    <td><input type="text" value="Vida Crédito"></td>
                                </tr>
                                <tr>
                                    <td>Apólice</td>
                                    <td><input type="text" value="April - 5845115"></td>
                                </tr>
                                <tr>
                                    <td>Data C.</td>
                                    <td><input type="text" value="2024/04/02"></td>
                                </tr>
                                <tr>
                                    <td>Data R.</td>
                                    <td><input type="text" value="2025/04/02"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-bottom" style="text-align: right;">
                        <input type="button" class="back-red" aria-label="Eliminar" value="Eliminar">
                    </div>
                </div>
                <div class="panel" style="margin-top: 10px;">
                    <div class="panel-head panel-info">
                        April - 5845115
                    </div>
                    <div class="panel-bottom" style="text-align:left;">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Ramo</td>
                                    <td><input type="text" value="Vida Crédito"></td>
                                </tr>
                                <tr>
                                    <td>Apólice</td>
                                    <td><input type="text" value="April - 5845115"></td>
                                </tr>
                                <tr>
                                    <td>Data C.</td>
                                    <td><input type="text" value="2024/04/02"></td>
                                </tr>
                                <tr>
                                    <td>Data R.</td>
                                    <td><input type="text" value="2025/04/02"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-bottom" style="text-align: right;">
                        <input type="button" class="back-red" aria-label="Eliminar" value="Eliminar">
                    </div>
                </div>
            </div>
            <div class="divison50">
                <div class="panel" style="margin-top: 10px;">
                    <div class="panel-head panel-info">
                        April - 5845115
                    </div>
                    <div class="panel-bottom" style="text-align:left;">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Ramo</td>
                                    <td><input type="text" value="Vida Crédito"></td>
                                </tr>
                                <tr>
                                    <td>Apólice</td>
                                    <td><input type="text" value="April - 5845115"></td>
                                </tr>
                                <tr>
                                    <td>Data C.</td>
                                    <td><input type="text" value="2024/04/02"></td>
                                </tr>
                                <tr>
                                    <td>Data R.</td>
                                    <td><input type="text" value="2025/04/02"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-bottom" style="text-align: right;">
                        <input type="button" class="back-red" aria-label="Eliminar" value="Eliminar">
                    </div>
                </div>
                <div class="panel" style="margin-top: 10px;">
                    <div class="panel-head panel-info">
                        April - 5845115
                    </div>
                    <div class="panel-bottom" style="text-align:left;">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Ramo</td>
                                    <td><input type="text" value="Vida Crédito"></td>
                                </tr>
                                <tr>
                                    <td>Apólice</td>
                                    <td><input type="text" value="April - 5845115"></td>
                                </tr>
                                <tr>
                                    <td>Data C.</td>
                                    <td><input type="text" value="2024/04/02"></td>
                                </tr>
                                <tr>
                                    <td>Data R.</td>
                                    <td><input type="text" value="2025/04/02"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-bottom" style="text-align: right;">
                        <input type="button" class="back-red" aria-label="Eliminar" value="Eliminar">
                    </div>
                </div>
            </div>
        </div>
    </div>








 <!--  BOX DIVISON  -->










    <div id="BD2" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Base de Dados / Utilidade</i></a></li>
            </ol>
        </div>
    </div>
    








 <!--  BOX DIVISON  -->











    <div id="BD3" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Base de Dados / Tabelação</i></a></li>
            </ol>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-head">
                    <div class="input-nav">
                        <div class="inputs">
                            <input type="text" class="input-text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="inputs">
                            <input type="button" class="input-button" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-bottom" style="text-align:left;">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data N.</th>
                                <th>NIF</th>
                                <th>Contacto</th>
                                <th>Morada</th>
                                <th>Cliente</th>
                                <th>Obeservações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>GASPAR</td>
                                <td>1985/03/15</td>
                                <td>226859029</td>
                                <td>951654585</td>
                                <td>Rua XPTO</td>
                                <td>SIM</td>
                                <td>É ganda NABO</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Melchior</td>
                                <td>1985/03/15</td>
                                <td>226859029</td>
                                <td>951654585</td>
                                <td>Rua XPTO</td>
                                <td>NÃO</td>
                                <td>É ganda TONO</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rafaela</td>
                                <td>1985/03/15</td>
                                <td>226859029</td>
                                <td>951654585</td>
                                <td>Rua XPTO</td>
                                <td>SIM</td>
                                <td>Nem te digo nem te conto</td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="button" id="clicktest" onclick="test()">
                </div>
            </div>
        </div>
    </div>
    








 <!--  BOX DIVISON  -->












    <div id="Report1" class="BOX none">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#" aria-label="Casa"><i class="fa-solid fa-house fa-sm"></i></i></a></li>
                <li><a href="#" aria-label="Dashboard">/ Report</i></a></li>
            </ol>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head"><h5><i class="fa-solid fa-bug"></i> Report</h5></div>
            </div>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-bottom">
                    Titula a Situação :<br> <input type="text" value="">
                </div>
            </div>
        </div>
        <div class="divison100">
            <div class="panel">
                <div class="panel-bottom">
                    <h5>Observações</h5>
                    <textarea name="" id="" rows="6"></textarea>
                </div>
            </div>
        </div>
        <div class="divison25">
            <div class="panel">
                <div class="panel-head">
                    <div class="input-nav">
                        <div class="inputs">
                            <input type="button" value="Enviar" aria-label="Inserir">
                        </div>
                        <div class="inputs">
                            <input type="button" value="Cancelar" aria-label="Cancelar" class="back-red">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/thejs.js"></script>
</body>
</html>