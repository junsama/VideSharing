<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>動画投稿ページ</title>
  </head>
  <body>
    <p>
      <?php
        /***************************
        動画投稿ページファイル
        created 2013/02/19
        author junko_kosen
        ***************************/

        require_once('Lib/Template.php');

        $template_file = 'Upload/index.tpl';
        $controller = new uploadController();
        $template = new Template();
        $template->display($template_file);
      ?>
    </p>
  </body>
</html>
