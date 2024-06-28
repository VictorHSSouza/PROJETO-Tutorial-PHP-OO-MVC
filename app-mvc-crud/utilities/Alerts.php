<?php
    class Alertas {
        public static function success($mensage) { ?>
            <div class="alert text-center alert-success" role="alert">
                <?=$mensage?>
            </div>
        <?php }

        public static function danger($mensage) { ?>
            <div class="alert text-center alert-danger" role="alert">
                <?=$mensage?>
            </div>
        <?php }
    }