<?php

$relativePath = str_replace('\\', '/', substr(
    $file,
    strlen(__DIR__) + 1
  ));

$relativeDir = dirname($relativePath);
if (empty($relativeDir) || $relativeDir == ".") {
  $parentPath = "./";
} else {
  $count = count(explode('/', $relativeDir));
  $parentPath = "";
  for ($i=0; $i < $count; $i++) {
    $parentPath = $parentPath . "../";
  }
}

function getPath($path) {
  global $relativePath, $parentPath;

  return $relativePath == $path ? "#" : $parentPath . $path;
}

?>

<h4 id="title">Index</h4>
<nav>
  <ul>
    <li><a href="<?=getPath("")?>">Home</a></li>
    <li>
      <a href="<?=getPath("variables")?>">Variables</a>
      <ul>
        <li>
          <a href="<?=getPath("variables/constants.php")?>">Constants</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="<?=getPath("numeric-expressions.php")?>">Numeric expressions</a>
    </li>
    <li>
      <a href="<?=getPath("strings-management.php")?>">Strings management</a>
    </li>
    <li>
      <a href="<?=getPath("types-conversion.php")?>">Types conversion</a>
    </li>
    <li><a href="<?=getPath("functions.php")?>">Functions</a></li>
    <li><a href="<?=getPath("loops.php")?>">Loops</a></li>
    <li>
      <span>Forms</span>
      <ul>
        <li><a href="<?=getPath("forms/get.php")?>">Get</a></li>
        <li><a href="<?=getPath("forms/post.php")?>">Post</a></li>
      </ul>
    </li>
    <li>
      <span>test</span>
      <ul>
        <li>
          <span>test</span>
          <ul>
            <li>
              <span>test</span>
              <ul>
                <li><a href="<?=getPath("test/test/test/test.php")?>">Test</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</nav>