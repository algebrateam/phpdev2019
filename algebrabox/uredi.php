<?php
	require "classes/Mypage.php";
	
	class Uredi extends Mypage
	{
		protected function GetContent()
		{
			$this->HandleFormData();
			if(!isset($_GET["id"]) || $this->NotFileOwner($_GET["id"]))
				$this->BackToLanding();
			
			
			$fileId = $_GET["id"];
			
			$q = "SELECT name FROM files WHERE id = $fileId ;";
			
			foreach($this->_database->query($q) as $row)
			{
				$fileName = $row["name"];
			}
			
			$output = "<h2>Uredi datoteku $fileName</h2>";
			
			$output .= '<form method="POST">';
			$output .= '<table><tr>';
			$output .= '<th>Ime datoteke: <input type="text" name="name" value="'.$fileName.'"/></th>';
			$output .= '<th><input type="submit" name="btnSub" value="Preimenuj datoteku"/></th>';
			$output .= '</tr></table>';
			$output .= '<input type="hidden"  name="fileId" value="'.$fileId.'"/>';
			$output .= '<input type="hidden"  name="oldName" value="'.$fileName.'"/>';
			$output .= '</form>';
			
			
			return $output;
		}
		
//		private function GetUploadPath()
//		{
//			$user = $this->_authenticator->GetCurrentUserName();
//      $id = $this->_authenticator->GetCurrentUserId();
//			$base = getcwd();
//			//return "$base\\files\\$user\\";
//      return "$base\\files\\$id\\";
//		}
		
		private function HandleFormData()
		{
			if(!isset($_POST["btnSub"])) return;
			
			$newName = $_POST["name"];
			$oldName = $_POST["oldName"];
			$id = $_POST["fileId"];
			
			$newPath = $this->GetUploadPath().$newName;
			$oldPath = $this->GetUploadPath().$oldName;
			
			if(file_exists($newPath))
			{
				echo "postoji datoteka s odabranim imenom!";
				return;
			}
			
			if(!rename($oldPath, $newPath))
			{
				var_dump($oldPath);
				var_dump($newPath);
				echo "Pogreška u preimenovanju!";
				return;
			}
			
			$q = "UPDATE files SET name=:name WHERE id=:id ;";
			
			if($stmt = $this->_database->prepare($q))
			{
				$stmt->bindParam(":name", $newName, PDO::PARAM_STR, 255);
				$stmt->bindParam(":id", $id, PDO::PARAM_INT);
				
				if($stmt->execute())
				{
					$this->BackToLanding();
				}
				else
				{
					echo "Pogreška u izvršavanju upita!";
					move_uploaded_file($newPath, $oldPath);
				}
			}
			else
			{
				echo "Pogreška u pripremi upita!";
			}
		}
		
		private function NotFileOwner($fileId)
		{
			$ownerId = $this->_authenticator->GetCurrentUserId();
			
			$q = "SELECT 1 FROM files WHERE id = $fileId AND ownerId = $ownerId ;";
			
			$count = 0;
			
			foreach($this->_database->query($q) as $row)
			{
				$count++;
			}
			
			return $count === 0;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new Uredi();
	$site->Display('AlgebraBox Uredi datoteku');