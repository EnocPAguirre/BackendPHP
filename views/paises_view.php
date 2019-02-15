<ul>

  <?php foreach ($paises as $pais) {  ?>
  <li>
    <a href="pais.php?id=<?php echo $pais['id']; ?>">
    <?php echo $pais['pais']; ?>
    </a>
  </li>
<?php }?>
</ul>
