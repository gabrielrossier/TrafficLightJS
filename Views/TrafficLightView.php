<div class="Light" id="TrafficLight" data-state = <?= $Light->ActualState?> data-timeout=<?=$Light->timeout?>>

    <div class="<?= $Light->red ? "CircleRed" : "CircleOff" ?>"></div>
    <div class="<?= $Light->yellow ? "CircleYellow" : "CircleOff" ?>"></div>
    <div class="<?= $Light->green ? "CircleGreen" : "CircleOff" ?>"></div>

</div>
<a class="btn" href="index?action=nextLight">&#xbb;</a>
<br>
<a class="btn<?= $Light->AllowHS ?>" href="index?action=nextHS"> HS</a>
