<div class="result">
    <?php foreach($reviews as $review): ?>
    <div class="row">
        <p>Дата: <?= date("d.m.Y",strtotime($review['date']))?></p>
        <p>Имя: <?= $review['name']?></p>
        <p>Сообщение: <?= $review['message']?></p>
    </div>
    <?php endforeach; ?>
</div>