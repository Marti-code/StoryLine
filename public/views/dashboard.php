<?php 
  $title = "StoryLine — Today"; 
  include __DIR__."/partials/header.php"; 
  use App\Security\Csrf;
?>

    <section class="prompt-card">
      <small class="date" data-date></small>
      <h1 class="quote" data-quote></h1>
      <small class="meta" data-meta></small>
    </section>

    <section id="write" class="writer">
      <form id="story-form" method="post" action="/api/story">
        <?= Csrf::inputField() ?>
        <input id="title" name="title" placeholder="Title" maxlength="100" />
        <br>
        <textarea
          id="story-textarea"
          name="content"
          rows="12"
          data-wordlimit="500"
          data-challenge-id="<?= htmlspecialchars(date('Y-m-d'), ENT_QUOTES, 'UTF-8') ?>"
        ></textarea>
        <br>
        <label><input type="checkbox" name="anonymous" value="1">Anonymous</label>
        <br>
        <button type="submit" class="btn primary">Share</button>
      </form>
    </section>

  </main>
</body>
</html>

