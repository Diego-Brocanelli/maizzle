<?php

/*

|-------------------------------------------------------------------------------
| The staging config              http://jigsaw.tighten.co/docs/site-variables/
|-------------------------------------------------------------------------------
|
| This array contains the default Maizzle config for staging/testing. It's
| used when you do `npm run staging` in the command line, and it will
| be merged on top of your default config.
|
| These settings are tailored for email render testing and debugging.
| Output is similar to production, but with pretty indented code
| and no minification.
|
*/

return [

  /*
  |-------------------------------------------------------------------------------
  | Output transformations
  |-------------------------------------------------------------------------------
  |
  | These settings are tailored for email render testing and debugging.
  | Output is similar to production, but with pretty indented code
  | and no minification.
  |
  */

  'transforms' => [
      'cleanup' => [
          'removeUnusedCss' => true,
          'removeTableWidthCss' => true,
          'preferBgColorAttribute' => true,
      ],
      'minify' => [
          'minifyHtml' => false,
          'minifyCss' => false,
          'maxLineLength' => 500,
      ],
      'prettify' => true,
  ],

  /*
  |-----------------------------------------------------------------------------
  | Jigsaw build defaults
  |-----------------------------------------------------------------------------
  |
  | Leave these alone unless you really know what you're doing.
  |
  */

  'baseUrl' => '',
  'production' => true,
  'build' => [
      'source' => 'source',
      'destination' => 'build_staging',
  ],
];
