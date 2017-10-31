<?php
/**
 * Created by PhpStorm.
 * User: itcyb
 * Date: 10/28/2017
 * Time: 6:30 PM
 */

class QueryBuilder extends Connection
{

    /* select records
     * todo select all records
     * todo select one record
     * todo find records
     * todo find first record
     * todo find last record
     * todo count records
     */

    public static function All($table)
    {
        try {
            $connection = Connection::make();
            $sql = sprintf(
                'select * from %s',
                $table
            );
            $sql = $connection->prepare($sql);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function Select($id, $table)
    {
        try {
            ##code here
            $connection = Connection::make();
            $statement = sprintf(
                'select * from %s where id=%s',
                $table,
                $id
            );
            $statement = $connection->prepare($statement);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            ##handle exceptions here
            return $e->getMessage();
        }
    }

    public static function Find($table, $id)
    {
    }

    public static function First($table)
    {
        try {
            $statement = sprintf(
                'select * from %s',
                $table
            );
            return $statement;
        } catch (Exception $e) {

        }
    }

    public static function Last($table)
    {
        try {
            $statement = sprintf(
                'select * from %s',
                $table
            );
            return $statement;
        } catch (Exception $e) {

        }

    }

    public static function id()
    {

    }

    /*
     * update record
     * todo update record using id
     * todo update records using time created
     * todo update record using column name
     */

    public static function update()
    {

    }

    public static function updateColumn()
    {

    }

    public static function delete($table, $id)
    {

    }

    /*
     * delete record
     * todo delete record using id
     */

    public static function save($table, array $data)
    {

    }


    /*
     *
     * todo insert record
     */

    public function count($table)
    {
        try {
            $statement = sprintf(
                'select * from %s',
                $table
            );
            return $statement;
        } catch (Exception $e) {

        }

    }

}