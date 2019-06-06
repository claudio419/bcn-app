<?php

    if (ENV === 'test') {
        ?>
        <div class="container bg-danger">
            <h1 class="text-light center">TEST</h1>
        </div>
        <?php

    }

    if (ENV === 'dev') {
        ?>
        <div class="container bg-success">
            <h1 class="text-light center">DEV</h1>
        </div>
        <?php

    }
?>