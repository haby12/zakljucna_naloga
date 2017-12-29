<?php class Poglejvbazo extends CI_Model {


        public function preveri($username,$password)
        {

            $sqlStavek= "select * from users where `username` = '".$username."' and `password` = '".$password."'";    
			
            

			$query = $this->db->query($sqlStavek);

			$row = $query->row();
			
            if (isset($row)){
            
			if ($row->username == $username && $row->password == $password){
                       return(true);
                    }else{
                    	return(false);
                
				}
            }
        }
}