<?php
$(document).bind('copy', function(e) { alert('Copy is not allowed !!!'); e.preventDefault(); }); 
$(document).bind('paste',function(e) { alert('Paste is not allowed !!!'); e.preventDefault(); }); 
$(document).bind('cut',function(e) { alert('Cut is not allowed !!!'); e.preventDefault(); }); 
$(document).bind('contextmenu',function(e) { alert('Right Click is not allowed !!!'); e.preventDefault(); });
?>