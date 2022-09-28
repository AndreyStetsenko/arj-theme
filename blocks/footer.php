<br/>
<br/>
<br/>
<br/>

<footer>
  <div class="navbar navbar-default">
    <div class="container">
      <div style="display:inline-block; float:right;">

        <ul style="list-style:none;">
          <li style="font-size:12px;line-height:16px;padding:14px 0 0 0px;">
            All Rights Reserved.
            &copy;
            <?php echo escape($name_project); ?> | 2014 - <?php echo date("Y"); ?>
          </li>
        </ul>
      </div>

      <div style="display:inline-block; float:left;">
        <ul style="list-style:none;">
          <li class="payment">
            <?php foreach (get_payment_system('invest') as $item) { ?>
              <a href="<?php echo escape($item['link']); ?>" target="_blank">
                <svg width="60" height="20" role="img" style="margin:12px  8px 0 0;padding:0;">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink"
                       xlink:href="#bm_icon_payment_transparent_<?php echo strtolower(escape($item['value'])); ?>"></use>
                </svg>
              </a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
