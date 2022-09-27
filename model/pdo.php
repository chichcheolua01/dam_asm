<?php
    function pdo_get_connection(){
        $dburl = "mysql:host=localhost;dbname=dam_asm;charset=utf8";
        $username = 'root';
        $password = '';

        $connection = new PDO($dburl, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
    /**
    *thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
    * @param string $sql câu lệnh sql
    * @param array $args mảng giá trị cung cấp cho các tham số của $sql
    * @throws PDOException lỗi thực thi câu lệnh
    */

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $connection = pdo_get_connection();
            $stmt = $connection->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e)
        {
            throw $e;
        }
        finally
        {
            unset($connection);
        }
    }

    /**
    *thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
    * @param string $sql câu lệnh sql
    * @param array $args mảng giá trị cung cấp cho các tham số của $sql
    * @return array mảng chứa bản ghi
    * @throws PDOException lỗi thực thi câu lệnh
    */

    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $connection = pdo_get_connection();
            $stmt = $connection->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($connection);
        }
    }

    /**
    *thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
    * @param string $sql câu lệnh sql
    * @param array $args mảng giá trị cung cấp cho các tham số của $sql
    * @return giá trị
    * @throws PDOException lỗi thực thi câu lệnh
    */

    
?>