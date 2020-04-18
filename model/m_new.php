<?php 

	class newspaper {
		public static function get_all_news() {
			$query = "SELECT * FROM new";

			try {
					$db = DB::getDB();
					$statement = $db->prepare($query);
					$statement->execute();
					$result = $statement->fetchAll();
					$statement->closeCursor();

					return $result;
				} catch (PDOException $e) {
					$error_message = $e->getMessage();
					echo "Error query statement: ".$error_message;
				}	
		}

		public static function show_news_by_id($id) {
			$query = "SELECT * FROM new WHERE id = :id_news";

			try {
					$db = DB::getDB();
					$statement = $db -> prepare($query);
					$statement -> bindValue(':id_news',$id);
					$statement-> execute();
					$result = $statement -> fetch();
					$statement -> closeCursor();

					return $result;
				} catch (PDOException $e) {
					$error_message = $e->getMessage();
					echo "Error query statement: ".$error_message;
				}	
		}

		public static function add_news($title, $description, $image, $created_at) {
			$query = "INSERT INTO new(title, description, image, created_at) VALUES (:title, :description, :image, :created_at)";

			try {
				$db = DB::getDB();
				$statement = $db -> prepare($query);
				$statement -> bindValue(':title',$title);
				$statement -> bindValue(':description',$description);
				$statement -> bindValue(':image',$image);
				$statement -> bindValue(':created_at',$created_at);
				$statement -> execute();
				$statement ->closeCursor();
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}
		}

		public static function delete_news_by_id($id) {
			$query = "DELETE FROM new WHERE id = :id";

			try {
				$db = DB::getDB();
				$statement = $db -> prepare($query);
				$statement -> bindValue(':id',$id);
				$statement -> execute();
				$statement ->closeCursor();
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}		
		}

		public static function get_news_by_id($id) {
			$query = "SELECT * FROM new WHERE id = :id";

			try {
				$db = DB::getDB();
				$statement = $db -> prepare($query);
				$statement -> bindValue(':id',$id);
				$statement -> execute();
				$result = $statement -> fetch();
				$statement ->closeCursor();

				return $result;
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error Database'.$error_message;
			}
		}

		public static function update_news_by_id($id, $title, $description, $image, $created_at) {
			$query = "UPDATE new SET title=?, description=?, image=?, created_at=? WHERE id=?";

			try {
				$db = DB::getDB();
				$statement = $db -> prepare($query);
				$statement -> bindParam(1,$title);
				$statement -> bindParam(2,$description);
				$statement -> bindParam(3,$image);
				$statement -> bindParam(4,$created_at);
				$statement -> bindParam(5,$id);
				$statement -> execute();
				$statement -> closeCursor();		
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo 'Error query statement'.$error_message;
			}
		}

	}


 ?>