<div class="wrap">
    <div class="ig-container">
        <div class="mmessage-container">

            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h2><?php _e("Messages", mmg()->domain) ?></h2>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            $table = new MM_Messages_Table();
                            $table->prepare_items();
                            $table->display();
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
