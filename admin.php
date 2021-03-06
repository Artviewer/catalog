<?php
function __autoload($className) {
    if (file_exists('./lib/'.$className . '.php')) {
        require_once './lib/'.$className . '.php';
        return true;
    }
    return false;
}
$action=new Action;
$products=$action->getAllProductsAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="./css/admin.css" rel="stylesheet">
</head>



<body class="home">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">
                <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                    <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                        <div class="search hidden-xs hidden-sm">
                            <input type="text" placeholder="Search" id="search">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">
                                <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <li>
                                    <a href="#" class="icon-info">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span class="label label-primary">3</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <span>JS Krishna</span>
                                                <p class="text-muted small">
                                                    me@jskrishna.com
                                                </p>
                                                <div class="divider">
                                                </div>
                                                <a href="#" class="view btn-sm active">View Profile</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                <tr >
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th class="text-center">
                                        Название товара
                                    </th>
                                    <th class="text-center">
                                        Цена
                                    </th>
                                    <th class="text-center">
                                        Фото
                                    </th>
                                    <th>
                                        Действие
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($products as $key=>$value): ?>
                                    <tr id='addr0'>
                                    <td>
                                        <?= $products[$key]['id'] ?>
                                    </td>
                                    <td>
                                        <input type="text" name='name'  value='<?= $products[$key]['name'] ?>' class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name='price' value='<?= $products[$key]['price'] ?>' class="form-control"/>
                                    </td>
                                    <td>
                                        <img width="50px" src="<?= $products[$key]['image'] ?>">
                                    </td>
                                    <td>
                                        <form action="process.php?action=del" method="post">
                                            <input type="hidden" name="id" value="<?= $products[$key]['id'] ?>">
                                            <input type="submit"  class="btn btn-xs btn-danger" value="Удалить">
                                            </form>
                                            <form action>
                                            <button formaction="process.php?action=page" id="" class="btn btn-xs btn-info">Редактировать</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr id='addr1'></tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
                </div>

                <div>
                    <form action="process.php?action=add" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Добавление товара</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Название товара</label>
                                <div class="col-md-4">
                                    <input id="name" name="name" type="text" placeholder="Введите имя товара" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="price">Цена</label>
                                <div class="col-md-2">
                                    <input id="price" name="price" type="text" placeholder="0" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Описание товара</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>

                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="image">Фото товара</label>
                                <div class="col-md-4">
                                    <input id="image" name="image" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="go"></label>
                                <div class="col-md-4">
                                    <button id="go" name="go" class="btn btn-success">Добавить</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Project Title" name="name">
                <input type="text" placeholder="Post of Post" name="mail">
                <input type="text" placeholder="Author" name="passsword">
                <textarea placeholder="Desicrption"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                <button type="button" class="add-project" data-dismiss="modal">Save</button>
            </div>
</div>






    </div>

</div>

</body>
</html>