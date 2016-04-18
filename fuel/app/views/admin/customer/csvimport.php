<h2>インポート</h2>
<br>
	<!--
<?php if (isset($msg)): ?>
  <fieldset>
    <legend>Result</legend>
    <span style="color:<?=h($msg[0])?>;"><?=h($msg[1])?></span>
  </fieldset>
<?php endif; ?>
 -->
  <form enctype="multipart/form-data" method="post" action="csvupload">
    <fieldset>
      <legend>Select File</legend>
      Filename(CSV ファイルのみ): <input type="file" name="upfile" /><br />
      <input type="submit" value="Upload" />
    </fieldset>
  </form>
 <br>
 <?php echo Html::anchor('admin/customer', '戻る'); ?>
</body>
</html>

