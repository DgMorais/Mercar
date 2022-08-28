<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="d-flex justify-content-end fixed-top m-3">
    <div class="message success d-flex align-items-center p-3" onclick="this.classList.add('hidden');">
        <p class="text-message text-center"><?= $message ?></p>
    </div>
</div>
