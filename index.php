<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<div class="container">
    <div class="jumbotron">
        <div style="text-align:center;">
            <div class="punish" >
                <p class="pline"><span style class='label label-danger'>WELCOME</span> PLAYER</p>
                <p style="text-align:center;">Welcome To The (Server Name) Punishment List!</p>
                <p style="text-align:center;"><u>Network Links</p>
                <p style="text-align:center;"><u>Forums</p>
                <a class="report" href="#"><i class="fa fa-list" aria-hidden="true"></i> Forums</a>
                <p style="text-align:center;"></p>
                <p style="text-align:center;"><u>Store</p>                 
                <a class="report" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Store</a>
                
    <div class="jumbotron">
                    <div class="punish" >
                <p class="pline"><span style class='label label-danger'>NOTICE</span> UNFAIRLY BANNED?</p>
                <p style="text-align:center;">If you are unfairly banned,you can report here.</p>
                <a class="report" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> REPORT</a>
            </div>
            <h2></h2>
        </div>

    </div>
</div>
<?php $page->print_footer(false); ?>
