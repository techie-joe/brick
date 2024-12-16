<?php

function _style($style){ return "<style>$style</style>"; }

function _styleSheet($url){ return "<link rel=\"stylesheet\" media=\"all\" href=\"$url\"/>"; }

function _pre($content,$style=null){
  if (!isset($style) ){ $style='display:block;overflow:auto;width:auto;padding:1em;'; }
  return "<pre style=\"$style\">$content</pre>";
}
function _main($content){
  return "<main id=\"main\">$content</main>";
}

function _backlink(){ return '<a class="_numb _btnlink _backlink" onclick="event.preventDefault();window.history.back()">Back</a>'; }

function _meta(){
  return <<<EOT
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta id="color-scheme" name="color-scheme" content="light dark" />
  <meta id="theme-color" name="theme-color" content="#202020" />
  <!--[if lt IE 9]><script src="//unpkg.com/html5shiv@3.7.3/dist/html5shiv.min.js"></script><![endif]-->
  EOT;
}

function htmlPage($content,$title='(Untitled)',$description='(Undescribed)',$style='',$backlink=0){
  $HOMEURL=HOMEURL;
  $VERSION=VERSION;
  $meta=_meta();
  if($style){ $style = _style($style); }
  $_backlink=''; if($backlink){ $_backlink="<nav>"._backlink()."</nav>"; }
  return <<<EOT
  <!DOCTYPE html>
  <html class="_nojs _scrollbar _a" id="_html" lang="en">
    <!-- primer:htmlPage -->
    <head>
      <meta charset="utf-8" />
      <title>{$title}</title>
      <meta name="description" content="{$description}">
      {$meta}
      <link rel="stylesheet" media="all" href="{$HOMEURL}assets/css/style.css?v={$VERSION}" />
      <link rel="stylesheet" media="all" href="{$HOMEURL}assets/pure/grid.css?v={$VERSION}" />
      {$style}
    </head>
    <body id="_body">
      <main id="_main">
        {$content}
        {$_backlink}
      </main>
      <script type="text/javascript" src="{$HOMEURL}assets/sjs/thm.js?v={$VERSION}" defer="defer"></script>
      <!-- IE needs 512+ bytes: https://techie-joe.github.io/library/html5/ie#ie-needs-512-bytes -->
    </body>
  </html>
  EOT;
}