<?php
$conn = mysqli_connect("localhost", "root", "qq192837qq", "pj_pc");
 
$query = "select * from pc";

if($result = mysqli_query($conn, $query)){
    $row_num = mysqli_num_rows($result);
    
    echo "{";
    
        echo "\"status\":\"OK\",";
        
        echo "\"rownum\":\"$row_num\",";
    
        echo "\"result\":";
        
            echo "[";
            
                for($i = 0; $i < $row_num; $i++){
                    $row = mysqli_fetch_array($result);
                    echo "{";
                    
                    echo "\"Num\":\"$row[PC_NUMBER]\", \"Status\":\"$row[PC_STATUS]\", \"Temp\":\"$row[PC_TEMP]\"";
                    
                    echo "}";
                    if($i<$row_num-1){
                        echo ",";
                    }
                }
 
                        
                
            echo "]";
            
    echo "}";
}
 
else{
    echo "failed to get data from database.";
}
 
?>