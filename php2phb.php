<?php
function php2phb(string $sourceFile, string $saveTo){
 $phb = @fopen($saveTo, "w");
   bcompiler_write_header($phb);
   bcompiler_write_file($phb, $sourceFile);
   bcompiler_write_footer($phb);
 @fclose($phb);
}