<?php
namespace Processwire;
?>
<!DOCTYPE html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>404 — <?php echo __('Page not found') ?></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <link rel="shortcut icon" href="<?php echo $favicon ?>">
    <meta http-equiv="cleartype" content="on">

    <link rel="stylesheet" type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <link rel="stylesheet" href="<?php echo $assets ?>css/ghost.min.css" />
  </head>
  <body>
    <main role="main" id="main">
      <div class="gh-app">
          <div class="gh-viewport">
              <div class="gh-view">
                <section class="error-content error-404 js-error-container">
                  <section class="error-details">
                    <section class="error-message">
                      <h1 class="error-code">404</h1>
                      <h2 class="error-description"><?php echo __('Page not found') ?></h2>
                      <a class="error-link" href="<?php echo $blog_url ?>"><?php echo __('Go to the front page') ?> →</a>
                    </section>
                  </section>
                </section>
              </div>
          </div>
      </div>
    </main>
  </body>
</html>