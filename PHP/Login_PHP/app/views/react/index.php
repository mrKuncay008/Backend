<div class="App-header">
    <img src="<?= BASEURL;?>/img/php.svg" class="App-logo" alt="logo" width="240" height="120" />
    <p>
        Edit<code> public/index.php </code> and save to reload.
    </p>
      <a class="App-link" href="https://www.php.net/" rel="noopener noreferrer">
        Learn PHP
      </a>
      <!-- // Memanggil Parameter [''] -->
    <p> Hallo Welcome <?= $data['name']; ?> </p>
    <p> Testing Database<?= $data['conn']; ?> </p>
</div>