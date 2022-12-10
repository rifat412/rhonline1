<?php
/*
USING FUNCTIONS
DBSelect('my_table', $select, "WHERE fecha = '$fecha'");
DBInsert('my_table', $form_data);
DBUpdate('my_table', $form_data, "WHERE id = '$id'");
DBDelete('my_table', "WHERE id = '$id'");
*/

// Database connection
global $result, $conn;
$conn = mysqli_connect("localhost","root","","rh_online");

/*SELECT*/
// again where clause is left optional
function DBSELECT($table_name, $select='*', $where_clause='', $conn) 
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "SELECT ".$select." FROM ".$table_name." ";
    // append the where statement
    $sql .= $whereSQL;
    // run and return the query result
    $result=$conn->query($sql);
    return $result;
    $conn->close();
}
/*INSERT*/
function DBInsert($table_name, $form_data, $conn)
{
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);
    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)VALUES('".implode("','", $form_data)."')";
    // run and return the query result resource
    $result=$conn->query($sql);
    return $result;
    $conn->close();
}
/*UPDATE*/
// again where clause is left optional
function DBUpdate($table_name, $form_data, $where_clause='', $conn)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";
    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);
    // append the where statement
    $sql .= $whereSQL;
    // run and return the query result
    $result=$conn->query($sql);
    return $result;
    $conn->close();
}
/*DELETE*/
// the where clause is left optional incase the user wants to delete every row!
function DBDelete($table_name, $where_clause='', $conn)
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause)){
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE'){
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        }else{
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;
    // run and return the query result resource
    $result=$conn->query($sql);
    return $result;
    $conn->close();
}
?>