<?php

session_start();

$regValue = $_GET['n'];

?>
<!DOCTYPE html>  
<html>
<style>
	body {
		background-image: url(img\mobile-magic_chanpipatshutterstock.0.1509812513.0.jpg);
		color: white;
	}
</style>  
<body>  
<?php  
$stop_words = file('$_GET['test.txt'];', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$this->extract_common_words( $text, $stop_words)


function extract_common_words($string, $stop_words, $max_count =regValue) {
      $string = preg_replace('/ss+/i', '', $string);
      $string = trim($string); 
      $string = preg_replace('/[^a-zA-Z -]/', '', $string); 
      $string = strtolower($string); 
    
      preg_match_all('/\b.*?\b/i', $string, $match_words);
      $match_words = $match_words[0];
       
      foreach ( $match_words as $key => $item ) {
          if ( $item == '' || in_array(strtolower($item), $stop_words) || strlen($item) <= 3 ) {
              unset($match_words[$key]);
          }
      }  
       
      $word_count = str_word_count( implode(" ", $match_words) , 1); 
      $frequency = array_count_values($word_count);
      arsort($frequency);
      
      $keywords = array_slice($frequency, 0, $max_count);
      return $keywords;
} 
?>  
</body>  
</html>  