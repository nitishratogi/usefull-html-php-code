<html>
    <header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    </header>
    <body>
<?php 
    $folder = [
        'fdfad fad fa sd1'=>[
            'Where can I get some'=>[
                [
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ],[
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ]
            ],
            'Where can I get some'=>[
                [
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ],[
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ]
            ]
        ],
        'f asdf asdf asd fas2'=>[
            'Where can I get some' => [
                [
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ]
            ]
        ],
        'f asdf asdf asd fas3'=>[
            'Where can I get some' => [
                [
                    'What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ]
            ]
        ]
    ];
?>
        <div class="container">
            <div class="col-md-12">
            <?php foreach($folder as $folderKey => $folderValue) { $ranDonID1 = rand(0, 999999999); ?>
                <div id="$ranDonID1">
                    <div class="list-group panel">
                        <a href="#<?= $ranDonID1 ?>" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#<?= $ranDonID1 ?>"><?= $folderKey ?></a>
                        <div class="collapse" id="<?= $ranDonID1 ?>">
                            <?php foreach($folderValue as $videoKey => $videoValue) { $ranDonID2 = rand(0, 999999999);?>
                                <a href="#<?= $ranDonID2; ?>" class="list-group-item" data-toggle="collapse" data-parent="#<?= $ranDonID2; ?>"><?= $ranDonID2; ?>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="collapse list-group-submenu" id="<?= $ranDonID2; ?>">
                                    <?php foreach($videoValue as $noteData) {  $ranDonID3 = rand(0, 999999999);?>

                                        <a href="#<?= $ranDonID3 ?>" class="list-group-item" data-toggle="collapse" data-parent="#<?= $ranDonID3 ?>"> <?= $noteData[0] ?> <i class="fa fa-angle-down"></i></a>

                                        <div class="collapse list-group-submenu list-group-submenu-1" id="<?= $ranDonID3 ?>">
                                            <a href="#" class="list-group-item" data-parent="#<?= $ranDonID3 ?>"><?= $noteData[1] ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>

    </body>
    <script>
        $(document).ready(function(){
            $('.fa-angle-down').parent().click(function(){
                $(this).children().toggleClass('fa-angle-up').toggleClass('fa-angle-down');
            });
        });
    </script>
    <style>
        i {
            float: right;
            color: green;
            position: absolute;
            right: 10px;
            top:10px;
        } 
        .list-group-item{
            padding-left: 2%;
        }
        .list-group-submenu .list-group-item{
            padding-left: 4%;
        }
        .list-group-submenu-1 .list-group-item{
            padding-left: 6%;
        }
    </style>
</html>

