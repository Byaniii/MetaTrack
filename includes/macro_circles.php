<div class="circle-grid">
    <div class="circle" style="--percent:<?= abs($percent) ?>;">
        <div class="number"><?= $remaining ?><br><small>kcal left</small></div>
    </div>
    <div class="circle" style="--percent:<?= $proteinPercent ?>;">
        <div class="number"><?= intval($totals['protein']) ?>g<br><small>protein</small></div>
    </div>
    <div class="circle" style="--percent:<?= $fatPercent ?>;">
        <div class="number"><?= intval($totals['fat']) ?>g<br><small>fat</small></div>
    </div>
    <div class="circle" style="--percent:<?= $carbPercent ?>;">
        <div class="number"><?= intval($totals['carbs']) ?>g<br><small>carbs</small></div>
    </div>
</div>
