<?php
	require "classes/Page.php";
	
	class Mypage extends Page
	{
    protected function GetContent() {
    
  }
  		public function FlyMeTOMyPage()
		{
			header("Location: moje.php");
		}
  		public function GetUploadPath()
		{
			$user = $this->_authenticator->GetCurrentUserName();
      $id = $this->_authenticator->GetCurrentUserId();
			$base = getcwd();
			//return "$base\\files\\$user\\";
      return "$base\\files\\$id\\";
		}
  		public function Display($title)
		{
			if($this->PageRequiresAuthenticUser() && !$this->UserIsAuthenticated())
				$this->BackToLanding();
			
			
			print('<!DOCTYPE html>');
			print('<html lang="hr">');
			print($this->GetHead($title));
			print('<body>');
			print($this->GetNavigation());
			print($this->GetContent());
      print($this->GetFoot());
			print('</body>');
			print('</html>');
		}
  		public function GetHead($title)
		{
$styler = <<<END
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
END;

        
        
      $output = '';
			$output .= '<head>';
			$output .= '<title>'.$title.'</title>';   
      
			$output .= $styler;
      
      $output .= '</head>';
			
			return $output;
		}
    
    private function GetFoot()
    {
$script = <<<END
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
END;
return $script;
    
    }

  protected function PageRequiresAuthenticUser() {
    
  }

}

